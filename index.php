<?php

require "dbBroker.php"; 
include "model/basic_information.php";
include "model/person_information.php";
include "model/manager.php";
include "model/theater_information.php";
include "model/show.php";
include "model/avatar.php";

if (!isset($_SESSION))
    session_start();

//ADD
if (isset($_POST['dodajPredstavu'])) {
    $novaPredstava = new Show (
        findMaxId() + 1,
        $_POST['nazivPredstave'],
        $_POST['opis'],
        $_POST['autor'],
        //$_POST['avatar']  // treba napravati opadajuci meni postojecih avatara
    );
    $_SESSION['predstave'][] = $novaPredstava;
    include "view/home.php";
    exit();
}

//for add 
function findMaxId()
{
    $max = 0;
    foreach ($_SESSION['predstave'] as $show) {
        if ($show->getId() > $max) {
            $max = $show->getId();
        }
    }
    return $max;
}

if (isset($_GET['addShow'])) {
    include_once 'view/addShow.php';
    exit();
}

//DELETE
if (isset($_GET['izbrisi'])) {

    for ($i = 0; $i < count($_SESSION['predstave']); $i++) {
        if ($_GET['izbrisi'] == $_SESSION['predstave'][$i]->getId()){
            array_splice($_SESSION['predstave'], $i, 1);
            include "view/home.php";
            exit();
        }
    }
}

//UPDATE
if (isset($_POST['azurirajPredstavu'])) {
    $nb = $_SESSION['broj'];
    if ($_SESSION['predstave'][$nb]->getId() == $_GET['izmeni']) {
        $_SESSION['predstave'][$nb]->setName($_POST['nazivPredstave']);
        $_SESSION['predstave'][$nb]->setDescription($_POST['opis']);
        $_SESSION['predstave'][$nb]->setAuthor($_POST['autor']);
        //$_SESSION['predstave'][$nb]->setSpisakAvatara($_SESSION['predstave'][)[0]->setName($_POST['avatar']);
    }
    include "view/home.php";
    exit();
}
//move to updateShow.php
if (isset($_GET['izmeni'])) {
    include_once "view/updateShow.php";
    exit();
}

if (isset($_POST['fname']) && isset($_POST['pass'])) {
    $username = $_POST['fname'];
    $password = $_POST['pass'];

    $manager = new Manager(1, $username, "masha.neshkovic@gmail.com", $password);
    $odgovor = Manager::loginManager($manager, $conn);

    if($odgovor->num_rows == 1) {
        header("Location: home.php");
        exit();
    } else
        echo "User ne postoji!";
    
}

include 'view/login.php';

