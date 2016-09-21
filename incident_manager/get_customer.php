<?php include("../view/header.php"); ?>

    <div class="section no-pad-bot">
        <div class="container">
            <h3>Get Customer</h3>
            <form action='.' method='post'>
                <label>You must enter the customer's email address to select the customer.</label>
                <br/>
                <div class="input-field col s6">
                    <input type='email' name='email'/>
                    <label for="email">Email:</label>
                    <input type='hidden' name='action'
                           value='verify_email'/>
                    </div>

                <input type='submit' value='Get Customer'  class="waves-effect waves-light btn"/>

            </form>
        </div>
    </div>

<?php include("../view/footer.php"); ?>