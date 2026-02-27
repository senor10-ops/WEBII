<?php
setcookie("lagrandee", "webii", time() + 86400);
// print_r($_COOKIE);

if(isset($_COOKIE["lagrandee"])){
    echo "cookie is ". $_COOKIE["lagrandee"];

}
else{
    echo "cookies not set";

}
?>
