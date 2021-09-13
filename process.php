<?php 
ob_start();
date_default_timezone_set('Asia/Kolkata');

require_once'connection.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch ($action) {
case 'enquiry':enquiry($pdo);break;
//case 'login' : login($pdo); break;

default : header('Location: index.php');
}

function enquiry($pdo){
	$name=$_POST['name'];
	$phoneno=$_POST['phoneno'];
	$companyname=$_POST['companyname'];
	$email=$_POST['email'];
	$type=$_POST['type'];
    $message=$_POST['message'];


    $data = array(
    	'name' =>$name, 
    	'phoneno' =>$phoneno, 
    	'companyname' =>$companyname, 
    	'email' =>$email, 
    	'type'=>$type,
    	'message'=>$message
    );

    $sql="INSERT INTO `tbl_enquiry`(`name`, `phoneno`, `companyname`, `email`, `type`, `message`) VALUES (:name,:phoneno,:companyname,:email,:type,:message)";
    $stmt= $pdo->prepare($sql);
	//$stmt->execute($data);
	if ($stmt->execute($data)) { 
	    $_SESSION['thankyou']='1';
	}
	else{
	    $_SESSION['thankyou']='2';
	}
echo json_encode($_SESSION['thankyou']);
 //header('Location:http://thegreentern.com/');
 exit();


}