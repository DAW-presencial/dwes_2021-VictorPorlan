<html>

<?php
if (isset($_POST["submit"])) {
    foreach ($_FILES as $docu) {
        if ($file['error']) {
            echo $docu['error'] . $docu['name'] . '<br>';
        } else if (!move_uploaded_file($docu['tmp_name'], 'subirArchivos/' . $docu['name'])) {
            echo "Error";
        } else {
            echo "Subido archivo " . $docu['name'] . "<br>";
        }
    }
}

?>

<body>
    <form method="post" enctype="multipart/form-data">
        <label for="documento1">Documento 1: </label>
        <input type="file" name="documento1"></input>
        <label for="documento2">Documento 2: </label>
        <input type="file" name="documento2"></input>
        <input type='submit' name="submit" />
    </form>
</body>

</html>