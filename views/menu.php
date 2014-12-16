<html> 
    <head> 
        <meta charset="utf-8"> 
        <title>Laura Nelson Design</title> 
        <link href="/css/style_1.css" type="text/css" rel="stylesheet" media="screen">

        <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0">
    </head> 
<ul>
	<li><a href="/?action=myinfo">Update my info</a></li>
	<li><a href="/?action=newitem">Upload a new item</a></li>
</ul>


<?php if(LoggedInUserIsAdmin()) : ?>

	Admin Items:<br />
	<ul>
		<li><a href="/?action=editusers">Edit Users</a></li>
                <li><a href="/?action=newitem">Upload a new item</a></li>
	</ul>

<?php endif; ?>

         <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modular/footer.php'; ?> 
            </footer>
    </body>
</html>
		
