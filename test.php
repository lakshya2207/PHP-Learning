// <?php
// echo "Name is: " . $_GET['fname'];
// echo "Name is: " . $_POST['fname'];
// echo '<br>';
// echo "password is: " . $_POST['password'];
// echo '<br>';
// echo "Email is: " . $_POST['email'];
// print_r($_FILES);
// print_r($_REQUEST);
// echo "userfile" . $_POST['userfile'];

$uploaddir = __DIR__ . '/uploads/';

$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}

echo 'Here is some more debugging info:';
print_r($_FILES);
print_r($_FILES['userfile']);

print "</pre>";


?>