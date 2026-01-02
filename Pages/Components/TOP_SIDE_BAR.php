<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>MaBagnole Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- TailwindCSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Style externe -->
  <link rel="stylesheet" href="../../Assets/style.css">

  <style>
    body { font-family: 'Inter', sans-serif; }

    /* Sidebar menu items */
    .menu-item {
      @apply flex items-center gap-3 px-4 py-3 rounded-lg
             text-gray-300 hover:bg-[#2563EB]/20 hover:text-white transition-all duration-200;
    }

    .menu-item svg {
      @apply w-5 h-5 text-gray-400;
    }

    .menu-item:hover svg {
      @apply text-white;
    }

    .menu-item-active {
      @apply bg-[#2563EB] text-white;
    }

    .menu-item-active svg {
      @apply text-white;
    }
  </style>
</head>

<body class="bg-gray-100">
<div class="flex min-h-screen">

  <!-- SIDEBAR -->
  <aside class="w-64 bg-[#0F172A] text-white hidden md:flex flex-col">

    <!-- LOGO -->
    <div class="p-6 text-2xl font-bold text-center border-b border-gray-700">
      Ma<span class="text-[#2563EB]">Bagnole</span>
    </div>

    <!-- NAVIGATION -->
    <nav class="flex-1 p-4 space-y-1">
      <!-- Dashboard -->
      <a href="Dashboard.php" class="menu-item menu-item-active">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 3h7v7H3V3zm11 0h7v4h-7V3zM3 14h7v7H3v-7zm11 7h7v-7h-7v7z"/>
        </svg>
        Dashboard
      </a>

      <!-- Véhicules -->
      <a href="vehicles.php" class="menu-item">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
          <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                d="M19 16V7a2 2 0 00-2-2H7a2 2 0 00-2 2v9m14 0H5m14 0a2 2 0 01-2 2H7a2 2 0 01-2-2"/>
        </svg>
        Véhicules
      </a>

      <!-- Catégories -->
      <a href="categories.php" class="menu-item">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
          <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                d="M3 7h18M3 12h18M3 17h18"/>
        </svg>
        Catégories
      </a>

      <!-- Réservations -->
      <a href="reservations.php" class="menu-item">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
          <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                d="M8 7V3m8 4V3M3 11h18M5 19h14"/>
        </svg>
        Réservations
      </a>

      <!-- Avis -->
      <a href="reviews.php" class="menu-item">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
          <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l2.07 6.374h6.7c.969 0 1.371 1.24.588 1.81l-5.42 3.94 2.07 6.374c.3.921-.755 1.688-1.538 1.118L12 18.347l-5.42 3.94c-.783.57-1.838-.197-1.538-1.118l2.07-6.374-5.42-3.94c-.783-.57-.38-1.81.588-1.81h6.7l2.07-6.374z"/>
        </svg>
        Avis
      </a>

      <!-- Utilisateurs -->
      <a href="users.php" class="menu-item">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
          <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                d="M5.121 17.804A9 9 0 1119 9a9 9 0 01-13.879 8.804z"/>
        </svg>
        Utilisateurs
      </a>

    </nav>
  </aside>

  <!-- MAIN -->
  <div class="flex-1 flex flex-col">

    <!-- TOPBAR -->
    <header class="bg-white border-b border-gray-200 px-6 py-4 flex justify-between items-center">

      <!-- LEFT -->
      <div class="flex items-center gap-4">
        <h1 class="text-xl font-semibold text-gray-800 tracking-tight">Dashboard</h1>
      </div>

      <!-- RIGHT -->
      <div class="flex items-center gap-6">

        <!-- Notifications -->
        <button class="relative p-2 rounded-full hover:bg-gray-100 transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V4a2 2 0 10-4 0v1.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0a3 3 0 11-6 0h6z"/>
          </svg>
          <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
        </button>

        <!-- Divider -->
        <span class="w-px h-6 bg-gray-200"></span>

        <!-- Profile -->
        <div class="relative group cursor-pointer">
          <div class="flex items-center gap-3 p-2 rounded-lg hover:bg-gray-100 transition">
            <img src="https://i.pravatar.cc/40" class="w-9 h-9 rounded-full object-cover">
            <div class="hidden md:block">
              <p class="text-sm font-medium text-gray-800">Admin</p>
              <p class="text-xs text-gray-500">Administrateur</p>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 9l-7 7-7-7"/>
            </svg>
          </div>

          <!-- Dropdown -->
          <div class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition">
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Paramètres</a>
            <div class="border-t"></div>
            <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50">Déconnexion</a>
          </div>
        </div>

      </div>
    </header>

    <!-- MAIN CONTENT -->
    <main class="p-6">
      <!-- Ici tu peux ajouter les cards, graphes et tables CRUD -->
    </main>

  </div>
</div>
</body>
</html>
