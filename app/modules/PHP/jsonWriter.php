<?php

/* 
 * This method(s) will create a json formatted object
 * that can be written into a JSON file, with the purpose
 * of using this file to load static data into fields on
 * a web page.
 * 
 * The html input fields, have the same names as the class
 * names of the web page containers, for example :
 * <label name="a">Label of a</label>
 * <input type="text" name="a" placeholder="type something here>
 * 
 * where this references an element of any type with class name "a"
 * and with an inner child element of type <p>
 */

function formToJSON(array $post, $JSONfileName) {
    $fileManager = new \Illuminate\Filesystem\Filesystem();
    $result = array();
    //find out if the json file exists
    if (!file_exists($JSONfileName)) { $return[0] = false; $return[1] = "File does not exist!"; }
    //now lets transform our post array to JSON format
    $stringJSON =  json_encode($post);
    //lets rewrite that file, with this new json string
    if (!$fileManager->put($JSONfileName, $stringJSON))
    { 
        $result[0] = false;
        return $result; 
    }
    else { 
        $result[0] = true;
        $result[1] = $stringJSON;
        return $result; 
   }       
}
function ftpFileToCostumerServer($fileToUpload, array $ftpCredential) {
    $result = array();
    $result[0] = true;
    //get key credentials
    $server = $ftpCredential['server'];
    $user = $ftpCredential['user'];
    $passw =$ftpCredential['passw'];
    $destinationFolder = $ftpCredential['destination'];
    //$mode = 0777;
    //just in case set nice permissions for that file
    //chmod($fileToUpload, octdec($mode));
    //connection methods
    $connectHandler = ftp_connect($server);
    
    if (!$connectHandler) { 
       $result[0] =  false;
       $result[1] = "error handler";
        return $result;
    }

    if (!ftp_login($connectHandler, $user, $passw)) {
        $result[0] = false;
        $result[1] = "error login";
        ftp_close($connectHandler);
        return $result;
    }  
    //ftp_pasv($connectHandler, true);
    ftp_chdir($connectHandler, "robertomoller.me");
    if (!ftp_put($connectHandler, $destinationFolder, $fileToUpload, FTP_BINARY)) {
             $result[0] = false;
             $result[1] = "error upload";
             ftp_close($connectHandler);
             return $result;
    } 
    
    return $result;
}
