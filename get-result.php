<?php
$pageTitle= "Get Result";
Include "view-header.php";
?>
    <h1>Get Result</h1>
<?php
echo getDisplay() {
Include "view-footer.php";

function getDisplay() {
    if (isset($_GET['my-name'])) {
  return "<p>The value sent is:</p>" . $_GET['my-name'];
} else {
  return "<p>Nothing sent to the page.</p>";
}
}
?>
