<?php
$page = 'Home';
$pageDesc = '""';
include 'includes/header.php';
?>


<!-- banner sec start -->
<section class="banner_lp-2 location-ban" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-12 col-lg-6 col-md-12 col-sm-12 p-0">
                <div class="banner_content_left wow fadeInLeft">
                    <ul>
                        <li>the praetors</li>
                    </ul>
                    <h1>Contact Us</h1>
                    <p>An award-winning app development agency passionate about collaborating with organizations to
                        create beautifully designed, expertly crafted apps that encourage brand coherence, clarity, and
                        comprehensibility while delivering real results!
                    </p>
                    <ul>
                        <li>
                            <a href="javascript:;" class="btn1">Estimate Project</a>
                        </li>
                        <li>
                            <a href="javascript:;" class="btn1">Case Study</a>
                        </li>
                        <li>
                            <a href="javascript:;" class="btn1">Customer Stories</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-12 col-sm-12 p-0">
                <div class="banner_form">
                    <h2>Book a Free <span>Consultation</span></h2>
                    <form method="POST" class="banner_form_inner" data-hs-cf-bound="true">
                        <div class="from_item"><input placeholder="Full Name" name="name" type="text"
                                class="form-control"></div>
                        <div class="from_item"><input placeholder="Email" name="email" type="email"
                                class="form-control"></div>
                        <div class="from_item"><input placeholder="Number" name="phone" type="tel" class="form-control">
                        </div>
                        <div class="from_item"><textarea rows="4" name="description"
                                placeholder="Describe Your Project Need." class="form-control"></textarea></div>
                        <div class="from_item_check py-2">
                            <div>
                                <div class="form-check"><input name="nda" type="checkbox" id="check-api-checkbox"
                                        class="form-check-input" value="1">
                                    <label for="check-api-checkbox" class="form-check-label">Share Non Disclosure
                                        Agreement</label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn1">Get In Touch</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <img src="images/frame1.png" alt="" class='ban-bef'>
    <img src="images/frame2.png" alt="" class='frame2'>
    <img src="images/frame3.png" alt="" class='frame3'>
</section>
<!-- banner sec end-->

<!-- contact cities start -->
<section class="why-apptitude contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 col-md-12 col-sm-6">
                        <div class="about-Class contact-Class">
                            <h3>Contact Us</h3>
                            <h2><span>Got a Spark </span> of Inspiration?</h2>
                            <h4>Our Doors (or inboxes) are Wide Open!</h4>
                            <hr class="line-contat">
                            <p>Feel free to drop us a message below, and one of our friendly team members will get back to you promptly. Whether you’re envisioning a groundbreaking app, seeking digital solutions, or just want to say hello, we’re all ears. Let’s make things happen together. Your journey begins with a simple click – get in touch now!</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-12 col-sm-6">
                        <div class="form-top">
                            <p>Have questions or a brilliant idea you’d like to discuss? The only thing you need to do is to fill the form!</p>
                        </div>
                        <div class="about-form">
                        <form enctype="multipart/form-data" method="post" action="./thankyou/">
                           <div class="form-group">
                              <input id="talkName" type="text" class="form-control" placeholder="Full Name" name="name">
                           </div>
                           <div class="form-group">
                              <input id="talkemail" type="email" class="form-control" placeholder="Email Address" name="email">
                           </div>
                           <div class="form-group">
                              <input id="talknumber" type="tel" class="form-control" placeholder="Phone Number" name="number">
                           </div>
                           <div class="form-group">
                              <textarea id="talkMessage" class="form-control" placeholder="Type your message" name="message"></textarea>
                           </div>
                           <div class="form-group center">
                              <button type="submit" class="btn_line btn-effect b lst_tk_btn">Submit</button>
                              <input type="hidden" name="footerform" value="1">
                           </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
      </section>
<!-- contact cities end -->





<?php
include 'includes/footer2.php';
$page = 'home';
?>

<script type="text/javascript">
    $(document).ready(function () {
        $('#NewClient').owlCarousel({
            loop: true,
            margin: 20,
            center: true,
            smartSpeed: 1000,
            autoplay: 5000,
            nav: false,
            dots: false,
            loop: true,
            responsive: {
                0: { items: 1 },
                600: { items: 2 },
                1000: { items: 4 }
            }
        });
    });
</script>