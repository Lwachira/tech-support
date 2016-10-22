<?php include('../view/header.php'); ?>

<div class="section no-pad-bot">
    <div class="container">

        <form action='.' method='post'>
            <div class="row">
                <br><br>
                <h2 style="text-align: center">Register Product</h2>
                <div class="input-field col s6">
                    <input disabled style="color: blue" type='text' name='name'
                           value="<?php echo $customers['firstName'] . ' ' . $customers['lastName']; ?>"/>
                    <?php $_SESSION['customerID'] = $customers['customerID']; ?>

                    <label for="name">Customer</label>
                </div>

                <div class="input-field col s6">
                    <select name='productCode'>
                        <?php foreach ($products as $product) : ?>
                            <option value='<?php echo $product['productCode']; ?>'>
                                <?php echo $product['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="productCode">Product </label>
                </div>

            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input type='hidden' name='action' value='register_product'/>
                    <input type='submit' value='Register Product'  class="waves-effect waves-light btn"/>
                </div>

            </div>

        </form>
        <em>You are logged in as <?php echo $_SESSION['email']; ?>.</em>
    </div>
</div>

<?php include('../view/footer.php'); ?>
