<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Sondage #1</title>
    @vite('resources/css/app.css')

</head>
<body>
    <div class="h">
        <div class="log"> Student'<span>s</span>  R<span>e</span>g</div>
        <div class="lien">
            <a href="{{ route('profile') }}">Profile</a>
        </div>
    </div>
    <form class="survey1" method="POST" action="{{ route('survey1') }}">

        @csrf
        <label>Confirmez-vous votre intérêt pour ce stage ?</label><br>

        <input type="radio" name="interest_confirmation" value="1" required> Oui<br>
        <input type="radio" name="interest_confirmation" value="0" required> Non, merci<br>


        <br>
        <label>Classez les domaines de stage par ordre de préférence :</label><br>

        <select class="select" name="choice1" required>
            <option value="Web">Web</option>
            <option value="Mobile">Mobile</option>
            <option value="IOT">IOT</option>
        </select>

        <select class="select" name="choice2" required>
            <option value="Web">Web</option>
            <option value="Mobile">Mobile</option>
            <option value="IOT">IOT</option>
        </select>

        <select class="select" name="choice3" required>
            <option value="Web">Web</option>
            <option value="Mobile">Mobile</option>
            <option value="IOT">IOT</option>
        </select>
        <button type="submit">Soumettre</button>
    </form>
</body>
</html>
