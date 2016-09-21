<?php include('../view/header.php'); ?>


    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h2 style="text-align: center">Add Technician</h2>
            <form action="." method="post">
                <input type="hidden" name="action" value="add_tech">

                <div class="input-field col s6">
                    <input name="firstName" type="text" class="validate">
                    <label for="firstName">First Name:</label>
                </div>


                <div class="input-field col s6">
                    <input name="lastName" type="text" class="validate">
                    <label for="lastName">Last Name:</label>
                </div>


                <div class="input-field col s12">

                    <input type='email' name='email'/>
                    <label for="email">Email:</label>

                </div>


                <div class="input-field col s12">

                    <input type='tel' name='phone'/>
                    <label for="phone">Phone:</label>

                </div>

                <div class="input-field col s12">

                    <input type='password' name='password'/>
                    <label for="password">Password:</label>

                </div>


                <input type="submit" class="waves-effect waves-light btn" value="Submit"/>
                <br>
            </form>
            <p class="last_paragraph">
                <a href='.'>View Technician List</a>
            </p>

            </main>

        </div>
    </div>

<?php include '../view/footer.php'; ?>