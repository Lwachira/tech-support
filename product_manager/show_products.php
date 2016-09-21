<?php include '../view/header.php' ?>


  <div class="section no-pad-bot">
    <div class="container">

      <br>
      <br>
      <h2 style="text-align: center">Product List</h2>
      <table>
        <tr>
          <th>Code</th>
          <th>Name</th>
          <th>Version</th>
          <th>Release Date</th>
          <th>
            <!-- Column for the remove button, doesn't need a header-->
          </th>
        </tr>
        <?php foreach ($products as $product) : ?>
          <tr>
            <td>
              <?php echo $product['productCode']; ?>
            </td>
            <td>
              <?php echo $product['name']; ?>
            </td>
            <td>
              <?php echo $product['version']; ?>
            </td>
            <td>
              <?php
              $due_date = $product['releaseDate'];
              echo $due_date; ?>
            </td>
            <td>
              <form action="." method="post">
                <input type="hidden" name="action" value="delete_product" />
                <input type="hidden" name="product_code" value="<?php echo $product['productCode']; ?>" />
                <input type="submit" value="Delete" class="waves-effect waves-light btn" />
              </form>
            </td>
          </tr>
          <?php endforeach; ?>
      </table>
      <a href='add_product.php'>Add Product</a>
    </div>
  </div>
  <?php include '../view/footer.php' ?>