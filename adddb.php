<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function adddatabase ($databaseName) {
       include('/userkey.php');
 // create curl resource 
	//$databaseName=$_POST['DBname'];

        //User name key match
        //$username_key="yojohnyo1@gmail.com:egf4TLGJt5d/djAaOwp2S2hMf7uL+jrJwl9kHtkEoHNNwDEUecCB3UFASy6SFUgjnMJ86sOxkBV1";
        $postfields=array('db'=>$databaseName);
	$url_for_site="https://cloudapi.acquia.com/v1/sites/devcloud:yojohnyo/dbs.json";
	$json_data = json_encode($postfields);
		
	//Set as post
	//curl_setopt($ch, CURLOPT_POST, true);
	$ch = curl_init($url_for_site); 
        // set credentials
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
	curl_setopt($ch, CURLOPT_HTTPAUTH, TRUE);
	curl_setopt($ch, CURLOPT_USERPWD, $username_key);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
            'Content-Type: application/json;charset=utf-8',                                                                                
            'Content-Length: ' . strlen($json_data))                                                                       
        );


        //return the transfer as a string 
        // $output contains the output string 
        $output = curl_exec($ch); 
        $curl_info= curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
       //Check results
        if ($output) {
            $returnString = "DB Add successful";
        }
        else {
            $returnString =  "DB add failed";
        }
        // close curl resource to free up system resources 
        curl_close($ch);   
        return $returnString;
}
?>
