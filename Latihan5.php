<?php
$myFile = "guestbook.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
if (isset($_POST["nama"]) && isset($_POST["komentar"])) {
    $stringData = $_POST["nama"] . ";" . $_POST["komentar"] . ";";
    fwrite($fh, $stringData);
}
fclose($fh);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <form action="" method="post">
        Nama: <input type="text" name="nama" id="nama">
        Komentar: <input type="text" name="komentar" id="komentar">
        <input type="submit" value="Submit">
    </form>
</body>

</html>

<?php
$fr = fopen($myFile, 'r');
if (filesize($myFile) == 0) {
} else {
    $theData = fread($fr, filesize($myFile));
    fclose($fr);
    $data = explode(";", $theData);
    foreach ($data as $index => $value) {
        if (($index % 2) == 0) {
            if ($value != null) {
                echo "N: " . $value . "<br>";
            }
        } else if (($index % 2) != 0) {
            echo "K: " . $value . "<br>";
        }
    }
}
?>