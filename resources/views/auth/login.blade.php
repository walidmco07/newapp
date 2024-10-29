


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    body {
      background-image: url(images/zellige.jpg);
      background-size: cover;
      background-position: center;
      font-family: 'Open Sans', sans-serif;
    }

    .logo img {
      max-width: 90px;
    }

    .card {
      background-color: #ffffff;
      border: none;
      border-radius: 8px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .card-title {
      color: #097844;
    }

    .form-control {
      border: 1px solid #dbd18d;
    }

    .form-control:focus {
      border-color: #7dbf4e;
      box-shadow: 0 0 5px rgba(125, 191, 78, 0.5);
    }

    .btn-primary {
      background-color: #097844;
      border: none;
    }

    .btn-primary:hover {
      background-color: #5e4e44;
    }

    .form-label {
      color: #4c8b64;
    }

    .invalid-feedback {
      font-size: 0.9rem;
    }

    /* Additional styles for visual appeal */
    .section {
      background-color: rgba(255, 255, 255, 0.9); /* Light background for contrast */
      border-radius: 10px;
      padding: 20px;
    }

    .footer-text {
      text-align: center;
      margin-top: 20px;
      color: #5e4e44;
    }

    #currentDateTime {
      font-size: 0.9rem;
      white-space: nowrap;
    }
  </style>
</head>

<body id="bodylogin">
  
  <main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="d-flex justify-content-center py-4">
                <a href="" class="logo d-flex align-items-center w-auto">
                  <img src="images/Logo.png" alt="">
                  <span class="d-none d-lg-block">Ecole Royale du Matériel</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Connectez-vous à votre compte</h5>
                    <p class="text-center small">Entrez votre nom d'utilisateur et votre mot de passe pour vous connecter</p>
                  </div>

                  <form method="POST" action="{{ route('login') }}" class="row g-3 needs-validation" >
                  @csrf
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Nom d'utilisateur</label>
                      <div class="input-group has-validation">
                        <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                        <input id="email"  type="email" name="email" :value="old('email')" required autofocus  class="form-control" >
                        <div class="invalid-feedback">Veuillez entrer votre nom d'utilisateur.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Mot de passe</label>
                      <input id="password"  type="password" name="password" required autocomplete="current-password" class="form-control" >
                      <div class="invalid-feedback">Veuillez entrer votre mot de passe!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Souvenez-vous de moi</label>
                      </div>
                    </div>
                    @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Connectez-vous</button>
                    </div>
                    <div class="col-12 text-center">
                      <p class="small mb-0"> <a href="{{ route('register') }}">Crée un compte</a></p>
                    </div>
                  </form>
                </div>
              </div>

              <div class="footer-text">
                <p>&copy; 2024 Ecole Royale du Matériel. Tous droits réservés.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    function updateDateTime() {
      const now = new Date();
      const options = { year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: true };
      const dateTimeString = now.toLocaleString('fr', options);
      document.getElementById('currentDateTime').textContent = dateTimeString;
    }

    setInterval(updateDateTime, 1000);
    updateDateTime();
  </script>
</body>

</html>
