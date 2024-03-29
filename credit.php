<!doctype html>
<html lang="en">
    <head>
        <title>VAAAR | credit</title>
        <link rel="icon" href="https://vaaarfoundation.github.io/favicon.png" type="image/x-icon"> 
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
   <a href="logout.php"><button type="button" class="mx-4 btn btn-danger">Logout</button></a> 
        <nav class="pt-3">
          
            <ul class="nav justify-content-center">
             <li class="nav-item">
                  <a class="nav-link" href="dashboard.php"><button type="button" class="btn btn-primary">Dashboard</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="funds.html"><button type="button" class="btn btn-primary">Add Credit / Debit</button></a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="debit.php"><button type="button" class="btn btn-primary">Debit</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="credit.php"><button type="button" class="btn btn-primary">Credit</button></a>
                  </li>
              </ul>
        </nav>
        </header>
        <main>
        <section>
          <?php
     error_reporting(0);
          session_start();
          
          $fund=$_SESSION['fund'];
          $admin=$_SESSION['admin'];
          if ($admin||$fund==true) {
          
          }
          else{
            header("location:index.html");
          }
    echo"  <div class='container rounded mt-2 bg-white p-md-5'>
          <div class='h2 font-weight-bold text-center'>Credit History</div>
          
          ";
         include "connect.php";
         $query = "SELECT * FROM `credit` ORDER BY `id` DESC;" ;
     
         $result = mysqli_query($conn,$query);
         if(mysqli_num_rows($result)>0) {
          echo "
          <div class='table-responsive'>
              <table class='table'>
                 
                  <thead>
                      <tr>
                          <th scope='col'>FullName</th>
                          <th scope='col'>Amount</th>
                          <th scope='col'>Transcation ID</th>
                          <th scope='col'>Date</th>
                          <th scope='col'>Time</th>
                      </tr>
                  </thead>
                  <tbody>";
                      while ($rows = mysqli_fetch_array($result)) {
                          echo "
                     
                      <tr class='bg-blue'>
                      <td class='pt-3'>{$rows['fname']}</td>
                          <td class='pt-3'>{$rows['amount']}</td>
                          <td class='pt-3'>{$rows['tid']}</td>
                          <td class='pt-3'>{$rows['date']}</td>
                          <td class='pt-3'>{$rows['time']}</td>
                          <td class='pt-3'> <a class='btn btn-danger mx-1' href='del_credit.php?id={$rows['id']}' role='button'>delete</a></td>
                      </tr>
                  
              
                  </tbody>
                  ";
                      }
                      echo"
              </table>
          </div>";
                  }
                  else{
                      echo "no records found......"; 
                  }
                  ?>
      </div>


      <script
          src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
         
      ></script>

      <script
          src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
         
      ></script>
        </main>
       
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
    <style>
        body{
      margin-top:20px;
      color: #1a202c;
      text-align: left;
      background: linear-gradient(45deg, #ce1e53, #8f00c7);
      min-height: 100vh; 
        }
</style>
</html>
