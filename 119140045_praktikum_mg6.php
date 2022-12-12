<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prak Pemweb Fahlevi 119140128</title>
</head>

<body>
  <form>
    <label>Masukkan number : </label> <br>
    <input name="number" type="text" placeholder="Masukkan number " />
    <button>Submit</button>
  </form>
  <?php

  $number = @$_GET['number'];

  $numerals = array(
    'M' => 1000,
    'CM' => 900,
    'D' => 500,
    'CD' => 400,
    'C' => 100,
    'XC' => 90,
    'L' => 50,
    'XL' => 40,
    'X' => 10,
    'IX' => 9,
    'V' => 5,
    'IV' => 4,
    'I' => 1
  );

  $result = '';

  foreach ($numerals as $roman => $int) {
    while ($number >= $int) {
      $result .= $roman;
      $number -= $int;
    }
  }

  echo $result; // returns "CXXIII"

  ?>
</body>

</html>