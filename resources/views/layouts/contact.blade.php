@include('layouts.script')
@include('layouts.style')
@include('layouts.header')


<section class="contact-block">
            <div class="container">
                <div class="text-head">
                    <h1>contact us</h1>
                </div>

            </div>
            <div class="contact-block-full-image">
                <div class="container">
                    <form name="sentMessage" id="contactForm">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" id="name1" class="form-control" placeholder="Name" required="" aria-invalid="false">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" id="contact1" class="form-control" placeholder="Contact Number" required="">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="email" id="email1" class="form-control" placeholder="Email id" required="">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" id="category1" class="form-control" placeholder="category" required="">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message1" class="form-control" rows="4" placeholder="Message" required="" aria-invalid="false"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div id="success"></div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-lg btn-button">clear</button>
                            <button type="submit" class="btn btn-lg btn-button">send</button>
                        </div>
                    </form>
                </div> 
            </div>
            <div class="clearfix"></div>
        </section>