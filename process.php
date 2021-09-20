<?php

include_once 'database.php';
if (isset($_POST['save'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $city_name = $_POST['city_name'];
    $email = $_POST['email'];
    if (!preg_match("/^[a-zA-Z-' ]*$/",$email)) {
        echo "Only letters and white space allowed";
    }else{
        $sql = "INSERT INTO employee (first_name,last_name,city_name,email)
	 VALUES ('$first_name','$last_name','$city_name','$email')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully !";
        } else {
            echo "Error: " . $sql . "
        " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }

}
?>