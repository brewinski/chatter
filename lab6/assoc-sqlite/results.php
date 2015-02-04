<?php
/*
 * Script to display query results in associative array search example.
 * DANGEROUS: Does not sanitise user input.
 */
include '../../Smarty/libs/Smarty.class.php';
include "includes/defs.php";

date_default_timezone_set('UTC');

/* Get form data. */
$query = $_GET['query'];

/* Get list of pms that match form data. */
$pms = search($query);

/* Display results. */
$smarty = new Smarty;
$smarty->assign("query", $query);
$smarty->assign("pms", $pms);
$smarty->display("results.tpl");
?>
