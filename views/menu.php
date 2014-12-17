        
<main>
    <ul>
        <li><a href="/?action=myinfo">Update my info</a></li>
        <li><a href="/?action=newitem">Upload a new item</a></li>
    </ul>


    <?php if (LoggedInUserIsAdmin()) : ?>

        Admin Items:<br />
        <ul>
            <li><a href="/?action=editusers">Edit Users</a></li>
            <li><a href="/?action=newitem">Upload a new item</a></li>
        </ul>

    <?php endif; ?>
</main>
<footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modular/footer.php'; ?> 
</footer>
</body>
</html>

