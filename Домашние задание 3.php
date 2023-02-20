<?php
$str = '012345'; 
preg_match_all('#.#su', $str, $res, PREG_SET_ORDER);
echo count($res);
?>
