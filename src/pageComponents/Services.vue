<template>
  <!-- ======= Services Section ======= -->
  <section id="services" class="services-mf pt-5 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Services
            </h3>
            <p class="subtitle-a">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div v-animate-onscroll.repeat="{down: 'animated flipInY'}">
            <div class="service-box">

            <div class="service-ico">
              <span class="ico-circle"><i class="bi bi-briefcase"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Back End Web Development</h2>
              <p class="s-description text-center">
              Laravel Framework for php based backend web development.
              </p>
            </div>
          </div>
          </div>
        </div>
        <div class="col-md-4">
          <div v-animate-onscroll.repeat="{down: 'animated flipInY'}">
            <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="bi bi-card-checklist"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Front End Web Development and Design</h2>
              <p class="s-description text-center">
               Vue.js ,vue-bootstrap, bootstrap and custom CSS for front end responsive and interactive web pages design and development
              </p>
            </div>
          </div>
          </div>
        </div>
        <div class="col-md-4">
          <div v-animate-onscroll.repeat="{down: 'animated flipInY'}">
            <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="bi bi-bar-chart"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">App Development</h2>
              <p class="s-description text-center">
               Frontend Layout Design with XMl and Basic backend development with Native Java. Basic Firebase,SQlite and API injection.
              </p>
            </div>
          </div>
          </div>
        </div>
        <div class="col-md-4">
          <div v-animate-onscroll.repeat="{down: 'animated flipInY'}">
            <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="bi bi-binoculars"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Ui/UX Design</h2>
              <p class="s-description text-center">
                Wireframming and UI/UX Design with ADOBE XD and basic photoshop with Adobe photoshop and Adobe Lightroom
              </p>
            </div>
          </div>
          </div>
        </div>
        <div class="col-md-4">
          <div v-animate-onscroll.repeat="{down: 'animated flipInY'}">
            <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="bi bi-brightness-high"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Machine Learning</h2>
              <p class="s-description text-center">
                Image Processing and Natural Language processing.
              </p>
            </div>
          </div>
          </div>
        </div>
        <div class="col-md-4">
          <div v-animate-onscroll.repeat="{down: 'animated flipInY'}">
            <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="bi bi-calendar4-week"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Technical Documentation</h2>
              <p class="s-description text-center">
               Prominent skill on Technical Documentation writing.
              </p>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Services Section -->
</template>



<script>

  export default {
  name: "ServicesComponent",

}

</script>


<style scoped>


</style>