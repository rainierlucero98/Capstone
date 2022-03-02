<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset(); 

echo "Session Restarted" 

?>

</body>

<a href="index.php"> Back to Main Menu </a>


</html>