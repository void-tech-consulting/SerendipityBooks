<?php 
  get_header(); 
  wp_enqueue_style('faq');
  require get_template_directory() . '/inc/section_vars.php';
?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" 
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
<body>
  <!-- Title of Page -->
  <header>
    <span class="bracket">[</span>
    <h1>Frequently Asked Questions</h1>
    <span class="bracket">]</span>
  </header>
    
  <!-- Section: Questions -->
  <section id="questions">
    <!-- Trade Policy -->
    <div class="quescontainer">
      <button type="button" class="questype">
        <!-- <span class="questitle">trade policy</span> -->
        <?php if (get_theme_mod($faq_type1)) { ?>
          <span class="questitle"><?php echo get_theme_mod($faq_type1) ?></span>
        <?php } ?>
        <i class="fas fa-angle-down"></i>
      </button>
  
      <?php if (get_theme_mod($faq_content1)) { ?>
          <div class="quescontent"><?php echo get_theme_mod($faq_content1) ?></div>
      <?php } ?>

      <div class="quescontent">
        <p>We do take books in for trade but do not give cash. Instead:</p>
        <p>- for any books we take, we offer 20% of the new value of the book in store credit<br>
          - store credit can be used for up to 50% of a purchase<br>
          - store credit can accumulate on your account and will not expire<br>
          - we do not guarantee a return on any books previously purchased
        </p>
  
        <p>The kind of books we look for are:</p>
  
        <p>- book club choices and recent award winners in paperback<br>
          - classics in paperback or hardback<br>
          - popular children’s books in great condition (think Wimpy Kids, Harry Potter, Magic Tree House)<br>
          - unusual and eclectic vintage treasures<br>
          - popular current reads (think Grisham, Patterson, Lee Child, Nora Roberts)
        </p>
  
        <p>No appointment is necessary; books can be dropped off at any time. We’ll call you with the total to be 
        credited to your account. Unwanted books will be donated or you can pick them up.</p>
  
        <p>Store credit can be applied towards used books already in the store. It cannot be applied against special 
        orders, new books or other items (such as journals, soaps, pins etc).</p>
      </div>
    </div>
    

    <!-- Gift Cards -->
    <div class="quescontainer">
      <button type="button" class="questype">
        <!-- <span class="questitle">gift cards</span> -->
        <?php if (get_theme_mod($faq_type2)) { ?>
          <span class="questitle"><?php echo get_theme_mod($faq_type2) ?></span>
        <?php } ?>
        <i class="fas fa-angle-down"></i>
      </button>

      <?php if (get_theme_mod($faq_content2)) { ?>
          <div class="quescontent"><?php echo get_theme_mod($faq_content2) ?></div>
      <?php } ?>

      <div class="quescontent">
        <p>Electronic gift cards for shopping at the brick and mortar are available here.</p>
  
        <p>Please note: our gift cards only work for items purchased through Serendipity Books brick and mortar. 
        They do not play nicely with our affiliate.</p>
      </div>
    </div>
    

    <!-- Local Authors -->
    <div class="quescontainer">
      <button type="button" class="questype">
        <!-- <span class="questitle">local authors</span> -->
        <?php if (get_theme_mod($faq_type3)) { ?>
          <span class="questitle"><?php echo get_theme_mod($faq_type3) ?></span>
        <?php } ?>
        <i class="fas fa-angle-down"></i>
      </button>

      <?php if (get_theme_mod($faq_content3)) { ?>
          <div class="quescontent"><?php echo get_theme_mod($faq_content3) ?></div>
      <?php } ?>

      <div class="quescontent">
        <p>Congratulations on pursuing the best activity ever. As a writer, rest assured that I 
        understand all the effort, joy and pain that went into your work.</p>
        <p>I do carry a selection of local works on consignment. I also support a few authors 
        with book launches and events. However, Serendipity Books is a small Indie store 
        and the world of self-publishing has exploded. As much I’d like, I simply cannot 
        support every local author deserving of events and book launches and big fancy 
        parties. However, fill in the form below and let me know all about your work. If the 
        fit seems like a good one, I’ll be in touch.</p>
        <p>Many thanks for considering Serendipity Books–and congratulations on your 
        massive achievement,</p>
        <p>Michelle.</p>
      </div>
    </div>
    

    <!-- Contactless Pickup -->
    <div class="quescontainer">
      <button type="button" class="questype">
        <!-- <span class="questitle">contactless pickup</span> -->
        <?php if (get_theme_mod($faq_type4)) { ?>
          <span class="questitle"><?php echo get_theme_mod($faq_type4) ?></span>
        <?php } ?>
        <i class="fas fa-angle-down"></i>
      </button>

      <?php if (get_theme_mod($faq_content4)) { ?>
          <div class="quescontent"><?php echo get_theme_mod($faq_content4) ?></div>
      <?php } ?>

      <div class="quescontent">
        <p>Click here to schedule a pickup.</p>
      </div>
    </div>
    

    <!-- Delivery Service -->
    <div class="quescontainer">
      <button type="button" class="questype">
        <!-- <span class="questitle">delivery service</span> -->
        <?php if (get_theme_mod($faq_type5)) { ?>
          <span class="questitle"><?php echo get_theme_mod($faq_type5) ?></span>
        <?php } ?>
        <i class="fas fa-angle-down"></i>
      </button>

      <?php if (get_theme_mod($faq_content5)) { ?>
          <div class="quescontent"><?php echo get_theme_mod($faq_content5) ?></div>
      <?php } ?>

      <div class="quescontent">
        <p>For free deliveries visit here or call us at (734) 475-7148. If you need title 
        suggestions, Michelle can help. If you don’t see the book you want on our website, shop our 
        extended inventory here.</p>
      </div>
    </div>
    

    <!-- Private Appointments -->
    <div class="quescontainer">
      <button type="button" class="questype">
        <!-- <span class="questitle">private appointments</span> -->
        <?php if (get_theme_mod($faq_type6)) { ?>
          <span class="questitle"><?php echo get_theme_mod($faq_type6) ?></span>
        <?php } ?>
        <i class="fas fa-angle-down"></i>
      </button>

      <?php if (get_theme_mod($faq_content6)) { ?>
          <div class="quescontent"><?php echo get_theme_mod($faq_content6) ?></div>
      <?php } ?>

      <div class="quescontent">
        <p>If you would like to schedule a private appointment click here.</p>
      </div>
    </div>
  </section>
  
  <!-- Section: Image 2 -->
  <img id="image" src=<?php echo get_template_directory_uri() . "/img/image.png" ?> alt="Birds">
</body>

<?php get_footer(); ?>