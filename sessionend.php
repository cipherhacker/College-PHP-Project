
<?php


if (session_status() == PHP_SESSION_NONE) {
    session_destroy();
	session_write_close();
}

echo "Logged out succesfully" ;
echo "<script>setTimeout(\"location.href = 'portal.html';\",1500);</script>";


?>