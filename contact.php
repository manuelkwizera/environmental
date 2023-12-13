<!DOCTYPE html>
<html lang="en">
    <?php include('layouts/head.php') ?>
    <body>
        <?php include('layouts/navbar.php') ?>       
        <div class="container">
            <div class="breadcrumb-main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Contact</li>
                </ol>
            </div>

            <div class="row">
                <div class="col-lg-8 mb-4">
                    <iframe width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=-1.940278,29.873888&amp;z=8&amp;output=embed"></iframe>
                </div>
                
                <div class="col-lg-4 mb-4 contact-right">
                    <div class="card">
                        <h5 class="card-header" style="background-color: #4e3914; color: white;">CONTACT</h5>
                        <div class="card-body">
                            <p><i class="fa fa-location-arrow"></i> Kigali, Kicukiro</p>
                            <p><i class="fa fa-phone"></i> +250785043985</p>
                            <p><i class="fa fa fa-envelope"></i> geniusenvironmental@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
           
            <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
            <div class="row">
                <div class="col-lg-8 mb-4 contact-left">
                    <h3>Send us a Message</h3>
                    <!-- <p style="text-align: justify;">Contact Genius Environmental for the environmental solutions you need, whether it's for today or tomorrow. Send us a message and let us know how we can assist or what you're interested in. We'll respond to you as soon as possible</p> -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Full Name:</label>
                                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block"></p>
                            </div>
                        </div>

                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Phone Number:</label>
                                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                            </div>
                        </div>

                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Email Address:</label>
                                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>

                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Message:</label>
                                <textarea rows="5" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                            </div>
                        </div>

                        <div id="success"></div>
                        <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
        <?php include('layouts/footer.php') ?>       
        <?php include('layouts/scripts.php') ?>       
    </body>
</html>