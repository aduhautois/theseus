<!DOCTYPE html>
<html lang="en-US">
    <?php require( 'header.php' ); ?>

    <body>
        <?php require( 'nav.php' ); ?>

        <div class="container">
            <h1 class="hidden">Theseus</h1>

            <div class="homepage-hero-module">
                <div class="video-container">
                    <div class="filter"></div>
                    <video autoplay loop class="fillWidth">
                        <source src="video/pencil_down.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
                        <source src="video/pencil_down.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
                    </video>
                    <div class="poster hidden">
                        <img src="video/pencil_down.jpg" alt="">
                    </div>
                </div>

                <div class="cta">
                    <h2>Helping schools<br />help youth</h2>
                    <p>Dedicated data management professionals specializing in large amounts of stuff.</p>

                    <a href="#" class="button blue">Learn More</a>

                    <img src="img/MicrosoftSQLServer.png" />
                </div>
            </div>
        </div>

        <div class="container top">
            <div class="section intro" id="our-company">
                <div class="container-int max-width">
                    <div class="intro-int">
                        <img src="img/cropped-logo.png" class="block-center" />

                        <h2 class="text-center"><span class="green-border">THESEUS</span></h2>

                        <p>Theseus is a team of dedicated data management professionals. Our focus is always on
                            meeting the unique needs of our clients. In order to effectively meet these dynamic
                            needs we place a strong emphasis on two key components of any good product: communication
                            with the client and customization based on that communication.</p>
                        </div>
                </div>
            </div>

            <hr />

            <div class="section services" id="our-services">
                <div class="container-int max-width">
                    <h2 class="text-center"><span class="blue-border">What We Do</span></h2>

                    <div class="col half border">
                        <img src="img/database.svg" class="block-center" />

                        <h3 class="text-center">Databases</h3>

                        <p>
                            We offer custom database design, development, customization,
                            implementation, and optimization for small to medium-sized businesses.
                        </p>
                    </div>

                    <div class="col half">
                        <img src="img/report.svg" class="block-center"  />

                        <h3 class="text-center">Reporting</h3>

                        <p>
                            We'll design custom reporting as well as provide customizable, easy-to-use templates
                            to display your data when you need it--and how you need it.
                        </p>
                    </div>

                    <div class="clear"></div>

                    <div class="col half border">
                        <img src="img/clock.svg" class="block-center" />

                        <h3 class="text-center">Automation</h3>

                        <p>
                            In addition to your database and reporting requirements, we can provide customized
                            automation scripting to streamline your day-to-day workflow.
                        </p>
                    </div>

                    <div class="col half">
                        <img src="img/puzzle.svg" class="block-center" />

                        <h3 class="text-center">Backup and Redundancy</h3>

                        <p>
                            You'll need your data to be clean and backed up--and we'll help you every step
                            of the way.
                        </p>
                    </div>

                    <div class="clear"></div>

                    <div class="half block-center">
                        <img src="img/network.svg" class="block-center" />

                        <h3 class="text-center">Data Management</h3>

                        <p>
                            We can provide secure and networked data management solutions. MORE TEXT HERE
                        </p>
                    </div>
                </div>
            </div>

            <hr />

            <div class="section about" id="about-us">
                <div class="container-int max-width">
                    <div class="intro-int">
                        <h2 class="text-center"><span class="green-border">About Our Company</span></h2>

                        <p>Theseus is a team of dedicated data management professionals. Our focus is always on
                            meeting the unique needs of our clients. In order to effectively meet these dynamic
                            needs we place a strong emphasis on two key components of any good product: communication
                            with the client and customization based on that communication.</p>

                        <p>
                            While the basics of any data management or reporting situation is largely routine,
                            it is that extra effort to really understand the needs of the client that helps set
                            us apart. We can tailor any of our services to fit your specific needs.
                        </p>

                        <p>
                            By designing each layer of your data solution to your individual organization,
                            you can rest assured that you retain the needed control and flexibility to meet
                                challenges as they arise.
                        </p>
                    </div>
                </div>
            </div>

            <hr />

            <div class="section certifications" id="our-certs">
                <div class="container-int max-width">
                    <div class="intro-int">
                        <h2 class="text-center"><span class="blue-border">Technologies</span></h2>

                        <p>
                            Yo we need some stuff here. I suggest a list of.. certifications or something.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <?php require( 'footer.php' ); ?>

        <script src="js/libraries/jquery-3.2.1.min.js"></script>
        <script src="js/libraries/jquery.sticky.js"></script>
        <script src="js/libraries/velocity.min.js"></script>
        <script src="js/libraries/wow.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
