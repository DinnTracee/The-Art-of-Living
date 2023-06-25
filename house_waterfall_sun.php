<?php

//Start of Code

//Define Variables for business
$business_name = 'Lifestyle Coaching Service';
$business_slogan = 'Helping Individuals Overcome Life's Challenges';
$business_tagline = 'Creating Fulfilling and Purposeful Lives';

//Set Constants
define('BUSINESS_NAME', $business_name);
define('SLOGAN', $business_slogan);
define('TAGLINE', $business_tagline);

//Create Business Website Function
function create_business_website(){
	$html = '<!DOCTYPE html>
	<html>
	<head>
		<title>'.BUSINESS_NAME.' | '.SLOGAN.'</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>'.BUSINESS_NAME.'</h1>
		<h2>'.SLOGAN.'</h2>
		<p>'.TAGLINE.'</p>
	</body>
	</html>';
	
	echo $html;
}

//Create Homepage for Business
function create_business_homepage(){
	$html = '<!DOCTYPE html>
	<html>
	<head>
		<title>'.BUSINESS_NAME.' | '.SLOGAN.'</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Welcome to '.BUSINESS_NAME.'!</h1>
		<p>We\'re here to help you to overcome life\'s challenges and create a fulfilling and purposeful life.</p>
	</body>
	</html>';
	
	echo $html;
}

//Create About Us Page for Business
function create_business_about_us_page(){
	$html = '<!DOCTYPE html>
	<html>
	<head>
		<title>About Us | '.BUSINESS_NAME.'</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>About Us</h1>
		<p>'.BUSINESS_NAME.' is a lifestyle coaching service that helps individuals to overcome life\'s challenges and create a fulfilling and purposeful life.</p>
	</body>
	</html>';
	
	echo $html;
}

//Create Contact Us Page for Business
function create_business_contact_us_page(){
	$html = '<!DOCTYPE html>
	<html>
	<head>
		<title>Contact Us | '.BUSINESS_NAME.'</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Contact Us</h1>
		<p>If you have any questions, comments, or feedback, please feel free to contact us!</p>
		<p>Email: info@'.BUSINESS_NAME.'.com</p>
		<p>Phone: +1 (212) 555-1234</p>
	</body>
	</html>';
	
	echo $html;
}

//Create Coaching Services Page for Business
function create_business_coaching_services_page(){
	$html = '<!DOCTYPE html>
	<html>
	<head>
		<title>Coaching Services | '.BUSINESS_NAME.'</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Coaching Services</h1>
		<p>At '. BUSINESS_NAME. ', we offer a range of coaching services to help individuals overcome life\'s challenges and create a fulfilling and purposeful life.</p>
	</body>
	</html>';
	
	echo $html;
}

//Create Testimonials Page for Business
function create_business_testimonials_page(){
	$html = '<!DOCTYPE html>
	<html>
	<head>
		<title>Testimonials | '.BUSINESS_NAME.'</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Testimonials</h1>
		<p>Hear what our clients are saying about '.BUSINESS_NAME.'.</p>
	</body>
	</