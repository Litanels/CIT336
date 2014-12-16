<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="utf-8"> 
        <title>Laura Nelson Design</title> 
        <link href="/css/style_1.css" type="text/css" rel="stylesheet"/>
    </head> 
    <body> 
       
           
            <main>
                <div id='main_content'>
            <h2>Database Error</h2>
            <p>There was an error connecting to the database.</p>
            <p>Error message: <?php echo $error_message; ?></p>
            <p>&nbsp;</p>
                </div>

            </main>
        
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modular/footer.php'; ?> 
        </footer>
    </body> 
</html> 
