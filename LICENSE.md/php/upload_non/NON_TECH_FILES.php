<?php

$msg="";
if($handle = opendir('.')){
	while(false !== ($file = readdir($handle))){
	
	if(($file != ".") && ($file != "..")&& ($file != "NON_TECH_FILES.php"))
		$msg .='<li><a href="'.$file.'">'.$file.'</a></li>';
	}
}
closedir($handle);

?>
<!doctype html>
<html>
<head><title>Tech Files</title></head>
<body>

<h2>Files In the Tech Folder</h2>
<p>List of files:</p>
<ul>
<p><?php echo $msg ?></p>
</ul>

</body>
</html>