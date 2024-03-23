<?php
if(isset($_GET["file"])){
  header("Content-Disposition: attachment; filename = " . basename($_GET["file"]));
  readfile($_GET["file"]);
  exit();
}
