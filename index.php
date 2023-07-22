<!DOCTYPE html>
<html>
<head>
    <title>Formulaire en plusieurs pages</title>
</head>
<body>
    <form action="step1.php" method="post">
        <label for="name">Nom :</label>
        <input type="text" name="name" required>
        <br>
        <label for="email">E-mail :</label>
        <input type="email" name="email" required>
        <br>
        <!-- Ajoutez d'autres champs ici pour la première étape -->
        <input type="submit" value="Suivant">
    </form>
</body>
</html>
