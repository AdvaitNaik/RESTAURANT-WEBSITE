// var carousel = document.querySelector('.carousel');
// var cellCount = 9;
// var selectedIndex = 0;

// function rotateCarousel() {
//   var angle = selectedIndex / cellCount * -360;
//   carousel.style.transform = 'translateZ(-288px) rotateY(' + angle + 'deg)';
// }

// var prevButton = document.querySelector('.previous-button');
// prevButton.addEventListener( 'click', function() {
//   selectedIndex--;
//   rotateCarousel();
// });

// var nextButton = document.querySelector('.next-button');
// nextButton.addEventListener( 'click', function() {
//   selectedIndex++;
//   rotateCarousel();
// });

// ------------------------------------------------------------------------
                                //  ROUND CAROUSEL

// var carousel = document.querySelector('.carousel');
// var cells = carousel.querySelectorAll('.carousel__cell');
// var cellCount; // cellCount set from cells-range input value
// var selectedIndex = 0;
// var cellWidth = carousel.offsetWidth;
// var cellHeight = carousel.offsetHeight;
// var isHorizontal = true;
// var rotateFn = isHorizontal ? 'rotateY' : 'rotateX';
// var radius, theta;
// // console.log( cellWidth, cellHeight );

// function rotateCarousel() {
//   var angle = theta * selectedIndex * -1;
//   carousel.style.transform = 'translateZ(' + -radius + 'px) ' + 
//     rotateFn + '(' + angle + 'deg)';
// }

// var prevButton = document.querySelector('.previous-button');
// prevButton.addEventListener( 'click', function() {
//   selectedIndex--;
//   rotateCarousel();
// });

// var nextButton = document.querySelector('.next-button');
// nextButton.addEventListener( 'click', function() {
//   selectedIndex++;
//   rotateCarousel();
// });

// var cellsRange = document.querySelector('.cells-range');
// cellsRange.addEventListener( 'change', changeCarousel );
// cellsRange.addEventListener( 'input', changeCarousel );



// function changeCarousel() {
//   cellCount = cellsRange.value;
//   theta = 360 / cellCount;
//   var cellSize = isHorizontal ? cellWidth : cellHeight;
//   radius = Math.round( ( cellSize / 2) / Math.tan( Math.PI / cellCount ) );
//   for ( var i=0; i < cells.length; i++ ) {
//     var cell = cells[i];
//     if ( i < cellCount ) {
//       // visible cell
//       cell.style.opacity = 1;
//       var cellAngle = theta * i;
//       cell.style.transform = rotateFn + '(' + cellAngle + 'deg) translateZ(' + radius + 'px)';
//     } else {
//       // hidden cell
//       cell.style.opacity = 0;
//       cell.style.transform = 'none';
//     }
//   }

//   rotateCarousel();
// }

// var orientationRadios = document.querySelectorAll('input[name="orientation"]');
// ( function() {
//   for ( var i=0; i < orientationRadios.length; i++ ) {
//     var radio = orientationRadios[i];
//     radio.addEventListener( 'change', onOrientationChange );
//   }
// })();

// function onOrientationChange() {
//   var checkedRadio = document.querySelector('input[name="orientation"]:checked');
//   isHorizontal = checkedRadio.value == 'horizontal';
//   rotateFn = isHorizontal ? 'rotateY' : 'rotateX';
//   changeCarousel();
// }

// // set initials
// onOrientationChange();




                                          // OWL CAROUSEL
// $('.owl-carousel').owlCarousel({
//   loop: true,
//   margin: 10,
//   nav: true,
//   navText: [
//     "<i class='fa fa-caret-left'></i>",
//     "<i class='fa fa-caret-right'></i>"
//   ],
//   autoplay: true,
//   autoplayHoverPause: true,
//   responsive: {
//     0: {
//       items: 1
//     },
//     600: {
//       items: 3
//     },
//     1000: {
//       items: 5
//     }
//   }
// })


/*
    Carousel
*/
$('#carousel-example').on('slide.bs.carousel', function (e) {
  /*
      CC 2.0 License Iatek LLC 2018 - Attribution required
  */
  var $e = $(e.relatedTarget);
  var idx = $e.index();
  var itemsPerSlide = 5;
  var totalItems = $('.carousel-item').length;

  if (idx >= totalItems-(itemsPerSlide-1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i=0; i<it; i++) {
          // append slides to end
          if (e.direction=="left") {
              $('.carousel-item').eq(i).appendTo('.carousel-inner');
          }
          else {
              $('.carousel-item').eq(0).appendTo('.carousel-inner');
          }
      }
  }
})