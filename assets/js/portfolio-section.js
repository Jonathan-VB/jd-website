$(document).ready(function () {

  // CODE BELOW HERE IS FOR DEMO PURPOSES ONLY
  function getRandomSize(min, max) {
    return Math.round(Math.random() * (max - min) + min);
  }

  var allImages = "";

  for (var i = 0; i < 25; i++) {
    // Get random numbers between 200 and 400
    var width = getRandomSize(200, 400);
    var height =  getRandomSize(200, 400);
    // Gets random images of cats with the random width and height
    // Ignore the messy layout, this JS will be removed once actual content is added.
    allImages += '<div class="portfolio-grid-item__container">';
    allImages += '<div class="portfolio-grid-item">';
    allImages += '<img src="https://placekitten.com/'+width+'/'+height+'" alt="pretty kitty">';
    allImages += '<div class="portfolio-grid-item__overlay"><h2 class="portfolio-grid-item__overlay__title">Hello!!!</h2><button class="button">View Project</button></div>';
    allImages += '</div></div>';
  }

  $('.portfolio-grid').append(allImages);
});
