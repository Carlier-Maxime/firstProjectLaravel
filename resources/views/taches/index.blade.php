<html>
<head>
    <title>Liste des tâches</title>
</head>
<body>
<h2>La liste des tâches</h2>

@if(!empty($taches))
    <ul>
        @foreach($taches as $tache)
            <li><a href={{"/taches/".$tache->id}}>{{$tache->id}}</a> {{$tache->expiration}} <a href={{"/taches/filtre?cat=".$tache->categorie}}>{{$tache->categorie}}</a> {{$tache->description}} accomplie : {{$tache->accomplie}}</li>
        @endforeach
    </ul>
@else
    <h3>aucune tâche</h3>
@endif

</body>
<footer>
    <a href="/">Retour Accueil</a>
</footer>
</html>

