<?php
/**
 * Copyright (C) e107 Inc (e107.org), Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 * 
 * News default templates
 */

if (!defined('e107_INIT'))  exit;

global $sc_style;



$NEWS_TEMPLATE = array();


$NEWS_MENU_TEMPLATE['list']['start']       = '<div class="thumbnails">';
$NEWS_MENU_TEMPLATE['list']['end']         = '</div>';


$NEWS_INFO = array(
	'default' 	=> array('title' => LAN_DEFAULT, 	'description' => 'unused'),
	'list' 	    => array('title' => LAN_LIST, 		'description' => 'unused'),
	'2-column'  => array('title' => "2 Column (experimental)",     'description' => 'unused'), //@todo more default listing options.
);


// XXX The ListStyle template offers a listed summary of items with a minimum of 10 items per page. 
// As displayed by news.php?cat.1 OR news.php?all 
// {NEWSBODY} should not appear in the LISTSTYLE as it is NOT the same as what would appear on news.php (no query) 

// Template/CSS to be reviewed for best bootstrap implementation 
$NEWS_TEMPLATE['list']['caption'] = '{NEWSCATEGORY}';
$NEWS_TEMPLATE['list']['start']	= '
<div class="list-news-items">
';

/*
 // (optional)
$NEWS_TEMPLATE['list']['first'] = '
		{SETIMAGE: w=800&h=400}
		<div class="default-item">

          {NEWSIMAGE: item=1}
			<h2 class="news-title">{NEWS_TITLE: link=1}</h2>
          <p class="lead">{NEWS_SUMMARY}</p>
          {NEWSVIDEO: item=1}
          <div class="text-justify">
       
          </div>
           <div class="text-right">
			<a href="{NEWS_URL}" class="btn btn-primary">{LAN=LAN_READ_MORE}</a>
			</div>
        <hr>
		
			</div>
		{SETIMAGE: w=400&h=350&crop=1}
';
*/

$NEWS_TEMPLATE['list']['item'] = '
  <div class="list-news-item">
    <div class="row">
      <div class="col-md-6">
        <div class="list-news-item-image">
          {SETIMAGE: w=900&h=675&crop=1}
          <a href="{NEWS_URL}">{NEWSIMAGE: item=1}</a>
          <div class="list-news-item-category">{NEWSCATEGORY}</div>
        </div>
      </div>
      <div class="col-md-6">
        <h2 class="list-news-item-title">{NEWS_TITLE: link=1}</h2>
        <div class="list-news-item-info">{NEWSAUTHOR}&nbsp;&nbsp;|&nbsp;&nbsp;{NEWSDATE=short}&nbsp;&nbsp;|&nbsp;&nbsp;{NEWSCOMMENTCOUNT}&nbsp;&nbsp;{NEWS_COMMENT_LABEL}&nbsp;&nbsp;|&nbsp;&nbsp;<i class="far fa-eye"></i>&nbsp;{HITS_COUNTER: multi=1}</div>
        <div class="list-news-item-body">{NEWS_BODY}</div>
        <div class="list-news-item-extended"><a href="{NEWSURL}"><i class="fas fa-angle-double-right"></i></a></div>
      </div>
    </div>
  </div>
';

$NEWS_TEMPLATE['list']['end'] = '
</div>
';






//$NEWS_MENU_TEMPLATE['list']['separator']   = '<br />';



// XXX As displayed by news.php (no query) or news.php?list.1.1 (ie. regular view of a particular category)
//XXX TODO GEt this looking good in the default Bootstrap theme. 
/*
$NEWS_TEMPLATE['default']['item'] = '
	{SETIMAGE: w=400}
	<div class="view-item">
		<h2>{NEWSTITLE}</h2>
		<small class="muted">
		<span class="date">{NEWSDATE=short} by <span class="author">{NEWSAUTHOR}</span></span>
		</small>

		<div class="body">
			{NEWSIMAGE}
			{NEWSBODY}
			{EXTENDED}
		</div>
		<div class="options">
			<span class="category">{NEWSCATEGORY}</span> {NEWSTAGS} {NEWSCOMMENTS} {EMAILICON} {PRINTICON} {PDFICON} {ADMINOPTIONS}
		</div>
	</div>
';
*/



/* FOR NEWS ITEM ON NEWS.PHP ***********************************************************************/

// $NEWS_WRAPPER['default']['item']['NEWSIMAGE: item=1'] = '<span class="news-images-main pull-left float-left col-xs-12 col-sm-6 col-md-6">{---}</span>';

$NEWS_TEMPLATE['default']['caption'] = '<h2 class="fw-bolder fs-5 mb-5">{LAN=LAN_PLUGIN_NEWS_NAME}</h2>'; // add a value to user tablerender()

$NEWS_TEMPLATE['default']['start'] = '
<!-- Default News Template -->
';

$NEWS_TEMPLATE['default']['item'] = '
<div class="mb-4">
  <div class="small text-muted">{NEWSDATE=short}</div>
  <a class="link-dark text-underline-hover" href="{NEWS_URL}"><h3>{NEWS_TITLE}<h3></a>
</div>
';

$NEWS_TEMPLATE['default']['end'] = '
';


/* FOR NEWS ITEM ON CATEGORY'S PAGE **************************************************************************/

$NEWS_TEMPLATE['category']          = $NEWS_TEMPLATE['default'];
$NEWS_TEMPLATE['category']['start']	= '
<!-- Category News Template -->
<div class="categories-items">
';

/**
 * @todo (experimental)
 */
$NEWS_TEMPLATE['2-column']['caption']  = '{NEWS_CATEGORY_NAME}';
$NEWS_TEMPLATE['2-column']['start']    = '<div class="row">';
$NEWS_TEMPLATE['2-column']['item']     = '<div class="item col-md-6">
											{SETIMAGE: w=400&h=400&crop=1}
											{NEWSTHUMBNAIL=placeholder}
	                                            <h3>{NEWS_TITLE}</h3>
	                                            <p>{NEWS_SUMMARY}</p>
	                                         	<p class="text-right"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">' . LAN_READ_MORE . '</a></p>
            							  </div>';
$NEWS_TEMPLATE['2-column']['end']      = '</div>';


### Related 'start' - Options: Core 'single' shortcodes including {SETIMAGE}
### Related 'item' - Options: {RELATED_URL} {RELATED_IMAGE} {RELATED_TITLE} {RELATED_SUMMARY}
### Related 'end' - Options:  Options: Core 'single' shortcodes including {SETIMAGE}
/*
$NEWS_TEMPLATE['related']['start'] = "<hr><h4>".defset('LAN_RELATED', 'Related')."</h4><ul class='e-related'>";
$NEWS_TEMPLATE['related']['item'] = "<li><a href='{RELATED_URL}'>{RELATED_TITLE}</a></li>";
$NEWS_TEMPLATE['related']['end'] = "</ul>";*/


$NEWS_TEMPLATE['related']['start'] = '
{SETIMAGE: w=900&h=700&crop=1}
<h2 class="fw-bolder fs-5 mb-4">'.LAN_RELATED.'</h2>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">';

$NEWS_TEMPLATE['related']['item'] = '
  <div class="col mb-2">
    <div class="card">
      {RELATED_IMAGE}
      <div class="card-body">
        <h5 class="card-title fw-bolder"><a class="link-dark text-black-50 text-underline-hover" href="{RELATED_URL}">{RELATED_TITLE}</a></h5> 
      </div>
    </div>
  </div>';

$NEWS_TEMPLATE['related']['end'] = '
</div>';