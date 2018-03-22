<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!-- wrapper   -->
            <div id="wrapper">
                <!--content-holder   -->
                <div class="content-holder">
                    <!-- Arrow nav   -->
                    <div class="arrowpagenav"></div>
                    <!-- Arrow nav end  -->
                    <div class="hero-wrap fl-wrap full-height" id="sec1">
                        <div class="media-container">
                            <div class="video-holder">
                                <!--=============== add you video id  in data-vim=""  ===============-->
                                <div  class="background-vimeo" data-vim="145052212"> </div>
                                <div class="mob-bg bg" data-bg="http://localhost/ericWP/wp-content/uploads/2018/03/bg_1.jpg"></div>
                            </div>
                        </div>
                        <div class="full-screen-item" >
                            <div class="hero-title">
                                <div class="hr-text">
                                    <h3>Eric Lay</h3>
									<div class="clearfix"></div>
									<span class="bold-separator"></span>
									<div class="clearfix"></div>
									<p>
										League of Legends consultant and Coach
									</p>
									<div class="clearfix"></div>
                                    <a href="#sec2" class="btn hide-icon custom-scroll-link"><i class="fa fa-eye"></i><span>Let's Start</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content column-wrap scroll-con">
                        <!--section  -->
                        <section id="sec2" data-scrollax-parent="true" class="scroll-con-sec">
                            <!-- container  -->
                            <div class="container">
                                <!-- section-title  -->
                                <div class="section-title">
                                    <h2>About me</h2>
