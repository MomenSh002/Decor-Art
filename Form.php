
<?php
	require('connect.php');

    $jsonReqUrl  = "php://input";
    $reqjson = file_get_contents($jsonReqUrl);
    $data = json_decode($reqjson, true);

    $name = $data['name'];
    $email = $data['email'];
    $mobile = $data['mobile'];
    $msg = $data['msg'];
?>

<p> Name is:
    <?php echo $name;?>
</P>
<p> email is:
    <?php echo $email;?>
</P>
<p> mobile is:
    <?php echo $mobile;?>
</P>
<p> msg is:
    <?php echo $msg;?>
</P>

<?php
$query = "INSERT INTO contact_us (name, email, phone, msg) VALUES ('$name','$email','$mobile','$msg')";

if (mysqli_query($conn, $query)) {
    echo 'Send successfully';
}

