<?php

// require connection to db
require "storescripts/connect-to-mysql.php";

// What does this php block do: Deletes items when Mass Delete button is clicked

if (isset($_POST["please_delete"])) {
  if (isset($_POST['delete'])) {
    $in_str = "'" . implode('\', \'', $_POST['delete']) . "'";
    $delete = $con->query("DELETE FROM products WHERE sku IN (" . $in_str . ")");
    var_dump($delete);
    die();
    header("Location: index.php");
  }
}
