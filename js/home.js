


//Quote Split Home and Business
let quoteSplitHome = document.querySelector(".quote-split__home");
let quoteSplitBusiness = document.querySelector(".quote-split__business");
let quoteSplit = document.querySelector(".quote-split");
quoteSplitHome.addEventListener("mouseover", function( event ) {   
    quoteSplit.classList.remove("quote-split--over2");
    quoteSplit.classList.toggle('quote-split--over1');
  }, false);
  quoteSplitBusiness.addEventListener("mouseover", function( event ) {   
    quoteSplit.classList.remove("quote-split--over1");
    quoteSplit.classList.toggle('quote-split--over2');
  }, false);
//Quote Split Home and Business


//Three Pillar 
function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
window.addEventListener("scroll", function() {
var abc = getRandomInt(20, -20);

var threePillarsCircle = document.querySelector('.threePillars-circle');
threePillarsCircle.setAttribute("style", "will-change: transform;transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ("+abc+"deg) skew(0deg, 0deg);transform-style: preserve-3d;");

if(abc >= 0)
{
    abc = -abc;
}
else{
    abc = abc * -1;
}

 var threePillarsItem, index;
 threePillarsItem = document.getElementsByClassName("w-hidden-small");
 for (index = 0; index < threePillarsItem.length; ++index) {
    threePillarsItem[index].setAttribute("style", "will-change: transform;transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ("+abc+"deg) skew(0deg, 0deg);transform-style: preserve-3d;");
 }

});
//Three Pillar


//ParallaxBox
window.onload = function () {

    var parallaxBox = document.getElementById ( 'box' );
    var parallaxBox1 = document.getElementById ( 'box1' );
    var parallaxBox2 = document.getElementById ( 'box2' );
    var parallaxBox3 = document.getElementById ( 'box3' );
    var c1left = document.getElementById ( 'l1' ).offsetLeft,
    c1top = document.getElementById ( 'l1' ).offsetTop,
    c2left = document.getElementById ( 'l2' ).offsetLeft,
    c2top = document.getElementById ( 'l2' ).offsetTop,
    c3left = document.getElementById ( 'l3' ).offsetLeft,
    c3top = document.getElementById ( 'l3' ).offsetTop,
    c4left = document.getElementById ( 'l4' ).offsetLeft,
    c4top = document.getElementById ( 'l4' ).offsetTop, 
    c5left = document.getElementById ( 'l5' ).offsetLeft,
    c5top = document.getElementById ( 'l5' ).offsetTop,
    c6left = document.getElementById ( 'l6' ).offsetLeft,
    c6top = document.getElementById ( 'l6' ).offsetTop;
    c7left = document.getElementById ( 'l7' ).offsetLeft,
    c7top = document.getElementById ( 'l7' ).offsetTop,
    c8left = document.getElementById ( 'l8' ).offsetLeft,
    c8top = document.getElementById ( 'l8' ).offsetTop;
    
    parallaxBox.onmousemove = function ( event ) {
        event = event || window.event;
        var x = event.clientX - parallaxBox.offsetLeft,
        y = event.clientY - parallaxBox.offsetTop;
    
        mouseParallax ( 'l1', c1left, c1top, x, y, 15 );
        mouseParallax ( 'l2', c2left, c2top, x, y, 15 );
    }
    parallaxBox1.onmousemove = function ( event ) {
        event = event || window.event;
        var x = event.clientX - parallaxBox1.offsetLeft,
        y = event.clientY - parallaxBox1.offsetTop;

        mouseParallax ( 'l3', c3left, c3top, x, y, 15 );
        mouseParallax ( 'l4', c4left, c4top, x, y, 15 );
        
    }
    parallaxBox2.onmousemove = function ( event ) {
        event = event || window.event;
        var x = event.clientX - parallaxBox2.offsetLeft,
        y = event.clientY - parallaxBox2.offsetTop;

        mouseParallax ( 'l5', c5left, c5top, x, y, 5 );
        mouseParallax ( 'l6', c6left, c6top, x, y, 15 );
        
    }
    parallaxBox3.onmousemove = function ( event ) {
        event = event || window.event;
        var x = event.clientX - parallaxBox3.offsetLeft,
        y = event.clientY - parallaxBox3.offsetTop;

        mouseParallax ( 'l7', c7left, c7top, x, y, 30 );
        mouseParallax ( 'l8', c8left, c8top, x, y, 45 );
    }

    }
    
    function mouseParallax ( id, left, top, mouseX, mouseY, speed ) {
    var obj = document.getElementById ( id );
    var parentObj = obj.parentNode,
    containerWidth = parseInt( parentObj.offsetWidth ),
    containerHeight = parseInt( parentObj.offsetHeight );
    obj.style.left = left - ( ( ( mouseX - ( parseInt( obj.offsetWidth ) / 2 + left ) ) / containerWidth ) * speed ) + 'px';
    obj.style.top = top - ( ( ( mouseY - ( parseInt( obj.offsetHeight ) / 2 + top ) ) / containerHeight ) * speed ) + 'px';
    }


// function showPopup() {
//     let popupDiv = document.getElementById("videoPopup");
//     popupDiv.classList.add("video-on");
// }
// function hidePopup() {
//     let popupDiv = document.getElementById("videoPopup");
//     popupDiv.classList.remove("video-on");
// }


