<?php
include_once __DIR__.'/../models/Crud.php';


class PostsController extends Crud
{
    //SAVE FUNCTION
    public function addPosts(){  
        if (isset($_POST['save'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        
        foreach($_FILES as $key => $value){
            //Upload img
            //-----------------------------------------------
            
            $tmp_picture_name     = $value['tmp_name'];
            //unique id img
            $new_unique_name      = uniqid('',true);
            //
            $basename = $value['name'];
            $image = $new_unique_name . $basename;
            //check picture
            if(!empty($value['name'])){
                $distination_file = '../assets/upload/'.$image;
            }
            
            //Func upload picture
            move_uploaded_file($tmp_picture_name,$distination_file);
            
        }

        
        $a=$this->insert('article',['title'=>$title,'description'=>$description,'admin_id'=>'1','category_id'=>'9','image'=>$image]);
        if ($a == true) {
            $_SESSION['postSave'] = "New Post has been added successfully !";
            header('location:../pages/posts.php');
            die;
        
            }
        }
    }

    //DELETE FUNCTION
    public function deletePosts(){ 
        if (isset($_GET['deleteId'])){
        $id = $_GET['deleteId'];

        $a=$this->delete('article',"id='$id'");
        if ($a == true) {
            $_SESSION['postDelete'] = "Post has been Deleted successfully !";
            header('location:../pages/posts.php');
            die;
        }
    }
}

    //UPDATE FUNCTION
    public function updatePosts(){ 
        if (isset($_POST['update'])) {
            $id=$_POST['category-id'];
            $category = $_POST['category'];
            
            $a=$this->update('category',['name'=>$category],$id);
            if ($a == true) {
                $_SESSION['postUpdate'] = "Category has been Updated successfully !";
                header('location:../pages/posts.php');
                die;
            }

        }
    }

    public function getPosts(){ 

        $result =$this->select("article","*");
        return $result;
    }

    public function OnePosts($id){ 

        $result =$this->select("article","*", "id = '$id'");
        return $result;
    }
}
//SAVE FUNCTION
// if (isset($_POST['save'])) {
//     $title = $_POST['title'];
//     $description = $_POST['description'];

//     // //ADD POST IMAGE
//     // foreach($_FILES as $key => $value){
//     //     //Upload img
//     //     //-----------------------------------------------
        
//     //     $tmp_picture_name     = $value['tmp_name'];
//     //     //unique id img
//     //     $new_unique_name      = uniqid('',true);
//     //     //
//     //     $basename = $value['name'];
//     //     $image = $new_unique_name . $basename;
//     //     //check picture
//     //     if(!empty($value['name'])){
//     //         $destination_file = '../assets/upload/'.$image;
//     //     }
        
//     //     //Func upload picture
//     //     move_uploaded_file($tmp_picture_name,$destination_file);
//     //     if($key=="postImage"){
//     //         $post=$image;
//     //     }
//     // }
    
    
//     $a = new Crud();
//     $a->insert('article',['title'=>$title,'description'=>$description]);
//     if ($a == true) {
        
//         $_SESSION['postSave'] = "New Category has been added successfully !";
//         header('location:../pages/posts.php');
        
//     }
// }