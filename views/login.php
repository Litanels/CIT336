<?php ?>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script src="/js/login.js" ></script>


<main>
    <div id='main_content'>
        <h2>Sign-up/Login</h2>
       <?php
        if ($message) {
            echo $message;
        }
        ?>
        <div id = "loginregister">
            <form action="/?action=registersubmit" method="POST" id="registerform">
                <input type="hidden" name="actiontype" id="actiontype" value=""/>
                <fieldset>
                    <legend>Register a New Account</legend>
                    First Name: <input type="text" name="firstname" id="firstname"/><br />
                    Last Name: <input type="text" name="lastname" id="lastname"/><br />
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