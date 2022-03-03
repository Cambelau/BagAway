<?php
include "con.php";
echo "hello bagaway";
$res = $conn->query("SELECT id FROM user ORDER BY id ASC");

for ($row_no = $res->num_rows - 1; $row_no >= 0; $row_no--) {
    $res->data_seek($row_no);
    $row = $res->fetch_assoc();
    echo " id = " . $row['id'] . "\n";
}

?>
