<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
 *
 * $Source: /cvs_backup/e107_0.8/e107_themes/templates/comment_template.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }


// Shortcode wrappers.
$COMMENT_WRAPPER['item']['COMMENT_TIMEDATE']     = '<small>{---}</small>';
$COMMENT_WRAPPER['item']['COMMENT_EDIT']        = '<span class="comment-edit">{---}</span>';
$COMMENT_WRAPPER['item']['COMMENT_REPLY']		= '<span class="comment-reply">{---}</span>';
$COMMENT_WRAPPER['item']['COMMENT_AVATAR']  	= '<div class="comment-avatar center">{---}</div>';
$COMMENT_WRAPPER['item']['COMMENT_MODERATE']	= '<span class="comment-moderate">{---}</span>';

$COMMENT_WRAPPER['form'] = $COMMENT_WRAPPER['item']; // use the above wrappers for the 'form' as well.

// Templates

$COMMENT_TEMPLATE['form'] = "
<div class='d-flex mb-4 border-bottom pb-4 w-100'>
  {SETIMAGE: w=60&h=60&crop=1}
  <div class='flex-shrink-0'>{COMMENT_AVATAR: class=rounded-circle}</div>
  <div class='ms-3 w-100'>
    {AUTHOR_INPUT}
	{COMMENT_INPUT}
	<div id='commentformbutton' class='my-4'>
	  {COMMENT_BUTTON}
	  {COMMENT_SHARE}
	</div>
  </div>
</div>
"; 




$COMMENT_TEMPLATE['item'] = '
<div class="d-flex mb-4 border-bottom w-100">
  {SETIMAGE: w=60&h=60&crop=1}
  <div class="flex-shrink-0">{COMMENT_AVATAR: class=rounded-circle}</div>
  <div class="ms-3 w-100">
    <div class="row">
      <div class="col align-self-start text-start">
        <div class="fw-bold">{USERNAME}<span class="mx-3 fw-normal text-muted"><small>{COMMENT_TIMEDATE=relative}</small></span></div>
      </div>
      <div class="col align-self-end text-end">{COMMENT_RATE}</div>
    </div>
    <div class="mt-2 mb-3">{COMMENT}</div>
	<div class="mb-4">
      <div class="row">
        <div class="col align-self-start text-start">{COMMENT_STATUS}</div>
        <div class="col align-self-end text-end">{COMMENT_REPLY} {COMMENT_EDIT} {COMMENT_MODERATE}</div>
      </div>
    </div>
  </div>
</div> 
';
	



$COMMENT_TEMPLATE['layout'] = '
<section>
  <div class="card bg-light">
    <div class="card-body">
      <!-- Comment form-->
      {COMMENTFORM}
      <!-- Single comment-->
      {COMMENTS} 
      <div class="my-4">
        {MODERATE}
      </div>
    </div>
  </div>
</section>										
';
