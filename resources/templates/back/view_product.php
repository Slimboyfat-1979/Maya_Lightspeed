
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <h1 class="page-header">
                    All Products
                </h1>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php display_products(); ?>
<!--                        <td>20</td>-->
<!--                        <td>Nikon 234 <br>-->
<!--                            <img src="http://placehold.it/62x62" alt="">-->
<!--                        </td>-->
<!--                        <td>Category</td>-->
<!--                        <td>123</td>-->
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <?php include (TEMPLATE_BACK.DS.'footer.php'); ?>

