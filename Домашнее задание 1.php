<?php

  function kvadrat($x)
  {
      return $x * $x;
  }

  function summaAB($a, $b)
  {
      return $a + $b;
  }

  function KotorayaOtnimaet($a, $b, $c)
  {
      return ($a - $b) / $c;
  }

  function WeekList($day)
  {
      $week = [1 => 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
      if ($day >= 1 and $day <= 7) {
          return $week[$day];
      } else {
          return 'False';
      }
  }

?>
