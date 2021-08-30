<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 
*/

// error_reporting(0);
// if($_SERVER['REQUEST_URI']=='localhost:7882/sublimeproduct/database.php'){
// header("location:productpage.php");
//     die();
// }
// if($_SERVER['SERVER_NAME']=='localhost'){
    //$domain = '';





    $user = 'root';
    $pwd = '';
    $host = 'localhost';
    $sys_dbname = 'product1';
    $dbh = mysqli_connect($host,$user,$pwd,$sys_dbname) or die ('You need to set your database connection');
 





 
// }
// else {
//     $domain = '';
//     $user = 'thevintagetwin';
//     $pwd = 'thevintagetwin123';
//     $host = 'localhost';
//     $sys_dbname = 'thevintagetwin';
// }

?>

 