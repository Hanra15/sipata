<?php
defined('BASEPATH') or exit('No direct script access allowed');

// To use reCAPTCHA, you need to sign up for an API key pair for your site.
// link: http://www.google.com/recaptcha/admin
$config['recaptcha_site_key'] = '6LeWBX0nAAAAAAj3jUins4IFOX4Vos57G4IhdxHb';
$config['recaptcha_secret_key'] = '6LeWBX0nAAAAAI2CdiQruqdOh7ngZVGcn0DLRe0S';

// reCAPTCHA supported 40+ languages listed here:
// https://developers.google.com/recaptcha/docs/language
$config['recaptcha_lang'] = 'id';

/* End of file recaptcha.php */
/* Location: ./application/config/recaptcha.php */