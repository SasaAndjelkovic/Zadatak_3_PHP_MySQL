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
        <form action="" method="get">
            <input type="submit" name="izmeni" size="25" value="Finansijski izvestaj">
            <br>
            <br>
        </form>

        <form action="" method="get">
            <input type="submit" name="izmeni" size="25" value="Prikazi predstave">
            <br>
            <br>
        </form>

        <form action="" method="get">
            <input type="text" name="izmeni" size="25" placeholder="Upisi ID predstave za izmenu">
            <button>Izmeni</button>
            <br>
            <br>
        </form>

        <form action="" method="get">
            <input type="text" name="izbrisi" size="25" placeholder="Upisi ID predstave za brisanje">
            <button>Obrisi</button>
            <br>
            <br>
        </form>

    </div>

    <div>
        <a href="?addShow">
            <button>Dodaj novu predstavu</button>
        </a>
    </div>
    <br>


    <br>
    <a href="?logout">
        <button>Logout</button>
    </a>

</body>

</html>