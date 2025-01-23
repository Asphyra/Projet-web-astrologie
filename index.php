<!DOCTYPE HTML>
    <html>
        <head>
            <meta charset="UTF-8"/>
            <link rel="stylesheet" href="style.css">
            <title> Formulaire </title>
        </head>

        <body>
                <h1> Formulaire : </h1>
                <div>
	        <form method="post" action="question.php">
                <h2>Nom : </h2>
                <input type="texte" name="nom">
            </div>
            <div>
            <h2>Prénom : </h2>
                <input type="texte" name="prenom">
         
            </div>
            <div>
            <h2>Date de Naissance : </h2>
                <input type="date" name="date">
            </div>
            <div>
            <h2>Ville de Naissance : </h2>
                <input type="texte" name="ville">
            </div>
</br>
            <div>
                <input type="submit" name="OK">
            </div>
            </form>

        </body>
    </html>