<?php
include_once 'session.php';
//sprejmemo id destinacije, za katero
//nalagamo slike
$id = (int) $_POST['id'];
$title = $_POST['title'];

$target_dir = "slike/";
$date_name = date('YmdHisu'); //tvori datumČas do stotinke natančno
$target_file = $target_dir . $date_name. basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        //echo "File is not an image.";
        //$uploadOk = 0;
        //napaka, preusmerimo nazaj
        $_SESSION['error'] = 'Ne se zabavat. To ni slika.';
        header("Location: destination.php?id=$id");
        die();
    }
}
// Check if file already exists
/*if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}*/
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    //echo "Sorry, your file is too large.";
    //$uploadOk = 0;
    $_SESSION['error'] = 'Slika je prevelika.';
    header("Location: destination.php?id=$id");
    die();
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    //$uploadOk = 0;
    $_SESSION['error'] = 'Slika je nepravilne končnice.';
    header("Location: destination.php?id=$id");
    die();
}
//nalagamo sliko v mapo
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        //vse je ok, zapišimo v bazo
        include_once 'database.php';
        
        $query = sprintf("INSERT INTO pictures(url, title, destionation_id)
                  VALUES ('%s','%s',$id)",
                 mysqli_real_escape_string($link, $target_file),
                 mysqli_real_escape_string($link, $title));
        //echo $query; die();
        mysqli_query($link,$query);
        $_SESSION['success'] = 'Slika je uspešno naložena.';
        header("Location: destination.php?id=$id");
        die();
    } else {
        //echo "Sorry, there was an error uploading your file.";
        $_SESSION['error'] = 'Napaka.';
        header("Location: destination.php?id=$id");
        die();
    }

?>