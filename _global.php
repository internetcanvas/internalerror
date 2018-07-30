
<?php include("../_auth.php"); ?>

<?php include("_library/_page.php"); ?>
<?php include("_library/_query.php"); ?>
<?php include("_library/_ga.php"); ?>
<?php include("_library/_date.php"); ?>

<?php

auth("internalerror");

$assets = "2018-07-29-05";

$backgrounds = array();
$pages = array();
$blurbs = array();
$links = array();

$result = query("SELECT * FROM backgrounds ORDER BY position");

while ($row = query_next($result)) {
  $backgrounds[$row->id] = $row->name;
}

$result = query("SELECT * FROM pages ORDER BY position");

while ($row = query_next($result)) {
  $pages[$row->page] = $row->title;
}

$result = query("SELECT * FROM blurbs ORDER BY id");

while ($row = query_next($result)) {
  $blurbs[$row->name] = $row;
}

$result = query("SELECT * FROM links ORDER BY position");

while ($row = query_next($result)) {
  $links[$row->id] = $row;
}

?>

<?php include("_library/_blurb.php"); ?>
