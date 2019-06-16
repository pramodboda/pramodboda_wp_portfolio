$(document).ready(function() {
  var $grid1 = $(".pramodize__gallery").isotope({
    itemSelector: ".pramodize__gallery .grid-item",
    horizontalOrder: true,
    // masonry: {
    //     columnWidth: 100,
    //     gutterWidth: 15
    //   }
  });

  // filter items
  $grid1.isotope({ filter: ".art" });
  $grid1.isotope({ filter: ".design" });
  $grid1.isotope({ filter: ".nature" });
  $grid1.isotope({ filter: ".technology" });
  // show all items
  $grid1.isotope({ filter: "*" });

  $(".pramodize__nav").on("click", ".nav-link", function() {
    var filterValue = $(this).attr("data-filter");
    $grid1.isotope({ filter: filterValue });
  });
});
