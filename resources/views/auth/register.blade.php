<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Inscription</title>
    @vite('resources/css/app.css')
  
    
</head>
<body>
    <div class="h">
        <div class="log"> Student'<span>s</span>  R<span>e</span>g</div>
        <div class="lien">
            <a href="{{ route('login') }}">Login</a>
        </div>
    </div>

    <form class="register" method="POST" action="{{ route('register') }}">
        <h2>Register</h2>
        @csrf
         <div class="left">
            <label for="">
                Nom: 
                <input type="text" name="name" placeholder="Nom" required> 
            </label>
        
            <label for="">
                Prenom:
                <input type="text" name="first_name" placeholder="Prénom" required> 
            </label>

            <label for="">
                Email: 
                <input type="email" name="email" placeholder="Email" required>
            </label>

            <label for="">
                Password: 
                <input type="password" name="password" placeholder="Mot de passe" required>
            </label>

            <label for="">
                Confirm:
                <input type="password" name="password_confirmation" placeholder="Confirmez le mot de passe" required>
            </label>
            </div>
        <button class="btn" type="submit">S'inscrire</button>


        

    </form>
</body>
</html>
