<!DOCTYPE html>
<html>
<head>
  <title>Rents</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <style type="text/css">

  .btn{
    color: black;
  }
  body{
              
background-image: url('images/image1.jpg');
              background-repeat: no-repeat;
              background-position: center;
              background-attachment: fixed; 
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

     <?php 

  require_once 'db_connect.php';


            $sql = "SELECT * FROM renters";

            $result = $conn->query($sql);

 
            echo "<div class='row'>";    
            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

                    echo "
                        <div class='col-sm-6'>
                          <div class='thumbnail' style='background-color:lightgray;'>
                            <p class='text-center'>".$row['id']."</p>
                              
                              
                                <p class='text-center'>".$row['name']."</p>
                                <p class='text-center'>".$row['lastname']."</p>
                                
                                <p class='text-center'>".$row['birthdate']."</p>
                                <p class='text-center'>".$row['phone']."</p><br>
                               <p class='text-center' >".$row['address']."</p><br>
                                <hr>
                              </div>
                          </div>
                        
";

                }

            }
            echo "</div>";

            ?>
          </div>
        </div>
      </div>


  </div>
  
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