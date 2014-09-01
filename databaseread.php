<?php

function DBRead ($readData, $databaseTable, $selectCriteria, $selectColumn, $selectValue) {
       include('/userkey.php');
    $connection = mysql_connect($databaseHostName,$userName,$password,$databaseName);
	
    //Checking for live connection
    if (!$connection) {
    	echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
	
    //Create SQL statement
    $sqlWrite="select ".$readData." from ".$databaseName.".".$databaseTable;
    $columnName = "";
    $value = "";
    if ($selectCriteria) {
        $sqlWrite .= "where ".$selectColumn." = ".$selectValue;
    }
    $sqlWrite .= ";";
    $output = mysql_query ($sqlWrite);
    $result=array();
    	print "<br>";
        print $sqlWrite."<br>";
    while ($sqlArray = mysql_fetch_array($output, MYSQL_NUM)) {;
        array_push($result, $sqlArray);
        //echo mysql_error();
    }
	mysql_close($connection);
    return $result;
}

/*$testData = array("column1"=>"site2","column2"=>"name2","column3"=>"url2");
$table="siteInfo";
print "Database write<br>";
databaseWrite ($testData, $table);*/
