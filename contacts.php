<?include_once './header.php'?>
<section class="page contacts">
    <div class="main_block__row image__right">
        <div class="main_block__left">
            <div class="breadcrumbs">
                <a href="#!" class="breadcrumbs__link">Главная</a>
                <a href="#!" class="breadcrumbs__link">Контакты</a>
            </div>
            <h1 class="page__title">Контакты</h1>
            <div class="contacts__left">
                <div class="contacts__left__block">
                    <div class="main_block__image_mobile big" id="main_block__right__mobile"></div>
                    <div class="contacts__left__title">Адрес офиса продаж:</div>
                    <div class="contacts__left__element">г.Уфа, проспект октября 132/3</div>
                    <div class="contacts__left__element">Пн-Пт 9:00–21:00,</div>
                    <div class="contacts__left__element">Сб-Вс 10:00–20:00</div>
                </div>
                <div class="contacts__left__block">
                    <div class="contacts__left__title">Телефон и почта</div>
                    <div class="contacts__left__content">
                        <div class="contacts__left__content__left">
                            <a href="tel:+73472935393" class="contacts__left__element">+7 (347) 293-53-93</a>
                            <a href="mail:kpdnedv@mail.ru" class="contacts__left__element">kpdnedv@mail.ru</a>
                        </div>
                        <div class="contacts__left__content__right">
                            <div class="contacts__left__bottom">
                                <a href="#!" class="contacts__left__link fb"></a>
                                <a href="#!" class="contacts__left__link vk"></a>
                                <a href="#!" class="contacts__left__link inst"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contacts__call call_message" data-popup="popup__call">Заказать звонок</div>
            </div>
        </div>
        <div class="main_block__right top" id="main_block__right__bottom">
        </div>
    </div>
    <div class="form">
        <div class="form__left" style="background-image:url(/images/right_image_top.png)"></div>
        <div class="form__right">
            <form class="form__container">
                <div class="form__title">Запишитесь на консультацию</div>
                <div class="form__subtitle">Оставьте свои контактные данные и получите консультацию менеджера по покупке квартиры по выгодным ценам, ипотеке или рассрочке в ЖК «Прибрежный»</div>
                    <input type="text" class="form__input" placeholder="Ваше имя">
                    <input type="tel" class="form__input" placeholder="Номер телефона">
                    <div class="form__bottom">
                        <div class="form__policy">Нажимая на кнопку, вы принимаете политику конфиденциальности и даете согласие на <a href="#!">обработку персональных данных</a></div>
                        <input type="submit" class="form__submit" value="">
                    </div>
            </form>
        </div>
    </div>
</section>
<?include_once './footer.php'?>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function(){
        if($(window).width() > 992){
            ymaps.ready(function () {
            let myMap = new ymaps.Map("main_block__right__bottom", {
                center: [55.76, 37.64],
                zoom: 10,
                controls: []
            });
            MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
            );

            myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            }, {
                iconLayout: 'default#image',
                iconImageHref: '/images/yandex_pointer.svg',
                iconImageSize: [40, 40],
                iconImageOffset: [-20, -20]
            });

            myMap.geoObjects
                .add(myPlacemark)
            });
        }else{
            ymaps.ready(function () {
            let myMap = new ymaps.Map("main_block__right__mobile", {
                center: [55.76, 37.64],
                zoom: 10,
                controls: []
            });
            MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
            );

            myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            }, {
                iconLayout: 'default#image',
                iconImageHref: '/images/yandex_pointer.svg',
                iconImageSize: [40, 40],
                iconImageOffset: [-20, -20]
            });

            myMap.geoObjects
                .add(myPlacemark)
            });
        }
        
    })
</script>

