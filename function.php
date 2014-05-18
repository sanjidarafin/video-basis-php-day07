<?php
require_once 'functionDef.php';
function add($x, $y) {
    $res = $x + $y;
    return $res;
}

echo add(300, 500);
echo "<br/>";
echo add(700, 300);

?>
<html>
    <head>
        <title>Function Example</title>
    </head>
    <body>
        <form action="function.php" method="post">
            <input type="text" name="search_text">
            <input type="submit" name="sbtn" value="Search">
        </form>
<?php

if (isset($_POST['sbtn'])) {
    echo search($_POST['search_text']);
    echo "<br/>";
    echo generate_password();
}
?>
    </body>
</html>
