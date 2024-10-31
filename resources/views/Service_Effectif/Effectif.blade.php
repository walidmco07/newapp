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

<div class="container mt-5">
      <div class="d-flex justify-content-between mb-3">
        <div>
            <input type="text" class="form-control" placeholder="Search..." style="width: 300px;">
        </div>
        <div>
          <button type="button" class="btn btn-primary btn-custom" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">
            <i class="fas fa-user-plus"></i> 
            Add Organique
          </button>

            <button type="button" class="btn btn-success btn-custom" onclick="document.getElementById('fileUpload').click();">
                <i class="fas fa-file-upload"></i> Upload Excel
            </button>
            <input type="file" id="fileUpload" style="display: none;" onchange="handleFileUpload(event)">
            <button type="button" class="btn btn-secondary btn-custom">
                <i class="fas fa-file-download"></i> Download
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
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#detailsModal">
                            <i class="fas fa-info-circle"></i> Details
                        </button>
                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal">
                                <i class="fas fa-trash-alt"></i> Delete
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
   
    <!-- Details Modal -->

    <div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailsModalLabel">Employee Details</h5>
                </div>
                <div class="modal-body">
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <th>N°</th>
                            <td>1</td>
                        </tr>
                        <tr>
                            <th>Prénoms</th>
                            <td>John</td>
                        </tr>
                        <tr>
                            <th>Noms</th>
                            <td>Doe</td>
                        </tr>
                        <tr>
                            <th>GDES</th>
                            <td>G1</td>
                        </tr>
                        <tr>
                            <th>MLES</th>
                            <td>M1</td>
                        </tr>
                        <tr>
                            <th>D.NAISS</th>
                            <td>01/01/1990</td>
                        </tr>
                        <tr>
                            <th>N°CIN</th>
                            <td>CIN123456</td>
                        </tr>
                        <tr>
                            <th>S.F</th>
                            <td>M</td>
                        </tr>
                        <tr>
                            <th>N.E</th>
                            <td>10</td>
                        </tr>
                        <tr>
                            <th>T.I%</th>
                            <td>85%</td>
                        </tr>
                        <tr>
                            <th>DIP.MIL</th>
                            <td>Bachelor</td>
                        </tr>
                        <tr>
                            <th>SPECIALITES</th>
                            <td>Software Engineering</td>
                        </tr>
                        <tr>
                            <th>DIP.SCOL.</th>
                            <td>High School</td>
                        </tr>
                        <tr>
                            <th>EMPLOI TENU</th>
                            <td>Software Engineer</td>
                        </tr>
                        <tr>
                            <th>POSITION</th>
                            <td>Senior</td>
                        </tr>
                        <tr>
                            <th>UNITE</th>
                            <td>erm</td>
                        </tr>

                        <tr>
                            <th>S.F</th>
                            <td>M</td>
                        </tr>

                        <tr>
                            <th>PROVINCE</th>
                            <td>??</td>
                        </tr>
                        
                        <tr>
                            <th>FONCTION CONTINGENT</th>
                            <td>???</td>
                        </tr>
                        
                        <tr>
                        <th>APARTENANCE</th>
                        <td>???</td>

                        </tr>
                        <tr>
                        <th>ADRESSE</th>
                        <td>benslimane</td>
                        </tr>

                        <tr>
                        <th>GROUPE SANGUIN</th>
                        <td>O+</td>
                        </tr>

                        <tr>
                        <th>IDSPA</th>
                        <td>???</td>
                        </tr>

                        <tr>
                        <th>SSP</th>
                        <td>INF</td>
                        </tr>

                        <tr>
                        <th>LIEU NAISS</th>
                        <td>rabat</td>
                        </tr>
                    </tbody>
                </table>
            </div>
                <div class="modal-footer">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            </div>
        </div>
    </div>



    
