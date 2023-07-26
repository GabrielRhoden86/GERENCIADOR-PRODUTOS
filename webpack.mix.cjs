const mix = require('laravel-mix');

mix.scripts("node_modules/jquery/dist/jquery.js", "public/js/jquery.js")
    .scripts("node_modules/bootstrap/dist/js/bootstrap.bundle.min.js", "public/js/bootstrap.js")
    .styles("node_modules/bootstrap/dist/css/bootstrap.min.css", "public/css/bootstrap.css");

