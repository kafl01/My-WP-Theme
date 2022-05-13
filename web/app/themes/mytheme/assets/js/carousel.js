import { Carousel } from "bootstrap";
var myCarousel = document.querySelector("#myCarousel");
var carousel = new Carousel(myCarousel, {
  interval: 2000,
  keyboard: true,
  pause: "hover",
  wrap: false,
  touch: true,
});
