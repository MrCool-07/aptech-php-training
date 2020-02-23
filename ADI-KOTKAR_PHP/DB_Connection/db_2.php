<?php
    include('db_3.php');

    $sql = 'SELECT * FROM student';
    $result = $conn->query($sql);

    //output
    while($row = $result->fetch_assoc())
    {
        echo '<pre>';
        echo $row['id'].' ';
        echo $row['first_name'].' ';
        echo $row['last_name'].' ';
        echo $row['username'].' ';
        echo $row['email'].' ';
        echo $row['password'].' ';
        echo '</pre>';

    }
    
?>

<?php
   $conn->close(); 
?>