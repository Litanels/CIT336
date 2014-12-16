<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="utf-8"> 
        <title>Laura Nelson Design</title> 
        <link href="/css/style_1.css" type="text/css" rel="stylesheet" media="screen">

        <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0">
        <script src="/js/editusers.js" ></script>
    </head> 
    <body> 

        <main>

            <div id="userlistdiv">
                <table id="userstable">
                    <tr>
                        <th>Email Address</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Role</th>
                        <th>Delete</th>
                        <th>Change Role</th>
                    </tr>

                    <?php
                    foreach ($users as $user) :
                        $roleName = 'User';
                        $changeRole = 'Admin';

                        if ($user->roleId == ROLE_ID_ADMIN) {
                            $roleName = 'Admin';
                            $changeRole = 'User';
                        }
                        ?>

                        <tr>
                            <td><?php echo $user->email; ?></td>
                            <td><?php echo $user->firstName; ?></td>
                            <td><?php echo $user->lastName; ?></td>
                            <td><?php echo $roleName; ?></td>
                            <td><button onclick="DeleteUser(<?php echo $user->id; ?>)">Delete</button></td>
                            <td><button onclick="ChangeUserRole(<?php echo $user->id; ?>, '<?php echo $changeRole; ?>');">Make <?php echo $changeRole; ?></button></td>
                        </tr>

                    <?php endforeach; ?>
                </table>
            </div>
        </main>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modular/footer.php'; ?> 
        </footer>
    </body>
</html>