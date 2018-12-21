<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

?>

<div class="popup-bg"></div>
<div class="globalform wrap headerpopup">
    <div class="popup-close">

        Закрыть окно
        <svg class="close-svg">
            <use xlink:href="img/icons/close.svg#close-svg"></use>
        </svg>
    </div>
    <div class="wrap">
        <div class="check-wrap">
            <div class="check scroll">
                <div class="title">выберите ритейлеров, на переговоры с которыми вы хотели бы попасть</div>
                <div class="tabs">
                    <ul class="tabs__caption check__caption-items">
                        <li class="check__caption-item active">
                            <span>Все</span>
                        </li>
                        <?php foreach($tags as $tag):?>
                            <li class="check__caption-item item--fashion">
                                <span><?=$tag->name?></span>
                            </li>
                        <?php endforeach ?>
                    </ul>
                    <div class="double-arrows">
                        <div class="double-arrows--wrap"></div>
                    </div>
                    <div class="check__content-items checkbox">

                        <div class="tabs__content active check__content-item">
                            <?php foreach($allCompanies as $company):?>
                                <div class="checkbox__item">
                                    <input type="checkbox" name="company_id" value="<?=$company->id?>" id="<?=$company->id?>">
                                    <label for="<?=$company->id?>"><?=$company->name?><a href="<?=$company->site?>" class="adress"><?=$company->site?></a></label>
                                </div>
                            <?php endforeach ?>
                        </div>

                        <?php foreach($tags as $tag):?>
                            <div class="tabs__content check__content-item">
                                <?php foreach($tag->companies as $company):?>
                                <div class="checkbox__item">
                                    <input type="checkbox" name="company_id" value="<?=$company->id?>" id="<?=$tag->id.'-'.$company->id?>">
                                    <label for="<?=$tag->id.'-'.$company->id?>"><?=$company->name?><a href="<?=$company->site?>" class="adress"><?=$company->site?></a></label>
                                </div>
                                <?php endforeach ?>
                            </div>
                        <?php endforeach ?>

                   
                    </div>
                </div>
                <button class="btn btn--transparent none-desctop">Cохранить список</button>
            </div>
        </div>
        <div class="choosen">
            <div class="title">Выбранные</div>
            <ul class="choosen__items scroll">
                <li class="choosen__item">Familia<span class="cross"></span></li>
                <li class="choosen__item">Обувь для всей семьи<span class="cross"></span></li>
                <li class="choosen__item">Ralf Ringer<span class="cross"></span></li>
                <li class="choosen__item">Jack Wolfskin<span class="cross"></span></li>
                <li class="choosen__item">34PLAY<span class="cross"></span></li>
                <li class="choosen__item">Incanto<span class="cross"></span></li>
                <li class="choosen__item">Алеф<span class="cross"></span></li>
                <li class="choosen__item">Griol<span class="cross"></span></li>
                <li class="choosen__item">АЛФАВИТ<span class="cross"></span></li>
                <li class="choosen__item">Zenden<span class="cross"></span></li>
            </ul>
            <div class="double-arrows">
                <div class="double-arrows--wrap"></div>
            </div>
            <button class="btn btn--transparent none-mob">Cохранить список</button>
        </div>
    </div>
