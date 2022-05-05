const mix = require("laravel-mix");
mix.sass("assets/styles/main.scss", "/dist").options({
  autoprefixer: {},
});
