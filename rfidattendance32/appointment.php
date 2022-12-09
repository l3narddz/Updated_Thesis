
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/favicon.png">

    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>


    </script>
</head>
<body>
<?php include'header.php'; ?>
<!--  <div class="container">
  <h2>Make an Appointment</h2>
  <form>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email">
    </div>
    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="tel" class="form-control" id="phone">
    </div>
    <div class="form-group">
      <label for="appt-date">Appointment Date:</label>
      <input type="date" class="form-control" id="appt-date">
    </div>
    <div class="form-group">
      <label for="appt-time">Appointment Time:</label>
      <input type="time" class="form-control" id="appt-time">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
-->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#appointmentModal">
  Schedule Appointment
</button>
<!Modal
<div class="modal fade" id="appointmentModal" tabindex="-1" role="dialog" aria-labelledby="appointmentModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="appointmentModalLabel">Schedule Appointment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="appointmentDate">Date</label>
            <input type="date" class="form-control" id="appointmentDate">
          </div>
          <div class="form-group">
            <label for="appointmentTime">Time</label>
            <input type="time" class="form-control" id="appointmentTime">
          </div>
          <div class="form-group">
            <label for="appointmentReason">Reason for appointment</label>
            <textarea class="form-control" id="appointmentReason" rows="3"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
-->
<!-- HTML for the modal -->
<!-- HTML for the modal -->
<!-- Modal -->
<div class="modal fade" id="appointmentModal" tabindex="-1" role="dialog" aria-labelledby="appointmentModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="appointmentModalLabel">Make an Appointment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="appointmentDate">Date</label>
            <input type="date" class="form-control" id="appointmentDate" placeholder="Enter date">
          </div>
          <div class="form-group">
            <label for="appointmentTime">Time</label>
            <input type="time" class="form-control" id="appointmentTime" placeholder="Enter time">
          </div>
          <div class="form-group">
            <label for="appointmentType">Type of Appointment</label>
            <select class="form-control" id="appointmentType">
              <option>Annual Checkup</option>
              <option>Sick Visit</option>
              <option>Other</option>
            </select>
          </div>
          <div class="form-group">
            <label for="appointmentNotes">Notes</label>
            <textarea class="form-control" id="appointmentNotes" rows="3" placeholder="Enter any additional notes or details"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save Appointment</button>
      </div>
    </div>
  </div>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#appointmentModal">
  Make an Appointment
</button>
<!-- Optional CSS for styling -->
<style>
  .modal-dialog {
    max-width: 600px;
  }
</style>
