
<nav>
    <a class= "<?php
    if ($pathParts['filename'] == "index"){
        print 'activePage';
}
    ?>" href="index.php">Home</a>

    <a class= "<?php
    if ($pathParts['filename'] == "detail"){
        print 'activePage';
}
    ?>" href="detail.php">Wimbledon</a>

    <a class= "<?php
    if ($pathParts['filename'] == "form"){
        print 'activePage';
}
    ?>" href="form.php">Form</a>

</nav>