</div>
<div class="globalform wrap scroll reviewspopup reviewspopup1">
    <div class="popup-close">

        Закрыть окно
        <svg class="close-svg">
            <use xlink:href="img/icons/close.svg#close-svg"></use>
        </svg>
    </div>
    <div class="wrap">
        <div class="popup-review scroll">
            <div class="popup-review__top">
                <div class="popup-review__name">Ольга Семенова</div>
                <div class="popup-review__foto"><img src="img/reviews/woman.jpg" alt="woman"></div>
                <div class="popup-review__descr">
                    <div class="reviews-item__company">Название компании</div>
                    <div class="reviews-item__position">Должность</div>
                </div>
                <div class="popup-review__date">
                    <svg class="calendar">
                        <use xlink:href="img/icons/calendar.svg#calendar"> </use>
                    </svg>
                    <p> <span>Дата посещения: </span>05.06.2018</p>
                </div>
            </div>
            <div class="popup-review__bottom">
                <div class="tabs">
                    <ul class="tabs__caption popup-review__caption">
                        <li class="review-item active"> <span>Видео</span></li>
                        <li class="review-item"> <span>Текст</span></li>
                    </ul>
                    <div class="tabs__content popup-review__content active">
                        <div class="popup-review__video">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/8leorFMy0rg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="tabs__content popup-review__content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="globalform wrap scroll reviewspopup reviewspopup2">
    <div class="popup-close">

        Закрыть окно
        <svg class="close-svg">
            <use xlink:href="img/icons/close.svg#close-svg"></use>
        </svg>
    </div>
    <div class="wrap">
        <div class="popup-review scroll">
            <div class="popup-review__top">
                <div class="popup-review__foto"><img src="img/reviews/woman.jpg" alt="woman"></div>
                <div class="popup-review__descr">
                    <div class="popup-review__name">Ольга Семенова</div>
                    <div class="reviews-item__company">Название компании</div>
                    <div class="reviews-item__position">Должность</div>
                    <div class="popup-review__date">
                        <svg class="calendar">
                            <use xlink:href="img/icons/calendar.svg#calendar"> </use>
                        </svg>
                        <p> <span>Дата посещения: </span>05.06.2018</p>
                    </div>
                </div>
            </div>
            <div class="popup-review__bottom">
                <div class="tabs">
                    <ul class="tabs__caption popup-review__caption">
                        <li class="review-item active"> <span>Видео</span></li>
                        <li class="review-item"> <span>Текст</span></li>
                    </ul>
                    <div class="tabs__content popup-review__content active">
                        <div class="popup-review__video">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/8leorFMy0rg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="tabs__content popup-review__content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="globalform wrap scroll reviewspopup reviewspopup3">
    <div class="popup-close">

        Закрыть окно
        <svg class="close-svg">
            <use xlink:href="img/icons/close.svg#close-svg"></use>
        </svg>
    </div>
    <div class="wrap">
        <div class="popup-review scroll">
            <div class="popup-review__top">
                <div class="popup-review__foto"><img src="img/reviews/woman.jpg" alt="woman"></div>
                <div class="popup-review__descr">
                    <div class="popup-review__name">Ольга Семенова</div>
                    <div class="reviews-item__company">Название компании</div>
                    <div class="reviews-item__position">Должность</div>
                    <div class="popup-review__date">
                        <svg class="calendar">
                            <use xlink:href="img/icons/calendar.svg#calendar"> </use>
                        </svg>
                        <p> <span>Дата посещения: </span>05.06.2018</p>
                    </div>
                </div>
            </div>
            <div class="popup-review__bottom">
                <div class="tabs">
                    <ul class="tabs__caption popup-review__caption">
                        <li class="review-item active"> <span>Видео</span></li>
                        <li class="review-item"> <span>Текст</span></li>
                    </ul>
                    <div class="tabs__content popup-review__content active">
                        <div class="popup-review__video">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/8leorFMy0rg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="tabs__content popup-review__content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="globalform wrap scroll reviewspopup reviewspopup4">
    <div class="popup-close">

        Закрыть окно
        <svg class="close-svg">
            <use xlink:href="img/icons/close.svg#close-svg"></use>
        </svg>
    </div>
    <div class="wrap">
        <div class="popup-review scroll">
            <div class="popup-review__top">
                <div class="popup-review__foto"><img src="img/reviews/woman.jpg" alt="woman"></div>
                <div class="popup-review__descr">
                    <div class="popup-review__name">Ольга Семенова</div>
                    <div class="reviews-item__company">Название компании</div>
                    <div class="reviews-item__position">Должность</div>
                    <div class="popup-review__date">
                        <svg class="calendar">
                            <use xlink:href="img/icons/calendar.svg#calendar"> </use>
                        </svg>
                        <p> <span>Дата посещения: </span>05.06.2018</p>
                    </div>
                </div>
            </div>
            <div class="popup-review__bottom">
                <div class="tabs">
                    <ul class="tabs__caption popup-review__caption">
                        <li class="review-item active"> <span>Видео</span></li>
                        <li class="review-item"> <span>Текст</span></li>
                    </ul>
                    <div class="tabs__content popup-review__content active">
                        <div class="popup-review__video">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/8leorFMy0rg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="tabs__content popup-review__content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="globalform wrap scroll reviewspopup reviewspopup5">
    <div class="popup-close">

        Закрыть окно
        <svg class="close-svg">
            <use xlink:href="img/icons/close.svg#close-svg"></use>
        </svg>
    </div>
    <div class="wrap">
        <div class="popup-review scroll">
            <div class="popup-review__top">
                <div class="popup-review__foto"><img src="img/reviews/woman.jpg" alt="woman"></div>
                <div class="popup-review__descr">
                    <div class="popup-review__name">Ольга Семенова</div>
                    <div class="reviews-item__company">Название компании</div>
                    <div class="reviews-item__position">Должность</div>
                    <div class="popup-review__date">
                        <svg class="calendar">
                            <use xlink:href="img/icons/calendar.svg#calendar"> </use>
                        </svg>
                        <p> <span>Дата посещения: </span>05.06.2018</p>
                    </div>
                </div>
            </div>
            <div class="popup-review__bottom">
                <div class="tabs">
                    <ul class="tabs__caption popup-review__caption">
                        <li class="review-item active"> <span>Видео</span></li>
                        <li class="review-item"> <span>Текст</span></li>
                    </ul>
                    <div class="tabs__content popup-review__content active">
                        <div class="popup-review__video">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/8leorFMy0rg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="tabs__content popup-review__content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="globalform wrap scroll reviewspopup reviewspopup6">
    <div class="popup-close">

        Закрыть окно
        <svg class="close-svg">
            <use xlink:href="img/icons/close.svg#close-svg"></use>
        </svg>
    </div>
    <div class="wrap">
        <div class="popup-review scroll">
            <div class="popup-review__top">
                <div class="popup-review__foto"><img src="img/reviews/woman.jpg" alt="woman"></div>
                <div class="popup-review__descr">
                    <div class="popup-review__name">Ольга Семенова</div>
                    <div class="reviews-item__company">Название компании</div>
                    <div class="reviews-item__position">Должность</div>
                    <div class="popup-review__date">
                        <svg class="calendar">
                            <use xlink:href="img/icons/calendar.svg#calendar"> </use>
                        </svg>
                        <p> <span>Дата посещения: </span>05.06.2018</p>
                    </div>
                </div>
            </div>
            <div class="popup-review__bottom">
                <div class="tabs">
                    <ul class="tabs__caption popup-review__caption">
                        <li class="review-item active"> <span>Видео</span></li>
                        <li class="review-item"> <span>Текст</span></li>
                    </ul>
                    <div class="tabs__content popup-review__content active">
                        <div class="popup-review__video">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/8leorFMy0rg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="tabs__content popup-review__content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="header">
    <div class="header-overlay">
        <div class="wrap">
            <div class="block__left">
                <div class="header-overlay">
                    <div class="logo-wrap">
                        <div class="logo">
                            <svg class="logo-color">
                                <use xlink:href="img/logo.svg#logo"> </use>
                            </svg>
                        </div>
                    </div>
                    <div class="header__dates">
                        <ul class="date__items">
                            <li class="dates__item none-mob">5.06 - 6.06</li>
                            <li class="dates__item">5.09 - 6.09</li>
                            <li class="dates__item active">
                                <div class="arrow arrow-top"></div>
                                <svg class="calendar">
                                    <use xlink:href="img/icons/calendar.svg#calendar"> </use>
                                </svg><span>6.12</span>
                                <div class="arrow arrow-bottom"></div>
                            </li>
                            <li class="dates__item">31.01</li>
                            <li class="dates__item none-mob">20.02</li>
                            <li class="dates__item none-mob">4.04</li>
                            <li class="dates__item none-mob">6.06</li>
                            <li class="dates__item none-mob">4.07</li>
                            <li class="dates__item none-mob">5.09</li>
                            <li class="dates__item none-mob">3.10</li>
                            <li class="dates__item none-mob">7.11</li>
                        </ul>
                    </div>
                    <div class="header__main">
                        <div class="header__title">
                            <div class="subtitle">Центр переговоров</div>
                            <div class="lines"></div>
                            <div class="main-title">Retailer Недвижимость</div>
                        </div>
                        <div class="header__info">
                            <div class="header__">
                                <p class="title">Event Hall Даниловский</p>
                                <p>Москва, ул. Дубининская, д.71, стр.5</p>
                            </div>
                            <svg class="marker">
                                <use xlink:href="img/icons/marker.svg#marker"> </use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block__right registration">
                <div class="registration__title"><a href="#" class="title">
                        <svg class="register">
                            <use xlink:href="img/icons/register.svg#register"> </use>
                        </svg>Регистрация на переговоры</a><a href="#" class="login">Вход</a></div>
                <div class="registration__form">
                    <form action="#">
                        <div class="form-line">
                            <label for="name">Имя</label>
                            <input type="text" name="name" id="name">
                        </div>
                        <div class="tabs">
                            <div class="form-line">
                                <ul class="tabs__caption">
                                    <li class="btn btn--tabs active">Ищу площади</li>
                                    <li class="btn btn--tabs">Предлагаю площади</li>
                                </ul>
                            </div>
                            <div class="form-line">
                                <label for="tel">Номер</label>
                                <div class="intl-tel-input allow-dropdown"><div class="flag-container"><div class="selected-flag" role="combobox" aria-owns="country-listbox" tabindex="0" title="United States: +1"><div class="iti-flag us"></div><div class="iti-arrow"></div></div><ul class="country-list hide" id="country-listbox" aria-expanded="false" role="listbox" aria-activedescendant="iti-item-us"><li class="country preferred active" id="iti-item-us" role="option" data-dial-code="1" data-country-code="us" aria-selected="true"><div class="flag-box"><div class="iti-flag us"></div></div><span class="country-name">United States</span><span class="dial-code">+1</span></li><li class="country preferred" id="iti-item-gb" role="option" data-dial-code="44" data-country-code="gb"><div class="flag-box"><div class="iti-flag gb"></div></div><span class="country-name">United Kingdom</span><span class="dial-code">+44</span></li><li class="divider" role="separator" aria-disabled="true"></li><li class="country standard" id="iti-item-af" role="option" data-dial-code="93" data-country-code="af"><div class="flag-box"><div class="iti-flag af"></div></div><span class="country-name">Afghanistan (‫افغانستان‬‎)</span><span class="dial-code">+93</span></li><li class="country standard" id="iti-item-al" role="option" data-dial-code="355" data-country-code="al"><div class="flag-box"><div class="iti-flag al"></div></div><span class="country-name">Albania (Shqipëri)</span><span class="dial-code">+355</span></li><li class="country standard" id="iti-item-dz" role="option" data-dial-code="213" data-country-code="dz"><div class="flag-box"><div class="iti-flag dz"></div></div><span class="country-name">Algeria (‫الجزائر‬‎)</span><span class="dial-code">+213</span></li><li class="country standard" id="iti-item-as" role="option" data-dial-code="1684" data-country-code="as"><div class="flag-box"><div class="iti-flag as"></div></div><span class="country-name">American Samoa</span><span class="dial-code">+1684</span></li><li class="country standard" id="iti-item-ad" role="option" data-dial-code="376" data-country-code="ad"><div class="flag-box"><div class="iti-flag ad"></div></div><span class="country-name">Andorra</span><span class="dial-code">+376</span></li><li class="country standard" id="iti-item-ao" role="option" data-dial-code="244" data-country-code="ao"><div class="flag-box"><div class="iti-flag ao"></div></div><span class="country-name">Angola</span><span class="dial-code">+244</span></li><li class="country standard" id="iti-item-ai" role="option" data-dial-code="1264" data-country-code="ai"><div class="flag-box"><div class="iti-flag ai"></div></div><span class="country-name">Anguilla</span><span class="dial-code">+1264</span></li><li class="country standard" id="iti-item-ag" role="option" data-dial-code="1268" data-country-code="ag"><div class="flag-box"><div class="iti-flag ag"></div></div><span class="country-name">Antigua and Barbuda</span><span class="dial-code">+1268</span></li><li class="country standard" id="iti-item-ar" role="option" data-dial-code="54" data-country-code="ar"><div class="flag-box"><div class="iti-flag ar"></div></div><span class="country-name">Argentina</span><span class="dial-code">+54</span></li><li class="country standard" id="iti-item-am" role="option" data-dial-code="374" data-country-code="am"><div class="flag-box"><div class="iti-flag am"></div></div><span class="country-name">Armenia (Հայաստան)</span><span class="dial-code">+374</span></li><li class="country standard" id="iti-item-aw" role="option" data-dial-code="297" data-country-code="aw"><div class="flag-box"><div class="iti-flag aw"></div></div><span class="country-name">Aruba</span><span class="dial-code">+297</span></li><li class="country standard" id="iti-item-au" role="option" data-dial-code="61" data-country-code="au"><div class="flag-box"><div class="iti-flag au"></div></div><span class="country-name">Australia</span><span class="dial-code">+61</span></li><li class="country standard" id="iti-item-at" role="option" data-dial-code="43" data-country-code="at"><div class="flag-box"><div class="iti-flag at"></div></div><span class="country-name">Austria (Österreich)</span><span class="dial-code">+43</span></li><li class="country standard" id="iti-item-az" role="option" data-dial-code="994" data-country-code="az"><div class="flag-box"><div class="iti-flag az"></div></div><span class="country-name">Azerbaijan (Azərbaycan)</span><span class="dial-code">+994</span></li><li class="country standard" id="iti-item-bs" role="option" data-dial-code="1242" data-country-code="bs"><div class="flag-box"><div class="iti-flag bs"></div></div><span class="country-name">Bahamas</span><span class="dial-code">+1242</span></li><li class="country standard" id="iti-item-bh" role="option" data-dial-code="973" data-country-code="bh"><div class="flag-box"><div class="iti-flag bh"></div></div><span class="country-name">Bahrain (‫البحرين‬‎)</span><span class="dial-code">+973</span></li><li class="country standard" id="iti-item-bd" role="option" data-dial-code="880" data-country-code="bd"><div class="flag-box"><div class="iti-flag bd"></div></div><span class="country-name">Bangladesh (বাংলাদেশ)</span><span class="dial-code">+880</span></li><li class="country standard" id="iti-item-bb" role="option" data-dial-code="1246" data-country-code="bb"><div class="flag-box"><div class="iti-flag bb"></div></div><span class="country-name">Barbados</span><span class="dial-code">+1246</span></li><li class="country standard" id="iti-item-by" role="option" data-dial-code="375" data-country-code="by"><div class="flag-box"><div class="iti-flag by"></div></div><span class="country-name">Belarus (Беларусь)</span><span class="dial-code">+375</span></li><li class="country standard" id="iti-item-be" role="option" data-dial-code="32" data-country-code="be"><div class="flag-box"><div class="iti-flag be"></div></div><span class="country-name">Belgium (België)</span><span class="dial-code">+32</span></li><li class="country standard" id="iti-item-bz" role="option" data-dial-code="501" data-country-code="bz"><div class="flag-box"><div class="iti-flag bz"></div></div><span class="country-name">Belize</span><span class="dial-code">+501</span></li><li class="country standard" id="iti-item-bj" role="option" data-dial-code="229" data-country-code="bj"><div class="flag-box"><div class="iti-flag bj"></div></div><span class="country-name">Benin (Bénin)</span><span class="dial-code">+229</span></li><li class="country standard" id="iti-item-bm" role="option" data-dial-code="1441" data-country-code="bm"><div class="flag-box"><div class="iti-flag bm"></div></div><span class="country-name">Bermuda</span><span class="dial-code">+1441</span></li><li class="country standard" id="iti-item-bt" role="option" data-dial-code="975" data-country-code="bt"><div class="flag-box"><div class="iti-flag bt"></div></div><span class="country-name">Bhutan (འབྲུག)</span><span class="dial-code">+975</span></li><li class="country standard" id="iti-item-bo" role="option" data-dial-code="591" data-country-code="bo"><div class="flag-box"><div class="iti-flag bo"></div></div><span class="country-name">Bolivia</span><span class="dial-code">+591</span></li><li class="country standard" id="iti-item-ba" role="option" data-dial-code="387" data-country-code="ba"><div class="flag-box"><div class="iti-flag ba"></div></div><span class="country-name">Bosnia and Herzegovina (Босна и Херцеговина)</span><span class="dial-code">+387</span></li><li class="country standard" id="iti-item-bw" role="option" data-dial-code="267" data-country-code="bw"><div class="flag-box"><div class="iti-flag bw"></div></div><span class="country-name">Botswana</span><span class="dial-code">+267</span></li><li class="country standard" id="iti-item-br" role="option" data-dial-code="55" data-country-code="br"><div class="flag-box"><div class="iti-flag br"></div></div><span class="country-name">Brazil (Brasil)</span><span class="dial-code">+55</span></li><li class="country standard" id="iti-item-io" role="option" data-dial-code="246" data-country-code="io"><div class="flag-box"><div class="iti-flag io"></div></div><span class="country-name">British Indian Ocean Territory</span><span class="dial-code">+246</span></li><li class="country standard" id="iti-item-vg" role="option" data-dial-code="1284" data-country-code="vg"><div class="flag-box"><div class="iti-flag vg"></div></div><span class="country-name">British Virgin Islands</span><span class="dial-code">+1284</span></li><li class="country standard" id="iti-item-bn" role="option" data-dial-code="673" data-country-code="bn"><div class="flag-box"><div class="iti-flag bn"></div></div><span class="country-name">Brunei</span><span class="dial-code">+673</span></li><li class="country standard" id="iti-item-bg" role="option" data-dial-code="359" data-country-code="bg"><div class="flag-box"><div class="iti-flag bg"></div></div><span class="country-name">Bulgaria (България)</span><span class="dial-code">+359</span></li><li class="country standard" id="iti-item-bf" role="option" data-dial-code="226" data-country-code="bf"><div class="flag-box"><div class="iti-flag bf"></div></div><span class="country-name">Burkina Faso</span><span class="dial-code">+226</span></li><li class="country standard" id="iti-item-bi" role="option" data-dial-code="257" data-country-code="bi"><div class="flag-box"><div class="iti-flag bi"></div></div><span class="country-name">Burundi (Uburundi)</span><span class="dial-code">+257</span></li><li class="country standard" id="iti-item-kh" role="option" data-dial-code="855" data-country-code="kh"><div class="flag-box"><div class="iti-flag kh"></div></div><span class="country-name">Cambodia (កម្ពុជា)</span><span class="dial-code">+855</span></li><li class="country standard" id="iti-item-cm" role="option" data-dial-code="237" data-country-code="cm"><div class="flag-box"><div class="iti-flag cm"></div></div><span class="country-name">Cameroon (Cameroun)</span><span class="dial-code">+237</span></li><li class="country standard" id="iti-item-ca" role="option" data-dial-code="1" data-country-code="ca"><div class="flag-box"><div class="iti-flag ca"></div></div><span class="country-name">Canada</span><span class="dial-code">+1</span></li><li class="country standard" id="iti-item-cv" role="option" data-dial-code="238" data-country-code="cv"><div class="flag-box"><div class="iti-flag cv"></div></div><span class="country-name">Cape Verde (Kabu Verdi)</span><span class="dial-code">+238</span></li><li class="country standard" id="iti-item-bq" role="option" data-dial-code="599" data-country-code="bq"><div class="flag-box"><div class="iti-flag bq"></div></div><span class="country-name">Caribbean Netherlands</span><span class="dial-code">+599</span></li><li class="country standard" id="iti-item-ky" role="option" data-dial-code="1345" data-country-code="ky"><div class="flag-box"><div class="iti-flag ky"></div></div><span class="country-name">Cayman Islands</span><span class="dial-code">+1345</span></li><li class="country standard" id="iti-item-cf" role="option" data-dial-code="236" data-country-code="cf"><div class="flag-box"><div class="iti-flag cf"></div></div><span class="country-name">Central African Republic (République centrafricaine)</span><span class="dial-code">+236</span></li><li class="country standard" id="iti-item-td" role="option" data-dial-code="235" data-country-code="td"><div class="flag-box"><div class="iti-flag td"></div></div><span class="country-name">Chad (Tchad)</span><span class="dial-code">+235</span></li><li class="country standard" id="iti-item-cl" role="option" data-dial-code="56" data-country-code="cl"><div class="flag-box"><div class="iti-flag cl"></div></div><span class="country-name">Chile</span><span class="dial-code">+56</span></li><li class="country standard" id="iti-item-cn" role="option" data-dial-code="86" data-country-code="cn"><div class="flag-box"><div class="iti-flag cn"></div></div><span class="country-name">China (中国)</span><span class="dial-code">+86</span></li><li class="country standard" id="iti-item-cx" role="option" data-dial-code="61" data-country-code="cx"><div class="flag-box"><div class="iti-flag cx"></div></div><span class="country-name">Christmas Island</span><span class="dial-code">+61</span></li><li class="country standard" id="iti-item-cc" role="option" data-dial-code="61" data-country-code="cc"><div class="flag-box"><div class="iti-flag cc"></div></div><span class="country-name">Cocos (Keeling) Islands</span><span class="dial-code">+61</span></li><li class="country standard" id="iti-item-co" role="option" data-dial-code="57" data-country-code="co"><div class="flag-box"><div class="iti-flag co"></div></div><span class="country-name">Colombia</span><span class="dial-code">+57</span></li><li class="country standard" id="iti-item-km" role="option" data-dial-code="269" data-country-code="km"><div class="flag-box"><div class="iti-flag km"></div></div><span class="country-name">Comoros (‫جزر القمر‬‎)</span><span class="dial-code">+269</span></li><li class="country standard" id="iti-item-cd" role="option" data-dial-code="243" data-country-code="cd"><div class="flag-box"><div class="iti-flag cd"></div></div><span class="country-name">Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)</span><span class="dial-code">+243</span></li><li class="country standard" id="iti-item-cg" role="option" data-dial-code="242" data-country-code="cg"><div class="flag-box"><div class="iti-flag cg"></div></div><span class="country-name">Congo (Republic) (Congo-Brazzaville)</span><span class="dial-code">+242</span></li><li class="country standard" id="iti-item-ck" role="option" data-dial-code="682" data-country-code="ck"><div class="flag-box"><div class="iti-flag ck"></div></div><span class="country-name">Cook Islands</span><span class="dial-code">+682</span></li><li class="country standard" id="iti-item-cr" role="option" data-dial-code="506" data-country-code="cr"><div class="flag-box"><div class="iti-flag cr"></div></div><span class="country-name">Costa Rica</span><span class="dial-code">+506</span></li><li class="country standard" id="iti-item-ci" role="option" data-dial-code="225" data-country-code="ci"><div class="flag-box"><div class="iti-flag ci"></div></div><span class="country-name">Côte d’Ivoire</span><span class="dial-code">+225</span></li><li class="country standard" id="iti-item-hr" role="option" data-dial-code="385" data-country-code="hr"><div class="flag-box"><div class="iti-flag hr"></div></div><span class="country-name">Croatia (Hrvatska)</span><span class="dial-code">+385</span></li><li class="country standard" id="iti-item-cu" role="option" data-dial-code="53" data-country-code="cu"><div class="flag-box"><div class="iti-flag cu"></div></div><span class="country-name">Cuba</span><span class="dial-code">+53</span></li><li class="country standard" id="iti-item-cw" role="option" data-dial-code="599" data-country-code="cw"><div class="flag-box"><div class="iti-flag cw"></div></div><span class="country-name">Curaçao</span><span class="dial-code">+599</span></li><li class="country standard" id="iti-item-cy" role="option" data-dial-code="357" data-country-code="cy"><div class="flag-box"><div class="iti-flag cy"></div></div><span class="country-name">Cyprus (Κύπρος)</span><span class="dial-code">+357</span></li><li class="country standard" id="iti-item-cz" role="option" data-dial-code="420" data-country-code="cz"><div class="flag-box"><div class="iti-flag cz"></div></div><span class="country-name">Czech Republic (Česká republika)</span><span class="dial-code">+420</span></li><li class="country standard" id="iti-item-dk" role="option" data-dial-code="45" data-country-code="dk"><div class="flag-box"><div class="iti-flag dk"></div></div><span class="country-name">Denmark (Danmark)</span><span class="dial-code">+45</span></li><li class="country standard" id="iti-item-dj" role="option" data-dial-code="253" data-country-code="dj"><div class="flag-box"><div class="iti-flag dj"></div></div><span class="country-name">Djibouti</span><span class="dial-code">+253</span></li><li class="country standard" id="iti-item-dm" role="option" data-dial-code="1767" data-country-code="dm"><div class="flag-box"><div class="iti-flag dm"></div></div><span class="country-name">Dominica</span><span class="dial-code">+1767</span></li><li class="country standard" id="iti-item-do" role="option" data-dial-code="1" data-country-code="do"><div class="flag-box"><div class="iti-flag do"></div></div><span class="country-name">Dominican Republic (República Dominicana)</span><span class="dial-code">+1</span></li><li class="country standard" id="iti-item-ec" role="option" data-dial-code="593" data-country-code="ec"><div class="flag-box"><div class="iti-flag ec"></div></div><span class="country-name">Ecuador</span><span class="dial-code">+593</span></li><li class="country standard" id="iti-item-eg" role="option" data-dial-code="20" data-country-code="eg"><div class="flag-box"><div class="iti-flag eg"></div></div><span class="country-name">Egypt (‫مصر‬‎)</span><span class="dial-code">+20</span></li><li class="country standard" id="iti-item-sv" role="option" data-dial-code="503" data-country-code="sv"><div class="flag-box"><div class="iti-flag sv"></div></div><span class="country-name">El Salvador</span><span class="dial-code">+503</span></li><li class="country standard" id="iti-item-gq" role="option" data-dial-code="240" data-country-code="gq"><div class="flag-box"><div class="iti-flag gq"></div></div><span class="country-name">Equatorial Guinea (Guinea Ecuatorial)</span><span class="dial-code">+240</span></li><li class="country standard" id="iti-item-er" role="option" data-dial-code="291" data-country-code="er"><div class="flag-box"><div class="iti-flag er"></div></div><span class="country-name">Eritrea</span><span class="dial-code">+291</span></li><li class="country standard" id="iti-item-ee" role="option" data-dial-code="372" data-country-code="ee"><div class="flag-box"><div class="iti-flag ee"></div></div><span class="country-name">Estonia (Eesti)</span><span class="dial-code">+372</span></li><li class="country standard" id="iti-item-et" role="option" data-dial-code="251" data-country-code="et"><div class="flag-box"><div class="iti-flag et"></div></div><span class="country-name">Ethiopia</span><span class="dial-code">+251</span></li><li class="country standard" id="iti-item-fk" role="option" data-dial-code="500" data-country-code="fk"><div class="flag-box"><div class="iti-flag fk"></div></div><span class="country-name">Falkland Islands (Islas Malvinas)</span><span class="dial-code">+500</span></li><li class="country standard" id="iti-item-fo" role="option" data-dial-code="298" data-country-code="fo"><div class="flag-box"><div class="iti-flag fo"></div></div><span class="country-name">Faroe Islands (Føroyar)</span><span class="dial-code">+298</span></li><li class="country standard" id="iti-item-fj" role="option" data-dial-code="679" data-country-code="fj"><div class="flag-box"><div class="iti-flag fj"></div></div><span class="country-name">Fiji</span><span class="dial-code">+679</span></li><li class="country standard" id="iti-item-fi" role="option" data-dial-code="358" data-country-code="fi"><div class="flag-box"><div class="iti-flag fi"></div></div><span class="country-name">Finland (Suomi)</span><span class="dial-code">+358</span></li><li class="country standard" id="iti-item-fr" role="option" data-dial-code="33" data-country-code="fr"><div class="flag-box"><div class="iti-flag fr"></div></div><span class="country-name">France</span><span class="dial-code">+33</span></li><li class="country standard" id="iti-item-gf" role="option" data-dial-code="594" data-country-code="gf"><div class="flag-box"><div class="iti-flag gf"></div></div><span class="country-name">French Guiana (Guyane française)</span><span class="dial-code">+594</span></li><li class="country standard" id="iti-item-pf" role="option" data-dial-code="689" data-country-code="pf"><div class="flag-box"><div class="iti-flag pf"></div></div><span class="country-name">French Polynesia (Polynésie française)</span><span class="dial-code">+689</span></li><li class="country standard" id="iti-item-ga" role="option" data-dial-code="241" data-country-code="ga"><div class="flag-box"><div class="iti-flag ga"></div></div><span class="country-name">Gabon</span><span class="dial-code">+241</span></li><li class="country standard" id="iti-item-gm" role="option" data-dial-code="220" data-country-code="gm"><div class="flag-box"><div class="iti-flag gm"></div></div><span class="country-name">Gambia</span><span class="dial-code">+220</span></li><li class="country standard" id="iti-item-ge" role="option" data-dial-code="995" data-country-code="ge"><div class="flag-box"><div class="iti-flag ge"></div></div><span class="country-name">Georgia (საქართველო)</span><span class="dial-code">+995</span></li><li class="country standard" id="iti-item-de" role="option" data-dial-code="49" data-country-code="de"><div class="flag-box"><div class="iti-flag de"></div></div><span class="country-name">Germany (Deutschland)</span><span class="dial-code">+49</span></li><li class="country standard" id="iti-item-gh" role="option" data-dial-code="233" data-country-code="gh"><div class="flag-box"><div class="iti-flag gh"></div></div><span class="country-name">Ghana (Gaana)</span><span class="dial-code">+233</span></li><li class="country standard" id="iti-item-gi" role="option" data-dial-code="350" data-country-code="gi"><div class="flag-box"><div class="iti-flag gi"></div></div><span class="country-name">Gibraltar</span><span class="dial-code">+350</span></li><li class="country standard" id="iti-item-gr" role="option" data-dial-code="30" data-country-code="gr"><div class="flag-box"><div class="iti-flag gr"></div></div><span class="country-name">Greece (Ελλάδα)</span><span class="dial-code">+30</span></li><li class="country standard" id="iti-item-gl" role="option" data-dial-code="299" data-country-code="gl"><div class="flag-box"><div class="iti-flag gl"></div></div><span class="country-name">Greenland (Kalaallit Nunaat)</span><span class="dial-code">+299</span></li><li class="country standard" id="iti-item-gd" role="option" data-dial-code="1473" data-country-code="gd"><div class="flag-box"><div class="iti-flag gd"></div></div><span class="country-name">Grenada</span><span class="dial-code">+1473</span></li><li class="country standard" id="iti-item-gp" role="option" data-dial-code="590" data-country-code="gp"><div class="flag-box"><div class="iti-flag gp"></div></div><span class="country-name">Guadeloupe</span><span class="dial-code">+590</span></li><li class="country standard" id="iti-item-gu" role="option" data-dial-code="1671" data-country-code="gu"><div class="flag-box"><div class="iti-flag gu"></div></div><span class="country-name">Guam</span><span class="dial-code">+1671</span></li><li class="country standard" id="iti-item-gt" role="option" data-dial-code="502" data-country-code="gt"><div class="flag-box"><div class="iti-flag gt"></div></div><span class="country-name">Guatemala</span><span class="dial-code">+502</span></li><li class="country standard" id="iti-item-gg" role="option" data-dial-code="44" data-country-code="gg"><div class="flag-box"><div class="iti-flag gg"></div></div><span class="country-name">Guernsey</span><span class="dial-code">+44</span></li><li class="country standard" id="iti-item-gn" role="option" data-dial-code="224" data-country-code="gn"><div class="flag-box"><div class="iti-flag gn"></div></div><span class="country-name">Guinea (Guinée)</span><span class="dial-code">+224</span></li><li class="country standard" id="iti-item-gw" role="option" data-dial-code="245" data-country-code="gw"><div class="flag-box"><div class="iti-flag gw"></div></div><span class="country-name">Guinea-Bissau (Guiné Bissau)</span><span class="dial-code">+245</span></li><li class="country standard" id="iti-item-gy" role="option" data-dial-code="592" data-country-code="gy"><div class="flag-box"><div class="iti-flag gy"></div></div><span class="country-name">Guyana</span><span class="dial-code">+592</span></li><li class="country standard" id="iti-item-ht" role="option" data-dial-code="509" data-country-code="ht"><div class="flag-box"><div class="iti-flag ht"></div></div><span class="country-name">Haiti</span><span class="dial-code">+509</span></li><li class="country standard" id="iti-item-hn" role="option" data-dial-code="504" data-country-code="hn"><div class="flag-box"><div class="iti-flag hn"></div></div><span class="country-name">Honduras</span><span class="dial-code">+504</span></li><li class="country standard" id="iti-item-hk" role="option" data-dial-code="852" data-country-code="hk"><div class="flag-box"><div class="iti-flag hk"></div></div><span class="country-name">Hong Kong (香港)</span><span class="dial-code">+852</span></li><li class="country standard" id="iti-item-hu" role="option" data-dial-code="36" data-country-code="hu"><div class="flag-box"><div class="iti-flag hu"></div></div><span class="country-name">Hungary (Magyarország)</span><span class="dial-code">+36</span></li><li class="country standard" id="iti-item-is" role="option" data-dial-code="354" data-country-code="is"><div class="flag-box"><div class="iti-flag is"></div></div><span class="country-name">Iceland (Ísland)</span><span class="dial-code">+354</span></li><li class="country standard" id="iti-item-in" role="option" data-dial-code="91" data-country-code="in"><div class="flag-box"><div class="iti-flag in"></div></div><span class="country-name">India (भारत)</span><span class="dial-code">+91</span></li><li class="country standard" id="iti-item-id" role="option" data-dial-code="62" data-country-code="id"><div class="flag-box"><div class="iti-flag id"></div></div><span class="country-name">Indonesia</span><span class="dial-code">+62</span></li><li class="country standard" id="iti-item-ir" role="option" data-dial-code="98" data-country-code="ir"><div class="flag-box"><div class="iti-flag ir"></div></div><span class="country-name">Iran (‫ایران‬‎)</span><span class="dial-code">+98</span></li><li class="country standard" id="iti-item-iq" role="option" data-dial-code="964" data-country-code="iq"><div class="flag-box"><div class="iti-flag iq"></div></div><span class="country-name">Iraq (‫العراق‬‎)</span><span class="dial-code">+964</span></li><li class="country standard" id="iti-item-ie" role="option" data-dial-code="353" data-country-code="ie"><div class="flag-box"><div class="iti-flag ie"></div></div><span class="country-name">Ireland</span><span class="dial-code">+353</span></li><li class="country standard" id="iti-item-im" role="option" data-dial-code="44" data-country-code="im"><div class="flag-box"><div class="iti-flag im"></div></div><span class="country-name">Isle of Man</span><span class="dial-code">+44</span></li><li class="country standard" id="iti-item-il" role="option" data-dial-code="972" data-country-code="il"><div class="flag-box"><div class="iti-flag il"></div></div><span class="country-name">Israel (‫ישראל‬‎)</span><span class="dial-code">+972</span></li><li class="country standard" id="iti-item-it" role="option" data-dial-code="39" data-country-code="it"><div class="flag-box"><div class="iti-flag it"></div></div><span class="country-name">Italy (Italia)</span><span class="dial-code">+39</span></li><li class="country standard" id="iti-item-jm" role="option" data-dial-code="1" data-country-code="jm"><div class="flag-box"><div class="iti-flag jm"></div></div><span class="country-name">Jamaica</span><span class="dial-code">+1</span></li><li class="country standard" id="iti-item-jp" role="option" data-dial-code="81" data-country-code="jp"><div class="flag-box"><div class="iti-flag jp"></div></div><span class="country-name">Japan (日本)</span><span class="dial-code">+81</span></li><li class="country standard" id="iti-item-je" role="option" data-dial-code="44" data-country-code="je"><div class="flag-box"><div class="iti-flag je"></div></div><span class="country-name">Jersey</span><span class="dial-code">+44</span></li><li class="country standard" id="iti-item-jo" role="option" data-dial-code="962" data-country-code="jo"><div class="flag-box"><div class="iti-flag jo"></div></div><span class="country-name">Jordan (‫الأردن‬‎)</span><span class="dial-code">+962</span></li><li class="country standard" id="iti-item-kz" role="option" data-dial-code="7" data-country-code="kz"><div class="flag-box"><div class="iti-flag kz"></div></div><span class="country-name">Kazakhstan (Казахстан)</span><span class="dial-code">+7</span></li><li class="country standard" id="iti-item-ke" role="option" data-dial-code="254" data-country-code="ke"><div class="flag-box"><div class="iti-flag ke"></div></div><span class="country-name">Kenya</span><span class="dial-code">+254</span></li><li class="country standard" id="iti-item-ki" role="option" data-dial-code="686" data-country-code="ki"><div class="flag-box"><div class="iti-flag ki"></div></div><span class="country-name">Kiribati</span><span class="dial-code">+686</span></li><li class="country standard" id="iti-item-xk" role="option" data-dial-code="383" data-country-code="xk"><div class="flag-box"><div class="iti-flag xk"></div></div><span class="country-name">Kosovo</span><span class="dial-code">+383</span></li><li class="country standard" id="iti-item-kw" role="option" data-dial-code="965" data-country-code="kw"><div class="flag-box"><div class="iti-flag kw"></div></div><span class="country-name">Kuwait (‫الكويت‬‎)</span><span class="dial-code">+965</span></li><li class="country standard" id="iti-item-kg" role="option" data-dial-code="996" data-country-code="kg"><div class="flag-box"><div class="iti-flag kg"></div></div><span class="country-name">Kyrgyzstan (Кыргызстан)</span><span class="dial-code">+996</span></li><li class="country standard" id="iti-item-la" role="option" data-dial-code="856" data-country-code="la"><div class="flag-box"><div class="iti-flag la"></div></div><span class="country-name">Laos (ລາວ)</span><span class="dial-code">+856</span></li><li class="country standard" id="iti-item-lv" role="option" data-dial-code="371" data-country-code="lv"><div class="flag-box"><div class="iti-flag lv"></div></div><span class="country-name">Latvia (Latvija)</span><span class="dial-code">+371</span></li><li class="country standard" id="iti-item-lb" role="option" data-dial-code="961" data-country-code="lb"><div class="flag-box"><div class="iti-flag lb"></div></div><span class="country-name">Lebanon (‫لبنان‬‎)</span><span class="dial-code">+961</span></li><li class="country standard" id="iti-item-ls" role="option" data-dial-code="266" data-country-code="ls"><div class="flag-box"><div class="iti-flag ls"></div></div><span class="country-name">Lesotho</span><span class="dial-code">+266</span></li><li class="country standard" id="iti-item-lr" role="option" data-dial-code="231" data-country-code="lr"><div class="flag-box"><div class="iti-flag lr"></div></div><span class="country-name">Liberia</span><span class="dial-code">+231</span></li><li class="country standard" id="iti-item-ly" role="option" data-dial-code="218" data-country-code="ly"><div class="flag-box"><div class="iti-flag ly"></div></div><span class="country-name">Libya (‫ليبيا‬‎)</span><span class="dial-code">+218</span></li><li class="country standard" id="iti-item-li" role="option" data-dial-code="423" data-country-code="li"><div class="flag-box"><div class="iti-flag li"></div></div><span class="country-name">Liechtenstein</span><span class="dial-code">+423</span></li><li class="country standard" id="iti-item-lt" role="option" data-dial-code="370" data-country-code="lt"><div class="flag-box"><div class="iti-flag lt"></div></div><span class="country-name">Lithuania (Lietuva)</span><span class="dial-code">+370</span></li><li class="country standard" id="iti-item-lu" role="option" data-dial-code="352" data-country-code="lu"><div class="flag-box"><div class="iti-flag lu"></div></div><span class="country-name">Luxembourg</span><span class="dial-code">+352</span></li><li class="country standard" id="iti-item-mo" role="option" data-dial-code="853" data-country-code="mo"><div class="flag-box"><div class="iti-flag mo"></div></div><span class="country-name">Macau (澳門)</span><span class="dial-code">+853</span></li><li class="country standard" id="iti-item-mk" role="option" data-dial-code="389" data-country-code="mk"><div class="flag-box"><div class="iti-flag mk"></div></div><span class="country-name">Macedonia (FYROM) (Македонија)</span><span class="dial-code">+389</span></li><li class="country standard" id="iti-item-mg" role="option" data-dial-code="261" data-country-code="mg"><div class="flag-box"><div class="iti-flag mg"></div></div><span class="country-name">Madagascar (Madagasikara)</span><span class="dial-code">+261</span></li><li class="country standard" id="iti-item-mw" role="option" data-dial-code="265" data-country-code="mw"><div class="flag-box"><div class="iti-flag mw"></div></div><span class="country-name">Malawi</span><span class="dial-code">+265</span></li><li class="country standard" id="iti-item-my" role="option" data-dial-code="60" data-country-code="my"><div class="flag-box"><div class="iti-flag my"></div></div><span class="country-name">Malaysia</span><span class="dial-code">+60</span></li><li class="country standard" id="iti-item-mv" role="option" data-dial-code="960" data-country-code="mv"><div class="flag-box"><div class="iti-flag mv"></div></div><span class="country-name">Maldives</span><span class="dial-code">+960</span></li><li class="country standard" id="iti-item-ml" role="option" data-dial-code="223" data-country-code="ml"><div class="flag-box"><div class="iti-flag ml"></div></div><span class="country-name">Mali</span><span class="dial-code">+223</span></li><li class="country standard" id="iti-item-mt" role="option" data-dial-code="356" data-country-code="mt"><div class="flag-box"><div class="iti-flag mt"></div></div><span class="country-name">Malta</span><span class="dial-code">+356</span></li><li class="country standard" id="iti-item-mh" role="option" data-dial-code="692" data-country-code="mh"><div class="flag-box"><div class="iti-flag mh"></div></div><span class="country-name">Marshall Islands</span><span class="dial-code">+692</span></li><li class="country standard" id="iti-item-mq" role="option" data-dial-code="596" data-country-code="mq"><div class="flag-box"><div class="iti-flag mq"></div></div><span class="country-name">Martinique</span><span class="dial-code">+596</span></li><li class="country standard" id="iti-item-mr" role="option" data-dial-code="222" data-country-code="mr"><div class="flag-box"><div class="iti-flag mr"></div></div><span class="country-name">Mauritania (‫موريتانيا‬‎)</span><span class="dial-code">+222</span></li><li class="country standard" id="iti-item-mu" role="option" data-dial-code="230" data-country-code="mu"><div class="flag-box"><div class="iti-flag mu"></div></div><span class="country-name">Mauritius (Moris)</span><span class="dial-code">+230</span></li><li class="country standard" id="iti-item-yt" role="option" data-dial-code="262" data-country-code="yt"><div class="flag-box"><div class="iti-flag yt"></div></div><span class="country-name">Mayotte</span><span class="dial-code">+262</span></li><li class="country standard" id="iti-item-mx" role="option" data-dial-code="52" data-country-code="mx"><div class="flag-box"><div class="iti-flag mx"></div></div><span class="country-name">Mexico (México)</span><span class="dial-code">+52</span></li><li class="country standard" id="iti-item-fm" role="option" data-dial-code="691" data-country-code="fm"><div class="flag-box"><div class="iti-flag fm"></div></div><span class="country-name">Micronesia</span><span class="dial-code">+691</span></li><li class="country standard" id="iti-item-md" role="option" data-dial-code="373" data-country-code="md"><div class="flag-box"><div class="iti-flag md"></div></div><span class="country-name">Moldova (Republica Moldova)</span><span class="dial-code">+373</span></li><li class="country standard" id="iti-item-mc" role="option" data-dial-code="377" data-country-code="mc"><div class="flag-box"><div class="iti-flag mc"></div></div><span class="country-name">Monaco</span><span class="dial-code">+377</span></li><li class="country standard" id="iti-item-mn" role="option" data-dial-code="976" data-country-code="mn"><div class="flag-box"><div class="iti-flag mn"></div></div><span class="country-name">Mongolia (Монгол)</span><span class="dial-code">+976</span></li><li class="country standard" id="iti-item-me" role="option" data-dial-code="382" data-country-code="me"><div class="flag-box"><div class="iti-flag me"></div></div><span class="country-name">Montenegro (Crna Gora)</span><span class="dial-code">+382</span></li><li class="country standard" id="iti-item-ms" role="option" data-dial-code="1664" data-country-code="ms"><div class="flag-box"><div class="iti-flag ms"></div></div><span class="country-name">Montserrat</span><span class="dial-code">+1664</span></li><li class="country standard" id="iti-item-ma" role="option" data-dial-code="212" data-country-code="ma"><div class="flag-box"><div class="iti-flag ma"></div></div><span class="country-name">Morocco (‫المغرب‬‎)</span><span class="dial-code">+212</span></li><li class="country standard" id="iti-item-mz" role="option" data-dial-code="258" data-country-code="mz"><div class="flag-box"><div class="iti-flag mz"></div></div><span class="country-name">Mozambique (Moçambique)</span><span class="dial-code">+258</span></li><li class="country standard" id="iti-item-mm" role="option" data-dial-code="95" data-country-code="mm"><div class="flag-box"><div class="iti-flag mm"></div></div><span class="country-name">Myanmar (Burma) (မြန်မာ)</span><span class="dial-code">+95</span></li><li class="country standard" id="iti-item-na" role="option" data-dial-code="264" data-country-code="na"><div class="flag-box"><div class="iti-flag na"></div></div><span class="country-name">Namibia (Namibië)</span><span class="dial-code">+264</span></li><li class="country standard" id="iti-item-nr" role="option" data-dial-code="674" data-country-code="nr"><div class="flag-box"><div class="iti-flag nr"></div></div><span class="country-name">Nauru</span><span class="dial-code">+674</span></li><li class="country standard" id="iti-item-np" role="option" data-dial-code="977" data-country-code="np"><div class="flag-box"><div class="iti-flag np"></div></div><span class="country-name">Nepal (नेपाल)</span><span class="dial-code">+977</span></li><li class="country standard" id="iti-item-nl" role="option" data-dial-code="31" data-country-code="nl"><div class="flag-box"><div class="iti-flag nl"></div></div><span class="country-name">Netherlands (Nederland)</span><span class="dial-code">+31</span></li><li class="country standard" id="iti-item-nc" role="option" data-dial-code="687" data-country-code="nc"><div class="flag-box"><div class="iti-flag nc"></div></div><span class="country-name">New Caledonia (Nouvelle-Calédonie)</span><span class="dial-code">+687</span></li><li class="country standard" id="iti-item-nz" role="option" data-dial-code="64" data-country-code="nz"><div class="flag-box"><div class="iti-flag nz"></div></div><span class="country-name">New Zealand</span><span class="dial-code">+64</span></li><li class="country standard" id="iti-item-ni" role="option" data-dial-code="505" data-country-code="ni"><div class="flag-box"><div class="iti-flag ni"></div></div><span class="country-name">Nicaragua</span><span class="dial-code">+505</span></li><li class="country standard" id="iti-item-ne" role="option" data-dial-code="227" data-country-code="ne"><div class="flag-box"><div class="iti-flag ne"></div></div><span class="country-name">Niger (Nijar)</span><span class="dial-code">+227</span></li><li class="country standard" id="iti-item-ng" role="option" data-dial-code="234" data-country-code="ng"><div class="flag-box"><div class="iti-flag ng"></div></div><span class="country-name">Nigeria</span><span class="dial-code">+234</span></li><li class="country standard" id="iti-item-nu" role="option" data-dial-code="683" data-country-code="nu"><div class="flag-box"><div class="iti-flag nu"></div></div><span class="country-name">Niue</span><span class="dial-code">+683</span></li><li class="country standard" id="iti-item-nf" role="option" data-dial-code="672" data-country-code="nf"><div class="flag-box"><div class="iti-flag nf"></div></div><span class="country-name">Norfolk Island</span><span class="dial-code">+672</span></li><li class="country standard" id="iti-item-kp" role="option" data-dial-code="850" data-country-code="kp"><div class="flag-box"><div class="iti-flag kp"></div></div><span class="country-name">North Korea (조선 민주주의 인민 공화국)</span><span class="dial-code">+850</span></li><li class="country standard" id="iti-item-mp" role="option" data-dial-code="1670" data-country-code="mp"><div class="flag-box"><div class="iti-flag mp"></div></div><span class="country-name">Northern Mariana Islands</span><span class="dial-code">+1670</span></li><li class="country standard" id="iti-item-no" role="option" data-dial-code="47" data-country-code="no"><div class="flag-box"><div class="iti-flag no"></div></div><span class="country-name">Norway (Norge)</span><span class="dial-code">+47</span></li><li class="country standard" id="iti-item-om" role="option" data-dial-code="968" data-country-code="om"><div class="flag-box"><div class="iti-flag om"></div></div><span class="country-name">Oman (‫عُمان‬‎)</span><span class="dial-code">+968</span></li><li class="country standard" id="iti-item-pk" role="option" data-dial-code="92" data-country-code="pk"><div class="flag-box"><div class="iti-flag pk"></div></div><span class="country-name">Pakistan (‫پاکستان‬‎)</span><span class="dial-code">+92</span></li><li class="country standard" id="iti-item-pw" role="option" data-dial-code="680" data-country-code="pw"><div class="flag-box"><div class="iti-flag pw"></div></div><span class="country-name">Palau</span><span class="dial-code">+680</span></li><li class="country standard" id="iti-item-ps" role="option" data-dial-code="970" data-country-code="ps"><div class="flag-box"><div class="iti-flag ps"></div></div><span class="country-name">Palestine (‫فلسطين‬‎)</span><span class="dial-code">+970</span></li><li class="country standard" id="iti-item-pa" role="option" data-dial-code="507" data-country-code="pa"><div class="flag-box"><div class="iti-flag pa"></div></div><span class="country-name">Panama (Panamá)</span><span class="dial-code">+507</span></li><li class="country standard" id="iti-item-pg" role="option" data-dial-code="675" data-country-code="pg"><div class="flag-box"><div class="iti-flag pg"></div></div><span class="country-name">Papua New Guinea</span><span class="dial-code">+675</span></li><li class="country standard" id="iti-item-py" role="option" data-dial-code="595" data-country-code="py"><div class="flag-box"><div class="iti-flag py"></div></div><span class="country-name">Paraguay</span><span class="dial-code">+595</span></li><li class="country standard" id="iti-item-pe" role="option" data-dial-code="51" data-country-code="pe"><div class="flag-box"><div class="iti-flag pe"></div></div><span class="country-name">Peru (Perú)</span><span class="dial-code">+51</span></li><li class="country standard" id="iti-item-ph" role="option" data-dial-code="63" data-country-code="ph"><div class="flag-box"><div class="iti-flag ph"></div></div><span class="country-name">Philippines</span><span class="dial-code">+63</span></li><li class="country standard" id="iti-item-pl" role="option" data-dial-code="48" data-country-code="pl"><div class="flag-box"><div class="iti-flag pl"></div></div><span class="country-name">Poland (Polska)</span><span class="dial-code">+48</span></li><li class="country standard" id="iti-item-pt" role="option" data-dial-code="351" data-country-code="pt"><div class="flag-box"><div class="iti-flag pt"></div></div><span class="country-name">Portugal</span><span class="dial-code">+351</span></li><li class="country standard" id="iti-item-pr" role="option" data-dial-code="1" data-country-code="pr"><div class="flag-box"><div class="iti-flag pr"></div></div><span class="country-name">Puerto Rico</span><span class="dial-code">+1</span></li><li class="country standard" id="iti-item-qa" role="option" data-dial-code="974" data-country-code="qa"><div class="flag-box"><div class="iti-flag qa"></div></div><span class="country-name">Qatar (‫قطر‬‎)</span><span class="dial-code">+974</span></li><li class="country standard" id="iti-item-re" role="option" data-dial-code="262" data-country-code="re"><div class="flag-box"><div class="iti-flag re"></div></div><span class="country-name">Réunion (La Réunion)</span><span class="dial-code">+262</span></li><li class="country standard" id="iti-item-ro" role="option" data-dial-code="40" data-country-code="ro"><div class="flag-box"><div class="iti-flag ro"></div></div><span class="country-name">Romania (România)</span><span class="dial-code">+40</span></li><li class="country standard" id="iti-item-ru" role="option" data-dial-code="7" data-country-code="ru"><div class="flag-box"><div class="iti-flag ru"></div></div><span class="country-name">Russia (Россия)</span><span class="dial-code">+7</span></li><li class="country standard" id="iti-item-rw" role="option" data-dial-code="250" data-country-code="rw"><div class="flag-box"><div class="iti-flag rw"></div></div><span class="country-name">Rwanda</span><span class="dial-code">+250</span></li><li class="country standard" id="iti-item-bl" role="option" data-dial-code="590" data-country-code="bl"><div class="flag-box"><div class="iti-flag bl"></div></div><span class="country-name">Saint Barthélemy</span><span class="dial-code">+590</span></li><li class="country standard" id="iti-item-sh" role="option" data-dial-code="290" data-country-code="sh"><div class="flag-box"><div class="iti-flag sh"></div></div><span class="country-name">Saint Helena</span><span class="dial-code">+290</span></li><li class="country standard" id="iti-item-kn" role="option" data-dial-code="1869" data-country-code="kn"><div class="flag-box"><div class="iti-flag kn"></div></div><span class="country-name">Saint Kitts and Nevis</span><span class="dial-code">+1869</span></li><li class="country standard" id="iti-item-lc" role="option" data-dial-code="1758" data-country-code="lc"><div class="flag-box"><div class="iti-flag lc"></div></div><span class="country-name">Saint Lucia</span><span class="dial-code">+1758</span></li><li class="country standard" id="iti-item-mf" role="option" data-dial-code="590" data-country-code="mf"><div class="flag-box"><div class="iti-flag mf"></div></div><span class="country-name">Saint Martin (Saint-Martin (partie française))</span><span class="dial-code">+590</span></li><li class="country standard" id="iti-item-pm" role="option" data-dial-code="508" data-country-code="pm"><div class="flag-box"><div class="iti-flag pm"></div></div><span class="country-name">Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)</span><span class="dial-code">+508</span></li><li class="country standard" id="iti-item-vc" role="option" data-dial-code="1784" data-country-code="vc"><div class="flag-box"><div class="iti-flag vc"></div></div><span class="country-name">Saint Vincent and the Grenadines</span><span class="dial-code">+1784</span></li><li class="country standard" id="iti-item-ws" role="option" data-dial-code="685" data-country-code="ws"><div class="flag-box"><div class="iti-flag ws"></div></div><span class="country-name">Samoa</span><span class="dial-code">+685</span></li><li class="country standard" id="iti-item-sm" role="option" data-dial-code="378" data-country-code="sm"><div class="flag-box"><div class="iti-flag sm"></div></div><span class="country-name">San Marino</span><span class="dial-code">+378</span></li><li class="country standard" id="iti-item-st" role="option" data-dial-code="239" data-country-code="st"><div class="flag-box"><div class="iti-flag st"></div></div><span class="country-name">São Tomé and Príncipe (São Tomé e Príncipe)</span><span class="dial-code">+239</span></li><li class="country standard" id="iti-item-sa" role="option" data-dial-code="966" data-country-code="sa"><div class="flag-box"><div class="iti-flag sa"></div></div><span class="country-name">Saudi Arabia (‫المملكة العربية السعودية‬‎)</span><span class="dial-code">+966</span></li><li class="country standard" id="iti-item-sn" role="option" data-dial-code="221" data-country-code="sn"><div class="flag-box"><div class="iti-flag sn"></div></div><span class="country-name">Senegal (Sénégal)</span><span class="dial-code">+221</span></li><li class="country standard" id="iti-item-rs" role="option" data-dial-code="381" data-country-code="rs"><div class="flag-box"><div class="iti-flag rs"></div></div><span class="country-name">Serbia (Србија)</span><span class="dial-code">+381</span></li><li class="country standard" id="iti-item-sc" role="option" data-dial-code="248" data-country-code="sc"><div class="flag-box"><div class="iti-flag sc"></div></div><span class="country-name">Seychelles</span><span class="dial-code">+248</span></li><li class="country standard" id="iti-item-sl" role="option" data-dial-code="232" data-country-code="sl"><div class="flag-box"><div class="iti-flag sl"></div></div><span class="country-name">Sierra Leone</span><span class="dial-code">+232</span></li><li class="country standard" id="iti-item-sg" role="option" data-dial-code="65" data-country-code="sg"><div class="flag-box"><div class="iti-flag sg"></div></div><span class="country-name">Singapore</span><span class="dial-code">+65</span></li><li class="country standard" id="iti-item-sx" role="option" data-dial-code="1721" data-country-code="sx"><div class="flag-box"><div class="iti-flag sx"></div></div><span class="country-name">Sint Maarten</span><span class="dial-code">+1721</span></li><li class="country standard" id="iti-item-sk" role="option" data-dial-code="421" data-country-code="sk"><div class="flag-box"><div class="iti-flag sk"></div></div><span class="country-name">Slovakia (Slovensko)</span><span class="dial-code">+421</span></li><li class="country standard" id="iti-item-si" role="option" data-dial-code="386" data-country-code="si"><div class="flag-box"><div class="iti-flag si"></div></div><span class="country-name">Slovenia (Slovenija)</span><span class="dial-code">+386</span></li><li class="country standard" id="iti-item-sb" role="option" data-dial-code="677" data-country-code="sb"><div class="flag-box"><div class="iti-flag sb"></div></div><span class="country-name">Solomon Islands</span><span class="dial-code">+677</span></li><li class="country standard" id="iti-item-so" role="option" data-dial-code="252" data-country-code="so"><div class="flag-box"><div class="iti-flag so"></div></div><span class="country-name">Somalia (Soomaaliya)</span><span class="dial-code">+252</span></li><li class="country standard" id="iti-item-za" role="option" data-dial-code="27" data-country-code="za"><div class="flag-box"><div class="iti-flag za"></div></div><span class="country-name">South Africa</span><span class="dial-code">+27</span></li><li class="country standard" id="iti-item-kr" role="option" data-dial-code="82" data-country-code="kr"><div class="flag-box"><div class="iti-flag kr"></div></div><span class="country-name">South Korea (대한민국)</span><span class="dial-code">+82</span></li><li class="country standard" id="iti-item-ss" role="option" data-dial-code="211" data-country-code="ss"><div class="flag-box"><div class="iti-flag ss"></div></div><span class="country-name">South Sudan (‫جنوب السودان‬‎)</span><span class="dial-code">+211</span></li><li class="country standard" id="iti-item-es" role="option" data-dial-code="34" data-country-code="es"><div class="flag-box"><div class="iti-flag es"></div></div><span class="country-name">Spain (España)</span><span class="dial-code">+34</span></li><li class="country standard" id="iti-item-lk" role="option" data-dial-code="94" data-country-code="lk"><div class="flag-box"><div class="iti-flag lk"></div></div><span class="country-name">Sri Lanka (ශ්‍රී ලංකාව)</span><span class="dial-code">+94</span></li><li class="country standard" id="iti-item-sd" role="option" data-dial-code="249" data-country-code="sd"><div class="flag-box"><div class="iti-flag sd"></div></div><span class="country-name">Sudan (‫السودان‬‎)</span><span class="dial-code">+249</span></li><li class="country standard" id="iti-item-sr" role="option" data-dial-code="597" data-country-code="sr"><div class="flag-box"><div class="iti-flag sr"></div></div><span class="country-name">Suriname</span><span class="dial-code">+597</span></li><li class="country standard" id="iti-item-sj" role="option" data-dial-code="47" data-country-code="sj"><div class="flag-box"><div class="iti-flag sj"></div></div><span class="country-name">Svalbard and Jan Mayen</span><span class="dial-code">+47</span></li><li class="country standard" id="iti-item-sz" role="option" data-dial-code="268" data-country-code="sz"><div class="flag-box"><div class="iti-flag sz"></div></div><span class="country-name">Swaziland</span><span class="dial-code">+268</span></li><li class="country standard" id="iti-item-se" role="option" data-dial-code="46" data-country-code="se"><div class="flag-box"><div class="iti-flag se"></div></div><span class="country-name">Sweden (Sverige)</span><span class="dial-code">+46</span></li><li class="country standard" id="iti-item-ch" role="option" data-dial-code="41" data-country-code="ch"><div class="flag-box"><div class="iti-flag ch"></div></div><span class="country-name">Switzerland (Schweiz)</span><span class="dial-code">+41</span></li><li class="country standard" id="iti-item-sy" role="option" data-dial-code="963" data-country-code="sy"><div class="flag-box"><div class="iti-flag sy"></div></div><span class="country-name">Syria (‫سوريا‬‎)</span><span class="dial-code">+963</span></li><li class="country standard" id="iti-item-tw" role="option" data-dial-code="886" data-country-code="tw"><div class="flag-box"><div class="iti-flag tw"></div></div><span class="country-name">Taiwan (台灣)</span><span class="dial-code">+886</span></li><li class="country standard" id="iti-item-tj" role="option" data-dial-code="992" data-country-code="tj"><div class="flag-box"><div class="iti-flag tj"></div></div><span class="country-name">Tajikistan</span><span class="dial-code">+992</span></li><li class="country standard" id="iti-item-tz" role="option" data-dial-code="255" data-country-code="tz"><div class="flag-box"><div class="iti-flag tz"></div></div><span class="country-name">Tanzania</span><span class="dial-code">+255</span></li><li class="country standard" id="iti-item-th" role="option" data-dial-code="66" data-country-code="th"><div class="flag-box"><div class="iti-flag th"></div></div><span class="country-name">Thailand (ไทย)</span><span class="dial-code">+66</span></li><li class="country standard" id="iti-item-tl" role="option" data-dial-code="670" data-country-code="tl"><div class="flag-box"><div class="iti-flag tl"></div></div><span class="country-name">Timor-Leste</span><span class="dial-code">+670</span></li><li class="country standard" id="iti-item-tg" role="option" data-dial-code="228" data-country-code="tg"><div class="flag-box"><div class="iti-flag tg"></div></div><span class="country-name">Togo</span><span class="dial-code">+228</span></li><li class="country standard" id="iti-item-tk" role="option" data-dial-code="690" data-country-code="tk"><div class="flag-box"><div class="iti-flag tk"></div></div><span class="country-name">Tokelau</span><span class="dial-code">+690</span></li><li class="country standard" id="iti-item-to" role="option" data-dial-code="676" data-country-code="to"><div class="flag-box"><div class="iti-flag to"></div></div><span class="country-name">Tonga</span><span class="dial-code">+676</span></li><li class="country standard" id="iti-item-tt" role="option" data-dial-code="1868" data-country-code="tt"><div class="flag-box"><div class="iti-flag tt"></div></div><span class="country-name">Trinidad and Tobago</span><span class="dial-code">+1868</span></li><li class="country standard" id="iti-item-tn" role="option" data-dial-code="216" data-country-code="tn"><div class="flag-box"><div class="iti-flag tn"></div></div><span class="country-name">Tunisia (‫تونس‬‎)</span><span class="dial-code">+216</span></li><li class="country standard" id="iti-item-tr" role="option" data-dial-code="90" data-country-code="tr"><div class="flag-box"><div class="iti-flag tr"></div></div><span class="country-name">Turkey (Türkiye)</span><span class="dial-code">+90</span></li><li class="country standard" id="iti-item-tm" role="option" data-dial-code="993" data-country-code="tm"><div class="flag-box"><div class="iti-flag tm"></div></div><span class="country-name">Turkmenistan</span><span class="dial-code">+993</span></li><li class="country standard" id="iti-item-tc" role="option" data-dial-code="1649" data-country-code="tc"><div class="flag-box"><div class="iti-flag tc"></div></div><span class="country-name">Turks and Caicos Islands</span><span class="dial-code">+1649</span></li><li class="country standard" id="iti-item-tv" role="option" data-dial-code="688" data-country-code="tv"><div class="flag-box"><div class="iti-flag tv"></div></div><span class="country-name">Tuvalu</span><span class="dial-code">+688</span></li><li class="country standard" id="iti-item-vi" role="option" data-dial-code="1340" data-country-code="vi"><div class="flag-box"><div class="iti-flag vi"></div></div><span class="country-name">U.S. Virgin Islands</span><span class="dial-code">+1340</span></li><li class="country standard" id="iti-item-ug" role="option" data-dial-code="256" data-country-code="ug"><div class="flag-box"><div class="iti-flag ug"></div></div><span class="country-name">Uganda</span><span class="dial-code">+256</span></li><li class="country standard" id="iti-item-ua" role="option" data-dial-code="380" data-country-code="ua"><div class="flag-box"><div class="iti-flag ua"></div></div><span class="country-name">Ukraine (Україна)</span><span class="dial-code">+380</span></li><li class="country standard" id="iti-item-ae" role="option" data-dial-code="971" data-country-code="ae"><div class="flag-box"><div class="iti-flag ae"></div></div><span class="country-name">United Arab Emirates (‫الإمارات العربية المتحدة‬‎)</span><span class="dial-code">+971</span></li><li class="country standard" id="iti-item-gb" role="option" data-dial-code="44" data-country-code="gb"><div class="flag-box"><div class="iti-flag gb"></div></div><span class="country-name">United Kingdom</span><span class="dial-code">+44</span></li><li class="country standard" id="iti-item-us" role="option" data-dial-code="1" data-country-code="us"><div class="flag-box"><div class="iti-flag us"></div></div><span class="country-name">United States</span><span class="dial-code">+1</span></li><li class="country standard" id="iti-item-uy" role="option" data-dial-code="598" data-country-code="uy"><div class="flag-box"><div class="iti-flag uy"></div></div><span class="country-name">Uruguay</span><span class="dial-code">+598</span></li><li class="country standard" id="iti-item-uz" role="option" data-dial-code="998" data-country-code="uz"><div class="flag-box"><div class="iti-flag uz"></div></div><span class="country-name">Uzbekistan (Oʻzbekiston)</span><span class="dial-code">+998</span></li><li class="country standard" id="iti-item-vu" role="option" data-dial-code="678" data-country-code="vu"><div class="flag-box"><div class="iti-flag vu"></div></div><span class="country-name">Vanuatu</span><span class="dial-code">+678</span></li><li class="country standard" id="iti-item-va" role="option" data-dial-code="39" data-country-code="va"><div class="flag-box"><div class="iti-flag va"></div></div><span class="country-name">Vatican City (Città del Vaticano)</span><span class="dial-code">+39</span></li><li class="country standard" id="iti-item-ve" role="option" data-dial-code="58" data-country-code="ve"><div class="flag-box"><div class="iti-flag ve"></div></div><span class="country-name">Venezuela</span><span class="dial-code">+58</span></li><li class="country standard" id="iti-item-vn" role="option" data-dial-code="84" data-country-code="vn"><div class="flag-box"><div class="iti-flag vn"></div></div><span class="country-name">Vietnam (Việt Nam)</span><span class="dial-code">+84</span></li><li class="country standard" id="iti-item-wf" role="option" data-dial-code="681" data-country-code="wf"><div class="flag-box"><div class="iti-flag wf"></div></div><span class="country-name">Wallis and Futuna (Wallis-et-Futuna)</span><span class="dial-code">+681</span></li><li class="country standard" id="iti-item-eh" role="option" data-dial-code="212" data-country-code="eh"><div class="flag-box"><div class="iti-flag eh"></div></div><span class="country-name">Western Sahara (‫الصحراء الغربية‬‎)</span><span class="dial-code">+212</span></li><li class="country standard" id="iti-item-ye" role="option" data-dial-code="967" data-country-code="ye"><div class="flag-box"><div class="iti-flag ye"></div></div><span class="country-name">Yemen (‫اليمن‬‎)</span><span class="dial-code">+967</span></li><li class="country standard" id="iti-item-zm" role="option" data-dial-code="260" data-country-code="zm"><div class="flag-box"><div class="iti-flag zm"></div></div><span class="country-name">Zambia</span><span class="dial-code">+260</span></li><li class="country standard" id="iti-item-zw" role="option" data-dial-code="263" data-country-code="zw"><div class="flag-box"><div class="iti-flag zw"></div></div><span class="country-name">Zimbabwe</span><span class="dial-code">+263</span></li><li class="country standard" id="iti-item-ax" role="option" data-dial-code="358" data-country-code="ax"><div class="flag-box"><div class="iti-flag ax"></div></div><span class="country-name">Åland Islands</span><span class="dial-code">+358</span></li></ul></div><input type="tel" name="tel" id="tel" autocomplete="off" placeholder="(201) 555-0123"></div>
                            </div>
                            <div class="form-line">
                                <label for="name">Email</label>
                                <input type="email" name="email" id="email">
                            </div>
                            <div class="form-line header__choosen">
                                <ul class="choosen__items scroll">
                                    <li class="choosen__item">Familia<span class="cross"></span></li>
                                    <li class="choosen__item">Обувь для всей семьи<span class="cross"></span></li>
                                    <li class="choosen__item">Ralf Ringer<span class="cross"></span></li>
                                    <li class="choosen__item">Jack Wolfskin<span class="cross"></span></li>
                                    <li class="choosen__item">34PLAY<span class="cross"></span></li>
                                    <li class="choosen__item">Incanto<span class="cross"></span></li>
                                    <li class="choosen__item">Алеф<span class="cross"></span></li>
                                </ul>
                                <div class="double-arrows">
                                    <div class="double-arrows--wrap"></div>
                                </div>
                            </div>
                            <div class="form-line">
                                <div class="tabs__content active"> <a href="#" class="btn btn--transparent header-popup">Выбрать свой список ритейлеров</a></div>
                                <div class="tabs__content"> <a href="#" class="btn btn--transparent">Выбрать операторов торговых площадей</a></div>
                            </div>
                            <div class="form-line">
                                <div class="btn btn--black">Зарегистрироваться</div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="quick-date">
    <div class="wrap">
        <div class="quick-date__wrap">
            <div class="quick-date__main">
                <div class="quick-date__title quick-date__title--bottom">Розничные сети </div>
                <div class="quick-date__text quick-date__text--bottom"><span>— </span>  находят подходящие торговые площади</div>
                <div class="main-title__wrap">
                    <div class="main-title__wrap480">
                        <div class="main-title">

                            Переговоры по торговой недвижимости в формате <span>быстрых </span> свиданий
                        </div>
                    </div>
                </div>
                <div class="quick-date__title quick-date__title--top">Операторы торговых площадей </div>
                <div class="quick-date__text"> <span>— </span>  находят арендаторов и покупателей</div>
            </div>
        </div>
        <div class="quick-date__steps">
            <ul>
                <li> <span class="quick-date__number">01</span>
                    <div class="quick-date__descr">До 28 переговоров за день с партнерами со всей России</div>
                </li>
                <li> <span class="quick-date__number">02</span>
                    <div class="quick-date__descr">Участвуют люди, принимающие решения</div>
                </li>
                <li> <span class="quick-date__number">03</span>
                    <div class="quick-date__descr">Заранее спланированные встречи с подходящими партнерами </div>
                </li>
            </ul>
        </div>
        <div class="quick-date__btn"><a href="#" class="btn btn--transparent btn--grey">
                <svg class="archive">
                    <use xlink:href="img/icons/archive.svg#archive"> </use>
                </svg><span>Как это было раньше</span></a></div>
    </div>
