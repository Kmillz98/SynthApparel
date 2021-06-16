<?php include_once("Includes/Modules/Header.php"); ?>
<?php include_once("Includes/Modules/Navigation.php"); ?>

<!-- Content -->
<div class="columns" id="prodPageColumns">
  <!-- Product Image Coloumn-->
  <div class="column is-narrow">
    <!-- This image will be populated via the database -->
    <img class="main-product-img" src="/Images/Nav-logo.png" />
  </div>
  <!-- Product details column -->
  <div class="column" id="productDetails">
    <!-- Product Title-->
    <h2 class="product-title">Synth Apparel Original Collection</h2>
    
    <div class="h-line"></div>

    <!-- Product Details-->
    <div class="product-notes">
      <!-- This will be populated via the database, this is here to only show an example -->
      <ul>
        <li>Preshrunk Jersey Knit</li>
        <li>Semi Fitted Style</li>
        <li>100% Cotton</li>
      </ul>
      <br />

      <!-- Sizing Details this hard coded -->
      <span id="sizeInfoHeading"><h4>How to pick the right size?</h4></span>
      <p id="sizeInfo">
        Get your favorite shirt, lay it flat on a table and measure it across the chest (one side only), and pick what size will fit best.
Please note: measurements can vary within 2.5cm, this is within our tolerance.  
      </p>
      <!-- Purchase Item Columns -->
      <div class="columns">
        <!-- Product Size -->
        <div class="column">
          <div class="select">
            <select id="productSize">
              <option>X Small</option>
              <option>Small</option>
              <option>Medium</option>
              <option>Large</option>
              <option>X Large</option>
              <option>XX Large</option>
            </select>
          </div>
        </div>
        <!-- Quantity -->
        <div class="control">
          <input type="number" class="input" placeholder="Quantity" id="quantity" />
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once("Includes/Modules/Footer.php"); ?>