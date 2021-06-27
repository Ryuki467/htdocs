<?php
class c{
    private $total = 0;
    public function update($b){
        //$this->total = 0;
        foreach($b as $c){
            $this->total += $c;
        }
        $this->showTotal();
    }
    
    private function showTotal(){
        echo"合計金額:" . $this->total . "<br>";
    }
}

$b = [
    [1,2,3,4,5,6,7,8,9,10],
    [1,2,3,4,5,6,7,8,9,10],
    [1,2,3,4,5,6,7,8,9,10],
];

$c = new C();
foreach($b as $e){
    $c->update($e);
}