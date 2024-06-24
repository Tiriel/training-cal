<?php

require_once __DIR__.'/ToStringTrait.php';
require_once __DIR__.'/AuthInterface.php';
require_once __DIR__ . '/AbstractUser.php';
require_once __DIR__.'/Member.php';
require_once __DIR__.'/AdminLevel.php';
require_once __DIR__.'/Admin.php';

$m1 = new Member('User Ben', 'Ben', 'abcd1234', 37);
$m2 = new Member('User Tom', 'Tom', 'abcd1234', 37);
$a1 = new Admin('User Admin', 'Admin', 'admin1234', 35, AdminLevel::SuperAdmin);

echo 'Member : '.Member::count()."\n"; // 2
echo 'Admin : '.Admin::count()."\n"; // 1

unset($m2);

echo 'Member : '.Member::count()."\n"; // 1
echo 'Admin : '.Admin::count()."\n"; // 1

echo $m1->auth('Ben', 'abcd1234')
    ? "Authentified as {$m1->getName()}\n"
    : "Wrong credentials\n";

echo $a1->auth('Ben', 'abcd1234')
    ? "Authentified as {$a1->getName()}\n"
    : "Wrong credentials\n";

echo $m1."\n";
