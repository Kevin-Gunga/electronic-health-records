<?php include 'patient_details.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>

<body style="background:url(bg-image.jpg);">
    <div class="frm">
        <form action="POST">

            <div class="details">
                <div class="sub-details">
                    <label for="name">Name:</label>
                    <input type="text" name="namee" id=""><br><br>
                </div>

                <div class="sub-details">
                    <label for="age">Age:</label>
                    <input type="number" name="age" id="age" min="0" max="120"><br><br>
                </div>

                <div class="sub-details">
                    <label for="sex">Sex:</label>
                    <select name="sex" id="sex">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div><br>

                <div class="sub-details">
                    <label for="status">Marital Status:</label>
                    <select name="marital_status" id="status">
                        <option value="single"> Single</option>
                        <option value="married">Married</option>
                        <option value="complicated">Complicated</option>
                    </select>
                </div><br>

                <div class="sub-details">
                    <label for="location">Location of Residence:</label>
                    <input type="text" name="location" id=""><br><br>
                </div>

                <div class="sub-details">
                    <label for="Admitted">Date Admitted:</label>
                    <input type="text" name="date_admitted" id=""><br><br>
                </div>

                <div class="sub-details">
                    <label for="signs">Signs & Symptoms:</label>
                    <textarea name="signs_symptoms" id="signs" cols="30" rows="2"></textarea>
                </div><br><br>

                <div class="sub-details">
                    <label for="treatment">Treatment:</label>
                    <textarea name="treatment" id="treatment" cols="30" rows="2"></textarea>
                </div><br><br>

                <div class="sub-details">
                    <label for="billing">Final Billing:</label>
                    <input type="text" name="final_billing" id=""><br><br>
                </div>

                <div class="sub-details">
                    <label for="discharged">Date Discharged:</label>
                    <input type="text" name="date_discharged" id="">
                </div>

            </div>

        </form>
        <div class="savebtn">
            <button name="save_btn" id="save"><a
                    href="https://web-chat.global.assistant.watson.appdomain.cloud/preview.html?backgroundImageURL=https%3A%2F%2Fus-east.assistant.watson.cloud.ibm.com%2Fpublic%2Fimages%2Fupx-0fa2f741-e286-442b-bef6-925b22facca9%3A%3A449fd400-d7e0-42be-9b93-2ba071598389&integrationID=b31c2fcf-0ca6-4ce3-b596-43d9043da01d&region=us-east&serviceInstanceID=0fa2f741-e286-442b-bef6-925b22facca9">Save</a></button>
        </div>
    </div>

    <?php
    if (isset($_POST['save_btn'])){
        $id =mysqli_real_escape_string($con,$_POST['id']);
        $name =mysqli_real_escape_string($con,$_POST['namee']);
        $age =mysqli_real_escape_string($con,$_POST['age']);
        $sex =mysqli_real_escape_string($con,$_POST['sex']);
        $maritalstatus =mysqli_real_escape_string($con,$_POST['marital_status']);
        $dateadmitted =mysqli_real_escape_string($con,$_POST['date_admitted']);
        $signs =mysqli_real_escape_string($con,$_POST['signs_symptoms']);
        $treatment =mysqli_real_escape_string($con,$_POST['treatment']);
        $billing =mysqli_real_escape_string($con,$_POST['final_billing']);
        $datedischarged =mysqli_real_escape_string($con,$_POST['date_discharged']);
       
        if (empty($id)) {
            exit();
        }
        
        if (empty($name)) {
            exit();
        }

        if (empty($age)) {
            exit();
        }

        if (empty($sex)) {
            exit();
    
        }
        if (empty($maritalstatus)) {
            exit();
        }

        if (empty($dateadmitted)) {
            exit();
        }

        if (empty($signs)) {
            exit();
        }

        if (empty($treatment)) {
            exit();
        }

        if (empty($billing)) {
            exit();
        }

        if (empty($datedischarged)) {
            exit();
        }

        $query = "INSERT INTO details
        (id,namee,age,sex,marital_status,date_admitted,signs_symptoms,treatment,final_billing,date_discharged) 
        VALUES('$id','$name','$age','$sex','$maritalstatus','$dateadmitted','$signs','$treatment','$billing','$datedischarged')";

        $data = mysqli_query($con,$query);
        if ($data) {
            ?>
    <script type=text/javascript>
    alert(" Data Submitted Successfully");
    </script>
    <?php
    }
    else{
        ?>
    <script type=text/javascript>
    alert("Please Try Again");
    </script>
    <?php
     }
 } 

 ?>
</body>

</html>