<?php
//データベース接続
require_once'/Applications/MAMP/htdocs/Dbssk.php';
require_once'/Applications/MAMP/htdocs/Encode.php';

//「検索」ボタン押下時
if (isset($_POST["search"])) {

//「名前」だけ入力されている場合
if (isset($_POST["search_fname"]) && empty($_POST["search_fsanchi"])){
$search_fname = $_POST["search_fname"];
$search_fsanchi = '';
}

//「産地」だけ入力されている場合
if (empty($_POST["search_fname"]) && isset($_POST["search_fsanchi"])){
$search_fname = '';
$search_fsanchi = $_POST["search_fsanchi"];
}

//「名前」「産地」両方が入力されている場合
if (isset($_POST["search_fname"]) && isset($_POST["search_fsanchi"])){
$search_fname = $_POST["search_fname"];
$search_fsanchi = $_POST["search_fsanchi"];
}

//実行
$sql="SELECT * FROM maker WHERE pcmaker like '%{$search_fname}%' and f_sanchi like '%{$search_fsanchi}%'";
$rec = $dbh->prepare($sql);
$rec->execute();
$rec_list = $rec->fetchAll(PDO::FETCH_ASSOC);

}else{

//「検索」ボタン押下してないとき
$sql='SELECT * FROM maker WHERE 1';
$rec = $dbh->prepare($sql);
$rec->execute();
$rec_list = $rec->fetchAll(PDO::FETCH_ASSOC);
}

//データベース切断
$dbh=null;
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>

<!--検索-->
<form action="/Applications/MAMP/htdocs/Dbssk.php" method="POST">
<table border="1" style="border-collapse: collapse">
<tr>
<th>名前</th>
<td><input type="text" name="search_fname" value="<?php if( !empty($_POST['search_fname']) ){ echo $_POST['search_fname']; } ?>"></td></td>
<th>産地</th>
<td><input type="text" name="search_fsanchi" value="<?php if( !empty($_POST['search_fsanchi']) ){ echo $_POST['search_fsanchi']; } ?>"></td>
<td><input type="submit" name="search" value="検索"></td>
</tr>
</table>
</form>
<br />

<!--検索解除-->
<?php if (isset($_POST["search"])) {?>
<a href="/Applications/MAMP/htdocs/tets3.php">検索を解除</a><br />
<?php } ?>

<table border="1" style="border-collapse: collapse">
<tr>
<th>ID</th>
<th>名前</th>
<th>値段</th>
<th>産地</th>
</tr>

<!--MySQLデータを表示-->
<?php foreach ($rec_list as $rec) { ?>
<tr>
<td><?php echo $rec['pcmaker'];?></td>
<td><?php echo $rec['f_product'];?></td>
<td><?php echo $rec['f_price'];?></td>
<td><?php echo $rec['campaign'];?></td>
</tr>
<?php } ?>
</table>

</body>
</html>