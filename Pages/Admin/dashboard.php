<?php
require_once '../Components/TOP_SIDE_BAR.php';
?>
    <main class="p-6 space-y-6">

      <!-- KPI CARDS -->
      <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="kpi-card">
          <h3>Total Véhicules</h3>
          <p>128</p>
        </div>
        <div class="kpi-card">
          <h3>Réservations</h3>
          <p>542</p>
        </div>
        <div class="kpi-card">
          <h3>Clients</h3>
          <p>320</p>
        </div>
        <div class="kpi-card">
          <h3>Note Moyenne</h3>
          <p>4.6 ⭐</p>
        </div>
      </div>

      <!-- GRAPHIQUES -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="card h-64 flex items-center justify-center text-gray-400">
          📊 Graphique Réservations (JS)
        </div>
        <div class="card h-64 flex items-center justify-center text-gray-400">
          📈 Graphique Revenus (JS)
        </div>
      </div>

    </main>
  </div>
</div>

</body>
</html>
