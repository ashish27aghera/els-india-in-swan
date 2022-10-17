<div id="preloader">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<header class="header_area">
    <div class="top-header-area">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <div class="top-header-content h-100 d-md-flex align-items-center justify-content-between">
                        <div class="top-info-area">
                            <a href="mailto:dhawalshah777@gmail.com"><i class="fa fa-envelope-o"></i> dhawalshah777@gmail.com</a>                            
                        </div>
                        <div class="login-language-area d-flex align-items-center justify-content-end">
                        <a href="+7228934242"><i class="fa fa-phone"></i> +7228934242</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-header-area" id="coreNav">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <div class="menu_area h-100">
                        <nav class="navbar h-100 navbar-expand-lg align-items-center">
                            <a class="navbar-brand text-center" href="index.php">
                                <img src="img/logo.png" alt="">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#classyNav" aria-controls="classyNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <div class="collapse navbar-collapse" id="classyNav">
                                <ul class="navbar-nav ml-auto" id="nav">
                                    <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                                    <li class="nav-item"><a class="nav-link" href="services.php">Our Services</a></li>
                                    <li class="nav-item"><a class="nav-link" href="tracking.php">Tracking</a></li>
                                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="http://admin.els-india.com/" target="_blank">Admin Login</a>
                                            <a class="dropdown-item" href="http://online.els-india.com/" target="_blank">Customer Login</a>
                                        </div>
                                    </li>
                                </ul>
                                <a href="contact.php" class="btn classy-btn ml-30" data-toggle="modal" data-target="#myModalTrack">Track Shipment</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="modal fade" id="myModalTrack" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Track shipment</h5>
                <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close" style="outline: unset !important;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="tracking.php" method="get">
                    <div class="form-group">
                        <select name="searchSelected" id="searchSelected" class="form-control">
                            <option value="1" selected="selected">AWB No.</option>
                            <option value="6">Forwarding No.</option>
                            <option value="2">Reference No.</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="tracking_no" class="form-control" id="myInput_popup" placeholder="Enter Your Trackign No.">
                    </div>
                    <div class="text-center">
                        <button type="submit" id="submit_tracking_popup" class="btn classy-btn">Track Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>