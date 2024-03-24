<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="inscription.css">
    <title>Document</title>
</head>

<body>
    <img src="{{ asset('logo.svg') }}" alt="Logo"> 
    <div class="container" id="container">
        
        <div class="form-container sign-up">
            <form action="createnew" method="POST">
                @csrf
                <h1>S’inscrire</h1>
                <p>C’est rapide et facile.</p>
                <input name="nom_ecole" type="text" placeholder="Nom d'école">
                <input name="nom_directeur" type="text" placeholder="Nom complet de directeur">
                <input name="email" type="email" placeholder="Adresse email">
                <input name="password" type="password" placeholder="Mot de passe">
                <input name="confrimation_password" type="password" placeholder="Confirmer le mot de passe">
                <button>s'inscrire</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form>
                <h1>Bienvenue</h1>
                <input type="email" placeholder="Login">
                <input type="password" placeholder="Mot de passe">
                <a href="#">Mot de passe oublié?</a>
                <button>Connexion</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bonjour!</h1>
                    <p>Un système d'information intégré qui permet la mise en place de nouvelles méthodes de gestion scolaire.</p>
                    <button class="hidden" id="login">se connecter</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Bonjour!</h1>
                    <p>Un système d'information intégré qui permet la mise en place de nouvelles méthodes de gestion scolaire.</p>
                    <button class="hidden" id="register">Créer compte pour mon école</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const container = document.getElementById('container');
        const registerBtn = document.getElementById('register');
        const loginBtn = document.getElementById('login');

        registerBtn.addEventListener('click', () => {
            container.classList.add("active");
        });

        loginBtn.addEventListener('click', () => {
            container.classList.remove("active");
        });
    </script>
</body>

</html>
