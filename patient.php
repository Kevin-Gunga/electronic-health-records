<?php include 'signup.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="patient.css">
    <title>patient form</title>
</head>

<body>
    <div class="container front">
        <div class="top">
            <span>Welcome Patient</span>
        </div>
        <div class="form">
            <form>
                <div class="inputBox inputBoxFront">
                    <label><i class="fa-solid fa-user"></i></label>
                    <input type="text" name="username" placeholder="Username" class="input" required>
                </div>
                <div class="inputBox inputBoxFront">
                    <label><i class="fa-solid fa-lock"></i></label>
                    <input type="password" name="password" placeholder="Password" class="input" required>
                </div>
                <button type="submit" class="btn"><a
                        href="https://web-chat.global.assistant.watson.appdomain.cloud/preview.html?backgroundImageURL=https%3A%2F%2Fus-east.assistant.watson.cloud.ibm.com%2Fpublic%2Fimages%2Fupx-0fa2f741-e286-442b-bef6-925b22facca9%3A%3A449fd400-d7e0-42be-9b93-2ba071598389&integrationID=b31c2fcf-0ca6-4ce3-b596-43d9043da01d&region=us-east&serviceInstanceID=0fa2f741-e286-442b-bef6-925b22facca9">Log
                        in</a></button>
                <div class="user">New user? <span class="newUser">Sign Up</span></div>
            </form>
        </div>
    </div>

    <!-- --------------------------- back ---------------------------------- -->

    <div class="container back">
        <div class="top topBack">
            <span>Welcome Patient</span>
        </div>
        <div class="form formBack">
            <form>
                <div class="inputBox inputBoxBack">
                    <label><i class="fa-solid fa-t"></i></label>
                    <input type="text" name="name" placeholder="Name" class="input" required>
                </div>
                <div class="inputBox inputBoxBack">
                    <label><i class="fa-solid fa-envelope"></i></label>
                    <input type="email" name="email_id" placeholder="Email id" class="input" required>
                </div>
                <div class="inputBox inputBoxBack">
                    <label><i class="fa-solid fa-user"></i></label>
                    <input type="text" name="username" placeholder="Username" class="input" required>
                </div>
                <div class="inputBox inputBoxback">
                    <label><i class="fa-solid fa-lock"></i></label>
                    <input type="password" name="password" placeholder="Password" class="input" required>
                </div>
                <button type="submit" name="sign_btn" class="btn btnBack"><a
                        href="https://web-chat.global.assistant.watson.appdomain.cloud/preview.html?backgroundImageURL=https%3A%2F%2Fus-east.assistant.watson.cloud.ibm.com%2Fpublic%2Fimages%2Fupx-0fa2f741-e286-442b-bef6-925b22facca9%3A%3A449fd400-d7e0-42be-9b93-2ba071598389&integrationID=b31c2fcf-0ca6-4ce3-b596-43d9043da01d&region=us-east&serviceInstanceID=0fa2f741-e286-442b-bef6-925b22facca9">Sign
                        Up</a></button>
                <div class="user userBack">Existing user? <span class="existingUser">log In</span></div>
            </form>
        </div>
    </div>


    <?php
        if (isset($_POST['sign_btn'])){
            $name = mysqli_real_escape_string($con,$_POST['namee']);
            $email_id = mysqli_real_escape_string($con,$_POST['email_id']);
            $username = mysqli_real_escape_string($con,$_POST['username']);
            $password = mysqli_real_escape_string($con,$_POST['pwd']);

            if (empty($name)){
                exit;
            }

            if (empty($email_id)){
                exit;
            }

            if (empty($username)){
                exit;
            }

            if (empty($password)){
                exit;
            }

        $query = "INSERT INTO patient
            (namee,email_id,username,pwd) VALUES('$name', '$email_id', '$username', '$password')";

        $data = mysql_query($con,$query);
        if ($data){
            ?>
    <script type=text/javascript>
    alert(" Data Submitted Successfully");
    </script>
    <?php
    
 } else{ 
    ?>
    <script type=text/javascript>
    alert("Please Try Again");
    </script>
    <?php
            }   
        }
    ?>

    <?php
         //login
          if ($_SERVER["REQUEST_METHOD"]=="POST" ){
            $username=$_POST["username"];
             $password=$_POST["pwd"];
            
             if($username === "username" && $password === "pwd"){
                $_SESSION["username"] = $username;
                $_SESSION["pwd"] = $password;
                header("Location: form.php");
             } else {
               echo "Invalid credentials."; 
             }
            } 
            //login
            
         ?>

    <script>
    let front = document.querySelector('.front');
    let back = document.querySelector('.back');

    let newUser = document.querySelector('.newUser');
    let existingUser = document.querySelector('.existingUser');

    newUser.addEventListener('click', function() {
        front.style.zIndex = "1"
        back.style.zIndex = "2"
        front.style.transform = "rotateY(180deg)"
        back.style.transform = "rotateY(0deg)"
    })

    existingUser.addEventListener('click', function() {
        back.style.zIndex = "1"
        front.style.zIndex = "2"
        back.style.transform = "rotateY(180deg)"
        front.style.transform = "rotateY(0deg)"
    })
    </script>
</body>

</html>