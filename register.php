<?php

if(isset($_POST['submit-button'])){
    $name=$_POST['name'];
    $price=$_POST['price'];
    $currency=$_POST['currency'];
    $images=array();


    if(isset($_FILES['file'])&& !empty(isset($_FILES['file']))){
        for ($i=0; $i < isset($_FILES['file']['name']) ; $i++) {
            $image_name = md5($_FILES['file']['name'][$i].rand(0,999)).'.jpg';
            // move_uploaded_file($_FILES['file']['tmp_name'][$i],'images/'.$image_name);
            echo'Image moved successfully..!';
        }
    }
    public function sendProduct($name,$price,$currency,$images=array())
    
    {
        $p=$this->p->prepare('INSERT INTO products(name,price,currency) VALUE(:n,:p,:c)');
        $p->bindValue(':n',$name);
        $p->bindValue(':p',$price);
        $p->bindValue(':c',$currency);
        $p->execute();
        $lasdId=$this->p->LastInsertId();
        if(count($images)>0) {
            for ($i=0; &i <count($images)) ;&i++){
                $name_image=$images[$i];
                $sendImage=$this->p->prepare('INSERT INTO productsimages(name_image)');
            }
        }
    }
}

?>