</section>
<section class="how">
    <div class="wrap">
        <div class="main-title">Как это работает?</div>
        <div class="how__wrap">
            <div class="how__block">
                <div class="how__descr">
                    <div class="how__title">Ищете торговые площади?</div>
                    <ul class="how_list">
                        <li>Опишите свои требования к площадям</li>
                        <li>Подберем подходящие объекты</li>
                        <li>Организуем переговоры</li>
                    </ul>
                </div>
                <div class="how__pic">
                    <svg class="ret">
                        <use xlink:href="img/icons/ret.svg#ret"> </use>
                    </svg>
                </div>
                <div class="how__btn"><a href="#" class="btn btn--white">Найти операторов торговых площадей</a></div>
            </div>
            <div class="how__center">
                <div class="how__line how__line--left"></div>
                <div class="how__line how__line--right"></div>
                <div class="logo">
                    <svg class="logo-white">
                        <use xlink:href="img/logo_white.svg#logo_white"></use>
                    </svg>
                </div>
            </div>
            <div class="how__block how__block--right">
                <div class="how__descr">
                    <div class="how__title">Есть торговые площади?</div>
                    <ul class="how_list">
                        <li>Опишите пишите свои объекты</li>
                        <li>Подберем торговые сети, которым они подходят</li>
                        <li>Организуем переговоры</li>
                    </ul>
                </div>
                <div class="how__pic">
                    <svg class="dev">
                        <use xlink:href="img/icons/dev.svg#dev"> </use>
                    </svg>
                </div>
                <div class="how__btn"><a href="#" class="btn btn--white">Найти ритейлеров</a></div>
            </div>
        </div>
    </div>
