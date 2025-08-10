<?php require_once './includes/queries.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des personnes</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h2>Ajouter une personne</h2>
    <?php
        $action = "includes/insert.php";
        $buttonText = "Enregistrer";
        include './includes/formulaire.php';
    ?>

    <h2>Liste des personnes</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Actions</th>
        </tr>
        <?php foreach(getAllPersonnes($pdo) as $personne): ?>
        <tr>
            <td><?= htmlspecialchars($personne['id']) ?></td>
            <td><?= htmlspecialchars($personne['nom']) ?></td>
            <td><?= htmlspecialchars($personne['prenom']) ?></td>
            <td>
                <a href="./pages/detail.php?id=<?= $personne['id'] ?>">👁 Voir</a> |
                <a href="./pages/edit.php?id=<?= $personne['id'] ?>">✏️ Modifier</a> |
                <a href="./pages/delete.php?id=<?= $personne['id'] ?>" onclick="return confirm('Supprimer cette personne ?')">🗑 Supprimer</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>











Ignorer et passer au contenu
Historique de chat

Vous avez dit :
Dictee nivequ 6ème
ChatGPT a dit :
Voici une dictée adaptée au niveau 6ème (première année de collège). Elle est simple et permet de travailler la grammaire, l'accord, le vocabulaire courant et la ponctuation.

Dictée – Niveau 6ème :

Un matin d’automne, les feuilles mortes tombaient doucement des arbres.
 Le vent soufflait légèrement et faisait frissonner les passants.
Dans la cour de l’école, les élèves attendaient la sonnerie.
Certains discutaient entre amis, d’autres lisaient ou jouaient au ballon.
Quand la cloche a retenti,
tout le monde s’est dirigé vers sa classe en silence.

Vocabulaire utile :

feuilles mortes

soufflait

frissonner

passants

retenti

dirigé

Compétences travaillées :

Accord sujet-verbe

Accord dans le groupe nominal

Imparfait et passé composé

Ponctuation

Vocabulaire du quotidien

Souhaitez-vous que je vous propose une version avec des fautes à corriger ou des questions de compréhension après la dictée ?

Vous avez dit :
une dictee qvec 

Annuler

Envoyer
ChatGPT a dit :
Parfait ! Voici la suite avec deux versions :

Une dictée avec fautes à corriger

Des questions de compréhension pour tester la lecture attentive et le vocabulaire.

✅ 1. Dictée avec fautes à corriger (10 erreurs à trouver)
Un matin d’automne, les feuille mortes tombait doucement des arbres. Le vents soufflais légèrement et faisaient frisonner les passants. Dans la cour de l'école, les élève attendait la sonnerie. Certain discutait entre amis, d’autre lisait ou jouait au ballons.
Quand la cloche a rétentie, tous le monde s’est diriger vers sa classe en silence.

➡ Objectif : retrouver et corriger les fautes d’orthographe, de grammaire et de conjugaison.

✅ 2. Questions de compréhension
Quelle est la saison décrite dans le texte ?

Que faisaient les élèves dans la cour ? Donne deux exemples.

Quel est l’événement qui marque la fin de la récréation ?

Pourquoi peut-on dire que l’atmosphère est calme ?

Trouve dans le texte un verbe à l’imparfait et un verbe au passé composé.

Souhaitez-vous également la correction des fautes ou des réponses aux questions ?

Vous avez dit :
oui
ChatGPT a dit :
Voici la correction complète de la dictée avec fautes et des réponses aux questions de compréhension :

✅ 1. Correction de la dictée avec fautes (version corrigée)
Un matin d’automne, les feuilles mortes tombaient doucement des arbres. Le vent soufflait légèrement et faisait frissonner les passants. Dans la cour de l'école, les élèves attendaient la sonnerie. Certains discutaient entre amis, d’autres lisaient ou jouaient au ballon.
Quand la cloche a retenti, tout le monde s’est dirigé vers sa classe en silence.

🔍 Liste des 10 fautes corrigées :
Fautes	Corrections
feuille → ❌	feuilles ✅
tombait → ❌	tombaient ✅
vents → ❌	vent ✅
soufflais → ❌	soufflait ✅
faisaient → ❌	faisait ✅
frisonner → ❌	frissonner ✅
élève → ❌	élèves ✅
Certain → ❌	Certains ✅
ballons → ❌	ballon ✅
rétentie / tous / s’est diriger → ❌	retenti / tout / s’est dirigé ✅
✅ 2. Réponses aux questions de compréhension
Quelle est la saison décrite dans le texte ?
→ L’automne.

