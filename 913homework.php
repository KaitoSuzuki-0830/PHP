<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
class MyCalculator {
private $_fval, $_sval;
public function __construct( $fval, $sval ) {
$this->_fval = $fval;
$this->_sval = $sval;
}
public function add() {
return $this->_fval + $this->_sval;
}
public function subtract() {
return $this->_fval - $this->_sval;
}
public function multiply() {
return $this->_fval * $this->_sval;
}
public function divide() {
return $this->_fval / $this->_sval;
}
}
$mycalc = new MyCalculator(12, 6); 


echo $mycalc-> add(); 
echo "<br>";
echo $mycalc-> multiply(); 
echo "<br>";
echo $mycalc-> subtract(); 
echo "<br>";
echo $mycalc-> divide(); 
echo "<br>";
?>
<h2>三項演算式　ternary operator</h2>

<?php
//三項演算式//
$var = 200;
$str = ($var % 5 === 0) ?"5の倍数である":"5の倍数では無い";
echo $var."は".$str;
echo "<br>";

$var = 500;
$str =($var % 9 ===0)  ?"9の倍数である":"9の倍数では無い";
echo $var."は".$str;
?>




</body>
</html>