       <?php
       include('conn.php');
       include('functions.php');
       if(isset($_POST['done'])){
        $name=get('name');
        $email=get('email');
        $gender=get('gender');
       // $brand_id=get('brand_id');
        $country=get('country');
        $created=get('created');
        $status=get('status');

        $data=array();
        $data['name']=$name;
        $data['email']=$email;
        $data['gender']=$gender;
        $data['country']=$country;
         $data['created']=$created;
        $data['status']=$status;

      //  $data['brand_id']=$brand_id;
       // echo '<pre>';var_dump($data);die();
        $response=insert('products1',$data);
        if($response == true){
            echo "saved" ;
            header("location:productpage.php");
        }
        else{
            echo ("Not saved".mysqli_error($dbh));
            header("location:productpage.php");
        }
    }
?>