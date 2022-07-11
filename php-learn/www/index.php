<?php
require "./inc/header.php";
require "./constants.php";
?>
<h1>Hello</h1>
<?php
foreach ($_SERVER as $key => $item) {
    echo '[' . $key . ' : ' . $item . ']<br><br>';
}
require "./inc/footer.php";
?>