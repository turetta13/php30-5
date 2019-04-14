<?php
session_start();
if (isset($_SESSION['ver']) == true) {
    echo "ОК";
} else {
    echo "у вас нет доступа";
}
?>