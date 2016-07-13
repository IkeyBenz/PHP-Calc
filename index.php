<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calculator</title>
    <h1>Ikey's Calculator</h1>
  </head>
  <style media="screen">
    h1 {color: lightblue;  text-align: center;}
  </style>
  <body>
<!--CREATE FORM FOR USER INPUT-->
      <form method='post' action='calculator.php'>
            <input type='text' name='value1'>

            <select name='action'>
                <option> + </option>
                <option> - </option>
                <option> * </option>
                <option> / </option>
            </select>

            <input type='text' name='value2'>
            <input type='submit' name='submit' value='Calculate Now'>

      </form>

<!--RETRIEVE DATA FROM FORM AND PERFORM OPERATION-->
      <?php

        if (isset($_POST['submit'])) {

        $value1 = $_POST['value1'];
        $value2 = $_POST['value2'];
        $action = $_POST['action'];

          if ($action == "+") {
              echo "<b>Your Answer is:</b><br>";
              echo $value1 + $value2;
            } else if ($action == "-") {
              echo "<b>Your Answer is:</b><br>";
              echo $value1 - $value2;
            } else if ($action == "*") {
              echo "<b>Your Answer is:</b><br>";
              echo $value1 * $value2;
            } else if ($action == "/") {
              echo "<b>Your Answer is:</b><br>";
              echo $value1 / $value2;
            }
        }
       ?>
  </body>
</html>
