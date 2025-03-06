<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DataTables Example</title>
 
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/3.0.0/css/buttons.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>

<table id="example" class="display" style="width:100%">
  <thead>
      <tr>
          <th>Name</th>
          <th>Position</th>
          <th>Office</th>
          <th>Age</th>
          <th>Start date</th>
          <th>Salary</th>
      </tr>
  </thead>
  <tbody>
      <tr>
          <td>Tiger Nixon</td>
          <td>System Architect</td>
          <td>Edinburgh</td>
          <td>61</td>
          <td>2011/04/25</td>
          <td>$320,800</td>
      </tr>
      <tr>
          <td>Someone Something</td>
          <td>Driver</td>
          <td>Pitszville</td>
          <td>34</td>
          <td>2014/07/21</td>
          <td>$80,400</td>
      </tr>
      <!-- Add more rows as needed -->
  </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script> 
<script src="https://cdn.datatables.net/buttons/3.0.0/js/dataTables.buttons.js"></script> 
<script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.dataTables.js"></script> 
<script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.print.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> 
<script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script> 

<script>
  $(document).ready(function() {
      new DataTable('#example', {
        layout: {
            topStart: {
                buttons: ['print']
            }
        }
    });
  });
</script>

</body>
</html>
