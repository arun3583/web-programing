<?php
include 'dbconnection.php';
$sid = $_POST['studid'];
$sql = "SELECT * FROM student,mark where student.studentid=$sid";
$res = mysqli_query($con, $sql);
$row = mysqli_fetch_all($res, MYSQLI_ASSOC);
foreach ($row as $row) {
    $n = $row['name'];
    $a = $row['age'];
    $c = $row['course'];
    $sm = $row['session_mark'];
    $sc = $row['subjectcode'];
    $um = $row['univercity_mark'];
    $g = $row['grade'];
}
?>
<html>

<body>
    <center>
        <form action="" method="POST">
            <br>
            <br>
            <table border="1" style="width: max-content;">
                <tr>
                    <td>name</td>
                    <?php echo "<td>" . $n . "</td> <br>
            <br>
                </tr>
                <tr>
                    <td> age</td>
                    <td>" . $a . "</td>
                </tr>
                <tr>
                <td> course</td>
                <td>" . $c . "</td>
            </tr>
            <tr>
            <td> subject code</td>
            <td>" . $sc . "</td>
        </tr>
        <tr>
        <td> session mark</td>
        <td>" . $sm . "</td>
    </tr>
    <tr>
        <td> univercity mark</td>
        <td>" . $um . "</td>
    </tr>
    <tr>
        <td> Grade</td>
        <td>" . $g. "</td>
    </tr>
    ";
                    ?>
            </table>
            <br>
            <br>
        </form>
    </center>
</body>

</html>