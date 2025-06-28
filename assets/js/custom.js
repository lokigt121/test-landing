$(document).ready(function () {
    $('.video__preview').on('click', function () {
        $(this).hide()
        $(this)
            .siblings('iframe')
            .attr('src', `${$(this).siblings('iframe').attr('src')}?autoplay=1&mute=1&playsinline=1&enablejsapi=1`)
            .show()
        setTimeout(() => {
            $('#who-we-are-video')[0].contentWindow.postMessage(
                JSON.stringify({
                    event: 'command',
                    func: 'unMute',
                    args: '',
                }),
                '*'
            )
        }, 1000)
    })
    const reviewsSlider = new Swiper('.reviews-block__slider', {
        loop: false,
        grabCursor: true,
        simulateTouch: true,
        spaceBetween: 30,
        slidesPerView: 'auto',
        navigation: {
            nextEl: '.reviews-block__slider .swiper-navigation__next',
            prevEl: '.reviews-block__slider .swiper-navigation__prev',
        },
        pagination: {
            el: '.reviews-block__slider .swiper-pagination',
            clickable: true,
            type: 'bullets',
        },
    })
})
