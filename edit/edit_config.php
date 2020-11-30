<?php
include(__DIR__ . '/../config/config.php');

// configuration
$url = 'http://localhost/WMS-Labeling-master/edit/edit_config.php';
$file = '../config/config.php';

// check if form has been submitted
if (isset($_POST['text']))
{
    // save the text contents
    file_put_contents($file, $_POST['text']);

    // redirect to form again
    header(sprintf('Location: %s', $url));
    printf('<a href="%s">Moved</a>.', htmlspecialchars($url));
    exit();
}

// read the textfile
$text = file_get_contents($file);

?>
<!-- HTML form -->
<html>
<head>
</head>
<body>
<form action="" method="post">
<textarea name="text" rows="30" cols="90"><?php echo htmlspecialchars($text) ?></textarea>
<br>
<input type="submit" value="Soumettre"/>
<br><br>
<input type="reset" value="Rafraîchir"/>
</form>
<a href="<?php echo $base_url ?>">Retour<a/>