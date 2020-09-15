<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--The Above 3 meta tags *must* come first in the head;any other head content must come *after*s these tags -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Assalamualaikum</title>
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->
    <br>
    <div class="container">
    <div class="row">

        <div class="col-md-4"> <!--this one is left sidebar-->
        <a class="btn btn-info" href="index.php">Student List</a>
        </div>
        
        <div class="col-md-8"><!--this one is right sidebar-->
        <h2>Add New student</h2>
        <hr>
        <form method="post" action="store.php">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input type="number" class="form-control" name="age" placeholder="Age">
                    </div>
                    <div class="form-group">
                        <label>Roll</label>
                        <input type="number" class="form-control" name="roll" placeholder="Roll">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>

    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>