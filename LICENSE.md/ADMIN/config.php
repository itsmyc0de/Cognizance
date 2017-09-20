<?php

$name=$_POST['name'];
$pass=$_POST['password'];
if($name=="admin" && $pass == "admin_cse"){Print '<script>window.location.assign("view.php");</script>';
}
else{Print '<script>alert("Error!");</script>';
		Print '<script>window.location.assign("index.php");</script>';
}

?>