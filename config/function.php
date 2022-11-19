<?php

function ajouter($name)
{

    if(require("connexion.php"))
    {
    $req = $access->prepare("INSERT INTO equipage (name) VALUES (?)");

    $req->execute(array($name));

    $req->closeCursor();
    }
}

function afficher()
{

    if(require("connexion.php"))
    {
        $req = $access->prepare("SELECT * FROM equipage");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
    }

}