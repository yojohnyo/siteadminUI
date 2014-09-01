<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include("databaseread.php");
$dbRead = DBRead("*","siteinfo",FALSE,NULL,NULL);
print"<p><p><p>";
//var_dump($dbRead);
print"<table border='1' width='500'>";
print"<th>ID</th><th>SiteURL</th><th>SiteName</th><th>Index</th>";
foreach ($dbRead as &$row) {
    //var_dump($row);
    print "<tr>";
    foreach ($row as &$cell) {
        print "<td>".$cell."</td>";
    }
    print "</tr>";
}
print "</table>";