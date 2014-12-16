<?php
    $nav = GetNavigationItems();
?>
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
                <?php foreach($nav as $action => $text) : ?>
                <li>
                    <a href='/index.php?action=<?php echo $action ?>' title='<?php echo $text; ?>'><?php echo $text ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
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
</section>