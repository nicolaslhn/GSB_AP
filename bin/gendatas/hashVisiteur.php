<?php
    function getLesVisiteur($pdo)
    {
        $req = 'SELECT visiteur.mdp as mdp, visiteur.id as id FROM visiteur ';
        $req = $pdo->query($req);
        $lesLignes = $req->fetchAll();
        return $lesLignes;
    }


$pdo = new PDO('mysql:host=localhost;dbname=gsb_frais', 'root', '');
$pdo->query('SET CHARACTER SET utf8');

$lesVisiteurs = getLesVisiteur($pdo);

foreach ($lesVisiteurs as $unVisiteur) {
    $hashMdp = password_hash($unVisiteur['mdp'], PASSWORD_DEFAULT);
    $req = "UPDATE visiteur SET mdp='" . $hashMdp . "'  WHERE id='" . $unVisiteur['id'] . "';";
    $pdo->exec($req);
}

print("fini");
?>