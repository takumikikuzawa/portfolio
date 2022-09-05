(window.onload = function () {
  jQuery(window).scroll(function () {
    jQuery('.work__heading-lv2,.skill__heading-lv2, .about__heading-lv2, .contact__heading-lv2').each(function () {
      var winheight = jQuery(window).height();
      var posi = jQuery(this).offset().top;
      var scroll = jQuery(window).scrollTop();
      if (scroll + winheight > posi) {
        jQuery(this).addClass('border-anim2');
      }
    });
  });
})();

(window.onload = function () {
  jQuery(window).scroll(function () {
    jQuery('.fadeout, .fadeout1, .fadeout2, .fadeout3, .fadeout4, .fadeout5, .fadeout6').each(function () {
      var winheight = jQuery(window).height();
      var posi = jQuery(this).offset().top;
      var scroll = jQuery(window).scrollTop();
      if (scroll + winheight > posi) {
        jQuery(this).addClass('fadein');
      }
    });
  });
})();

jQuery(document).ready(function ($) {
  var bArray = [];
  var sArray = [4, 6, 8, 10];
  for (var i = 0; i < $('.bubble').width(); i++) {
    bArray.push(i);
  }
  function randomValue(arr) {
    return arr[Math.floor(Math.random() * arr.length)];
  }
  setInterval(function () {
    var size = randomValue(sArray);
    $('.bubble').append('<div class="bubble__individual" style="left: ' + randomValue(bArray) + 'px; width: ' + size + 'px; height:' + size + 'px;"></div>');
    $('.bubble__individual').animate(
      {
        bottom: '500%',
        opacity: '-=0.7',
      },
      3000,
      function () {
        $(this).remove();
      }
    );
  }, 250);
});

jQuery(document).ready(function ($) {
  var bArray = [];
  var sArray = [4, 6, 8, 10];
  for (var i = 0; i < $('.submarine').width(); i++) {
    bArray.push(i);
  }
  function randomValue(arr) {
    return arr[Math.floor(Math.random() * arr.length)];
  }
  setInterval(function () {
    var size = randomValue(sArray);
    $('.submarine').append('<div class="bubble__individual" style="left: ' + randomValue(bArray) + 'px; width: ' + size + 'px; height:' + size + 'px;"></div>');
    $('.bubble__individual').animate(
      {
        bottom: '400%',
        opacity: '-=0.7',
      },
      2500,
      function () {
        $(this).remove();
      }
    );
  }, 250);
});

jQuery(document).ready(function ($) {
  var bArray = [];
  var sArray = [4, 6, 8, 10];
  for (var i = 0; i < $('.work__img').width(); i++) {
    bArray.push(i);
  }
  function randomValue(arr) {
    return arr[Math.floor(Math.random() * arr.length)];
  }
  setInterval(function () {
    var size = randomValue(sArray);
    $('.work__img:hover').append('<div class="bubble__individual2" style="left: ' + randomValue(bArray) + 'px; width: ' + size + 'px; height:' + size + 'px;"></div>');
    $('.bubble__individual2').animate(
      {
        bottom: '150%',
        opacity: '-=0.7',
      },
      2500,
      function () {
        $(this).remove();
      }
    );
  }, 250);
});

jQuery(document).ready(function ($) {
  var bArray = [];
  var sArray = [4, 6, 8, 10];
  for (var i = 0; i < $('.fish').width(); i++) {
    bArray.push(i);
  }
  function randomValue(arr) {
    return arr[Math.floor(Math.random() * arr.length)];
  }
  setInterval(function () {
    var size = randomValue(sArray);
    $('.fish').append('<div class="bubble__individual2" style="left: ' + randomValue(bArray) + 'px; width: ' + size + 'px; height:' + size + 'px;"></div>');
    $('.bubble__individual2').animate(
      {
        bottom: '200%',
        opacity: '-=0.7',
      },
      2500,
      function () {
        $(this).remove();
      }
    );
  }, 250);
});
