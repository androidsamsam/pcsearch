import mysql.connector
 
# データベースに接続
connection = connection = mysql.connector.connect(host='127.0.0.1',user='root',password='root',database='ssk')
  if omen == true:
    with connection.cursor() as cursor:
        # レコード読み込み
        sql = "SELECT `code`, `product`,`maker`,`price`,`campaign`FROM `maker` WHERE `maker` = %s "
        cursor.execute(sql, omen ))
 
    # コミットしてトランザクション実行
    connection.commit()
 
# 終了処理
cursor.close()
elif frontier == true
    with connection.cursor() as cursor:
        # レコード読み込み
        sql = "SELECT `code`, `product`,`maker`,`price`,`campaign`FROM `maker` WHERE `maker` = %s "
        cursor.execute(sql, frontier ))
 
    # コミットしてトランザクション実行
    connection.commit()
 
# 終了処理
cursor.close()
else:
        with connection.cursor() as cursor:
        # レコード読み込み
        sql = "SELECT `code`, `product`,`maker`,`price`,`campaign`FROM `maker` WHERE `maker` = %s "
        cursor.execute(sql, alien ))
 
    # コミットしてトランザクション実行
    connection.commit()
 
# 終了処理
cursor.close()