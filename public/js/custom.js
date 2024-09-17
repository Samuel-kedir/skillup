(function ($) {
    'use strict';

    // Page loading animation
    $(window).on('load', function () {
        $('#js-preloader').addClass('loaded');
    });

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        var box = $('.header-text').height();
        var header = $('header').height();

        if (scroll >= box - header) {
            $('header').addClass('background-header');
        } else {
            $('header').removeClass('background-header');
        }
    });

    var width = $(window).width();
    $(window).resize(function () {
        if (width > 767 && $(window).width() < 767) {
            location.reload();
        } else if (width < 767 && $(window).width() > 767) {
            location.reload();
        }
    });

    const elem = document.querySelector('.event_box');
    const filtersElem = document.querySelector('.event_filter');
    if (elem) {
        const rdn_events_list = new Isotope(elem, {
            itemSelector: '.event_outer',
            layoutMode: 'masonry',
            filter: '.featured',
        });

        if (filtersElem) {
            filtersElem.addEventListener('click', function (event) {
                if (!matchesSelector(event.target, 'a')) {
                    return;
                }
                const filterValue = event.target.getAttribute('data-filter');
                rdn_events_list.arrange({
                    filter: filterValue,
                });
                filtersElem
                    .querySelector('.is_active')
                    .classList.remove('is_active');
                event.target.classList.add('is_active');
                event.preventDefault();
            });
        }
    }

    $('.owl-banner').owlCarousel({
        center: true,
        items: 1,
        loop: true,
        nav: true,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>',
        ],
        margin: 30,
        responsive: {
            992: {
                items: 1,
            },
            1200: {
                items: 1,
            },
        },
        onInitialized: function () {
            initializeVideoEventHandlers();
            // Call the video event handler setup here

            console.log('video is initialized');
        },
    });

    // Other carousel or JS functionalities ...

    function initializeVideoEventHandlers() {}

    // Ensure the preloader and other elements are loaded
    $(window).on('load', function () {
        if ($('.cover').length) {
            $('.cover').parallax({
                imageSrc: $('.cover').data('image'),
                zIndex: '1',
            });
        }

        $('#preloader').animate(
            {
                opacity: '0',
            },
            600,
            function () {
                setTimeout(function () {
                    $('#preloader').css('visibility', 'hidden').fadeOut();
                }, 300);
            },
        );
    });

    const dropdownOpener = $('.main-nav ul.nav .has-sub > a');

    if (dropdownOpener.length) {
        dropdownOpener.each(function () {
            var _this = $(this);

            _this.on('tap click', function (e) {
                var thisItemParent = _this.parent('li'),
                    thisItemParentSiblingsWithDrop =
                        thisItemParent.siblings('.has-sub');

                if (thisItemParent.hasClass('has-sub')) {
                    var submenu = thisItemParent.find('> ul.sub-menu');

                    if (submenu.is(':visible')) {
                        submenu.slideUp(450, 'easeInOutQuad');
                        thisItemParent.removeClass('is-open-sub');
                    } else {
                        thisItemParent.addClass('is-open-sub');

                        if (thisItemParentSiblingsWithDrop.length === 0) {
                            thisItemParent
                                .find('.sub-menu')
                                .slideUp(400, 'easeInOutQuad', function () {
                                    submenu.slideDown(250, 'easeInOutQuad');
                                });
                        } else {
                            thisItemParent
                                .siblings()
                                .removeClass('is-open-sub')
                                .find('.sub-menu')
                                .slideUp(250, 'easeInOutQuad', function () {
                                    submenu.slideDown(250, 'easeInOutQuad');
                                });
                        }
                    }
                }

                e.preventDefault();
            });
        });
    }
})(window.jQuery);

$(document).on('click', '.show-video', function () {
    var videoContainer = $('.video-container');
    var closeVideoButton = $('.close-video');

    // Check if video container and close button exist
    if ($(this) && videoContainer && closeVideoButton) {
        console.log('Video button clicked');

        if (
            videoContainer.css('display') === 'none' ||
            videoContainer.css('display') === ''
        ) {
            videoContainer.css('display', 'flex');
        } else {
            videoContainer.css('display', 'none');
        }

        // Close video when the close button is clicked
        closeVideoButton.on('click', function () {
            videoContainer.css('display', 'none'); // Hide the video container
            $('#show-video').css('display', 'inline-block'); // Show the play button again
        });
    } else {
        console.error('Required elements for video functionality not found.');
    }
});
