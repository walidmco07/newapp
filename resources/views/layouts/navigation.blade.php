<link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->

  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="./fullcalendar/lib/main.min.css">
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- <script src="./js/bootstrap.min.js"></script> -->
    <script src="./fullcalendar/lib/main.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="./js/script.js"></script>
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <style>
        :root {
            --bs-success-rgb: 71, 222, 152 !important;
        }
 
        html,
        body {
            background-image: url(images/zelige.jpg);
            background-size: cover;
            background-position: center;
            height: 100%;
            width: 100%;
        }
 
        .btn-info.text-light:hover,
        .btn-info.text-light:focus {
            background: #000;
        }
        table, tbody, td, tfoot, th, thead, tr {
            border-color: #ededed !important;
            border-style: solid;
            border-width: 1px !important;
        }

        
        /* Change color for the "Aujourd’hui" button */
        .fc-today-button {
            background-color: #007bff; /* Bootstrap primary color */
            color: white; /* Text color */
        }

        .fc-today-button:hover {
            background-color: #0056b3; /* Darker shade for hover effect */
        }
    
    </style>
  <body>

<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
        <img src="images/Logo.png" alt="Ecole Royale du Matériel" style="width: 90px;">
        <span class="d-none d-lg-block">Ecole Royale du Matériel</span>
      </a>
      <i id ="buttonsidebar"class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

   

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
    
        <li class="nav-item pe-3">
          <span id="currentDateTime" class="me-2 d-none d-md-block"></span>
        </li>
    
        <!-- <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Y.Rachdi</span>
          </a>
    
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Youssef Rachdi</h6>
              <span>Admin</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
    
            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Mon Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
    
            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Parametre du compte</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
    
            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Besoin d'aide ?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
    
            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-login.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Se Deconnecter</span>
              </a>
            </li>
          </ul>
        </li> -->
        <!-- End Profile Nav -->
    
        
        <li class="nav-item dropdown pe-3">
  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
    <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
    <span class="d-none d-md-block dropdown-toggle ps-2">Y.Rachdi</span>
  </a>
  
  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
    <li class="dropdown-header">
      <h6>Youssef Rachdi</h6>
      <span>Admin</span>
    </li>
    <li><hr class="dropdown-divider"></li>
    
    <li>
      <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
        <i class="bi bi-person"></i>
        <span>Mon Profil</span>
      </a>
    </li>
    <li><hr class="dropdown-divider"></li>
    
    <li>
      <a class="dropdown-item d-flex align-items-center" href="account-settings.html">
        <i class="bi bi-gear"></i>
        <span>Paramètres du Compte</span>
      </a>
    </li>
    <li><hr class="dropdown-divider"></li>
    
    <li>
      <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
        <i class="bi bi-question-circle"></i>
        <span>Besoin d'aide ?</span>
      </a>
    </li>
    <li><hr class="dropdown-divider"></li>
    
    <li>
      <a class="dropdown-item d-flex align-items-center" href="pages-login.php">
        <i class="bi bi-box-arrow-right"></i>
        <span>Se Déconnecter</span>
      </a>
    </li>
  </ul>
</li>




      </ul>
    </nav>
    
    <script>
      function updateDateTime() {
        const now = new Date();
        const options = { year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: true };
        const dateTimeString = now.toLocaleString('fr', options);
        document.getElementById('currentDateTime').textContent = dateTimeString;
      }
    
      // Update the date and time every second
      setInterval(updateDateTime, 1000);
      // Initial call to display immediately
      updateDateTime();
    </script>
    
    <script>
  $(document).ready(function() {
    $('.toggle-sidebar-btn').on('click', function() {
      $('#sidebar').toggleClass('collapsed');
    });
  });
</script>
    <style>
      /* Ensure the date and time fits well in the nav */
      #currentDateTime {
        font-size: 0.9rem; /* Adjust font size for better visibility */
        white-space: nowrap; /* Prevent line breaks */
      }
    
      @media (max-width: 768px) {
        #currentDateTime {
          display: none; /* Hide on smaller screens for better layout */
        }
      }



      .sidebar.collapsed {
  width: 60px; /* Adjust as needed */
}

    </style>
    
    <!-- End Icons Navigation -->

  </header>
  <aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
    
    <li class="nav-item">
      <a class="nav-link" href="index.html">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#administration-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i>
        <span>Administration</span>
        <i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="administration-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <a href="administration-user-management.html">
            <i class="bi bi-circle"></i>
            <span>Secrétariat</span>
          </a>
        </li>
        <li>
          <a href="administration-settings.html">
            <i class="bi bi-circle"></i>
            <span>Services Effectifs</span>
          </a>
        </li>
        <li>
          <a href="administration-reports.html">
            <i class="bi bi-circle"></i>
            <span>Service Matériels</span>
          </a>
        </li>
      </ul>
    </li><!-- End Administration Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#ccs-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i>
        <span>CCS</span>
        <i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="ccs-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <a href="ccs-overview.html">
            <i class="bi bi-circle"></i>
            <span>Aperçu</span>
          </a>
        </li>
        <li>
          <a href="ccs-features.html">
            <i class="bi bi-circle"></i>
            <span>Rapports</span>
          </a>
        </li>
      </ul>
    </li><!-- End CCS Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#groupment-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-people"></i>
        <span>Groupement Soutien</span>
        <i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="groupment-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <a href="groupment-details.html">
            <i class="bi bi-circle"></i>
            <span>Détails</span>
          </a>
        </li>
        <li>
          <a href="groupment-management.html">
            <i class="bi bi-circle"></i>
            <span>Gestion</span>
          </a>
        </li>
      </ul>
    </li><!-- End Groupment Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#soutien-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-life-preserver"></i>
        <span>Soutien</span>
        <i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="soutien-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <a href="soutien-contact.html">
            <i class="bi bi-circle"></i>
            <span>Contact</span>
          </a>
        </li>
        <li>
          <a href="soutien-resources.html">
            <i class="bi bi-circle"></i>
            <span>Ressources</span>
          </a>
        </li>
      </ul>
    </li><!-- End Soutien Nav -->

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
      <a class="nav-link" href="users-profile.html">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
      <a class="nav-link" href="pages-register.html">
        <i class="bi bi-card-list"></i>
        <span>Register</span>
      </a>
    </li><!-- End Register Page Nav -->

    <li class="nav-item">
      <a class="nav-link" href="pages-login.php">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Login</span>
      </a>
    </li><!-- End Login Page Nav -->

  </ul>
</aside>
    </body>