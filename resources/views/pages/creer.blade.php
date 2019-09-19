<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Creer un compte</title>
    <link rel="stylesheet" href="{{ asset('css/w3/w3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/site/main.css') }}">
</head>
<body>
<div class="w3-display-container w3-margin"><!--sign up form-->
    <div class="w3-container" style="width: 50%">
    <form action="{{url('/register_user')}}" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-padding-32 w3-margin">
        <h2 class="w3-center w3-text-blue">Créer un compte</h2>
        <input type="hidden" name="_token" value="{{csrf_token()}}"><br>

        <input class="w3-input w3-border" type="text" placeholder="Nom" name="name" value="{{old('name')}}" required>
        <span class="text-danger">{{$errors->first('name')}}</span><br>

        <input class="w3-input w3-border" type="email" placeholder="Addresse Email" name="email" value="{{old('email')}}" required>
        <span class="text-danger">{{$errors->first('email')}}</span><br>

        <input class="w3-input w3-border" type="password" placeholder="Mot de passe" name="password" value="{{old('password')}}" required>
        <span class="text-danger">{{$errors->first('password')}}</span><br>

        <input class="w3-input w3-border" type="password" placeholder="Confirmer Mot de passe" name="password_confirmation" value="{{old('password_confirmation')}}" required>
        <span class="text-danger">{{$errors->first('password_confirmation')}}</span><hr>

        <button type="submit" class="w3-button w3-blue w3-border-purple">Créer</button>
    </form>
    </div>
</div><!--/sign up form-->
</body>
</html>
