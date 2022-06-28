<div class="row gx-4 gx-lg-5 justify-content-center mb-5">
    <div class="col-lg-6">
        <!-- * * * * * * * * * * * * * * *-->
        <!-- * * SB Forms Contact Form * *-->
        <!-- * * * * * * * * * * * * * * *-->
        <!-- This form is pre-integrated with SB Forms.-->
        <!-- To make this form functional, sign up at-->
        <!-- https://startbootstrap.com/solution/contact-forms-->
        <!-- to get an API token!-->
            <form id="contactForm" method="post" action="{{url('create-message')}}">
            @csrf
            <!-- Name input-->
            <div class="form-floating mb-3">
                <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." />
                <label for="name">name</label>
                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
            </div>
            <!-- Email address input-->
            <div class="form-floating mb-3">
                <input class="form-control" id="email" type="email"  name="email" placeholder="name@example.com" />
                <label for="email">email</label>
                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
            </div>
            <!-- Phone number input-->
            <div class="form-floating mb-3">
                <input class="form-control" id="phone" type="tel" placeholder="01005590881" name="phone"  />
                <label for="phone">Phone</label>
                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
            </div>
            <!-- Message input-->
            <div class="form-floating mb-3">
                <textarea class="form-control" id="message" name="message" type="text" placeholder="Enter your message here..." style="height: 10rem" ></textarea>
                <label for="message">Message</label>
                <div class="invalid-feedback">A message is required.</div>
            </div>
            <!-- Submit success message-->
            <!---->
            <!-- This is what your users will see when the form-->
            <!-- has successfully submitted-->
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    <br/>
                    
                </div>
            </div>
            <!-- Submit error message-->
            <!---->
            <!-- This is what your users will see when there is-->
            <!-- an error submitting the form-->
            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
            <!-- Submit Button-->
            <div class="d-grid"><button class="btn btn-primary btn-xl " id="submitButton" type="submit">Submit</button></div>
            </form>
    </div>
    <br>
</div>
<div class="row gx-4 gx-lg-5 justify-content-center">
    <div class="col-lg-4 text-center mb-5 mb-lg-0">
        <i class="bi-phone fs-2 mb-3 text-muted">01065282111</i>
        <div></div>
    </div>
</div>