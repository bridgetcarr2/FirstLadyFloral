
<?php


//json data
$jsonData = '[
    {

            "flowerName" : "Rose",
            "scientificname" : "Rosa",
            "price" : 22.00
        
    } ,
    {

        "flowerName" : "petunia",
        "scientificname" : "petunia x hybrida",
        "price" : 10.00
    
} ,
{

    "flowerName" : "fly trap",
    "scientificname" : "Dionaea muscipula",
    "price" : 14.00

} ,
{

    "flowerName" : "orchid",
    "scientificname" : "orchidaceae",
    "price" : 20.00

} 
]';

//convert the JSON data to a PHP array
$flowerData = json_decode($jsonData, true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowers</title>
    <link rel="stylesheet" href="json.css">
</head>
<body>
    <h1> Most Popular Flowers</h1>
    <?php
    //create the table strucutre and the first row with headings
        echo "<table>
        <tr>
        <th>flowerName</th>
        <th>scientificname</th>
        <th>Price</th>
        </tr>";

        //Display the records using a loop
        foreach($flowerData as $flower){
            echo"<tr>";
            echo "<td>" . $flower['flowerName'] . "</td>";
            echo "<td>" . $flower['scientificname'] . "</td>";
            echo "<td>" . $flower['price'] . "</td>";
            echo"</tr>";

        }
echo "</table>";
       ?>
</body>
</html>