<?php 
        // create curl resource 
        $ch = curl_init(); 

        //User name key match
        $username_key="yojohnyo1@gmail.com:egf4TLGJt5d/djAaOwp2S2hMf7uL+jrJwl9kHtkEoHNNwDEUecCB3UFASy6SFUgjnMJ86sOxkBV1";
        $url_for_site="https://cloudapi.acquia.com/v1/sites.json";
        // set credentials
        curl_setopt($ch, CURLOPT_USERPWD, $username_key);
        
        // set url 
        curl_setopt($ch, CURLOPT_URL, $url_for_site); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 
        $curl_info= curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
        print curl_error($ch)."<br>";
        print $ch."<br>";
        print $output."<br>";
        print $username_key."<br>";
        print $curl_info;

        // close curl resource to free up system resources 
        curl_close($ch);   
        

?>