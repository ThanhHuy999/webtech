<?php
/**
 * @author vinasupport.com
 */
// connect to a database 
$dbConn = pg_connect("host=<ec2-44-213-228-107.compute-1.amazonaws.com> port=<5432> dbname=<duge63lregjm7> user=<tsfdnzfevzaigp> password=<98638e683f0711f3d801aeb83587b7ecbe33617836980f9eb641d38442598395>");
if (!$dbConn) {
    echo "An error occurred.\n";
    exit;
}
// Query data
$result = pg_query($dbConn, 'SELECT * FROM BAI_BAO;');
if (!$result) {
    echo "An error occurred.\n";
    exit;
}
// Show value
while ($row = pg_fetch_assoc($result)) {
    <h1>Xin chao Thanh Huy</h1>
    var_dump($row);
}

?>
