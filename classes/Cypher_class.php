<?php

class Cypher{

  private $key = [
    [-1,1,-1,1,1,-1,1,-1,1,-1,1,-1,-1,-1,1],
    [1,1,-1,-1,-1,-1,1,1,-1],
    [1,1,1,-1,1,1,-1,1,1,-1,1,-1,-1,1,1,-1,1,-1,1],
    [1,-1,1,-1,-1,-1,-1,-1,1,-1,1,-1,1,1,1,-1,-1,1,1,1,1,1,1,1,1,-1,1,-1,1,-1],
    [1,-1,1,1,1,1],
    [1,-1,-1,-1,1,-1,1,-1,1,-1],
    [-1,-1,-1,1,1,-1,1,1,-1,-1,-1,-1,1,1,1,-1,1,-1,1,1,1,-1,1,-1,-1,1,-1],
    [1,-1,1,-1,1,1,-1,1],
    [-1,1,-1,-1,1,-1,-1,1,-1,-1,1,1,-1,-1,-1,-1,-1,1]
  ];
  protected $text;
  protected $keyCode;
  
  public function __construct($text = ''){
    $this->text = $this->disassembleIntoComponents($text);
    $this->keyCode = $this->getKey();
  }
  
  private function disassembleIntoComponents($str) :array {
    $result = [];
    if (mb_strlen($str) != 0){
      for ($i = 0; $i < mb_strlen($str) ;$i++){
        $sim = mb_ord(mb_substr($str, $i,1), 'UTF-8');
        $result[] = $this->getCode($sim);
      }
    }
    return $result;
  }
  
  private function getKey() :array{
    for ($i = 0; $i < 4; $i++) $result[] = rand (1, count($this->key));
    $result[4] = (int) $result[0].$result[1].$result[2].$result[3];
    return $result;
  }
  
  public function printThis($name){
    print_r($this->$name);
  }
  
  public function cripto(){
    $result = mb_chr($this->keyCode[4]);
    $j = 1;
    $c = 0;
    for ($i = 0; $i < count($this->text); $i++){
      if($j > 3) $j = 1;
      if($c == count($this->key[$this->keyCode[0]-1])) $c = 0;
      $result .= mb_chr($this->getCode($this->text[$i]+$this->keyCode[$j]*$this->key[$this->keyCode[0]-1][$c]));
      $j++;
      $c++;
    }
    return $result;
  }
  
  public function deCripto($str){
    $array = $this->disassembleIntoComponents($str);
    $this->decomposeCode($array[0]);
    $result = '';
    $j = 1;
    $c = 0;
    for($i = 1; $i < count($array); $i++){
      if($j > 3) $j = 1;
      if($c == count($this->key[$this->keyCode[0]-1])) $c =0;
      $result .= mb_chr($this->getCode($array[$i]-$this->keyCode[$j]*$this->key[$this->keyCode[0]-1][$c]));
      $j++;
      $c++;
    }
    return $result;
  }
  
  private function decomposeCode(string $number){
    $this->keyCode = mb_str_split($number);
    $this->keyCode[4] = (int) $number;
  }
  
  private function getCode($number){
    while(mb_strlen($number) < 4) $number = '0'.$number;
    return $number;
  }


}
?>