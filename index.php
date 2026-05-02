<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Inscription</h2>

<form method="POST" action="config.php" class="container">
    <input type="text" name="name" placeholder="Name" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <input type="password" name="ConfirmPassword" placeholder="ConfirmPassword" required><br><br>

   <button type="submit" name="sinscrire">S'inscrire</button>
</form>
</body>
</html>