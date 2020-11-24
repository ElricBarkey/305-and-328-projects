<?php
/**
 * Class Validate
 * @author elric
 * @version 1.0
 */
class Validate
{

    /*
     * return a value if food parameter is valid
     * valid foods are not empty and do not contain anything except letters
     * @param string food
     * return boolean
     */

    function validFood($food)
    {
        $food = str_replace(' ', '', $food);
        return !empty($food) && ctype_alpha($food);
    }

    /*
    echo validFood("French fries") ? "yes<br>" : "no<br>";
    echo validFood("pizza") ? "yes<br>" : "no<br>";
    echo validFood("7-layer dip") ? "yes<br>" : "no<br>";
    echo validFood("") ? "yes<br>" : "no<br>";
    */


    /*
     * return a value if meal parameter is valid
     * valid meals are not empty and do not contain anything except letters
     * @param string meal
     * return boolean
     */

    function validMeal($meal)
    {
        $meals = getMeals();
        return in_array($meal, $meals);
    }
}