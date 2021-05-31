<?php

include "navigation.php";


$arr = array('logForm', 'CV', 'indexForm', 'regForm', 'edit_form') ;
$pages = (isset($_GET['tab'])) ? $_GET['tab']: 'CV';
if (in_array($pages, $arr)) {
    include("$pages.php");
}

