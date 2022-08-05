$.fn.multiSizeScreen = function (el, options) {
    var screen = this,
        settings = $.extend({
            size: "desktop",
            speed: "slow"
        }, options);
    console.log(settings);
    if (settings.size === "iPhone") {
        screen.click(function (e) {
            var iPhone = $.extend({
                "width": "320px",
                "height": "620px",
                "padding": "80px 0",
                "border": "1px solid #AAA",
                "border-radius": "25px"
            }, options);
            el.animate(iPhone, settings.speed);
        });
    }
    if (settings.size === "iPad") {
        screen.click(function (e) {
            var iPad = $.extend({
                "width": "540px",
                "height": "820px",
                "padding": "80px 0",
                "border-radius": "10",
                "border": "1px"
            }, options);
            el.animate(iPad, settings.speed);
        });
    }

    if (settings.size === "desktop-small") {
        screen.click(function (e) {
            var desktop = $.extend({
                "width": "1080px",
                "height": "720px",
                "border-radius": "0",
                "border": "1px",
                "padding": "30px 0 1px 0"
            }, options);
            el.animate(desktop, "slow");
        });
    }

    if (settings.size === "desktop-big") {
        screen.click(function (e) {
            var desktop = $.extend({
                "width": "1360px",
                "height": "768px",
                "border-radius": "0",
                "border": "1px",
                "padding": "30px 0 1px 0"
            }, options);
            el.animate(desktop, "slow");
        });
    }

    if (settings.size === "custom") {
        screen.click(function (e) {
            var custom = $.extend({
                "width": "320px",
                "height": "640px",
                "padding": "80px 0",
                "border-radius": "50px",
                "border": "1px"
            }, options);
            el.animate(custom, settings.speed);
        });
    }
};
//
(function () {
    $(function () {
        var frame = $('#frame');
        $('button').each(function () {
            var element = $(this);
            this.size = element.data('screenSize');
            this.option = element.data('screenOption');
            element.multiSizeScreen(frame, $.extend({
                size: this.size
            }, this.option));
        });
    });
})();