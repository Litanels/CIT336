<?php
ini_set('display_erros', '1');
session_start();

require 'models/database.php';
require 'models/db.php';
require 'models/users.php';
require 'models/navigation.php';
require 'models/roles.php';

include 'views/modular/header.php';

$action = strtolower(filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING));

switch ($action)
{
    case 'about':
	   include 'views/about/about.php';
	   break;
    case 'bestpractices':
        include 'views/about/best_practices.php';
        break;
    case 'changerole':
        $userid=(int) filter_input(INPUT_GET, 'userid', FILTER_SANITIZE_NUMBER_INT);
        $role = filter_input(INPUT_GET, 'role', FILTER_SANITIZE_STRING);
        if (LoggedInUserIsAdmin() && $userid && $role)
        {
            UpdateUserRole($id, $role);
        }
        header('Location: /?action=editusers');
        exit();
    case 'contact':
        include 'views/contact.php';
        break;
    case 'deleteuser':
        $id = (int) filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        
        if (LoggedInUserIsAdmin() && $id)
        {
            DeleteUser($id);
        }
        header('Location: /?action=editusers');
        exit();
    case 'editusers':
        $page= (LoggedInUserIsAdmin()) ? 'views/editusers.php' : 'views/login.php';
        $users = GetAllUsers();
        include $page;
        break;
    case 'home':
        include 'views/home.php';
        break;
    case 'login':
        include 'views/login.php';
        break;
     case 'loginsubmit':
        $email = filter_input(INPUT_POST, 'emaillogin', FILTER_SANITIZE_EMAIL);
	    $password = filter_input(INPUT_POST, 'passwordlogin', FILTER_SANITIZE_STRING);
        if (LoginUser($email, $password)) {
            header('Location: /?action=menu');
            exit();
            
        }else{
            echo "There was an error. Please try again.";
        }
        
        include 'views/login.php';
        break;
    case 'logout':
        session_destroy();
        $_SESSION = array();
        header('Location: /');
        exit();
        break;
    case 'menu':
        $page = (CheckSession()) ? 'views/menu.php' : 'views/login.php';
        include $page;
        break;
    case 'myinfo':
        $page = 'views/login.php';
        
        if ($userId = GetLoggedInUserId()) 
        {
            $page = 'views/myinfo.php';
            $user = GetUser($userId);
        }
        
        include $page;
        break;
    case 'portfolio':
        include 'views/portfolio/portfolio.php';
        break;
    case 'registersubmit':
        $regFirst = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
        $regLast = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
        $regmail = filter_input(INPUT_POST, 'emailreg', FILTER_SANITIZE_EMAIL);
        $regpass1 = filter_input(INPUT_POST, 'passwordreg1', FILTER_SANITIZE_STRING);
        $regpass2 = filter_input(INPUT_POST, 'passwordreg2', FILTER_SANITIZE_STRING);
        $message = '';
        
        if (RegisterUser($regFirst, $regLast, $regmail, $regpass1, $regpass2, $message)) {
            header('Location: /?action=menu');
            exit();
        }
        
        include 'views/login.php';
        break;
    case 'services':
        include 'views/services/services.php';
        break;
    case 'thankyounotes':
        include 'views/services/thank_yous.php';
        break;
    case 'updateinfo':
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $regFirst = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
        $regLast = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
        
        if ($userId = GetLoggedInUserId())
        {
            $page = 'views/myinfo.php';
            if ($email && $regFirst && $regLast)
            {
                UpdateUserInfo($userId, $email, $regFirst, $regLast);
                $user = GetUser($userId);
                $message = 'User Info Updated.';
            }
            else
            {
                $message = 'Please fill in all information to update.';
            }
        }
        else
        {
            $page = 'views/login.php';
        }
        include $page;
        break;
    case 'updatepassword':
        $oldpassword = $_POST['currentpassword'];
        $newpassword = $_POST['newpassword'];
        $newpassword2= $_POST['repeatpassword'];
        $message = '';
        
        if($newpasword == $newpassword2)
        {
            $validMessage = '';
            if (ValidatePassword($newpassword, $validMessage))
            {
                if (ValidateOldPassword($oldpassword))
                {
                    UpdateUserPassword($newpassword);
                    $message = 'Password Update';
                }
             else
             {
                 $message = 'The old password did not match.';
             }
            }
        else
        {
            $message = $validMessage;
        }
        }
        else
        {
            $message = "The new passwords do not match";
        }
        if ($userID = GetLoggedInUserId())
        {
            $page = 'views/myinfo.php';
            $user = GetUser($userId);
        }
        include 'views/myinfo.php';
        break;
        
    default:
        include 'views/home.php';
}

