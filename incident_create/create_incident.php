<?php include('../view/header.php'); ?>
<div class="section no-pad-bot">
    <div class="container">
        <h3>Create Incident</h3>
        <form action='.' method='post'>

            <div class="input-field col s6">

                <input type="hidden" name="action" value="create_incident" />
                <input type="hidden" name="customerID"
                       value="<?php echo $customer['customerID']; ?>" />
            </div>

            <div class="input-field col s6">
                <input disabled style="color: blue" type='text' name='name'
                       value="<?php echo $customer['firstName'] . ' ' . $customer['lastName']; ?>"/>
                <label for="name">Customer</label>

            </div>


            <div class="input-field col s6">
                <select name='$productCode'>
                    <?php foreach ($registered_products as $product) : ?>
                        <option value='<?php echo $product['productCode']; ?>'>
                            <?php echo $product['productCode']; ?></option>
                    <?php endforeach; ?>
                </select>
                <label for="productCode">Product</label>
            </div>

            <div class="input-field col s6">
                <input type='text' name='title'/>
                <label for="title">Title</label>
            </div>

            <div class="input-field col s6">
                <input type='text' name='description'/>
                <label for="description">Description</label>
            </div>

          <!--  <input type='hidden' name='customerID'
                   value='<?php /*echo $customer['customerID']; */?>'/>
            <input type='hidden' name='action' value='create_incident'/>-->
            <input type='submit' value='Create Incident' class="waves-effect waves-light btn"/>

        </form>
    </div>
</div>

<?php include('../view/footer.php'); ?>

