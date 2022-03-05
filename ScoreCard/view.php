<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
                            include 'dbconnection.php';
                            $sql = "SELECT * FROM student";
                            if (!$result = mysqli_query($con, $sql)) {
                                echo "unable to result";
                            }

                            if (!$rows = mysqli_fetch_all($result, MYSQLI_ASSOC)) {
                                echo "unable to assoc!";
                            }

                            
                            ?>
<html>
    <body>
        <form action="studentview.php"method="POST">
            <table>
            <tr>
            <br><td><h1>View student</h1></td>
            <td><select name="studid">
                            <?php
                        foreach ($rows as $row) {
                            $s = $row['studentid'];
                        
                        echo "<option value=".$s.">".$s."</option>";
                        }
                        ?></td> <br></tr><tr>
            <br>
                </tr>
                
            </table>
            <input type="submit" name="admin">
        </form></center>
    </body>
</html>