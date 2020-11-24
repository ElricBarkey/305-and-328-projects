<?php
//pdo pets.php
//require config file
require '/home/ebarkeyg/config.php';

//connect to database with PDO
try{
    //instantiate a database object
    $dbh = new PDO(DB_DSN,
              DB_USERNAME,
                DB_PASSWORD);

    echo "<h1>connected!</h1>";
}
catch (PDOException $e){
    echo $e->getMessage();
}

//define the query
$sql = "INSERT INTO pets(type, name, color)
        VALUES(:type, :name, :color)";

//prepare the statement
$statement = $dbh->prepare($sql);

//bind the parameters
$type = 'chicken';
$name = 'betty';
$color = 'red';
$statement->bindParam(':type', $type);
$statement->bindParam(':name', $name);
$statement->bindParam(':color', $color);


//execute the statement
$statement->execute();

//process the result (if there is one)




//define the query
$sql = "SELECT * FROM pets";

//prepare the statement
$statement = $dbh->prepare($sql);

//bind the parameters


//execute the statement
$statement->execute();

//execute the statement
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $row){
    echo "<p>" . $row['id']. " - " . $row['name'] . "</p>";
}