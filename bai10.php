<?php
function tachChuoi($chuoi, $kyTuPhanCach) {
    // Sử dụng hàm explode để tách chuỗi thành mảng
    return explode($kyTuPhanCach, $chuoi);
}

// Ví dụ sử dụng
$chuoi = "nguyen,huu,kiet";
$kyTuPhanCach = ",";
$mangKetQua = tachChuoi($chuoi, $kyTuPhanCach);

// In kết quả
print_r($mangKetQua);
?>