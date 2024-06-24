<?php

require_once __DIR__.'/Member.php';
require_once __DIR__.'/AdminLevel.php';
require_once __DIR__.'/Admin.php';

$m1 = new Member('Ben', 'abcd1234', 37);
$m2 = new Member('Tom', 'abcd1234', 37);
$a1 = new Admin('Admin', 'admin1234', 35, AdminLevel::SuperAdmin);

echo 'Member : '.Member::count()."\n"; // 2
echo 'Admin : '.Admin::count()."\n"; // 1

unset($m2);

echo 'Member : '.Member::count()."\n"; // 1
echo 'Admin : '.Admin::count()."\n"; // 1

echo $m1->auth('Ben', 'abcd1234')
    ? "Authentified\n"
    : "Wrong credentials\n";

echo $a1->auth('Ben', 'abcd1234')
    ? "Authentified\n"
    : "Wrong credentials\n";
