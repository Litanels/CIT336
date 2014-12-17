<?php

/// Returns an array where the key is the Action and the value is the text for the link.
function GetNavigationItems()
{
    $nav = array(
        'home' => 'Home',
        'portfolio' => 'Portfolio',
        'services' => 'Services',
        'bestpractices' => 'Best Practices',
        'thankyounotes' => 'Thank You Notes',
        'about' => 'About',
        'contact' => 'Contact'
    );
    
    if (CheckSession())
    {
        $nav['menu'] = 'Menu';
        $nav['logout'] = 'Log Out';
    }
    else
    {
        $nav['login'] = 'Log In';
    }
    
    return $nav;
}