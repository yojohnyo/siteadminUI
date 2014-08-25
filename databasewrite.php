<?php

function databaseWrite ($writeData, $databaseTable) {
	$databaseHostName = "localhost:33067";
	$databaseName = "tracking";
	$userName = "root";
	$password = "";
	$connection = mysql_connect($databaseHostName,$userName,$password,$databaseName);
	
	//Checking for live connection
	if (!$connection) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	//Write SQL statement
	$sqlWrite="insert into ".$databaseName.".".$databaseTable." (";
	$columnName = "";
	$value = "";
	
	//foreach ($writeData as $index=>$indexValue) {
	//	$columnName .= $index.",";
	//	$value .=$indexValue.",";
	//}
	$sqlWrite .= implode(",",array_keys($writeData)).") VALUES ('".implode("','",$writeData)."');";

	$sqlWrite1="INSERT INTO tracking.siteinfo (column1,column2,column3) VALUES ('site1','name','url');";
		echo "implode".$sqlWrite."<br>";
                echo "sql non implode".$sqlWrite1."<br>";
                    
	$output = mysql_query ($sqlWrite);
	print "<br>";
	echo mysql_error();
	var_dump($output);
	//var_dump(mysql_fetch_array($output));
	mysql_close($connection);
}

$testData = array("column1"=>"site2","column2"=>"name2","column3"=>"url2");
$table="siteInfo";
print "Database write<br>";
databaseWrite ($testData, $table);

	?>