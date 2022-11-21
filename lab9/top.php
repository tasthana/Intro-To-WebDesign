
<?php
$phpSelf = htmlspecialchars($_SERVER['PHP_SELF']);
$pathParts = pathinfo($phpSelf);
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> Tennis </title>
        <meta name="author" content="Tushar Asthana">
        <meta name="description" content="The 4th largest followed sport in the world. Players from all over the world come to 
        compete in tournaments to make a name for themselves. Here we will break down rankings, icons, and my favorite player! ">
        <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
        <!-- Side note to myself, things come and go, take a breath. -->
        <meta name ="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" ype="text/css">
        <link rel="stylesheet" media= "(max-width: 800px)" href="css/custom-tablet.css?version=<?php print time(); ?>"type="text/css">
        <link rel="stylesheet" media=" (max-width: 600px)" href="css/custom-phone.css?version=<?php print time(); ?>" type="text/ass">
    </head>

    <?php
    print '<body class="grid-layout positioning" id=" ' . $pathParts['filename'] . '">';
    print '<!-- ##################      Start of Body Element    ################ -->';
    include 'connect-DB.php';
    include 'header.php';
    include 'nav.php'; 

?>


