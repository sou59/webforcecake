<?php get_header(); ?>

<!-- Corps de ma page -->
<div id="story" class="light-wrapper">
            <section class="zigzag-top"></section>
              <div class="container inner">
                  <h2 class="section-title text-center">Qui sommes nous ?</h2>
                  <p class="lead main text-center">Notre mot d'ordre : des produits de qualité pour des gâteaux réussis</p>
                  <div class="row text-center story">

                          <?php
                              $args = array(
                                "post_type" => "items_story", // quel type je souhaite récupérer ?
                                "posts_per_page" => 3,
                                "orderby" => 'ID',
                                'order' => 'ASC',                         // nombre d'éléments retourné par la requête
                                    //ici non du tags
                                    // 'tags' => 'story'
                              );

                                // requête personnalisé pour récupérer des items media
                                $items = new WP_Query($args);
                                //var_dump($items);

                                // boucle sur cette variable : 

                                if($items->have_posts()) {
                                    while($items->have_posts()) {
                                        // il fautr iétere sur un post de $items sinon boucle infinie
                                        $items->the_post();
                                        ?>
                                      <div class="col-sm">
                                        <div class="col-wrapper">
                                            <?php
                                            // solution 2 avec plus de liberté pour l'affichage et la mise en page
                                                $thumbnailId = get_post_thumbnail_id($post->ID);
                                               // $image = wp_get_attachment_image_src($thumbnailId, "medium"); // 2e paramètre pour que l'image s'affiche entièrement
                                                //var_dump($thumbnailId);

                                            ?>  
                                            <!-- affichage du contenu texte -->
                                            <?php the_content(); ?>  

                                        </div>
                                      </div>  

                                        <?php
                                    }
                                }

                            ?>

                      </div>
                  </div>
                <!-- /.services --> 
            
            <!-- /.container -->
            <section class="zigzag-bottom"></section>
        </div><!-- #story -->


        <div id="facts" class="parallax parallax2 facts">
            <div class="container inner">
                <div class="row text-center services-3">

                    <?php
                        $args = array(
                          "post_type" => "items_stat", // quel type je souhaite récupérer ?
                          "posts_per_page" => 4   // nombre d'éléments retourné par la requête

                        );

                          // requête personnalisé pour récupérer des items media
                          $items = new WP_Query($args);
                          //var_dump($items);

                          // boucle sur cette variable : 
                          if($items->have_posts()) {
                              while($items->have_posts()) {
                                  // il fautr iétere sur un post de $items sinon boucle infinie
                                  $items->the_post();
                                  ?>
                                <div class="col-sm">
                                    <div class="col-wrapper">
                                      <?php
                                      // solution 2 avec plus de liberté pour l'affichage et la mise en page
                                          $thumbnailId = get_post_thumbnail_id($post->ID);
                                          // $image = wp_get_attachment_image_src($thumbnailId, "medium"); // 2e paramètre pour que l'image s'affiche entièrement
                                          //var_dump($thumbnailId);

                                      ?>  
                                      <!-- affichage du contenu texte -->
                                      <?php the_content(); ?>  

                                    </div> <!-- END COL-WRAPPER --> 
                                </div>  <!-- END COL-SM --> 

                                    <?php
                              }
                          }

                    ?>
                
                </div> <!-- END ROW--> 
            </div> <!-- END container INNER --> 
            
        </div><!-- END #facts -->




        <div id="food-menu" class="light-wrapper">
            <section class="zigzag-top"></section>
            <div class="container inner">
                <h2 class="section-title text-center">Notre carte</h2>
                <p class="lead main text-center">Faites votre choix !</p>

                <div class="row">
                    
                    <?php
                    $args = array(
                        "post_type" => "items_carte", // quel type je souhaite récupérer ?
                        "posts_per_page" => 3   // nombre d'éléments retourné par la requête

                    );

                    // requête personnalisé pour récupérer des items media
                    $items = new WP_Query($args);
                    //var_dump($items);

                    // boucle sur cette variable : 
                    if($items->have_posts()) {
                        while($items->have_posts()) {
                            // il fautr iétere sur un post de $items sinon boucle infinie
                            $items->the_post();
                            ?>
                        <div class="col-sm">
                            <div class="menu-images">
                                <?php
                                // solution 2 avec plus de liberté pour l'affichage et la mise en page
                                    $thumbnailId = get_post_thumbnail_id($post->ID);
                                    $image = wp_get_attachment_image_src($thumbnailId, "medium"); // 2e paramètre pour que l'image s'affiche entièrement
                                    //var_dump($image);
                                    ?>
                                    <img src="<?php echo $image[0]; ?>" class="img-media" alt="Logo de <?php the_title(); ?>">

                                  
                            </div>
                            <div class="menu-titles">
                            <h1><?php the_title(); ?></h1>
                            </div>
                            <div class="menu-items ">  
                                    <!-- affichage du contenu texte -->
                                <?php the_content(); ?>
                            </div>  


                </div>  <!-- END COL-SM --> 

                                    <?php
                              }
                          }

                    ?>
            </div> 

        </div> <!-- /.container -->


            
            <section class="zigzag-bottom"></section>
        </div><!--/#food-menu-->

    <!-- MENU -->
        <div id="special-offser" class="parallax pricing">
            <div class="container inner">

                <h2 class="section-title text-center">Menus</h2>
                <p class="lead main text-center">Pas la peine de se priver...</p>

                <div class="row">
                            <?php
                                $args = array(
                                    "post_type" => "items_menu", // quel type je souhaite récupérer ?
                                    "posts_per_page" => 4   // nombre d'éléments retourné par la requête
                                );

                                // requête personnalisé pour récupérer des items media
                                $items = new WP_Query($args);
                                //var_dump($items);

                                // boucle sur cette variable : 
                                if($items->have_posts()) {
                                    while($items->have_posts()) {
                                        // il fautr iétere sur un post de $items sinon boucle infinie
                                        $items->the_post();
                                        ?>
                                    <div class="col-md-6 col-sm-6">

                                        <div class="pricing-item">
                                            <?php
                                            // solution 2 avec plus de liberté pour l'affichage et la mise en page
                                                $thumbnailId = get_post_thumbnail_id($post->ID);
                                                $image = wp_get_attachment_image_src($thumbnailId, "medium"); // 2e paramètre pour que l'image s'affiche entièrement
                                                //var_dump($image);
                                                ?>
                                                <img src="<?php echo $image[0]; ?>" class="img-media" alt="Logo de <?php the_title(); ?>">

                                            
                                            <div class="pricing-item-details">                
                                                <h3><?php the_title(); ?></h1>
                                                <p><!-- affichage du contenu texte -->  <?php the_content(); ?> </p>
                                                <a class="btn btn-danger" href="#">Plus d'infos</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        <!--price tag-->
                                            <span class="hot-tag br-red"><?php get_post_meta($post->ID); ?></span>
                                            <div class="clearfix"></div>
                                        </div>

                                     </div> <!-- END col-md-6 col-sm-6 -->  
                    
                                        <?php
                                    }
                                }
                                ?>

                    <div class="clearfix visible-md"></div><!-- clearfix visible-md -->
                    
                </div>
                <!-- END ROW -->

                           

                            <!-- <div class="pricing-item-details">

                                <h3><a href="#">Menu cheesecake</a></h3>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                <a class="btn btn-danger" href="#">Plus d'infos</a>
                                <div class="clearfix"></div>
                            </div>
                            price tag
                            <span class="hot-tag br-red">6€90</span>
                            <div class="clearfix"></div>
                        </div>
                    </div> -->
                    <!-- END col-md-6 col-sm-6 --> 
                    <!-- <div class="col-md-6 col-sm-6">

                        <div class="pricing-item">

                    

                            <div class="pricing-item-details">

                                <h3><a href="#">Menu muffins</a></h3>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                <a class="btn btn-danger" href="#">Plus d'infos</a>
                                <div class="clearfix"></div>
                            </div> -->
                            <!--price tag-->
                            <!-- <span class="hot-tag br-lblue">5€90</span>
                            <div class="clearfix"></div>
                        </div>
                    </div> -->
                    <!-- END col-md-6 col-sm-6 --> 
                    <!-- <div class="clearfix visible-md"></div> -->
                    <!-- clearfix visible-md --> 
                    <!-- <div class="col-md-6 col-sm-6">

                        <div class="pricing-item">

                            <a href="#"><img class="img-responsive img-thumbnail" src="<?= get_template_directory_uri(); ?>/img/menu/cookies-chocolat.jpg" alt=""></a>

                            <div class="pricing-item-details">

                                <h3><a href="#">Menu cookies</a></h3>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                <a class="btn btn-danger" href="#">Plus d'infos</a>
                                <div class="clearfix"></div>
                            </div>
                            <!--price tag-->
                            <span class="hot-tag br-green">4€90</span>
                            <div class="clearfix"></div>
                        </div>
                    <!-- </div>
                    <div class="col-md-6 col-sm-6">

                        <div class="pricing-item">

                            
                            <div class="pricing-item-details">

                                <h3><a href="#">Le Big Menu</a></h3>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                <a class="btn btn-danger" href="#">Plus d'infos</a>
                                <div class="clearfix"></div>
                            </div>
                            <!--price tag-->
                            <!-- <span class="hot-tag br-red">9€90</span>
                            <div class="clearfix"></div>
                        </div> -->
                    <!-- </div>
                </div> -->

            </div> <!-- END CONTAINER INNER --> 
             
        </div><!-- END /#special-offser -->




        <div id="reservation" class="light-wrapper">
            <section class="zigzag-top"></section>
            <div class="container inner">
                <h2 class="section-title text-center">Réservation</h2>
                <p class="lead main text-center">Il n'y aura pas de place pour tout le monde alors réservez votre place</p>
                <div class="row">
                    <div class="col-md-6">
                        <form class="form form-table" method="post" name="">
                            <div class="form-group">
                                <h4>Remplissez le formulaire pour votre réservation (tous les champs sont obligatoires)</h4>
                            </div>

                            <div class="row">
                              <div class="col-md form-group">
                                <label class="sr-only" for="first_name1">prénom</label>
                                <input class="form-control hint" type="text" id="first_name1" name="first_name" placeholder="Prénom" required="">
                              </div>
                              <div class="col-md form-group">
                                <label class="sr-only" for="last_name1">nom</label>
                                <input class="form-control hint" type="text" id="last_name1" name="last_name" placeholder="Nom" required="">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md form-group">
                                <label class="sr-only" for="email1">email</label>
                                <input class="form-control hint" type="email" id="email1" name="email" placeholder="Email" required="">
                              </div>
                              <div class="col-md form-group">
                                <label class="sr-only" for="phone1">téléphone</label>
                                <input class="form-control hint" type="text" id="phone1" name="phone" placeholder="Téléphone" required="">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md form-group">
                                <label class="sr-only" for="reserv_date1">jour de réservation</label>
                                <input class="form-control datepicker hasDatepicker hint" type="text" id="reserv_date1" name="reserv_date" placeholder="Jour de réservation" required="">
                              </div>
                              <div class="col-md form-group">
                                <label class="sr-only" for="numb_guests1">nombre de personnes</label>
                                <input class="form-control hint" type="text" id="numb_guests1" name="numb_guests" placeholder="Nombre de personnes" required="">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md">
                                <button type="submit" class="btn btn-danger btn-lg">Je réserve</button>
                              </div>
                            </div>
                          </form>
                    </div><!-- col-md-6 -->
                    <div class="col-md offset-md-1">

                        <h3><i class="fa fa-clock-o fa-fw"></i>Horaires</h3>
                        <h4>Petit dej'</h4>
                        <p>Lun au Ven: 11h-11h30
                        <h4>Goûter</h4>
                        <p>Lun au Ven: 15h30-16h</p>

                        <h3><i class="fa fa-map-marker fa-fw"></i>Adresse</h3>
                        <p>105 Avenue de la république - 59110 La Madeleine</p>

                        <h3><i class="fa fa-mobile fa-fw"></i>Contact</h3>
                        <p>Email: <a href="mailto:cooking@wf3.fr">cooking@wf3.fr</a></p>
                        <p>Tél: 0123456789</p>

                    </div><!-- col-md-6 -->
                </div>
                <!-- /.services --> 
            </div>
            <!-- /.container -->
            <section class="zigzag-bottom"></section>
        </div><!-- #reservation -->



<?php get_footer(); ?>