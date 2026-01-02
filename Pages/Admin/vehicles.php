<?php
require_once '../Components/TOP_SIDE_BAR.php';
?><main class="p-6">
<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\Config\Database;
use App\Classes\Vehicule;
use App\Classes\Categorie;


$categories = Categorie::listerCategorie();


if (isset($_POST['ajouter'])) {
    $vehicule = new Vehicule(
        $_POST['modele'],
        $_POST['marque'],
        (float)$_POST['prix_par_jour'],
        (int)$_POST['id_categorie'],
        $_POST['image'],
        isset($_POST['disponible']) ? true : false
    );
    $vehicule->ajouterVehicule();
}


if (isset($_POST['modifier'])) {
    $vehicule = new Vehicule(
    $_POST['modele'],
    $_POST['marque'],
    (float)$_POST['prix_par_jour'],
    (int)$_POST['id_categorie'],
    $_POST['image'],
    isset($_POST['disponible']) ? 1 : 0,
    (int)$_POST['id_vehicule']
);
$vehicule->modifierVehicule();

}


if (isset($_GET['supprimer'])) {
    $vehicule = new Vehicule('', '', 0, 0, '', true, (int)$_GET['supprimer']);
    $vehicule->supprimer();
}

$vehicules = Vehicule::listerVehicule(100, 0);
?>

<!-- Header + Ajouter véhicule -->
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-semibold text-gray-800">Gestion des Véhicules</h2>
    <button onclick="document.getElementById('modal-ajouter').classList.remove('hidden')"
            class="px-4 py-2 bg-[#2563EB] text-white rounded hover:bg-[#1E40AF] transition">
        Ajouter un véhicule
    </button>
</div>

<!-- Table des véhicules -->
<div class="overflow-x-auto bg-white rounded shadow">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">ID</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Image</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Modèle</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Marque</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Prix/Jour</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Catégorie</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Disponible</th>
                <th class="px-6 py-3 text-right text-sm font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            <?php foreach ($vehicules as $v): 
                $catNom = '';
                foreach ($categories as $c) { if ($c['id_categorie']==$v['id_categorie']) $catNom=$c['titre']; }
            ?>
            <tr>
                <td class="px-6 py-4 text-sm text-gray-700"><?= $v['id_vehicule'] ?></td>
                <td class="px-6 py-4 text-sm text-gray-700">
