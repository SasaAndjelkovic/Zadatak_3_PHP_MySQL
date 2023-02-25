<?php

require "../dbBroker.php";
require "../model/show.php";
include "../model/manager.php";
include "../model/avatar.php";


if (isset($_GET['addShow'])) {
    include_once 'addShow.php';
    exit();
}

if (isset($_GET['sort']))
    $result = Show::getAllSort($conn);
else
    $result = Show::getAll($conn);

$resultAdd = Avatar::getAvatar($conn);

while ($redAdd = $resultAdd->fetch_array()) { 
    $_SESSION['avatar'][] = $redAdd;
};

//echo ($_SESSION['avatar'][0]['avatarID']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>

    <div>
        <br>
        <form action="finance.php" method="get">
            <input type="submit" name="finansije" size="25" value="Finansijski izvestaj">
            <br>
        </form>

        <div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Naziv predstave</th>
                        <th>Opis</th>
                        <th>Autor</th>
                        <th>Avatar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($red = $result->fetch_array()) {
                            $_SESSION['predstave'][] = $red;       
                    ?>
                        <tr>
                            <td> <?php echo $red['showID'] ?></td>
                            <td> <?php echo $red['showName'] ?></td>
                            <td> <?php echo $red['description'] ?> </td>
                            <td> <?php echo $red['author'] ?></td>
                            <td> <?php echo $red['avatarName']; 
                            ?></td> 
                        
                        </tr>
                    <?php
                        };
                    ?>
                </tbody>
            </table>
            <br>
        </div>

        <form action="updateShow.php" method="get">
            <input type="text" name="izmeni" size="25" placeholder="Upisi ID predstave za izmenu">
            <button>Izmeni</button>
            <br>
        </form>

        <form action="..//controler/delete.php" method="get">
            <input type="text" name="izbrisi" id="izbrisiV" size="25" placeholder="Upisi ID predstave za brisanje" value="">
            <button id="izbrisi">Obrisi</button>
            <br>
        </form>
    </div>

    <div>
        <a href="?addShow">
            <button>Dodaj novu predstavu</button>
        </a>
    </div>
    <br>

    <div>
        <a href="?sort">
            <button>Sortiraj po imenu</button>
        </a>
    </div>
    <br>

    <br>
    <a href="logout.php">
        <button>Logout</button>

</body>

</html>