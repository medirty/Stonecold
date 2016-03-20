<?php

include "inc/header.php";

?>

    <header id="home">
        <div class="mainlogo"></div>
    </header>

    <section class="about" id="about">
        <div class="row">
            <div class="medium-6 medium-centered columns text-center">
                <h1><strong>ABOUT US</strong></h1>
                <p>We are children trapped inside adults body who love to play, explore, get lost, daydreaming and sharing stories in our way. Through the art field, aesthetic construction and dedication, now we’ve tranformed ourselves into a guerilla production house. We create short movies, documentary, company profile, tv commercial, and anything that is motion pictures!! </p>
            </div>
            <div class="medium-12 columns text-center" id="anggota">
                <ul class="no-bullet">
                    <li>Production Manager / <strong>Yosafat Novan</strong></li>
                    <li>Director, Script writer, Editor / <strong>Panji Haryo Seto</strong></li>
                    <li>Director of Photography / <strong>Farmaditya Wisnuwardana</strong></li>
                </ul>
            </div>
            <div class="medium-8 medium-centered columns">
                <ul class="small-block-grid-3 medium-block-grid-3" id="anggota_foto">
                    <li><img src="img/novan.jpg" alt=""></li>
                    <li><img src="img/Panji.jpg" alt=""></li>
                    <li><img src="img/adit.jpg" alt=""></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="gallery" id="gallery">
        <div class="row">
            <div class="medium-12 columns text-center" id="gallery_quote">
                <h1><strong>BEHIND THE SCENES</strong></h1>
                <p><em>"People will forget what you said. They will forget what you did. But they will never forget how you made them feel."</em></p>
                <p><em>-Maya Angelou-</em></p>
            </div>
        </div>
        <div class="row fullwidth">
            <div class="medium-11 columns center medium-centered">
                <div><img src="img/BTS/_MG_0348.jpg" alt=""></div>
                <div><img src="img/BTS/_MG_0391.jpg" alt=""></div>
                <div><img src="img/BTS/_MG_1031.jpg" alt=""></div>
                <div><img src="img/BTS/_MG_1121.jpg" alt=""></div>
                <div><img src="img/BTS/_MG_1126.jpg" alt=""></div>
                <div><img src="img/BTS/_MG_1127.jpg" alt=""></div>
                <div><img src="img/BTS/_MG_1132.jpg" alt=""></div>
                <div><img src="img/BTS/_MG_1152.jpg" alt=""></div>
                <div><img src="img/BTS/IMG_0720.jpg" alt=""></div>
                <div><img src="img/BTS/IMG_0733.jpg" alt=""></div>
                <div><img src="img/BTS/IMG_4319.jpg" alt=""></div>
            </div>
        </div>

    </section>

    <section class="work" id="work">
        <div class="row">
            <div class="medium-12 columns text-center">
                <h1><strong>OUR WORK</strong></h1>
                <ul class="no-bullet">
                    <li><em>“He who works with his hands is laborer</em></li>
                    <li><em>He who works with his hands and his head is craftsman</em></li>
                    <li><em>He who works with his hands, his head, and his heart is an artist”</em></li>
                </ul>
                <p><em>- St Francis of Assisi -</em></p>
            </div>
        </div>
        <div class="row fullwidth">
            <div class="medium-12 columns">

               <?php

                    $vid_1 = "https://www.youtube.com/watch?v=P0t3z7kQGu4";
                    $vid_2 = "https://www.youtube.com/watch?v=611bNDHkss4";
                    $vid_3 = "https://www.youtube.com/watch?v=YRq6XN2lN0I";
                    $vid_4 = "https://www.youtube.com/watch?v=KX2qOfugJGo";
                    $vid_5 = "https://www.youtube.com/watch?v=RgXFj8IZlLc";
                    $vid_6 = "https://www.youtube.com/watch?v=GVIzwG5dCBo";
                    $vid_7 = "https://www.youtube.com/watch?v=W-ktLrg1lK8";
                    $vid_8 = "https://www.youtube.com/watch?v=W-ktLrg1lK8";


                ?>
                <ul class="medium-block-grid-2 large-block-grid-4">
                    <li>
                        <div class="img-container">
                            <div class="img-vid">
                                <a href="https://www.youtube.com/watch?v=P0t3z7kQGu4" class="hvr-grow" target="_blank">
                                    <img src="img/vid/1_dbodhi%20trailer.png" alt="">
                                    <img src="img/play_btn.jpg" alt="" class="play-btn">
                                </a>
                            </div>
                            <div class="img-info text-center">
                                <h4>Dbodhi Trailer</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img-container">
                            <div class="img-vid">
                                <a href="https://www.youtube.com/watch?v=611bNDHkss4" class="hvr-grow" target="_blank">
                                    <img src="img/vid/2_dbodhi%20teaser.png" alt="">
                                    <img src="img/play_btn.jpg" alt="" class="play-btn">
                                </a>
                            </div>
                            <div class="img-info text-center">
                                <h4>Dbodhi Teaser</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img-container">
                            <div class="img-vid">
                                <a href="https://www.youtube.com/watch?v=YRq6XN2lN0I" class="hvr-grow" target="_blank">
                                    <img src="img/vid/3_Eteaq.png" alt="">
                                    <img src="img/play_btn.jpg" alt="" class="play-btn">
                                </a>
                            </div>
                            <div class="img-info text-center">
                                <h4>ETEAQ</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img-container">
                            <div class="img-vid">
                                <a href="https://www.youtube.com/watch?v=KX2qOfugJGo" class="hvr-grow" target="_blank">
                                    <img src="img/vid/4_Bumi%20Sehat.png" alt="">
                                    <img src="img/play_btn.jpg" alt="" class="play-btn">
                                </a>
                            </div>
                            <div class="img-info text-center">
                                <h4>Bumi Sehat</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img-container">
                            <div class="img-vid">
                                <a href="https://www.youtube.com/watch?v=RgXFj8IZlLc" class="hvr-grow" target="_blank">
                                    <img src="img/vid/5_Biznet.png" alt="">
                                    <img src="img/play_btn.jpg" alt="" class="play-btn">
                                </a>
                            </div>
                            <div class="img-info text-center">
                                <h4>Biznet</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img-container">
                            <div class="img-vid">
                                <a href="https://www.youtube.com/watch?v=GVIzwG5dCBo" class="hvr-grow" target="_blank">
                                    <img src="img/vid/6_PLN.png" alt="">
                                    <img src="img/play_btn.jpg" alt="" class="play-btn">
                                </a>
                            </div>
                            <div class="img-info text-center">
                                <h4>PLN contact center</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img-container">
                            <div class="img-vid">
                                <a href="https://www.youtube.com/watch?v=W-ktLrg1lK8" class="hvr-grow" target="_blank">
                                    <img src="img/vid/7_Gerai%20layanan.png" alt="">
                                    <img src="img/play_btn.jpg" alt="" class="play-btn">
                                </a>
                            </div>
                            <div class="img-info text-center">
                                <h4>Gerai Layanan PLN</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img-container">
                            <div class="img-vid">
                                <a href="https://www.youtube.com/watch?v=W-ktLrg1lK8" class="hvr-grow" target="_blank">
                                    <img src="img/vid/8_beban%20puncak%20pln.png" alt="">
                                    <img src="img/play_btn.jpg" alt="" class="play-btn">
                                </a>
                            </div>
                            <div class="img-info text-center">
                                <h4>Beban puncak PLN</h4>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="client" id="client">
        <div class="row">
            <div class="medium-12 columns text-center">
                <h1><strong>OUR CLIENTS</strong></h1>
                <p><em>“We are strong-willed. Filmmaker are strong-willed. You get the best results with a strong client and a strong Filmmaker working together.”</em></p>
                <p><em>- adapted from Eli Broad -</em></p>
                <div class="medium-12 columns">
                    <ul class="small-block-grid-3 medium-block-grid-3">
                        <li><img src="img/clients/26pnpm.jpg" alt=""></li>
                        <li><img src="img/clients/aerowisata-hotel.jpg" alt=""></li>
                        <li><img src="img/clients/APEC-Logo.jpg" alt=""></li>
                        <li><img src="img/clients/biznet-new-logo-1.jpg" alt=""></li>
                        <li><img src="img/clients/British_American_Tobacco_logo.jpg" alt=""></li>
                        <li><img src="img/clients/bumi-sehat.jpg" alt=""></li>
                        <li><img src="img/clients/dB_logo_against_black.jpg" alt=""></li>
                        <li><img src="img/clients/ETEAQ_logo_black.png" alt=""></li>
                        <li><img src="img/clients/Wonderful-Indonesia-Logo-Black.jpg" alt=""></li>
                        <li><img src="img/clients/logo_pt_astra_agro_lestari.jpg" alt=""></li>
                        <li><img src="img/clients/GIN-Logo.jpg" alt=""></li>
                        <li><img src="img/clients/Kemenparekraf.jpg" alt=""></li>
                        <li><img src="img/clients/logo-PU-png.jpg" alt=""></li>
                        <li><img src="img/clients/dispen-sleman.jpg" alt=""></li>
                        <li><img src="img/clients/pln.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <img src="img/contact_img.png" alt="">

    <section class="contact" id="contact">
        <div class="row">
            <div class="medium-12 columns text-center">
                <h1><strong>CONTACT</strong></h1>
                <ul class="no-bullet">
                    <li>Hey! if you need something!</li>
                    <li>stonecoldfilm@gmail.com</li>
                    <li><a href="telp:085668380684">085668380684</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="form" data-abide>
        <form action="form.php" method="post">
            <div class="row">
                <div class="medium-6 columns name-field">
                    <label for="">First name <small>requried</small></label>
                    <input type="text" placeholder="First Name" name="firstname" required>
                    <small class="error">First name is required</small>
                </div>
                <div class="medium-6 columns">
                    <label for="">Last name <small>requried</small></label>
                    <input type="text" placeholder="Last Name" name="lastname" required>
                    <small class="error">Last name is required</small>
                </div>
                <div class="medium-12 columns">
                    <label for="">Email <small>requried</small></label>
                    <input type="email" placeholder="Email Address" name="email" required>
                    <small class="error">Email is required</small>
                </div>
                <div class="medium-12 columns">
                    <label for="">Subject <small>requried</small></label>
                    <input type="text" placeholder="Subject" name="subject" required>
                    <small class="error">Subject is required</small>
                </div>
                <div class="medium-12 columns">
                    <label for="">Message <small>requried</small></label>
                    <textarea placeholder="Message" rows="10" name="message" required></textarea>
                    <small class="error">Message is required</small>
                </div>
                <div class="medium-12 columns text-center">
                    <input type="submit" name="submit" value="Send" class="button">
                </div>
            </div>
        </form>
    </section>


<?php

    include "inc/footer.php";

?>
