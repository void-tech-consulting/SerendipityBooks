<?php 
  get_header(); 
  wp_enqueue_style('book');
  require get_template_directory() . '/inc/section_vars.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop Book Page</title>
</head>
<body>
<?php 
  echo do_shortcode('[shop_messages]');
  the_post();
  $product = wc_get_product(get_the_ID());
?>
  <div id="shop-book-path">
    <!-- <?php 
      $cats = get_the_terms(get_the_ID(), 'product_cat');
      foreach ($cats as $cat) {
        echo $cat->name . " ";
      }
    ?> -->
    <?php echo $product->get_categories();?>
  </div>
  <div id="shop-book-flex">
    <div id="shop-bookcover">

    <img src=<?php 
      $key = "ISBN";
      $value = "9781564026668";
      $size = "L";
      $ean = $product->get_attribute('ean');
      echo "http://covers.openlibrary.org/b/isbn/$ean-L.jpg"; ?> 
      
      alt=<?php echo $product->get_title(); ?>
    >
    </div>
    
    <div id="shop-bookdesc">
      <!-- Title, Author, Price -->
      <div class="book-sectionheader option-mobile">
      <?php echo $product->get_name();?>
      </div>
      <div class="book-sectionheader option-mobile"><?php echo $product->get_price();?></div>
      <hr>

      <!-- Options -->
      <div class="book-sectionheader option-mobile"><?php if (get_theme_mod($option_header)) {
            echo get_theme_mod($option_header);
          } else {
            echo "Options";
          }
          ?>
      </div>
      <label class="book-options options-container"> 
          <span class="options-text">
            <?php if (get_theme_mod($pickup_label)) {
                echo get_theme_mod($pickup_label);
              } else {
                echo "Store Pickup";
              }
              ?>
          </span>
        <input type="radio" name="choice" value="Pickup"> 
        <span class="options-check"></span>
      </label>
      <label class="book-options options-container"> 
          <span class="options-text">
            <?php if (get_theme_mod($shipping_label)) {
                echo get_theme_mod($shipping_label);
              } else {
                echo "Shipping";
              }
              ?>
          </span>
        <input type="radio" name="choice" value="Shipping">
        <span class="options-check"></span>
      </label>
      <hr class="option-mobile">

      <!-- Quantity -->
      <div class="book-sectionheader">
        <?php if (get_theme_mod($book_quantity_label)) {
                echo get_theme_mod($book_quantity_label);
              } else {
                echo "Quantity";
              }
        ?>
      </div>
      <div class="book-quantity">
        <form class="cart" method="post" enctype="multipart/form-data">
          <div class="quantity">
            <div id="minus" class="quantity-operator">–</div>
            <input type="number" step="1" min="1" max="<?php echo $product->get_stock_quantity();?>" name="quantity" id="book-quantity" value="1" title="Quantity" class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric" readonly>
            <div id="plus" class="quantity-operator">+</div>
          </div>

          <input type="hidden" name="add-to-cart" value="<?php echo get_the_ID(); ?>">

          <button type="submit" class="single_add_to_cart_button button alt">
            <img src=<?php echo get_template_directory_uri() . "/img/shopping_cart.png"?> alt="Shopping Cart">
            <i class="fa fa-cart-plus" aria-hidden="true"></i>Add to cart
          </button>
        </form>
      </div>

      <div class="quantity-left"><?php echo $product->get_stock_quantity();?> left</div>
      <hr>

      <div class="book-sectionheader option-mobile-show">
        <?php echo $product->get_name();?>
      </div>
      <hr class="option-mobile-show">

      <!-- Description -->
      <div class="book-sectionheader">Description</div>
      <div class="book-desc-content">
        <?php echo $product->get_description();?>
      </div>
    </div>
  </div>
  
</body>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</html>

<?php get_footer(); ?>