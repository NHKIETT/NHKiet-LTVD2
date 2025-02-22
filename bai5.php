<?php
function kiemTraSoNguyenTo($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
$so = 17;
if (kiemTraSoNguyenTo($so)) {
    echo "$so là số nguyên tố.\n";
} else {
    echo "$so không phải là số nguyên tố.\n";
}
?>