@extends('superuser.registration.app')


@section('content')
<!--
|‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
| Serve a Better Support
|‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
!-->
<section class="section" id="section-features">
    <div class="container">
        <header class="section-header">
            <small><strong>Feature 3</strong></small>
            <h2>Serve a Better Support</h2>
            <hr>
            <p class="lead">Helpato equipped with several supporting tools. Each of those not only help you give your customers and potential customers a better experience, but also it will reduce support requests and saves your precious time.</p>
        </header>
        <div class="row gap-y">
            
            <div class="col-12 col-lg-6 hidden-md-down align-self-center">
                <div class="swiper-container swiper-pagination-outside shadow-2" data-autoplay="2000" data-loop="true" data-space-between="20">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{ asset('img/demo/helpato/slider-article.jpg') }}" alt="..."></div>
                        <div class="swiper-slide"><img src="{{ asset('img/demo/helpato/slider-faq.jpg') }}" alt="..."></div>
                        <div class="swiper-slide"><img src="{{ asset('img/demo/helpato/slider-forum.jpg') }}" alt="..."></div>
                    </div>
                    
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="col-12 col-lg-6 pl-50 pr-80">
                <div class="row gap-y">
                    
                    <div class="col-12 col-md-6 text-center text-md-left">
                        <i class="fa fa-commenting text-danger fs-35 mb-3"></i>
                        <h6 class="text-uppercase mb-3">Ticket</h6>
                        <p class="fs-14">Allow your customers to send you a private ticket (maybe with their sensitive data) and ask for help.</p>
                    </div>
                    <div class="col-12 col-md-6 text-center text-md-left">
                        <i class="fa fa-comments text-warning fs-35 mb-3"></i>
                        <h6 class="text-uppercase mb-3">Forum</h6>
                        <p class="fs-14">Your customers as well as potential buyers can create a public topic to get in touch with you and each other.</p>
                    </div>
                    <div class="col-12 col-md-6 text-center text-md-left">
                        <i class="fa fa-file-text-o text-success fs-35 mb-3"></i>
                        <h6 class="text-uppercase mb-3">Article</h6>
                        <p class="fs-14">A comprehensive knowledge base can extremely reduce number of support request and save your valuable time.</p>
                    </div>
                    <div class="col-12 col-md-6 text-center text-md-left">
                        <i class="fa fa-question-circle text-info fs-35 mb-3"></i>
                        <h6 class="text-uppercase mb-3">FAQ</h6>
                        <p class="fs-14">Create a list of frequently asked questions in different categories and refer to them in your support process.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!--
|‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
| Envato Integration
|‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
!-->
<section class="section bg-grey">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <h2>Envato Integration</h2>
                <p class="lead">We have used the Envato API in our development to reduce all the burden of you and your customers.</p>
                <br>
                <p>
                    <i class="ti-check text-success mr-8"></i>
                    <span class="fs-14">Login using your Envato account</span>
                </p>
                <p>
                    <i class="ti-check text-success mr-8"></i>
                    <span class="fs-14">Your items will import automatically</span>
                </p>
                <p>
                    <i class="ti-check text-success mr-8"></i>
                    <span class="fs-14">Your customers doesn't need to provide purchase code</span>
                </p>
                <p>
                    <i class="ti-check text-success mr-8"></i>
                    <span class="fs-14">Identify if a customer has a valid support</span>
                </p>
            </div>
            <div class="col-lg-6 hidden-md-down">
                <div class="swiper-container swiper-pagination-outside shadow-3" data-autoplay="2000" data-loop="true" data-space-between="20">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{ asset('img/demo/helpato/slider-dashboard.jpg') }}" alt="..."></div>
                        <div class="swiper-slide"><img src="{{ asset('img/demo/helpato/slider-admin.jpg') }}" alt="..."></div>
                        <div class="swiper-slide"><img src="{{ asset('img/demo/helpato/slider-items.jpg') }}" alt="..."></div>
                    </div>
                    
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>




<!--
|‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
| Call to action
|‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
!-->
<section class="section text-center py-150" style="background-image: url({{ asset('img/bg-gift.jpg')  }})" data-overlay="8">
    <div class="container">
        <h5 class="fs-30 text-white fw-300 mb-90"><strong>Start</strong> the supporting system that you always dreamed about</h5>
        <p class="hidden-sm-down"><a class="btn btn-lg btn-round btn-success w-300 fs-17 shadow-5" href="#">Login with Envato</a></p>
        <p class="hidden-md-up"><a class="btn btn-lg btn-round btn-success fs-15 w-250 shadow-5" href="#">Login with Envato</a></p>
    </div>
</section>




