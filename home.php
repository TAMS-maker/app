<html>
    <head>
    </head>

    <body>

    <?php

    include('connect.php');

    $sql = "SELECT * FROM ui";
    $result = mysqli_query($connect, $sql);
    while($row = mysqli_fetch_array($result)){
        echo "<a href = 'user.php?id=".$row['id']."'>";
        echo $row ['Fname']." ".$row['Lname'];
        echo "</a>";
        echo "<br />";
        echo "<br />";
        echo "<br />";

    }

    ?>

    </body>


</html>
<?php


session_start();

echo 'Welcome to your shitty profile -';
echo '<br />';
echo $_SESSION['Fname'];
echo '<br />';
echo $_SESSION['Lname'];
echo '<br />';
echo $_SESSION['Username'];
echo '<br />';
echo $_SESSION['City'];
echo '<br />';
echo $_SESSION['Province'];
echo '<br />';
echo $_SESSION['Zip'];
echo '<br />';



?>
<a href="logout.php">Logout</a>