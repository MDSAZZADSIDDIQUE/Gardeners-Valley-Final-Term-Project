<?php
function show_user()
{
    $sql = "SELECT * FROM user_information";
    $connection = mysqli_connect('localhost', 'root', '', 'gardeners_valley');
    $usersInformation = mysqli_query($connection, $sql);
    while ($userInformation = mysqli_fetch_array($usersInformation)) {
        echo "<div id='user_table'>";
        echo "<tr class='showUsers'>";
        echo "<td>{$userInformation[0]}</td>";
        echo "<td>{$userInformation[1]}</td>";
        echo "<td>{$userInformation[2]}</td>";
        echo "<td>{$userInformation[3]}</td>";
        echo "<td>{$userInformation[4]}</td>";
        echo "<td>{$userInformation[5]}</td>";
        echo "<td>{$userInformation[6]}</td>";
        echo "<td class='editRow'><a href='edit_user.php?edit_user={$userInformation[0]}'>Edit</a></td>";
        echo "<td class='deleteRow'><input type='button' id='delete' name='delete_button' value='Delete' onclick='deleteUser({$userInformation[0]})'/></td>";
        echo "</tr>";
        echo "</div>";
        echo "<tr class='hidden' id='hidden{$userInformation[0]}'><td colspan='9' class='deletionMessage' id='deletation_message{$userInformation[0]}'></td></tr>";
    }
}

function showSearchUser($userID)
{
    ?>

    <?php
    $sql = "SELECT * FROM user_information";
    $connection = mysqli_connect('localhost', 'root', '', 'gardeners_valley');
    $usersInformation = mysqli_query($connection, $sql);
    while ($userInformation = mysqli_fetch_array($usersInformation)) {
        if ($userInformation[0] == $userID) {
            echo "<div id='user_table'>";
            echo "<tr>";
            echo "<td>{$userInformation[0]}</td>";
            echo "<td>{$userInformation[1]}</td>";
            echo "<td>{$userInformation[2]}</td>";
            echo "<td>{$userInformation[3]}</td>";
            echo "<td>{$userInformation[4]}</td>";
            echo "<td>{$userInformation[5]}</td>";
            echo "<td>{$userInformation[6]}</td>";
            echo "<td class='editRow'><a href='edit_user.php?edit_user={$userInformation[0]}'>Edit</a></td>";
            echo "<td class='deleteRow'><input type='button' id='delete' name='delete_button' value='Delete' onclick='deleteUser({$userInformation[0]})'/></td>";
            echo "</tr>";
            echo "</div>";
            echo "<tr class='hidden' id='hidden{$userInformation[0]}'><td colspan='9' class='deletionMessage' id='deletation_message{$userInformation[0]}'></td></tr>";
        }
    }
}