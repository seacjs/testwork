<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property int $id
 * @property string $name
 * @property string $site
 *
 * @property CompanyTag[] $companyTags
 * @property Tag[] $tags
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'site'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'site' => 'Site',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompanyTags()
    {
        return $this->hasMany(CompanyTag::className(), ['company_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTags()
    {
        return $this->hasMany(Tag::className(), ['id' => 'tag_id'])->viaTable('company_tag', ['company_id' => 'id']);
    }


    public function addLinks($linkName, $ids = []) {

        $this->removeLinks($linkName);

        if(is_array($ids)) {
            foreach ($ids as $id) {
                $model = Tag::findOne($id);
                $this->link($linkName, $model);
            }
        }

    }

    public function removeLinks($linkName) {
        foreach($this->$linkName as $model) {
            $this->unlink($linkName, $model, true);
        }
    }

}
