<?php get_header(); ?>

        <div class="intro-left">
            <div class="container-fluid full-height">
                <div class="row text-center align-items-center full-height">
                    <div class="col">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Headshot_Valerie_Ricot.png" alt="User avatar" class="headshot">
                        <h1 id="name">Valerie Ricot</h1>
                        <p id="title">Web Developer | Storyteller</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8 panel-right">

                    <section class="quote mt-3">
                        <figure class="text-end">
                            <blockquote class="blockquote">
                              <p>"We all live in a network of stories.”
                            </p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                              Jimmy Neil Smith, <cite title="Source Title">The International Storytelling Center</cite>
                            </figcaption>
                          </figure>
                    </section>
                    <section class="intro">
                        <p class="display-6">my goal is to make sure your story gets told--functionally, beautifully.</p>
                    </section>
                    <section class="skills">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1 class="display-6">hard skills:</h1>
                                    <ul>
                                        <li>
                                            HTML5, CSS3, JavaScript
                                        </li>
                                        <li>
                                            MongoDB, Express, Node.js, PHP
                                        </li>
                                        <li>
                                            WordPress, GitHub, Heroku, Cloudinary
                                        </li>
                                        <li>
                                            Adobe Photoshop, Illustrator
                                        </li>
                                        <li>
                                            Google!
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="display-6">soft skills:</h1>
                                    <ul>
                                        <li>
                                            Writing & communication
                                        </li>
                                        <li>
                                            Organized planning and optimization
                                        </li>
                                        <li>
                                            Addicted to learning
                                        </li>
                                        <li>
                                            Empathy for both left and right-brained thinkers
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                       
   <!--Project Modal Buttons Section-->                  
                    </section>
                    <section class="projects">
                        <h2 class="display-6">my projects:</h2>
                            <div class="containter-fluid">
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <button type="button" class="btn btn-lg project-link modal-open" data-bs-toggle="modal" data-bs-target="#work-nomad">
                                            <img class="img-fluid thumbnail" src="<?php echo get_template_directory_uri(); ?>/img/WorkNomad.png" alt="" id="work-nomad-btn" data-modal="work-nomad">
                                        </button></col-md-6>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <button type="button" class="btn btn-lg project-link modal-open" data-bs-toggle="modal" data-bs-target="#personal-portfolio">
                                            <img class="img-fluid thumbnail" src="<?php echo get_template_directory_uri(); ?>/img/Personal-Portfolio.png" alt="" data-modal="personal-portfolio">
                                        </button></col-md-6>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <button type="button" class="btn btn-lg project-link modal-open" data-bs-toggle="modal" data-bs-target="#score-keeper">
                                            <img class="img-fluid thumbnail" src="<?php echo get_template_directory_uri(); ?>/img/Score-Keeper.png" alt="" data-modal="score-keeper">
                                        </button></col-md-6>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <button type="button" class="btn btn-lg project-link modal-open" data-bs-toggle="modal" data-bs-target="#cyber-museum">
                                            <img class="img-fluid thumbnail" src="<?php echo get_template_directory_uri(); ?>/img/Cyber-Museum.png" alt="" data-modal="cyber-museum">
                                        </button>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <button type="button" class="btn btn-lg project-link modal-open" data-bs-toggle="modal" data-bs-target="#product-landing-page">
                                            <img class="img-fluid thumbnail" src="<?php echo get_template_directory_uri(); ?>/img/Product-Landing-Page.png" alt="" data-modal="product-landing-page">
                                        </button>
                                        </col-md-6>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <button type="button" class="btn btn-lg project-link modal-open" data-bs-toggle="modal" data-bs-target="#survey-form">
                                            <img class="img-fluid thumbnail" src="<?php echo get_template_directory_uri(); ?>/img/Survey-Form.png" alt="" data-modal="survey-form">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <!--Switch to a tag later-->
                        <p class="float-end mt-3 px-3">more coming soon!</p>
                    </section>

    <!--Modals Section-->
        <div id="work-nomad" class="modal fade" tabindex="-1" aria-labelledby="work-nomad" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="work-nomad">WorkNomad</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <video class="modal-video" src="<?php echo get_template_directory_uri(); ?>/video/WorkNomad-Walkthrough.mp4" controls autoplay="autoplay"></video>
                        <a href="https://worknomad.herokuapp.com/" target="_blank">View Live Site</a><br>
                        <a href="https://github.com/vricot/WorkNomad" target="_blank">View Source Code</a>
                        <p>App to find and review work-friendly spots in your area. Built <b>RESTfully</b> with full <b>CRUD</b> and <b>MVC</b> using <b>MongoDB,</b> <b>Express</b>, & <b>Node.js</b>. Deployed on <b>Heroku</b>.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="personal-portfolio" class="modal fade" tabindex="-1" aria-labelledby="personal-portfolio" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="personal-portfolio">Personal Portfolio</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <video class="modal-video" src="<?php echo get_template_directory_uri(); ?>/video/Final_Personal_Web_Vid.mp4" controls autoplay="autoplay"></video>
                        <a href="https://github.com/vricot/PersonalPortfolio-WP" target="_blank">View Source Code</a>
                        <p>Personal Portfolio featuring all of my interests, hobbies, and freelance work. Responsive Web Design Project for freeCodeCamp using <b>HTML5</b>, <b>CSS3</b>, some <b>JavaScript</b>, <b>Font Awesome</b>, <b>Google Fonts</b>, and some <b>Bootstrap 4</b>. Built with <b>PHP</b>, <b>Local</b>, <b>XAMPP</b>, and <b>WordPress CMS</b>. Still in development.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="score-keeper" class="modal fade" tabindex="-1" aria-labelledby="score-keeper" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="score-keeper">Score Keeper</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <video class="modal-video" src="<?php echo get_template_directory_uri(); ?>/video/Score-Keeper-Walkthrough.mp4" controls autoplay="autoplay"></video>
                        <a href="https://github.com/vricot/Score-Keeper" target="_blank">View Source Code</a>
                        <p>Ping Pong Score-Keeper built using <b>HTML5</b>, <b>Bulma</b>, and <b>JavaScript</b>. Colt Steele Udemy Web Developer Bootcamp Project.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="cyber-museum" class="modal fade" tabindex="-1" aria-labelledby="cyber-museum" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="cyber-museum">Cyber Museum</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <video class="modal-video" src="<?php echo get_template_directory_uri(); ?>/video/Cyber-Museum-Walkthrough.mov" controls autoplay="autoplay"></video>
                        <a href="https://github.com/vricot/Cyber-Museum" target="_blank">View Source Code</a>
                        <p>Home landing page for Cyber Museum. Built using <b>HTML5</b> and <b>Bootstrap 4 Grid</b>. Colt Steele Udemy Web Developer Bootcamp Project.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="product-landing-page" class="modal fade" tabindex="-1" aria-labelledby="product-landing-page" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="product-landing-page">Product Landing Page</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <video class="modal-video" src="<?php echo get_template_directory_uri(); ?>/video/Product-Landing-Page-Walkthrough.mp4" controls autoplay="autoplay"></video>
                        <a href="https://github.com/vricot/Product_Landing_Page" target="_blank">View Source Code</a>
                        <p>Product Landing Page for Kawaii Melon fashion brand. Built using <b>HTML5</b>, <b>CSS3</b>, and <b>Google Fonts</b>. freeCodeCamp Responsive Web Design project.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="survey-form" class="modal fade" tabindex="-1" aria-labelledby="survey-form" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="survey-form">Background Survey Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <video class="modal-video" src="<?php echo get_template_directory_uri(); ?>/video/Survey-Form-Walkthrough.mp4" controls autoplay="autoplay"></video>
                        <a href="https://github.com/vricot/Survey_Form" target="_blank">View Source Code</a>
                        <p>Background Survey Form. Built using <b>HTML5</b> and <b>CSS3</b>. freeCodeCamp Responsive Web Design Project.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    <!--Resume Section-->
                    <section class="resume">
                        <a href="#" target="_blank"><h2 class="display-6">check out my resume</h2></a>
                    </section>

    <!--Blog Section--> 
                    <section class="blog">
                    <h2 class="display-6 mb-5">my blog:</h2>
                <?php 
                
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 2
                );

                $blogposts = new WP_Query($args);

                while($blogposts->have_posts()) {
                    $blogposts->the_post();
                
                
                ?>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card mb-3">
                                        <a href="<?php the_permalink(); ?>"></a>
                                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" class="card-img-top" alt="...">
                                            <div class="card-body">
                                            <a href="<?php the_permalink(); ?>"></a>
                                                <h5 class="card-title"><?php the_title(); ?></h5>
                                                <p class="card-text"><?php echo wp_trim_words(the_excerpt(), 30); ?></p>
                                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php }
                        wp_reset_query(); 
                        
                    ?>
                    <a href="<?php echo site_url('/blog'); ?>" class="float-end px-3">read more ></a>
                    </section>

    <!--Contact Section-->
                    <section class="contact">
                        <h2 class="display-6 mb-3">contact me:</h2>
                        <div class="container-fluid mb-3 icons">
                            <a href="https://github.com/vricot" class="font-awesome" id="github" target="_blank"><i class="fa fa-github"></i> GitHub</a>
                            <a href="https://www.linkedin.com/in/valerie-ricot-66b772a1/" target="_blank"><i class="fa fa-linkedin" id="linkedin"></i> LinkedIn</a>
                        </div>
                        <div class="containter-fluid">
                            <div class="col-lg-6 offset-lg-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name:</label>
                                        <input type="text" class="form-control" id="name-input" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                                      </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="mb-3">
                                    <label for="message" class="form-label">Example textarea</label>
                                    <textarea class="form-control" id="message" rows="3"></textarea>
                                  </div>
                                </div>
                        <button type="button" class="btn btn-success float-end">Send</button>
                    </div>
                    </section>
                    

<?php get_footer(); ?>