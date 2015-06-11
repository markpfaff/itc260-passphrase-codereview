<?php
session_start();
/**
 * index.php this is a main page that is "halted" from loading by halt.php
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
include 'halt.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>A3:Session Passphrase</title>
    </head>
    <body>
        <p>You entered the correct passphrase! Here's your page!</p>

    </body>
</html>