</section>
<section class="partners">
    <div class="wrap">
        <div class="main-title">Недвижимость у нас ищут</div>
        <div class="partners__wrap partners-slider slick-initialized slick-slider"><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 960px;"><div class="slick-slide" data-slick-index="0" aria-hidden="true" style="width: 320px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" tabindex="-1"><div><div class="partners__items" style="width: 100%; display: inline-block;">
                                <div class="partners__item-wrap">
                                    <div class="partners__item"><img src="img/partners/logo-pyatyorochka.png" alt="partners"></div>
                                    <div class="partners__item"><img src="img/partners/logo-dns.png" alt="partners"></div>
                                    <div class="partners__item"><img src="img/partners/logo-sportmaster.png" alt="partners"></div>
                                    <div class="partners__item"><img src="img/partners/logo-magnit.png" alt="partners"></div>
                                    <div class="partners__item"><img src="img/partners/logo-letual.png" alt="partners"></div>
                                </div>
                            </div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 320px; position: relative; left: -320px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" tabindex="-1"><div><div class="partners__items" style="width: 100%; display: inline-block;">
                                <div class="partners__item-wrap">
                                    <div class="partners__item"><img src="img/partners/logo-apteka.png" alt="partners"></div>
                                    <div class="partners__item"><img src="img/partners/logo-auchan.png" alt="partners"></div>
                                    <div class="partners__item"><img src="img/partners/logo-azbuka-vkusa.png" alt="partners"></div>
                                    <div class="partners__item"><img src="img/partners/logo-citilink.gif" alt="partners"></div>
                                    <div class="partners__item"><img src="img/partners/logo-detskiy-mir.png" alt="partners"></div>
                                </div>
                            </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" style="width: 320px; position: relative; left: -640px; top: 0px; z-index: 999; opacity: 1;"><div><div class="partners__items" style="width: 100%; display: inline-block;">
                                <div class="partners__item-wrap">
                                    <div class="partners__item"><img src="img/partners/logo-evroset.png" alt="partners"></div>
                                    <div class="partners__item"><img src="img/partners/logo-gj.jpg" alt="partners"></div>
                                    <div class="partners__item"><img src="img/partners/logo-lenta.png" alt="partners"></div>
                                    <div class="partners__item"><img src="img/partners/logo-okey.jpg" alt="partners"></div>
                                    <div class="partners__item"><img src="img/partners/logo-riv.png" alt="partners"></div>
                                </div>
                            </div></div></div></div></div></div>
    </div>
