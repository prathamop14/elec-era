<!DOCTYPE html>
<html data-wf-domain="electronic-era-d58163.webflow.io" data-wf-page="660a380edcbe8e8216677e51"
    data-wf-site="660a380edcbe8e8216677e08" lang="en">
    
<head>
    <?php
    include('nav.php');
    ?>
</head>
<body>
<table class='product-table'>
      <thead>
        <tr>
          <th>Product</th>
          <th>Model</th>
          <th>Damage Type</th>
          <th>Cancel </th>
        </tr>
    </thead>
    <style>
 
.product-table {
  width: 80%;
  margin-top: 1%;
  margin-left: 10%;
  margin-right: 10% ;
  border-collapse: collapse;
}

.product-table th,
.product-table td {
  max-height: 3px;
  border: 1px solid black;
  text-align: center;
}

.product-table th {
  background-color: #f2f2f2;
}

.product-image {
  height: 10px;
  width: auto;
}

.product-name {
  font-size: 16px;
}
    </style>
    <h3 style="margin-left: 130px;">Your Repair Requests</h3>
    <?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "elec-era";
     $conn = new mysqli($servername, $username, $password, $dbname);
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }
    $sql='SELECT * FROM repair_req WHERE userid='.$_COOKIE['userid'].'';
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
         
    echo '    
    <tbody>
    <tr>
    <td>'.$row['product'].'</td>
    <td>'.$row['name'].'</td>
    <td>'.$row['damage'].'</td>
    <td><a id="cbtn" style="background:#ff9090a6; color:red; margin-inline-end: auto; margin-inline-start: auto; border-radius:0.5rem; padding-right: 1rem ; margin-top: 0.5rem; margin-bottom: 0.5rem; padding-left: 1rem ; width: fit-content !important;" href="remove.php?reqid='.$row['reqid'].'">Cancel Repair</a></td>
    </tr>';
        }
    }
    ?>
    </table>
    <?php
include('footer.php');
?>
<script>
  console.log(document.getElementById('cbtn'));
  document.getElementById('cbtn').addEventListener("click", ()=>
{
  alert("Requests Canceled");
})

  </script>
</body>
</html>

   
   
    