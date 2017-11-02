<?php

$file = "./file.txt";

if (isset($_GET['file'])) {
    $file = $_GET['file'];
}

if (isset($_POST['text'])) {
    file_put_contents($file, $_POST['text']);

    header('Location: '.$_SERVER['REQUEST_URI']);

    exit();
}

$text = file_get_contents($file);
?>

<form action="" method="post">
    <textarea name="text"><?php echo htmlspecialchars($text) ?></textarea>
    <input type="submit"/>
    <input type="reset"/>
</form>
