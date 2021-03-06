<?php
/*
 * proto array array_splice(array input, int offset [, int length [, array replacement]])
 * Function is implemented in ext/standard/array.c
*/

echo "\n*** Testing error conditions of array_splice() ***\n";

$int=1;
$array=array(1,2);
try { var_dump (array_splice()); } catch (Exception $e) { echo "\n".'Warning: '.$e->getMessage().' in '.__FILE__.' on line '.__LINE__."\n"; }
try { var_dump (array_splice(&$int)); } catch (Exception $e) { echo "\n".'Warning: '.$e->getMessage().' in '.__FILE__.' on line '.__LINE__."\n"; }
try { var_dump (array_splice(&$array)); } catch (Exception $e) { echo "\n".'Warning: '.$e->getMessage().' in '.__FILE__.' on line '.__LINE__."\n"; }
var_dump (array_splice(&$int,$int));
$obj= new stdclass;
var_dump (array_splice(&$obj,0,1));
echo "Done\n";

?>
