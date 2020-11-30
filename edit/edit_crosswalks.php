<?php
include(__DIR__ . '/../config/config.php');

// configuration
$url = $base_url."/edit/edit_crosswalks.php";
$file = '../config/crosswalks.php';

// check if form has been submitted
if (isset($_POST['text']))
{
    // save the text contents
    file_put_contents($file, $_POST['text']);

    // redirect to form again
    header(sprintf('Location: %s', $url.'?saved=1'));
    printf('<a href="%s">Moved</a>.', htmlspecialchars($url));
    exit();
}

// read the textfile
$text = file_get_contents($file);

?>
<!-- HTML form -->
<form action="" method="post">
<textarea name="text" rows="30" cols="90"><?php echo htmlspecialchars($text) ?></textarea>
<br>
<input type="submit" value="Soumettre"/> 
<?php if (isset($_GET['saved'])) echo "<span> OK</span>"; ?>
<br><br>
<input type="reset" value="Rafraîchir"/>
</form>
<a href="<?php echo $base_url ?>">Retour<a/>
