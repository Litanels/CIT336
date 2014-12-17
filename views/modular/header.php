<?php
$nav = GetNavigationItems();
?>
<!DOCTYPE html>
 <head> 
        <meta charset="utf-8"> 
        <title>Laura Nelson Design</title> 
        <link href="/css/style_1.css" type="text/css" rel="stylesheet" media="screen">

        <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0">
    </head> 
    <body>
<!--Navigation-->
<section id="navigation">
    <div class="container">
        <div id="nav-wrap">
            <div id="menu-icon">
                <a href="/"><img style="border:0;" src="/images/brand/colored_monogram.jpg" alt="logo" width="70" height="70"></a>
                <h1 class="header">Laura Nelson Design</h1>
            </div>
            <nav>
                <ul id="nav-links">
                    <?php foreach ($nav as $action => $text) : ?>
                        <li>
                            <a href='/index.php?action=<?php echo $action ?>' title='<?php echo $text; ?>'><?php echo $text ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
            <!--</nav>
                     <ul id="nav-links">
                         <li><a href="/views/home.php" title="Home">Home</a></li>
                         <li><a href="/views/login.php" title="Login">Sign-up/Login</a></li>
                         <li><a href="/views/portfolio/portfolio.php" title="Portfolio">Portfolio</a></li>
                         <li><a href="/views/services/services.php" title="Services">Services</a></li>
                         <li><a href="/views/about/best_practices.php" title="Best Practices">Best Practices</a></li>
                         <li><a href="/views/services/thank_yous.php" title="thank-you notes">Thank you Notes</a></li>
                         <li><a href="/views/about/about.php" title="About">About</a></li>
                         <li><a href="/views/contact.php" title="Contact">Contact</a></li>
                     </ul>
                 </nav>-->
        </div>
    </div>
</section>