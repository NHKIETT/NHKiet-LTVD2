<?php
function kiemTraChanLe($n) {
    return ($n % 2 == 0) ? "chẵn" : "lẻ";
}
echo "Số 7 là số " . kiemTraChanLe(7) . "."; // Kết quả: Số 7 là số lẻ.
?>