<!DOCTYPE HTML>

<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]-->
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!-->
<html class="no-js" lang="en"><!--<![endif]-->

<head>
	<meta charset="UTF-8">
	<title>REM ~ Random Excuse Generator</title>

	<!-- If JS is available, changes <html> class to js -->
	<script>
		var docElement = document.documentElement;
		docElement.className = docElement.className.replace(/\bno-js\b/,'') + ' js';
	</script>

	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
</head>
<body>

	<h1>Random Excuse Generator</h1>
	<p class="about">A silly little thing made by <a href="http://twitter.com/mrqwest">@mrqwest</a> as a play around with PHP. Let's see how much I remember!</p>

	<?php 
	// lets throw some excuses into an array
	
	$excuses = array(
		'The Dog ate it',
		'the neighbours dog ate it', 
		'the rapture happened',
		'there is no spoon',
		'it must have slipped my memory',
		'fuck it, fuck you'
		);

	$length = count($excuses) - 1;

	$rand = rand(0,$length);

	echo $excuses[$rand];

	?>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
