<?
2
$link
=mysql_connect(
"localhost"
,
"usuario"
,
"clave"
);
3
mysql_select_db(
"nombrebd"
,
$link
) OR DIE (
"Error: No es posible establecer la conexión"
);
4
?>
