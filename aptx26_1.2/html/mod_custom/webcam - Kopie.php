<?php
 /**
  * https://ghsvs.de/programmierer-schnipsel/joomla/315-joomla-modul-override-fuer-einbinden-eigener-codes
  * https://www.w3schools.com/howto/howto_css_image_responsive.asp
  */

defined('_JEXEC') or die;
  
use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Uri\Uri;

$modId = 'webcam' . $module->id;
?>

<div id="<?php echo $modId; ?>" class="">

	<div class="row">
		<div class="col">
			<?php echo $module->content; ?>
			<img src="https://wtvthmb.feratel.com/thumbnails/5535.jpeg?t=44&amp;dcsdesign=WTP_partner&amp;design=v3" style="width:200px;" onClick="openModal();currentSlide(1)" class="hover-shadow cursor mx-auto d-block" />
		</div>
<!--
		<div class="col">
			<img src="https://wtvthmb.feratel.com/thumbnails/5552.jpeg?t=44&amp;dcsdesign=WTP_partner&amp;design=v3" style="width:100%; height: 232px;" onclick="openModal();currentSlide(2)" class="hover-shadow cursor" />
		</div>
		<div class="col">
			<img src="https://wtvthmb.feratel.com/thumbnails/5635.jpeg?t=44&amp;dcsdesign=WTP_partner&amp;design=v3" style="width:100%; height: 232px;" onclick="openModal();currentSlide(3)" class="hover-shadow cursor" />
		</div>
		<div class="col">
			<img src="https://www.foto-webcam.eu/webcam/schlegeis/current/400.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
		</div>
-->
	</div>

</div>

<div id="<?php echo $modId; ?>Modal" class="modalwebcam">
	<span class="close cursor" onclick="closeModal()">&times;</span>
	<!--button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button-->

	<div class="modal-content">
	
		<div class="mySlides"> 
		  <div class="numbertext"><h4><?php echo JTEXT::_('MOD_WEBCAM_FBG'); ?></h4></div>
		  <iframe
			src="https://webtv.feratel.com/webtv/?&amp;pg=5EB12424-7C2D-428A-BEFF-0C9140CD772F&amp;design=v3&amp;cam=5535&amp;c1=0" 
			class="responsive-iframe"
			allowfullscreen="yes"
			scrolling="no"
		  ></iframe>
		</div>

		<div class="mySlides">
		  <div class="numbertext"><h4><?php echo JTEXT::_('MOD_WEBCAM_GWAND'); ?></div>
		  <iframe
			src="https://webtv.feratel.com/webtv/?&amp;pg=5EB12424-7C2D-428A-BEFF-0C9140CD772F&amp;design=v3&amp;cam=5552&amp;c1=0"
			class="responsive-iframe"
			allowfullscreen="yes"
			scrolling="no"
		  ></iframe>
		</div>

		<div class="mySlides">
		 <div class="numbertext"><h4><?php echo JTEXT::_('MOD_WEBCAM_PENKEN'); ?></div>
		  <iframe
			src="https://webtv.feratel.com/webtv/?&amp;pg=5EB12424-7C2D-428A-BEFF-0C9140CD772F&amp;design=v3&amp;cam=5635&amp;c1=0"
			class="responsive-iframe"
			allowfullscreen="yes"
			scrolling="no"
		  ></iframe>
		</div>
		
		<div class="mySlides">
		  <div class="numbertext"><h4><?php echo JTEXT::_('MOD_WEBCAM_SCHLEGEIS'); ?></div>
		  <img src='https://www.foto-webcam.eu/webcam/schlegeis/current/1200.jpg'>
		</div>	
	
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>

<!--
		<div class="caption-container">
		  <p id="caption"></p>
		</div>

		<div class="row">
			<div class="col-3">
			  <img class="demo cursor" src="https://wtvthmb.feratel.com/thumbnails/5535.jpeg?t=44&amp;dcsdesign=WTP_partner&amp;design=v3" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
			</div>
			<div class="col-3">
			  <img class="demo cursor" src="https://wtvthmb.feratel.com/thumbnails/5552.jpeg?t=44&amp;dcsdesign=WTP_partner&amp;design=v3" style="width:100%" onclick="currentSlide(2)" alt="Snow">
			</div>
			<div class="col-3">
			  <img class="demo cursor" src="https://wtvthmb.feratel.com/thumbnails/5635.jpeg?t=44&amp;dcsdesign=WTP_partner&amp;design=v3" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
			</div>
			<div class="col-3">
			  <img class="demo cursor" src="https://www.foto-webcam.eu/webcam/schlegeis/current/720.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
			</div>
		</div>
-->	
	</div>
</div>
<script>
function openModal() {
  document.getElementById("<?php echo $modId; ?>Modal").style.display = "block";
}

function closeModal() {
  document.getElementById("<?php echo $modId; ?>Modal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>