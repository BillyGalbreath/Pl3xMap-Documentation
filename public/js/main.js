$(document).ready(function () {
    SyntaxHighlighter.defaults['toolbar'] = false;
    SyntaxHighlighter.all();
});

(function ($) {
    "use strict"

    /* ==============================================
    ANIMATION -->
    =============================================== */

    new WOW({
        boxClass: 'wow', // default
        animateClass: 'animated', // default
        offset: 0, // default
        mobile: true, // default
        live: true // default
    }).init()

    /* ==============================================
    LIGHTBOX -->
    =============================================== */

    jQuery('a[data-gal]').each(function () {
        jQuery(this).attr('rel', jQuery(this).data('gal'))
    })
    jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({
        animationSpeed: 'slow',
        theme: 'light_square',
        slideshow: true,
        overlay_gallery: true,
        social_tools: false,
        deeplinking: false
    })

    /* ==============================================
    SCROLL -->
    =============================================== */

    $(function () {
        $('a[href^="/"]').click(function () {
            let target = $(this.pathname.replace("/", "#").replaceAll("/", "_"))
            if (target.length) {
                window.history.replaceState(null, "title", "/" + target.attr('id').replaceAll("_", "/"))
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 500)
                return false
            }
        })
    })

    /* ==============================================
    SCROLLSPY -->
    =============================================== */

    $('body').scrollspy({
        target: '.docs-sidebar'
    })

    $('[data-spy="scroll"]').each(function () {
        var $spy = $(this).scrollspy('refresh')
    })

    $('.docs-sidebar').on('activate.bs.scrollspy', function () {
        setTimeout(() => {
            let url = $(".nav .nav li.active > a").attr("href") ?? $(".nav li.active > a").attr("href")
            window.history.replaceState(null, "title", url?.replaceAll("_", "/") ?? "/")
        }, 500)
    })

})(jQuery);
