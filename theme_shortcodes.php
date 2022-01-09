<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * e107 Bootstrap Theme Shortcodes. 
 *
*/

class theme_shortcodes extends e_shortcode {
  function __construct(){
		
    }
  
/* ------------------------------------------------------------------------------------------------------------------------------------------- */

/*----------------------------- 
  LATEST NEWS SHORTCODE - Bootstrap 5 - fizi
-----------------------------*/  
    function sc_bootstrap_5_grid_news_latest(){
  
      $template = "
        <!-- News Grid Menu for Latest 4 News -->
        {MENU: path=news/news_grid&limit=3&category=0&source=latest&featured=0&layout=homepage-latestnews}

    ";

    $text = e107::getParser()->parseTemplate($template,true);

    return $text;  
  
    } 
 
    
/*------------------------------------------ 
    Shortcode for news on extend news pages 
--------------------------------------------*/       
    /**
     * Will only function on the news page.
     * @example {THEME_NEWS_BANNER: type=date}
     * @example, {THEME_NEWS_BANNER: type=image}
     * @example {THEME_NEWS_BANNER: type=author}
     * @param null $parm
     * @return string|null
     */
    function sc_theme_news_banner($parm=null)
    {
        /** @var news_shortcodes $news */
        $sc = e107::getScBatch('news');
        $news = $sc->getScVar('news_item');

        $ret = '';
        $type = varset($parm['type']);

        switch($type)
        {
            case "title":
                $ret = $sc->sc_news_title();
                break;

            case "date":
                $ret = $sc->sc_news_date();
                break;

            case "comment":
                $ret = $sc->sc_news_comment_count();
                break;
            
            case "category":
                $ret = $sc->sc_newscategory(); 
                break;

            case "author":
                $ret = $sc->sc_news_author();
                break;

            case "image":
            default:
            if(!empty($news['news_thumbnail']))
            {
                $tmp = explode(',', $news['news_thumbnail']);

                $opts = array(
                    'w' => 1800,
                    'h' => null,
                    'crop' => false,
                );

                $ret = e107::getParser()->toImage($tmp[0], $opts);
            }
                // code to be executed if n is different from all labels;
        }

        return $ret;


    }
    
    
/*------------------------------------------ 
    Shortcode for subscribe - Bootstrap 5 - fizi 
--------------------------------------------*/    
    function sc_bootstrap_5_subscribe()
	{
		$pref = e107::pref('core');
		$ns = e107::getRender();

		if(empty($pref['signup_option_class']))
		{
			return false;
		}
        
        $frm = e107::getForm();
	    $text = $frm->open('bootstrap-5-subscribe','post', e_SIGNUP);
	    $text .= "<div class='input-group mb-2'>";
	    $text .= $frm->text('email','', null, array('placeholder'=> LAN_THEME_21));
	    $text .= $frm->button('subscribe', 1, 'submit', LAN_THEME_22, array('class'=>'btn btn-outline-light'));   
	    $text .= "</div>";
	    $text .= $frm->close();

		return $text;
	}
  
} 
 
?>