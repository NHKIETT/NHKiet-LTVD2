<?php
function chuyenDoiInHoa($chuoi) {
    return strtoupper($chuoi);
}

// Ví dụ sử dụng
$chuoiBanDau = "hello, i'm kiet!";
$chuoiInHoa = chuyenDoiInHoa($chuoiBanDau);
echo $chuoiInHoa; // Kết quả: XIN CHÀO, LẬP TRÌNH PHP!
?>