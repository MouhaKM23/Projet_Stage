<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <div class="h">
        <div class="log">Student'<span>s</span>  R<span>e</span>g </div>
        <div class="lien">

            <a href="{{ route('acceuil') }}">home</a>
            <a href="{{ route('survey1/results') }}">resultat</a>



        </div>
    </div>

    <div class="block_profile">

            <h2>Profil de l'utilisateur</h2>

        <label for="">
            Nom:
            <p>{{ $user->name }}</p>
        </label>

        <label for="">
            Prénom:
            <p> {{ $user->first_name }}</p>
        </label>

        <label for="">
            Email:
            <p> {{ $user->email }} </p>
        </label>



    </div>

</body>

