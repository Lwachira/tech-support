<?php include("../view/header.php"); ?>
<div class="section no-pad-bot">
    <div class="container">
        <br><br>
        <h2 style="text-align: center">Add/Update Customer</h2>

        <form action='.' method='post'>
            <div class="input-field col s6">
                <input type='hidden' name='action'
                       value='update_customer'/>
            </div>
            <div class="input-field col s6">
                <input type='hidden' name='customerID'
                       value='<?php echo $customerID; ?>'/>

            </div>
            <div class="input-field col s6">

                <input type='text' name='first_name'
                       value='<?php echo $first_name; ?>'/>
                <label for="first_name">First Name:</label>

            </div>


            <div class="input-field col s6">
                <input type='text' name='last_name'
                       value='<?php echo $last_name; ?>'/>
                <label for="last_name">Last Name:</label>


            </div>
            <div class="input-field col s6">
                <input type='text' name='address'
                       value='<?php echo $address; ?>'/>
                <label for="address">Address:</label>

            </div>

            <div class="input-field col s6">
                <input type='text' name='city'
                       value='<?php echo $city; ?>'/>
                <label for="city">City:</label>


            </div>


            <div class="input-field col s6">
                <input type='text' name='postal_code'
                       value='<?php echo $postal_code; ?>'/>
                <label for="postal_code">Postal Code:</label>
            </div>

            <div class="input-field col s6">

                <select name="country_code">
                    <?php foreach ($countries as $country): ?>
                        <?php if($country_code == $country['countryCode']): ?>
                            <option value="<?php echo $country['countryCode']; ?>" selected>
                                <?php echo $country['countryName']; ?>
                            </option>
                        <?php else: ?>
                            <option value="<?php echo $country['countryCode']; ?>" >
                                <?php echo $country['countryName']; ?>
                            </option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
                <label>Country:</label>

            </div>

            <div class="input-field col s6">
                <input type='text' name='phone'
                       value='<?php echo $phone; ?>'/>
                <label for="phone">Phone:</label>

            </div>

            <div class="input-field col s6">

                <input type='text' name='email'
                       value='<?php echo $email; ?>'/>
                <label for="email">Email:</label>
            </div>

            <div class="input-field col s6">


                <input type='text' name='password'
                       value='<?php echo $password; ?>'/>
                <label for="password">Password:</label>
            </div>
            <div class="input-field col s6">
                <input type='submit' class="waves-effect waves-light btn" value='Update Customer'/>

            </div>
        </form>
    </div>
    <br>
    <br>
    <a href='.'>Search Customers</a>
</div>
<?php include("../view/footer.php"); ?>