/*Text transition comparison site*/
$(document).ready(function (){

  /*Text transitions*/
(function($) {
var s,
spanizeLetters = {
  settings: {
    letters: $('.span_trans'),
  },
  init: function() {
    s = this.settings;
    this.bindEvents();
  },
  bindEvents: function(){
    s.letters.html(function (i, el) {
      //spanizeLetters.joinChars();
      var spanizer = $.trim(el).split("");
      return '<span>' + spanizer.join('</span><span>') + '</span>';
    });
  },
};
spanizeLetters.init();
})(jQuery);


});

$(window).scroll(function(){ 
/*comparision */
var comparisonSite = document.getElementById('comparisonSite').offsetTop;
var postn = $(window).scrollTop();
if(postn >= comparisonSite) {
  $('.span_trans').addClass('on-visit');
}

/* Bot */
var botBox = document.getElementById('botBox').offsetTop;
var postin = $(window).scrollTop();
if(postin >= botBox) {
  $('.speechbubble-1').addClass('bot-load');
  setTimeout(() => { $('.speechbubble-2').addClass('bot-load'); }, 2000);
  setTimeout(() => { $('.speechbubble-3').addClass('bot-load'); $('.speechbubble-1').css({'opacity' : 'none', 'height' : '0'}); }, 3000);
  setTimeout(() => { $('.bot-cta-button').addClass('bot-load'); }, 4000);
}


});


/*Graph*/
var header = $('.stats__header');
    var bar = $('.stats__item-bar');
    var nums = $('.stats__item-num');
    var overlay = $('.stats__overlay');
    var back = $('.stats__overlay-back');
    var isOpen = false;

  //  var vYear = $('#year');
    var vAvg = $('#avg');
    var vGames = $('#games');
    var vGoal = $('#goals');

    $(document).on('ready', function () {
        entrance();
    });

    bar.on('click', showOverlay);
    back.on('click', showOverlay);

    function entrance() {
        bar.addClass('active');
         header.addClass('active');
        header.on('transitionend webkitTransitionend', function () {
            nums.css('opacity', '1');
            bar.css('transition-delay', '0');
            header.off('transitionend webkitTransitionend');
        });
    }

    function showOverlay() {
        if (!isOpen) {
            overlay.addClass('active').removeAttr('style');
            bar.css('transition', 'all 0.4s cubic-bezier(0.86, 0, 0.07, 1)')
                .removeClass('active');
            header.removeClass('active');
            nums.css('opacity', '0');
            isOpen = true;

            updateInfo($(this).parent().index());
        } else {
            overlay.css('transition', 'all 0.4s cubic-bezier(0.755, 0.05, 0.855, 0.06)').removeClass('active');
            bar.addClass('active').removeAttr('style');
            header.addClass('active');
            nums.css('opacity', '1');
            isOpen = false;
        }
    }

    var data = [
        {
      //      year: '2007-2008',
            goals: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            games: 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            avg: '0.79'

        },
        {
        //    year: '2008-2009',
        goals: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
        games: 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            avg: '0.7'

        },
        {
        //    year: '2009-2010',
        goals: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
        games: 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            avg: '0.69'

        },
        {
        //    year: '2010-2011',
        goals: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
        games: 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            avg: '0.40'

        },
        {
        //    year: '2011-2012',
        goals: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
        games: 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            avg: '0.48'

        },
        {
        //    year: '2012-2013',
        goals: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
        games: 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            avg: '0.66'

        },
        {
        //    year: '2013-2014',
        goals: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
        games: 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            avg: '0.65'

        },
        {
        //    year: '2014-2015',
        goals: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
        games: 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            avg: '0.66'

        }
    ];

    function updateInfo(index) {
      //  vYear.text(data[index].year);
        vAvg.text(data[index].avg);
        vGoal.text(data[index].goals);
        vGames.text(data[index].games);
    }

  function circleClick(e){
    var allChild, index;
    allChild = document.getElementsByClassName("circle-shape-child");
      for (index = 0; index < allChild.length; ++index) {
        allChild[index].classList.remove('circle-shape-active');
      }
    var selectChild = document.getElementById('text_' + e);
    selectChild.classList.add('circle-shape-active');


    var moveCircle;
switch (selectChild) {
  case text_1:
    moveCircle = "transform: matrix(1,0,0,1,0,0);";
    break;
  case text_2:
    moveCircle = "transform: matrix(1,0,0,1,30.277706,140.059465);";
    break;
  case text_3:
    moveCircle = "transform: matrix(1,0,0,1,100.277706,219.059465);";
    break;
  case text_4:
    moveCircle = "transform: matrix(1,0,0,1,243.277706,267.059465);";
    break;
  case text_5:
    moveCircle = "transform: matrix(1,0,0,1,391.277706,221.059465);";
    break;
  case text_6:
    moveCircle = "transform: matrix(1,0,0,1,466.277706,138.059465);";
    break;
  case text_7:
    moveCircle = "transform: matrix(1,0,0,1,494.277706,-10.940535);";
}

document.getElementById("linkCircle").setAttribute('style', moveCircle);

  }


/*Day and Night Theme*/
const checkbox = document.getElementById("checkbox");
checkbox.addEventListener("change", () => {
  document.body.classList.toggle("pattern-bg");
});