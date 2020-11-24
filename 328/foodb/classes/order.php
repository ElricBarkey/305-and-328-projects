<?php


class Order
{
    //declare instance variables
    private $_food;
    private $_meal;
    private $_condiments;

    /**
     * default constructor
     * @param $food
     * @param $meal
     * @param $condiments
     */
    public function __construct($food = "scrambled eggs",
                                $meal = "breakfast",
                                $condiments = array("salt", "mustard"))
    {
        /*
        //invoke instance variable/ like this. in java
        $this->_food = "scrambled eggs";
        $this->_meal = "breakfast";
        $this->_condiments = array("salt", "mustard");
        */

        $this->setFood($food);
        $this->setMeal($meal);
        $this->setCondiments($condiments);

    }

    /**
     * @return string
     */
    public function getMeal()
    {
        return $this->_meal;
    }

    /**
     * @param string $meal
     */
    public function setMeal($meal)
    {
        $this->_meal = $meal;
    }

    /**
     * @return array
     */
    public function getCondiments()
    {
        return $this->_condiments;
    }

    /**
     * @param array $condiments
     */
    public function setCondiments($condiments)
    {
        $this->_condiments = $condiments;
    }

    /** set the food
     * @param $food
     */
    public function setFood($food)
    {
        $this->_food = $food;
    }

    /** get the food
     * @return mixed
     */
    public function getFood()
    {
        return $this->_food;
    }

    /**
     * toString returns a string representation
     * of an order object
     * @return string
     */
    public function toString()
    {
        $out = $this->_food. ", ";
        $out .= $this->_meal. ", ";

        if (!empty($this->_condiments))
        {
            $out .= implode(" & ", $this->_condiments);
        }

        return $out;
    }
}

/*
$order = new Order("pizza", "lunch", array("red pepper", "candy"));
echo $order->toString();
echo "<br>";

$order = new Order();
echo $order->toString();


$order2 = new Order(array("taco sauce", "sour cream", "chicken"));
echo $order2->toString();
*/