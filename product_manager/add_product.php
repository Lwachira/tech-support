<?php include '../view/header.php' ?>

    <div class="section no-pad-bot">
        <div class="container">
            <div id='form'>
                <br><br>
                <h2 style="text-align: center">Add Product</h2>
                <form action='.' method='post'>
                    <div class="input-field col s6">
                        <input type='hidden' name='action' value='add_product'/>

                    </div>

                    <div class="input-field col s6">
                        <input type='text' name='product_code'/>
                        <br/>
                        <label for="product_code">Product Code</label>
                    </div>

                    <div class="input-field col s6">
                        <input type='text' name='name'/>
                        <br/>
                        <label for="name">Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input type='text' name='version'/>
                        <br/>
                        <label for="version">Version</label>
                    </div>
                    <div class="input-field col s6">
                        <input type='date' class="datepicker"  name='release_date'/>
                        <label for="release_date">Release date</label>

                    </div>
                    <input type='Submit' value='Add Product' class="waves-effect waves-light btn"/>
                </form>
            </div>
            <div id='return_to_view'>
                <p><a href='.'>View Product List</a></p>
            </div>
        </div>
    </div>

<?php include '../view/footer.php' ?>