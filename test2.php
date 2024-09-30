
<?php 
$conn = pg_connect("host=aws-0-sa-east-1.pooler.supabase.com dbname=postgres user=postgres.dxfwxgvceuuhdkezxnzp password=*******");
if (!$conn) {
  echo "An error occurred.\n";
  exit;
}

$result = pg_query($conn, "SELECT id, start_time, end_time, license_plate FROM licenseplates");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}

while ($row = pg_fetch_assoc($result)) {
  echo $row['id'];
  echo $row['start_time'];
  echo $row['end_time'];
  echo $row['license_plate'];
 
}
?>
