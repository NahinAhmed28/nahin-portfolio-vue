<template>
  <!-- ======= About Section ======= -->
  <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-sm-6 col-md-5">
                    <div class="about-img">
                      <img src="../../public/assets/img/testimonial-2.jpg" class="img-fluid rounded b-shadow-a" alt="">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-7">
                    <div class="about-info">
                      <p><span class="title-s">Name: </span> <span>Ahmed Nur-A-Jalal</span></p>
                      <p><span class="title-s">Email: </span> <span>nahin.ahmed28@gmail.com</span></p>
                      <p><span class="title-s">Phone: </span> <span>+8801521332113</span></p>
                      <p><span class="title-s">Address: </span> <span>East-Kazipara, Mirpur, Dhaka</span></p>
                    </div>
                  </div>
                </div>
                <div class="skill-mf">
                  <div class="title-box-2">
                    <h5 class="title-left">
                    <p class="title-s">Skill</p>
                    </h5>
                  </div>
                  <div v-animate-onscroll.repeat="{down: 'animated zoomInUp'}">
                    <ul class="customul" href="#services">
                      <div class="square-animation">
                        <li class="customli"><a class="nav-link scrollto active" href="#services" >Laravel</a> </li>
                        <li class="customli"><a class="nav-link scrollto active" href="#services" >PHP</a> </li>
                        <li class="customli"><a class="nav-link scrollto active" href="#services" >JAVASCRIPT</a> </li>
                        <li class="customli"><a class="nav-link scrollto active" href="#services" >Vue</a> </li>
                        <li class="customli"><a class="nav-link scrollto active" href="#services" >Technical Documentation</a></li>
                        <li class="customli"><a class="nav-link scrollto active" href="#services" >Android Development</a></li>
                        <li class="customli"><a class="nav-link scrollto active" href="#services" >Ui/UX Design</a></li>
                        <li class="customli"><a class="nav-link scrollto active" href="#services" >Machine Learning</a></li>
                        <li class="customli"><a class="nav-link scrollto active" href="#services" >Responsive Webpage Design & Development</a></li>
                      </div>
                    </ul>
                  </div>
                </div>
              </div>


              <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                        <h5 class="title-left">
                          Experience
                        </h5>
                      </div>
                  <p class="lead">
                    <i class="bi bi-card-checklist text-success"></i> <strong>  October,2021–Current - (1 year)</strong> <br>
                    <i class="bi bi-bicycle text-primary"></i> Junior Web Developer (Full-Stack) <br>
                    <i class="bi bi-map text-info"></i> <span class="text-warning" style="font-weight: bold"> Multimedia Content and Communication (MCC) Ltd</span>
                  </p>
                    <hr style="height:2px; width:50%; border-width:0; color:red; background-color:deepskyblue">

                    <p class="lead">
                    <i class="bi bi-card-checklist text-success"></i> <strong>April, 2021–October, 2021 - (6 months)</strong><br>
                    <i class="bi bi-bicycle text-primary"></i> Web Frontend- Vue.js Developer<br>
                    <i class="bi bi-map text-info"></i><span class="text-warning" style="font-weight: bold"> Techtrioz Solution </span>
                  </p>
                    <hr style="height:2px; width:50%; border-width:0; color:red; background-color:deepskyblue">

                  <p class="lead">
                    <i class="bi bi-card-checklist text-success"></i> <strong>October, 2020 –December, 2020 - (3 months)</strong> <br>
                    <i class="bi bi-bicycle text-primary"></i> Machine Learning Intern<br>
                    <i class="bi bi-map text-info"></i> <span class="text-warning" style="font-weight: bold"> Deepsight AI </span>
                  </p>
                    <div class="title-box-2" style="margin-top: 3rem">
                      <h5 class="title-left">
                        Education
                      </h5>
                    </div>
                    <p class="lead">
                      <i class="bi bi-box-arrow-in-left text-warning"></i> <strong>BSc in CSE</strong><br>
                      <i class="bi bi-bookmarks text-info"></i><span class="text-warning" style="font-weight: bold"> Daffodil International University</span><br>
                      <i class="bi bi-bookmark-star text-primary"></i>2020
                      </p>
                    <hr style="height:2px; width:50%; border-width:0; color:red; background-color:deepskyblue">
                    <p class="lead">
                        <i class="bi bi-box-arrow-in-left text-warning"></i><strong> Higher Secondary School Certificate</strong><br>
                      <i class="bi bi-bookmarks text-info"></i><span class="text-warning" style="font-weight: bold">Adamjee Cantonment College</span><br>
                      <i class="bi bi-bookmark-star text-primary"></i>2015
                      </p>
                    <hr style="height:2px; width:50%; border-width:0; color:red; background-color:deepskyblue">
                    <p class="lead">
                        <i class="bi bi-box-arrow-in-left text-warning"></i> <strong> Secondary School Certificate </strong><br>
                      <i class="bi bi-bookmarks text-info"></i><span class="text-warning" style="font-weight: bold">BAF Shaheen School</span><br>
                      <i class="bi bi-bookmark-star text-primary"></i>2013
                      </p>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
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
                    <div v-animate-onscroll.repeat="{down: 'animated zoomInUp'}">
                      <img src="../../public/assets/img/testimonial-2.jpg" alt="" class="rounded-circle b-shadow-a">
                    </div>
                    <span class="author">Ahmed Nur-A- Jalal (Nahin)</span>
                  </div>
                  <div v-animate-onscroll.repeat="{down: 'animated slide-in-left'}">
                    <div class="content-test">
                      <p class="description lead">
                        Junior Laravel and Vue.js web developer .I Have basic knowledge on android app development with native java and I am a data science enthusiast.
                      </p>
                    </div>
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
  </div>
  <!-- End Testimonials Section -->
  <!-- End About Section -->



</template>

<script>

export default {
  name: "AboutComponent",
  // methods: {
  //   async takeToService() {
  //     const nav = document.querySelector('#navbar')
  //     const btn = document.querySelector('#mobileButton')
  //     nav.classList.toggle('navbar-mobile')
  //     btn.classList.toggle('bi-x')
  //   },
  // },
  // created() {
  //   this.takeToService();
  // }

};

</script>


<style scoped>


</style>
