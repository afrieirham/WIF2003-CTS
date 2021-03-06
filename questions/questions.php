<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="questions.css">

<body>

  <div class="container">

    <form method="POST" id="regForm" action="marks.inc.php">

      <div class="timerContainer shadow text-center mt-4 mb-1 bg-light">
        <p id="timer" class="h6">Time Left: <br><span id="demo" class="h3">60m 00s</span></p>
      </div>

      <div class="mt-4 mb-1" style="float: right;">
        <nav id="navbar" class="center-button ">
          <ul class="pagination text-dark">
            <li class="page-item" onclick="goTo(0)"><a id="pa1" class="page-link">1</a></li>
            <li class="page-item" onclick="goTo(1)"><a class="page-link">2</a></li>
            <li class="page-item" onclick="goTo(2)"><a class="page-link">3</a></li>
            <li class="page-item" onclick="goTo(3)"><a class="page-link">4</a></li>
            <li class="page-item" onclick="goTo(4)"><a class="page-link">5</a></li>
            <li class="page-item" onclick="goTo(5)"><a class="page-link">6</a></li>
            <li class="page-item" onclick="goTo(6)"><a class="page-link">7</a></li>
            <li class="page-item" onclick="goTo(7)"><a class="page-link">8</a></li>
            <li class="page-item" onclick="goTo(8)"><a class="page-link">9</a></li>
            <li class="page-item" onclick="goTo(9)"><a class="page-link">10</a></li>
          </ul>
        </nav>
      </div>

      <div class="jumbotron mt-3 shadow-lg bg-light">
        <!-- Question 1 -->
        <div class="tab">
          <p class="display-4">Question 1</p>
          <div class="container">
            <div class="thumbnails text-center">
              <img src="images_q/can.gif" class="img-thumbnail " alt="Cinque Terre" width="304" height="236">
            </div>
            <div class="container mt-3 bg-light shadow p-4">
              <p class="lead">There was a power failure in the house. Mrs. Lim lighted up 10 candles. After
                sometime,
                four candles
                were blown out by the wind. Later, another three candles were blown out. </p>
              <p class="lead"><i>Question</i>: <strong>How many candles remained on the following day?</strong>
              </p>
            </div>
            <hr class="my-4">
            <div class="shadow shadow input-group mb-3">
              <div class="input-group-prepend">
                <label class=" input-group-text" for="inputGroupSelect01">Answer:</label>
              </div>
              <input name="a1" id="a1" type="text" class="form-control" onchange="saveToLocalStorage('a1')">
            </div>
          </div>
        </div>


        <!-- Question 2 -->

        <div class="tab">
          <h1 class="display-4">Question 2</h1>
          <div class="container">
            <div class="thumbnails text-center">
              <img src="images_q/shakes.jpg" class="img-thumbnail " alt="shake hand" width="304" height="236">
            </div>
            <div class="container mt-3 bg-light shadow p-4">
              <p class="lead">There are 20 people who love to solve puzzles. They met to solve puzzles together.
                Among
                them, three
                are friends (<i>i.e., already known each other</i>). During their first face-to-face meeting,
                they
                shook
                hands with each other (<i>with unknowns only</i>) except for the three who were already known to
                each
                other.</p>
              <p class="lead"><i>Question</i>: <strong>How many handshaking took place in this meeting?</strong>
              </p>
            </div>
            <hr class="my-4">
            <div class="shadow input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Answer:</label>
              </div>
              <input name="a2" id="a2" type="text" class="form-control" onchange="saveToLocalStorage('a2')">
            </div>
          </div>
        </div>

        <!-- Question 3 -->

        <div class="tab">
          <h1 class="display-4">Question 3</h1>
          <div class="container">
            <div class="thumbnails text-center">
              <img src="images_q/birds.jpg" class="img-thumbnail " alt="birds" width="304" height="236">
              <img src="images_q/turtles.jpg" class="img-thumbnail " alt="turtles" width="338" height="236">
            </div>
            <div class="container mt-3 bg-light shadow p-4"">
              <p class=" lead pt-3">There are altogether 100 birds and turtles. The total number of legs is 276.
              </p>
              <p class="lead "><i>Question</i>: <strong>How many birds and turtles are there,
                  respectively?</strong>
              </p>
            </div>
            <hr class="my-4">
            <div class="shadow input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Number of birds:</label>
              </div>
              <input name="a31" id="a31" type="text" class="form-control" onchange="saveToLocalStorage('a31')">
            </div>
            <div class="shadow input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Number of turtles:</label>
              </div>
              <input name="a32" id="a32" type="text" class="form-control" onchange="saveToLocalStorage('a32')">
            </div>
          </div>
        </div>

        <!-- Question 4 -->
        <div class="tab">
          <h1 class="display-4">Question 4</h1>
          <div class="container">
            <div class="container mt-3 bg-light shadow p-4">
              <p class="lead">Move the following numbers to make them equal, mathematically. Write your answer
                below.
              </p>
              <h1>
                <ul><strong>2 &nbsp 4 &nbsp = &nbsp 6 &nbsp 7</strong></ul>
              </h1>
            </div>
            <hr class="my-4">
            <div class="shadow input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Answer:</label>
              </div>
              <input name="a4" id="a4" type="text" class="form-control" onchange="saveToLocalStorage('a4')">
            </div>
          </div>
        </div>

        <!-- Question 5 -->
        <div class="tab">
          <h1 class="display-4">Question 5</h1>
          <div class="container">
            <div class="thumbnails text-center">
              <img src="images_q/distinction.jpg" class="img-thumbnail " alt="distinction" width="304" height="236">
            </div>
            <div class="container mt-3 bg-light shadow p-4">
              <p class="lead pt-3">There are four (4) students: A, B, C, and D. They are discussing about their
                academic
                results. A
                says: If I get distinction, then B also gets distinction. B says: If I get distinction, then C
                also
                gets distinction. C says: If I get distinction, then D also gets distinction. All the four
                students
                are telling the truth. However, among these four students, only two students get distinctions.
              </p>
              <p class="lead "><i>Question</i>: <strong>Who are the two students who got distinctions?</strong>
              </p>
            </div>
            <hr class="my-4">
            <div class="shadow input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Answer:</label>
              </div>
              <input name="a5" id="a5" type="text" class="form-control" onchange="saveToLocalStorage('a5')">
            </div>
          </div>
        </div>

        <!-- Question 6 -->
        <div class="tab">
          <h1 class="display-4">Question 6</h1>
          <div class="container">
            <div class="thumbnails text-center">
              <img src="images_q/photo.jpg" class="img-thumbnail " alt="photo" width="340" height="236">
              <img src="images_q/box.jpg" class="img-thumbnail " alt="box" width="338" height="236">
            </div>
            <div class="container mt-3 bg-light shadow p-4">
              <p class="lead pt-3">There are three (3) boxes: a gold box, a silver box, and a red box. On top of
                each of
                the boxes,
                there is a sentence. In one of these three boxes, only one box contains a photo. The sentence on
                the
                gold box says: The photo is not inside the silver box. The sentence on the silver box says: The
                photo is not inside this box. The sentence on the red box says: The photo is inside this box.
                Among
                these three sentences, at least one sentence is true, and at least one sentence is false.</p>
              <p class="lead "><i>Question</i>: <strong>Which box contains the photo?</strong></p>
            </div>
            <hr class="my-4">
            <div class="shadow input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Answer:</label>
              </div>
              <input name="a6" id="a6" type="text" class="form-control" onchange="saveToLocalStorage('a6')">
            </div>
          </div>
        </div>

        <!-- Question 7 -->
        <div class="tab">
          <h1 class="display-4">Question 7</h1>
          <div class="container">
            <div class="thumbnails text-center">
              <img src="images_q/woodenstick.jpg" class="img-thumbnail " alt="burning wooden stick" width="304" height="236">
            </div>
            <div class="container mt-3 bg-light shadow p-4">
              <p class="lead pt-3">Two thin wooden sticks take one (1) hour to complete burning, respectively.
                What is the
                method you
                will use to measure 15 minutes of burning time?</p>
            </div>

            <div class="input-group mt-5 mb-5 shadow">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile02">
                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Draw and upload your answer</label>
              </div>
            </div>
          </div>

        </div>

        <!-- Question 8  -->
        <div class="tab">
          <h1 class="display-4">Question 8</h1>
          <div class="container">
            <div class="thumbnails text-center">
              <img src="images_q/dancer.jpg" class="img-thumbnail " alt="photo" width="200" height="236">
              <img src="images_q/teller.jpg" class="img-thumbnail " alt="box" width="200" height="236">
              <img src="images_q/novelist.jpg" class="img-thumbnail " alt="box" width="200" height="236">
              <img src="images_q/tvhost.jpg" class="img-thumbnail " alt="box" width="200" height="236">
            </div>
            <div class="container mt-3 bg-light shadow p-4">
              <p class="lead pt-3">There are four people: A, B, C, and D. They are predicting the future career
                for each
                other: dancer,
                fortune teller, novelist, and TV host. Based on their statements given below, only the statement
                given by the fortune teller is true.</p>
              <ul class="list-group">
                <li class="list-group-item">A: B will absolutely never become a dancer.</li>
                <li class="list-group-item">B: C will become a fortune teller.</li>
                <li class="list-group-item">C: D will never become a TV host.</li>
                <li class="list-group-item">D: I’ll marry Mr. P</li>
              </ul>

              <br>
              <div class="thumbnails text-center">
                <img src="images_q/wedding.jpg" class="img-thumbnail " alt="wedding" width="304" height="236">
              </div>

              <p class="lead mt-5"><i>Question</i>: <strong>What are the respective career of A, B, C, and D, and
                  will
                  D marry Mr. P?</strong>
              </p>
            </div>
            <hr class="my-4">
            <div class="shadow input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">The career of A:</label>
              </div>
              <input name="a81" id="a81" type="text" class="form-control" onchange="saveToLocalStorage('a81')">
            </div>
            <div class="shadow input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">The career of B:</label>
              </div>
              <input name="a82" id="a82" type="text" class="form-control" onchange="saveToLocalStorage('a82')">
            </div>
            <div class="shadow input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">The career of C:</label>
              </div>
              <input name="a83" id="a83" type="text" class="form-control" onchange="saveToLocalStorage('a83')">
            </div>
            <div class="shadow input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">The career of D:</label>
              </div>
              <input name="a84" id="a84" type="text" class="form-control" onchange="saveToLocalStorage('a84')">
            </div>
            <div class="shadow input-group mb-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <input class="a85" name="a85" type="radio" onclick="radioToLocalStorage('a85')" value="D will marry Mr. P">
                </div>
              </div>
              <input type="text" class="form-control" readonly placeholder="D will marry Mr. P">
            </div>
            <div class="shadow input-group mb-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <input class="a85" name="a85" type="radio" onclick="radioToLocalStorage('a85')" value="D will NOT marry Mr. P">
                </div>
              </div>
              <input type="text" class="form-control" readonly placeholder="D will NOT marry Mr. P">
            </div>
          </div>
        </div>

        <!-- Question 9  -->
        <div class="tab">
          <h1 class="display-4">Question 9</h1>
          <div class="container">
            <div class="thumbnails text-center">
              <img src="images_q/fatthin.jpg" class="img-thumbnail " alt="fat and thin brothers" width="304" height="236">
            </div>
            <div class="container mt-3 bg-light shadow p-4">
              <p class="lead pt-3">There are two brothers, one of whom is fat and the other is thin. The elder
                brother will
                tell the
                truth in the morning, and will tell lie in the afternoon. The younger brother will be the
                reverse
                (<i>i.e. tells lie in the morning, and tells the truth in the afternoon</i>).</p>
              <ul class="list-group">
                <li class="list-group-item">One man asked these two brothers: Who is the elder brother?</li>
                <li class="list-group-item">The fat one said: I’m the elder brother.</li>
                <li class="list-group-item">The thin one also said: I’m the elder brother.</li>
                <li class="list-group-item">The man asked again: What is the time now?</li>
                <li class="list-group-item">The fat one said: Almost noon.</li>
                <li class="list-group-item">The thin one also said: Already noon.</li>
              </ul>
              <p class="lead mt-5"><i>Question</i>: <strong>What is the time now (morning or afternoon), and who
                  is
                  the elder brother
                  (the fat one or the thin one)?</strong></p>
            </div>
            <!-- <hr class="my-4"> -->
            <div class="mt-3 shadow input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">The time now is:</label>
              </div>
              <select name="a91" class="custom-select" id="a91" onchange="saveToLocalStorage('a91')">
                <option selected disabled>Choose...</option>
                <option value="Afternoon">Afternoon</option>
                <option value="Morning">Morning</option>
              </select>
            </div>
            <div class="shadow input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">The eldest brother is:</label>
              </div>
              <select name="a92" class="custom-select" id="a92" onchange="saveToLocalStorage('a92')">
                <option selected disabled>Choose...</option>
                <option value="Fat One">Fat one</option>
                <option value="Thin One">Thin one</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Question 10 -->
        <div class="tab">
          <h1 class="display-4">Question 10</h1>
          <div class="container">
            <div class="thumbnails text-center">
              <img src="images_q/guard.jpg" class="img-thumbnail " alt="lion" width="304" height="236">
            </div>
            <div class="container mt-3 bg-light shadow p-4">
              <p class="lead pt-3">In a room, there are two men. One tells the truth and the other tells lie. You’re in
                the
                room, and
                you want to leave the room from one of the exits (doors). There is a lion behind one of the exit.
                The other exit is safe. </p>
              <p class="lead mt-5"><strong>What is the question (ONE question ONLY) you will ask one of the men to
                  know which
                  is the safe exit?</strong></p>
            </div>
            <hr class="my-4">
            <div class="shadow input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="exampleFormControlTextarea1">Your Question: </label>
              </div>
              <input name="a10" id="a10" type="text" class="form-control" onchange="saveToLocalStorage('a10')">
            </div>
          </div>
        </div>


        <div id="" class="tab">
          <h1 class="">Review Question</h1>
          <table class=" shadow table table-light table-hover table-borderless text-center">
            <thead>
              <tr class="d-flex bg-dark text-white">
                <th class="col-1" scope="col">No</th>
                <th class="col-8" scope="col">Answer</th>
                <th class="col-3" scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr class="d-flex" onclick="goTo(0)">
                <th class="col-1" scope="row">1</th>
                <td class="col-8 text-left" id="a1a"></td>
                <td class="col-3" id="a1b"></td>
              </tr>
              <tr class="d-flex table-danger" onclick="goTo(1)">
                <th class="col-1" scope="row">2</th>
                <td class="col-8 text-left" id="a2a"></td>
                <td class="col-3" id="a2b"></td>
              </tr>
              <tr class="d-flex" onclick="goTo(2)">
                <th class="col-1" scope="row">3</th>
                <td class="col-8 text-left">
                  <p id="a31a"></p>
                  <p id="a32a"></p>
                </td>
                <td class="col-3" id="a3b"></td>
              </tr>
              <tr class="d-flex" onclick="goTo(3)">
                <th class="col-1" scope="row">4</th>
                <td class="col-8 text-left" id="a4a"></td>
                <td class="col-3" id="a4b"></td>
              </tr>
              <tr class="d-flex" onclick="goTo(4)">
                <th class="col-1" scope="row">5</th>
                <td class="col-8 text-left" id="a5a"></td>
                <td class="col-3" id="a5b"></td>
              </tr>
              <tr class="d-flex" onclick="goTo(5)">
                <th class="col-1" scope="row">6</th>
                <td class="col-8 text-left" id="a6a"></td>
                <td class="col-3" id="a6b"></td>
              </tr>
              <tr class="d-flex" onclick="goTo(6)">
                <th class="col-1" scope="row">7</th>
                <td class="col-8 text-left" id="a7a"></td>
                <td class="col-3" id="a7b"></td>
              </tr>
              <tr class="d-flex" onclick="goTo(7)">
                <th class="col-1" scope="row">8</th>
                <td class="col-8 text-left">
                  <p id="a81a"></p>
                  <p id="a82a"></p>
                  <p id="a83a"></p>
                  <p id="a84a"></p>
                  <p id="a85a"></p>
                </td>
                <td class="col-3" id="a8b"></td>
              </tr>
              <tr class="d-flex" onclick="goTo(8)">
                <th class="col-1" scope="row">9</th>
                <td class="col-8 text-left">
                  <p id="a91a"></p>
                  <p id="a92a"></p>
                </td>
                <td class="col-3" id="a9b"></td>
              </tr>
              <tr class="d-flex" onclick="goTo(9)">
                <th class="col-1" scope="row">10</th>
                <td class="col-8 text-left" id="a10a"></td>
                <td class="col-3" id="a10b"></td>
              </tr>

            </tbody>
          </table>
        </div>

        <input name="duration" id="dur" type="hidden">
        <input name="startTime" id="startTime" type="hidden">
        <input name="stopTime" id="stopTime" type="hidden">


        <div class="mt-3 mb-3" style="overflow:auto;">
          <div style="float:right;">
            <button class="btn btn-secondary" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button class="btn btn-secondary" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            <button name="submit" class="btn btn-secondary" type="submit" id="submitBtn" onclick="getEndTime()">Confirm</button>
          </div>
        </div>
      </div>

    </form>
  </div>

  <script src="questions.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>