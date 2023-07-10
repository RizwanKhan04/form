<?php
class MyClass {
  public function __construct() 
  {
   echo 'MyClass class has initialized !'."\n";
  }
 }
 $usreclass=new Myclass();


//  2. Write a PHP Calculator class which will accept two values as arguments, then add them, subtract them, multiply them together, or divide them on request.
//  For example :
//  $mycalc = new MyCalculator( 12, 6);
//  echo $mycalc- > add(); // Displays 18
//  echo $mycalc- > multiply(); // Displays 72
class PHPcalculator{
    public $a;
    public $b;
    function __construct($a,$b)
    {
        $this->a =$a;
        $this->b =$b;
    }
   function add()
   {
    return $this-> a +$this-> b;
   }
   function subract(){
    return $this-> a -$this-> b;
   }
   function multiple()
   {
    return $this-> a *$this-> b; }
    function divide(){
      return  $this-> a /$this-> b;
    }
function module(){
  return  $this-> a %$this-> b;
}
}
$d =new PHPcalculator(2,4);
$z=$d->add();
echo $z."\n";
$d=new PHPcalculator(2,4);
$Z=$d->subract();
 echo $Z."\n";
$d=new PHPcalculator(2,4);
$z=$d->multiple();
 echo $z."\n";
$d=new PHPcalculator(2,4);
$z=$d->divide();
 echo $z."\n";
$d=new PHPcalculator(2,4);
$z=$d->module();
 echo $z."\n";
 ?>

