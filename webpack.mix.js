let mix = require("laravel-mix");

mix.js("themes/naas/assets/js/app.js", "public/js")
    .autoload({
        jquery: ["$", "window.jQuery"],
    })
    .css("themes/naas/assets/css/app.css", "public/css");
