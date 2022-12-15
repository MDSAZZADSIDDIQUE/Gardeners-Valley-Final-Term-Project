<?php
function show_user()
{
    $sql = "SELECT * FROM shops_information";
    $connection = mysqli_connect('localhost', 'root', '', 'gardeners_valley');
    $shopsInformation = mysqli_query($connection, $sql);
    while ($shopInformation = mysqli_fetch_array($shopsInformation)) {
        echo "<div id='user_table'>";
        echo "<tr class='showUsers'>";
        echo "<td>{$shopInformation[0]}</td>";
        echo "<td>{$shopInformation[1]}</td>";
        echo "<td>{$shopInformation[2]}</td>";
        echo "<td>{$shopInformation[3]}</td>";
        echo "<td><img width='100px' height='auto' class='tableImage' src='{$shopInformation[4]}'></td>";
        echo "<td class='editRow'><a href='edit_shop.php?editShop={$shopInformation[0]}'>Edit</a></td>";
        echo "<td class='deleteRow'><input type='button' id='delete' name='delete_button' value='Delete' onclick='deleteUser({$shopInformation[0]})'/></td>";
        echo "</tr>";
        echo "</div>";
        echo "<tr class='hidden' id='hidden{$shopInformation[0]}'><td colspan='9' class='deletionMessage' id='deletation_message{$shopInformation[0]}'></td></tr>";
    }
}