<x-app-layout>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>


<div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
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
                   <input type="text" id="searchInput" class="form-control" placeholder="Search events">
                   <div class="input-group-append">
                       <button id="searchButton" class="btn btn-primary">{{__('Search')}}</button>
                   </div>
               </div>
           </div>

           <div class="col-md-6">
               <div class="btn-group mb-3" role="group" aria-label="Calendar Actions">
                   <button id="exportButton" class="btn btn-success">{{__('Export Calendar')}}</button>
               </div>
               <div class="btn-group mb-3" role="group" aria-label="Calendar Actions">
                   <a href="{{ route('addEvent') }}" class="btn btn-success">{{__('Add')}}</a>
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

             // Deleting The Event
             eventContent: function(info) {
                 var eventTitle = info.event.title;
                 var eventElement = document.createElement('div');
                 eventElement.innerHTML = '<span style="cursor: pointer;">❌</span> ' + eventTitle;

                 eventElement.querySelector('span').addEventListener('click', function() {
                     if (confirm("Are you sure you want to delete this event?")) {
                         var eventId = info.event.id;
                         $.ajax({
                             method: 'get',
                             url: '/schedule/delete/' + eventId,
                             headers: {
                                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                             },
                             success: function(response) {
                                 console.log('Event deleted successfully.');
                                 calendar.refetchEvents(); // Refresh events after deletion
                             },
                             error: function(error) {
                                 console.error('Error deleting event:', error);
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
                         console.log('Event moved successfully.');
                     },
                     error: function(error) {
                         console.error('Error moving event:', error);
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
                         console.log('Event resized successfully.');
                     },
                     error: function(error) {
                         console.error('Error resizing event:', error);
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
        <div class="col-lg-8">
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

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Sales <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

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
                  <h5 class="card-title">Revenue <span>| This Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>$3,264</h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

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
                  <h5 class="card-title">Customers <span>| This Year</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Reports -->
            <div class="col-12">
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

                <div class="card-body">
                  <h5 class="card-title">Reports <span>/Today</span></h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'Sales',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'Revenue',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'Customers',
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
            <div class="col-12">
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
            </div><!-- End Recent Sales -->

           

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        

         

         

          

          

        

      </div>
    </section>
   

</x-app-layout>
