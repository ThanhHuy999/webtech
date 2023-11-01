<?php
$dbconn = pg_connect("dej1s4ruimc6fl");
//connect to a database named "mary"

$dbconn2 = pg_connect("host=localhost port=5432 dbname=dej1s4ruimc6fl");
// connect to a database named "mary" on "localhost" at port "5432"

$dbconn3 = pg_connect("host=sheep port=5432 dbname=dej1s4ruimc6fl user=qvojanguxiezvm password=852ea3faf0fd90131cfdae4e23e262bdfe1dbd52e09e3b6868ed4c85e618075b");
//connect to a database named "mary" on the host "sheep" with a username and password

$result = pg_query($dbconn3, "select * from bai_viet");
var_dump(pg_fetch_all($result));

?