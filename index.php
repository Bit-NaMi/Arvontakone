<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LotteryMachine</title>
  </head>
  <body>

<form class="" action="index.php" method="POST">
  <h1>LotteryMachine 2.0.1</h1></br>
  <p>Choose your numbers:</p>

  </select>

  <select name="numb1">
    <?php for ($i = 1; $i <= 30; $i++) : ?>
        <option value="" selected disabled hidden>xx</option>
        <option value= "<?php echo $i; ?>"><?php echo $i; ?></option>
    <?php endfor; ?>
  </select>
  <select name="numb2">
    <?php for ($i = 1; $i <= 30; $i++) : ?>
        <option value="" selected disabled hidden>xx</option>
        <option value= "<?php echo $i; ?>"><?php echo $i; ?></option>
    <?php endfor; ?>
  </select>
  <select name="numb3">
    <?php for ($i = 1; $i <= 30; $i++) : ?>
        <option value="" selected disabled hidden>xx</option>
        <option value= "<?php echo $i; ?>"><?php echo $i; ?></option>
    <?php endfor; ?>
  </select>
  <select name="numb4">
    <?php for ($i = 1; $i <= 30; $i++) : ?>
        <option value="" selected disabled hidden>xx</option>
        <option value= "<?php echo $i; ?>"><?php echo $i; ?></option>
    <?php endfor; ?>
  </select>
  <select name="numb5">
    <?php for ($i = 1; $i <= 30; $i++) : ?>
        <option value="" selected disabled hidden>xx</option>
        <option value= "<?php echo $i; ?>"><?php echo $i; ?></option>
    <?php endfor; ?>
  </select>
  <select name="numb6">
    <?php for ($i = 1; $i <= 30; $i++) : ?>
        <option value="" selected disabled hidden>xx</option>
        <option value= "<?php echo $i; ?>"><?php echo $i; ?></option>
    <?php endfor; ?>
  </select>

  <input type="submit" name="submit" value="submit">


</form>

<?php

if (isset($_POST["submit"])) {

  if (!empty($_POST["numb1"]) and !empty($_POST["numb2"]) and !empty($_POST["numb3"])and !empty($_POST["numb4"])and !empty($_POST["numb5"])and !empty($_POST["numb6"])) {

    echo $rand1 . $rand2 . $rand3 . $rand4 . $rand5 . $rand6;

    $postnum = array($_POST["numb1"],
    $_POST["numb2"],
    $_POST["numb3"],
    $_POST["numb4"],
    $_POST["numb5"],
    $_POST["numb6"]);


    $randnum = array(rand(1,30),
    rand(1,30),
    rand(1,30),
    rand(1,30),
    rand(1,30),
    rand(1,30),

  );


    echo $postnum[0] . $postnum[1] . $postnum[2] . $postnum[3] . $postnum[4] . $postnum[5] . "<br>";
    echo $randnum[0] . $randnum[1] . $randnum[2] . $randnum[3] . $randnum[4] . $randnum[5] . "<br>";

}
  else {
    echo "You must enter all the six numbers!";// code...
  }
  // code...

}


    ?>

  </body>
</html>
