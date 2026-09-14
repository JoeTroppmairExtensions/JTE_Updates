/*!	##########################################################

		(C) JTE 2026
			Joe Troppmair
			www.troppmair.com

############################################################*/

/*! Menue-Fuehrung wenn Startslider aktiv */


/*!
document.getElementById("logo").style.fontSize = "25px";
document.getElementById("EBmenu").style.position = "absolute";

document.getElementById("MyElement").classList.add('MyClass');

document.getElementById("MyElement").classList.remove('MyClass');

if ( document.getElementById("MyElement").classList.contains('MyClass') )
 document.getElementById("MyElement").classList.toggle('MyClass');

	  
	//if (document.getElementById("bg") != null) {
	//	jteMenu.classList.remove("sticky");
	//	jteMenu.classList.add("slider");
	//	jteContent.classList.add("slider");
	//} 


*/

// Menü entsprechend dem STARTSLIDER einblenden, Klassen ändern "scroll down" => "scroll back"
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size



document.addEventListener('DOMContentLoaded', () => {
	
const jteMenu = document.getElementById("jteMenu");
const jteContent = document.getElementById("jteContent");

window.onload = function() {
 jteMenu.classList.remove("sticky");
 jteMenu.classList.add("inSlider");
};

window.onscroll = function() {scrollFunction()};
 function scrollFunction() {
  if(window.innerHeight !== undefined) { 
   var height = window.innerHeight;
  } else {  
   var height = document.documentElement.clientHeight;
  }

  /* if (document.getElementById("jteSlider") != null) {
   jteMenu.classList.remove("sticky");
   jteMenu.classList.add("slider");
   jteContent.classList.add("slider");
  } */

	 
 if (document.body.scrollTop > height || document.documentElement.scrollTop > height) {
  jteMenu.classList.remove("inSlider");
  jteMenu.classList.add("sticky","showSticky");
  jteContent.classList.add("stickymenu");
 } 
 else {
  jteMenu.classList.remove("sticky","showSticky","hideSticky");
  jteMenu.classList.add("inSlider");
  jteContent.classList.remove("stickymenu");
 }
} 

})