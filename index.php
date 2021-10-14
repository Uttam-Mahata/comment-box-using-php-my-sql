<?php
 require 'action.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Mesaage System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body class="bg-dark">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5 bg-light rounded mt-2 ">
        <h4 class="text-center p-2">
          Admin Message System
        </h4>
        <form action="index.php" method="POST" class="p-2">
          <div class="form-group">
            <label class="form-control bg-light">
              Enter Your Name:(Please enter your name as Admin):
            </label>
           
            <input type="text" name="name" class="form-control rounded-0" required>
          </div>
          <div class="form-group">
            <label class="form-control bg-light">
              Enter Your Message:
            </label>
            <textarea name="comment" class="form-control rounded-0" required>
            </textarea>
            
          </div>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary rounded-0" value="Post Message">
            <h5 class="float-right text-success p-2"><?= $msg;?>
                 
             </h5>
          </div>
        </form>
        
      </div>
    </div>
    <br>
    
    <div class="row justify-content-center">
      <div class="col-lg-5 rounded bg-light p-3">
        <?php
        $sql = "SELECT * FROM comment_table ORDER BY id DESC";
        $result =$conn->query($sql);
        while($row=$result->fetch_assoc()){
          
        
        ?>
        <div class="card mb-2 border-secondary">
          <div class="card-header bg-secondary py-1 text-light">
            <span class=" float-left font-bold">
              Notice to the Students:
          
            </span>
          </div>
          <div class="card-body py-2">
            <p class="card-text">
              <?= $row['comment']
              
              ?>
            </p>
              
            </div>
            <div class="card-footer py-2">
               <span class="float-right font-bold">Posted on : 
                <?= $row['cur_date'] 
                ?>
              </span>
            </div>
          
          </div>
               <?php } ?>
        </div>
    
      </div>
    </div>
  </div>
</body>

</html>