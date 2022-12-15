<?php
function show_user()
{
    $sql = "SELECT * FROM products_information";
    $connection = mysqli_connect('localhost', 'root', '', 'gardeners_valley');
    $productsInformation = mysqli_query($connection, $sql);
    while ($productInformation = mysqli_fetch_array($productsInformation)) {
        echo "<div id='user_table'>";
        echo "<tr class='showUsers'>";
        echo "<td>{$productInformation[0]}</td>";
        echo "<td>{$productInformation[1]}</td>";
        echo "<td>{$productInformation[2]}</td>";
        echo "<td>{$productInformation[3]}</td>";
        echo "<td><img width='100px' height='auto' class='tableImage' src='{$productInformation[5]}'></td>";
        echo "<td>{$productInformation[6]}</td>";
        echo "<td class='editRow'><a href='edit_product.php?editProduct={$productInformation[0]}'>Edit</a></td>";
        echo "<td class='deleteRow'><input type='button' id='delete' name='delete_button' value='Delete' onclick='deleteUser({$productInformation[0]})'/></td>";
        echo "</tr>";
        echo "</div>";
        echo "<tr class='hidden' id='hidden{$productInformation[0]}'><td colspan='9' class='deletionMessage' id='deletation_message{$productInformation[0]}'></td></tr>";
    }
}