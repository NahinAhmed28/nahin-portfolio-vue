<template>
  <main id="main">

    <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" :style="{'background-image': 'url(/assets/img/counters-bg.jpg)'}">
      <div class="overlay-mf"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-check"></i></span>
              </div>
              <div class="counter-num">
<!--                <p data-purecounter-start="0" data-purecounter-end="450" data-purecounter-duration="1" class="counter purecounter"></p>-->
                <p class="counter purecounter">{{ tweened3.toFixed(0) }}</p>
                <span class="counter-text">WORKS COMPLETED</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-journal-richtext"></i></span>
              </div>
              <div class="counter-num">
<!--                <p data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="counter purecounter"></p>-->
                <p class="counter purecounter">{{ tweened2.toFixed(0) }}</p>
                <span class="counter-text">YEARS OF EXPERIENCE</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-people"></i></span>
              </div>
              <div class="counter-num">
<!--                <p data-purecounter-start="0" data-purecounter-end="550" data-purecounter-duration="1" class="counter purecounter"></p>-->
                <p class="counter purecounter">{{ tweened1.toFixed(0) }}</p>
                <span class="counter-text">TOTAL CLIENTS</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-award"></i></span>
              </div>
              <div class="counter-num">
<!--                <p data-purecounter-start="0" data-purecounter-end="550" data-purecounter-duration="1" class="counter purecounter"></p>-->
<!--                Type a number: <input v-model.number="number" />-->
                <p class="counter purecounter">{{ tweened.toFixed(0) }}</p>
                <span>AWARD WON</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Counter Section -->



    <!-- ======= Testimonials Section ======= -->
    <div class="testimonials paralax-mf bg-image" :style="{'background-image': 'url(/assets/img/overlay-bg.jpg)'}">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-box">
                    <div class="author-test">
                      <img src="../../public/assets/img/testimonial-2.jpg" alt="" class="rounded-circle b-shadow-a">
                      <span class="author">Xavi Alonso</span>
                    </div>
                    <div class="content-test">
                      <p class="description lead">
                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit.
                      </p>
                    </div>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-box">
                    <div class="author-test">
                      <img src="../../public/assets/img/testimonial-4.jpg" alt="" class="rounded-circle b-shadow-a">
                      <span class="author">Marta Socrate</span>
                    </div>
                    <div class="content-test">
                      <p class="description lead">
                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit.
                      </p>
                    </div>
                  </div>
                </div><!-- End testimonial item -->
              </div>
              <div class="swiper-pagination"></div>
            </div>

            <!-- <div id="testimonial-mf" class="owl-carousel owl-theme">

        </div> -->
          </div>
        </div>
      </div>
    </div><!-- End Testimonials Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" :style="{'background-image': 'url(/assets/img/overlay-bg.jpg)'}">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Send Message to Me
                      </h5>
                    </div>
                    <div>
                      <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                          </div>
                          <div class="col-md-12 text-center my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                          </div>
                          <div class="col-md-12 text-center">
                            <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Get in Touch
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolorum dolorem soluta quidem
                        expedita aperiam aliquid at.
                        Totam magni ipsum suscipit amet? Autem nemo esse laboriosam ratione nobis
                        mollitia inventore?
                      </p>
                      <ul class="list-ico">
                        <li><span class="bi bi-geo-alt"></span> Mirpur, East-Kazipara, Dhaka,1216</li>
                        <li><span class="bi bi-phone"></span> +8801521332113</li>
                        <li><span class="bi bi-envelope"></span> nahin.ahmed28@gmail.com</li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href=""><span class="ico-circle"><i class="bi bi-facebook"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="bi bi-instagram"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="bi bi-twitter"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="bi bi-linkedin"></i></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
</template>

<script>
import gsap from 'gsap'
export default {
  name: "MainComponent",
  created(n) {
      gsap.to(this, {duration: 5, tweened: Number(n) || 121}),
      gsap.to(this, {duration: 5, tweened1: Number(n) || 281}),
      gsap.to(this, {duration: 5, tweened2: Number(n) || 356}),
      gsap.to(this, {duration: 5, tweened3: Number(n) || 331})
  },
  data() {
    return {
      number: 0,
      tweened: 0,
      tweened1: 0,
      tweened2: 0,
      tweened3: 0,
    }
  },
  // watch: {
  //   number: function (n) {
  //     gsap.to(this, {duration: 0.5, tweened: Number(n) || 0})
  //   },
  // },

}
</script>

<style scoped>

</style>