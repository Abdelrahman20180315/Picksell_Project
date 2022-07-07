$(document).ready(function () {
  $(".owl-best_seller").owlCarousel({
    center: true,
    loop: true,
    margin: 10,
    dots: true,
    nav: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 4,
      },
      1000: {
        items: 4,
      },
    },
  });

  // Go to the next item
  $(".customNextBtn0").click(function () {
    $(".owl-best_seller").trigger("next.owl.carousel");
  });
  // Go to the previous item
  $(".customPrevBtn0").click(function () {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    $(".owl-best_seller").trigger("prev.owl.carousel", [300]);
  });

  // dealer offers slider =======================================

  $(".owl-dealer_offers").owlCarousel({
    center: true,
    loop: true,
    margin: 10,
    dots: true,
    nav: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 4,
      },
      1000: {
        items: 4,
      },
    },
  });

  // Go to the next item
  $(".customNextBtn1").click(function () {
    $(".owl-dealer_offers").trigger("next.owl.carousel");
  });
  // Go to the previous item
  $(".customPrevBtn1").click(function () {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    $(".owl-dealer_offers").trigger("prev.owl.carousel", [300]);
  });

  // profit products  =======================================

  $(".owl-profit_products").owlCarousel({
    center: true,
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 4,
      },
      1000: {
        items: 4,
      },
    },
  });

  // Go to the next item
  $(".customNextBtn2").click(function () {
    $(".owl-profit_products").trigger("next.owl.carousel");
  });
  // Go to the previous item
  $(".customPrevBtn2").click(function () {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    $(".owl-profit_products").trigger("prev.owl.carousel", [300]);
  });

  // profit products  =======================================

  $(".owl-newest_products").owlCarousel({
    center: true,
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 4,
      },
      1000: {
        items: 4,
      },
    },
  });

  // Go to the next item
  $(".customNextBtn3").click(function () {
    $(".owl-newest_products").trigger("next.owl.carousel");
  });
  // Go to the previous item
  $(".customPrevBtn3").click(function () {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    $(".owl-newest_products").trigger("prev.owl.carousel", [300]);
  });

  // all products  =======================================

  $(".owl-all_products").owlCarousel({
    center: true,
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 4,
      },
      1000: {
        items: 4,
      },
    },
  });

  // Go to the next item
  $(".customNextBtn4").click(function () {
    $(".owl-all_products").trigger("next.owl.carousel");
  });
  // Go to the previous item
  $(".customPrevBtn4").click(function () {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    $(".owl-all_products").trigger("prev.owl.carousel", [300]);
  });

  // all mens_wear  =======================================

  $(".owl-mens_wear").owlCarousel({
    center: true,
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 4,
      },
      1000: {
        items: 4,
      },
    },
  });

  // Go to the next item
  $(".customNextBtn5").click(function () {
    $(".owl-mens_wear").trigger("next.owl.carousel");
  });
  // Go to the previous item
  $(".customPrevBtn5").click(function () {
    $(".owl-mens_wear").trigger("prev.owl.carousel", [300]);
  });
});
