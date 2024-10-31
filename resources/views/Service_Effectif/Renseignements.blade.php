<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche De Renseignements</title>
    <style>
        * {
            box-sizing: border-box;
        }

        /* Create three equal columns that float next to each other */
        .column {
            float: left;
            width: 33.33%;
            padding: 10px;
            height: 600px; /* Should be removed. Only for demonstration */
            position: relative;
        }

        /* Add vertical line */
        .column:not(:last-child) {
            border-right: 2px solid #000; /* Adjust color and thickness as needed */
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Optional: Add some styling for responsiveness */
        @media (max-width: 600px) {
            .column {
                width: 100%; /* Stack columns on small screens */
                border-right: none; /* Remove the right border for stacked view */
            }
        }
        .square{
            width: 90px;
            height:120px; 
            border: #000 solid 2px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: small;
        }
        .Arm p{
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: small;
            width: 70%;
        }
        .rectangle {
            height: 35px;
            width: 200px;
            border: #000 1px solid;
        }
        .rectangle2 {
            height: 35px;
            width: 200px;
            border: #000 1px solid;
        }

    </style>
</head>
<body>
<div id="photo">
    <div class="square">
        <p>PHOTO</p>
    </div>
</div>
<h2 style="display: flex; align-items: center; justify-content: center;">Fiche De Renseignements</h2>

<div class="row">
    <div class="column" style="background-color:#aaa;">
        <strong>ID:</strong> <br>
        <strong>PRENOMS:</strong><br>
        <strong>NOMS:</strong> <br>
        <strong>GDES:</strong> <br>
        <strong>MLES:</strong> <br>
        <strong>D.NAISS:</strong><br>
        <strong>N°CIN:</strong> <br>
        <strong>N.E:</strong> <br>
        <strong>T.I%:</strong> <br>
        <strong>DIP.MIL:</strong><br>
        <strong>SPECIALITES:</strong> <br>
        <strong>DIP.SCOL.:</strong> <br>
        <strong>EMPLOI TENU:</strong> <br>
        <strong>POSITION:</strong><br>
        <strong>PROMOTION:</strong> <br>
        <strong>SEXE:</strong><br>
    </div>

    <div class="column" style="background-color:#bbb;">
       
       <div id="check" style="padding-top: 100px;">

        DU...............      AU...............
        DU...............      AU...............

        <br><label for="vehicle1"> OUI</label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <label for="vehicle2"> NON</label> <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">


       </div>


        <div id="othercheck" style="padding-top: 100px;">
            <br><label for="vehicle1"> OUI</label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        
            <label for="vehicle2"> NON</label> <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
        </div>
    </div>


    <div class="column" style="background-color:#ccc;">
        <strong>ID:</strong> <br>
        <strong>PRENOMS:</strong> <br>
        <strong>NOMS:</strong> <br>
        <strong>GDES:</strong> <br>
        <strong>MLES:</strong> <br>
        <strong>D.NAISS:</strong> <br>
        <strong>N°CIN:</strong> <br>
        <strong>N.E:</strong> <br>
        <strong>T.I%:</strong> <br>
        <strong>DIP.MIL:</strong> <br>
        <strong>SPECIALITES:</strong> <br>
        <strong>DIP.SCOL.:</strong> <br>
        <strong>EMPLOI TENU:</strong><br>
        <strong>POSITION:</strong> <br>
        <strong>PROMOTION:</strong> <br>
        <strong>SEXE:</strong> <br>
    </div>

    
</div>


<div class="Arm">
    <p>-ARME OU SERVICE D'APPARTENANCE : -INF-BLINDE-ART-TRAIN-GENIE-<strong>-MAT</strong>-INT-TRANS-SANTE-CAVALERIE-CHENIL-SCE SOCIAL-GEND RLE-FRA-MARINE RLE</p>
</div>
<div class="footer">
    <p>JE DECLARE TITULAIRE DE PASSEPORT :</p> <br>
    <div class="rectangle3" style="display: inline; display: flex;">
        <div class="rectangle"></div> <div class="rectangle" style="margin-left: 100px;"></div>
    </div>
</div>

<script>
    
    window.onload = function() {
        window.print();
    };
</script>


</body>
</html>