<!-- Add Modal -->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addForm">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="number" class="form-label">N°</label>
              <input type="text" class="form-control" id="number" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="firstName" class="form-label">Prénoms</label>
              <input type="text" class="form-control" id="firstName" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="lastName" class="form-label">Noms</label>
              <input type="text" class="form-control" id="lastName" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="gdes" class="form-label">GDES</label>
              <input type="text" class="form-control" id="gdes" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="mles" class="form-label">MLES</label>
              <input type="text" class="form-control" id="mles" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="birthDate" class="form-label">D.NAISS</label>
              <input type="date" class="form-control" id="birthDate" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="cin" class="form-label">N°CIN</label>
              <input type="text" class="form-control" id="cin" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="sf" class="form-label">S.F</label>
              <input type="text" class="form-control" id="sf" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="ne" class="form-label">N.E</label>
              <input type="text" class="form-control" id="ne" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="ti" class="form-label">T.I%</label>
              <input type="text" class="form-control" id="ti" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="diplomaMil" class="form-label">DIP.MIL</label>
              <input type="text" class="form-control" id="diplomaMil" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="specialties" class="form-label">SPECIALITES</label>
              <input type="text" class="form-control" id="specialties" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="diplomaSchool" class="form-label">DIP.SCOL.</label>
              <input type="text" class="form-control" id="diplomaSchool" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="employment" class="form-label">EMPLOI TENU</label>
              <input type="text" class="form-control" id="employment" required>
            </div>
          </div>
          <div class="mb-3">
            <label for="position" class="form-label">POSITION</label>
            <input type="text" class="form-control" id="position" required>
          </div>
          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>



    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Employee</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                        <div class="mb-3">
                            <label for="editFirstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="editFirstName" required>
                        </div>
                        <div class="mb-3">
                            <label for="editLastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="editLastName" required>
                        </div>
                        <div class="mb-3">
                            <label for="editPosition" class="form-label">Position</label>
                            <input type="text" class="form-control" id="editPosition" required>
                        </div>
                        <div class="mb-3">
                            <label for="editTitle" class="form-label">Title</label>
                            <input type="text" class="form-control" id="editTitle" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                  <button  aria-hidden="true" type="button" class="close" data-dismiss="modal" aria-label="Close">
                   cancel
                </button>                    
                <button type="button" class="btn btn-primary" onclick="confirmEdit()">Confirm Edit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Confirmation</h5>
                </div>
                <div class="modal-body" id="deleteMessage">
                    <!-- Delete confirmation message -->
                </div>
                <div class="modal-footer">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                    <button type="button" class="btn btn-danger" onclick="confirmDelete()">Confirm Delete</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function viewDetails(name, title, position) {
            const details = `
                <p><strong>Name:</strong> ${name}</p>
                <p><strong>Title:</strong> ${title}</p>
                <p><strong>Position:</strong> ${position}</p>
            `;
            document.getElementById('detailsModalBody').innerHTML = details;
            $('#detailsModal').modal('show');
        }

        function showEditModal(firstName, lastName, title, position) {
            document.getElementById('editFirstName').value = firstName;
            document.getElementById('editLastName').value = lastName;
            document.getElementById('editTitle').value = title;
            document.getElementById('editPosition').value = position;
            $('#editModal').modal('show');
        }

        function showDeleteModal(name) {
            document.getElementById('deleteMessage').textContent = `Are you sure you want to delete ${name}?`;
            $('#deleteModal').modal('show');
        }

        function confirmEdit() {
            alert("Edit confirmed.");
            $('#editModal').modal('hide');
        }

        function confirmDelete() {
            alert("Employee has been deleted.");
            $('#deleteModal').modal('hide');
        }
        



        function addEmployee() {
            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const position = document.getElementById('position').value;
            const title = document.getElementById('title').value;

            // Simulate adding an employee
            alert(`New employee added: ${firstName} ${lastName}, Position: ${position}, Title: ${title}`);
            $('#addModal').modal('hide');
        }

        function handleFileUpload(event) {
            const file = event.target.files[0];
            if (file) {
                alert(`File uploaded: ${file.name}`);
            }
        }
    </script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</x-app-layout>