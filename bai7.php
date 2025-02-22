<?php
function demSoTu($chuoi) {
    // Loại bỏ khoảng trắng thừa ở đầu và cuối chuỗi
    $chuoi = trim($chuoi);
    
    // Kiểm tra nếu chuỗi rỗng thì trả về 0
    if (empty($chuoi)) {
        return 0;
    }
    
    // Sử dụng hàm str_word_count để đếm số từ trong chuỗi
    return str_word_count($chuoi, 0);
}

// Ví dụ sử dụng
$chuoi = "Xin chào, đây là một ví dụ về đếm số từ.";
echo "Số từ trong chuỗi là: " . demSoTu($chuoi);
?>
