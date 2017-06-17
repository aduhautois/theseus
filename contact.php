<!DOCTYPE html>
<html lang="en-US">
    <?php require( 'header.php' ); ?>

    <body>
        <?php require( 'nav.php' ); ?>

        <div class="container top">
            <div class="section intro" id="our-company">
                <div class="container-int max-width">
                    <div class="intro-int">
                        <img src="img/cropped-logo.png" class="block-center" />

                        <h2 class="text-center"><span class="green-border">THESEUS</span></h2>

                        <p>We should list general contact information here for shits and giggles and then a nice message about filling out the form.</p>

                        <form>
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" />

                            <label for="company">Company</label>
                            <input type="text" name="company" id="company" />

                            <label for="email">Email Address</label>
                            <input type="email" name="email" id="email" />

                            <label for="message">Message</label>
                            <textarea name="message"></textarea>

                            <div class="button blue">
                                <input type="submit" value="Submit" />
                            </div>
                        </form>
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