<div class="clearfix"></div>
                                    <span class="bold-separator"></span>
                                </div>
                                <!--section-title end    -->
                                <div class="about-wrap fl-wrap">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="impulse-wrap fl-wrap">
                                                <div class="mm-par-wrap fl-wrap">
                                                    <div class="mm-parallax">
                                                        <img src="http://localhost/ericWP/wp-content/uploads/2018/03/about2.jpg" class="respimg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="par-title">
                                                <h4>Hello , I am </h4>
                                                <h3>Eric Lay</h3>
                                                <span class="bold-separator"></span>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-separator about-sep fl-wrap"></div>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="about-text fl-wrap">
                                                <h3 class="text-title">League of Legends Consultant & <span>Coach</span></h3>
                                                <p><?php the_field('introduction'); ?></p>
                                                <a href="portfolio.html" class="btn hide-icon"  ><i class="fa fa-eye"></i><span>My Portfolio</span></a>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="bio-list-wrap fl-wrap">
                                                <ul class="fl-wrap bio-list">
                                                    <li>
                                                        <span>Specialization : </span><a href="#">Player , Coach</a>
                                                    </li>
                                                    <li>
                                                        <span>Date of Birth : </span><a href="#">00 jan 1900</a>
                                                    </li>
                                                    <li>
                                                        <span>Rank : </span> <a href="#">Challenger 2000lp</a>
                                                    </li>
                                                    <li>
                                                        <span>Hobby  : </span> <a href="#">Instagram , Instagram</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="section-separator about-sep fl-wrap"></div>
                                <div class="inline-facts-holder fl-wrap color-bg">
                                    <!-- inline-facts -->
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="3" data-num="3">0</div>
                                            </div>
                                        </div>
                                        <h6>Seasons Challenger </h6>
                                        <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                                    </div>
                                    <!-- inline-facts end -->
                                    <!-- inline-facts  -->
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="2200" data-num="2200">0</div>
                                            </div>
                                        </div>
                                        <h6>Coaching Hours </h6>
                                        <i class="fa fa-trophy" aria-hidden="true"></i>
                                    </div>
                                    <!-- inline-facts end -->
                                    <!-- inline-facts  -->
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="14000" data-num="14000">0</div>
                                            </div>
                                        </div>
                                        <h6>Games PLayed </h6>
                                        <i class="fa fa-child" aria-hidden="true"></i>
                                    </div>
                                    <!-- inline-facts end -->
                                    <!-- inline-facts  -->
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="1000" data-num="1000">0 +</div>
                                            </div>
                                        </div>
                                        <h6>Hours research in sports psychology, athletics, and performance</h6>
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    </div>
                                    <!-- inline-facts end -->
                                </div>
                            </div>
                            <div class="parallax-title right-pos" data-scrollax="properties: { translateY: '-350px' }">About Myself</div>
                        </section>
                        <div class="section-separator   fl-wrap"></div>
                        <!-- section    -->
                        <section id="sec7" data-scrollax-parent="true"  class="scroll-con-sec" >
                            <div class="container">
                                <!-- section-title  -->
                                <div class="section-title">
                                    <h2> Services</h2>
                                    <p><?php the_field('services_intro'); ?></p>
                                    <span class="bold-separator"></span>
                                </div>
                                <!--section-title end  -->
                                <!--serv-carousel-wrap -->
                                <div class="serv-carousel-wrap single-carousel-holder  fl-wrap">
                                    <div class="serv-carousel fl-wrap single-carousel">
                                        <!--serv-item  -->
                                        <div class="item">
                                            <div class="serv-item fl-wrap">
                                                <div class="serv-image fl-wrap">
                                                    <div class="box-item vis-det   fl-wrap">
                                                        <img  src="http://localhost/ericWP/wp-content/uploads/2018/03/service_1.jpg" class="respimg"    alt="">
                                                        <a data-src="http://localhost/ericWP/wp-content/uploads/2018/03/service_1.jpg" class="image-popup single-popup"><i class="fa fa-search"></i></a>
                                                    </div>
                                                </div>
                                                <div class="services-box-info">
                                                    <span class="services-decor"></span>
                                                    <h4> Coaching</h4>
                                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                                                    <ul>
                                                        <li>Service</li>
                                                        <li>Service</li>
                                                        <li>Service</li>
                                                        <li>Service </li>
                                                    </ul>
                                                    <div class="clear"></div>
                                                    <div class="price">Contact</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--serv-item end -->
                                        <!--serv-item  -->
                                        <div class="item">
                                            <div class="serv-item fl-wrap">
                                                <div class="serv-image fl-wrap">
                                                    <div class="box-item vis-det   fl-wrap">
                                                        <img  src="http://localhost/ericWP/wp-content/uploads/2018/03/service_1.jpg" class="respimg"    alt="">
                                                        <a data-src="http://localhost/ericWP/wp-content/uploads/2018/03/service_1.jpg" class="image-popup single-popup"><i class="fa fa-search"></i></a>
                                                    </div>
                                                </div>
                                                <div class="services-box-info">
                                                    <span class="services-decor"></span>
                                                    <h4> Service</h4>
                                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                                                    <ul>
                                                        <li>Service</li>
                                                        <li>Service</li>
                                                        <li>Service</li>
                                                        <li>Service </li>
                                                    </ul>
                                                    <div class="clear"></div>
                                                    <div class="price">Contact</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--serv-item end -->
                                        <!--serv-item  -->
                                        <div class="item">
                                            <div class="serv-item fl-wrap">
                                                <div class="serv-image fl-wrap">
                                                    <div class="box-item vis-det   fl-wrap">
                                                        <img  src="http://localhost/ericWP/wp-content/uploads/2018/03/service_1.jpg" class="respimg"    alt="">
                                                        <a data-src="http://localhost/ericWP/wp-content/uploads/2018/03/service_1.jpg" class="image-popup single-popup"><i class="fa fa-search"></i></a>
                                                    </div>
                                                </div>
                                                <div class="services-box-info">
                                                    <span class="services-decor"></span>
                                                    <h4>Service</h4>
                                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                                                    <ul>
                                                        <li>Service</li>
                                                        <li>Service</li>
                                                        <li>Service</li>
                                                        <li>Service </li>
                                                    </ul>
                                                    <div class="clear"></div>
                                                    <div class="price">Contact</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--serv-item end -->                                                                             
                                        <!--serv-item  -->
                                        <div class="item">
                                            <div class="serv-item fl-wrap">
                                                <div class="serv-image fl-wrap">
                                                    <div class="box-item vis-det   fl-wrap">
                                                        <img  src="http://localhost/ericWP/wp-content/uploads/2018/03/service_1.jpg" class="respimg"    alt="">
                                                        <a data-src="http://localhost/ericWP/wp-content/uploads/2018/03/service_1.jpg" class="image-popup single-popup"><i class="fa fa-search"></i></a>
                                                    </div>
                                                </div>
                                                <div class="services-box-info">
                                                    <span class="services-decor"></span>
                                                    <h4> Service</h4>
                                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                                                    <ul>
                                                        <li>Service</li>
                                                        <li>Service</li>
                                                        <li>Service</li>
                                                        <li>Service </li>
                                                    </ul>
                                                    <div class="clear"></div>
                                                    <div class="price">$$$</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--serv-item end -->                                
                                    </div>
                                    <div class="customNavigation">
                                        <a class="next-slide transition"><i class="fa fa-angle-right"></i></a>
                                        <a class="prev-slide transition"><i class="fa fa-angle-left"></i></a>
                                    </div>
                                </div>
                                <!--serv-carousel-wrap end -->
                                <!--order-wrap   -->
                                <div class="fl-wrap order-wrap">
                                    <h4>Ready to be a pro ? </h4>
                                    <a href="contact.html" class="btn hide-icon no-align"><i class="fa fa-envelope-o"></i><span>Get in Touch</span></a> 
                                </div>
                                <!--order-wrap end -->
                            </div>
                            <div class="parallax-title right-pos" data-scrollax="properties: { translateY: '-350px' }">Services</div>
                        </section>
                        <div class="section-separator   fl-wrap"></div>
                        <!-- section end  -->
                        <section id="sec8" data-scrollax-parent="true" class="scroll-con-sec">
                            <div class="container">
                                <!-- section-title  -->
                                <div class="section-title">
                                    <h2> Clients</h2>
                                    <p><?php the_field('clients_intro'); ?></p>
                                    <span class="bold-separator"></span>
                                </div>
                                <!--section-title end    -->
                                <div class="testimonials-slider-holder fl-wrap">
                                    <div class="testimonials-slider owl-carousel">
                                        <!-- item-->
                                        <div class="item">
                                            <div class="testi-item">
                                                <div class="testi-image">
                                                    <img src="http://localhost/ericWP/wp-content/uploads/2018/03/testi_1.jpg" alt="">
                                                </div>
                                                <div class="testi-text fl-wrap">
                                                    <h3>R3DSnow</h3>
                                                    <ul class="star-rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                    <p> " I was very sceptical about pricing but I'm proud to say i did. Ive has a coach before and difference between them is incredible. Ive only done one session and managed to climb two tiers in silver in a matter of days. Really looking forward to my next session. Best coach I've ever had. Thank You Asian6ixPack"</p>
                                                    <a href="#" class="testim-link">Via GamerSensei</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- item end-->
                                        <!-- item-->
                                        <div class="item">
                                            <div class="testi-item">
                                                <div class="testi-image">
                                                    <img src="http://localhost/ericWP/wp-content/uploads/2018/03/testi_1.jpg" alt="">
                                                </div>
                                                <div class="testi-text fl-wrap">
                                                    <h3>BJ</h3>
                                                    <ul class="star-rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                    <p> "This guy is amazing. While coaching, he actively asks his students if they understand what he is explaining, while giving the best real game situation examples and solutions. post lesson, he leaves you with training and practice items that not many other coaches would leave you with. I look forward to future lessons with Eric."</p>
                                                    <a href="#" class="testim-link">Via Instagram</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- item end-->
                                        <!-- item-->
                                        <div class="item">
                                            <div class="testi-item">
                                                <div class="testi-image">
                                                    <img src="http://localhost/ericWP/wp-content/uploads/2018/03/testi_1.jpg" alt="">
                                                </div>
                                                <div class="testi-text fl-wrap">
                                                    <h3>Client 3</h3>
                                                    <ul class="star-rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                    <p> " Asunt in anim uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in anim id est laborum. Allamco laboris nisi ut aliquip ex ea commodo consequat. Aser velit esse cillum dolore eu fugiat nulla pariatur. "</p>
                                                    <a href="#" class="testim-link">Via Facebook</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- item end-->                                                            
                                    </div>
                                    <div class="customNavigation">
                                        <a class="next-slide transition"><i class="fa fa-angle-right"></i></a>
                                        <a class="prev-slide transition"><i class="fa fa-angle-left"></i></a>
                                    </div>
                                    <div class="teti-counter"></div>
                                </div>
                                <!-- clients-->
                                <div class="section-separator fl-wrap"></div>
                                <!-- section-title  -->
                                <div class="section-title aff-sec">
                                    <h2>Affiliates</h2>
                                    <p>Partners I am working with.</p>
                                    <span class="bold-separator"></span>
                                </div>
                                <!--section-title end    -->
                                <div class="clients-list fl-wrap">
                                    <ul>
                                        <li><a href="http://www.gamersensei.com" target="_blank"><span><img src="http://localhost/ericWP/wp-content/uploads/2018/03/clients2.png" alt=""></span></a></li>
                                        <li><a href="https://www.leaguecoaching.gg/" target="_blank"><span><img src="http://localhost/ericWP/wp-content/uploads/2018/03/clients3.png" alt=""></span></a></li>
                                        <li><a href="#" target="_blank"><span><img src="http://localhost/ericWP/wp-content/uploads/2018/03/clients1-1.png" alt=""></span></a></li>
                                        <li><a href="#" target="_blank"><span><img src="http://localhost/ericWP/wp-content/uploads/2018/03/clients1-1.png" alt=""></span></a></li>
                                    </ul>
                                </div>
                                <!-- clients end -->
                            </div>
                            <div class="parallax-title right-pos" data-scrollax="properties: { translateY: '-350px' }">Testimonials</div>
                        </section>
                        <!-- section  end  -->
                        <div class="section-separator   fl-wrap"></div>
                        <!-- section   -->                        
                        <section class="small-pad scroll-con-sec" id="sec9" data-scrollax-parent="true">
                            <!-- container -->
                            <div class="container">
                                <!-- section-title  -->
                                <div class="section-title">
                                    <h2>Contacts</h2>
                                    <p><?php the_field('contacts_intro'); ?></p>
                                    <span class="bold-separator"></span>
                                </div>
                                <!--section-title end    -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="align-text">
                                            <p><?php the_field('introduction_statement'); ?></p>
                                        </div>
                                        <!-- contact info -->
                                        <div class="contact-info">
                                            <ul>
                                                <li><a href="#"> <i class="fa fa-phone"></i>Discord: Sensei Eric</a></li>
                                                <li><a href="#"><i class="fa fa-motorcycle"></i> 100 Main Street, Canada Land</a></li>
                                                <li><a href="#"><i class="fa fa-envelope-o"></i> yourmail@domain.com</a></li>
                                            </ul>
                                        </div>
                                        <div class="section-separator   fl-wrap"></div>
                                        <h4 class="bold-title">Get in Touch</h4>
                                        <!-- contact form -->
                                        <div id="contact-form">
                                            <div id="message"></div>
                                            <form method="post" action="php/contact.php" name="contactform" id="contactform">
                                                <input name="name" type="text" id="name"  class="inputForm2" onClick="this.select()" value="Name" >
                                                <input name="email" type="text" id="email" onClick="this.select()" value="E-mail" >
                                                <textarea name="comments"  id="comments" onClick="this.select()" >Message</textarea>
                                                <input type="submit" class="send_message" id="submit" value="Send Message" />
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- container end-->
                            <div class="parallax-title right-pos" data-scrollax="properties: { translateY: '-350px' }">Contacts</div>
                        </section>
                        <!-- section end  -->
<?php endwhile; endif; ?>

<?php get_footer(); ?>
