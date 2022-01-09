<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2016 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Contact Template
 */
 // $Id$

if (!defined('e107_INIT')) { exit; }

$CONTACT_WRAPPER['info']['CONTACT_INFO'] = "<div>{---}</div>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=organization'] = "<h4 class='mb-4 text-center fw-bolder'>{---}</h4>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=message'] = "<p>{---}</p>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=address'] = "<address>{GLYPH=fa-map-marker} {---}</address>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=email1'] = "<div>{GLYPH=fa-envelope} {---}</div>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=email2'] = "<div>{GLYPH=fa-envelope} {---}</div>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=phone1'] = "<div>{GLYPH=fas-phone} {---}</div>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=phone2'] = "<div>{GLYPH=fas-phone} {---}</div>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=phone3'] = "<div>{GLYPH=fas-phone} {---}</div>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=fax'] = "<div>{GLYPH=fa-fax} {---}</div>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=hours'] = "<div>{GLYPH=fa-clock} {---}</div>";

$CONTACT_TEMPLATE['info'] = "
<div id='contactInfo' class='mt-4'>
  <!-- Backward Compat. Contact Info -->
  {SITECONTACTINFO}
  <!-- New Contact Info -->
  {CONTACT_INFO: type=organization}
  {CONTACT_INFO: type=message}
  <div class='row mb-4'>
    <div class ='col-4 text-center'>			
	  {CONTACT_INFO: type=address}
    </div>
    <div class ='col-4 text-center'>		
	  {CONTACT_INFO: type=phone1}
	  {CONTACT_INFO: type=phone2}
	  {CONTACT_INFO: type=phone3}
	  {CONTACT_INFO: type=fax}
	</div>
    <div class ='col-4 text-center'>
	  {CONTACT_INFO: type=email1}
	  {CONTACT_INFO: type=email2}
	</div>
  </div> 
  <div class='row'>
    <div class ='col-12'>
	  {CONTACT_MAP: zoom=city}
	</div>
  </div>
</div>
";


$CONTACT_TEMPLATE['menu'] =  '
	<div class="contactMenuForm">
		<div class="control-group form-group mb-3">
			<label for="contactName">{LAN=CONTACT_03}</label>
				{CONTACT_NAME}
		 </div>
		 
		<div class="control-group form-group mb-3">
			<label class="control-label" for="contactEmail">{LAN=CONTACT_04}</label>
				{CONTACT_EMAIL}
		</div>
		<div class="control-group form-group mb-3">
			<label for="contactBody" >{LAN=CONTACT_06}</label>
				{CONTACT_BODY=rows=5&cols=30}
		</div>
		<div class="form-group mb-3"><label for="gdpr">{LAN=CONTACT_24}</label>
			<div class="checkbox form-check">
				<label>{CONTACT_GDPR_CHECK} {LAN=CONTACT_21}</label>
				<div class="help-block">{CONTACT_GDPR_LINK}</div> 
			</div>
		</div>
		{CONTACT_SUBMIT_BUTTON: class=btn btn-sm btn-small btn-primary button}
	</div>       
 ';
 


// Shortcode wrappers.
$CONTACT_WRAPPER['form']['CONTACT_IMAGECODE'] 			= "<div class='control-group form-group'><label for='code-verify'>{CONTACT_IMAGECODE_LABEL}</label> {---}";
$CONTACT_WRAPPER['form']['CONTACT_IMAGECODE_INPUT'] 	= "{---}</div>";
$CONTACT_WRAPPER['form']['CONTACT_EMAIL_COPY'] 			= "<div class='control-group form-group'>{---}{LAN=CONTACT_07}</div>";
$CONTACT_WRAPPER['form']['CONTACT_PERSON']				= "<div class='control-group form-group'><label for='contactPerson'>{LAN=CONTACT_14}</label>{---}</div>";




$CONTACT_TEMPLATE['form'] = "
<div class='row justify-content-center mb-4'>
  <div class='col-lg-8 col-xl-6'>

<form action='".e_SELF."' method='post' id='contactForm' class='mt-5' >
  {CONTACT_PERSON}
  <!-- Name input-->
  <div class='form-floating mb-3'>
	{CONTACT_NAME}
    <label for='contactName'>{LAN=CONTACT_03}</label>
  </div>
  <!-- Email address input-->
  <div class='form-floating mb-3'>
    {CONTACT_EMAIL}
    <label for='contactEmail'>{LAN=CONTACT_04}</label>
  </div>
  <!-- Subject input-->
  <div class='form-floating mb-3'>
    {CONTACT_SUBJECT}
    <label for='contactSubject'>{LAN=CONTACT_05}</label>
  </div>
  {CONTACT_EMAIL_COPY}
  <!-- Message input-->
  <div class='form-floating mb-3'>
    {CONTACT_BODY}
    <label for='contactBody'>{LAN=CONTACT_06}</label>
  </div>
  {CONTACT_IMAGECODE}
  {CONTACT_IMAGECODE_INPUT}
  <div class='my-3'>
    <label for='gdpr' class='fw-bolder'>{LAN=CONTACT_24}</label>
    <div class='checkbox'>
	  <label>{CONTACT_GDPR_CHECK} {LAN=CONTACT_21}</label>
	  <div class='help-block'>{CONTACT_GDPR_LINK}</div> 
	</div>
  </div>
  <!-- Submit Button-->
  <div class='d-grid'>
	{CONTACT_SUBMIT_BUTTON}
  </div>
</form>

  </div>
</div>";


// Set the layout and  order of the info and form.
$CONTACT_TEMPLATE['layout'] = '
{---CONTACT-FORM---} 
{---CONTACT-INFO---}

';



	// Customize the email subject
	// Variables:  CONTACT_SUBJECT and CONTACT_PERSON as well as any custom fields set in the form. )
$CONTACT_TEMPLATE['email']['subject'] = "
{CONTACT_SUBJECT}
";





