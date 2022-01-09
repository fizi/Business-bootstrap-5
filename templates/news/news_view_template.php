<?php
	/**
	 * e107 website system
	 *
	 * Copyright (C) 2008-2017 e107 Inc (e107.org)
	 * Released under the terms and conditions of the
	 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
	 *
	 */




$NEWS_VIEW_INFO = array(

	'default' 	=> array('title' => LAN_DEFAULT, 							'description' => 'unused'),
	'videos' 	=> array('title' => "Videos (experimental)", 				'description' => 'unused'),
);


// Default
// $NEWS_VIEW_WRAPPER['default']['item']['NEWSIMAGE: item=1'] = '<span class="news-images-main pull-left float-left col-xs-12 col-sm-6 col-md-6">{---}</span>';
// $NEWS_VIEW_WRAPPER['default']['item']['NEWSRELATED'] = '<hr />{---}<hr />';

$NEWS_VIEW_TEMPLATE['default']['caption'] = null; // null; // add a value to user tablerender()
$NEWS_VIEW_TEMPLATE['default']['item'] = '
<div class="border-bottom">
  <div class="row">

<div class="col-lg-3">
  <div class="d-flex align-items-center mt-lg-5 mb-4">
    {SETIMAGE: w=90&h=90&crop=1}
    {NEWS_AUTHOR_AVATAR: class=img-fluid rounded-circle}
    <div class="ms-3">
      <div class="fw-bold">{NEWS_AUTHOR}</div>
      <div class="text-muted">{NEWSCATEGORY}</div>
    </div>
  </div>
</div>
<div class="col-lg-9">
  <article>
    <header class="mb-4">
      <h1 class="fw-bolder mt-3 mb-1">{NEWS_TITLE}</h1>
      <div class="text-muted fst-italic mb-2">{NEWSDATE=short}</div>
      <div class="no-comma">{NEWSTAGS: class=badge bg-secondary text-decoration-none link-light}</div>
    </header>
    {SETIMAGE: w=1000&h=750&crop=1} 
    <figure class="mb-4">{NEWSIMAGE: item=1}</figure>
    <section class="mb-5">
      <p class="lead fs-5 mb-4">{NEWS_SUMMARY}</p>
      <p class="fs-5 mb-4">{NEWS_BODY=body}</p>
      {SETIMAGE: w=1000&h=750&crop=1}
      <div class="row news-images-1">
        <div class="col-md-6 my-3">{NEWSIMAGE: item=2}</div>
        <div class="col-md-6 my-3">{NEWSIMAGE: item=3}</div>
        <div class="col-md-6 my-3">{NEWSIMAGE: item=4}</div>
        <div class="col-md-6 my-3">{NEWSIMAGE: item=5}</div>
      </div>
      <div class="news-videos-1">
        <div class="col-md-6 my-3">{NEWSVIDEO: item=1}</div>
	    <div class="col-md-6 my-3">{NEWSVIDEO: item=2}</div>
	    <div class="col-md-6 my-3">{NEWSVIDEO: item=3}</div>
        <div class="col-md-6 my-3">{NEWSVIDEO: item=4}</div>
      </div>
      <p class="fs-5 mb-4">{NEWS_BODY=extended}</p>
    </section>
  </article>
</div>

  </div>
</div>
{NEWSRELATED: types=news&limit=4}
<ul class="pagination justify-content-between my-5 news-view-pagination">
  <li class="page-item col-md-4">{NEWS_NAV_PREVIOUS}</li>
  <li class="page-item col-md-4 text-center">{NEWS_NAV_CURRENT}</li>
  <li class="page-item col-md-4 text-right text-end">{NEWS_NAV_NEXT}</li>
</ul>
';


/*
 * 	<hr />
	<h3>About the Author</h3>
	<div class="media">
			<div class="media-left">{SETIMAGE: w=80&h=80&crop=1}{NEWS_AUTHOR_AVATAR: shape=circle}</div>
			<div class="media-body">
				<h4>{NEWS_AUTHOR}</h4>
					{NEWS_AUTHOR_SIGNATURE}
					<a class="btn btn-xs btn-primary" href="{NEWS_AUTHOR_ITEMS_URL}">My Articles</a>
			</div>
	</div>
 */


// @todo add more templates. eg. 'videos' , 'slideshow images', 'full width image'  - help and ideas always appreciated.


// Videos
 $NEWS_VIEW_TEMPLATE['videos']['item'] = '<div class="view-item"><div class="alert alert-warning">Empty news_view_template.php (videos) - have ideas? let us know.</div></div>';


// Navigation/Pagination
$NEWS_VIEW_TEMPLATE['nav']['previous'] = '<a rel="prev" class="link-dark text-underline-hover fw-bolder text-black-50" href="{NEWS_URL}">{GLYPH=fa-chevron-left}<span class="mx-1">{NEWS_TITLE} {NEWS_ID}</span></a>';
$NEWS_VIEW_TEMPLATE['nav']['current'] = '<a class="text-center link-dark text-underline-hover fw-bolder text-black-50" href="{NEWS_NAV_URL}">{LAN=BACK}</span></a>';
$NEWS_VIEW_TEMPLATE['nav']['next'] = '<a rel="next" class="text-right link-dark text-underline-hover fw-bolder text-black-50" href="{NEWS_URL}"><span class="mx-1">{NEWS_ID} {NEWS_TITLE}</span>{GLYPH=fa-chevron-right}</a> ';
