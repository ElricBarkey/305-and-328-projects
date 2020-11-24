<?php
/**
 * CREATE TABLE food_order(
order_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
food VARCHAR(50),
meal VARCHAR(10),
condiments VARCHAR(100),
date_time DATETIME DEFAULT NOW()
)
 */

/**
 * INSERT INTO food_order(food, meal, condiments)
VALUES ('sandwich','breakfast', 'sriracha''mustard');
 */

require '/home/ebarkeyg/config.php';


class Database
{
    private $_dbh;

    function __construct()
    {
        //connect to database with PDO
        try{
            //instantiate a database object
            $this->_dbh = new PDO(DB_DSN,
                DB_USERNAME,
                DB_PASSWORD);

            //echo "<h1>connected!</h1>";
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }
    }

    function writeOrder($order)
    {
        var_dump($order);

        //convert condiments array to string
        $conds = implode(", ",$order->getCondiments());
        echo $conds;

    //write to database
    //define query
    $sql = "INSERT INTO food_order(food, meal, condiments)
    VALUES (:food,:meal, :condiments)";

    //prepare the statement
    $statement = $this->_dbh->prepare($sql);

    //bind the parameters
    $statement->bindParam(':food', $order->getFood());
    $statement->bindParam(':meal', $order->getMeal());
    $statement->bindParam(':condiments', $conds);

    //execute the statement
    $statement->execute();

    //process the results
    }

}