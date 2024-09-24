<?php
declare(strict_types=1);
include("B.php");
include("A.php");
include("C.php");
include("i.php");
  class Demo 
  {
    public function typeXReturna1(): A
     {
     echo __FUNCTION__ . "<br>";
       return new A();
    } 
     public function typeXReturna2(): A
     {
     echo __FUNCTION__ . "<br>";
       return new B();
    } 
    public function typeXReturna3(): A
    {
    echo __FUNCTION__ . "<br>";
      return new C();
   } 
   public function typeXReturna4(): A
   {
   echo __FUNCTION__ . "<br>";
     return new i();
   }
     public function typeXReturna5(): A
   {
   echo __FUNCTION__ . "<br>";
     return null();
  } 
  //B
  public function typeXReturnb1(): B
     {
     echo __FUNCTION__ . "<br>";
       return new B();
    } 
     public function typeXReturnb2(): B
     {
     echo __FUNCTION__ . "<br>";
       return new A();
    } 
    public function typeXReturnb3(): B
    {
    echo __FUNCTION__ . "<br>";
      return new C();
   } 
   public function typeXReturnb4(): A
   {
   echo __FUNCTION__ . "<br>";
     return new i();
  } 
  public function typeXReturnb5(): A
  {
  echo __FUNCTION__ . "<br>";
    return null();
 } 
  //c
  public function typeXReturnc1(): C
     {
     echo __FUNCTION__ . "<br>";
       return new C();
    } 
     public function typeXReturnc2(): C
     {
     echo __FUNCTION__ . "<br>";
       return new A();
    } 
    public function typeXReturnc3(): C
    {
    echo __FUNCTION__ . "<br>";
      return new B();
   } 
   public function typeXReturnc4(): A
   {
   echo __FUNCTION__ . "<br>";
     return new i();
  } 
  public function typeXReturnc5(): A
   {
   echo __FUNCTION__ . "<br>";
     return null();
  } 
   //I 
   public function typeXReturnI1(): i
     {
     echo __FUNCTION__ . "<br>";
       return new i();
    } 
     public function typeXReturni2(): i
     {
     echo __FUNCTION__ . "<br>";
       return new B();
    } 
    public function typeXReturni3(): A
    { 
    echo __FUNCTION__ . "<br>";
      return new C();
   } 
   public function typeXReturni4(): i
   {
   echo __FUNCTION__ . "<br>";
     return new A();
  } 
  public function typeXReturni5(): A
   {
   echo __FUNCTION__ . "<br>";
     return null();
  } 
  //null
  public function typeXReturn1(): null
  {
  echo __FUNCTION__ . "<br>";
    return new i();
 } 
  public function typeXReturn2(): null
  {
  echo __FUNCTION__ . "<br>";
    return new A();
 } 
 public function typeXReturn3(): null
 { 
 echo __FUNCTION__ . "<br>";
   return new B();
} 
public function typeXReturn4(): null
{
echo __FUNCTION__ . "<br>";
  return new i();
} 
public function typeXReturn5(): A
{
echo __FUNCTION__ . "<br>";
  return null();
  }
}
  $demo = new Demo();
$a = $demo->typeXReturna1();
 $a = $demo->typeXReturna2();
 $a = $demo->typeXReturna3();
 $a = $demo->typeXReturna4();
 $a = $demo->typeXReturna5();
 //b
 $b = $demo->typeXReturnb1();
 $b = $demo->typeXReturnb2();
 $b = $demo->typeXReturnb3();
 $b = $demo->typeXReturnb4();
 $b = $demo->typeXReturnb5();
 //c 
 $c = $demo->typeXReturnc1();
$c = $demo->typeXReturnc2();
$c = $demo->typeXReturnc3();
$c = $demo->typeXReturnc4();
$c = $demo->typeXReturnc5();
//i 
$i = $demo->typeXReturni1();
$i = $demo->typeXReturni2();
$i = $demo->typeXReturni3(); 
$i = $demo->typeXReturni4();
$i = $demo->typeXReturni5();
//ull
$n = $demo->typeXReturn1();
$n = $demo->typeXReturn2();     
$n = $demo->typeXReturn3(); 
$n = $demo->typeXReturn4();
$n = $demo->typeXReturn5();
