<html>
<head>
    <title>Task</title>
</head>
<body>
    <h1>Task</h1>
    <ul>
        <li>Expiration : {{$tache->expiration}}</li>
        <li>Categorie : {{$tache->categorie}}</li>
        <li>Description : {{$tache->description}}</li>
        <li>accomplie : {{$tache->accomplie}}</li>
    </ul>
</body>
<footer>
    <a href="/taches">Retour aux taches</a>
</footer>
</html>
