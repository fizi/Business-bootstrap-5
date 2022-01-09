<?php

if(!defined('e107_INIT'))
{
	exit();
}

// [multilanguage]
e107::lan('theme'); // loads e107_themes/CURRENT_THEME/languages/English.php (when English is selected) 

class theme implements e_theme_render {

  public function init() {

    e107::meta('viewport', 'width=device-width, initial-scale=1.0'); // added to <head>
    //  e107::link('rel="preload" href="{THEME}fonts/myfont.woff2?v=2.2.0" as="font" type="font/woff2" crossorigin');  // added to <head>

    //e107::meta('apple-mobile-web-app-capable','yes');
    
    
    $bootswatch = e107::pref('theme', 'bootswatch', false);
    if($bootswatch) {
      e107::css('url', 'https://bootswatch.com/4/' . $bootswatch . '/bootstrap.min.css');
      e107::css('url', 'https://bootswatch.com/4/' . $bootswatch . '/bootstrap.min.css');
    }
    
    e107::library("load", "animate.css"); 
    
    // e107::css('url', 'https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap'); 
    // e107::css('url', 'https://fonts.googleapis.com/css?family=Exo+2:100,200,300,400,500,600,700,800,900&display=swap'); 
    // e107::css("theme", "css/aos.css"); 
    // e107::css("theme", "css/languages.css");     
    

    e107::js("footer-inline", "$('.e-tip').tooltip({container: 'body'})"); // activate bootstrap tooltips.  
    // e107::js("theme", "js/masonry.pkgd.js");
    // e107::js("theme", "js/imagesloaded.pkgd.min.js"); 
    // e107::js("theme", "js/jquery.lettering.js");
    // e107::js("theme", "js/jquery.matchHeight.js"); 
    // e107::js("theme", "js/aos.js"); 
    e107::js("theme", "js/custom.js", "jquery");
    
    /* @example prefetch  */
    //e107::link(array('rel'=>'prefetch', 'href'=>THEME.'images/browsers.png'));
    
  }


  /**
  * @param string $text
  * @return string without p tags added always with bbcodes
  * note: this solves W3C validation issue and CSS style problems
  * use this carefully, mainly for custom menus, let decision on theme developers
  */

  function remove_ptags($text = '') // FIXME this is a bug in e107 if this is required.
  {

    $text = str_replace(array("<!-- bbcode-html-start --><p>", "</p><!-- bbcode-html-end -->"), "", $text);

	return $text;
  }


  function tablestyle($caption, $text, $mode='', $options = array()) {

	$style = varset($options['setStyle'], 'default');
    
    // Override style based on mode.
	switch($mode){
	  case 'contact-info':
	  $style = 'contact-info';
	  break;
      
      case 'testimonials-testimonials-menu':
	  $style = 'testimonials';
	  break;
    }
			
	//this should be displayed only in e_debug mode			
    echo "\n<!-- tablestyle initial:  style=". $style."  mode=".$mode."  UniqueId=".varset($options['uniqueId'])." -->\n\n";

	switch($style){

	  /*  case 'home':
			echo $caption;
			echo $text;
		  break;
		  case 'menu':
			echo $caption;
			echo $text;
		  break;
		  case 'full':
			echo $caption;
			echo $text;
		  break;
	  */
    
	  case 'nocaption':
	  case 'main':
		echo $text;
	  break;
      
      case 'hero':
        echo $text;
      break;
      
      case "contact":
		echo "<div class='text-center mb-5'>";
		if(!empty($caption)) {
		  echo "<h1 class='fw-bolder'>{$caption}</h1>";
		}
		echo $text;
		echo "</div>";
	  break;
      
      case 'contact-info':
        echo $text;
      break;
      
     case "testimonials":
		echo "<div class='mb-4'>";
		if(!empty($caption)) {
		  echo "<h2 class='fw-bolder mb-5'>{$caption}</h2>";
		}
		echo $text;
        echo "</div>";
	  break; 
      
      case "full":
		echo "<div class='text-center mb-5'>";
		if(!empty($caption)) {
		  echo "<h1 class='fw-bolder'>{$caption}</h1>";
		}
		echo $text;
		echo "</div>";
	  break;
      
      case 'subscribe':
        echo $text;
      break;
      
      
      
      
      
            
      case "portfolio":
		  echo "<div class='col-md-4 col-lg-3 col-xl-2'>{$text}</div>";	
	  break;

	  case "main":
		echo "<div class='leftcol-content'>";
		if(!empty($caption)) {
		  echo "<div class='leftcol-content-title'><h2>{$caption}</h2></div>";
		}
		echo "<div class='leftcol-content-body'>{$text}</div>";
		echo "</div>";
	  break;

	  case "rightcol":
		echo "<div class='rightcol-content'>";
		if(!empty($caption)) {
		  echo "<div class='rightcol-content-title'><h2>{$caption}</h2></div>";
		}
		echo "<div class='rightcol-content-body'>{$text}</div>";
		echo "</div>";
	  break;

	  default:
        // default style
	    // only if this always work, play with different styles
        if(!empty($caption)) {
		  echo "<h2 class='fw-bolder fs-5 mb-4'>{$caption}</h2>";
		}
		echo $text;
      return;
	}

  }

}