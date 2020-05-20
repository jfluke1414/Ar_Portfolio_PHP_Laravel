<!-- ======= Contact Me Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact Me</span>
          <h2>Contact Me</h2>
          <p>If have a question, Feel free to contact me with any contact below.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-share-alt"></i>
                  <h3>Social Profiles</h3>
                  <div class="social-links">
                    <!-- <a href="#" class="twitter"><i class="icofont-twitter"></i></a> -->
                    
                    <a href="https://www.facebook.com/hyunjin.yeo.3" target="_blank" class="facebook"><i class="icofont-facebook"></i></a>
                    <a href="https://www.instagram.com/hyunjin_aaron" target="_blank" class="instagram"><i class="icofont-instagram"></i></a>
                    <!-- <a href="jfluke1414@gmail.com" class="google-plus"><i class="icofont-skype"></i></a> -->
                    <a href="https://linkedin.com/in/aaron-hyunjin-yeo" target="_blank" class="linkedin"><i class="icofont-linkedin"></i></a>
                    <a href="https://github.com/jfluke1414?tab=repositories" target="_blank" class="github"><i class="icofont-github"></i></a>
                    <a href="https://jfluke1414.github.io/" target="_blank" class="blogger"><i class="icofont-blogger"></i></a>
                    <a href="https://192.168.5.178:8080" target="_blank" class="web"><i class="icofont-web"></i></a>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Me</h3>
                  <p>jfluke1414@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Me</h3>
                  <p>+1 780 918 0831</p>
                </div>
              </div>
            </div>

          </div>
			
          <div class="col-lg-6">
            <form action="contact" method="post" role="form" class="php-email-form">
            {{@csrf_field()}}
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="6" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message">Unfortunately failing sending e-mail.</div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Me Section -->