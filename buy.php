<?include_once './header.php'?>
<section class="section page to_buy">
    <div class="planing">
        <div class="planing__left">
            <div class="breadcrumbs">
                <a href="#!" class="breadcrumbs__link">Главная</a>
                <a href="#!" class="breadcrumbs__link">Квартиры</a>
            </div>
            <h1 class="page__title">Способы покупки</h1>
            <ul class="planing__list">
                <li class="planing__list__text">Как купить:</li>
                <li class="planing__list__element active" data-room-content="1"><span>01 </span> Ипотека</li>
                <li class="planing__list__element" data-room-content="2"><span>02 </span> Рассрочка</li>
                <li class="planing__list__element" data-room-content="3"><span>03 </span> Сертификаты</li>
                <li class="planing__list__element" data-room-content="4"><span>04 </span> Оплата 100%</li>
            </ul>
        </div>
        <div class="planing__right">
            <div class="planing__right__content active" data-room-content="1">
                <div class="to_buy__title">Ипотека</div>
                <div class="to_buy__text">Все наши проекты аккредитованы ведущими банками, каждый из которых предоставляет ипотечные программы, в том числе индивидуальные, по сниженным ставкам от 4,7% годовых</div>
            </div>
            <div class="planing__right__content" data-room-content="2">
                <div class="to_buy__title">Рассрочка</div>
                <div class="to_buy__text">Первый взнос от 20% с ежемесячной оплатой до 31.12.2021</div>
            </div>
            <div class="planing__right__content" data-room-content="3">
                <div class="to_buy__title">Сертификаты</div>
                <div class="to_buy__text">Маткап, военный, «отцовский сертификат» за третьего ребенка</div>
            </div>
            <div class="planing__right__content" data-room-content="4">
                <div class="to_buy__title">Оплата 100%</div>
                <div class="to_buy__text">Оплата 100%</div>
            </div>
        </div>
    </div>
</section>
<section class="page_second banks">
    <div class="main_container">
        <h2 class="page__title">Предложения банков</h2>
        <div class="banks__container">
            <div class="banks__element">
                <div class="banks__img">
                    <div class="banks__img__element" style="background-image:url(/images/vtb.png)"></div>
                </div>
                <div class="banks__name">ВТБ</div>
                <div class="banks__rate">
                    <div class="banks__rate__name">Ставка</div>
                    <div class="banks__rate__value">от 5,0%</div>
                </div>
                <div class="banks__rate big">
                    <div class="banks__rate__name">Первоначальный взнос</div>
                    <div class="banks__rate__value">15%</div>
                </div>
                <a href="#!" class="banks__calculate">Рассчитать ипотеку</a>
            </div>
            <div class="banks__element">
                <div class="banks__img">
                    <div class="banks__img__element" style="background-image:url(/images/sber.png)"></div>
                </div>
                <div class="banks__name">Сбербанк</div>
                <div class="banks__rate">
                    <div class="banks__rate__name">Ставка</div>
                    <div class="banks__rate__value">от 5,0%</div>
                </div>
                <div class="banks__rate big">
                    <div class="banks__rate__name">Первоначальный взнос</div>
                    <div class="banks__rate__value">–</div>
                </div>
                <a href="#!" class="banks__calculate">Рассчитать ипотеку</a>
            </div>
            <div class="banks__element">
                <div class="banks__img">
                    <div class="banks__img__element" style="background-image:url(/images/alpha.png)"></div>
                </div>
                <div class="banks__name">Альфабанк</div>
                <div class="banks__rate">
                    <div class="banks__rate__name">Ставка</div>
                    <div class="banks__rate__value">от 4,69%</div>
                </div>
                <div class="banks__rate big">
                    <div class="banks__rate__name">Первоначальный взнос</div>
                    <div class="banks__rate__value">–</div>
                </div>
                <a href="#!" class="banks__calculate">Рассчитать ипотеку</a>
            </div>
        </div>
    </div>
</section>
<section class="section form">
   <div class="form__left" style="background-image:url(/images/right_image_top.png)"></div>
   <div class="form__right">
       <form class="form__container">
           <div class="form__title">расчет заявки на ипотеку бесплатно</div>
           <div class="form__subtitle">Оставьте свои контактные данные и получите консультацию менеджера по покупке квартиры по выгодным ценам, ипотеке или рассрочке в ЖК «Прибрежный»</div>
            <input type="text" class="form__input" placeholder="Ваше имя">
            <input type="tel" class="form__input" placeholder="Номер телефона">
            <div class="form__bottom">
                <div class="form__policy">Нажимая на кнопку, вы принимаете политику конфиденциальности и даете согласие на <a href="#!">обработку персональных данных</a></div>
                <input type="submit" class="form__submit" value="">
            </div>
       </form>
   </div>
</section>
<?include_once './footer.php'?>