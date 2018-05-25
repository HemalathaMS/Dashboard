<?php
$myValue= $_REQUEST['myValue'];
$_SESSION['searchValues']=array('value1','value2');

array_push($_SESSION['searchValues'],$myValue);
foreach ($_SESSION['searchValues'] as $temp) {
    echo "$temp <br>";
}

 ?>
