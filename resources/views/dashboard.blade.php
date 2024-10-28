<x-app-layout>
<style>
        body {
            background-color: #e5eeba;
        }
        #calendar {
            background-color: #ffffff;
            border: 1px solid #5e4e44;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .cardt {
            background-color: #f9f9f9;
        }
        .card-header {
            background: linear-gradient(to right, #097844, #7dbf4e);
            border-radius: 10px 10px 0 0;
            color: #ffffff;
        }
        .card-body {
            background-color: #ffffff;
        }
        .form-control {
            border-color: #b48b50;
        }
        .form-control:focus {
            border-color: #4c8b64;
            box-shadow: 0 0 5px rgba(77, 139, 100, 0.5);
        }
        .btn-primary {
            background-color: #097844;
            border-color: #4c8b64;
        }
        .btn-primary:hover {
            background-color: #7dbf4e;
            border-color: #4c8b64;
        }
        
        .btn-default {
            color: #5e4e44;
            border-color: #dbd18d;
        }
        

        .fc-today-button.btn {
            background-color: green; /* Default green background */
            color: white; /* Text color */
        }

        .fc-today-button.btn:hover {
    background-color: #7dbf4e; /* Darker shade on hover */
      }

  .fc-today-button.btn.fc-state-disabled {
    background-color: red; /* Red background for disabled state */
    color: white; /* Text color for readability */
  }

  .fc-dayGridMonth-button.active {
    background-color: #4c8b64; /* Red background when active */
    color: white; /* Text color */
  }

/* Optional: Change hover color when active */
  .fc-dayGridMonth-button.active:hover {
    background-color: #7dbf4e; /* Darker shade on hover */
  }




/* Active state for Semaine button */
  .fc-dayGridWeek-button.active {
    background-color: #4c8b64; /* Background color when active */
    color: white; /* Text color */
  }

/* Hover state for Semaine button when active */
  .fc-dayGridWeek-button.active:hover {
    background-color: #4c8b64; /* Same color on hover */
  }

/* Active state for Liste button */
  .fc-list-button.active {
    background-color: #4c8b64; /* Background color when active */
    color: white; /* Text color */
  }

/* Hover state for Liste button when active */
  .fc-list-button.active:hover {
    background-color: #4c8b64; /* Same color on hover */
  }

/* Change the background color of the event */
  .fc-daygrid-event {
    background-color: #ceaf67; /* Set the background color to green */
    color: white; /* Optional: Change text color to white for contrast */
  }

/* Optional: Change the color of the event title */
  .fc-event-title {
    color: white; /* Change the title color */
  }

/* Optional: Change the color of the event time */
  .fc-event-time {
    color: white; /* Change the time color */
  }
</style>


<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
      <li class="breadcrumb-item active">Tableau de bord</li>
    </ol>
  </nav>
</div><!-- End Page Title -->


  <!-- calendar -->
  <section class="section dashboard">
    <div class="row">
      <div class="col-lg-12">
    






<style>
    body {
        background-color: #e5eeba;
    }
    #calendar {
        background-color: #ffffff;
        border: 1px solid #5e4e44;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .cardt {
        background-color: #f9f9f9;
    }
    .card-header {
        background: linear-gradient(to right, #097844, #7dbf4e);
        border-radius: 10px 10px 0 0;
        color: #ffffff;
    }
    .card-body {
        background-color: #ffffff;
    }
    .form-control {
        border-color: #b48b50;
    }
    .form-control:focus {
        border-color: #4c8b64;
        box-shadow: 0 0 5px rgba(77, 139, 100, 0.5);
    }
    .btn-primary {
        background-color: #097844;
        border-color: #4c8b64;
    }
    .btn-primary:hover {
        background-color: #7dbf4e;
        border-color: #4c8b64;
    }
    
    .btn-default {
        color: #5e4e44;
        border-color: #dbd18d;
    }
    

    .fc-today-button.btn {
        background-color: green; /* Default green background */
        color: white; /* Text color */
    }

    .fc-today-button.btn:hover {
background-color: #7dbf4e; /* Darker shade on hover */
  }

.fc-today-button.btn.fc-state-disabled {
background-color: red; /* Red background for disabled state */
color: white; /* Text color for readability */
}

.fc-dayGridMonth-button.active {
background-color: #4c8b64; /* Red background when active */
color: white; /* Text color */
}

/* Optional: Change hover color when active */
.fc-dayGridMonth-button.active:hover {
background-color: #7dbf4e; /* Darker shade on hover */
}




/* Active state for Semaine button */
.fc-dayGridWeek-button.active {
background-color: #4c8b64; /* Background color when active */
color: white; /* Text color */
}

/* Hover state for Semaine button when active */
.fc-dayGridWeek-button.active:hover {
background-color: #4c8b64; /* Same color on hover */
}

/* Active state for Liste button */
.fc-list-button.active {
background-color: #4c8b64; /* Background color when active */
color: white; /* Text color */
}

/* Hover state for Liste button when active */
.fc-list-button.active:hover {
background-color: #4c8b64; /* Same color on hover */
}

/* Change the background color of the event */
.fc-daygrid-event {
background-color: #ceaf67; /* Set the background color to green */
color: white; /* Optional: Change text color to white for contrast */
}

/* Optional: Change the color of the event title */
.fc-event-title {
color: white; /* Change the title color */
}

/* Optional: Change the color of the event time */
.fc-event-time {
color: white; /* Change the time color */
}
</style>


<div class="container py-5" id="page-container">
    <div class="row">
        <div class="col-md-9">
            <div id="calendar">
                <!-- Calendar content goes here -->
            </div>
        </div>
        <div class="col-md-3" >
            <div class="cardt rounded-0 shadow">
                <div class="card-header" style="border-radius: 20px 20px 0px 0px;">
                    <h5 class="card-title" style="color:white;">Formulaire de planification</h5>
                </div>
                <div class="card-body">
                    <div class="container-fluid">
                        <form action="save_schedule.php" method="post" id="schedule-form">
                            <input type="hidden" name="id" value="">
                            <div class="form-group mb-2">
                                <label for="title" class="control-label">Evénement</label>
                                <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="description" class="control-label">Description</label>
                                <textarea rows="3" class="form-control form-control-sm rounded-0" name="description" id="description" required></textarea>
                            </div>
                            <div class="form-group mb-2">
                                <label for="start_datetime" class="control-label">Date de début</label>
                                <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="end_datetime" class="control-label">Date de fin</label>
                                <input type="datetime-local" class="form-control form-control-sm rounded-0" name="end_datetime" id="end_datetime" required>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> Sauvegarder</button>
                        <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Annuler</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

















<!-- Event Details Modal -->
<div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-0">
            <div class="modal-header rounded-0">
                <h5 class="modal-title">Les Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body rounded-0">
                <div class="container-fluid">
                    <dl>
                        <dt class="text-muted">Title</dt>
                        <dd id="title" class="fw-bold fs-4"></dd>
                        <dt class="text-muted">Description</dt>
                        <dd id="description" class=""></dd>
                        <dt class="text-muted">Date de début</dt>
                        <dd id="start" class=""></dd>
                        <dt class="text-muted">Date de fin</dt> 
                        <dd id="end" class=""></dd>
                    </dl>
                </div>
            </div>
            <div class="modal-footer rounded-0">
                <div class="text-end">
                    <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id="">Modifier</button>
                    <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Supprimer</button>
                    <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Event Details Modal -->
</div>

</body>
<script>
var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
</script>
<script src="js/script.js"></script>
      </div>
    </div>
  <section>

<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-12">
      <div class="row">

        <!-- Sales Card -->
        <div class="col-xxl-3 col-md-6">
          <div class="card info-card sales-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">aujourd'hui</a></li>
                <li><a class="dropdown-item" href="#">ce mois-ci</a></li>
                <li><a class="dropdown-item" href="#">Cette année</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">permission <span>| aujourd'hui</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6>145</h6>
                  <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">augmenter</span>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->

        <!-- Revenue Card -->
        <div class="col-xxl-3 col-md-6">
          <div class="card info-card revenue-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">aujourd'hui</a></li>
                <li><a class="dropdown-item" href="#">ce mois-ci</a></li>
                <li><a class="dropdown-item" href="#">Cette année</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Femelles <span>| ce mois-ci</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-gender-female"></i>
                </div>
                <div class="ps-3">
                  <h6>150</h6>
                  <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">augmenter</span>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Revenue Card -->

        <!-- Customers Card -->
        <div class="col-xxl-3 col-xl-6">

          <div class="card info-card customers-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">aujourd'hui</a></li>
                <li><a class="dropdown-item" href="#">ce mois-ci</a></li>
                <li><a class="dropdown-item" href="#">Cette année</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Mâle <span>| Cette année</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6>400</h6>
                  <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">diminuer</span>

                </div>
              </div>

            </div>
          </div>

        </div>
        <!-- End Customers Card -->

        <!-- Customers2 Card -->
        <div class="col-xxl-3 col-md-6">

          <div class="card info-card customers-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">aujourd'hui</a></li>
                <li><a class="dropdown-item" href="#">ce mois-ci</a></li>
                <li><a class="dropdown-item" href="#">Cette année</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Les Stagaire totla <span>| Cette année</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6>550</h6>
                  <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">diminuer</span>

                </div>
              </div>

            </div>
          </div>

        </div>            
        <!-- Reports -->
        <div class="col-12">
          <div class="card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">aujourd'hui</a></li>
                <li><a class="dropdown-item" href="#">ce mois-ci</a></li>
                <li><a class="dropdown-item" href="#">Cette année</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Reports <span>/aujourd'hui</span></h5>

              <!-- Line Chart -->
              <div id="reportsChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#reportsChart"), {
                    series: [{
                      name: 'permission',
                      data: [31, 40, 28, 51, 42, 82, 56],
                    }, {
                      name: 'absente',
                      data: [11, 32, 45, 32, 34, 52, 41]
                    }, {
                      name: 'malade',
                      data: [15, 11, 32, 18, 9, 24, 11]
                    }],
                    chart: {
                      height: 350,
                      type: 'area',
                      toolbar: {
                        show: false
                      },
                    },
                    markers: {
                      size: 4
                    },
                    colors: ['#4154f1', '#2eca6a', '#ff771d'],
                    fill: {
                      type: "gradient",
                      gradient: {
                        shadeIntensity: 1,
                        opacityFrom: 0.3,
                        opacityTo: 0.4,
                        stops: [0, 90, 100]
                      }
                    },
                    dataLabels: {
                      enabled: false
                    },
                    stroke: {
                      curve: 'smooth',
                      width: 2
                    },
                    xaxis: {
                      type: 'datetime',
                      categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                    },
                    tooltip: {
                      x: {
                        format: 'dd/MM/yy HH:mm'
                      },
                    }
                  }).render();
                });
              </script>
              <!-- End Line Chart -->

            </div>

          </div>
        </div><!-- End Reports -->

        <!-- Recent Sales -->
        <!-- <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Recent Sales <span>| Today</span></h5>

              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><a href="#">#2457</a></th>
                    <td>Brandon Jacob</td>
                    <td><a href="#" class="text-primary">At praesentium minu</a></td>
                    <td>$64</td>
                    <td><span class="badge bg-success">Approved</span></td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#">#2147</a></th>
                    <td>Bridie Kessler</td>
                    <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                    <td>$47</td>
                    <td><span class="badge bg-warning">Pending</span></td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#">#2049</a></th>
                    <td>Ashleigh Langosh</td>
                    <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                    <td>$147</td>
                    <td><span class="badge bg-success">Approved</span></td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#">#2644</a></th>
                    <td>Angus Grady</td>
                    <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                    <td>$67</td>
                    <td><span class="badge bg-danger">Rejected</span></td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#">#2644</a></th>
                    <td>Raheem Lehner</td>
                    <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                    <td>$165</td>
                    <td><span class="badge bg-success">Approved</span></td>
                  </tr>
                </tbody>
              </table>

            </div>

          </div>
        </div>End Recent Sales -->

        <!-- Top Selling -->
        

      </div>
    </div><!-- End Left side columns -->

    <!-- Right side columns -->
    <div class="col-lg-4">

      <!-- Recent Activity -->
    

      <!-- Budget Report -->
      
      

      <!-- Website Traffic -->
      <div class="card">
        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filter</h6>
            </li>

            <li><a class="dropdown-item" href="#">Today</a></li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
          </ul>
        </div>

        <div class="card-body pb-0">
          <h5 class="card-title">Website Traffic <span>| Today</span></h5>

          <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

          <script>
            document.addEventListener("DOMContentLoaded", () => {
              echarts.init(document.querySelector("#trafficChart")).setOption({
                tooltip: {
                  trigger: 'item'
                },
                legend: {
                  top: '5%',
                  left: 'center'
                },
                series: [{
                  name: 'Access From',
                  type: 'pie',
                  radius: ['40%', '70%'],
                  avoidLabelOverlap: false,
                  label: {
                    show: false,
                    position: 'center'
                  },
                  emphasis: {
                    label: {
                      show: true,
                      fontSize: '18',
                      fontWeight: 'bold'
                    }
                  },
                  labelLine: {
                    show: false
                  },
                  data: [{
                      value: 1048,
                      name: 'Search Engine'
                    },
                    {
                      value: 735,
                      name: 'Direct'
                    },
                    {
                      value: 580,
                      name: 'Email'
                    },
                    {
                      value: 484,
                      name: 'Union Ads'
                    },
                    {
                      value: 300,
                      name: 'Video Ads'
                    }
                  ]
                }]
              });
            });
          </script>

        </div>
      </div><!-- End Website Traffic -->

      <!-- News & Updates Traffic -->
     

    </div><!-- End Right side columns -->






    
  </div>
</section>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</x-app-layout>
