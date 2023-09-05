<?php 

    include "../db_conn.php";

    $fname = "dummy fname";
    $lname = "dummy lname";
    $uname = $_POST['uname'];
    $email = "dummy email";
    $pass = $_POST['pass'];
    

    $data = "fname=".$uname;
    
    
    if(empty($uname)){
    	$em = "User name is required";
    	header("Location: ../signup.php?error=$em&$uname");
	    exit;
    
    }else if(empty($pass)){
    	$em = "Password is required";
    	header("Location: ../signup.php?error=$em&$uname");
	    exit;
    }else {

    	$sql = "INSERT INTO user(fname, lname, username, email, password) 
    	        VALUES(?,?,?,?,?)";
    	$stmt = $conn->prepare($sql);
    	$stmt->execute([$fname, $lname, $uname, $email, $pass]);

    	header("Location: ../index.php");
	    exit;
    }