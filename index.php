<!Doctype html>
<?php
ini_set("display_errors", 1);
include_once "./library/Website.php";
$website = new Website();
$details = $website->getWebsiteDeatils();
?>
<html>
    <h1>Name:<?php echo $details['name'];?></h1>
    <h1>version:<?php echo $details['Version'];?></h1>    
</html>





