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
    allImages += '<img src="https://placekitten.com/'+width+'/'+height+'" alt="pretty kitty">';
  }

  $('.portfolio-grid').append(allImages);
});
