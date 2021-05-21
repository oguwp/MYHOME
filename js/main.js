;
(function () {

    'use strict';

    let isMobile = {
        Android: function () {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function () {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function () {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function () {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function () {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function () {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };


    // iPad and iPod detection	
    let isiPad = function () {
        return (navigator.platform.indexOf("iPad") != -1);
    };

    let isiPhone = function () {
        return (
            (navigator.platform.indexOf("iPhone") != -1) ||
            (navigator.platform.indexOf("iPod") != -1)
        );
    };

    let fullHeight = function () {

        if (!isMobile.any()) {
            $('.js-fullheight').css('height', $(window).height());
            $(window).resize(function () {
                $('.js-fullheight').css('height', $(window).height());
            });
        }

    };

    // Main Menu Superfish
    let mainMenu = function () {

        $('#myhome-primary-menu').superfish({
            delay: 0,
            animation: {
                opacity: 'show'
            },
            speed: 'fast',
            cssArrows: true,
            disableHI: true
        });

    };

    //Date Picker

    $('#date-start, #date-end').datepicker();

   [].slice.call(document.querySelectorAll('select.cs-select')).forEach(function (el) {
        new SelectFx(el);
    });

    // Offcanvas and cloning of the main menu
    let offcanvas = function () {

        let $clone = $('#myhome-menu-wrap').clone();
        $clone.attr({
            'id': 'offcanvas-menu'
        });
        $clone.find('> ul').attr({
            'class': '',
            'id': ''
        });

        $('#myhome-page').prepend($clone);

        // click the burger
        $('.js-myhome-nav-toggle').on('click', function () {

            if ($('body').hasClass('myhome-offcanvas')) {
                $('body').removeClass('myhome-offcanvas');
            } else {
                $('body').addClass('myhome-offcanvas');
            }
            // event.preventDefault();

        });

        $('#offcanvas-menu').css('height', $(window).height());

        $(window).resize(function () {
            let w = $(window);


            $('#offcanvas-menu').css('height', w.height());

            if (w.width() > 769) {
                if ($('body').hasClass('myhome-offcanvas')) {
                    $('body').removeClass('myhome-offcanvas');
                }
            }

        });

    }



    // Click outside of the Mobile Menu
    let mobileMenuOutsideClick = function () {
        $(document).click(function (e) {
            let container = $("#offcanvas-menu, .js-myhome-nav-toggle");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                if ($('body').hasClass('myhome-offcanvas')) {
                    $('body').removeClass('myhome-offcanvas');
                }
            }
        });
    };


    // Animations

    let contentWayPoint = function () {
        let i = 0;
        $('.animate-box').waypoint(function (direction) {

            if (direction === 'down' && !$(this.element).hasClass('animated')) {

                i++;

                $(this.element).addClass('item-animate');
                setTimeout(function () {

                    $('body .animate-box.item-animate').each(function (k) {
                        let el = $(this);
                        setTimeout(function () {
                            el.addClass('fadeInUp animated');
                            el.removeClass('item-animate');
                        }, k * 50, 'easeInOutExpo');
                    });

                }, 100);

            }

        }, {
            offset: '85%'
        });
    };

    let sliderMain = function () {

        $('#myhome-hero .flexslider').flexslider({
            animation: "fade",
            slideshowSpeed: 5000,
            directionNav: true,
            start: function () {
                setTimeout(function () {
                    $('.slider-text').removeClass('animated fadeInUp');
                    $('.flex-active-slide').find('.slider-text').addClass('animated fadeInUp');
                }, 500);
            },
            before: function () {
                setTimeout(function () {
                    $('.slider-text').removeClass('animated fadeInUp');
                    $('.flex-active-slide').find('.slider-text').addClass('animated fadeInUp');
                }, 500);
            }

        });

        $('#myhome-hero .flexslider .slides > li').css('height', $(window).height());
        $(window).resize(function () {
            $('#myhome-hero .flexslider .slides > li').css('height', $(window).height());
        });

    };

    let stickyBanner = function () {
        let $stickyElement = $('.sticky-banner');
        let sticky;
        if ($stickyElement.length) {
            sticky = new Waypoint.Sticky({
                element: $stickyElement[0],
                offset: 0
            })
        }
    };

    // Document on load.
    $(function () {
        mainMenu();
        offcanvas();
        mobileMenuOutsideClick();
        contentWayPoint();
        sliderMain();
        fullHeight();
        stickyBanner();
    });


}());
