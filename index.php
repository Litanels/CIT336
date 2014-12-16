<?php
ini_set('display_erros', '1');
session_start();

require'models/database.php';
require'models/db.php';
require'models/users.php';
require'models/navigation.php';

include'views/modular/header.php';

$action = strtolower(filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING));

switch ($action)
{
    case 'about':
	   include 'views/about/about.php';
	   break;
    case 'best practices':
        include 'views/about/best_practices.php';
        break;
    case 'contact':
        include 'views/contact.php';
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
    case 'thank you notes':
        include 'views/services/thank_yous.php';
        break;
        
    default:
        include 'views/home.php';
}

