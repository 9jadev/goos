<?php
session_start();
if(isset($_SESSION['user_trackid'])!="") {
    header("Location: tracking.php");
}
include_once 'dbconnect.php';

//check if form is submitted
if (isset($_POST['track'])) {
    $trackid = mysqli_real_escape_string($con, $_POST['trackid']);
    $result = mysqli_query($con, "SELECT * FROM client WHERE trackid = '" . $trackid. "'");
    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['user_trackid'] = $row['trackid'];
        $_SESSION['shipper'] = $row['shipper'];
        $_SESSION['reciever'] = $row['reciever'];
        $_SESSION['origin'] = $row['origin'];
        $_SESSION['package'] = $row['package'];
        $_SESSION['status'] = $row['status'];
        $_SESSION['destination'] = $row['destination'];
        $_SESSION['carrier'] = $row['carrier'];
        $_SESSION['type'] = $row['type'];
        $_SESSION['weight'] = $row['weight'];
        $_SESSION['mode'] = $row['mode'];
        $_SESSION['reference'] = $row['reference'];
        $_SESSION['product'] = $row['product'];
        $_SESSION['qty'] = $row['qty'];
        $_SESSION['pmtmode'] = $row['pmtmode'];
        $_SESSION['freight'] = $row['freight'];
        $_SESSION['delivery'] = $row['delivery'];
        $_SESSION['depature'] = $row['depature'];
        $_SESSION['pickupd'] = $row['pickupd'];
        $_SESSION['pickupt'] = $row['pickupt'];
        $_SESSION['comments'] = $row['comments'];
$_SESSION['image']  = $row['image'];
      
        header("Location: tracking.php");
    } else {
        $errormsg = "Invalid tracking id";
                header("Location: tracking_trace.htm");

    }
}
?>