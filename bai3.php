<?php
function daoNguocChuoi($chuoi) {
    return strrev($chuoi);
}

// Gọi thử hàm và in thông báo
$chuoiGoc = "Hello";
$chuoiDaoNguoc = daoNguocChuoi($chuoiGoc);

echo "Chuỗi ban đầu: " . $chuoiGoc . "\n";
echo "Chuỗi đảo ngược: " . $chuoiDaoNguoc . "\n";
?>
