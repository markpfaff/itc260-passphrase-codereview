<?php
session_start();
/**
 * halt.php "halts" the loading of index.php until a correct login is entered
 * 
 * how it works:
 * -checks form submission first
 * -stores correct submission in variable
 * -starts session so it remembers user is logged in
 * 
 * login is "letmein"
 * 
 * @package Session Passphrase Assignment
 * @author Mark Pfaff <markdpfaff@gmail.com>
 * @version 1.0 2015/04/30 
 * @link http://markpfaff.com/ 
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see halt.php
 * @todo code review
 */



define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
$passphrase=$_POST['passphrase'];

if (isset($passphrase)){//check if form element id 'passphrase' is set

    if (($passphrase=='letmein') && (!isset($_SESSION['login']))){//if passphrase is correct but a session is not started start session
       
        
        $_SESSION['login']=true;
        echo "Access granted!";
        //continue loading page
    }else if ($_SESSION['login']===true){//if passphrase is correct and session is started show page
 
                    //continue on to main page
 

    }else{//if a passphrase is entered but is not the correct passphrase show form with error message
        echo '<h1>Incorrect Passphrase</h1>
            <h2>Please Re-Enter Passphrase</h2>
            <form action="' . THIS_PAGE . '" method="post" id="form">
        <fieldset>
        
        <legend>Login</legend>
        <label>Passphrase</label>
        <input type="text" name="passphrase" id="passphrase">
        
        <input type="submit" id="submit" value="Send">
        </fieldset>
        </form>'; 
        die;
    }
}else  if((!isset($passphrase)) && (!isset($_SESSION['login']))){//if passphrase is not set show form
    echo '<form action="' . THIS_PAGE . '" method="post" id="form">
        <fieldset>
        
        <legend>Login</legend>
        <label>Passphrase</label>
        <input type="text" name="passphrase" id="passphrase">
        
        <input type="submit" id="submit" value="Send">
        </fieldset>
        </form>'; 
        die;
}


