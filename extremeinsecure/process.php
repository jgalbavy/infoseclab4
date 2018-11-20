<html>

  <head>
	<h1> The results:</h1>
	<hr/>
  </head>

<body>

<?php

 
 
 print "<p>";
 $tool = $_POST['tool'];
 $tooldir = './products/' . $tool;

 print "<b>The files in the tool are:</b>";

 system("ls $tooldir");

 $filename = $_POST['filename'];
 
 $fullpath = './products/' . $tool .'/' . $filename;

 $cmd = 'cat ' . $fullpath; 
 system("cat $fullpath");

 print "</p>";


?>

<p>
</p>
<b>NOTE:</b> You are in the right direction.  Good luck.
</body>
</html>

