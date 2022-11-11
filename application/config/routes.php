<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Welcome/user';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['add_user_data'] = 'Welcome/add_user_data';
$route['add_student_data'] = 'Welcome/add_student_data';
