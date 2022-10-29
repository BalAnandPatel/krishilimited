<?php
include "include/header.php";
?>       
<!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li>Contact</li>
                    </ul>
                    <h2>contact us</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->
      <!--Contact One Start-->
        <section class="contact-one" id="contact">
            <div class="container">
                <div class="row mt-5 mb-5">
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Contact Now</span>
                                <h2 class="section-title__title">Get in touch now</h2>
                                <div class="section-title__icon">
                                    <img src="assets/images/icon/section-title-icon-1.png" alt="">
                                </div>
                            </div>
                           <!--  <p class="contact-one__text">Lorem ipsum dolor sit amet, adipiscing elit. In hac habitasse
                                platea dictumst. Duis porta, <br> quam ut finibus ultrices.</p> -->
                            <ul class="list-unstyled contact-one__contact-list">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-phone-alt"></span>
                                    </div>
                                    <div class="content">
                                        <p>Have Question?</p>
                                        <h4><a href="tel:9288009850">+91-8601111980</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                    <div class="content">
                                        <p>Write Email</p>
                                        <h4><a href="mailto:needhelp@company.com">needhelp@company.com</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-map-marker"></span>
                                    </div>
                                    <div class="content">
                                        <p>Visit Now</p>
                                        <h4>DASRATH PAUL,<br>OM NAGAR COLONY,<br>ARATEE NO. 86/320,<br> SARNATH, VARANASI, <br>Varanasi, Uttar Pradesh, <br>India, 221007</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-one__right">
                            <div class="contact-one__bg float-bob-x"
                                style="background-image: url(assets/images/shapes/contact-one-shape-1.png);"></div>
                            <div class="row">
                                <div class="contact-one__form-box">
                                    <form action="https://layerdrops.com/agrionhtml/main-html/assets/inc/sendemail.php"
                                        class="contact-one__form contact-one-validated" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="contact-one__input-box">
                                                    <input type="text" placeholder="Your Name" name="name">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="contact-one__input-box">
                                                    <input type="email" placeholder="Email Address" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="contact-one__input-box text-message-box">
                                                    <textarea name="message" placeholder="Write a Message"></textarea>
                                                </div>
                                                <div class="contact-one__btn-box">
                                                    <a href="about.html" class="thm-btn contact-one__btn">Send a Message
                                                        <i class="icon-right-arrow"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact One End-->
    <?php

    include "include/footer.php";

    ?>