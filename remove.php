<?php
$conn = mysqli_connect('localhost','root','','sidali');
 
if (mysqli_query($conn,$_COOKIE["query"])) {
	setcookie (session_id(), "", time() - 3600);
	session_destroy();
	session_write_close();

    echo "Record deleted successfully";
    echo "<script>setTimeout(\"location.href = 'portal.html';\",1500);</script>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
    echo "<script>setTimeout(\"location.href = 'homepage.html';\",1500);</script>";
}
?>