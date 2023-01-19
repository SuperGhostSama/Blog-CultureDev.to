<?php
include_once __DIR__.'/../models/Crud.php';


class PostsController extends Crud
{
    //SAVE FUNCTION
    public function addPosts(){  
        if (isset($_POST['save'])) {
        $category = $_POST['category'];
        $a=$this->insert('category',['name'=>$category]);
        if ($a == true) {
            $_SESSION['categorySave'] = "New Category has been added successfully !";
            header('location:../pages/categories.php');
            die;
        
            }
        }
    }

    //DELETE FUNCTION
    public function deletePosts(){ 
        if (isset($_GET['deleteId'])){
        $id = $_GET['deleteId'];

        $a=$this->delete('category',"id='$id'");
        if ($a == true) {
            $_SESSION['categoryDelete'] = "Category has been Deleted successfully !";
            header('location:../pages/categories.php');
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
                $_SESSION['categoryUpdate'] = "Category has been Updated successfully !";
                header('location:../pages/categories.php');
                die;
            }

        }
    }

    public function getPosts(){ 

        $result =$this->select("category","*");
        return $result;
    }

    public function OneCategory($id){ 

        $result =$this->select("category","*", "id = '$id'");
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