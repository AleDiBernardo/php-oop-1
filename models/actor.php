<?php 


class Actor{
    private string $name;
    private string $surname;
    private int $age;
    private int $heigth;
    private string $eye_color;
    private string $hair_color;
    private string $haircut_style;

    public function __construct(
        string $name,
        string $surname,
        string $age,
        string $heigth
        
    ) {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->heigth = $heigth;


    }

    public function getName(){
        return $this->name;
    }

    public function getSurname(){
        return $this->surname;
    }

    public function getAge(){
        return $this->age;
    }

    public function getHeigth(){
        return $this->heigth;
    }

    public function getEyeColor(){
        return $this->eye_color;
    }

    public function getHairColor(){
        return $this->hair_color;
    }

    public function getHaircut(){
        return $this->haircut_style;
    }

}