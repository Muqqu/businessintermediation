$(document).ready(function () {
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
      $(".header").addClass("bg-dark");
    } else if ($(".header .navbar-collapse").hasClass("show")) {
      $(".header").addClass("bg-dark");
    } else {
      $(".header").removeClass("bg-dark");
    }
  });

  $(".header .navbar-toggler").on("click", function () {
    setTimeout(function () {
      if ($(".header .navbar-collapse").hasClass("show")) {
        $(".header").addClass("bg-dark");
      } else {
        $(".header").removeClass("bg-dark");
      }
    }, 20);
  });

  $(".hero-slider").slick({
    autoplay: true,
    arrows: false,
    dots: false,
    infinite: false,
    speed: 500,
    slidesToShow: 1,
    fade: true,
    adaptiveHeight: true
  });
  $(".recommended-slider").slick({
    dots: false,
    arrows: true,
    infinite: true,
    autoplay: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
  $(".real-state-slider").slick({
    dots: true,
    arrows: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    autoplay: true,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });

  $.fn.RevSelectBox = function () {
    this.each(function () {
      var $this = $(this),
        numberOfOptions = $(this).children("option").length;

      $this.addClass("select-hidden");

      if (!$this.parent().hasClass("rev-select")) {
        $this.wrap('<div class="rev-select"></div>');
      }
      $this.closest(".rev-select").find(".select-styled").remove();
      $this.closest(".rev-select").find(".select-options").remove();

      $this.after('<div class="select-styled"></div>');

      var $styledSelect = $this.next("div.select-styled");
      if ($this.find("option:selected")) {
        $styledSelect.text($this.find("option:selected").text());
      } else {
        $styledSelect.text($this.children("option").eq(0).text());
      }

      var $list = $("<ul />", {
        class: "select-options",
      }).insertAfter($styledSelect);

      for (var i = 0; i < numberOfOptions; i++) {
        $("<li />", {
          text: $this.children("option").eq(i).text(),
          rel: $this.children("option").eq(i).val(),
        }).appendTo($list);
      }

      var $listItems = $list.children("li");

      $styledSelect.click(function (e) {
        e.stopPropagation();
        $("div.select-styled.active")
          .not(this)
          .each(function () {
            $(this).removeClass("active").next("ul.select-options").hide();
          });
        $(this).toggleClass("active").next("ul.select-options").toggle();
      });

      $listItems.click(function (e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass("active");
        $this.val($(this).attr("rel")).trigger("change");
        $list.hide();
        //console.log($this.val());
      });

      $this.change(function (e) {
        // e.stopPropagation();
        $styledSelect.text($this.find("option:selected").text());
      });

      $(document).click(function () {
        $styledSelect.removeClass("active");
        $list.hide();
      });
    });
  };
  $(".rev-select-box").RevSelectBox();
  $("select").RevSelectBox();

  $("#price-range").slider({
    step: 500,
    range: true,
    min: 0,
    max: 20000,
    values: [0, 200000],
    slide: function (event, ui) {
      $("#priceRange").val(ui.values[0] + " - " + ui.values[1]);
    },
  });
  $("#priceRange").val(
    $("#price-range").slider("values", 0) +
      " - " +
      $("#price-range").slider("values", 1)
  );

  $(function () {
    $(".datepicker").datepicker();
  });
  
  let headerHeight = $('.header').height();
  $('.custom-margin').css('margin-top', headerHeight);
});

const ctx = document.getElementById("myChart");
new Chart(ctx, {
  type: "line",
  data: {
    labels: [
      "Dec 21",
      "Dec 22",
      "Dec 23",
      "Dec 24",
      "Dec 25",
      "Dec 26",
      "Dec 27",
    ],
    datasets: [
      {
        label: "Visits",
        data: [12, 19, 3, 5, 2, 3, 8],
        borderWidth: 2,
        borderColor: "#c20ad8",
        backgroundColor: "#c30ad82f",
      },
    ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});

// map start
function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: { lat: -33, lng: 151 },
  });
  const image =
    "https://media.flaticon.com/dist/min/img/logo/flaticon_negative.svg";
  const beachMarker = new google.maps.Marker({
    position: { lat: -33.89, lng: 151.274 },
    map,
    icon: image,
  });
}

window.initMap = initMap;
