<?php
require_once 'Model/ProductModel.php';
class ProductController {
    private $post;
    private $type;
    function addPic(){
        if(isset($_FILES['productPic'])){
            $picname=$_FILES['productPic']['name'];
            $picsize=$_FILES['productPic']['size'];
            $pictmpname=$_FILES['productPic']['tmp_name'];
        
            if($_FILES['productPic']['error']===0){
                    $img_ex = pathinfo($picname, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);
        
                    $allowed_exs=array("jpg","jpeg","png");
        
                    if(in_array($img_ex_lc,$allowed_exs)){
                        $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
                        $img_upload_path='public/uploads/'.$new_img_name;
                        move_uploaded_file($pictmpname,$img_upload_path);
                        return $img_upload_path;
                    }else{
                        die("error");
                    }
                    
            }else{
                    die("error");
                }     
        }
    }
    function addProduct(){
        if(isset($_POST['submit'])){
           $this->post=[
           'productPic'=> $this->addPic(),
           'productName'=> $_POST['productName'],
           'referenceProduct'=> $_POST['referenceProduct'],
           'codeBar'=> $_POST['codeBar'],
           'labelProduct'=> $_POST['labelProduct'],
           'purchasePrice'=> $_POST['purchasePrice'],
           'finalPrice'=> $_POST['finalPrice'],
           'offrePrice'=> $_POST['offrePrice'],
           'productCategory'=> $_POST['productCategory'],
           'description'=> $_POST['description']
        ];
        $add=new productModel;
        $add->addProductToDb($this->post);
        }else{
            die('error');
        }
    }
    function select($element,$id){
        $select=new productModel;
        return $select->selectFromDb($element,$id);
    }
    function updateProduct(){
        if(isset($_POST['submit'])){
            if(isset($_FILES['productPic'])&&$_FILES['productPic']['error']===0){
                $this->post=[
                    'productPic'=> $this->addPic(),
                    'productName'=> $_POST['productName'],
                    'referenceProduct'=> $_POST['referenceProduct'],
                    'codeBar'=> $_POST['codeBar'],
                    'labelProduct'=> $_POST['labelProduct'],
                    'purchasePrice'=> $_POST['purchasePrice'],
                    'finalPrice'=> $_POST['finalPrice'],
                    'offrePrice'=> $_POST['offrePrice'],
                    'productCategory'=> $_POST['productCategory'],
                    'description'=> $_POST['description']
                 ];
                $bool=true;
            }else{
                $this->post=[
                    'productName'=> $_POST['productName'],
                    'referenceProduct'=> $_POST['referenceProduct'],
                    'codeBar'=> $_POST['codeBar'],
                    'labelProduct'=> $_POST['labelProduct'],
                    'purchasePrice'=> $_POST['purchasePrice'],
                    'finalPrice'=> $_POST['finalPrice'],
                    'offrePrice'=> $_POST['offrePrice'],
                    'productCategory'=> $_POST['productCategory'],
                    'description'=> $_POST['description']
                 ];
                $bool=false;
            }
         $update=new productModel;
         $update->updateProduitInDb($this->post,$_GET['id'],$bool);
         }else{
             die('error');
         }
    }
    function hideProduct() {
        if(isset($_GET['id'])){
            $hide=new productModel;
            $hide->hideProductInDb($_GET['id']);
        }else{
            die('error');
        }
    }
    function showProduct() {
        if(isset($_GET['id'])){
            $show=new productModel;
            $show->showProductInDb($_GET['id']);
        }else{
            die('error');
        }
    }
    function getProducts() {
        $get = new productModel;
        return $get->getProductsFromDb();
    }
}

