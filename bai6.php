<?php
function kiemTraNamNhuan($nam) {
    // Năm nhuận là năm chia hết cho 400 hoặc chia hết cho 4 nhưng không chia hết cho 100
    if (($nam % 400 == 0) || ($nam % 4 == 0 && $nam % 100 != 0)) {
        return true;
    } else {
        return false;
    }
}

// Gọi thử hàm
$nam = 2025;
if (kiemTraNamNhuan($nam)) {
    echo "$nam là năm nhuận.";
} else {
    echo "$nam không phải là năm nhuận.";
}
?>
