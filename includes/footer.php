<!-- Footer content  -->
<footer>
    <div class="container-fluid wrapper">
        <div class="top-footer">
            <div>
                <h4 class="title">Contact Us</h4>
                <ul class="contact-info list-unstyled">
                    <li><i class="fa fa-phone"></i><a href="tel:++1-(833) 568-8254"> +1-(833) 568-8254</a></li>
                    <li><i class="fa fa-envelope"></i><a href="mailto:cs@ineducator.com">
                            service@webinarplanet.com</a></li>
                    <li><i class="fa-solid fa-earth-americas"></i> 7201 Wisconsin Ave Suite 440
                        Bethesda, MD 20814</li>
                </ul>
            </div>
            <div class="usefull-links">
                <h4 class="title">Usefull Links</h4>
                <p><a href="speakers.php">Speakers</a></p>
                <p><a href="faq.php">FAQ's</a></p>
                <p><a href="privacy-policy.php">Privacy Policy</a></p>
                <p><a href="terms.php">Terms & Condition</a></p>
                <p><a href="refund.php">Refund & Cancellation</a></p>
            </div>
            <div class="usefull-links">
                <h4 class="title">Usefull Links</h4>
                <p><a href="#" data-bs-toggle="modal" data-bs-target="#speaker-opportunity">Speaker Opportunity</a></p>
                <p><a href="#" data-bs-toggle="modal" data-bs-target="#suggest-topic">Suggest a topic</a></p>
                <p><a href="#" data-bs-toggle="modal" data-bs-target="#subscribe">Subscribe Now</a></p>
                <p><a href="#" data-bs-toggle="modal" data-bs-target="#un-subscribe">Un Subscribe</a></p>
            </div>
            <div>
                <h4 class="title">Follow Us</h4>
                <div class="social-icons">
                    <a><i class="fa-brands fa-facebook-f"></i></a>
                    <a><i class="fa-brands fa-x-twitter"></i></a>
                    <a><i class="fa-brands fa-pinterest-p"></i></a>
                    <a><i class="fa-brands fa-linkedin-in"></i></a>
                    <a><i class="fa-brands fa-youtube"></i></a>
                </div>
                <h4 class="title">Safe & Secure</h4>
                <div class="payment-options ">
                    <span>
                        <a href="">
                            <img src="images/payment-icon/master-card.png" alt="" class="img-fluid">
                        </a>
                        <a href="">
                            <img src="images/payment-icon/visa.png" alt="" class="img-fluid">
                        </a>
                        <a href="">
                            <img src="images/payment-icon/maestro.png" alt="" class="img-fluid">
                        </a>
                        <a href="">
                            <img src="images/payment-icon/american-express.png" alt="" class="img-fluid">
                        </a>
                        <a href="">
                            <img src="images/payment-icon/paypal.png" alt="" class="img-fluid">
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- modals  -->
    <!-- speaker opportunity modal -->
    <div class="modal fade" id="speaker-opportunity" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header-div text-center">
                    <h3 class="modal-title p-3" id="staticBackdropLabel">Speaker Opportunity</h3>
                    <a data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </a>
                </div>
                <div class="modal-body">
                    <fieldset>
                        <label for="email">Full Name<span>*</span>
                            <input type="text" name="name" placeholder="Enter name" required="">
                        </label>
                        <label for="email">Email<span>*</span>
                            <input type="text" name="email" placeholder="Enter Email" required="">
                        </label>
                        <label for="email">Phone<span>*</span>
                            <input type="text" name="" placeholder="Enter phone" required="">
                        </label>

                        <label for="">Job Title<span>*</span>
                            <input type="text" name="" placeholder="Enter Job title" required="">
                        </label>
                        <label for="">Company<span>*</span>
                            <input type="text" name="" placeholder="Enter company name" required="">
                        </label>
                        <label for="">Fax<span>*</span>
                            <input type="text" name="" placeholder="Enter fax" required="">
                        </label>

                        <label for="">Industry<span>*</span>
                            <select name="industry" required="" class="form-control input-sm"
                                style="appearance: menulist;">
                                <option value="">Select Industry</option>
                                <option>Real Estate</option>
                                <option>Education</option>
                                <option>Transportation &amp; Logistics</option>
                                <option>Banking, Insurance &amp; Finance</option>
                                <option>Human Resources</option>
                                <option>Healthcare</option>
                                <option>Pharmaceutical</option>
                                <option>Food &amp; Beverage</option>
                                <option>Information &amp; Technologies</option>
                            </select>
                        </label>
                    </fieldset>
                    <div class="cta my-3">
                        <a class="main-btn d-block">Register</a>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!--topic suggest modal -->
    <div class="modal fade" id="suggest-topic" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header-div text-center">
                    <h3 class="modal-title p-3" id="staticBackdropLabel">Suggest a Topic</h3>
                    <a data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </a>
                </div>
                <div class="modal-body">
                    <fieldset>
                        <label for="email">Name<span>*</span>
                            <input type="text" name="name" placeholder="Enter name" required="">
                        </label>
                        <label for="email">Email<span>*</span>
                            <input type="text" name="email" placeholder="Enter Email" required="">
                        </label>
                        <label for="email">Phone<span>*</span>
                            <input type="text" name="" placeholder="Enter phone" required="">
                        </label>

                        <label for="email">Job Title<span>*</span>
                            <input type="text" name="phone" placeholder="Enter Job title" required="">
                        </label>
                        <label for="">Industry<span>*</span>
                            <select name="industry" required="" class="form-control input-sm"
                                style="appearance: menulist;">
                                <option value="">Select Industry</option>
                                <option>Real Estate</option>
                                <option>Education</option>
                                <option>Transportation &amp; Logistics</option>
                                <option>Banking, Insurance &amp; Finance</option>
                                <option>Human Resources</option>
                                <option>Healthcare</option>
                                <option>Pharmaceutical</option>
                                <option>Food &amp; Beverage</option>
                                <option>Information &amp; Technologies</option>
                            </select>
                        </label>

                        <label for="">Topic Suggestion<span>*</span>
                            <textarea class="form-control" placeholder="Write your suggestion here..."
                                id="exampleFormControlTextarea1" rows="3"></textarea>
                        </label>
                    </fieldset>
                    <div class="cta my-3">
                        <a class="main-btn d-block">Submit Request</a>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- mailing list  modal  -->
    <div class="modal fade" id="subscribe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header-div text-center">
                    <h3 class="modal-title p-3" id="staticBackdropLabel">Subscribe Our Mailing List For
                        Latest Updates</h3>
                    <a data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </a>
                </div>

                <div class="modal-body">
                    <fieldset>
                        <label for="email">Name<span>*</span>
                            <input type="text" name="name" placeholder="Enter name" required="">
                        </label>
                        <label for="email">Email<span>*</span>
                            <input type="text" name="email" placeholder="Enter Email" required="">
                        </label>
                        <label for="email">Phone<span>*</span>
                            <input type="text" name="phone" placeholder="Enter phone" required="">
                        </label>
                        <label for="email">Job Title<span>*</span>
                            <input type="text" name="phone" placeholder="Enter Job title" required="">
                        </label>
                        <label for="">Industry<span>*</span>
                            <select name="industry" required="" class="form-control input-sm"
                                style="appearance: menulist;">
                                <option value="">Select Industry</option>
                                <option>Real Estate</option>
                                <option>Education</option>
                                <option>Transportation &amp; Logistics</option>
                                <option>Banking, Insurance &amp; Finance</option>
                                <option>Human Resources</option>
                                <option>Healthcare</option>
                                <option>Pharmaceutical</option>
                                <option>Food &amp; Beverage</option>
                                <option>Information &amp; Technologies</option>
                            </select>
                        </label>
                        <label for="">Notification</label>
                        <div class="radio">
                            <input id="radio-1" name="radio" type="radio" checked>
                            <label for="radio-1" class="radio-label">Weekly</label>
                        </div>
                        <div class="radio">
                            <input id="radio-2" name="radio" type="radio">
                            <label for="radio-2" class="radio-label">Monthly</label>
                        </div>
                        <!-- captcha code -->
                        <form id="captcha-form" method="post" action="" class="">
                            <div class="d-flex align-items-center">
                                <canvas id="captcha" width="200" height="80"></canvas>
                                <button type="button" class="btn btn-secondary" id="refresh-captcha">
                                    <i class="fa fa-refresh"></i>
                                </button>
                            </div>

                            <div class="">
                                <label for="captcha-input" class="form-label">Enter Captcha</label>
                                <input type="text" class="form-control" id="captcha-input" required>
                            </div>
                        </form>

                    </fieldset>
                    <div class="cta my-3">
                        <a class="submit-btn d-block">Subscribe</a>
                        <a href="callto:+1234567890" class="main-btn d-block mt-3"><i
                                class="fa-solid fa-phone-volume"></i> Quick Call</a>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!--un-subscribe modal -->
    <div class="modal fade" id="un-subscribe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header-div text-center">
                    <h3 class="modal-title p-3" id="staticBackdropLabel">Un-Subscribe From Ineducator</h3>
                    <p>No longer want to stay updated? Fill in your details here and we will not keep you updated of
                        trending webinars.</p>
                    <a data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </a>
                </div>
                <div class="modal-body">
                    <fieldset>

                        <label for="email">Email<span>*</span>
                            <input type="text" name="email" placeholder="Your Email Id" required="">
                        </label>

                    </fieldset>
                    <div class="cta my-3">
                        <a class="main-btn d-block">Un-Subscribe</a>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <span>© 2024 Copyright <a href="index.php">InEducator</a>. All Rights Reserved</span>
    </div>
</footer>