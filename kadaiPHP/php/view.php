<?php
define( 'DB_HOST', 'localhost' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', '' );
define( 'DB_NAME', 'shop_db' );
{
  // データベースに接続
  $DB = mysql_connect( DB_HOST, DB_USER, DB_PASS );
  mysql_select_db( DB_NAME, $DB );
 
  // 表示するイメージのIDをパラメータから取得
  $id = isset( $_GET['id'] ) ? intval( $_GET['id'] ) : 0;
  $sql = sprintf( 'SELECT * FROM books WHERE id = %d', $id );
 
  // データの取得
  $result = mysql_query( $sql );
  $row = mysql_fetch_array( $result, MYSQL_ASSOC );
 
  // 画像を出力
  header( 'Content-Type: image/jpeg' );
  print $row['image'];
}
?>