$(document).ready(function () {

    $('.menu-box .menu-item').click(function (e) {
       // e.preventDefault();
        let parentDiv = $(this).parents('.menu-box');
        parentDiv.toggleClass('opened-submenu');
        $(this).toggleClass('open-submenu');
    });

});

$("#SideMenu .burgerBox").on("mousemove",function(event) {
    var currentScrollPos = window.pageYOffset;  
    let sliderClass = $('#SideMenu .burgerBoxInner'); 
    if(currentScrollPos >= 400){
        sliderClass.removeClass("burgerBoxInnerOut");
    }

}).on('mouseout', function (event){
    var currentScrollPos = window.pageYOffset;  
    let sliderClass = $('#SideMenu .burgerBoxInner'); 
    if(currentScrollPos >= 400){
        sliderClass.addClass("burgerBoxInnerOut");
    }
});

// let quoteSplitHome = document.querySelector(".quote-split__home");
// let quoteSplitBusiness = document.querySelector(".quote-split__business");
// let quoteSplit = document.querySelector(".quote-split");

// quoteSplitHome.addEventListener("mousemove", function( event ) {   
//     var currentScrollPos = window.pageYOffset;  
//     let sliderClass = document.getElementById('closeIcon');
//     if(currentScrollPos >= 400){
//         sliderClass.classList.remove("burgerBoxInnerOut");
//     }
// }, false);

// quoteSplitHome.addEventListener("mouseout", function( event ) {   
//     var currentScrollPos = window.pageYOffset;  
//     let sliderClass = document.getElementById('closeIcon');
//     if(currentScrollPos >= 400){
//         sliderClass.classList.remove("burgerBoxInnerOut");
//     }
// }, false);

window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
    let sliderClass = document.getElementById('closeIcon');
  if(currentScrollPos <= 400) {
    sliderClass.classList.remove("burgerBoxInnerOut");
  }
  else{
    sliderClass.classList.add("burgerBoxInnerOut");
  }
}

function hamburgerClick() {
    let element = document.getElementById("slidingMenu");
    let bodyTag = document.getElementsByTagName("BODY")[0];
    let overlay = document.getElementById('overlayDiv');
    let hiddenSlider = document.getElementById('hiddenSlider');
    hiddenSlider.classList.add("w-100");
    element.classList.add("open");
    overlay.classList.add('d-block');
    setTimeout(function () {
        bodyTag.classList.add('open-menu');
    }, 50);
    let closeIcon = document.getElementById('closeIcon');
    closeIcon.classList.add("closeMenu");
}

function menuClose() {
    let element = document.getElementById("slidingMenu");
    let bodyTag = document.getElementsByTagName("BODY")[0];
    let overlay = document.getElementById('overlayDiv');
    let hiddenSlider = document.getElementById('hiddenSlider');
    element.classList.remove("open");
    overlay.classList.remove('d-block');
    setTimeout(function () {
        bodyTag.classList.remove('open-menu');
    }, 50);
    setTimeout(function (){
        hiddenSlider.classList.remove("w-100");
    }, 1000);
    let closeIcon = document.getElementById('closeIcon');
    closeIcon.classList.remove("closeMenu");
}

window.onload = function() {

  var pageTitle = document.title;
  var attentionMessage = 'Hey 👋🏼 Come Back!';
  var blinkEvent = null;

  document.addEventListener('visibilitychange', function(e) {
    var isPageActive = !document.hidden;

    if(!isPageActive){
      blink();
    }else {
      document.title = pageTitle;
      clearInterval(blinkEvent);
    }
  });

  function blink(){
    blinkEvent = setInterval(function() {
      if(document.title === attentionMessage){
        document.title = pageTitle;
      }else {
        document.title = attentionMessage;
      }
    }, 100);
  }
 };

