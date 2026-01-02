<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';
use App\Classes\Utilisateur;

$errorMessage = '';

if (isset($_POST['connecter'])) {
    $result = Utilisateur::login($_POST['email'], $_POST['mot_de_passe']);

    if (!$result['success']) {
        $errorMessage = $result['message'];
    } else if ($_SESSION['user']['role'] === 'admin'){
        header('Location: Pages/Admin/dashboard.php');
        exit();
    }else{
       header('Location: Pages/Client/index.php');
        exit(); 
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion | MaBagnole</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="Assets/logos/logo.png" type="image/x-icon">
</head>

<body class="min-h-screen bg-gradient-to-r from-blue-900 via-blue-800 to-blue-700 flex items-center justify-center">

    <div class="bg-white rounded-xl shadow-2xl w-full max-w-md p-8">
        <!-- Logo -->
        <div class="text-center mb-6">
            <img src="Assets/logos/logo.png" class="mx-auto h-14 mb-2" alt="logo">
            <h1 class="text-2xl font-bold text-blue-600">Connexion</h1>
            <p class="text-gray-500 text-sm">Accédez à votre compte</p>
        </div>
         <?php if (!empty($errorMessage)) : ?>
            <div class="mb-4 p-3 text-red-700 bg-red-100 border border-red-400 rounded">
                <?php echo $errorMessage; ?>
            </div>
        <?php endif; ?>
        <!-- Form -->
        <form class="space-y-5" action="login.php" method="POST">
            <div>
                <label class="text-sm font-medium text-gray-600">Email</label>
                <input type="email" name="email" placeholder="exemple@email.com"
                    class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-600 outline-none">
            </div>

            <div>
                <label class="text-sm font-medium text-gray-600">Mot de passe</label>
                <input type="password" name="mot_de_passe" placeholder="••••••••"
                    class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-600 outline-none">
            </div>

            <button name="connecter"
                class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
                Se connecter
            </button>
        </form>

        <!-- Footer -->
        <div class="text-center mt-6 text-sm text-gray-600">
            Pas encore de compte ?
            <a href="register.php" class="text-blue-600 font-semibold hover:underline">
                Inscription
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
