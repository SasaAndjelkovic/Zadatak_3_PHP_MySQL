<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predstave</title>
</head>

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
            foreach ($_SESSION['predstave'] as $predstave) :
            ?>
                <tr>
                    <td> <?php echo $predstave->getId(); ?></td>
                    <td> <?php echo $predstave->getName(); ?></td>
                    <td> <?php echo $predstave->getDescription(); ?> </td>
                    <td> <?php echo $predstave->getAuthor(); ?></td>
                    <td> <?php print_r($predstave->getSpisakAvatara()[0]->getName());  ?>
                </tr>
            <?php

            endforeach;

            ?>
        </tbody>
    </table>
</div>