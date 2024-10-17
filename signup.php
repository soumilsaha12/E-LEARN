<?php
$server= "localhost";
$user= "root";
$password="";
$db="login_db";

$conn = mysqli_connect($server,$user,$password,$db);
if($conn)
{
    ?>
    <script>
        alert("Processing");
    </script>
    <?php
}
else
{
    ?>
    <script>
        alert("Registration not successfull");
    </script>
    <?php
}

          if(isset($_POST['submit']))
          {
            $username = mysqli_real_escape_string($conn, $_POST['name']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $password = $_POST['password'];

            $emailquery = " select * from users where email ='$email'";
            $query = mysqli_query($conn,$emailquery);

            $emailcount = mysqli_num_rows($query);

            if($emailcount>0)
            {
                ?>
                <script>
                    alert("E-mail already exists");
                    window.location.href="login.html"
                </script>
                <?php
            }
            
        }