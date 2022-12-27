<?php
require_once ('../resources/config.php');
require_once (TEMPLATE_BACK.DS.'header.php');
session_start();

if(!isset($_SESSION['admin'])) {
    header("Location: ../public/index.php");
}
?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <?php
                if($_SERVER['REQUEST_URI'] == '/Maya_Pieced/admin/' || $_SERVER['REQUEST_URI'] == '/Maya_Pieced/admin/index.php'){
                    include (TEMPLATE_BACK.DS.'admin_content.php');
                }

                if(isset($_GET['orders'])) {
                    include(TEMPLATE_BACK.DS.'orders.php');
                }

                if(isset($_GET['view_product'])) {
                    include(TEMPLATE_BACK.DS.'view_product.php');
                }

                if(isset($_GET['add_product'])){
                    include (TEMPLATE_BACK.DS.'add_product.php');
                }

                if(isset($_GET['categories'])) {
                    include(TEMPLATE_BACK.DS.'categories.php');
                }

                if(isset($_GET['users'])) {
                    include(TEMPLATE_BACK.DS.'users.php');
                }

                if(isset($_GET['gallery'])){
                    include(TEMPLATE_BACK . DS . 'gallery_add.php');
                }

                if(isset($_GET['edit_product'])) {
                    include(TEMPLATE_BACK.DS.'edit_product.php');
                }

                ?>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

<?php require_once (TEMPLATE_BACK.DS.'footer.php')?>



