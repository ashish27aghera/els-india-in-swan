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
                        <h2>Tracking</h2>
                        <p>Track Your Shipment</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".3s">
                    <div class="contact_from">
                        <form method="get">
                            <div class="contact_input_area">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="searchSelected" id="searchSelected" class="w-100">
                                                <option value="1" selected="selected">AWB No.</option>
                                                <option value="6">Forwarding No.</option>
                                                <option value="2">Reference No.</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="tracking_no" class="form-control" id="myInput_popup" placeholder="Enter Your Trackign No.">
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" id="submit_tracking" class="btn submit-btn">Track Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12 track-block track-result">
                    <div class="accordion tracking-data"></div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/inc_footer.php';?>
    <?php include 'includes/inc_footer_scripts.php';?>
</body>

</html>