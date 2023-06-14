<?php
/* ----------- Arrrays ----------- */

/*
Arrays are a collection of items/data of the same datatype stored at contegious memory location.
  Arrays hold multiple values. Each value in an array is called an "element"
*/
//Examples of an array
//Types of arrays
  //Index Arrays
    //Simple Array of numbers
    $numbers=[1,2,3,4,5,6,7,8,9];
    //Simple arrays of strings
      $colors=["yellow","white","red","green","blue","purple"];
      $colorss="colorless";
    //echo $colorss;
   //echo $colors[4]

    //var_dump($colors);
    //print_r($numbers);
  //Associative Arrays-allow us to use named keys to identify values

      $rangi=[
        'red' => '#f00',
        'green' => '#0f0',
        'blue' => '00f'
      ];
      //echo $rangi['red'];
      //var_dump($rangi);

      //Multi-dimensional Arrays-often used to store data in table form

      $people =[
        $person1=[
          'firstname' => 'Jackie',
          'lastname' => 'Njoki',
          'email' => 'jacquelinegatheca@gmail.com'
        ],
        $person2 =[
          'firstname' => 'Abigael',
          'lastname' => 'Waithira',
          'email' => 'abigaelwaithira@gmail.com'
        ]
        ];
        //var_dump($people);
        //echo $people[1]['email'];


        //assignment
        $countcap=array(
            "Itally"=>"Rome",
            "Luxembourg"=>"Luxembourg",
            "Belgium"=>"Brussels",
            "Denmark"=>"Copenhagen",
            "Finland"=>"Helsiki",
            "France"=>"Paris",
            "Slovakia"=>"Bratislava",
            "Solvenia"=>"Ljubljana",
            "Germany"=>"Berline",
            "Greece"=>"Anthens",
            "Ireland"=>"Dublin",
            "Netherlands"=>"Amsterdam",
            "Portugal"=>"Lisbon",
            "Spain"=>"Madrid",
            "Sweden"=>"Stockholm",
            "United Kingdom"=>"London",
            "Cyprus"=>"Nicosia",
            "Lithuania"=>"Vilnius",
            "Czech Repulic"=>"Prague",
            "Estonia"=>"Tallin",
            "Hungary"=>"Budapest",
            "Latvia"=>"Riga",
            "Malta"=>"Valetta",
            "Austria"=>"Vienna",
            "Poland"=>"Warsaw"
        );
        asort($countcap);
        foreach($countcap as $country =>$capital){
          echo "$country = $capital <br>";
        };