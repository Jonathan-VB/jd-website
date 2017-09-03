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
    allImages += '<div class="portfolio-grid-item"><a href="#">';
    allImages += '<img src="https://placekitten.com/'+width+'/'+height+'" alt="pretty kitty">';
    allImages += '<div class="portfolio-grid-item__overlay">';
    allImages += '<h1 class="portfolio-grid-item__overlay__title">PROJECT TITLE</h1><h2 class="portfolio-grid-item__overlay__subtitle">Project Subtitle</h2>';
    allImages += '</div></div></a></div>';
  }

  $('.portfolio-grid').append(allImages);
});
