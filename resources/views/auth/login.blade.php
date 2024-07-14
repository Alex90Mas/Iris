<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <h1>Login</h1>
    <form action="/login" method="post" class="form-login">
        @csrf
        @error('email')
            <p class="error-message">E-mail ou mot de passe invalide</p>
        @enderror
        <input type="email" name="email" id="email" placeholder="E-mail" class="@error('email') invalid @enderror" value="{{ old('email') }}" required />
        <input type="password" name="password" id="password" placeholder="Mot de passe" class="@error('email') invalid @enderror" required />
        <input type="submit" value="Se connecter" />
    </form>
  </body>
</html>