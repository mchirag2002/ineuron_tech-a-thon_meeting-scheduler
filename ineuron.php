<?php

echo "welcome";
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'test';

$conn = mysqli_connect($servername , $username , $password , $database) 



?>

<html>
    <head>
        <title>querying the database</title>
    <head>
    <body>
    <?php
        $sql  = 'select * from sample';
        $res = mysqli_query($conn, $sql);
        if (!$res)
        {
            die("query failed");
        }
        while ($row = mysqli_fetch_row($res))
        {
            var_dump($row);
            echo "<br /><hr /><br />";
        }
        mysqli_free_result($res);
    ?>
    </body>
</html>
<?php
    mysqli_close($conn);
?>
        
  