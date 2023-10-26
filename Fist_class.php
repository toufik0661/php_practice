<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="continer">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="" mathod = "">
                    <label for="">Fist Name</label>
                    <input type="text" name= "fist_name" class= "form-control">

                    <label for="">Last Name</label>
                    <input type="text" name="last_name" class="form-control" >
                    
                    <label for="">User Name</label>
                    <input type="text" name="user_name" class="form-control" >
                    
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" >
                    
                    <label for="">Mobil Number</label>
                    <input type="text" name="phone_no" class="form-control" >

                    <label for="" class="mt-3">Gender</label>
                    <input type="radio" name="gender" value="male">
                    <label for="">Female</label>
                    <input type="radio" name="gender" value="female">

                    <label for="">Distict</label>
                    option
                    
                    
                    <label for=""> Password</label>
                    <input type="text" name="last_name" class="form-control" >
                    
                </form>
            </div>
        </div>
    </div>
    
</body>
</html> -->
<!-- 93% of storage used … If you run out, you won't have enough storage to create, edit, and upload files. Get 100 GB of storage for BDT 150.00 BDT 38.00/month for 3 months.
registration-form-creation-and-password-match-with-simple-validation.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Form</title>
</head>

<body>
    <div class="container">
        <?php
            if(isset($_POST['submit'])) {
                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $user_name = $_POST['user_name'];
                $phone_no = $_POST['phone_no'];
                $email = $_POST['email'];
                $gender = "";

                if(isset($_POST['gender'])) {
                    $gender = $_POST['gender'];
                }

                $district = $_POST['district'];
                $password = $_POST['password'];
                $confirm_password = $_POST['confirm_password'];

                if($password == $confirm_password) {
                    echo "<br>Full Name: ".$first_name." ".$last_name;
                    echo "<br>User Name: ".$user_name;
                    echo "<br>Mobile Number: ".$phone_no;
                    echo "<br>Email Address: ".$email;
                    echo "<br>Gender: ".$gender;
                    echo "<br>District: ".$district;
                    echo "<br>Password: ".$password;
                }
                
            }
        ?>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="margin-top: 30px; border: 3px solid green; padding: 30px;">
            <center>
                <b class="bg-danger">
                    <?php
                        if(isset($_POST['submit'])) {
                            $password = $_POST['password'];
                            $confirm_password = $_POST['confirm_password'];
                            if($password == $confirm_password) {

                            }else{
                                echo "Password Not Match!";
                            }

                        }
                    ?>
                </b>
            </center>
                <form action="" method="post">
                    <label for="">First Name</label>
                    <input type="text" name="first_name" class="form-control">
                    <label for="">Last Name</label>
                    <input type="text" name="last_name" class="form-control">

                    <label for="">User Name</label>
                    <input type="text" name="user_name" class="form-control">
                    <label for="">Mobile Number</label>
                    <input type="text" name="phone_no" class="form-control">
                    <label for="">Email Address</label>
                    <input type="email" name="email" class="form-control">

                    <label for="" class="mt-2">Male</label>
                    <input type="radio" name="gender" value="male">
                    <label for="">Female</label>
                    <input type="radio" name="gender" value="female"><br>

                    <label for="">District</label>
                    <select name="district" id="" class="form-control">
                        <option value="">Select one</option>
                        <option value="kushtia">kushtia</option>
                        <option value="khulna">khulna</option>
                        <option value="rajshahi">rajshahi</option>
                        <option value="bogura">bogura</option>
                    </select>

                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                    <label for="">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control">

                    <input type="submit" name="submit" class="btn btn-success mt-2">
                </form>
            </div>
        </div>
    </div>
</body>

</html>