<?php
/*class ParentType {};
class ChildType extends ParentType{};
class A {
    public function contravariantAgruments(ChildType $type){}
}
class B extends A{
    public function contravariantAgruments(ParentType $type){}
}
*/

class Food{}
class AnimalFood extends Food{}
abstract class Animal{
    protected string $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function eat(AnimalFood $food){
        echo $this->name. " eats ". get_class($food);
    }
}
class Dog extends Animal{
    public function eat(Food $food)
    {
        echo $this->name . " eats " . get_class($food); // TODO: Change the autogenerated stub
    }
}
class Cat extends Animal{
    public function eat(AnimalFood $food)
    {
       echo $this->name. " cats " . get_class($food);  // TODO: Change the autogenerated stub
    }
}
interface AnimalShelter{
    public function adopt(string $name):Animal;
}
class CatShelter implements AnimalShelter{
    public function adopt(string $name): Cat
    {
        return new Cat($name);// TODO: Implement adopt() method.
    }
}
class DogShelter implements AnimalShelter{
    public function adopt(string $name): Dog
    {
        return new Dog($name);// TODO: Implement adopt() method.
    }
}
$kitty = (new CatShelter)->adopt('hello');
$eatFood = new AnimalFood;
$kitty->eat($eatFood);
echo "\n";