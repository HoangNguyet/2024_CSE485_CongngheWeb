<?php
$users = [
    [
        "username" => "Hoàng Ánh Nguyệt",
        "password" => password_hash("31012003", PASSWORD_DEFAULT),
        "name" => "Nguyệt",
        "email" => "nguyethoanghan@gmail.com",
        "role" => "admin"
    ],
    [
        "username" => "Nguyễn Thị Thanh Mai chó",
        "password" => password_hash("khongbiet", PASSWORD_DEFAULT),
        "name" => "Mai cho",
        "email" => "maingu@gmail.com",
        "role" => "user"
    ],
    [
        "username" => "Hoàng Minh Nghĩa",
        "password" => password_hash("14012016", PASSWORD_DEFAULT),
        "name" => "Nghĩa",
        "email" => "hoangminhnghia@gmail.com",
        "role" => "user"
    ],
    [
        "username" => "Hoàng Minh Hải",
        "password" => password_hash("22092007", PASSWORD_DEFAULT),
        "name" => "Hải",
        "email" => "hoangminhhai@gmail.com",
        "role" => "user"
    ],
];
$authorization_levels = [
    "user" => [
        "access_profile" => true,
        "edit_profile" => true,
        "access_admin_panel" => false
    ],
    "admin" => [
        "access_profile" => true,
        "edit_profile" => true,
        "access_admin_panel" => true,
        "manage_users" => true
    ]
];
?>