<?php
if ($_SESSION["auth_err"]) {
echo "<div class='authError'><p>".$_SESSION["auth_err"]."</p></div>";
} 
?>