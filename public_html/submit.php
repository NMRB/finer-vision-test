<?php



// This function will run within each post array including multi-dimensional arrays
function ExtendedAddslash(&$params)
{
        foreach ($params as &$var) {
            // check if $var is an array. If yes, it will start another ExtendedAddslash() function to loop to each key inside.
            is_array($var) ? ExtendedAddslash($var) : $var=addslashes($var);
            unset($var);
        }
}

// Initialize ExtendedAddslash() function for every $_POST variable
ExtendedAddslash($_POST);


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$gender = $_POST['gender'];
$dateOfBirth = $_POST['dateOfBirth'];
$comments = $_POST['comments'];

$db_host = 'db';
$db_username = 'silver';
$db_password = 'password';
$db_name = 'my_db';


$table = "table_name";
$con = mysqli_connect( $db_host, $db_username, $db_password) or die(mysql_error());


$create_db = "CREATE DATABASE IF NOT EXISTS $db_name";

mysqli_query($con ,$create_db);
mysqli_select_db($con ,$db_name);


$query = "SELECT ID FROM " . $table; // that should be id and not ID
//$result = mysql_query($mysql_connexn, $query); // your original code
// however connection comes last in mysql method, unlike mysqli
$result = mysqli_query($con , $query);

if(empty($result)) {
    echo "<p>" . $table . " table does not exist</p>";
    $query = mysqli_query($con,"CREATE TABLE IF NOT EXISTS $table (
        id INT NOT NULL AUTO_INCREMENT,
        PRIMARY KEY(id),
        firstname VARCHAR(255) NOT NULL,
        lastname VARCHAR(255) NOT NULL,
        email  VARCHAR(255) NOT NULL,
        phone  VARCHAR(255) NOT NULL,
        gender VARCHAR(255) NOT NULL,
        dateofbirth  DATE NOT NULL,
        message  VARCHAR(255) NOT NULL   
    )");
}
else {
    echo "<p>" . $table . "table exists</p>";
} // else


$resultcount = mysqli_num_rows($result);

if ($resultcount > 0) {
  
    mysqli_query($con ,"INSERT `$table` SET
                                `firstname` = '$firstname',
                                `lastname` = '$lastname',
                                `email` = '$email',
                                `phone` = '$tel',
                                `gender` = '$gender',
                                `dateofbirth` = '$dateOfBirth',
                                `message` = '$comments'                                
                             ")
     or die(mysqli_error($con ));

} else {

mysqli_query(
    $con ,
    "INSERT INTO `$table` ( 
       id, firstname ,lastname, email, phone, gender, dateofbirth, message  
    )
    VALUES (
       null, 
        '$firstname',
        '$lastname',
        '$email',
        '$tel',
        '$gender',
        '$dateOfBirth',
        '$comments'   
    ) 
    "
)
or die(mysqli_error($con));

}
