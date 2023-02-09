<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8" />
<title>junjunフォーム</title>
</head>
<body>
<form method="POST" action="insert_process.php">
    <!--makerテーブル-->
<div>
    <label for="code">コード:</label><br />
        <input id="code" type="text" name="code" size="25" maxlength="20" />
</div>
<div>
    <label for="product">商品名:</label><br />
        <input id="product" type="text" name="product" size="35" maxlength="150" />
</div>
<div>
    <label for="maker">メーカー:</label><br />
        <input id="maker" type="text" name="maker" size="25" maxlength="30" />
</div>
<div>
    <label for="price">価格:</label><br />
        <input id="price" type="text" name="price" size="25" maxlength="25" />円
</div>
<div>
    <label for="campaign">キャンペーン:</label><br />
        <input id="campaign" type="text" name="campaign" size="3" maxlength="3" />
</div>
<div>
<input type="submit" value="登録" />
</div>
</form>
</body>

</html>