<?php 
require_once 'conf.php';
$n = intval($_GET['n']); 
?>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Dior Photo</title>

<!-- For Facebook -->
<meta property="og:url"         content="<?php echo $site_url; ?>s.php?n=<?php echo $n; ?>" />
<meta property="og:type"        content="website" />
<meta property="og:title"       content="NOSE - A SMELL GOOD MOVIE BY Clément Beauvais & Arthur de Kersauson" />
<meta property="og:description" content="Inside Dior’s world of perfume" />
<meta property="og:image"       content="<?php echo $site_url; ?>images/uploaded<?php echo $n; ?>.png" />
<meta property="og:site_name"	content="A SMELL GOOD MOVIE BY Clément Beauvais & Arthur de Kersauson">

<!-- For Twitter -->
<meta name="twitter:card" 			content="summary_large_image" />
<meta name="twitter:title" 			content="NOSE" />
<meta name="twitter:description" 	content="Inside Dior’s world of perfume" />
<meta name="twitter:image" 			content="<?php echo $site_url; ?>images/uploaded<?php echo $n; ?>.png" />
<meta name="twitter:image:alt" 		content="A SMELL GOOD MOVIE BY Clément Beauvais & Arthur de Kersauson">

</head>

<body>
text a b c<br>
<img src="images/uploaded<?php echo $n; ?>.png"><br>
text d e f
</body>

</html>