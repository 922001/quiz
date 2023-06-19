<?php include('profile.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Add Quiz</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="form.css">




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <style media="screen">
        .upload {

            width: 90px;
            margin-top: 10px;
            margin-left: 65px;

        }

        .upload img {
            border-radius: 50%;
            border: 3px solid #DCDCDC;
            width: 90px;
            height: 90px;
        }

        .upload .rightRound {

            position: absolute;
            top: 75px;
            left: 128px;
            background: #00B4FF;
            width: 25px;
            height: 25px;
            line-height: 33px;
            text-align: center;
            border-radius: 50%;
            overflow: hidden;
            cursor: pointer;
        }

        .upload .leftRound {
            position: absolute;
            top: 75px;
            left: 75px;
            background: red;
            width: 25px;
            height: 25px;
            line-height: 33px;
            text-align: center;
            border-radius: 50%;
            overflow: hidden;
            cursor: pointer;
        }

        .upload .fa {
            color: white;
        }

        .upload input {
            position: absolute;
            transform: scale(2);
            opacity: 0;
        }

        .upload input::-webkit-file-upload-button,
        .upload input[type=submit] {
            cursor: pointer;
        }

        .box-container {
            margin-top: 400px;
        }
    </style>



</head>

<body>

    <!--wrapper start-->
    <div class="wrapper">
        <!-- header menu start-->
        <div class="header">
            <div class="header-menu">
                <img class="logo" src="logo (1).png">

                <ul>


                    <li><a href="logout.php"><i class="fas fa-power-off"></i></a></li>
                </ul>
            </div>
        </div>
        <!--header menu end-->

        <div class="sec-header">
            <div class="sidebar-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>

        <!--sidebar start-->
        <div class="sidebar">
            <div class="sidebar-menu">


                <form class="form" id="form" action="" enctype="multipart/form-data" method="post">
                    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                    <div class="upload">
                        <img src="img/<?php echo $user['image']; ?>" id="image">
                        <p>
                            <?php echo $user['name']; ?>
                        </p>

                        <div class="rightRound" id="upload">
                            <input type="file" name="fileImg" id="fileImg" accept=".jpg, .jpeg, .png">
                            <i class="fa fa-camera"></i>
                        </div>

                        <div class="leftRound" id="cancel" style="display: none;">
                            <i class="fa fa-times"></i>
                        </div>
                        <div class="rightRound" id="confirm" style="display: none;">
                            <input type="submit">
                            <i class="fa fa-check"></i>

                        </div>
                </form>
            </div>

            <!-- <center class="profile">
                        <img src="sem image.jpg" alt="">
                        <p>Jessica</p>
                    </center> -->




            <?php

            $subid = $_GET['subject_id'];
            $unit = $_GET['unit'];
            $session = $_GET['session'];
            $sem = $_GET['semester']

                ?>
            <li class="item">
                <a href="admin_session.php?user_id=<?php echo $user['id']; ?>&subject_id=<?php echo $subid; ?>&session=<?php echo $session; ?>&unit=<?php echo $unit; ?>&semester=<?php echo $sem; ?>"
                    class="menu-btn">
                    <i class="fas fa-arrow-left"></i><span>Back</span>
                </a>
            </li>
        </div>
    </div>
    <!--sidebar end-->
    <!--main container start-->

    <div class="container">
        <div class="box-container">
            <div class="testbox">

                <form id="createform" method="post" enctype="multipart/form-data">
                    <div class="banner">
                        <h1>ADD QUIZ CONTENT</h1>
                    </div>
                    <div class="item">
                        <div class="name-item">



                        </div>
                    </div>




                    <!-- <div class="item">
                        <select name="session" id="sessionn" required>
                            <option selected value="" disabled>select the session</option>
                            <option value="Session 1">session1</option>
                            <option value="Session 2">session2</option>
                        </select>
                    </div> -->
                    <div class="item">
                        <p>Question Number </p>
                        <textarea rows="2" name="question_number" id="question_number"></textarea>
                    </div>
                    <div class="item">
                        <p>Question Text </p>
                        <textarea rows="2" name="question_text" id="question_text"></textarea>
                    </div>
                    <div class="item">
                        <p>Choice #1 </p>
                        <textarea rows="2" name="choice1" id="choice1"></textarea>
                    </div>
                    <div class="item">
                        <p>Choice #2 </p>
                        <textarea rows="2" name="choice2" id="choice2"></textarea>
                    </div>
                    <div class="item">
                        <p>Choice #3 </p>
                        <textarea rows="2" name="choice3" id="choice3"></textarea>
                    </div>
                    <div class="item">
                        <p>Choice #4 </p>
                        <textarea rows="2" name="choice4" id="choice4"></textarea>
                    </div>
                    <div class="item">
                        <p>Choice #5 </p>
                        <textarea rows="2" name="choice5" id="choice5"></textarea>
                    </div>
                    <div class="item">
                        <p>Correct choice number </p>
                        <textarea rows="2" name="correct_choice" id="correct_choice"></textarea>
                    </div>
                    <div class="item">
                        <p>Semester </p>
                        <textarea rows="2" name="semester" id="semester"></textarea>
                    </div>
                    <div class="item">
                        <p>Subject </p>
                        <textarea rows="2" name="subject" id="subject"></textarea>
                    </div>
                    <div class="item">
                        <p>Unit </p>
                        <textarea rows="2" name="unit" id="unit"></textarea>
                    </div>
                    <div class="item">
                        <p>Session </p>
                        <textarea rows="2" name="session" id="session"></textarea>
                    </div>
                    <div class="btn-block">
                        <button type="submit" name="submit" value="submit">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <script>
        function myFunction() {
            alert('Currently unavailable')
        }
    </script>

    <!--card -->

    <!-- card ends -->



    <!--main container end-->

    <!--wrapper end-->


    <script type="text/javascript">
        $(document).ready(function () {
            $(".sidebar-btn").click(function () {
                $(".wrapper").toggleClass("collapse");
            });
        });
    </script>
    <script type="text/javascript">
        document.getElementById("fileImg").onchange = function () {
            document.getElementById("image").src = URL.createObjectURL(fileImg.files[0]); // Preview new image

            document.getElementById("cancel").style.display = "block";
            document.getElementById("confirm").style.display = "block";

            document.getElementById("upload").style.display = "none";
        }

        var userImage = document.getElementById('image').src;
        document.getElementById("cancel").onclick = function () {
            document.getElementById("image").src = userImage; // Back to previous image

            document.getElementById("cancel").style.display = "none";
            document.getElementById("confirm").style.display = "none";

            document.getElementById("upload").style.display = "block";
        }
    </script>

    <?php
    if (isset($_FILES["fileImg"]["name"])) {
        $id = $_POST["id"];

        $src = $_FILES["fileImg"]["tmp_name"];
        $imageName = uniqid() . $_FILES["fileImg"]["name"];

        $target = "img/" . $imageName;

        move_uploaded_file($src, $target);

        $query = "UPDATE admin SET image = '$imageName' WHERE id = $id";
        mysqli_query($conn, $query);


    }
    ?>
    <?php include 'quiz_db.php'; ?>
    <?php
    if (isset($_POST['submit'])) {
        $question_number = $_POST['question_number'];

        $question_text = $_POST['question_text'];
        $correct_choice = $_POST['correct_choice'];

        $semester = $_POST['semester'];
        $subject = $_POST['subject'];
        $unit = $_POST['unit'];
        $session = $_POST['session'];

        $choices = array();
        $choices[1] = $_POST['choice1'];
        $choices[2] = $_POST['choice2'];
        $choices[3] = $_POST['choice3'];
        $choices[4] = $_POST['choice4'];
        $choices[5] = $_POST['choice5'];
        $query = "INSERT INTO questions (question_number,text,semester,subject_id,unit,session) VALUES('$question_number','$question_text','$semester','$subject','$unit','$session')";
        $insert_row = $mysqli->query($query) or die($mysqli->error . __LINE__);
        if ($insert_row) {
            foreach ($choices as $choice => $value) {
                if ($value != '') {
                    if ($correct_choice == $choice) {
                        $is_correct = 1;
                    } else {
                        $is_correct = 0;
                    }
                    $query = "INSERT INTO choices (question_number,is_correct,text,semester,subject_id,unit,session) VALUES('$question_number','$is_correct','$value','$semester','$subject','$unit','$session')";
                    $insert_row = $mysqli->query($query) or die($mysqli->error . __LINE__);
                    if ($insert_row) {
                        continue;
                    } else {
                        die('Error : (' . $mysqli->errno . ') ' . $mysqli->error);
                    }
                }
            }
            if ($insert_row) {
                echo '<script>alert("registration succesful")</script>';
            } else {
                die('Error : (' . $mysqli->errno . ') ' . $mysqli->error);
            }

        }

    }
    $query = "SELECT * FROM questions";
    $questions = $mysqli->query($query) or die($mysqli->error . __LINE__);
    $total = $questions->num_rows;
    $next = $total + 1;

    ?>


</body>

</html>