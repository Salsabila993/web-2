<?php
require_once("function/Callpage.php");
callpage("header");
callpage("navbar");
if (isset($_GET['page'])) {
    callpage($_GET['page']);
}else {
    callpage("home");
}

callpage("footer");

?>
