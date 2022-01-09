<?php
/**
 * Testimonials plugin for e107 v2.
 *
 * @file
 * Templates for plugins displays.
 */

/*
$TESTIMONIALS_TEMPLATE['menu_header'] = '
<div class="row">
  <div class="col-md-12" data-wow-delay="0.2s">
    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
    
	  <!-- Bottom Carousel Indicators -->
	  {TESTIMONIALS_INDICATORS}
      
	  <!-- Carousel Slides / Quotes -->
	  <div class="carousel-inner text-center">
';

$TESTIMONIALS_TEMPLATE['menu_body'] = '
	    <div class="item{TESTIMONIALS_ACTIVE}">
		  <blockquote>
		    <div class="row">
			  <div class="col-sm-8 col-sm-offset-2">
				<p>{TESTIMONIALS_MESSAGE}</p>
				<small>{TESTIMONIALS_AUTHOR}</small>
			  </div>
			</div>
		  </blockquote>
		</div>
';

$TESTIMONIALS_TEMPLATE['menu_footer'] = '
	  </div>

      <!-- Carousel Buttons Next/Prev -->
	  <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
	  <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
	</div>
  </div>
</div>
';
*/


/* --------------------------------- MOD BY FIZI -------------------------------------- */
$TESTIMONIALS_TEMPLATE['menu_header'] = '
<div class="text-center">
';

$TESTIMONIALS_TEMPLATE['menu_body'] = '
  <div class="item{TESTIMONIALS_ACTIVE}">
    <div class="fs-4 mb-4 fst-italic">{TESTIMONIALS_MESSAGE}</div>
    <div class="d-flex align-items-center justify-content-center">
      {SETIMAGE: w=40&h=40} 
      {USER_AVATAR: class=rounded-circle me-3}      
      <div class="fw-bold">{TESTIMONIALS_AUTHOR}</div>
	</div>
  </div>
';

$TESTIMONIALS_TEMPLATE['menu_footer'] = '
</div>
';