<!doctype html>
<html lang="en">
    <head>
        <title>VAAAR | Add Notice</title>
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
                  <a class="nav-link" href="notice.php"><button type="button" class="btn btn-primary">Add Notice</button></a>
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
        <div class="wrapper mt-3 rounded bg-white">
        <div class="h3 text-center">Add Notice</div>
        <hr class="border  w-23 mx-auto border-warning border-2 opacity-75 ">

<form action="add_notice.php" method="post" enctype="multipart/form-data">
    <div class="form">
        <div class="row">
            <div class="my-md-2 my-3">
                <label>Title</label>
                <input type="text" class="form-control" name="content" required>
            </div>
            
        </div>
       
      
        <div class="row">
        <div class="col-md-6 mt-md-0 mt-3">
                <label>Class</label>
                <input type="text" class="form-control" name="class" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Date</label>
                <input type="date" class="form-control" name="date" required>
            </div>
        </div>
      
        <div class=" my-md-2 my-3">
            <label>file</label>
            <input type="file" class="form-control" id="file" name="pdf" accept="application/pdf" aria-describedby="fileHelpId" required/>
            <p>Maximum size 300KB.</p>
        </div>
        <button class="btn btn-primary mt-3" type="submit">Add Notice</button>
    </form>
    </div>
    <script>
        const uploadField = document.getElementById("file");
    
    uploadField.onchange = function() {
        if(this.files[0].size >500000){
           alert("File is big than 500KB!");
           this.value = "";
        }
    }
        </script>
    

    </div>

        <style>
           @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: linear-gradient(45deg, #ce1e53, #8f00c7);
    min-height: 100vh;
}

body::-webkit-scrollbar {
    display: none;
}

.wrapper {
    max-width: 800px;
    margin: 80px auto;
    padding: 30px 45px;
    box-shadow: 5px 25px 35px #3535356b;
}

.wrapper label {
    display: block;
    padding-bottom: 0.2rem;
}

.wrapper .form .row {
    padding: 0.6rem 0;
}

.wrapper .form .row .form-control {
    box-shadow: none;
}

.wrapper .form .option {
    position: relative;
    padding-left: 20px;
    cursor: pointer;
}


.wrapper .form .option input {
    opacity: 0;
}

.wrapper .form .checkmark {
    position: absolute;
    top: 1px;
    left: 0;
    height: 20px;
    width: 20px;
    border: 1px solid #bbb;
    border-radius: 50%;
}

.wrapper .form .option input:checked~.checkmark:after {
    display: block;
}

.wrapper .form .option:hover .checkmark {
    background: #f3f3f3;
}

.wrapper .form .option .checkmark:after {
    content: "";
    width: 10px;
    height: 10px;
    display: block;
    background: linear-gradient(45deg, #ce1e53, #8f00c7);
    position: absolute;
    top: 50%;
    left: 50%;
    border-radius: 50%;
    transform: translate(-50%, -50%) scale(0);
    transition: 300ms ease-in-out 0s;
}

.wrapper .form .option input[type="radio"]:checked~.checkmark {
    background: #fff;
    transition: 300ms ease-in-out 0s;
}

.wrapper .form .option input[type="radio"]:checked~.checkmark:after {
    transform: translate(-50%, -50%) scale(1);
}

#sub {
    display: block;
    width: 100%;
    border: 1px solid #ddd;
    padding: 10px;
    border-radius: 5px;
    color: #333;
}

#sub:focus {
    outline: none;
}

@media(max-width: 768.5px) {
    .wrapper {
        margin: 30px;
    }

    .wrapper .form .row {
        padding: 0;
    }
}

@media(max-width: 400px) {
    .wrapper {
        padding: 25px;
        margin: 20px;
    }
} 
        </style>

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
<section class="my-3 py-3">

  <?php

session_start();
     

$admin=$_SESSION['admin'];
if ($admin==true) {

}
else{
  header("location:index.php");
}
  
      echo"  <div class='container rounded'>
          
            
            ";
           include "connect.php";
           $query = "SELECT * FROM `notice` ORDER BY `No` DESC;" ;
       
           $result = mysqli_query($conn,$query);
           if(mysqli_num_rows($result)>0) {
            echo "
            <div class='table-responsive'>
                <table class='table text-center'>
                   
                    <thead>
                        <tr>
                            <th scope='col'>Title</th>
                            <th scope='col'>Class</th>
                            <th scope='col'>Date</th>
                            <th scope='col'>Download / View</th>
                        </tr>
                    </thead>
                    <tbody>";
                        while ($rows = mysqli_fetch_array($result)) {
                            echo "
                        
                        <tr class='bg-blue'>
                        <td class='pt-3'>{$rows['content']}</td>
                            <td class='pt-3'>{$rows['class']}</td>
                            <td class='pt-3'>{$rows['date']}</td>
                            <td class='pt-3'> <a href='{$rows['pdf']}'><button type='button' class='btn btn-primary'>View</button></a></td>
                           
                            <td class='pt-3'> <a class='btn btn-danger mx-1' href='del_notice.php?no={$rows['no']}' role='button'>delete</a></td>
                           
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


      

</section>
</html>
