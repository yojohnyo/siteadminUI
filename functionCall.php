<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var_dump($_POST);
include 'databaseread.php';
if ($_POST["submitValue"] == "addDB") {
    print "Add DB";
} elseif ($_POST["submitValue"]== "addSite") {
    print "Add Site";
    $dbData=$_POST;
    include'databasewrite.php';
    databaseWrite($dbData,"siteInfo");
}
