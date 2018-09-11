<!DOCTYPE html>
<html lang="ja">

<body>

<?php
if(isset($_POST['namae'],$_POST['email'])){
$fp = fopen("answer.txt","w");
$write_str = $_POST['namae']."\t".$_POST['email'];
fwrite($fp,$write_str);
fclose($fp);
}
?>

</body>

</html>
