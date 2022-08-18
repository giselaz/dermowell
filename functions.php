<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'detyra');
// variable declaration
$username = "";
$email    = "";
$errors   = array(); 




// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
 // REGISTER USER
if (isset($_POST['register_btn'])){
	// call these variables with the global keyword to make them available in function
	global  $db,$errors;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
    $username    =  e($_POST['username']);
	$email       =  e($_POST['email']);
	$password_1  =  e($_POST['password_1']);
	$password_2  =  e($_POST['password_2']);

// form validation: ensure that the form is correctly filled
if (empty($username)) { 
    array_push($errors, "Ploteso username"); 
}

if (empty($email)) { 
    array_push($errors, "Ploteso fushen email"); 
}
if (empty($password_1)) { 
    array_push($errors, "Ploteso fjalekalimin"); 
}
if ($password_1 != $password_2) {
    array_push($errors, "Fjalekalimet nuk perputhen");
}


// register user if there are no errors in the form
if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database
if(isset($_POST['roli'])){
    $roli = e($_POST['roli']);

    $query = "INSERT INTO user(roli,username, email, fjalekalimi) 
					  VALUES('$roli','$username','$email','$password')";
                      mysqli_query($db, $query);
                      $_SESSION['success']  = "Nje user i ri u krijua!!";
                      header('location: admin/index.php');
}else{
    $query = "INSERT INTO users (roli,username, email, fjalekalimi) 
              VALUES('user', '$username','$email','$password')";
    mysqli_query($db, $query);

    // get id of the created user
    $logged_in_user_id = mysqli_insert_id($db);

    $_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
    $_SESSION['success']  = "You are now logged in";
    header('location: index.php');				
    }
}
}
function getUserById($id){
	global $db;
	$query = "SELECT * FROM users WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}



// LOGIN USER
if (isset($_POST['login_btn'])) {
	
global $db, $email, $errors;
    // grap form values
	$email = e($_POST['email']);
	$password = e($_POST['password']);

	// make sure form is filled properly
    if (empty($email)) {
		array_push($errors, "Ploteso fushen email");
	}
	if (empty($password)) {
		array_push($errors, "Ploteso fushen fjalekalim");
	}
    // attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);
        $query = "SELECT * FROM user WHERE email='$email' AND fjalekalimi='$password' LIMIT 1";
		$results = mysqli_query($db, $query);
		 $count=mysqli_num_rows($results);
        if ($count == 1) { // user found
			// check if user is admin or user
            $logged_in_user = mysqli_fetch_assoc($results);
		
            if ($logged_in_user['roli'] == 'admin') {
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: admin/index.php');	
            }else{
				$_SESSION['customerid'] =  $logged_in_user['id'];
                    $_SESSION['user'] = $logged_in_user;
                    $_SESSION['success']  = "You are now logged in";
    
                    header('location: index.php');
                }	  
            }else {
                array_push($errors, "Fjalekalim ose email i gabuar");
            }
        }
	}

	function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}

	function isAdmin()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['roli'] == 'admin' ) {
			return true;
		}else{
			return false;
		}
	}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error" style="background-color:#fac3c3; width: 92%; padding: 10px; border: 1px solid #a94442;  color: #a94442; 
		background: #f2dede; 
		border-radius: 5px; ">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	





?>