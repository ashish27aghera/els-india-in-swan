<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/inc_head.php';?>
</head>

<body>
    <?php include 'includes/inc_header.php';?>  

    <section class="breadcumb_area background-overlay" style="background-image: url(img/bg1.jpg);"></section>

    <div class="contact_form_area section_padding_100_70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Contact Us</h2>
                        <p>If You have any queries please contact us</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".1">
                    <div class="contact_from">
                        <form  method="post" action="contactMail.php">
                            <div class="contact_input_area">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name *" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email Address *" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Your Number *" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Your Subject *" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" class="form-control" cols="30" rows="4" placeholder="Your Message *" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="hidden" id="domain_input" name="domain_input">
                                            <div id="captcha_div" class="g-recaptcha" data-sitekey=""></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <button type="submit" class="btn submit-btn">Send Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- <div class="col-lg-6 wow fadeInUp animated" data-wow-delay=".1">
                    <div class="goole_map">
                        <div class="goole_map_area" id="google-map">
                            <div id="googleMap">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30710983.209769644!2d64.45235976587381!3d20.01273993518969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1655727564111!5m2!1sen!2sin"
                                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <?php include 'includes/inc_footer.php';?>
    <?php include 'includes/inc_footer_scripts.php';?>
</body>

</html>