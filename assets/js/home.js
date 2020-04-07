jQuery(document).ready(function($) {
  
    var animation_elements = [
      ' no litigation.',
      ' respect.',
      ' transparency.',
      ' self-esteem.',
      ' creativity.',
      ' empowerment.',
      ' a path forward.',
    ];
  
    (function displayClass(i) {
        $('#fadeIn').text(animation_elements[i]).fadeIn(3200).delay(800).fadeOut(1000, function() {
            displayClass((i + 1) % animation_elements.length);
        });
    })(0);
  
    var fnameInput = document.getElementById("fnameInput");
    var firstName = localStorage.firstName;
  
    var lnameInput = document.getElementById("lnameInput");
    var lastName = localStorage.lastName;
  
    var occSelect = document.getElementById("occSelect");
    var occupation = localStorage.occupation;
  
  
  
    var fpage = $("#findProSub");
    if(fpage.text().length > 0){
      var findProLink = fpage.attr("onclick");
      var fapLink = findProLink.substring((findProLink.indexOf("'") + 1),findProLink.lastIndexOf("'"));
  
      // fade in, fade out box
      function fadeIn(selector){
        $(selector).css("visibility","visible").hide().fadeIn({queue: false, duration: 1150});
        $(selector).css({ 'right': '-150px', 'left': '' }).animate({
            'right' : '0px'
        },1150);
      }
  
      // var delay = 1500;
      // var ipSelector = "#intro-pop"
      // setTimeout(()=>{
      //   fadeIn(ipSelector);
      //   var ipClose = document.getElementById("ip-close");
      //   ipClose.addEventListener("click", function(){
      //     popOut(ipSelector);
      //   }, false);
      // }, delay);
      //
      // function popOut(selector){
      //   $(selector).fadeOut({queue: false, duration: 700});
      //   $(selector).css({ 'right': '0px', 'left': '' }).animate({
      //       'right' : '-150px'
      //   },700);
  
      // }
  
  
    }
    // check if input form exists
    if(fnameInput){
      $(fnameInput).keyup(function(){
        localStorage.firstName = fnameInput.value;
        // console.log(fnameInput.value)
      });
      $(lnameInput).keyup(function(){
        localStorage.lastName = lnameInput.value;
        // console.log(lnameInput.value)
      });
      $(occSelect).change(function(){
        localStorage.occupation = $("#occSelect :selected").text();
        if (localStorage.occupation === "Family Relations"){
          localStorage.occupation = "Family Relations Specialist";
        };
      });
  
      document.querySelector('form.fapForm').addEventListener('submit', function (e) {
  
          //prevent the normal submission of the form
          e.preventDefault();
  
          if (typeof localStorage.firstName == "undefined"){
            localStorage.firstName = "";
          }
          if (typeof localStorage.lastName == "undefined"){
            localStorage.lastName = "";
          }
          if (typeof localStorage.occupation == "undefined"){
            localStorage.occupation = "";
          }
  
          window.location.href=(fapLink);
      });
    }
  
  
  });