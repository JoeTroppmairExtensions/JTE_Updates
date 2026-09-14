<?php
 /**
  * Joe Troppmair ohne jQuery!
  * https://stackoverflow.com/questions/69534538/bootstrap-5-modal-open-on-page-load
  * ohne Button
	<!-- Button trigger modal
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $modId; ?>">
		Launch demo modal
	</button> -->
  */

defined('_JEXEC') or die;
// Bootstrap-Modul:
	JHtml::_('bootstrap.modal');
  
use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Uri\Uri;

$modId = 'webcam' . $module->id;
?>

<!-- Button trigger modal -->
<img
	src="https://wtvthmb.feratel.com/thumbnails/5535.jpeg?t=44&amp;dcsdesign=WTP_partner&amp;design=v3"
	style="width:200px;"
	data-bs-toggle="modal"
	data-bs-target="#<?php echo $modId; ?>"
	class="hover-shadow cursor mx-auto d-block"
/>
	
<div id="<?php echo $modId; ?>" class="modal fade" tabindex="-1" aria-labelledby="<?php echo $modId; ?>" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">

		
		<!-- slides hier: -->
	    <div class="mySlides"> 
		  <div class="modal-header">
			<h4><?php echo JTEXT::_('MOD_WEBCAM_FBG'); ?></h4>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="iframecontainer"><iframe
			src="https://webtv.feratel.com/webtv/?&amp;pg=5EB12424-7C2D-428A-BEFF-0C9140CD772F&amp;design=v3&amp;cam=5535&amp;c1=0" 
			class="responsive-iframe" 
			allowfullscreen="yes"
			scrolling="no"
		    />
		  </iframe></div>
		</div>
		
        <div class="mySlides">
		  <div class="modal-header">
			<h4><?php echo JTEXT::_('MOD_WEBCAM_SCHLEGEIS'); ?></h4>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <img src='https://www.foto-webcam.eu/webcam/schlegeis/current/1200.jpg'>
		</div>
		<!-- : slides bis hier -->
		

      <!--div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div-->
    
	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	<a class="next" onclick="plusSlides(1)">&#10095;</a>
	
	
	</div>
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