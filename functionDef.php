<?php
function search($search_text) {
    $data = array("php", "css", "html", "javascript", "ajax");
    if (in_array($search_text, $data)) {
        return "Found";
    } else {
        return "Not Found";
    }
}
function generate_password()
{
    $alpha=array('@','D','a','V','%','#','g','c','S','H','&','L','J','W','r','q','v','T','Z','z');
    $password='';
    for($i=1;$i<=8;$i++)
    {
        $val=rand(0,19);
        $password .=$alpha[$val];
    }
    return $password;
}
?>
