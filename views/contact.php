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
        <form action="/?action=contact" method="post" id="contactform">
            <fieldset> 
                <label for="fname">First Name:</label>
                <input type="text" name="fname" id="firstname" size="10" value="<?php echo $namefirst; ?>" required><br>
                <label for="lname">Last Name:</label>
                <input type="text" name="lname" id="lastname" size="15" value="<?php echo $namelast; ?>" required><br>
                <label for="contactemail">Email Address:</label>
                <input type="email" name="contactemail" id="contactemail" size="48" value="<?php echo $contactemail; ?>" required><br>
                <label for="subject">Subject:</label>
                <input type="text" name="subject" id="subject" size="60" value="<?php echo $subject; ?>" required><br>
                <label for="contactmessage">Message</label>
                <textarea name="contactmessage" id="message" rows="10" cols="60" required><?php echo $contactmessage; ?>
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
