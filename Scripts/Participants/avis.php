<?php
$participants = [
    "THOMAS_Nelson" => "Depuis le début de la SAÉ, Clément et moi avons mis en place le serveur ESXi ainsi que les VM pour le serveur Windows et Ubuntu. Nous avons installé le contrôleur de domaine AD DS ainsi que les services DHCP et DNS (zone directe, zone inverse, CNAME) permettant de déployer le réseau de la maquette. Nous avons également testé la création d’utilisateur et la mise sur le domaine d’un ordinateur.</br>
Je viens de basculer sur le serveur Ubuntu afin de mettre en place les services web, FTP, TFTP, messagerie ainsi que la téléphonie avec le serveur asterisk.</br>
Personnellement, je m'attribuerais la note de 16.",
    "TEIXEIRA_Ludovic" => "Pour cette SAE, à l’aide de Thomas, nous avons réalisé le site web demandé, (création des pages HTML, PHP, CSS), nous avons implémenté la partie administration (page administrateur accessible avec mot de passe, donc création d’une base de données). Nous avons aussi commencé la rédaction des différents livrables, etc.</br>
Plus globalement, nous avons organisé le site en dessinant les différentes pages que nous allions réaliser (accueil, administrateur, livrable, etc.), afin qu’on soit le plus efficace.
Même si nous étions deux sur cette partie, nous avons plus ou moins travaillé sur une partie. Personnellement, je me suis concentré sur le côté session avec l’administrateur. Pour cela, je me suis basé sur les TP réalisés en R209, en les adaptant à notre contexte.</br>
Pour l’investissement fourni, je m'attribuerais la note de 16/20.",
    "TRESGOTS_Thomas" => "Je me suis occupé de la partie web avec Ludovic. Plus précisément, nous avons réalisé le site web et les nombreuses pages qui le compose comme :
    <ul>
        <li>page d’accueil</li>
        <li>page de prise de rendez-vous</li>
        <li>page de connexion</li>
        <li>pages de livrables</li> 
        <li>page de mentions légales</li>  
    </ul>      
De plus, nous avons aussi réalisé la partie CSS pour rendre la découverte de notre site web plus agréable pour l’utilisateur, ainsi que la partie PHP dans le but de rendre les pages web dynamiques (je pense notamment à la page de prise de rendez-vous ainsi qu'à celles possédant des formulaires).</br>
Actuellement, nous sommes en train d’implémenter les livrables demandés sur les pages correspondantes. La prochaine étape consistera à rendre le site web RWB.</br>
Enfin, la réalisation collaborative du site web avec Ludovic nous demandait d’être organisés en ce qui concerne la gestion de nos nombreux fichiers. Par conséquent, nous avons utilisé github pour nous faciliter la tâche au niveau des versions de notre site web. Pour ma part, j’ai découvert cet outil lors du TP formatif de la SAE 23, il nous a été bien utile.</br>
Note : 16",
    "BEUDOT_Clement" => "Dans le cadre de la SAE24 avec Nelson, nous avons configuré le serveur ESXi ainsi que la création des deux Vm ( Windows_Server_2019 et Ubuntu). Dans la machine virtuelle Windows_Server_2019, nous avons configuré AD DS “Active directory”, nous avons mis en place le service DHCP, DNS pour les zones de recherche directe
“switching-cabinet.local”, une zone inverse avec ces pointeurs et les CNAME pour le serveur ubuntu qui possède le site web.
De plus, sur la machine virtuelle “Windows_Server_2019” nous avons créé un utilisateur “Paul Godart” pour tester les fonctionnalités du domaine.
Enfin, j’ai configuré un routeur pour tester le service DHCP, DNS et l’utilisateur dans un autre réseau.</br>
Maintenant, je travaille sur la gestion des utilisateurs.</br>
Note: 15",
    "IRASTORZA_Enzo" => "Marin et moi-même avons réfléchi à un plan d’adressage simple. Nous nous sommes basés sur l’adressage des autres groupes et nous avons décidé que notre réseau serait le réseau n°2.</br>
Nous avons d’abord commencé le schéma réseau avec les différentes connexions, adresse, masque, passerelle par défaut, OS, DNS etc…).</br>
Nous avons ensuite fait le Cisco Packet Tracer afin de simuler une connexion entre notre réseau, nous avons fait 2 groupes car cela nous à été conseillé par notre professeur référent.</br>
Nous avons alors mis en place sur le packet tracer le serveur DHCP, DNS et WEB, il est alors possible de se connecter à la page web depuis tous les réseaux, ainsi il est possible de ping les DNS.</br>
Tous les différents ping fonctionnent correctement, les routes sont fonctionnelles (voir screenshot des différents ping et tracert).</br>
Nous mettons alors à disposition le Cisco Packet Tracer.
",
    "IRAOLA_Alatz" => "e que j’ai apporté a été le Gantt, le paramétrage de la téléphonie avec Nicolas et Nelson, aussi le point d’accès Wi-Fi qui a permis la possibilité d’utiliser le téléphone sans fil. J’ai aussi paramétré les différents asterisk disponibles et le Thomson.</br>
note 15/20",
    "FERRIGNO_Nicolas" => "Pour le début de cette SAE je me suis occupé avec l’aide de Alatz et Nelson de la partie téléphonie. J’ai mis en place le serveur asterisk en créant tous les profils des téléphones et j’ai mis en place le transfert d’appel. J’ai aussi paramétré le SPA504G et commencé la mise en place du téléphone mobile de la secrétaire.</br>
Note : 15/20
",
    "LEVEIL_Marin" => "Enzo et moi-même avons réfléchi à un plan d’adressage simple. Nous nous sommes basés sur l’adressage des autres groupes et nous avons décidé que notre réseau serait le réseau n°2.
Nous avons d’abord commencé le schéma réseau avec les différentes connexions, adresse, masque, passerelle par défaut, OS, DNS etc…).</br>
Nous avons ensuite fait le Cisco Packet Tracer afin de simuler une connexion entre notre réseau, nous avons fait 2 groupes car cela nous à été conseillé par notre professeur référent.</br>
Nous avons alors mis en place sur le packet tracer le serveur DHCP, DNS et WEB, il est alors possible de se connecter à la page web depuis tous les réseaux, ainsi il est possible de ping les DNS.</br>
Tous les différents ping fonctionnent correctement, les routes sont fonctionnelles (voir screenshot des différents ping et tracert).</br>
Nous mettons alors à disposition le Cisco Packet Tracer.
"
];

