<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'ex1';

require_once('header.php');
require_once('menu.php');

$arrPages = array('ex1', 'ex2', 'ex3');

if ( in_array($page, $arrPages) )
    require_once($page.'.php');
else
    require_once('404.php');

require_once('footer.php');