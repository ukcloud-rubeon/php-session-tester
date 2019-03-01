<?php
    session_set_cookie_params(3600);
    session_name("TestSession");
    session_start();
    /* increment `views` variable */
    if(isset($_SESSION['views']))
        $_SESSION['views'] = $_SESSION['views']+1;
    else
        $_SESSION['views']=1;
?>

<html>
<head>
    <title>Cookie Monster</title>
</head>
<body>
    <h1>Handled by <?php print_r(gethostname()); ?></h1>
    <p>Session ID: <?php print_r($_COOKIE['TestSession']) ?></p>
    <p>Page Views: <?php print_r($_SESSION['views']); ?></p>
</body>
</html>
