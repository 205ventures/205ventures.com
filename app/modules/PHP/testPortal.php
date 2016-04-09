<?php
/*
 * Go to http://poondocom.ipage.com/robertomoller.me/testJSONReader.html
 * to test the application and see if you can break it or not
 * this url is the container page, or the website the user will
 * look at when making changes to the content of their site
 * run this testPortal.php file in your computer and make
 * changes to the containers, then navigate to the above Url
 * and see if changes were committed, the server takes a little
 * time to update files sometimes. delete history in your browser
 * if you cant see changes. 
 * 
 */
include_once 'jsonWriter.php';

$nameOfFile = 'testJSONReader.json';
//This credentials are unique to every
/*$costumerFtpCredentials = array('server' => 'ftp.ipage.com', //these values will come from DB
                                'user' => '205ventures', 
                                'passw' => 'yellowbananas.205',
                                'destination' => 'testJSONReader.json');*/
if(isset($_POST['submit'])) {
    //let's write to file first
    $error = NULL;
    $toJSON_OK = formToJSON($_POST, $nameOfFile );
    if ( !$toJSON_OK[0] ) { $errror = "Couldn't perform operation, try again!"; }
    if(isset($costumerFtpCredentials['server'])) { // if there are credentials, meaning an ftp username and password
            $fileUp = ftpFileToCostumerServer($nameOfFile, $costumerFtpCredentials);
                if(!$fileUp[0]) { 
                    $error = "Not possible to update file remotely, please try again later";
                }
        }
      if ( $error != NULL ) { echo '<script>alert("error: ' . $error . '");</script>'; }
      else { echo '<script>alert(" Good job! update done! ");</script>'; }
     }
?>
<script src="jsonReader.js"></script>
<script src="/205ventures-v2/public/js/jquery.js"></script>
<script> JSONReadData("testJSONReader.json"); </script>

<h1>This is a portal</h1>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <table>
        <tr><td><label>Message a</label></td>
            <td><textarea class="a editable" name="a" cols="20" rows="6"></textarea></td>
        </tr>
        <tr><td><label>Message b</label></td>
            <td><textarea class="b editable" name="b" cols="20" rows="6"></textarea></td>
        </tr>
        <tr><td><label>Message c</label></td>
            <td><textarea class="c editable" name="c" cols="20" rows="6"></textarea></td>
        </tr>
        <tr><td><label>Message f</label></td>
            <td><textarea class="f editable" name="f" cols="20" rows="6"></textarea></td>
        </tr>
        <tr><td><label>Message e</label></td>
            <td><textarea class="e editable" name="e" cols="20" rows="6"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="submit">Post</button></td>
    </tr>
    </table>
</form>