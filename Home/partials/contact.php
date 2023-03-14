<section id="contact" class="section parallax">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="title-box text-center white">
                <h2 class="title">Contact</h2>
            </div>
        </div>

        <!--Start contact form-->
        <div class="col-md-8 col-md-offset-2 contact-form">

            <div class="contact-info text-center">
                <p>+2519875834275</p>
                <p>Bole Addis Ababa </p>
                <p>mail@xyz.com </p>
            </div>

            <form method="post" name="contact_form_12" onSubmit="return contact_formValidation()">
                <div class="row">
                    <div class="col-md-4">
                        <input class="form-control" id="name" name="fullname" placeholder="Full Name" type="text">
                        <p id="usrname_err" style="color: red; text-transform: capitalize;"></p>
                    </div>
                    <div class="col-md-4">
                        <input class="form-control" name ="email" id="email" placeholder="Your Email" type="email">
                        <p id="email_err" style="color: red;"></p>
                    </div>
                    <div class="col-md-4">
                        <input class="form-control" id="subject" name = "subject" placeholder="Subject" type="text">
                         <p id="subject_err" style="color: red;"></p>
                    </div>
                    <div class="col-md-12">
                        <textarea class="form-control" id="message" rows="7" name="message" placeholder="Your Message"></textarea>
                        <p id="message_err" style="color: red;"></p>
                    </div>
                    <div class="col-md-12 text-right">
                        <button type="submit" name="submit_contact" class="btn btn-green">SEND MESSAGE</button>
                        
                    </div>

                </div>
            </form>
        </div>
        <!--End contact form-->

    </div>
    <!-- /.container-->
</section>