<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
</head>
<body>
    <h1>Formulaire de bienvenue</h1>

    <form method="POST" action="">
        <label for="prenom">Entrez votre prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <button type="submit">Envoyer</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $prenom = htmlspecialchars($_POST['prenom']);
        echo "<p>Bienvenue, $prenom !</p>";
    }
    ?>
</body>
</html>
