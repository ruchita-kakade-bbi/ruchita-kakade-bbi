<?php
//Namespaces can be used to organize the classes into two different groups while also preventing the two classes Table and Table from being mixed up.
//Namespaces are declared at the beginning of a file using the namespace keyword:

namespace Html;
class Table {
  public $title = "";
  public $numRows = 0;
  public function message() {
    echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  }
}
$table = new Table();
$table->title = "My table";
$table->numRows = 5;
?>

<!DOCTYPE html>
<html>
<body>

<?php
$table->message();
?>

</body>
</html>
