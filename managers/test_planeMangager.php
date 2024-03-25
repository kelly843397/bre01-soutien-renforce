<?php
// Inclure les classes PlaneManager et Plane
require_once 'PlaneManager.php';
require_once 'Plane.php';

// Création d'un objet PlaneManager
$planeManager = new PlaneManager(/* Ajoutez les paramètres de connexion si nécessaire */);

// Test de la méthode findAll()
$planes = $planeManager->findAll();
echo "Tous les avions :\n";
foreach ($planes as $plane) {
    echo $plane->getName() . "\n";
}

// Test de la méthode findOne()
$id = 1; // Remplacez par un identifiant existant dans la table 'planes'
$plane = $planeManager->findOne($id);
if ($plane) {
    echo "Avion trouvé : " . $plane->getName() . "\n";
} else {
    echo "Aucun avion trouvé avec l'identifiant $id\n";
}

$id = 999; // Identifiant inexistant
$plane = $planeManager->findOne($id);
if ($plane) {
    echo "Avion trouvé : " . $plane->getName() . "\n";
} else {
    echo "Aucun avion trouvé avec l'identifiant $id\n";
}
?>
