<?php
include_once __DIR__.'/../models/Crud.class.php';


 //SAVE FUNCTION
 if (isset($_POST['save'])) {
    $category = $_POST['category'];

    $a = new Crud();
    $a->insert('category',['name'=>$category]);
    if ($a == true) {
        $_SESSION['categorySave'] = "New Category has been added successfully !";
        header('location:../pages/categories.php');
        
    }
}


//DELETE FUNCTION
if (isset($_GET['deleteId'])){
$id = $_GET['deleteId'];
$a = new Crud();


$a->select("category","*","id='$id'");
$result = $a->sql->fetch(PDO::FETCH_ASSOC);

$a->delete('category',"id='$id'");
if ($a == true) {
    $_SESSION['categoryDelete'] = "Category has been Deleted successfully !";
    header('location:../pages/categories.php');
}
}


//UPDATE FUNCTION
if (isset($_POST['update'])) {
$id=$_POST['category-id'];
$category = $_POST['category'];
$a = new Crud();
$a->update('category',['name'=>$category],$id);


if ($a == true) {
    $_SESSION['categoryUpdate'] = "Category has been Updated successfully !";
    header('location:../pages/categories.php');
}

}
    
