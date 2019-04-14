<?php
session_start();
if (isset($_SESSION['ua']) == true) {
    echo "Здоровенькi були Василий";
} else {
    echo "у вас нет доступа";
}
?>