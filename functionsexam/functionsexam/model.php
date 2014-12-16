<?php

/* 
 * Function Exam model
 */

/*  Get the Guitar1 database connection before anything else */
$server = 'localhost';
$dbname = 'lauranel_guitar1';
$dsn = 'mysql:host='.$server.';dbname='.$dbname;
$username='lauranel';
$password='CnjN3ls0n@))^';

try{
    $db = new PDO($dsn,$username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('database_error.php');
    exit();
}

 /* Write the first function using the following SQL to query the Guitar1 database
  *  Use a try - catch block to handle exceptions
 * Use a prepared statement inside the try to execute the query
 * The result of the query should be an array
 * Be sure to return the array if it has data or 'FALSE' if no data was retrieved
 */
  function get_categories(){
     global $db;
     $sql = 'SELECT DISTINCT products.categoryID, categoryName '
            . 'FROM products INNER JOIN categories '
            . 'WHERE products.categoryID = categories.categoryID';
     $categories = $db->query($sql);
     return $categories;
  }



/* 
 * Write the second function following this comment block
 
 * The function should be named "buildNav" and retrieve the needed 
 * information by calling the first function.
 
 * Then, the function should build an unordered list
 * placing each item retrieved from the database in an anchor element in a list item.
 * The entire list should be stored in a variable named $navigation.
 
 * If nothing is retrieved from the database, use the same $navigation variable 
 * to store an error message.
 
 * Finally, return $navigation (it was called in the controller).
 */
 function buildNav(){
     
 }