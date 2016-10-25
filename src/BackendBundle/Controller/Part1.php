<?php
/**
 * Created by PhpStorm.
 * User: robe
 * Date: 25/10/16
 * Time: 17:07
 */

/**
 * A
 * Given the following array
 * $array = ['z' => 'abc', 'a' => 'def', 'g' => 'ghi'];
 * Write a function that receives the array as a parameter and returns the array in the
 * following order
 * [ [0 => 'def', 1 => 'ghi', 2 => 'abc'], [0 => 'abc', 1 => 'def', 2 => 'ghi'] ]
 */
function arrayTest($array, $mulpliple = false)
{
  /**
   * Case A
   */
  ksort($array);
  if (!$mulpliple) {
    return $array;
  }
  /**
   * Case B
   */
  $array = array_values($array);
  $multiple_array[] = $array;
  sort($array);
  $multiple_array[] = $array;
  return $multiple_array;
}

$array = ['z' => 'abc', 'a' => 'def', 'g' => 'ghi'];

var_dump(arrayTest($array, true));

/*
 * B
 * Is there anything wrong with the following expression. Please
 * explain your answer.
 * if(false === (bool) strpos($someString, $someValue)) { ...
 */

/* Yes, there is an error because strpos Find the numeric position of the first occurrence in the string and the position could be 0 and 0 parse as boolean is false.


/*
 * C
 * What are some advantages/disadvantages of the following class
 * definition
 */

class SomeClass
{
  protected $property;

  public function __construct()
  {
    $this->setProperty(new RandomObject);
  }

  public function getProperty()
  {
    return $this->property;
  }

  public function setProperty($property)
  {
    $this->property = $property;
  }
}

/*
 * Advantages
 *You can set the attribute  property as any object so base on that, the following class could has objects of any class type.

 * Disadvantages
 * I don't see the point on doing that, this could break the hole structure of an application
 * also the construct() of the class do not received the RamdomObject
 */

/*
 * D
 * What is wrong with the following code? Please explain.
 */

interface ParkstreetInterface
{
  public function run($a, $b);
}

trait ParkstreetTrait
{
  public function run($a)
  {
    return 1;
  }
}

class Aclass implements ParkstreetInterface
{
  use ParkstreetTrait;
}

/*
 * The interface used (ParkstreetInterface) has a function name run() this function required two parameters and in the trait the run function has only one $a
 */

/*
 * E
 * Based on your experience with the MVC/HMVC architectural pattern,
 * would you add another layer to the MVC/HMVC pattern? If so please
 * explain why, where it would go and what would be the exact
 * responsibility of such layer.
 */

/*
 * Till my knowledgeable its good the way it is.
 */