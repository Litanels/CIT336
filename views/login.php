<?php ?>
<html>
    <head> 
        <meta charset="utf-8"> 
        <title>Laura Nelson Design</title> 
        <link href="/css/style_1.css" type="text/css" rel="stylesheet"/>
    </head> 
    <body> 


        <main>
            <div id='main_content'>
                <h2>Sign-up/Login</h2>
                <div id = "loginregister">
                    <form action="/?action=registersubmit" method="POST" id="registerform">
                        <input type="hidden" name="actiontype" id="actiontype" value=""/>
                        <fieldset>
                            <legend>Register a New Account</legend>
                            First Name: <input type="text" name="firstname" id="fname"/><br />
                            Last Name: <input type="text" name="lastname" id="lname"/><br />
                            Email Address: <input type="email" name="emailreg" id="emailreg"/><br />
                            Password: <input type="password" name="passwordreg1" id="passwordreg1"/><br />
                            Verify Password: <input type="password" name="passwordreg2" id="passwordreg2"/><br />
                            <button name="register" id="buttonregister">Register</button>
                        </fieldset>
                    </form>

                    <br><br />
                    <form action="/?action=loginsubmit" method="POST" id="loginform">
                        <fieldset>
                            <legend>Login with Existing Account</legend>
                            Email Address: <input type="text" name="emaillogin" id="emaillogin"/><br />
                            Password: <input type="password" name="passwordlogin" id="passwordlogin"/><br />
                            <button name="login" id="buttonlogin">Login</button>
                        </fieldset>      
                    </form>

                </div>

            </div>

        </main>

        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modular/footer.php'; ?> 
        </footer>
    </body> 
</html> 