<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\web\UploadedFile;

/**
 * This is the model class for table "tag".
 *
 * @property int $id
 * @property string $name
 * @property string $icon_name
 * @property string $file
 *
 * @property CompanyTag[] $companyTags
 * @property Company[] $companies
 */
class Tag extends \yii\db\ActiveRecord
{
    public $file;
    public $fileDir = 'uploads/';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tag';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'icon_name'], 'string', 'max' => 255],
            [['file'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, svg', 'on' => self::SCENARIO_CREATE],
            [['file'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, svg', 'on' => self::SCENARIO_UPDATE],
        ];
    }

    const SCENARIO_CREATE = 'create';
    const SCENARIO_UPDATE = 'update';

    public function scenarios()
    {
        return ArrayHelper::merge(parent::scenarios(),[
            self::SCENARIO_CREATE => ['name', 'icon_name', 'file'],
            self::SCENARIO_UPDATE => ['name', 'icon_name', 'file'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'file' => 'File icon',
            'icon_name' => 'Icon Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompanyTags()
    {
        return $this->hasMany(CompanyTag::className(), ['tag_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompanies()
    {
        return $this->hasMany(Company::className(), ['id' => 'company_id'])->viaTable('company_tag', ['tag_id' => 'id']);
    }

    public function upload()
    {

        $this->file = UploadedFile::getInstance($this, 'file');

        if($this->file == null && !$this->isNewRecord) return true;

        if ($this->validate()) {
            if(!$this->isNewRecord) {
                unlink($this->fileDir . $this->icon_name);
            }
            $this->icon_name = md5(time().microtime()) . '.' . $this->file->extension;
            copy($this->file->tempName, $this->fileDir . $this->icon_name);
            return true;
        } else {
            return false;
        }

    }

}
