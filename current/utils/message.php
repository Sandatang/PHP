<?php

if(isset($_SESSION['message'])){
    echo "<h6>". $_SESSION['message'] ."</h6>";
    unset($_SESSION['message']);
}

?>