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
        <div class="log"> Student'<span>s</span>  R<span>e</span>g </div>
        <div class="lien">

            <a href="{{ route('profile') }}">profile</a>
            <a href="{{ route('survey1', ['user_id' => Auth::user()->id]) }}">sondage</a>
            <a href="{{ route('index') }}">list etudiant</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Se déconnecter</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </div>
    </div>

    <div class="block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita vel, placeat fugit, nobis dolore, iusto sapiente eveniet similique voluptates minus laboriosam fugiat libero magni facilis. Debitis accusantium saepe eaque qui!
    Fuga libero sapiente quia ducimus, exercitationem sunt. Aspernatur, perspiciatis velit. Esse quaerat unde alias placeat voluptatem beatae soluta quam molestias, optio mollitia ipsam natus possimus iste consequuntur autem quidem aliquid?</div>
    <div class="block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita vel, placeat fugit, nobis dolore, iusto sapiente eveniet similique voluptates minus laboriosam fugiat libero magni facilis. Debitis accusantium saepe eaque qui!
    Fuga libero sapiente quia ducimus, exercitationem sunt. Aspernatur, perspiciatis velit. Esse quaerat unde alias placeat voluptatem beatae soluta quam molestias, optio mollitia ipsam natus possimus iste consequuntur autem quidem aliquid?</div>
    <div class="block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita vel, placeat fugit, nobis dolore, iusto sapiente eveniet similique voluptates minus laboriosam fugiat libero magni facilis. Debitis accusantium saepe eaque qui!
    Fuga libero sapiente quia ducimus, exercitationem sunt. Aspernatur, perspiciatis velit. Esse quaerat unde alias placeat voluptatem beatae soluta quam molestias, optio mollitia ipsam natus possimus iste consequuntur autem quidem aliquid?</div>


</body>
</html>

