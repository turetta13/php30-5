<?php
session_start();
if (isset($_SESSION['ru']) == true) {
    echo "Приветсвуем тебя Василий";
} else {
    echo "у вас нет доступа";
}
?>