<img src="<?= htmlspecialchars($v['image']) ?>" 
     class="w-16 h-12 object-cover rounded" 
     alt="<?= htmlspecialchars($v['modele']) ?>">
                </td>
                <td class="px-6 py-4 text-sm text-gray-700"><?= htmlspecialchars($v['modele']) ?></td>
                <td class="px-6 py-4 text-sm text-gray-700"><?= htmlspecialchars($v['marque']) ?></td>
                <td class="px-6 py-4 text-sm text-gray-700"><?= number_format($v['prix_par_jour'], 2, ',', ' ') ?> DH</td>
                <td class="px-6 py-4 text-sm text-gray-700"><?= htmlspecialchars($catNom) ?></td>
                <td class="px-6 py-4 text-sm text-gray-700"><?= $v['disponible'] ? 'Oui' : 'Non' ?></td>
                <td class="px-6 py-4 text-sm text-right space-x-2">
                    <button onclick="ouvrirModifier(
                        <?= $v['id_vehicule'] ?>,
                        '<?= addslashes($v['modele']) ?>',
                        '<?= addslashes($v['marque']) ?>',
                        '<?= $v['prix_par_jour'] ?>',
                        <?= $v['id_categorie'] ?>,
                        '<?= addslashes($v['image']) ?>',
                        <?= $v['disponible'] ? 1 : 0 ?>
                    )"
                    class="px-3 py-1 bg-yellow-400 text-white rounded hover:bg-yellow-500 transition">
                        Modifier
                    </button>
                    <a href="?supprimer=<?= $v['id_vehicule'] ?>"
                       onclick="return confirm('Voulez-vous vraiment supprimer ce véhicule ?')"
                       class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition">
                        Supprimer
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal Ajouter -->
<div id="modal-ajouter" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg p-6 w-96">
        <h3 class="text-lg font-semibold mb-4">Ajouter un véhicule</h3>
        <form method="POST">
            <div class="mb-4">
                <label class="block mb-1">Modèle</label>
                <input type="text" name="modele" required class="w-full px-3 py-2 border rounded">
            </div>
            <div class="mb-4">
                <label class="block mb-1">Marque</label>
                <input type="text" name="marque" required class="w-full px-3 py-2 border rounded">
            </div>
            <div class="mb-4">
                <label class="block mb-1">Prix par jour (€)</label>
                <input type="number" step="0.01" name="prix_par_jour" required class="w-full px-3 py-2 border rounded">
            </div>
            <div class="mb-4">
                <label class="block mb-1">Catégorie</label>
                <select name="id_categorie" required class="w-full px-3 py-2 border rounded">
                    <?php foreach($categories as $c): ?>
                        <option value="<?= $c['id_categorie'] ?>"><?= htmlspecialchars($c['titre']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-4">
                <label class="block mb-1">Image (URL)</label>
                <input type="text" name="image" required class="w-full px-3 py-2 border rounded">
            </div>
            <div class="mb-4 flex items-center gap-2">
                <input type="checkbox" name="disponible" checked>
                <label>Disponible</label>
            </div>
            <div class="flex justify-end gap-2">
                <button type="button" onclick="document.getElementById('modal-ajouter').classList.add('hidden')"
                        class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400 transition">Annuler</button>
                <button type="submit" name="ajouter"
                        class="px-4 py-2 bg-[#2563EB] text-white rounded hover:bg-[#1E40AF] transition">Ajouter</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Modifier -->
<div id="modal-modifier" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg p-6 w-96">
        <h3 class="text-lg font-semibold mb-4">Modifier le véhicule</h3>
        <form method="POST">
            <input type="hidden" name="id_vehicule" id="mod-id">
            <div class="mb-4">
                <label class="block mb-1">Modèle</label>
                <input type="text" name="modele" id="mod-modele" required class="w-full px-3 py-2 border rounded">
            </div>
            <div class="mb-4">
                <label class="block mb-1">Marque</label>
                <input type="text" name="marque" id="mod-marque" required class="w-full px-3 py-2 border rounded">
            </div>
            <div class="mb-4">
                <label class="block mb-1">Prix par jour (DH)</label>
                <input type="number" step="0.01" name="prix_par_jour" id="mod-prix" required class="w-full px-3 py-2 border rounded">
            </div>
            <div class="mb-4">
                <label class="block mb-1">Catégorie</label>
                <select name="id_categorie" id="mod-categorie" required class="w-full px-3 py-2 border rounded">
                    <?php foreach($categories as $c): ?>
                        <option value="<?= $c['id_categorie'] ?>"><?= htmlspecialchars($c['titre']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-4">
                <label class="block mb-1">Image (URL)</label>
                <input type="text" name="image" id="mod-image" required class="w-full px-3 py-2 border rounded">
            </div>
            <div class="mb-4 flex items-center gap-2">
                <input type="checkbox" name="disponible" id="mod-disponible">
                <label>Disponible</label>
            </div>
            <div class="flex justify-end gap-2">
                <button type="button" onclick="document.getElementById('modal-modifier').classList.add('hidden')"
                        class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400 transition">Annuler</button>
                <button type="submit" name="modifier"
                        class="px-4 py-2 bg-yellow-400 text-white rounded hover:bg-yellow-500 transition">Modifier</button>
            </div>
        </form>
    </div>
</div>

<script>
function ouvrirModifier(id, modele, marque, prix, categorie, image, dispo) {
    document.getElementById('mod-id').value = id;
    document.getElementById('mod-modele').value = modele;
    document.getElementById('mod-marque').value = marque;
    document.getElementById('mod-prix').value = prix;
    document.getElementById('mod-categorie').value = categorie;
    document.getElementById('mod-image').value = image;
    document.getElementById('mod-disponible').checked = dispo ? true : false;
    document.getElementById('modal-modifier').classList.remove('hidden');
}
</script>
</main>
