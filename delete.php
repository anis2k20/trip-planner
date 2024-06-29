<?php

include('connection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM plans WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if($result) {
        echo "<script type='text/javascript'>
            alert('Data successfully deleted.');
            window.location.href = 'show-trip.php';
        </script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

?>