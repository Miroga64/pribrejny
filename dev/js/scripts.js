$(document).ready(function(){
    
    let mass = [];

    if($('.atmosphere').length > 0){
        $('.atmosphere').slick({
            fade: true,
            slidesToShow: 1,
            prevArrow: "<div class='atmosphere__arrow'></div>",
            nextArrow: "<div class='atmosphere__arrow rotate'></div>"
        })
    }

    $('.rooms__right__switch__link').on('click', function(){
        $('.rooms__right__switch__link.active').removeClass('active')
        $(this).addClass('active')
        if($(this).hasClass('room_plan')){
            $('.rooms').removeClass('list').addClass('plan')
        }else{
            $('.rooms').removeClass('plan').addClass('list')
        }
    })

    $('svg path').hover(
        function(){
            if($(this).attr('fill-opacity')){
                if(mass.length > 0){
                    clearTimeout(mass[+$(this).attr('data-arr')])
                }
                $(this).attr('fill-opacity', 1)
            }

    }, function(){
        if($(this).attr('fill-opacity')){
            mass[+$(this).attr('data-arr')] = setTimeout(()=>{
                $(this).attr('fill-opacity', 0.2)
            }, 100)
        }
    })

    $(window).on('scroll', function(){

        if($(window).scrollTop() > 20 && $('.header').hasClass('transparent')){
            $('.header').removeClass('transparent')
        }

        if($(window).scrollTop() < 20 && !$('.header').hasClass('transparent') && !$('.header').hasClass('white')){
            $('.header').addClass('transparent') 
        }
    })

    let serv_tab = document.getElementById('custom_scroll');

    if(serv_tab){
        Ps.initialize(serv_tab);	
    }

    $('.space__left__count').on('click', function(){
        $('.space__left__count.active').removeClass('active')
        $(this).addClass('active');
    })

    $('.popup__close').on('click', function(){
        $(this).closest('.popup.active').removeClass('active')
    })

    $('[data-popup]').on('click', function(){
        $(`.${$(this).attr('data-popup')}`).addClass('active')
    })

    $('.doc__left__element').on('click', function(){
        $('.doc__left__element.active').removeClass('active')
        $(this).addClass('active');
    })

    $('.header__btn').on('click', function(){
        $('.header__btn, .menu__mobile').toggleClass('active')
    })

    $('.popup__slider__slider').slick({
        fade: true,
        slidesToShow: 1,
        prevArrow: "<div class='popup__slider__arrow'></div>",
        nextArrow: "<div class='popup__slider__arrow rotate'></div>"
    })
    //NEW SCRIPTS
    let sliderNumber = 1;

    $('.advantages__tabs__element[data-advantages-tab]').on('click', function(){
        $('[data-advantages-tab].active').removeClass('active')
        sliderNumber = parseInt($(this).attr('data-advantages-tab'));
        $(`[data-advantages-tab=${$(this).attr('data-advantages-tab')}]`).addClass('active')
    })

    $('.rooms__right__switch__container').on('click', function(e){
        $('[data-toggle-view].active').removeClass('active')
        $(`[data-toggle-view=${$(e.target).attr('data-toggle-view')}]`).addClass('active')
        if($(e.target).hasClass('left')){
            $(this).removeClass('right').addClass('left')
            $('.rooms__right__cost').removeClass('active')
        }else{
            $(this).removeClass('left').addClass('right')
            $('.rooms__right__cost').addClass('active')
        }
    })

    $('.rooms__right__cost').on('click', function(){
        $(this).toggleClass('upper')
        if($(this).hasClass('upper')){
            $('.rooms__right__cost span').text('Стоимость (возр.)')
        }else{
            $('.rooms__right__cost span').text('Стоимость (убыв.)')
        }
    })

    $('.rooms__title').on('click', function(){
        $('.rooms').toggleClass('active')
    })

    $('.advantages .slider_arrows').on('click', function(){
        $('[data-advantages-tab].active').removeClass('active')
        if($(this).hasClass('rotate')){
            sliderNumber += 1;
            if(sliderNumber > 6){
                sliderNumber = 1;
            }
        }else{
            sliderNumber -= 1;
            if(sliderNumber < 1){
                sliderNumber = 6;
            }
        }
        $(`[data-advantages-tab=${sliderNumber}]`).addClass('active')
    })

    $('.planing__list__element').on('click', function(){
        $('.planing__list__element.active, .planing__right__content.active').removeClass('active')
        $(`[data-room-content=${$(this).attr('data-room-content')}]`).addClass('active')
    })

    $('.next').on('click', function(){
        $('.popup__text__title').text($(this).attr('data-title'))
        $('.popup__text__text').text($(this).attr('data-text'))
        $('.popup__text').addClass('active')
    })

    $('.news__left__element').hover(
        function(){
            let top;
            if(!$(this).hasClass('not_move')){
                if($(window).width() > 992){
                    top = $(this).position().top - 300 > 150 ? $(this).position().top - 300 : 150;
                    top = top + 300 > $('.news__left__list').height() ? top - 120 : top;
                }else{
                    top = $(this).position().top - 200 > 100 ? $(this).position().top - 200 : 100;
                    top = top + 100 > $('.news__left__list').height() ? top - 100 : top;
                }
                $('.news__right').css({
                    'background-image':`url(${$(this).attr('data-right-picture')})`,
                    'top': top,
                })
                $('.news__right').addClass('active')
            }else{
                $('.news__right').css({
                    'background-image':`url(${$(this).attr('data-right-picture')})`,
                })
                $('.news__right').addClass('active')
            }
        }, 
        function(){
            $('.news__right').css({
                'background-image':``
            })
            $('.news__right').removeClass('active')
        }
    )
})
