<x-app-layout>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<style>
        .action-buttons {
            display: flex;
            gap: 0.5rem;
        }
        .table {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        thead th {
            background-color: #007bff;
            color: white;
        }
        tbody tr:hover {
            background-color: #f1f1f1;
        }
        .container{
            max-width: 1676px;
        }
    </style>
<div class="pagetitle">
      <h1>Demande de stage</h1>
      
    </div>
 <h2 class="text-center">
            Trouver un organique
        </h2>
    <div class="container mt-5">
       
            <div class="d-flex mb-3 justify-content-center">
                        <div>
                        
                            <input type="text" id="chercher" class="form-control" placeholder="chercher..." style="width: 300px;">
                        </div>
                <div>
                    <button type="button" class="btn btn-primary btn-custom" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">
                    <i class="fa fa-search" aria-hidden="true"></i> 
                        chercher
                    </button>
                </div>
            </div>
            <table class="table align-middle mb-0">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>PRENOMS</th>
                    <th>NOMS</th>
                    <th>GDES</th>
                    <th>MLES</th>
                    <th>D.NAISS</th>
                    <th>N°CIN</th>
                    <th>N.E</th>
                    <th>T.I%</th>
                    <th>DIP.MIL</th>
                    <th>SPECIALITES</th>
                    <th>DIP.SCOL.</th>
                    <th>EMPLOI TENU</th>
                    <th>POSITION</th>
                    <th>PROMOTION</th>
                    <th>SEXE</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>G1</td>
                    <td>M1</td>
                    <td>01/01/1990</td>
                    <td>CIN123456</td>
                    <td>10</td>
                    <td>85%</td>
                    <td>Bachelor</td>
                    <td>Software Engineering</td>
                    <td>High School</td>
                    <td>Software Engineer</td>
                    <td>Senior</td>
                    <td>2024</td>
                    <td>homme</td>
                    <td>
                        <div class="action-buttons">
                        
                            <button id="print" type="button" class="btn btn-success btn-sm">
                                <i class="fas fa-download"></i> Imprimer
                            </button>
                            
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
            
    </div>
 
    <script>
document.getElementById('print').addEventListener('click', function() {
    var print = window.open();
    print.location.href="{{route('pdf_stage')}}";
    print.onload=function(){
        print.print();
      
    };
});


</script>
</x-app-layout>