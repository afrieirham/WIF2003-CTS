<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="signup.css" rel="stylesheet">

    <title>Sign In</title>
</head>

<body>
    <div class="simple-form">


        <form action="signup.inc.php" method="POST" id="registration">
            <h1>Sign Up</h1>
            <?php 
                
                if(isset($_GET['error'])){

                    $error = $_GET['error'];

                    if($error == 'matricNoTaken'){
                        echo '<div class="alert" role="alert">Matric No Taken</div>';
                    }
                    else if($error == 'usernameTaken'){
                        echo '<div class="alert" role="alert">Username Taken</div>';
                    }
                    else if($error == 'emailTaken'){
                        echo '<div class="alert" role="alert">Email Taken</div>';
                    }
                    else if($error == 'passwordnotmatch'){
                        echo '<div class="alert" role="alert">Password not match</div>';
                    }
                }

            
            ?>
            <input name="name" type="text" class="form-control" id="button" placeholder="Name"><br><br>
            <input name="username" type="text" class="form-control" id="button" placeholder="Username"><br><br>
            <input type="text" class="form-control" name="matricNo" id="button" placeholder="Matric No."><br><br>
            <input name="email" type="email" class="form-control" id="button" placeholder="Email"><br><br>
            <input name="password" type="password" class="form-control" id="button" placeholder="Password"><br><br>
            <input name="confirmPassword" type="password" class="form-control" id="button" placeholder="Confirm Password"><br><br>
            <input type="text" class="form-control" name="cgpa" id="button" placeholder="CGPA"><br><br>

            <select name="yearStudy" class="custom-select" id="button">
                <option selected>Year of Study</option>
                <option value="First">First</option>
                <option value="Second">Second</option>
                <option value="Third">Third</option>
                <option value="Fourth">Fourth</option>
            </select><br><br>
            <select name="gender" class="custom-select" id="button">
                <option selected>Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select><br><br>

            <select name="age" class="custom-select" id="button">
                <option selected>Age Group</option>
                <option value="Below 18 Years">Below 18 Years</option>
                <option value="18-21 Years">18-21 Years</option>
                <option value="22-25 Years">22-25 Years</option>
                <option value="Above 25 Years">Above 25 Years</option>
            </select><br><br>

            <select name="ethnicGroup" class="custom-select" id="button">
                <option selected>Ethnic Group</option>
                <option value="Malay">Malay</option>
                <option value="Malay">Chinese</option>
                <option value="Indian">Indian</option>
                <option value="Others">Others</option>
            </select><br><br>

            <select name="nationality" class="custom-select" id="button">
                <option selected>Nationality</option>
                <option value="Malaysian">Malaysian</option>
                <option value="Others">Others</option>
            </select><br><br>

            <button type="submit" name="submit" class="btn btn1">Submit</button>
            <a id="link" href="../login/">Cancel</a>

        </form>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>alert("Please don't use your real password, it will be saved in plain text.")</script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
</body>

</html>