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
<?php echo do_shortcode('[product_page id="31"]'); ?>
  <div id="shop-book-path"><?php echo $product->get_categories();?></div>
  <div id="shop-book-flex">
    <div id="shop-bookcover">

      <img src=<?php 
      $key = "ISBN";
      $value = "9781564026668";
      $size = "L";
      $ean = $product->get_attribute('ean');
      echo "http://covers.openlibrary.org/b/isbn/$ean-L.jpg" ?> alt=""; ?>
    </div>
    
    <div id="shop-bookdesc">
      <!-- Title, Author, Price -->
      <div class="book-sectionheader">
      <?php echo $product->get_name();?>
      </div>
      <div class="book-sectionheader"><?php echo $product->get_price();?></div>
      <hr>

      <!-- Options -->
      <div class="book-sectionheader"><?php if (get_theme_mod($option_header)) {
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
      <hr>

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
        <div class="quantity-box">
          <div id="minus" class="quantity-operator">–</div>
          <div id="book-quantity" class="quantity-num">1</div>
          <div id="plus" class="quantity-operator">+</div>
        </div>
        <div class="addtocart">
          <img src=<?php echo get_template_directory_uri() . "/img/shopping_cart.png"?> alt="Shopping Cart">
          <?php echo do_shortcode('[add_to_cart id="'.$post->ID.'"]'); ?>
        </div>
      </div>
        
      <div class="quantity-left"><?php echo $product->get_stock_quantity();?></div>
      <hr>

      <!-- Description -->
      <div class="book-sectionheader">Description</div>
      <div class="book-desc-content">
      <?php echo $product->get_description();?>
        <!-- <p>Date Published: 1/5/2021</p>
        <p>Condition: New</p>
        <p>Ages 14 And Up, Grades 9 And Up Young Adult Fiction / Romance / Romantic Comedy</p>
        <p>Summary:<br>Jane the Virgin meets To All the Boys I’ve Loved Before in this charming debut romantic comedy 
          filled with Black Girl Magic. Perfect for fans of Jenny Han, Mary H.K. Choi, and Nicola Yoon.
        </p>
        <p>Sixteen-year-old Tessa Johnson has never felt like the protagonist in her own life. She’s rarely seen herself 
          reflected in the pages of the romance novels she loves. The only place she’s a true leading lady is in her own 
          writing—in the swoony love stories she shares only with Caroline, her best friend and #1 devoted reader.
        </p>
        <p>When Tessa is accepted into the creative writing program of a prestigious art school, she’s excited to finally 
          let her stories shine. But when she goes to her first workshop, the words are just...gone. Fortunately, 
          Caroline has a solution: Tessa just needs to find some inspiration in a real-life love story of her own. And 
          she’s ready with a list of romance-novel-inspired steps to a happily ever after that will surely refill Tessa’s 
          creative well. Nico, the brooding artist who looks like he walked out of one of Tessa’s stories, is cast as the 
          perfect Prince Charming.
        </p>
        <p>But as Tessa checks each item off Caroline’s list, she gets further and further away from finding her words, 
          and herself, again. She’s well on her way to having her own real-life love story, yet she can’t help but wonder…
          Is it the one she wants, after all?
        </p> -->
      </div>
    </div>
  </div>
  
</body>
</html>

<?php get_footer(); ?>