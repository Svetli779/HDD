<?php
    include 'all.php';
    $id_list =  implode(',', $_SESSION['basket']);
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        $sql = "SELECT 
	InStock,
	Name,
	picture,
	Price,
	Product_id
FROM
	accessories_shop.product WHERE 1 ";
		   
	$result = mysqli_query($connection, $sql);
echo"<a href='system.php'>КОЛИЧКА</a>";
    //tuk trqbwa da pokaje wsi4ki producti ot bazata danni	

	
	if (mysqli_affected_rows($connection) > 0) 
            {
                    echo"<div>";
                    echo"<table border='1'>";
                    echo"<tr>";
                    echo"<td>Name:</td>";
                    echo"<td>Picture:</td>";
                    echo"<td>Price:</td>";
                    echo"<td>InStock</td>";
                    echo"<td>Buy:</td>";
                    echo"</tr>";
		while ($row = mysqli_fetch_assoc($result)) 
                {
                        $product_id=$row["Product_id"];
			$name = $row["Name"];
			$picture = $row["picture"];
			$price = $row["Price"];
                        $instock=$row["InStock"];
                        if($instock==1){
                        echo"<form method='post' action='basket.php'>";
			echo "<tr>";
			echo "<td>$name</td>";
			echo "<td><img width='150' src='".getHost()."images/$picture'></td>";
                        echo "<td>$price</td>";
                        echo"<td>YES</td>";
                        echo"<td><input type='submit' value='Basket'></td>";
                        echo "<input type='hidden' name='product_id' value='$product_id'>";
			echo "</tr>";
                        echo"</form>";
                        echo"</div>";
                        }
		}
                echo"</table>";
            }
        ?>
</body>
</html>
