<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php include('../../template.php'); ?>
<html>
<head>
  	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  	<title><?php echo PRODUCT_NAME; ?> Documentation</title>
  	<link rel="stylesheet" type="text/css" href="../../css/doc.css">
	<meta name="keywords" content="digital signage, signage, narrow-casting, <?php echo PRODUCT_NAME; ?>, open source, agpl" />
	<meta name="description" content="<?php echo PRODUCT_NAME; ?> is an open source digital signage solution. It supports all main media types and can be interfaced to other sources of data using CSV, Databases or RSS." />  <link href="img/favicon.ico" rel="shortcut icon">
  	<!-- Javascript Libraries -->
  	<script type="text/javascript" src="lib/jquery.pack.js"></script>
  	<script type="text/javascript" src="lib/jquery.dimensions.pack.js"></script>
  	<script type="text/javascript" src="lib/jquery.ifixpng.js"></script>
</head>

<body>
	<h1>Settings Page</h1>
	
	<p>The Settings Page is the primary location for configuring <?php echo PRODUCT_NAME; ?>. </p>
	
	<p>It is constructed from a number of different categories. Each setting
	within these categories has an explanation above it. The settings page is
	accessible from the Dashboard or Navigation bar.</p>
	
	<h2>Catagories</h2>
	
	<h3 lang="en-GB" class="western"><strong>Content</strong></h3>
	
	<p lang="en-GB" class="western">This tab allows you to set default content
	item settings, such as a default length and ratio. This helps <?php echo PRODUCT_NAME; ?> if the
	file does not contain duration information.</p>
	
	<h3 lang="en-GB" class="western"><strong>Default</strong></h3>
	
	<p lang="en-GB" class="western">Sets the default options on some forms to
	always appear and be applied unless altered. You can also change your time
	zone in this section.</p>

	<?php include('../../template/footer.php'); ?>
</body>
</html>