<!--
|‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
| Pricing
|‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
!-->
<section class="section bg-grey" id="section-pricing">
    <div class="container">
        <header class="section-header">
            <small>Plans</small>
            <h2>Pricing</h2>
            <hr>
            <p class="lead opacity-70">Choose any of the following plans to get start with. You can start with the FREE plan to see our web application at first. You can always change your plan from your account.</p>
        </header>
        <div class="row gap-y text-center">
            <div class="col-12 col-md-4">
                <div class="pricing-1">
                    <p class="plan-name">Free</p>
                    <br>
                    <h2 class="price">0</h2>
                    <br>
                    <small><strong>1</strong> Agent</small><br>
                    <small><strong>1</strong> Item Support</small><br>
                    <small><strong>100 MB</strong> Attachment</small><br>
                    <br>
                    <p class="text-center py-3"><a class="btn btn-primary" href="#">Get started</a></p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="pricing-1">
                    <p class="plan-name">Personal</p>
                    <br>
                    <h2 class="price text-success"><span class="price-unit">$</span> 9</h2>
                    <br>
                    <small><strong>1</strong> Agent</small><br>
                    <small><strong>10</strong> Item Support</small><br>
                    <small><strong>10 GB</strong> Attachment</small><br>
                    <br>
                    <p class="text-center py-3"><a class="btn btn-success" href="#">Get started</a></p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="pricing-1">
                    <p class="plan-name">Team</p>
                    <br>
                    <h2 class="price"><span class="price-unit">$</span> 39</h2>
                    <br>
                    <small><strong>5</strong> Agent</small><br>
                    <small><strong>25</strong> Item Support</small><br>
                    <small><strong>100 GB</strong> Attachment</small><br>
                    <br>
                    <p class="text-center py-3"><a class="btn btn-primary" href="#">Get started</a></p>
                </div>
            </div>
        </div>
    </div>
</section>




<!--
|‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
| FAQ
|‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
!-->
<section class="section" id="section-faq">
    <div class="container">
        <header class="section-header">
            <small>Questions</small>
            <h2>FAQ</h2>
            <hr>
            <p class="lead opacity-70">Got a question? We've got answers. If you have some other questions, see our support center.</p>
        </header>
        <div class="row gap-y">
            <div class="col-12 col-lg-6">
                <h5>What payment services do you support?</h5>
                <p>We accept all major credit cards.</p>
            </div>
            <div class="col-12 col-lg-6">
                <h5>Can I cancel my subscription?</h5>
                <p>You can cancel your subscription at any time. Cancelling your plan comes into effect the following month.</p>
            </div>
            <div class="col-12 col-lg-6">
                <h5>Is this a secure site for purchases?</h5>
                <p>Absolutely! We work with <a href="https://stripe.com/" target="_blank">Stripe</a> which guarantees your safety and security. All site communication and data transfer are secured and encrypted.</p>
            </div>
            <div class="col-12 col-lg-6">
                <h5>Can I update my card details?</h5>
                <p>Yes. Go to the billing section of your dashboard and update your payment information.</p>
            </div>
            <div class="col-12 col-lg-6">
                <h5>Can I try Helpato for free?</h5>
                <p>Of course! We’re happy to offer a free plan to anyone who wants to try our support system. There is no credit card required; you get access to all our great features; and if you choose to upgrade to a paid plan, you can keep all of your data too!</p>
            </div>
            <div class="col-12 col-lg-6">
                <h5>What if I want to change plans?</h5>
                <p>It's quick and easy to switch between our different pricing plans from your dashboard. Changes to your account will happen in real-time and any fees will be changed accordingly.</p>
            </div>
            <div class="col-12 col-lg-6">
                <h5>How long are your contracts?</h5>
                <p>Currently, we only offer monthly subscription. You can upgrade, downgrade, or cancel your monthly account at any time with no further obligation. Yearly subscription with generous discount will become available soon.</p>
                <p class="d-none">We offer both monthly and annual plans. Annual plans receive a 10% discount. You can upgrade, downgrade, or cancel your monthly account at any time with no further obligation.</p>
            </div>
            <div class="col-12 col-lg-6">
                <h5>Why do you ask for several permissions in login?</h5>
                <p>Envato API requires us to ask for these permissions to have the ability to get your details, items, purchased items, etc. on your behalf. We take privacy extremely seriously, and will never send messages, or access your data for anything other than our stated purposes.</p>
            </div>
            <div class="col-12 col-lg-6">
                <h5>Are you affiliated with Envato?</h5>
                <p>No, we are not affliated or supported by Envato.</p>
            </div>
            <div class="col-12 col-lg-6">
                <h5>Can I get refund?</h5>
                <p>Unfortunately, not at this time! Please try our free plan for a while to make sure Helpato is what you want.</p>
            </div>
            <div class="col-12 col-lg-6">
                <h5>Other questions?</h5>
                <p>We're always available at support@helpato.com</p>
            </div>
        </div>
    </div>
</section>

@endsection