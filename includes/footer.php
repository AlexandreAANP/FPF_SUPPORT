<footer class="bg-white">
    <div class="footer-top">
        <div class="container-fluid own-container">
            <div class="row">
                <div class="order-1 order-lg-2 col-12 col-lg-4 d-flex align-items-center justify-content-center py-3 footer-top-middle">
                    <i class="fas fa-truck color-purple fa-2x"></i>
                    <span class="footer-top-text"><?php echo $translate['Delivery service available'];?></span>
                </div>
                <div class="order-2 order-lg-1 col-12 col-lg-4 d-flex align-items-center justify-content-center py-3">
                    <i class="fas fa-water color-purple fa-2x"></i>
                    <span class="footer-top-text"><?php echo $translate['Unique offers online'];?></span>
                </div>
                <div class="order-3 order-lg-3 col-12 col-lg-4 d-flex align-items-center justify-content-center py-3">
                    <i class="fas fa-undo-alt color-purple fa-2x"></i>
                    <span class="footer-top-text"><?php echo $translate['Easy and Free Returns'];?></span>
                </div>

            </div>
        </div>
    </div>
    
    <div class="footer-menu mt-5">
        <div class="container">

            <div class="row">
                <div class="col-12 col-lg-5 d-flex flex-column order-1 order-lg-2">
                     <span class="footer-menu-header d-block">Newsletter</span>
                    <p class="footer-menu-header"><?php echo $translate['Subscribe our newsletter.'];?></p>

                                        <div class="d-block mt-2">
                        <form id="form_newsletter_sendmail_template" class="sendmail-template" action="https://fpfsistemas.ibiz.pt/sendmailTemplate" method="POST" novalidate="">
                            <input type="hidden" name="content_email_template" value="emailtemplate-newsletter">
                            <input type="hidden" name="content_email_template_table" value="newsletter">
                            <input type="hidden" name="date_inserted" value="29/06/2021 16:57:09">
                            <input type="hidden" name="customer_id" value="">
                            <div class="input-group">
                                <input type="text" class="form-control footer-menu-header" name="name" placeholder="<?php echo $translate['Name'];?> *">
                            </div>
                            <div class="input-group">
                                <input type="email" class="form-control footer-menu-header" name="email" placeholder="<?php echo $translate['Type your email'];?> *">
                                <input type="submit" id="form_newsletter_sendmail_template_submit" value="Send" class="input-group-text btn" data-loading-text="Sending">
                            </div>
                        </form>
                        <div id="form_newsletter_sendmail_template_sent" class="shadow p-2" style="display: none">
                            <button type="button" id="form_newsletter_sendmail_template_form_back" class="close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <strong><?php echo $translate['Email has sent successfully!'];?></strong><br><?php echo $translate['Thank you for contacting us!'];?>
                        </div>
                </div>
            </div>
                <div class="col-12 col-lg-7 order-2 order-lg-1">

                <div class="row">
                     <div class="col">
                                                <ul class="list-unstyled mb-5">
                            <li class="footer-menu-header"><?php echo $translate['Quick Acess'];?></li>
                            <li><a class="" href="https://fpfsistemas.ibiz.pt/who-we-are" title="<?php echo $translate['Who we are'];?>"><?php echo $translate['Who we are'];?></a></li>
                             <li><a class="" href="https://fpfsistemas.ibiz.pt/Services" title="<?php echo $translate['Services'];?>"><?php echo $translate['Services'];?></a></li>
                             <li><a class="" href="https://fpfsistemas.ibiz.pt/event" title="<?php echo $translate['Events'];?>"><?php echo $translate['Events'];?></a></li>
                             <li><a class="" href="https://www.fpfsuporte.com/" title="<?php echo $translate['Customer support'];?>"><?php echo $translate['Customer support'];?></a></li>
                             <li><a class="" href="https://store.fpfsistemas.ibiz.pt/" title="<?php echo $translate['Online Store'];?>"><?php echo $translate['Online Store'];?></a></li>
                       </ul>
                    </div>
                    <div class="col">
                        <ul class="list-unstyled mb-5">
                            <li class="footer-menu-header "><?php echo $translate['Help'];?></li>
                            <li><a class="" href="https://fpfsistemas.ibiz.pt/privacy-policy" title="<?php echo $translate['Privacy Policy'];?>"><?php echo $translate['Privacy Policy'];?></a></li>
                            <li><a class="" href="https://fpfsistemas.ibiz.pt/privacy-delivery-policy" title="<?php echo $translate['Delivery and shipping policy'];?>"><?php echo $translate['Delivery and shipping policy'];?></a></li>
                            <li><a class="" href="https://fpfsistemas.ibiz.pt/return-policy" title="<?php echo $translate['Delivery Policy'];?>"><?php echo $translate['Delivery Policy'];?></a></li>
                            <li><a class="" href="https://fpfsistemas.ibiz.pt/litigios" title="<?php echo $translate['Litigation Policy'];?>"><?php echo $translate['Litigation Policy'];?></a></li>
                        </ul>
                    </div>
                     <div class="col">
                        <ul class="list-unstyled mb-5">
                            <li class="footer-menu-header"><?php echo $translate['Contact us'];?></li>
                            <li style="font-family: 'MuseoModerno', sans-serif !important;font-size: 0.9em;color: #979797;">Rua do Município de São Domingos, Lote 1, Urbanização Lagoa Sol, 8400-415 Lagoa</li>
                            <li style="font-family: 'MuseoModerno', sans-serif !important;font-size: 0.9em;color: #979797;">282353994</li>
                            <li style="font-family: 'MuseoModerno', sans-serif !important;font-size: 0.9em;color: #979797;">geral@fpfsistemas.com</li>
                        </ul>
                    </div>
                </div>

                                    </div>
            </div>

        </div>

    <div class="container">
        <div class="row" id="contact"><!--h2><?php echo $translate['Contact us'];?></h2--></div>
            <div class="row" style="margin-bottom: 30px;">
                        <div class="col-12 col-lg-6">

                            <iframe scrolling="no" onload="iframe()" id="iframe_contact" width="100%" height="650px" src="https://fpfsistemas.ibiz.pt/<?php echo $language;?>/#contact" style="border:none;"></iframe>
                            <!--form id="form_contact_information_sendmail_template" class="sendmail-template" action="https://fpfsistemas.ibiz.pt/sendmailTemplate" method="POST" novalidate="">
                            <input type="hidden" name="content_email_template" value="emailtemplate-contact_information">
                            <input type="hidden" name="content_email_template_table" value="contact_information">
                            <input type="hidden" name="date_inserted" value="29/06/2021 16:57:10">
                            <input type="hidden" name="customer_id" value="">
                             <p>
                                <label for="input_name" class="footer-menu-header"><?php echo $translate['Name'];?></label>
                                <input class="form-control rounded-0" id="input_name" name="name" type="text">
                                <label class="footer-menu-header" for="input_name"><?php echo $translate['Company'];?></label>
                                <input class="form-control rounded-0" id="input_name" name="company" type="text">
                                <label class="footer-menu-header" for="input_name"><?php echo $translate['Role'];?></label>
                                <input class="form-control rounded-0" id="input_name" name="role" type="text">

                            </p>

                            <div class="row">
                                <div class="col-5"><label class="footer-menu-header" for="input_name"><?php echo $translate['Indicative'];?></label> <input class="form-control rounded-0" id="input_name" name="indicativo" type="text"></div>

                                <div class="col-7"><label class="footer-menu-header" for="input_name"><?php echo $translate['Phone'];?></label> <input class="form-control rounded-0" id="input_name" name="phone" type="text"></div>
                            </div>

                                <p><label for="input_name" class="footer-menu-header"><?php echo $translate['Email'];?></label> <input class="form-control rounded-0" id="input_name" name="email" type="email"> <label class="footer-menu-header"><?php echo $translate['Why do you contact us?'];?></label><textarea class="form-control rounded-0 border" name="why_do_you_contact_us" rows="5"></textarea></p>

                                <div class="d-flex justify-content-center justify-content-md-start py-5"><input id="form_contact_information_sendmail_template_submit" class="btn btn-submit-customer" name="" type="submit" value="<?php echo $translate['Send'];?>" data-loading-text="Sending">
                                </div>


                            </form-->

                        <div id="form_contact_information_sendmail_template_sent" class="shadow p-2" style="display: none">
                            <button type="button" id="form_contact_information_sendmail_template_form_back" class="close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <strong><?php echo $translate['Email has sent successfully!'];?></strong><br><?php echo $translate['Thank you for contacting us!'];?>
                        </div>
                        </div>
                     <div class="col-12 col-lg-6 d-flex justify-content-center">
                        <div class="mapouter" style="width:100%;"><div class="gmap_canvas"><iframe width="100%" height="500px" id="gmap_canvas" src="https://maps.google.com/maps?q=lagoa,%20fpf%20sistemas&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies2.org">fmovies,to</a><br><style>.mapouter{position:relative;text-align:right;}</style><a href="https://www.embedgooglemap.net">google map widget for website</a><style>.gmap_canvas {overflow:hidden;background:none!important;}</style></div></div>

                    </div>
                </div>
        </div>

 
    <div class="payments">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5">
                    <hr>
                </div>
                <div class="col-12 col-md-9 d-flex flex-wrap flex-column flex-md-row justify-content-center justify-content-md-start">

                    <div class="d-flex flex-wrap">
                        <a class="noLoad" title="Payments 1">
                            <img src="https://fpfsistemas.ibiz.pt/assets/images/payments-1.png" alt="Payment 1">
                        </a>
                        <a class="noLoad" title="Payments 2">
                            <img src="https://fpfsistemas.ibiz.pt/assets/images/payments-2.png" alt="Payment 2">
                        </a>
                    </div>
                    <div class="d-flex flex-wrap">
                        <a class="noLoad" title="Paypal">
                            <img src="https://fpfsistemas.ibiz.pt/assets/images/paypal.png" alt="Paypal">
                        </a>
                        <a class="noLoad" title="Visa">
                            <img src="https://fpfsistemas.ibiz.pt/assets/images/visa.png" alt="Visa">
                        </a>
                        <a class="noLoad" title="Mastercard">
                            <img src="https://fpfsistemas.ibiz.pt/assets/images/mastercard.png" alt="Mastercard">
                        </a>
                    </div>
                    
                </div>
                  <div class="col-12 mt-5 text-center">
                    <a href="https://www.livroreclamacoes.pt/inicio" target="_blank" class="border-0" style="margin:0 auto">
                        <img src="https://fpfsistemas.ibiz.pt/assets/images/complains.png" style="max-width: 150px!important;max-height:60px;width:150px">
                    </a>
                </div>
                <div class="col-12 col-md-3 d-flex flex-column align-items-md-end">
                    <div class="my-5 d-md-none">
                        <hr>
                    </div>

                    <div class="d-flex align-items-center mb-5">
                        
                    
        
        <a href="https://www.youtube.com/channel/UChJeHqkGLyTfe6bWHTlHZ2Q" class="social" target="_blank" title="youtube" style="margin-right: 2px"><img src="https://admin.fpfsistemas.ibiz.pt//data/api/content/social-media/22/youtube.png" alt="youtube" style="width: 36px"></a>
                    
        
        <a href="https://www.facebook.com/fpfsistemas/?ref=pages_you_manage" class="social" target="_blank" title="facebook" style="margin-right: 2px"><img src="https://admin.fpfsistemas.ibiz.pt//data/api/content/social-media/22/facebook.png" alt="facebook" style="width: 36px"></a>
                        </div>
                </div>
                <div class="col-12 mt-5 mt-md-3">
                    <hr>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright d-flex justify-content-center mb-5">Copyright ©&nbsp;<a href="`https://www.fpfsistemas.pt`" target="`_blank`" title="`fpfsistemas`">Fpf Sistemas</a> 2021 - All rights reserved.</div>

    </div></footer>
    <div style="position: fixed; background-color: #ffd; box-shadow: 0 0 2px #888; border-top-right-radius: 5px; border-top: #ccc 1px solid; border-right: #ccc 1px solid; bottom: 0; width: 200px; color: #000; text-align: center; padding: 2px; font-size: 12px; font-weight: normal; z-index: 99999">This is a <a href="https://umbraco.com/about-us/umbraco-dictionary/staging-environment" target="_blank" style="color: #000" title="What is a Staging Environment?">Staging Environment</a><br>https://fpfsistemas.ibiz.pt</div>

	        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js" integrity="sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bigslide.js/0.12.0/bigSlide.min.js" integrity="sha512-Rueg2bYo7TljyoH/AFVvl3IPKZCmPMHC44Db17xIVZUnXDE/1UWRqYIbCGIOmGQjv5w6DetTr7+89FeHCwlweQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.0/umd/popper.min.js" integrity="sha512-uxtUCZ+gIIpqJVZe/0IgmHq5yqW+2gzo3zsSqRXSlUBEM2IYxxnuyg7+i7j9SCv1R74/Zixdx0v8OiyShPWbkQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://fpfsistemas.ibiz.pt/assets/js/script.js?hash=5f2398c10c9a60f2c7d271854133f1c9"></script>
    <script src="https://fpfsistemas.ibiz.pt/assets/js/querybiz.js?hash=2f7810da78e4a7d2592f83b3ca106b40"></script>
    <script src="https://fpfsistemas.ibiz.pt/assets/js/app.min.js?hash=9dc8e9950aff7f75eb4b19f368c8fd1a"></script>
    <script src="https://www.google.com/recaptcha/api.js?render="></script>

    <script src="https://fpfsistemas.ibiz.pt/assets/lib/range-slider/js/rSlider.min.js"></script>
    <script src="https://fpfsistemas.ibiz.pt/assets/js/app.min.js"></script>

    <script>
        var arDefaultOptions = [];
        arDefaultOptions['countryBaseIso'] = 'PT';
        arDefaultOptions['countryBaseId'] = '177';

        arDefaultOptions['translationFiles'] = [];
        arDefaultOptions['language'] = 'en';
        arDefaultOptions['baseUri'] = '';
        arDefaultOptions['apiUrl'] = 'https://admin.fpfsistemas.ibiz.pt';
        arDefaultOptions['cdnUrl'] = 'https://admin.fpfsistemas.ibiz.pt';
        arDefaultOptions['requestUri'] = '/en/customer-support';
        arDefaultOptions['requestUriB64'] = 'L2VuL2N1c3RvbWVyLXN1cHBvcnQ=';
        var defaultIsDev = false;
    </script>

    
    <script>
        jQuery(document).ready(function($) {
            $('.dropdown-collection').click(function () {
                $('.dropdown-collection-list').fadeToggle();
            });

            $('.dropdown-language').click(function () {
                $('.dropdown-lang-list').fadeToggle();
            });

            $('.dropdown-currency').click(function () {
                $('.dropdown-currency-list').fadeToggle();
            });
        });
    </script>

