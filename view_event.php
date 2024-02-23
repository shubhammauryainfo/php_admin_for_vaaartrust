<!doctype html>
<html lang="en">
    <head>
        <title>VAAAR | View Event</title>
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
                  <a class="nav-link active" aria-current="page" href="dashboard.php"><button type="button" class="btn btn-primary">Dashboard</button></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="add_member.html"><button type="button" class="btn btn-primary">Add Member</button></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="forms.php"><button type="button" class="btn btn-primary">Forms</button></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="add_event.html"><button type="button" class="btn btn-primary">Add Events</button></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="funds.html"><button type="button" class="btn btn-primary">Funds</button></a>
                </li>
              </ul>
        </nav>
        </header>
       





        <main class="px-3">
<?php 
		 session_start();
          
        
         $admin=$_SESSION['admin'];
         if ($admin==true) {
         
         }
         else{
           header("location:index.html");
         }
   
	   include "connect.php";
	   $query = "SELECT * FROM `events` ORDER BY `id` DESC;" ;
	   $result = mysqli_query($conn,$query);
		if(mysqli_num_rows($result)>0) {
			echo "<div class='container'>
			<div class='row justify-content-center align-items-center g-1'>";
			while ($rows = mysqli_fetch_array($result)) {
			   echo "
			   <div class='card col-md-6 col-lg-4 col-xl-3 m-3 p-1'>
			   <img class='card-img-top img-fluid rounded-top ' src='{$rows['image']}' alt='post'  />
			   <div class='card-body'>
				   <h4 class='card-title'>{$rows['title']}</h4>
				   <p class='card-text'>{$rows['about']}</p>
                   <a name='' id='' class='btn btn-danger mx-1' href='del_event.php?id={$rows['id']}' role='button'>delete</a>
			   </div>
		   </div>
		   
			";
			}
			echo "
			</div>
		</div>";
		} else {
			echo "no records found......";
		}
		
		?>
</div>
	</div>
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
