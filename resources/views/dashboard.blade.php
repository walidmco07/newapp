<x-app-layout>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<div class="pagetitle">
      <h1>Dashboard</h1>
      
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
<!-- Website Traffic -->
<div class="card">
           

           <div class="card-body pb-0">
          
   <div class="container mt-5">
       {{-- For Search --}}
       <div class="row">
           <div class="col-md-6">
               <div class="input-group mb-3">
                   <input type="text" id="searchInput" class="form-control" placeholder="Rechercher des événements">
                   <div class="input-group-append">
                       <button id="searchButton" class="btn btn-primary">Chercher</button>
                   </div>
               </div>
           </div>

           <div class="col-md-6">
               <div class="btn-group mb-3" role="group" aria-label="Calendar Actions">
                   <button id="exportButton" class="btn btn-success">{{__('Export Calendar')}}</button>
               </div>
               <div class="btn-group mb-3" role="group" aria-label="Calendar Actions">
                   <a data-toggle="modal" data-target="#myModal" class="btn btn-success">Ajouter</a>
                   
               </div>

                <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ajouter un événement</h4>
          
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <style>
        form {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-top: 20px;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            margin-top: 20px;
            background-color: green;
            color: white;
        }
    </style>


    <form action="{{ URL('/create-schedule') }}" method="POST">
        @csrf
        <label for='title'>{{ __('title') }}</label>
        <input type='text' class='form-control' id='title' name='title'>

        <label for="start">{{__('Start')}}</label>
        <input type='date' class='form-control' id='start' name='start' required value='{{ now()->toDateString() }}'>

        <label for="end">{{__('End')}}</label>
        <input type='date' class='form-control' id='end' name='end' required value='{{ now()->toDateString() }}'>


        <label for="description">{{__('Description')}}</label>
        <textarea id="description" name="description"></textarea>

        <label for="color">{{__('Color')}}</label>
        <input type="color" id="color" name="color" />

        <input type="submit" value="Save" class="btn btn-success" />
    </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

           </div>
       </div>

       <div class="card">
           <div class="card-body">
               <div id="calendar" style="width: 100%;height:100vh"></div>

           </div>
       </div>
     </div>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>

     <script type="text/javascript">
         $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
         });

         var calendarEl = document.getElementById('calendar');
         var events = [];
         var calendar = new FullCalendar.Calendar(calendarEl, {
          
             headerToolbar: {
                 left: 'prev,next today',
                 center: 'title',
                 right: 'dayGridMonth,timeGridWeek,timeGridDay'
             },
             initialView: 'dayGridMonth',
             timeZone: 'UTC',
             events: '/events',
             editable: true,
             locale: 'fr',

             // Deleting The Event
             eventContent: function(info) {
                 var eventTitle = info.event.title;
                 var eventElement = document.createElement('div');
                 eventElement.innerHTML = '<span style="cursor: pointer;">❌</span> ' + eventTitle;

                 eventElement.querySelector('span').addEventListener('click', function() {
                     if (confirm("Êtes-vous sûr de vouloir supprimer cet événement ?")) {
                         var eventId = info.event.id;
                         $.ajax({
                             method: 'get',
                             url: '/schedule/delete/' + eventId,
                             headers: {
                                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                             },
                             success: function(response) {
                                 console.log('Événement supprimé avec succès.');
                                 calendar.refetchEvents(); // Refresh events after deletion
                             },
                             error: function(error) {
                                 console.error('Erreur lors de la suppression de l événement:', error);
                             }
                         });
                     }
                 });
                 return {
                     domNodes: [eventElement]
                 };
             },

             // Drag And Drop

             eventDrop: function(info) {
                 var eventId = info.event.id;
                 var newStartDate = info.event.start;
                 var newEndDate = info.event.end || newStartDate;
                 var newStartDateUTC = newStartDate.toISOString().slice(0, 10);
                 var newEndDateUTC = newEndDate.toISOString().slice(0, 10);

                 $.ajax({
                     method: 'post',
                     url: `/schedule/${eventId}`,
                     data: {
                         '_token': "{{ csrf_token() }}",
                         start_date: newStartDateUTC,
                         end_date: newEndDateUTC,
                     },
                     success: function() {
                         console.log('L événement a été déplacé avec succès.');
                     },
                     error: function(error) {
                         console.error('Erreur de déplacement de l événement :', error);
                     }
                 });
             },

             // Event Resizing
             eventResize: function(info) {
                 var eventId = info.event.id;
                 var newEndDate = info.event.end;
                 var newEndDateUTC = newEndDate.toISOString().slice(0, 10);

                 $.ajax({
                     method: 'post',
                     url: `/schedule/${eventId}/resize`,
                     headers: {
                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     },
                     data: {
                         end_date: newEndDateUTC
                     },
                     success: function() {
                         console.log('L événement a été redimensionné avec succès.');
                     },
                     error: function(error) {
                         console.error('Erreur lors du redimensionnement de l événement:', error);
                     }
                 });
             },
         });
         
         calendar.render();

         document.getElementById('searchButton').addEventListener('click', function() {
             var searchKeywords = document.getElementById('searchInput').value.toLowerCase();
             filterAndDisplayEvents(searchKeywords);
         });


         function filterAndDisplayEvents(searchKeywords) {
             $.ajax({
                 method: 'GET',
                 url: `/events/search?title=${searchKeywords}`,
                 success: function(response) {
                     calendar.removeAllEvents();
                     calendar.addEventSource(response);
                 },
                 error: function(error) {
                     console.error('Error searching events:', error);
                 }
             });
         }


         // Exporting Function
         document.getElementById('exportButton').addEventListener('click', function() {
             var events = calendar.getEvents().map(function(event) {
                 return {
                     title: event.title,
                     start: event.start ? event.start.toISOString() : null,
                     end: event.end ? event.end.toISOString() : null,
                     color: event.backgroundColor,
                 };
             });

             var wb = XLSX.utils.book_new();

             var ws = XLSX.utils.json_to_sheet(events);

             XLSX.utils.book_append_sheet(wb, ws, 'Events');

             var arrayBuffer = XLSX.write(wb, {
                 bookType: 'xlsx',
                 type: 'array'
             });

             var blob = new Blob([arrayBuffer], {
                 type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
             });

             var downloadLink = document.createElement('a');
             downloadLink.href = URL.createObjectURL(blob);
             downloadLink.download = 'events.xlsx';
             downloadLink.click();
         })
     </script>

         </div><!-- End Website Traffic -->
        <!-- Left side columns -->
        <div class="">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Aujourd'hui</a></li>
                    <li><a class="dropdown-item" href="#">Ce mois-ci</a></li>
                    <li><a class="dropdown-item" href="#">Cette année</a></li>
                  </ul>
                </div>

                <div class="card-body">
                <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

              <canvas id="myChart2" style="width:100%;max-width:600px"></canvas>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

              <canvas id="myChart3" style="width:100%;max-width:600px"></canvas>

              </div>

            </div><!-- End Customers Card -->


                </div>

              </div>
            </div><!-- End Reports -->

            

           

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        

         

         

          

          

        

      </div>
    </section>
    <script>
var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
var yValues = [55, 49, 44, 24, 15];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "World  Production 2018"
    }
  }
});

const xValues2 = [100,200,300,400,500,600,700,800,900,1000];

new Chart("myChart2", {
  type: "line",
  data: {
    labels: xValues2,
    datasets: [{ 
      data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
      borderColor: "red",
      fill: false
    }, { 
      data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
      borderColor: "green",
      fill: false
    }, { 
      data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
      borderColor: "blue",
      fill: false
    }]
  },
  options: {
    legend: {display: false}
  }
});
const xValues3 = [50,60,70,80,90,100,110,120,130,140,150];
const yValues3 = [7,8,8,9,9,9,10,11,14,14,15];

new Chart("myChart3", {
  type: "line",
  data: {
    labels: xValues3,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues3
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 6, max:16}}],
    }
  }
});

</script>

</x-app-layout>
