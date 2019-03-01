<?php
    session_set_cookie_params(3600);
    session_name("mysession");
    session_start();
    /* increment `views` variable */
    if(isset($_SESSION['views']))
        $_SESSION['views'] = $_SESSION['views']+1;
    else
        $_SESSION['views']=1;
    if( $_SESSION['views'] >= 10) {
        /* reset the session? */
        setcookie("TestSession", "", time() - 3600);
        setcookie("mysession", "", time() - 3600);
    };
?>

<html>
<head>
    <title>Session Monster</title>
</head>
<body>
    <h1>Handled by <?php print_r(gethostname()); ?></h1>
    <p>Sticky Session ID: <?php print_r($_COOKIE['TestSession']) ?></p>
    <p>PHP Session ID: <?php print_r($_COOKIE['mysession']) ?></p>
    <p>Page Views: <?php print_r($_SESSION['views']); ?></p>
</body>
</html>
