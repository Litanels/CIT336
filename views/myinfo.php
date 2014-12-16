<html> 
    <head> 
        <meta charset="utf-8"> 
        <title>Laura Nelson Design</title> 
        <link href="/css/style_1.css" type="text/css" rel="stylesheet" media="screen">

        <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0">
    </head> 
    <body> 
        <main>

            <?php
            // $user set by the controller.
            $message = isset($message) ? $message : null;
            ?>
            <div id="message">
                <p>
                    <?php echo $message; ?>
                </p>
            </div>

            <div id="infoupdate">
                <form id="infoupdateform" method="POST" action="/?action=updateinfo">
                    <fieldset>
                        <legend>Update my information</legend>
                        First Name: <input type="text" name="fname" id="fname" value="<?php echo $user->firstName; ?>" required /><br />
                        Last Name: <input type="text" name="lname" id="lname" value="<?php echo $user->lastName; ?>" required /><br />
                        Email Address: <input type="email" name="emailreg" id="emailreg" value="<?php echo $user->email; ?>" required /><br />
                        <input type="submit" name="Submit" value="Submit" />
                    </fieldset>
                </form>
                <form id="passwordupdateform" method="POST" action="/?action=updatepassword">
                    <fieldset>
                        <legend>Update your password</legend>
                        Current Password: <input type="password" name="currentpassword" id="currentpassword" /><br />
                        New Password: <input type="password" name="newpassword" id="newpassword" /><br />
                        Repeat New Password: <input type="password" name="repeatpassword" id="repeatpassword" /><br />
                        <input type="submit" name="Submit" value="Submit" />
                    </fieldset>
                </form>
            </div>
        </main>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modular/footer.php'; ?> 
        </footer>
    </body>
</html>


