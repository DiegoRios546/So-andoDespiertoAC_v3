const images = ["https://images.pexels.com/photos/8294606/pexels-photo-8294606.jpeg?cs=srgb&dl=pexels-pavel-danilyuk-8294606.jpg&fm=jpg", "https://images.pexels.com/photos/8294620/pexels-photo-8294620.jpeg?cs=srgb&dl=pexels-pavel-danilyuk-8294620.jpg&fm=jpg", "https://images.pexels.com/photos/8294660/pexels-photo-8294660.jpeg?cs=srgb&dl=pexels-pavel-danilyuk-8294660.jpg&fm=jpg"];
const carousel = document.querySelector(".carousel");
const interval = setInterval(function() {
   startCarousel();
 }, 3000);
var index = 1;

startCarousel = () => {
  carousel.style.backgroundImage = `url(${images[index++]})`;
  carousel.classList.remove("fade");
  void carousel.offsetWidth;
  carousel.classList.add("fade");
  if(index > images.length - 1) index = 0;
}