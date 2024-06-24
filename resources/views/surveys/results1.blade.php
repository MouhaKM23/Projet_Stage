<!DOCTYPE html>
<html>
<head>
    <title>Résultats du Sondage #1</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    
</head>
<body>
        <div class="h">
            <div class="log"> Student'<span>s</span>  R<span>e</span>g</div>
            <div class="lien">
                <a href="{{ route('acceuil') }}">Home</a>
            </div>
        </div>
    <table  class="table">

        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>choix1</th>
                <th>choix2</th>
                <th>choix3</th>
                <th>validation</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($results as $result)
            <tr>
                <td>{{ $result->id }}</td>
                <td>{{ $result->user->name }}</td>
                <td>{{ $result->user->first_name }}</td>
                <td>{{ $result->user->email }}</td>
                <td>{{ $result->choice1}}</td>
                <td>{{ $result->choice2}}</td>
                <td>{{ $result->choice3}}</td>
                <td>{{ $result->interest_confirmation ? 'Oui' : 'Non' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