Que faisaient les élèves dans la cour ? Donne deux exemples.
→ Ils discutaient entre amis et jouaient au ballon. (On peut aussi dire : "lisaient").

Quel est l’événement qui marque la fin de la récréation ?
→ La cloche (ou la sonnerie) a retenti.

Pourquoi peut-on dire que l’atmosphère est calme ?
→ Parce que le vent soufflait légèrement, les élèves attendaient en silence et tout le monde se dirigeait calmement vers sa classe.

Trouve dans le texte un verbe à l’imparfait et un verbe au passé composé.

Imparfait : soufflait, attendaient, discutaient, jouaient

Passé composé : a retenti, s’est dirigé

Souhaitez-vous une autre dictée du même niveau ou un peu plus difficile ?

Vous avez dit :
autre dictee
ChatGPT a dit :
Voici une nouvelle dictée de niveau 6ème, suivie à nouveau de la version avec fautes et des questions de compréhension :

✍️ Dictée – Texte original :
Le chat de ma grand-mère est très curieux. Il grimpe sur les meubles, observe les oiseaux par la fenêtre et court après les insectes. Parfois, il se cache sous le canapé pour faire une surprise à son maître. Malgré ses bêtises, tout le monde l’aime beaucoup.

❌ Dictée avec fautes à corriger (10 fautes)
Le chats de ma grand-mére est trés curieux. Il grimpe sur les meuble, observes les oiseau par la fenètre et cours après les insecte. Parfoi, il se cachent sous le canapée pour faire une surprise à son maitre. Malgrés ses bétises, tous le monde l’aimme beaucoup.

🧠 Questions de compréhension
À qui appartient le chat ?

Que fait le chat pour s’amuser ? Donne deux exemples.

Pourquoi le chat se cache-t-il sous le canapé ?

Est-ce que les gens aiment ce chat ? Justifie ta réponse.

Trouve deux noms et deux verbes dans le texte.

Souhaitez-vous la correction tout de suite ?

Vous avez dit :
correction de la phrase pendant la recreation est convoque au bureau du directeur
ChatGPT a dit :
Voici la correction complète de la phrase que vous avez donnée :

❌ Phrase incorrecte :
Pendant la recreation est convoque au bureau du directeur.

✅ Phrase corrigée :
Pendant la récréation, il est convoqué au bureau du directeur.

📝 Explication des corrections :
recreation → récréation : accent manquant.

est convoque → est convoqué : le participe passé doit s’accorder avec l'auxiliaire "être" (accord au masculin singulier).

ajout du sujet "il" : la phrase n’avait pas de sujet, donc elle était grammaticalement incorrecte.

ponctuation : ajout d’une virgule après « récréation » pour la clarté.

Souhaitez-vous que je vous propose un petit exercice sur ce type de correction ?




Aucun fichier choisiAucun fichier choisi
ChatGPT peut faire des erreurs. Envisagez de vérifier les informations importantes.


✅ 2. Questions de compréhension
Quelle est la saison décrite dans le texte ?

Que faisaient les élèves dans la cour ? Donne deux exemples.

Quel est l’événement qui marque la fin de la récréation ?

Pourquoi peut-on dire que l’atmosphère est calme ?

Trouve dans le texte un verbe à l’imparfait et un verbe au passé composé.


✅ 2. Réponses aux questions de compréhension
Quelle est la saison décrite dans le texte ?
→ L’automne.

Que faisaient les élèves dans la cour ? Donne deux exemples.
→ Ils discutaient entre amis et jouaient au ballon. (On peut aussi dire : "lisaient").

Quel est l’événement qui marque la fin de la récréation ?
→ La cloche (ou la sonnerie) a retenti.

Pourquoi peut-on dire que l’atmosphère est calme ?
→ Parce que le vent soufflait légèrement, les élèves
 attendaient en silence et tout le monde se dirigeait calmement vers sa classe.

Trouve dans le texte un verbe à l’imparfait et un verbe au passé composé.

Imparfait : soufflait, attendaient, discutaient, jouaient

Passé composé : a retenti, s’est dirigé