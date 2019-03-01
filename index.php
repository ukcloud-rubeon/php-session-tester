<?php
    session_set_cookie_params(3600);
    session_name("TestSession");
    session_start();
?>

<html>
<head>
    <title>Cookie Monster</title>
</head>
<body>
    <h1>Handled by <? print_r(gethostname()); ?></h1>
    <pre><? print_r($_COOKIE); ?></pre>
</body>
</html>
