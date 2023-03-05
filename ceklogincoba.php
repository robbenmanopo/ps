<?php
$query = mysqli_query($con, "SELECT * FROM view_user WHERE
                       username='$username' AND
                       password='$password' AND
                       id_role='$role' OR 
                            SELECT * FROM view_user1 WHERE
                                 username='$username' AND
                                 password='$password' AND
                                 id_role='$role'");
?>