<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8" />
<title>junjunフォーム</title>
</head>
<body>
<form method="POST" action="insert_process2.php">
<!--specテーブル-->
<div>
    <label for="code">code:</label><br />
        <input id="code" type="text" name="code" size="35" maxlength="150" />
</div>
<div>
    <label for="cpu">CPU:</label><br />
        <input id="cpu" type="text" name="cpu" size="35" maxlength="150" />
</div>
<div>
    <label for="gpu">GPU:</label><br />
        <input id="gpu" type="text" name="gpu" size="35" maxlength="150" />
</div>
<div>
    <label for="memory">メモリ:</label><br />
        <input id="memory" type="text" name="memory" size="25" maxlength="25" />GB
</div>
<div>
    <label for="os">OS:</label><br />
        <input id="os" type="text" name="os" size="35" maxlength="150" />
</div>
<div>
<input type="submit" value="登録" />
</div>
</form>
</body>

</html>