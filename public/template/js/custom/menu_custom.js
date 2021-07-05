(function ($) {
    let url = window.location.href;
    let page = url.split('/')[3];
    if (page.length === 0) {
        page = 'home';
    }

    $(`li[data-menu='${page}']`).addClass('current-menu-item');
})(jQuery)
