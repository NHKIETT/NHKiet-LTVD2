<?php
function demKyTuXuatHien($chuoi, $kyTu) {
    $dem = 0;
    
    // Duyệt từng ký tự trong chuỗi
    for ($i = 0; $i < strlen($chuoi); $i++) {
        if ($chuoi[$i] === $kyTu) {
            $dem++;
        }
    }
    
    return $dem;
}

// Ví dụ sử dụng
$chuoi = "nguyenhuukiet";
$kyTu = "u";
echo "Số lần xuất hiện của ký tự '$kyTu' trong chuỗi là: " . demKyTuXuatHien($chuoi, $kyTu);
?>
