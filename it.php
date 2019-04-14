<?php
session_start();
if (isset($_SESSION['it']) == true) {
    echo "ciao Pedrolus";
} else {
    echo "у вас нет доступа";
}
?>