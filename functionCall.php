<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var_dump($_POST);
print "<br>".$_POST["submitValue"]."<br>";
if ($_POST["submitValue"] == "addDB") {
    print "Add DB";
}
