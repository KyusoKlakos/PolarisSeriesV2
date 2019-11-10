(function($){
  $(function(){
    var clickLogin = false;
    $('.button-collapse').sideNav();

    $('select').material_select();
    $('.frame').mousedown(function(){
        $('.scroll').fadeOut();
    });
    $('.parallax').parallax(500);

    $('.collapsible').collapsible();

  	$('.dropdown-button').dropdown({
		inDuration: 300,
		outDuration: 225,
		constrainWidth: true, // Does not change width of dropdown to that of the activator
		hover: true, // Activate on hover
		gutter: 0, // Spacing from edge
		belowOrigin: true, // Displays dropdown below the button
		alignment: 'right', // Displays dropdown with edge aligned to the left of button
		stopPropagation: false // Stops event propagation
    	}
  	);

    $('.dropdown-button2').dropdown({
    inDuration: 300,
    outDuration: 225,
    constrainWidth: false, // Does not change width of dropdown to that of the activator
    hover: false, // Activate on hover
    gutter: 0, // Spacing from edge
    belowOrigin: true, // Displays dropdown below the button
    alignment: 'left', // Displays dropdown with edge aligned to the left of button
    stopPropagation: false // Stops event propagation
      }
    );

    $('.dropdown-button3').dropdown({
    inDuration: 300,
    outDuration: 225,
    constrainWidth: false, // Does not change width of dropdown to that of the activator
    hover: true, // Activate on hover
    gutter: 0, // Spacing from edge
    belowOrigin: true, // Displays dropdown below the button
    alignment: 'left', // Displays dropdown with edge aligned to the left of button
    stopPropagation: false // Stops event propagation
      }
    );


    $( ".login" ).click(function() {
        if(!clickLogin) {
            $(".login").prepend( '<i class="fa fa-refresh fa-spin fa-lg"></i>');
            $(".logo_battlenet").remove();
            clickLogin = true;
        }
    });



    //Change these values
  var userLang = navigator.language || navigator.userLanguage; 
  switch(userLang)
  {
      case "fr":
            var msg = "Nous utilisons des cookies pour améliorer votre expérience de navigation Web. En poursuivant sur ce site, vous acceptez l’utilisation de cookies.";
        var closeBtnMsg = "J'accepte";
        var privacyBtnMsg = "Mentions légales";
      case "en":
          var msg = "We use cookies to enhance your web browsing experience. By continuing to browse the site you agree to our policy on cookie usage.";
          var closeBtnMsg = "Ok";
          var privacyBtnMsg = "Mentions légales";
      break;

      default:
        var msg = "We use cookies to enhance your web browsing experience. By continuing to browse the site you agree to our policy on cookie usage.";
        var closeBtnMsg = "Agree";
        var privacyBtnMsg = "TERMS (FR)";
      break;
  }
  var privacyLink = "http://polarisseries.fr/fr/terms";
  //check cookies 
  if(document.cookie){
   var cookieString = document.cookie;
   var cookieList = cookieString.split(";");
   // if cookie named OKCookie is found, return
   for(x = 0; x < cookieList.length; x++){
     if (cookieList[x].indexOf("OKCookie") != -1){return}; 
   }
  }
  
  var docRoot = document.body;
  var okC = document.createElement("div");
  okC.setAttribute("id", "okCookie");
  var okCp = document.createElement("p");
  var okcText = document.createTextNode(msg); 
  
  //close button
  var okCclose = document.createElement("a");
  var okcCloseText = document.createTextNode(closeBtnMsg);
  okCclose.setAttribute("href", "#");
  okCclose.setAttribute("id", "okClose");
  okCclose.appendChild(okcCloseText);
  okCclose.addEventListener("click", closeCookie, false);
 
  //privacy button
  var okCprivacy = document.createElement("a");
  var okcPrivacyText = document.createTextNode(privacyBtnMsg);
  okCprivacy.setAttribute("href", privacyLink);
  okCprivacy.setAttribute("id", "okCprivacy");
  okCprivacy.appendChild(okcPrivacyText);
  
  //add to DOM
  okCp.appendChild(okcText);
  okC.appendChild(okCp);
  okC.appendChild(okCclose);
  okC.appendChild(okCprivacy);
  docRoot.appendChild(okC);
  
  okC.classList.add("okcBeginAnimate");
  
  function closeCookie(){
    var cookieExpire = new Date();
    cookieExpire.setFullYear(cookieExpire.getFullYear() +2);
    document.cookie="OKCookie=1; expires=" + cookieExpire.toGMTString() + ";";
    docRoot.removeChild(okC);
  }
        

  }); // end of document ready
})(jQuery); // end of jQuery name space

