<?php
    function getLescomptable($pdo)
    {
        $req = 'SELECT comptable.mdp as mdp, comptable.id as id FROM comptable ';
        $req = $pdo->query($req);
        $lesLignes = $req->fetchAll();
        return $lesLignes;
    }


$pdo = new PDO('mysql:host=localhost;dbname=gsb_frais', 'root', '');
$pdo->query('SET CHARACTER SET utf8');

$lescomptables = getLescomptable($pdo);

foreach ($lescomptables as $uncomptable) {
    $hashMdp = password_hash($uncomptable['mdp'], PASSWORD_DEFAULT);
    $req = "UPDATE comptable SET mdp='" . $hashMdp . "'  WHERE id='" . $uncomptable['id'] . "';";
    $pdo->exec($req);
}

print("fini");
?>