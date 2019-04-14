<?php
session_start();
if (isset($_SESSION['en']) == true) {
    echo "Hello mr. Afanasiy";
} else {
    echo "у вас нет доступа";
}
?>