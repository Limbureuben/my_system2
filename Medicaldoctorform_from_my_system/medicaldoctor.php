<?php
include("dbconnection.php");
session_start();

?>
<!doctype html>
<html lang="en">

<head>
    <title>Consultation</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="general.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php include("medicaldoctor12.php") ?>
    <div class="cont">
        <form action="medicaldetails.php" method="POST">
            <div class="row">
                <div class="col-25">
                    <label for="patientName">Patient Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="patientName" placeholder="Patient name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Disease</label>
                </div>
                <div class="col-75">
                    <input type="text" id="desease" name="Disease" placeholder="Enter disease..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="date">Date</label>
                </div>
                <div class="col-75">
                    <input type="date" id="date" name="Date">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Subject</label>
                </div>
                <div class="col-75">
                    <textarea id="subject" name="message" placeholder="Patient discriptions about desiese.." style="height:200px"></textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" name="submit" value="Submit">
            </div>
        </form>
    </div>

</body>

</html>


</form>
</div>
<!-- End Hero -->
</form>
</div>
<div class="col-md-6">
    <h2 id="services" class="text-center my-4"></h2>
    <ul id="consultations" class="list-group"></ul>
</div>
</div>
</div>


<script src="main.js"></script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>