<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location de Voiture - Simple et Abordable</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="Assets/logos/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="font-sans">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <nav class="container mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center space-x-8">
                <a href="#" class="text-2xl font-bold text-blue-600">
                    <img src="Assets/logos/logo.png" alt="logo mabagnole" class="w-22 h-16"></i>
                </a>
                <div class="hidden md:flex space-x-6">
                    <a href="index.php" class="text-gray-700 hover:text-blue-600">Accuiel</a>
                    <a href="nos_voitures.php" class="text-gray-700 hover:text-blue-600">Nos voitures</a>
                    <a href="a_propos.php" class="text-gray-700 hover:text-blue-600">À propos</a>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <a href="login.php" class="px-4 py-2 text-blue-600 border border-blue-600 rounded-lg hover:bg-blue-50 inline-block text-center">
                    Connexion
                </a>
                <a href="register.php" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 inline-block text-center">
                    Inscription
                </a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="relative py-40 overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=1920" alt="Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 via-blue-800/80 to-transparent"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <h1 class="text-5xl md:text-7xl font-extrabold leading-tight">
                        <span class="text-white drop-shadow-2xl">Location simple</span><br>
                        <span class="text-white drop-shadow-2xl">et </span>
                        <span class="bg-gradient-to-r from-blue-600 via-red-600 to-cyan-300 bg-clip-text text-transparent drop-shadow-lg">Abordable</span>
                    </h1>
                    <p class="text-lg text-blue-50 leading-relaxed">
                        Louez une voiture en quelques clics et profitez de tarifs compétitifs pour tous vos déplacements au Maroc
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Louez avec les trois étapes suivantes</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-map-marker-alt text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Renseignez-vous Aussi</h3>
                    <p class="text-gray-600">Choisissez votre destination et les dates de location</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-credit-card text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Choisissez votre véhicul</h3>
                    <p class="text-gray-600">Sélectionnez le véhicule qui correspond à vos besoins</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-car text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Véhicule je garantis!</h3>
                    <p class="text-gray-600">Profitez de votre véhicule en toute sérénité</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Brands Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center items-center gap-12 opacity-60">
                <img src="https://logos-world.net/wp-content/uploads/2021/03/Honda-Logo.png" alt="Honda" class="h-8 grayscale">
                <img src="https://logos-world.net/wp-content/uploads/2021/04/Jaguar-Logo.png" alt="Jaguar" class="h-8 grayscale">
                <img src="Assets/logos/nissan.png" alt="Nissan" class="h-8 grayscale">
                <img src="https://logos-world.net/wp-content/uploads/2021/03/Volvo-Logo.png" alt="Volvo" class="h-8 grayscale">
                <img src="Assets/logos/audi.png" alt="Audi" class="h-8 grayscale">
                <img src="Assets/logos/Alfa-Romeo-logo.png" alt="Alfa Romeo" class="h-8 grayscale">
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="https://images.unsplash.com/photo-1606664515524-ed2f786a0bd6?w=800" alt="Audi R8" class="ml-40 w-[400px] h-[400px] rounded-lg shadow-xl">
                </div>
                <div>
                    <h2 class="text-3xl font-bold mb-6">Votre location de voiture urbaine ou familiale.</h2>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-shield-alt text-blue-600"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-1">Différents types de voitures</h3>
                                <p class="text-gray-600 text-sm">Large sélection de véhicules adaptés à tous vos besoins</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-money-bill-wave text-blue-600"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-1">Pas de frais cachés</h3>
                                <p class="text-gray-600 text-sm">Transparence totale sur tous nos tarifs</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-tags text-blue-600"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-1">Flexibilité</h3>
                                <p class="text-gray-600 text-sm">Modifiez ou annulez votre réservation facilement</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-headset text-blue-600"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-1">Tarifs abordables</h3>
                                <p class="text-gray-600 text-sm">Les meilleurs prix du marché garantis</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Cars Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4">Trouvez la voiture qui vous convient en consultant notre</h2>
            <p class="text-center text-gray-600 mb-12">parc dans les Marchés suivants</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Car Card 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=400" alt="Mercedes C-Class" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-1">Mercedes C-Class</h3>
                        <p class="text-gray-500 text-sm mb-3">Berline</p>
                        <div class="flex items-center justify-between mb-3 text-sm text-gray-600">
                            <span><i class="fas fa-users"></i> 4 places</span>
                            <span><i class="fas fa-cog"></i> Auto</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-2xl font-bold text-blue-600">450 DH</span>
                                <span class="text-gray-500 text-sm">/jour</span>
                            </div>
                            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-sm">
                                Louer
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Car Card 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?w=400" alt="BMW Série 3" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-1">BMW Série 3</h3>
                        <p class="text-gray-500 text-sm mb-3">Berline Sport</p>
                        <div class="flex items-center justify-between mb-3 text-sm text-gray-600">
                            <span><i class="fas fa-users"></i> 4 places</span>
                            <span><i class="fas fa-cog"></i> Auto</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-2xl font-bold text-blue-600">480 DH</span>
                                <span class="text-gray-500 text-sm">/jour</span>
                            </div>
                            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-sm">
                                Louer
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Car Card 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1583121274602-3e2820c69888?w=400" alt="Audi A4" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-1">Audi A4</h3>
                        <p class="text-gray-500 text-sm mb-3">Berline Premium</p>
                        <div class="flex items-center justify-between mb-3 text-sm text-gray-600">
                            <span><i class="fas fa-users"></i> 5 places</span>
                            <span><i class="fas fa-cog"></i> Auto</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-2xl font-bold text-blue-600">420 DH</span>
                                <span class="text-gray-500 text-sm">/jour</span>
                            </div>
                            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-sm">
                                Louer
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Car Card 4 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1617531653332-bd46c24f2068?w=400" alt="Porsche 911" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-1">Porsche 911</h3>
                        <p class="text-gray-500 text-sm mb-3">Sport</p>
                        <div class="flex items-center justify-between mb-3 text-sm text-gray-600">
                            <span><i class="fas fa-users"></i> 2 places</span>
                            <span><i class="fas fa-cog"></i> Auto</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-2xl font-bold text-blue-600">1200 DH</span>
                                <span class="text-gray-500 text-sm">/jour</span>
                            </div>
                            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-sm">
                                Louer
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-8">
                <button class="px-6 py-3 border border-gray-300 rounded-lg hover:bg-gray-50">
                    Afficher tous les véhicules
                </button>
            </div>
        </div>
    </section>

    <!-- Morocco Map Section -->
    <section class="py-16 bg-blue-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Découvrez nos différentes implantations au Maroc</h2>
            <div class="max-w-2xl mx-auto">
                <img src="Assets/logos/Carte_du_Maroc.png" alt="Carte du Maroc" class="w-full h-auto">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">
                       <img src="Assets/logos/logo.png" alt="logo mabagnole" class="w-22 h-16"></i>
                    </h3>
                    <p class="text-gray-400 text-sm">Location de voitures simple et abordable au Maroc</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Qui sommes-nous</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white">Notre équipe</a></li>
                        <li><a href="#" class="hover:text-white">Nos valeurs</a></li>
                        <li><a href="#" class="hover:text-white">Carrières</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Nos services</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white">Location courte durée</a></li>
                        <li><a href="#" class="hover:text-white">Location longue durée</a></li>
                        <li><a href="#" class="hover:text-white">Chauffeur privé</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Besoin d'aide ?</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white">Centre d'aide</a></li>
                        <li><a href="#" class="hover:text-white">Contact</a></li>
                        <li><a href="#" class="hover:text-white">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-sm text-gray-400">
                <p>&copy; 2026 Rental. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>