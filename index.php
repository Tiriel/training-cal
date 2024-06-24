<?php

require_once __DIR__.'/vendor/autoload.php';

use App\Auth\Exception\AuthException;
use App\User\Admin;
use App\User\Enum\AdminLevel;
use App\User\Member;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$m1 = new Member('User Ben', 'Ben', 'abcd1234', 37);
$m2 = new Member('User Tom', 'Tom', 'abcd1234', 37);
$a1 = new Admin('User Admin', 'Admin', 'admin1234', 35, AdminLevel::SuperAdmin);

//echo 'Member : '.Member::count()."\n"; // 2
//echo 'Admin : '.Admin::count()."\n"; // 1

//unset($m2);

//echo 'Member : '.Member::count()."\n"; // 1
//echo 'Admin : '.Admin::count()."\n"; // 1

try {
    $loader = new FilesystemLoader(['templates']);
    $twig = new Environment($loader);

    echo $twig->render('index.html.twig', [
        'login' => $m1->getName(),
        'auth' => $m1->auth('Ben', 'abcd1234'),
    ]);
} catch (AuthException $e) {
    echo $e->getMessage()."\n";
}

//echo $a1->auth('Ben', 'abcd1234')
//    ? "Authentified as {$a1->getName()}\n"
//    : "Wrong credentials\n";

//echo $m1."\n";
