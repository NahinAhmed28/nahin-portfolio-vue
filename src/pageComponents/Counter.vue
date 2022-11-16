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
                <p class="counter purecounter"  v-on:scroll.passive="scrollFunction">{{ tweened2.toFixed(0) }}</p>
                <span class="counter-text">YEARS OF EXPERIENCE</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"  v-on:scroll.passive="scrollFunction"><i class="bi bi-people"></i></span>
              </div>
              <div class="counter-num">
<!--                <p data-purecounter-start="0" data-purecounter-end="550" data-purecounter-duration="1" class="counter purecounter"></p>-->
                <p class="counter purecounter"  v-on:scroll="scrollFunction">{{ tweened1.toFixed(0) }}</p>
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
                <p class="counter purecounter"  v-on:scroll="scrollFunction">{{ tweened.toFixed(0) }}</p>
                <span>AWARD WON</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Counter Section -->

  </main><!-- End #main -->
</template>

<script>
import gsap from 'gsap';

export default {
  name: "CounterComponent",
  data() {
    return {
      number: 0,
      tweened: 0,
      tweened1: 0,
      tweened2: 0,
      tweened3: 0,
    }
  },
  created() {
    window.addEventListener("scroll", this.handleScroll);

  },
  methods:{
    handleScroll: function(n) {
          gsap.to(this, {duration: 5, tweened: Number(n) || 5}),
          gsap.to(this, {duration: 5, tweened1: Number(n) || 8}),
          gsap.to(this, {duration: 5, tweened2: Number(n) || 3}),
          gsap.to(this, {duration: 5, tweened3: Number(n) || 20})
    },
    destroyed () {
      window.removeEventListener('scroll', this.handleScroll);
    },

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