<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Classes\Vehicule;
use App\Classes\Categorie;

$vehicules = Vehicule::listerVehicule(8, 0); 
$categories = Categorie::listerCategorie();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Voitures - MaBagnole</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="Assets/logos/logo.png" type="image/x-icon">
</head>
<body class="font-sans bg-gray-50">

    <!-- Header -->
    <?php require_once 'Components/header.php';?>


    <!-- Page Header -->
    <section class="py-16 bg-blue-50">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Découvrez notre parc automobile</h1>
            <p class="text-gray-700 text-lg">Choisissez le véhicule qui correspond à vos besoins et louez facilement</p>
        </div>
    </section>

    <!-- Vehicles Listing -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php foreach ($vehicules as $v):
                    $catNom = '';
                    foreach ($categories as $c) {
                        if ($c['id_categorie'] == $v['id_categorie']) {
                            $catNom = $c['titre'];
                            break;
                        }
                    }
                ?>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <img src="<?= htmlspecialchars($v['image']) ?>" 
                         alt="<?= htmlspecialchars($v['modele']) ?>" 
                         class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-1"><?= htmlspecialchars($v['modele']) ?></h3>
                        <p class="text-gray-500 text-sm mb-3"><?= htmlspecialchars($catNom) ?></p>
                        <div class="flex items-center justify-between mb-3 text-sm text-gray-600">
                            <span><i class="fas fa-users"></i> 4 places</span>
                            <span><i class="fas fa-cog"></i> Auto</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-2xl font-bold text-blue-600"><?= number_format($v['prix_par_jour'], 0, ',', ' ') ?> DH</span>
                                <span class="text-gray-500 text-sm">/jour</span>
                            </div>
                            <a href="reserver.php?id=<?= $v['id_vehicule'] ?>" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-sm">
                                Louer
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php require_once 'Components/footer.php';?>


</body>
</html>
