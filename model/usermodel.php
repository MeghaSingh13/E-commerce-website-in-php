<?php 

   include('../view/database.php');

class user extends database{

	public function register(){
            if(isset($_POST['save'])){
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $password = $_POST['pwd'];
            // $cpassword = $_POST['cpwd'];
            if($this->insert($name,$phone,$email,$password))
            {
            echo"your record is set to the database";
            }
        }
    }

    public function insert($name,$phone,$email,$password){
        
        $query="INSERT INTO `users`( `name`, `phone`, `email`, `pwd`) VALUES('$name','$phone','$email','$password')";
        $res=mysqli_query($this->conn,$query);
        if($res){
            echo '<script>alert("data inserted successfully")</script>';
        }else{
            echo"not inserted";
        }

    }

    public function login(){
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['pwd'];
            $email_search = "SELECT * FROM `users` WHERE email = '$email'&& pwd = '$password' ";
             $query = mysqli_query($this->conn,$email_search);
            // $email_count = mysqli_num_rows($query);

            // if($email_count){
            //     $email_pass = mysqli_fetch_assoc($query);

            //     $db_password = $email_pass['pwd'];

            //     if("$password" == "$db_password"){
            //         echo "Welcome";
            //     }
            // }

        } 
        // $res=mysqli_query($this->conn,$query);
        // if($res){
        //     return $res;
        // }else{
        //     return false;
        // }
        echo  $email_search;
    }
}
?>