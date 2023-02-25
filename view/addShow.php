<?php 

require "../dbBroker.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predstave</title>
</head>
<body>
    <form action="..//controler/add.php" method="post">
        <h3>Dodavanje predstave</h3>
        <div>
            <input type="text" name="showName" placeholder="Naziv predstave *" value="" />
        </div>
        <div>
            <input type="text" name="description" placeholder="Opis *" value="" />
        </div>
        <div>
            <input type="text" name="author" placeholder="Autor *" value="" />
        </div>
        <div>
            <label for="avatar">Izaberi avatara:</label>
            <select id="avatar" name="avatar">
                <?php
                for ($i = 0; $i < count($_SESSION['avatar'])/2; $i++) { 
                ?>
            <option value="<?php echo $_SESSION['avatar'][$i]['avatarID'] ?>"><?php echo $_SESSION['avatar'][$i]['avatarName'] ?></option>
                <?php
                    }
                ?>
            </select>
        </div>
        
        <br>
        <button id="btnDodaj" type="submit" name="dodajPredstavu">Dodaj predstavu</button>
    </form>

    <?php

    ?>

    <br>
    <form action="home.php" method="get">
    <input type="submit" name="pocetna_strana" size="25" value="Pocetna strana">
</body>
</html>