<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if (!empty($username)){
    if(!empty($password)){
        $host= "localhost";
        $dbusername= "root";
        $dbpassword="5aug2003";
        $dbname = "project";
        //create connection
        $conn = new mysqli($host, $dbusername, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect error(){
            die('connecr error('. mysqli_connect_errno() .') '
            . mysqli_connect_errno());
        }
        else{
            $sql ="INSERT INTO account (username, password)
            values ('$username', '$password')";
            if ($conn->query($sql)){
                echo "New record is inserted sucessfully";
            }
            else{
                echo "Error:". $sql ."<br>". $conn->error;
            }
            $conn->close();
        }
        )


    }
    else{
        echo "Password should not be empty";
        die();
    }

}
else{
    echo "Username should not be empty";
    die();
}
?>