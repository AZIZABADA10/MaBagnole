<?php
require_once '../Components/TOP_SIDE_BAR.php';
?>
<main class="p-6">
  <div class="flex justify-between items-center mb-4">
    <h2 class="text-xl font-semibold">Gestion des véhicules</h2>
    <button class="btn-primary">+ Ajouter</button>
  </div>

  <div class="card overflow-x-auto">
    <table class="w-full text-sm">
      <thead class="bg-gray-100">
        <tr>
          <th>Photo</th>
          <th>Modèle</th>
          <th>Catégorie</th>
          <th>Prix/Jour</th>
          <th>Statut</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-t">
          <td>🚗</td>
          <td>Peugeot 208</td>
          <td>Citadine</td>
          <td>350 DH</td>
          <td class="text-green-600">Disponible</td>
          <td class="space-x-2">
            <button class="btn-edit">✏️</button>
            <button class="btn-delete">🗑️</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</main>
