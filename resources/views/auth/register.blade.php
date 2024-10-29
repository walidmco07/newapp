

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register - Ecole Royale du Matériel</title>
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    body {
      background-image: url(images/zellige.jpg);
      background-size: cover;
      background-position: center;
      font-family: 'Open Sans', sans-serif;
    }
  </style>
</head>

<body>




  <main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4" style="background-color: rgba(255, 255, 255, 0.9);">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="" class="logo d-flex align-items-center w-auto">
                  <img src="images/Logo.png" alt="Logo">
                  <span class="d-none d-lg-block">Ecole Royale du Matériel</span>
                </a>
              </div>

              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4" style="color: #097844;">Créer un Compte</h5>
                    <p class="text-center small">Entrez vos informations personnelles pour créer un compte</p>
                  </div>

                  <form method="POST" action="{{ route('register') }}" class="row g-3 needs-validation" novalidate>
                  @csrf
                    <div class="col-12">
                      <label for="yourName" class="form-label" style="color: #4c8b64;">Votre Nom</label>
                      <input id="name"  type="text" name="name" :value="old('name')" required autofocus class="form-control">
                      <div class="invalid-feedback">Veuillez entrer votre nom !</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label" style="color: #4c8b64;">Votre Email</label>
                      <input  id="email"  type="email" name="email" :value="old('email')" required class="form-control" >
                      <div class="invalid-feedback">Veuillez entrer une adresse email valide !</div>
                    </div>

                    

                    <div class="col-12">
                      <label for="yourPassword" class="form-label" style="color: #4c8b64;">Mot de passe</label>
                      <input id="password" type="password" name="password" required autocomplete="new-password" class="form-control">
                      <div class="invalid-feedback">Veuillez entrer votre mot de passe !</div>
                    </div>
                    <div class="col-12">
                      <label for="yourPassword" class="form-label" style="color: #4c8b64;">Confirmer mot de passe</label>
                      <input id="password_confirmation" type="password" name="password_confirmation" required class="form-control">
                      <div class="invalid-feedback">Veuillez veriffier votre mot de passe !</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">J'accepte les <a href="#">termes et conditions</a></label>
                        <div class="invalid-feedback">Vous devez accepter avant de soumettre.</div>
                      </div>
                    </div>
                    
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" style="background-color: #097844; border: none;">Créer un Compte</button>
                    </div>
                    <div class="col-12 text-center">
                      <p class="small mb-0">Vous avez déjà un compte ? <a href="{{ route('login') }}">Connectez-vous</a></p>
                    </div>
                  </form>
                </div>
              </div>

              <div class="footer-text" style="text-align: center; color: #5e4e44;">
                <p>&copy; 2024 Ecole Royale du Matériel. Tous droits réservés.</p>
              </div>

            </div>
          </div>
        </div>
      </section>
    </div>
  </main>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>

</body>
</html>
