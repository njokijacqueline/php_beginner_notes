<?php
class Game{

    const BR = '<br />';

    var $name;
    var $price;
    var $photo;
    var $dir='pics/';

    public function print_game(){
        //echo $this->name.self::BR;
       // echo $this->price.self::BR;
       // echo $this->photo.self::BR;

       echo "<div style= 'float: left: margin-right: 40px;'>";
       echo "<font size= '5px'>{$this->name}</font>".self::BR;
       echo "<img src='{$this->dir}{$this->photo}'>".self::BR;
       echo '$'.$this->price;
       echo "</div>";
      

    }

    public function set_game($name, $price, $photo){
        $this->name = $name;
        $this->price = $price;
        $this->photo = $photo;
    }
}

$game1= new Game;
$game1->name="fifa";
$game1->price=20000;
$game1->photo='fifa.jpg';

$game1->print_game();

$game2= new Game;
$game2->name="assasins";
$game2->price=30000;
$game2->photo='assasins.jpg';

$game2->print_game();

$game3= new Game;
$game3->name="ghost";
$game3->price=10000;
$game3->photo='ghost.jpg';

$game3->print_game();

$game4= new Game;
$game4->name="nba";
$game4->price=50000;
$game4->photo='nba.jpg';

$game4->print_game();

$game5= new Game;
$game5->set_game("gta",20000, "gta.jpg");
$game5->print_game();

$game6= new Game;
$game6->set_game("cars",40000,"cars.jpg");
$game6->print_game();