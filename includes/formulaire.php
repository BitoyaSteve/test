<form action="<?= $action ?>" method="POST">
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom"
           value="<?= isset($nom) ? htmlspecialchars($nom) : '' ?>"
           pattern="^[A-Za-zÀ-ÖØ-öø-ÿ\s\-']+$"
           title="Le nom ne doit contenir que des lettres"
           required>

    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" id="prenom"
           value="<?= isset($prenom) ? htmlspecialchars($prenom) : '' ?>"
           pattern="^[A-Za-zÀ-ÖØ-öø-ÿ\s\-']+$"
           title="Le prénom ne doit contenir que des lettres"
           required>

    <button type="submit"><?= $buttonText ?? 'Enregistrer' ?></button>
</form>
