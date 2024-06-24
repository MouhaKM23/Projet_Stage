
<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
@vite('resources/css/app.css')

    <title>Connexion</title>
   
</head>
<body>
    <div class="h">
        <div class="log"> Student'<span>s</span>  R<span>e</span>g</div>
        <div class="lien">
            <a href="{{ route('register') }}">Register</a>
        </div>
    </div>

    <form class="login" method="POST" action="{{ route('login') }}">
        <h2>login</h2>
        @csrf
        <label for="">
            Email:
            <input type="email" name="email" placeholder="Email" required>
        </label>
        <label for="">
            Password:
            <input type="password" name="password" placeholder="Mot de passe" required>
        </label>
        <button class="btn" type="submit">Se connecter</button>
    </form>
</body>
</html>
