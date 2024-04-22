<?php 

declare (strict_types= 1);

namespace App;

class People 
{
    public string $year;
    public string $gender;

    public function __construct(
        string $year = null, 
        string $gender = null,
    ){
        if(isset($year)){
            $this->year = $year;
        }
        if(isset($gender)){
            $this->gender = $gender;
        }
    }

    public function getYear(): string
    {
        return $this->year;
    }

    public function getGender(): string
    {
        return $this->gender;
    }
}