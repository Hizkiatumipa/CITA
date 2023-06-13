<?php
$koneksi = mysqli_connect("localhost", "id20906969_createyourcita1", "@Createyourcita1", "id20906969_db_upload");

if (isset($_POST['proses'])) {
    $direltori = "berkas/";
    $file_name = $_FILES['NamaFile']['name'];
    $file_exists = mysqli_query($koneksi, "SELECT file FROM files WHERE file='$file_name'");
    
    if (mysqli_num_rows($file_exists) > 0) {
        echo "<b>File sudah diupload sebelumnya. Silakan upload file lain.";
    } else {
        move_uploaded_file($_FILES['NamaFile']['tmp_name'], $direltori . $file_name);
        mysqli_query($koneksi, "INSERT INTO files SET file='$file_name'");
        echo "<b>File berhasil diupload.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPLOAD</title>
    <link rel="stylesheet" href="upload.css">
</head>
<body>

    <h3>Upload Dokumen</h3>
<form action="" method="POST" enctype="multipart/form-data">
<b>File Upload</b> <input type="file" name="NamaFile">
<input type="submit" name="proses" value="Upload">
<img src="../img/img-login.png">
<h1>Plan your work, work your plan!</h1>
<a href="../html/profile.html">Back To profile</a>
</form>

</body>
</html>