$noms = [
    "THOMAS_Nelson" => "Nelson",
    "TEIXEIRA_Ludovic" => "Teixeira",
    "TRESGOTS_Thomas" => "Tresgots",
    "BEUDOT_Clement" => "Beudot",
    "IRASTORZA_Enzo" => "Irastorza",
    "IRAOLA_Alatz" => "Iraola",
    "FERRIGNO_Nicolas" => "Ferrigno",
    "LEVEIL_Marin" => "Leveil"
];

$prenoms = [
    "THOMAS_Nelson" => "Thomas",
    "TEIXEIRA_Ludovic" => "Ludovic",
    "TRESGOTS_Thomas" => "Thomas",
    "BEUDOT_Clement" => "Clément",
    "IRASTORZA_Enzo" => "Enzo",
    "IRAOLA_Alatz" => "Alatz",
    "FERRIGNO_Nicolas" => "Nicolas",
    "LEVEIL_Marin" => "Marin"
];

$photos = [
    "THOMAS_Nelson" => "<img class='image-responsive' src='../../Images/Nelson_photo.jpg' alt='photo-Nelson'>",
    "TEIXEIRA_Ludovic" => "<img class='image-responsive' src='../../Images/Ludo_photo.png' alt='photo-Ludo'>",
    "TRESGOTS_Thomas" => "<img class='image-responsive' src='../../Images/Thomas_photo.jpg' alt='photo-Thomas'>",
    "BEUDOT_Clement" => "<img class='image-responsive' src='../../Images/Clement_photo.jpg' alt='photo-Clément'>",
    "IRASTORZA_Enzo" => "<img class='image-responsive' src='../../Images/Enzo_photo.jpg' alt='photo-Enzo'>",
    "IRAOLA_Alatz" => "<img class='image-responsive' src='../../Images/Alatz_photo.jpg' alt='photo-Alatz'>",
    "FERRIGNO_Nicolas" => "<img class='image-responsive' src='../../Images/Nicolas_photo.jpg' alt='photo-Nicolas'>",
    "LEVEIL_Marin" => "<img class='image-responsive' src='../../Images/Marin_photo.jpg' alt='photo-Marin'>"
];

$notes = [
    "THOMAS_Nelson" => "<img class='Images_et_video' src='../../Images/Notes/Nelson_notes.png' alt='notes-Nelson'>",
    "TEIXEIRA_Ludovic" => "<img class='Images_et_video' src='../../Images/Notes/Ludo_notes.png' alt='notes-Ludo'>",
    "TRESGOTS_Thomas" => "<img class='Images_et_video' src='../../Images/Notes/Thomas_notes.png' alt='notes-Thomas'>",
    "BEUDOT_Clement" => "<img class='Images_et_video' src='../../Images/Notes/Clement_notes.png' alt='notes-Clement'>",
    "IRASTORZA_Enzo" => "<img class='Images_et_video' src='../../Images/Notes/Enzo_notes.png' alt='notes-Enzo'>",
    "IRAOLA_Alatz" => "<img class='Images_et_video' src='../../Images/Notes/Alatz_notes.png' alt='notes-Alatz'>",
    "FERRIGNO_Nicolas" => "<img class='Images_et_video' src='../../Images/Notes/Nicolas_notes.png' alt='notes-Nicolas'>",
    "LEVEIL_Marin" => "<img class='Images_et_video' src='../../Images/Notes/Marin_notes.png' alt='notes-Marin'>"
];


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["participants"])) {
    $selectedParticipant = $_POST["participants"];
    $text = isset($participants[$selectedParticipant]) ? $participants[$selectedParticipant] : "Participant non trouvé.";
    $noms = isset($noms[$selectedParticipant]) ? $noms[$selectedParticipant] : "Nom non trouvé.";
    $prenoms = isset($prenoms[$selectedParticipant]) ? $prenoms[$selectedParticipant] : "Prénom non trouvé.";
    $photos = isset($photos[$selectedParticipant]) ? $photos[$selectedParticipant] : "Photo non trouvé";
    $notes = isset($notes[$selectedParticipant]) ? $notes[$selectedParticipant] : "Notes non trouvé";
} else {
    $text = "Aucun participant sélectionné.";
    $noms = "";
    $prenoms = "";
    $photos = "";
    $notes = "";
}
?>

