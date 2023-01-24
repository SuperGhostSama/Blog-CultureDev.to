<?php
include_once __DIR__.'/../models/Crud.php';


class PostsController extends Crud
{
    //SAVE FUNCTION
    public function addPosts(){  
        if (isset($_POST['save'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $category = $_POST['category'];

        $title2 = $_POST['title2'];
        $description2 = $_POST['description2'];
        $category2 = $_POST['category2'];

        
        foreach($_FILES as $key => $value){
            //Upload img
            //-----------------------------------------------
            
            $tmp_picture_name = $value['tmp_name'];
            //unique id img
            $new_unique_name = uniqid('',true);
            //
            $basename = $value['name'];
            $image[] = $new_unique_name . $basename;
            //check picture
            if(!empty($value['name'])){
                $distination_file = '../assets/upload/'.end($image);
            }
            
            //Func upload picture
            move_uploaded_file($tmp_picture_name,$distination_file);
            
        }
    
        
        $a=$this->insert('article',['title'=>$title,'description'=>$description,'admin_id'=>$_SESSION['id'],'category_id'=>$category,'image'=>$image[0]]);

        if(!empty($title2)){
            $a=$this->insert('article',['title'=>$title2,'description'=>$description2,'admin_id'=>$_SESSION['id'],'category_id'=>$category2,'image'=>$image[1]]);
        }

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

        $a=$this->delete('article',"article_id='$id'");
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
            $id = $_GET['updateId'];
            
            $title = $_POST['title'];
            $description = $_POST['description'];
            $category = $_POST['category'];
            
            foreach($_FILES as $key => $value){
                if(!empty($value["name"])){
                //Upload img
                //-----------------------------------------------
                
                $tmp_picture_name = $value['tmp_name'];
                //unique id img
                $new_unique_name = uniqid('',true);
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
            if(empty($image)){
                $a=$this->update('article',['title'=>$title,'description'=>$description,'admin_id'=>$_SESSION['id'],'category_id'=>$category],'article_id',$id);
            }else{
                $a=$this->update('article',['title'=>$title,'description'=>$description,'admin_id'=>$_SESSION['id'],'category_id'=>$category,'image'=>$image],'article_id',$id);
            }

            if ($a == true) {
                $_SESSION['postUpdate'] = "Post has been Updated successfully !";
                header('location:../pages/posts.php');
                die;
            }
        }
    }
}

    public function getPosts(){ 

        $result =$this->select("article","*");
        return $result;
    }
    
    

    public function OnePosts($id){ 

        $result =$this->select("article","*", "article_id = '$id'");
        return $result;
    }

   public function getPostsWithOwner(){ 

        $result =$this->selectWithInnerJoin("article","admin","admin_id","id");
        return $result;
    }


}

