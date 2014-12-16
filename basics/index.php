<?php
//Check whether the form has been submitted
if (isset($_POST['firstname'])&&isset($_POST['lastname'])&&isset($_POST['url'])&&isset($_POST['email'])){
//If the form has been submitted, capture each input into a separate variable
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $url = $_POST['url'];
  $email = $_POST['email'];

  }
  //Check to make sure all fields are completed.
  if(!empty($firstname) && !empty($lastname) && !empty($url) && !empty($email)){
  //Create array for entered fields.
   $inputs = array('firstname'=>$firstname, 'lastname'=>$lastname, 'url'=>$url, 'email'=>$email);
  include ('view2.php');
  exit;
 } else {
  //Stops display of array if fields are empty.
  echo 'All fields required.';
  include ('view2.php');
  exit;
}
?>