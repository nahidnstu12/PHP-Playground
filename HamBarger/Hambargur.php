<?php

    class Hambarger{
        private $name;
        private $meat;
        private $price;
        private $breadRollType;

        private $add1Name;
        private $add1price;
        private $add2Name;
        private $add2price;
        private $add3Name;
        private $add3price;
        private $add4Name;
        private $add4price;
        private $add5Name;
        private $add5price;

        function __construct($name="",$meat="",$price="",$breadRollType="")
        {
            $this->name = $name;
            $this->meat = $meat;
            $this->price = $price;
            $this->breadRollType = $breadRollType;
        }
        function addHamburgerAdd1($name,$price){
            $this->add1Name = $name;
            $this->add1price = $price;
        }
        function addHamburgerAdd2($name,$price){
            $this->add2Name = $name;
            $this->add2price = $price;
        }
        function addHamburgerAdd3($name,$price){
            $this->add3Name = $name;
            $this->add3price = $price;
        }
        function addHamburgerAdd4($name,$price){
            $this->add4Name = $name;
            $this->add4price = $price;
        }
        function addHamburgerAdd5($name,$price){
            $this->add5Name = $name;
            $this->add5price = $price;
        }
        function itemizeHamburger(){
            $ham_price = $this->price;
            echo "$this->name hamburger on a $this->breadRollType roll with $this->meat, Price is $this->price".PHP_EOL;

            if($this->add1Name != null){
                $ham_price+= $this->add1price;
                echo "Added $this->add1Name for an extra $this->add1price".PHP_EOL;
            }
            if($this->add2Name != null){
                $ham_price+= $this->add2price;
                echo "Added $this->add2Name for an extra $this->add2price".PHP_EOL;
            }
            if($this->add3Name != null){
                $ham_price+= $this->add3price;
                echo "Added $this->add3Name for an extra $this->add3price".PHP_EOL;
            }
            if($this->add4Name != null){
                $ham_price += $this->add4price;
                echo "Added $this->add4Name for an extra $this->add4price".PHP_EOL;
            }
            if($this->add5Name != null){
                $ham_price += $this->add5price;
                echo "Added $this->add5Name for an extra $this->add5price".PHP_EOL;
            }
            echo "Net Price:$ham_price".PHP_EOL;
            return $ham_price;
        }

    }

?>