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
    <center>
        <form action="main.php" method="POST">
            <br>
            <br>
            <table>
                <tr>
                    <td>Student id: </td>
                    <td>
                        <select name="studid">
                            <?php
                        foreach ($rows as $row) {
                            $s = $row['studentid'];
                        
                        echo "<option value=".$s."> ".$s."</option>";
                        }
                        ?>
                        </select>
                    </td> <br>
                    <br>
                </tr>
                <tr>
                    <td>subject code: </td>
                    <td><input type="text" name="subjectcode"></td>
                </tr>
                <tr>
                    <td>Sessional mark: </td>
                    <td><input type="number" name="smark"></td> <br>
                    <br>
                </tr>
                <tr>
                    <td>university mark: </td>
                    <td><input type="text" name="umark"></td>
                </tr>
            </table>
            <br>
            <br>
            <input type="submit" value="submit" name="markentry">
        </form>
    </center>
</body>

</html>
  