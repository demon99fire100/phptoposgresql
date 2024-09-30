
<?php
$con = pg_connect("host=aws-0-sa-east-1.pooler.supabase.com dbname=postgres user=postgres.dxfwxgvceuuhdkezxnzp password=*******");

// Check if the connection was successful
if (!$con) {
    echo "An error occurred while connecting to the database.";}
?>
