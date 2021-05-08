<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $arr = $_POST['arr'];
    $ele = $_POST['index'];
//    $input = $_POST['input'];
    $newArr = explode(" ", $arr);
    function findX($arr,$ele) {
        for ($i = 0; $i < count($arr); $i++) {
            if ($ele == $arr[$i]) {
                $index = $i;
                $arr[$index] = $arr[$index + 1];
            }
        }
//        for ($j = $index; $j < count($arr) - 1; $j++) {
//            $arr[$index] = $arr[$index + 1];
//        }
        return $arr;
    }
    $input = findX($newArr,$ele);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete element</title>
  <style>
    input {
      width: auto;
      padding: 10px;

    }
  </style>
</head>
<body>
<form method="post">
  <input type="text" name="arr" placeholder="Nhap mang">
  <input type="text" name="index" placeholder="Xoa phan tu">
  <input type="submit" name="input" value="Delete">
    <p><?=implode(",",$input) ; ?>  </p>
</form>

</body>
</html>
