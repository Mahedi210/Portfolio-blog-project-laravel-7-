<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/envato.jpg" alt="" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/designmodo.jpg" alt="" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/themeforest.jpg" alt="" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/creative-market.jpg" alt="" /></a>
            </div>
        </div>
    </div>
</div>
<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        <form action="{{route('contact.store')}}" method="POST" >
            @csrf

                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="title"><h4>Name</h4></label>
                        <input type="text" class="form-control" id="name" name="name" value="">
                    </div>

                    <div class="mb-5">

                        <label for="sub_title"><h4>email</h4></label>
                        <input type="text" class="form-control" id="email" name="email" value="">
                    </div>

                    <div class="mb-5">

                        <label for="sub_title"><h4>phone</h4></label>
                        <input type="text" class="form-control" id="phone" name="phone" value="">
                    </div>

                </div>
                <div class="form-group col-md-6 mt-3">
                    <h3>message</h3>
                    <textarea class="form-control" name="message" rows="5"></textarea>


                </div>

            </div>
            <input type="submit" name="submit" class="btn btn-primary my-5">
        </form>
{{--        <form id="contactForm" action="{{route('contact.store')}}" method="POST">--}}
{{--            @csrf--}}

{{--            <div class="row align-items-stretch mb-5">--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="form-group">--}}
{{--                        <input class="form-control" id="name" name="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />--}}
{{--                        <p class="help-block text-danger"></p>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />--}}
{{--                        <p class="help-block text-danger"></p>--}}
{{--                    </div>--}}
{{--                    <div class="form-group mb-md-0">--}}
{{--                        <input class="form-control" id="phone" name="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />--}}
{{--                        <p class="help-block text-danger"></p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="form-group form-group-textarea mb-md-0">--}}
{{--                        <textarea class="form-control" id="message" name="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>--}}
{{--                        <p class="help-block text-danger"></p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="text-center">--}}
{{--                <div id="success"></div>--}}
{{--                <button class="btn btn-primary btn-xl text-uppercase"  type="submit">Send Message</button>--}}
{{--            </div>--}}
{{--        </form>--}}
    </div>
</section>
