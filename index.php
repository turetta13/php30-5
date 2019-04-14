<?php
session_start();
?>
<?php
$users = [
    [
        'login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'
    ],
    [
        'login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'
    ],
    [
        'login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'
    ],
    [
        'login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'
    ],
    [
        'login' => 'Sasha', 'password' => 'Alea_est_jacta',
    ],
];
?>

    <html>
    <body>
    <form method="POST">
        <input type="text" name="login">
        <input type="password" name="password">
        <input type="submit" value="login" name="">
    </form>
    </body>
    </html>

<?php
function auto($_POST['login'],$_POST['password']) {
    if ($_POST['login'] == 'admin' && $_POST['password'] == '123') {
        return $_SESSION['ver'] = true;
    } else {
        if (isset($_POST['login']))
            return "неверный логин";
    }
}
?>
<?php
echo auto (admin, 123)
?>