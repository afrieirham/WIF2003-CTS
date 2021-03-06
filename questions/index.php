<?php

session_start();
require('../config/db.php');

if (isset($_POST['logout'])) {
    header('Location: ' . ROOT_URL . 'login/index.php?logout=success');
    session_start();
    session_unset();
    session_destroy();
    exit();
} else if (isset($_SESSION['login'])) {
    $name = $_SESSION['Name'];
    $matricNo = $_SESSION['MatricNo'];
} else if (isset($_GET['error'])) {

    if ($_GET['error'] == 'noAttempt') { }
} else {
    header('Location: ' . ROOT_URL . 'login/index.php?error=notLoggedIn');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to CTS Test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/landing.css">
</head>
<style>
    .main {
        background-image: url("images_q/men.png");
        background-size: cover;
        height: 100%;
    }

    #cmain {

        background-color: rgba(130, 204, 238, 0.6);
        color: #394652;
    }

    #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: red;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
    }

    #myBtn:hover {
        background-color: #555;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="./">Critical Thinking Test</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo ROOT_URL . "questions" ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo ROOT_URL . "questions/results" ?>">Results</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo ROOT_URL . "questions/scoreboard" ?>">Scoreboard</a>
                </li>
            </ul>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" class="form-inline my-2 my-lg-0">
                <button name="logout" class="btn btn-outline-light my-2 my-sm-0" type="submit">Logout</button>
            </form>
        </div>
    </nav>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>
    <div class="main pt-4" style="height: 100vh;">
        <div class="container" id="cmain">
            <h1 class="text-center">Welcome <?php echo $name; ?> to CTS Test!</h1>
            <header class="p-2">
                <p class="lead">A Critical Thinking test, also known as a critical reasoning test,
                    determines your ability to reason through an argument logically
                    and make an objective decision. You may be required to assess a
                    situation, recognize assumptions being made, create hypotheses,
                    and evaluate arguments.
                </p>
            </header>


            <section class="man text-center p-5">
                <h2 class="mt-5">Are you ready?</h2>
                <a href="questions.php" class="mb-5 btn btn-primary">Start</a>
            </section>

            <section class="p-2">
                <p class="lead">What questions can I expect?
                    Questions are very likely to be based on the Watson and Glaser
                    Critical Thinking Appraisal model, which contains five sections
                    specially designed to find out how good an individual is at reasoning
                    analytically and logically. The five sections are:
                </p>
            </section>


            <nav>
                <ul class="pagination justify-content-center pb-2">
                    <li class="page-item">| <a class="lead font-weight-bold text-body" href="#text-1">Argument</a></li>
                    <li class="page-item">| <a class="lead font-weight-bold text-body" href="#text-2">Assumption </a>
                    </li>
                    <li class="page-item">| <a class="lead font-weight-bold text-body" href="#text-3">Deduction </a>
                    </li>
                    <li class="page-item">| <a class="lead font-weight-bold text-body" href="#text-4">Interpretion </a>
                    </li>
                    <li class="page-item">| <a class="lead font-weight-bold text-body" href="#text-5">Inference</a> |
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="container text-justify">
        <!-- <div class="row mt-3 float-right">
            <a href="../index.html" class="btn btn-outline-dark">Logout</a>
        </div> -->
        <div id="text-1" class="row p-5 align-items-center" style="height: 50vh;">
            <div class="col-5">
                <h3 class="h1 text-left">Argument</h1>
            </div>
            <div class="col-7">
                <p class="lead text-justify">
                    In the argument section you are tested on your ability
                    to distinguish between arguments that are strong and arguments that are weak.
                    For an argument to be strong, it must be both important and directly related
                    to the question. An argument is weak if it is not directly related to the question,
                    of minor importance, or it confuses correlation with causation
                    (which is incorrectly assuming that just because two things are related,
                    they are the cause of each other).
                </p>
            </div>
        </div>

        <div id="text-2" class="row p-5 align-items-center" style="height: 50vh;">
            <div class="col-7">

                <p class="lead text-justify">
                    An assumption is something we take for granted. People make many assumptions
                    which may not necessarily be correct being able to identify these is a key aspect of
                    critical reasoning. An assumption question will include a statement and a number of
                    assumptions. You are required to identify whether an assumption has been made or not.
                </p>
            </div>
            <div class="col-5">
                <h3 class="h1 text-right">Assumption</h1>
            </div>
        </div>

        <div id="text-3" class="row p-5 align-items-center" style="height: 50vh;">
            <div class="col-5">
                <h3 class="h1 text-left">Deduction</h1>
            </div>
            <div class="col-7">
                <p class="lead text-justify">
                    In deduction questions you have to draw conclusions based on only
                    the information given in the question and not your own knowledge. You will be
                    provided with a small passage of information and you will need to evaluate a
                    conclusion made based on that passage. If the conclusion cannot be drawn from
                    the information given, then the conclusion does not follow.
                </p>
            </div>
        </div>

        <div id="text-4" class="row p-5 align-items-center" style="height: 50vh;">
            <div class="col-7">
                <p class="lead text-justify">
                    In these questions you are given a passage of information followed
                    by a proposed conclusion. You are to regard the information you are given as true
                    and decide whether the proposed conclusion logically and beyond doubt follows
                </p>
            </div>
            <div class="col-5">
                <h3 class="h1 text-right">Interpretion</h1>
            </div>
        </div>

        <div id="text-5" class="row p-5 align-items-center" style="height: 50vh;">
            <div class="col-5">
                <h3 class="h1 text-left">Inference</h1>
            </div>
            <div class="col-7">
                <p class="lead text-justify">
                    Inference is a conclusion drawn from supposed or observed facts.
                    It is information that does not appear directly in the given information,
                    but is drawn from it. If, for instance, we go to a public restroom and find the door locked,
                    we will assume/make the inference that it is occupied.
                </p>
            </div>
        </div>
    </div>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    </div>

    <footer class="bg-4 text-center">
        Copyright &copy 2019 Web Programming
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>