</section>
<section class="way">
    <div class="wrap">
        <div class="main-title">

            Самый <span>удобный способ </span>решать ваши задачи
        </div>
        <div class="way__wrap">
            <div class="way__item">
                <div class="way__logo">
                    <svg class="clock">
                        <use xlink:href="img/icons/clock.svg#clock"></use>
                    </svg>
                </div>
                <div class="way__descr">
                    <div class="way__title">Экономия времени</div>
                    <svg class="clock--mini">
                        <use xlink:href="img/icons/clock.svg#clock"></use>
                    </svg>
                    <div class="way__text"><span>За один день </span>вы проводите переговоры, на организацию которых в обычных условиях ушло бы <span>не меньше месяца.</span></div>
                </div>
            </div>
            <div class="way__item">
                <div class="way__logo">
                    <svg class="contact">
                        <use xlink:href="img/icons/contact.svg#contact"></use>
                    </svg>
                </div>
                <div class="way__descr">
                    <div class="way__title">Уникальные контакты</div>
                    <svg class="contact--mini">
                        <use xlink:href="img/icons/contact.svg#contact"></use>
                    </svg>
                    <div class="way__text">На одной площадке в один день собираются <span>все нужные люди </span>из столицы и регионов. </div>
                </div>
            </div>
            <div class="way__item">
                <div class="way__logo">
                    <svg class="mutual_interest">
                        <use xlink:href="img/icons/mutual_interest.svg#mutual_interest"></use>
                    </svg>
                </div>
                <div class="way__descr">
                    <div class="way__title">Взаимный интерес</div>
                    <svg class="mutual_interest--mini">
                        <use xlink:href="img/icons/mutual_interest.svg#mutual_interest"></use>
                    </svg>
                    <div class="way__text">Сюда приходят только люди <span>с активными потребностями: </span>в развитии или арендаторах.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="center">
    <div class="center__video">
        <video poster="img/center-bg.png" autoplay="" loop="" muted="">
            <!--source(src='demo.mp4', type='video/mp4')-->
            <source src="video/retailer.webm" type="video/webm">
            <!-- source(src='demo.ogv', type='video/ogg')-->
            <object>
                <embed src="video/retailer.webm" type="application/x-shockwave-flash" allowfullscreen="false" allowscriptaccess="always">
            </object>Формат не поддерживается
        </video>
    </div>
    <div class="header-overlay">
        <div class="wrap">
            <div class="main-title none-mob">Ближайший Центр переговоров</div>
            <div class="main-title none-desctop">Программа центра переговоров</div>
            <div class="center__wrap">
                <div class="center__info">
                    <div class="center__left">
                        <svg class="marker marker--dark">
                            <use xlink:href="img/icons/marker.svg#marker"> </use>
                        </svg>
                        <div class="center__name">Event Hall Даниловский </div>
                        <div class="lines"></div>
                        <div class="center__adress">Москва, ул. Дубининская, д.71, стр.5</div>
                    </div>
                    <div class="center__right">
                        <svg class="calendar">
                            <use xlink:href="img/icons/calendar.svg#calendar"> </use>
                        </svg>
                        <div class="center__date"> <span>6 </span><span class="desctop-untill320">декабря </span><span class="mob320">.12 </span>2018</div>
                        <div class="lines"></div>
                        <div class="center__time"> <span>9.</span>00 <span>- 17.</span>00</div>
                    </div>
                </div>
                <div class="center__boxes">
                    <div class="center-box">
                        <div class="center-box__wrap">
                            <div class="center-box__logo">
                                <svg class="handshake">
                                    <use xlink:href="img/icons/handshake.svg#handshake"></use>
                                </svg>
                            </div>
                            <div class="center-box__title">Переговоры</div>
                            <div class="center-box__descr">Заранее спланированные встречи участников по 15 минут.</div>
                        </div>
                    </div>
                    <div class="center-box">
                        <div class="center-box__wrap">
                            <div class="center-box__logo">
                                <svg class="congress">
                                    <use xlink:href="img/icons/congress.svg#congress"></use>
                                </svg>
                            </div>
                            <div class="center-box__title">Деловая программа</div>
                            <div class="center-box__descr">Выступления спикеров-практиков, готовых делиться реальными кейсами из сферы торговой недвижимости.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="reviews">
    <div>
        <div class="main-title">Отзывы участников</div>
        <div class="reviews__wrap">
            <div class="reviews__slider slick-initialized slick-slider"><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4446px; transform: translate3d(-342px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 342px;" tabindex="-1"><div><div class="reviews-item__wrap reviews-popup6" style="width: 100%; display: inline-block;">
                                    <div class="reviews-item">
                                        <div class="reviews-item__name">Ольга Семенова</div>
                                        <div class="reviews-item__foto"><img src="img/reviews/woman.jpg" alt="woman"></div>
                                        <div class="reviews-item__company">Название компании</div>
                                        <div class="reviews-item__position">Должность</div>
                                        <div class="reviews-item__review">
                                            <div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                            </div>
                                        </div><a class="reviews-item__more" tabindex="-1"><span>Читать целиком</span></a>
                                        <div class="reviews-item__video">
                                            <svg class="video">
                                                <use xlink:href="img/icons/video.svg#video"> </use>
                                            </svg><span>Видеоотзыв</span>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 342px;"><div><div class="reviews-item__wrap reviews-popup1" style="width: 100%; display: inline-block;">
                                    <div class="reviews-item">
                                        <div class="reviews-item__name">Ольга Семенова</div>
                                        <div class="reviews-item__foto"><img src="img/reviews/woman.jpg" alt="woman"></div>
                                        <div class="reviews-item__company">Название компании</div>
                                        <div class="reviews-item__position">Должность</div>
                                        <div class="reviews-item__review">
                                            <div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                            </div>
                                        </div><a class="reviews-item__more" tabindex="0"><span>Читать целиком</span></a>
                                        <div class="reviews-item__video">
                                            <svg class="video">
                                                <use xlink:href="img/icons/video.svg#video"> </use>
                                            </svg><span>Видеоотзыв</span>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 342px;" tabindex="-1"><div><div class="reviews-item__wrap reviews-popup2" style="width: 100%; display: inline-block;">
                                    <div class="reviews-item">
                                        <div class="reviews-item__name">Ольга Семенова</div>
                                        <div class="reviews-item__foto"><img src="img/reviews/man.jpg" alt="man"></div>
                                        <div class="reviews-item__company">Название компании</div>
                                        <div class="reviews-item__position">Должность</div>
                                        <div class="reviews-item__review">
                                            <div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                            </div>
                                        </div><a class="reviews-item__more" tabindex="-1"><span>Читать целиком</span></a>
                                        <div class="reviews-item__video">
                                            <svg class="video">
                                                <use xlink:href="img/icons/video.svg#video"> </use>
                                            </svg><span>Видеоотзыв</span>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide" data-slick-index="2" aria-hidden="true" style="width: 342px;" tabindex="-1"><div><div class="reviews-item__wrap reviews-popup3" style="width: 100%; display: inline-block;">
                                    <div class="reviews-item">
                                        <div class="reviews-item__name">Ольга Семенова</div>
                                        <div class="reviews-item__foto"><img src="img/reviews/woman.jpg" alt="woman"></div>
                                        <div class="reviews-item__company">Название компании</div>
                                        <div class="reviews-item__position">Должность</div>
                                        <div class="reviews-item__review">
                                            <div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                            </div>
                                        </div><a class="reviews-item__more" tabindex="-1"><span>Читать целиком</span></a>
                                        <div class="reviews-item__video">
                                            <svg class="video">
                                                <use xlink:href="img/icons/video.svg#video"> </use>
                                            </svg><span>Видеоотзыв</span>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide" data-slick-index="3" aria-hidden="true" style="width: 342px;" tabindex="-1"><div><div class="reviews-item__wrap reviews-popup4" style="width: 100%; display: inline-block;">
                                    <div class="reviews-item">
                                        <div class="reviews-item__name">Ольга Семенова</div>
                                        <div class="reviews-item__foto"><img src="img/reviews/woman.jpg" alt="woman"></div>
                                        <div class="reviews-item__company">Название компании</div>
                                        <div class="reviews-item__position">Должность</div>
                                        <div class="reviews-item__review">
                                            <div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                            </div>
                                        </div><a class="reviews-item__more" tabindex="-1"><span>Читать целиком</span></a>
                                        <div class="reviews-item__video">
                                            <svg class="video">
                                                <use xlink:href="img/icons/video.svg#video"> </use>
                                            </svg><span>Видеоотзыв</span>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide" data-slick-index="4" aria-hidden="true" style="width: 342px;" tabindex="-1"><div><div class="reviews-item__wrap reviews-popup5" style="width: 100%; display: inline-block;">
                                    <div class="reviews-item">
                                        <div class="reviews-item__name">Ольга Семенова</div>
                                        <div class="reviews-item__foto"><img src="img/reviews/woman.jpg" alt="woman"></div>
                                        <div class="reviews-item__company">Название компании</div>
                                        <div class="reviews-item__position">Должность</div>
                                        <div class="reviews-item__review">
                                            <div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                            </div>
                                        </div><a class="reviews-item__more" tabindex="-1"><span>Читать целиком</span></a>
                                        <div class="reviews-item__video">
                                            <svg class="video">
                                                <use xlink:href="img/icons/video.svg#video"> </use>
                                            </svg><span>Видеоотзыв</span>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide" data-slick-index="5" aria-hidden="true" style="width: 342px;" tabindex="-1"><div><div class="reviews-item__wrap reviews-popup6" style="width: 100%; display: inline-block;">
                                    <div class="reviews-item">
                                        <div class="reviews-item__name">Ольга Семенова</div>
                                        <div class="reviews-item__foto"><img src="img/reviews/woman.jpg" alt="woman"></div>
                                        <div class="reviews-item__company">Название компании</div>
                                        <div class="reviews-item__position">Должность</div>
                                        <div class="reviews-item__review">
                                            <div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                            </div>
                                        </div><a class="reviews-item__more" tabindex="-1"><span>Читать целиком</span></a>
                                        <div class="reviews-item__video">
                                            <svg class="video">
                                                <use xlink:href="img/icons/video.svg#video"> </use>
                                            </svg><span>Видеоотзыв</span>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" style="width: 342px;" tabindex="-1"><div><div class="reviews-item__wrap reviews-popup1" style="width: 100%; display: inline-block;">
                                    <div class="reviews-item">
                                        <div class="reviews-item__name">Ольга Семенова</div>
                                        <div class="reviews-item__foto"><img src="img/reviews/woman.jpg" alt="woman"></div>
                                        <div class="reviews-item__company">Название компании</div>
                                        <div class="reviews-item__position">Должность</div>
                                        <div class="reviews-item__review">
                                            <div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                            </div>
                                        </div><a class="reviews-item__more" tabindex="-1"><span>Читать целиком</span></a>
                                        <div class="reviews-item__video">
                                            <svg class="video">
                                                <use xlink:href="img/icons/video.svg#video"> </use>
                                            </svg><span>Видеоотзыв</span>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="7" aria-hidden="true" style="width: 342px;" tabindex="-1"><div><div class="reviews-item__wrap reviews-popup2" style="width: 100%; display: inline-block;">
                                    <div class="reviews-item">
                                        <div class="reviews-item__name">Ольга Семенова</div>
                                        <div class="reviews-item__foto"><img src="img/reviews/man.jpg" alt="man"></div>
                                        <div class="reviews-item__company">Название компании</div>
                                        <div class="reviews-item__position">Должность</div>
                                        <div class="reviews-item__review">
                                            <div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                            </div>
                                        </div><a class="reviews-item__more" tabindex="-1"><span>Читать целиком</span></a>
                                        <div class="reviews-item__video">
                                            <svg class="video">
                                                <use xlink:href="img/icons/video.svg#video"> </use>
                                            </svg><span>Видеоотзыв</span>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="8" aria-hidden="true" style="width: 342px;" tabindex="-1"><div><div class="reviews-item__wrap reviews-popup3" style="width: 100%; display: inline-block;">
                                    <div class="reviews-item">
                                        <div class="reviews-item__name">Ольга Семенова</div>
                                        <div class="reviews-item__foto"><img src="img/reviews/woman.jpg" alt="woman"></div>
                                        <div class="reviews-item__company">Название компании</div>
                                        <div class="reviews-item__position">Должность</div>
                                        <div class="reviews-item__review">
                                            <div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                            </div>
                                        </div><a class="reviews-item__more" tabindex="-1"><span>Читать целиком</span></a>
                                        <div class="reviews-item__video">
                                            <svg class="video">
                                                <use xlink:href="img/icons/video.svg#video"> </use>
                                            </svg><span>Видеоотзыв</span>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="9" aria-hidden="true" style="width: 342px;" tabindex="-1"><div><div class="reviews-item__wrap reviews-popup4" style="width: 100%; display: inline-block;">
                                    <div class="reviews-item">
                                        <div class="reviews-item__name">Ольга Семенова</div>
                                        <div class="reviews-item__foto"><img src="img/reviews/woman.jpg" alt="woman"></div>
                                        <div class="reviews-item__company">Название компании</div>
                                        <div class="reviews-item__position">Должность</div>
                                        <div class="reviews-item__review">
                                            <div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                            </div>
                                        </div><a class="reviews-item__more" tabindex="-1"><span>Читать целиком</span></a>
                                        <div class="reviews-item__video">
                                            <svg class="video">
                                                <use xlink:href="img/icons/video.svg#video"> </use>
                                            </svg><span>Видеоотзыв</span>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="10" aria-hidden="true" style="width: 342px;" tabindex="-1"><div><div class="reviews-item__wrap reviews-popup5" style="width: 100%; display: inline-block;">
                                    <div class="reviews-item">
                                        <div class="reviews-item__name">Ольга Семенова</div>
                                        <div class="reviews-item__foto"><img src="img/reviews/woman.jpg" alt="woman"></div>
                                        <div class="reviews-item__company">Название компании</div>
                                        <div class="reviews-item__position">Должность</div>
                                        <div class="reviews-item__review">
                                            <div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                            </div>
                                        </div><a class="reviews-item__more" tabindex="-1"><span>Читать целиком</span></a>
                                        <div class="reviews-item__video">
                                            <svg class="video">
                                                <use xlink:href="img/icons/video.svg#video"> </use>
                                            </svg><span>Видеоотзыв</span>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="11" aria-hidden="true" style="width: 342px;" tabindex="-1"><div><div class="reviews-item__wrap reviews-popup6" style="width: 100%; display: inline-block;">
                                    <div class="reviews-item">
                                        <div class="reviews-item__name">Ольга Семенова</div>
                                        <div class="reviews-item__foto"><img src="img/reviews/woman.jpg" alt="woman"></div>
                                        <div class="reviews-item__company">Название компании</div>
                                        <div class="reviews-item__position">Должность</div>
                                        <div class="reviews-item__review">
                                            <div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                            </div>
                                        </div><a class="reviews-item__more" tabindex="-1"><span>Читать целиком</span></a>
                                        <div class="reviews-item__video">
                                            <svg class="video">
                                                <use xlink:href="img/icons/video.svg#video"> </use>
                                            </svg><span>Видеоотзыв</span>
                                        </div>
                                    </div>
                                </div></div></div></div></div></div>
        </div>
    </div>
</section>
<section class="about">
    <div class="about__wrap">
        <div class="about-slider slick-initialized slick-slider slick-dotted"><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 6120px; transform: translate3d(-360px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 360px;" tabindex="-1"><div><div class="about-slider__item" style="width: 100%; display: inline-block;">
                                <div class="overlay"></div><img src="img/about/about-3.jpg" alt="about">
                            </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 360px;" role="tabpanel" id="slick-slide20"><div><div class="about-slider__item" style="width: 100%; display: inline-block;">
                                <div class="overlay"></div><img src="img/about/about-1.jpg" alt="about">
                            </div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 360px;" tabindex="-1" role="tabpanel" id="slick-slide21"><div><div class="about-slider__item" style="width: 100%; display: inline-block;">
                                <div class="overlay"></div><img src="img/about/about-2.jpg" alt="about">
                            </div></div></div><div class="slick-slide" data-slick-index="2" aria-hidden="true" style="width: 360px;" tabindex="-1" role="tabpanel" id="slick-slide22"><div><div class="about-slider__item" style="width: 100%; display: inline-block;">
                                <div class="overlay"></div><img src="img/about/about-3.jpg" alt="about">
                            </div></div></div><div class="slick-slide" data-slick-index="3" aria-hidden="true" style="width: 360px;" tabindex="-1" role="tabpanel" id="slick-slide23"><div><div class="about-slider__item" style="width: 100%; display: inline-block;">
                                <div class="overlay"></div><img src="img/about/about-1.jpg" alt="about">
                            </div></div></div><div class="slick-slide" data-slick-index="4" aria-hidden="true" style="width: 360px;" tabindex="-1" role="tabpanel" id="slick-slide24"><div><div class="about-slider__item" style="width: 100%; display: inline-block;">
                                <div class="overlay"></div><img src="img/about/about-2.jpg" alt="about">
                            </div></div></div><div class="slick-slide" data-slick-index="5" aria-hidden="true" style="width: 360px;" tabindex="-1" role="tabpanel" id="slick-slide25"><div><div class="about-slider__item" style="width: 100%; display: inline-block;">
                                <div class="overlay"></div><img src="img/about/about-3.jpg" alt="about">
                            </div></div></div><div class="slick-slide" data-slick-index="6" aria-hidden="true" style="width: 360px;" tabindex="-1" role="tabpanel" id="slick-slide26"><div><div class="about-slider__item" style="width: 100%; display: inline-block;">
                                <div class="overlay"></div><img src="img/about/about-2.jpg" alt="about">
                            </div></div></div><div class="slick-slide" data-slick-index="7" aria-hidden="true" style="width: 360px;" tabindex="-1" role="tabpanel" id="slick-slide27"><div><div class="about-slider__item" style="width: 100%; display: inline-block;">
                                <div class="overlay"></div><img src="img/about/about-3.jpg" alt="about">
                            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="8" aria-hidden="true" style="width: 360px;" tabindex="-1"><div><div class="about-slider__item" style="width: 100%; display: inline-block;">
                                <div class="overlay"></div><img src="img/about/about-1.jpg" alt="about">
                            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="9" aria-hidden="true" style="width: 360px;" tabindex="-1"><div><div class="about-slider__item" style="width: 100%; display: inline-block;">
                                <div class="overlay"></div><img src="img/about/about-2.jpg" alt="about">
                            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="10" aria-hidden="true" style="width: 360px;" tabindex="-1"><div><div class="about-slider__item" style="width: 100%; display: inline-block;">
                                <div class="overlay"></div><img src="img/about/about-3.jpg" alt="about">
                            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="11" aria-hidden="true" style="width: 360px;" tabindex="-1"><div><div class="about-slider__item" style="width: 100%; display: inline-block;">
                                <div class="overlay"></div><img src="img/about/about-1.jpg" alt="about">
                            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="12" aria-hidden="true" style="width: 360px;" tabindex="-1"><div><div class="about-slider__item" style="width: 100%; display: inline-block;">
                                <div class="overlay"></div><img src="img/about/about-2.jpg" alt="about">
                            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="13" aria-hidden="true" style="width: 360px;" tabindex="-1"><div><div class="about-slider__item" style="width: 100%; display: inline-block;">
                                <div class="overlay"></div><img src="img/about/about-3.jpg" alt="about">
                            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="14" aria-hidden="true" style="width: 360px;" tabindex="-1"><div><div class="about-slider__item" style="width: 100%; display: inline-block;">
                                <div class="overlay"></div><img src="img/about/about-2.jpg" alt="about">
                            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="15" aria-hidden="true" style="width: 360px;" tabindex="-1"><div><div class="about-slider__item" style="width: 100%; display: inline-block;">
                                <div class="overlay"></div><img src="img/about/about-3.jpg" alt="about">
                            </div></div></div></div></div><ul class="slick-dots" style="" role="tablist"><li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control20" aria-controls="slick-slide20" aria-label="1 of 8" tabindex="0" aria-selected="true">1</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control21" aria-controls="slick-slide21" aria-label="2 of 8" tabindex="-1">2</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control22" aria-controls="slick-slide22" aria-label="3 of 8" tabindex="-1">3</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control23" aria-controls="slick-slide23" aria-label="4 of 8" tabindex="-1">4</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control24" aria-controls="slick-slide24" aria-label="5 of 8" tabindex="-1">5</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control25" aria-controls="slick-slide25" aria-label="6 of 8" tabindex="-1">6</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control26" aria-controls="slick-slide26" aria-label="7 of 8" tabindex="-1">7</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control27" aria-controls="slick-slide27" aria-label="8 of 8" tabindex="-1">8</button></li></ul></div>
        <div class="wrap-center">
            <div class="wrap">
                <div class="about-info">
                    <div class="logo-wrap">
                        <div class="logo">
                            <svg class="logo-color">
                                <use xlink:href="img/logo.svg#logo"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="about-text">
                        <p>RETAILER – один из ключевых поставщиков информации о потребительском рынке. История компании началась в 2003 году с запуска сообщества профессионалов розничной торговли RETAILER.ru. Пятнадцать лет мы помогаем ритейлерам строить розницу будущего. Ежедневно наши данные используют в работе более 20 000 человек. </p>
                        <p> <span>Наши клиенты – наши партнеры. </span>Их тысячи, а география их работы – вся планета. Среди них розничные компании, поставщики решений для ритейла, поставщики товаров народного потребления, участники рынка торговой недвижимости, банки и страховые компании. </p>
                        <p> <span>

                    С 2014 года раз в квартал компания проводит <span class="main-span">Центры переговоров </span>по торговой недвижимости. </span></p>
                    </div><a href="#" class="btn btn--transparent">Перейти в раздел о нас</a>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer">
    <div class="wrap">
        <div class="footer__wrap">
            <div class="logo-wrap">
                <div class="logo">
                    <svg class="logo-color">
                        <use xlink:href="img/logo.svg#logo"></use>
                    </svg>
                </div>
            </div>
            <div class="social"><a href="#" class="social__item fb">
                    <svg class="fb">
                        <use xlink:href="img/icons/fb.svg#fb"></use>
                    </svg></a><a href="#" class="social__item tw">
                    <svg class="skype">
                        <use xlink:href="img/icons/skype.svg#skype"></use>
                    </svg></a><a href="#" class="social__item ins">
                    <svg class="whatsapp">
                        <use xlink:href="img/icons/whatsapp.svg#whatsapp"></use>
                    </svg></a></div>
            <div class="footer-info">
                <div class="footer-info__wrap">
                    <div class="footer-info__title">Эксперт в коммуникациях на рынке торговой недвижимости</div>
                    <div class="footer-info__text">15 лет мы знакомим нужных друг другу людей и способствуем заключению выгодных сделок</div>
                </div>
            </div>
            <div class="contacts">
                <div class="contacts__tel">
                    <svg class="tel">
                        <use xlink:href="img/icons/phone_white.svg#phone_white"></use>
                    </svg><a href="tel:+78005006606">+ 7(800) 500-66-06</a>
                </div>
                <div class="contacts__mail">
                    <svg class="mail">
                        <use xlink:href="img/icons/mail.svg#mail"></use>
                    </svg><a href="mailto:ask@retailer.ru">ask@retailer.ru</a>
                </div>
            </div>
            <div class="rights">Хорошего понедельника! © 2018 - RETAILER.ru</div>
        </div>
    </div>
</footer>

<script src="js/scripts.min.js"></script>
<script src="js/common.js"></script>

