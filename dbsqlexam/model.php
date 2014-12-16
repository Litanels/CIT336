<?php
/* ***************************************
 * DB and SQL Exam model
 * **************************************/

/* ***************************************
 * Get access to the database connection
 * **************************************/
    $dsn='mysql:host=cit336db.mikeneville.net; dbname=my_guitar_shop1';
    $username="mgs_usr";
    $password="pa55word";
    
    try{
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }

/* ***************************************
 * Get navigation items from database
 * **************************************/
function getNavigation() {
   $guitar1 = array();
  try {
    $sql = 'SELECT DISTINCT products.categoryID, categoryName '
            . 'FROM products INNER JOIN categories '
            . 'WHERE products.categoryID = categories.categoryID';
    $stmt = $guitar1->prepare($sql);
    $stmt->execute();
    $navList = $stmt->fetchAll();
    $stmt->closeCursor();
  } catch (PDOException $exc) {
    header('location: ./error.php');
    exit;
  }
  if (!empty($navList)) {
    return $navList;
  } else {
    return FALSE;
  }
}

/* ***************************************
 * Get the list of items by category
 * **************************************/
function getCategoryItems($category) {
  global $db;
  $query = 'SELECT*FROM my_guitar_shop1
          WHERE categoryITEMS = :catinfo';
  try {
     $statement = $db->prepare($query);
        $statement->bindValue(':catinfo', $catinfo);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;  

  } catch (Exception $ex) {
    header('location: ./error.php');
    exit;
  }
  if(!empty($results)){
    return $results;
  } else{
    return FALSE;
  }
}

/* ***************************************
 * Get item based on its key
 * **************************************/
function getItem($productid) {
    global $db;
    $query = 'SELECT * '
            . 'FROM my_guitar_shop1'
            . 'WHERE productID = :productinfo';

  try {
       $statement = $db->prepare($query);
        $statement->bindValue(':productinfo', $productinfo);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;  

  } catch (Exception $ex) {
    header('location: ./error.php');
    exit;
  }
  if(!empty($results)){
    return $results;
  } else{
    return FALSE;
  }
}

/* ***************************************
 * Build the navigation menu list
 * **************************************/
function buildNav(){
  $navItems = getNavigation();
  if(is_array($navItems)){
    $navigation = '<ul>';
    foreach ($navItems as $item) {
      $navigation .= "<li><a href='/dbsqlexam?action=q&amp;category=$item[0]' title='View our $item[1]'>$item[1]</a></li>";
    }
    $navigation .= '</ul>';
  } else {
    $navigation = 'Sorry, a critical error occurred.';
  }
  return $navigation;
}