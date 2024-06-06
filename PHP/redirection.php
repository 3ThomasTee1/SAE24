<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $participants = $_POST['participants'];

    if ($participants == 'THOMAS_Nelson') {
        header('Location: ../Script/Participants/nelson_T.html');
        exit();
    } elseif ($batiment == 'TEIXEIRA_Ludovic') {
        header('Location: ../Script/Participants/ludovic_T.html');
        exit();
    if ($participants == 'TRESGOTS_Thomas') {
        header('Location: ../Script/Participants/thomas_T.html');
        exit();
    } elseif ($batiment == 'BEUDOT_Clement') {
        header('Location: ../Script/Participants/clement_B.html');
        exit();
    if ($participants == 'IRASTORZA_Enzo') {
        header('Location: ../Script/Participants/enzo_I.html');
        exit();
    } elseif ($batiment == 'IRAOLA_Alatz') {
        header('Location: ../Script/Participants/alatz_I.html');
        exit();
        if ($participants == 'FERRIGNO_Nicolas') {
            header('Location: ../Script/Participants/nicolas_F.html');
            exit();
        } elseif ($batiment == 'LEVEIL_Marin') {
            header('Location: ../Script/Participants/marin_L.html');
            exit();

    } else {
        // Redirection par défaut au cas où la valeur est inattendue
        header('Location: index.html');
        exit();
    }
}
?>

