<?php
include 'all.php';
/*
//add
$key=  array_search($product_id, $_SESSION['basket']);
if(!$key){
    $_SESSION['basket'][]=$product_id;
}
//delete
$key=  array_search($product_id, $_SESSION['basket']);
if($key){
    unset($_SESSION['basket'][$key]);
}
*/
$product=$_POST['product'];
$key = array_search($product, $_SESSION['basket']);
if(isset($key)){
    unset($_SESSION['basket'][$key]);
}
//obhojdane na pory4kite.             
      echo"<a href='list_of_products.php'>Начало</a>";   
         

            echo "<table border='1'>";
            echo"<tr>";
            echo"<td>Name:</td>";
            echo"<td>Picture:</td>";
            echo"<td>Price:</td>";
            echo"<td>Remove from basket:</td>";           
            echo"</tr>";

foreach ($_SESSION['basket'] as $v)
{
    
    $sql = "SELECT Product_id, Name, picture, Price,InStock FROM accessories_shop.product WHERE product_id = $v";
         
         $result = mysqli_query($connection,$sql);
         
         
    if (mysqli_affected_rows($connection) > 0)
        {
            while ($row = mysqli_fetch_assoc($result)) 
            {
                $product_id = $row['Product_id'];
                $name = $row['Name'];
                $picture = $row['picture'];
                $price = $row['Price'];
                $InStock = $row['InStock'];
                
                echo "<form action='system.php' method='post'>";
                echo "<tr>";
                echo "<td>$name </td>";
                echo "<td><img width='150' src='".getHost()."images/$picture'></td>";
                echo "<td>$price</td>";
                echo "<td><input type='submit' value='REMOVE'></td>";
                echo "<input type=hidden name='product' value='$v'>";
                echo "</tr>";
                echo "</form>";
            }             
        }           
}
echo "</table>";
?>
    <form action="" method="POST">
        <div>
            <span>User name :</span>
            <input type="text" name="username">
        </div>
        <div>
            <span>Email:</span>
            <input type="text" name="email">
        </div>
        <div>
            <input type="submit" value="Complete order">
            <input type="hidden" name="complete" value="1">
        </div>
    </form>
<?php