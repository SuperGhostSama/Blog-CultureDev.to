<?php
include_once __DIR__.'/../models/Crud.php';

class CategoryController extends Crud
{
    //SAVE FUNCTION
    public function addCategory(){  
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
    public function deleteCategory(){ 
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
    public function updateCategory(){ 
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

    public function getCategory(){ 

        $result =$this->select("category","*");
        return $result;
    }

    public function OneCategory($id){ 

        $result =$this->select("category","*", "id = '$id'");
        return $result;
    }
}