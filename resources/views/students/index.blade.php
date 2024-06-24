<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Liste des Etudiants</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="app.css">

</head>
<body>
    <div class="h">
        <div class="log"> Student'<span>s</span>  R<span>e</span>g</div>
        <div class="lien">
            <a href="{{ route('acceuil') }}">Home</a>
        </div>
    </div>
    <table class="table"  >
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>choix1</th>
                <th>choix2</th>
                <th>choix3</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->first_name }}</td>
                <td>{{ $student->email }}</td>

                <td>{{ $student->choice1 }}</td>
                <td>{{ $student->choice2 }}</td>
                <td>{{ $student->choice3 }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
