jQuery(document).ready(function($) {
    var findpro = document.getElementById("findpro");
    // if you are on find a professional page
    if (findpro){
  
      // check if element exists
  
      function rafAsync() {
          return new Promise(resolve => {
              requestAnimationFrame(resolve); //faster than set time out
          });
      }
  
      async function checkElement(selector) {
          while (document.querySelector(selector) === null) {
              await rafAsync()
          }
          return true;
      }
  
      function findElementByText(text) {
        var jSpot = $("b:contains(" + text + ")")
                    .filter(function() { return $(this).children().length === 0;})
                    .parent();  // because you asked the parent of that element
  
        return jSpot;
      }
  
      function checkSearch() {
  
        var needSearch = false;
  
        if(localStorage.firstName){
          if(localStorage.lastName){
            searchInput.val(localStorage.firstName + " " + localStorage.lastName);
          }
          else{
            searchInput.val(localStorage.firstName);
          }
          needSearch = true;
        }
        else if(localStorage.lastName){
          searchInput.val(localStorage.lastName);
          needSearch = true;
        }
        if(localStorage.occupation){
          catInput.click()
          needSearch = true;
        }
        return needSearch
      }
  
      function doSearch(){
        setTimeout(()=>{
          searchButton.click();
          localStorage.firstName = "";
          localStorage.lastName = "";
          localStorage.occupation = "";
        }, 150);
      }
  
      function shuffleCards(i){
        // every 100 ms check if cards are loaded
        // maximum of 500 ms
        // scope issues, redefining i
        // var iter = i
        // var loaded = false;
        // setTimeout(() => {
        //    var cards = document.querySelector('#SFylpcrd');
        //    if (cards.children.length > 70){
        //      loaded=true;
        //    }
        //    if(loaded==true){
        //      console.log("number of cards loaded:", cards.children.length)
        //      // shuffle
        //      for (var j = cards.children.length; j >= 0; j--) {
        //          cards.appendChild(cards.children[Math.random() * j | 0]);
        //      }
        //      iter += 20;
        //    } else{
        //      console.log("number of cards loaded:", cards.children.length)
        //      iter = iter + 1;
        //    }
        //    if (iter < 20) {
        //     shuffleCards(iter);
        //    } else {
        //      // shuffle anyway
        //      for (var j = cards.children.length; j >= 0; j--) {
        //          cards.appendChild(cards.children[Math.random() * j | 0]);
        //      }
        //    }
        // }, 250)
      }
  
      var checkCards = setInterval(function() {
         if ($('#SFylpcrd').length) {
            clearInterval(checkCards);
            var i = 0;
            shuffleCards(i);
         }
      }, 100);
  
      function clearLS(){
        localStorage.firstName = "";
        localStorage.lastName = "";
        localStorage.occupation = "";
      }
  
      var searchButton;
      var searchInput;
      var catInput;
  
      checkElement("input[name='tag']")
      .then((element) => {
  
        searchInput = $( "input[name='tag']" );
  
        var xpath = "//button[text()='Search']";
        searchButton = document.evaluate(xpath, document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null).singleNodeValue;
  
  
        var clearButton = document.getElementById("SFylpclr");
        clearButton.addEventListener("click", function(){
          setTimeout(()=>{
            var i = 0;
            shuffleCards(i);
          },300);
        }, false);
  
        searchButton.addEventListener("click", function(){
          setTimeout(()=>{
            var i = 0;
            shuffleCards(i);
          },300);
        }, false);
  
        if(localStorage.occupation){
          // drop down button
          var dd_xpath = '//*[@id="SFylpfnd"]/div[2]'
          var dd = document.evaluate(dd_xpath, document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null).singleNodeValue;
          console.log(dd.nodeType)
          dd.click()
  
          var cat_xpath = "//div[text()='"+ localStorage.occupation.toString() +"']";
          catInput = document.evaluate(cat_xpath, document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null).singleNodeValue;
        }
  
        let needSearch;
        needSearch = checkSearch();
  
        //*[@id="SFylpcrd"]
  
        // var path_string = "/dist/assets/images/logo/CACP-Logo.png"
        // setTimeout(()=>{
        //   var cards = $( "#SFylpcrd" ).children( ".SFcrd" );
        //   cards.eq(0).append("<img class='fap-clogo' style='transform: scale(0.75);'/>");
        //   // $(".fap-clogo").attr("src", "<?php echo get_template_directory_uri() . '/dist/assets/images/logo/CACP-Logo.png'");
        // },1000);
  
  
  
        if(needSearch){
          doSearch();
        }
        else{
          clearLS();
        }
  
      });
  
      // use jquery to select the search input and button
  
  
      // search if there is a first name
  
    }
  
  });