<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LotteryMachine</title>
  </head>
  <body>

<form class="" action="index2.php" method="POST">
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


    $postnum = array($_POST["numb1"],
    $_POST["numb2"],
    $_POST["numb3"],
    $_POST["numb4"],
    $_POST["numb5"],
    $_POST["numb6"]);


     $randnum = [];
    $a = 1;

     while ($a <= 6) {
       $num = mt_rand(1,30);
       if (!in_array($num, $randnum)) {
         array_push ($randnum, $num);
         $a++;
       }
     }

     $count = 0;
     for ($i=0; $i <= count($randnum)-1 ; $i++) {
       if ($postnum[$i] == $randnum[$i]) {
          $count++;}
     }


     echo "Your numbers:" . " " . $postnum[0] . " " . $postnum[1] . " " . $postnum[2] . " " . $postnum[3] . " " . $postnum[4] . " " . $postnum[5] . "<br>";
     echo "Winning numbers:" . " " . $randnum[0] . " " . $randnum[1] . " " . $randnum[2] . " " . $randnum[3] . " " . $randnum[4] . " " . $randnum[5] . "<br>";

     if ($count == 0) {
       echo "No correct numbers this time.";
     }
     if ($count == 6) {
       echo "Congratulations, you got all 6 right! You won the Lottery!";
     }
     if ($count < 6 and $count > 0) {
       echo "You got " . $count . " correct!";
     }
}

  else {
    echo "You must enter all the six numbers!";
  }

}

    ?>

  </body>
</html>
