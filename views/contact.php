<main>
                <div id='main_content'>
                    <h2>Contact</h2>
                    <p class="content">I would love to design and build your place on the web.<br>
                        If you would like me to create a web site for you or have any questions,
                        please send me an email. I promise to respond promptly.</p>
                    <?php
                    if (!empty($reply)) {
                        echo "<p class='notify'>$reply</p>";
                    }
                    unset($reply);
                    ?>
                    <p class="content">All fields are required.</p>
                    <form method="post" action="index.php" id="contactform">
                        <fieldset> 
                            <label for="firstname">First Name:</label>
                            <input type="text" name="firstname" id="firstname" size="10" value="<?php echo $firstname; ?>" required><br>
                            <label for="lastname">Last Name:</label>
                            <input type="text" name="lastname" id="lastname" size="15" value="<?php echo $lastname; ?>" required><br>
                            <label for="email">Email Address:</label>
                            <input type="email" name="email" id="email" size="48" value="<?php echo $email; ?>" required><br>
                            <label for="subject">Subject:</label>
                            <input type="text" name="subject" id="subject" size="60" value="<?php echo $subject; ?>" required><br>
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="10" cols="60" required><?php echo $message; ?>
                            </textarea><br>
                            <p>Answer the following CAPTCHA question in the box below.</p>
                            <label for="captcha">What color is a red apple?</label>
                            <input type ="text" name="captcha" id="captcha" size="5"><br>
                            <label for="action">&nbsp;</label>
                            <input type="submit" name="action" id="action" value="Send"><br>
                        </fieldset>
                    </form>

                </div>

            </main>
        
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modular/footer.php'; ?> 
        </footer>
    </body> 
</html> 
