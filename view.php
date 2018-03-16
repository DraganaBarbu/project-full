<!DOCTYPE html>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body{
            background-image: url("images/image1.jpg");
        }
    </style>


</head>

<body>
  <div class="container" >
        <a href="home.php" class="btn btn-primary" type="button" style="float: right;margin-bottom: 10px" >Home</a>
    </div>

     <div class="container" style="margin-top: 20px;">
      <div class="row">
      <div class="col-md-12">
          <?php require_once 'actions/db_connect.php'; ?>
          
        
              <?php

              $sql = "SELECT * FROM owners where id>0;"
;

              $result = $connect->query($sql);

   
              if($result->num_rows > 0) {

                  while($row = $result->fetch_assoc()) {

                      echo "
                        <div class='col-md-2'>
                          <div class='thumbnail'>
                              <img src='".$row['image']."' width='150'>
                              <div class='caption'>
                                <p>".$row['name']."</p>
                                <p>".$row['lastname']."</p>
                                <p>".$row['phone']."</p>
                                <p>".$row['address']."</p>
                                </div>
                          </div>
                        </div>";

                  }

              } else {

                  echo "<center>No Data Avaliable</center>";

              }

              ?>;
          </div>
    </div>

    <div class="container">
      <a href="#" class="btn btn-primary" type="button" style="float: right;margin-bottom: 10px;">Go top<a>
    </div>


    <script type="text/javascript">
  $(document).ready(function(){
    $(".thumbnail").on("mouseover",function(){
      $(this).css("box-shadow","1px 1px 15px black");
    });
    $(".thumbnail").on("mouseout",function(){
      $(this).css("box-shadow","");
    })
  })
</script>

</body>

</html>