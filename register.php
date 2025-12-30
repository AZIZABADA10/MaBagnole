<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription | MaBagnole</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-r from-blue-900 via-blue-800 to-blue-700 flex items-center justify-center">

    <div class="bg-white rounded-xl shadow-2xl w-full max-w-md p-8">
        <!-- Logo -->
        <div class="text-center mb-6">
            <img src="Assets/logos/logo.png" class="mx-auto h-14 mb-2" alt="logo">
            <h1 class="text-2xl font-bold text-blue-600">Créer un compte</h1>
            <p class="text-gray-500 text-sm">Rejoignez MaBagnole</p>
        </div>

        <!-- Form -->
        <form class="space-y-5">
            <div>
                <label class="text-sm font-medium text-gray-600">Nom complet</label>
                <input type="text" placeholder="Votre nom"
                    class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-600 outline-none">
            </div>

            <div>
                <label class="text-sm font-medium text-gray-600">Email</label>
                <input type="email" placeholder="exemple@email.com"
                    class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-600 outline-none">
            </div>

            <!-- Role (optionnel côté UI, souvent caché côté backend) -->
            <div>
                <label class="text-sm font-medium text-gray-600">Type de compte</label>
                <select
                    class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-600 outline-none">
                    <option value="client">Client</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <button
                class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
                S'inscrire
            </button>
        </form>

        <!-- Footer -->
        <div class="text-center mt-6 text-sm text-gray-600">
            Déjà un compte ?
            <a href="login.php" class="text-blue-600 font-semibold hover:underline">
                Connexion
            </a>
        </div>
        <div class="text-center mt-6 text-sm text-gray-600">
            <a href="index.php" class="text-blue-600 font-semibold hover:underline">
                Accuiel
            </a>
        </div>
    </div>

</body>
</html>
