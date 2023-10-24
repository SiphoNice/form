<?php
if (isset($_POST["submit"])) {
    $name =  $_POST["name"];
    $cellNo =  $_POST["cellNo"];
    $email =  $_POST["email"];
    $comment = $_POST["comment"];
    $message = "";
    $errorMessage = "";

    if (!empty($name) && !empty($cellNo) && !empty($email) && !empty($comment)) {
        $to = "nkosinathishandu8@gmail.com";
        $subject = "Form Message";
        $txt = $comment;
        $headers = "From:" . $email;
        mail($to, $subject, $txt, $headers);
        $message =  "Email sent.";
    } else {
        $errorMessage =  "Populate all fields.";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Send message</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;1,100;1,300&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
            font-weight: 300;
            color: #000;
            background-color: #f1f1f1;
        }

        .btn {
            text-transform: uppercase;
        }

        .btn:hover {
            color: #ffffff;
        }

        h4 {
            font-weight: 300;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 mt-5 bg-white p-5">
                <form action="index.php" method="POST">
                    <h4 class="text-center">Send us a message</h4>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="cellNo" class="form-label">Contact Number<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="number" name="cellNo">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address<span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="comment" class="form-label">Comment<span class="text-danger">*</span></label>
                        <textarea class="form-control" id="comment" rows="3" name="comment"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-info" name="submit">Submit</button>
                    <?php

                    if (!empty($message)) {
                    ?>
                        <div class="alert alert-success mt-2" role="alert">
                            <?php
                            echo  $message
                            ?>
                        </div>
                    <?php
                    } elseif (!empty($errorMessage)) {
                    ?>
                        <div class="alert alert-danger mt-2" role="alert">
                            <?php
                            echo $errorMessage
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>

</html>