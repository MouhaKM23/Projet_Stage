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
            <a href="{{ route('profile') }}">profile</a>
        </div>
    </div>

    <form class="register" method="POST" action="{{ route('register') }}">
        <h2>Register</h2>
        @csrf
         

        <div class="right">
            <label for="">
                Phone:
                <input type="text" name="phone" placeholder="Téléphone" required>
            </label>

            <label for="">
                Address: 
                <input type="text" name="address" placeholder="Adresse" required>
            </label>

            <label for="">
                Class: 
                <input type="text" name="class" placeholder="Classe" required>
            </label>

            <label for="">      
                School:
                <select name="school" required>
                    <option value="ESP">EPS</option>
                    <option value="Rose Dieng Lab">Rose Dieng Lab</option>
                    <option value="DEFAR SCI">DEFAR SCI</option>
                    <option value="Bakeli">Bakeli</option>
                    <option value="Xarala">Xarala</option>
                </select>
            </label>
            
            <label for="">
                Domain:            
                <select name="domain" required>
                    <option value="Informatique">Informatique</option>
                    <option value="Réseau Télécom">Réseau Télécom</option>
                    <option value="Mécanique">Mécanique</option>
                    <option value="Electronique">Electronique</option>
                </select>
            </label>

            <label for="">
                Level: 
                <select name="level" required>
                    <option value="Bac + 1">Bac + 1</option>
                    <option value="Bac + 2">Bac + 2</option>
                    <option value="Bac + 3">Bac + 3</option>
                    <option value="Bac + 4">Bac + 4</option>
                    <option value="Bac + 5">Bac + 5</option>
                </select>
            </label>
        </div>

        

        <button class="btn" type="submit">S'inscrire</button>
    </form>
</body>
</html>
