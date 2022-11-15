<template>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="background-color: rgba(0,0,0,0.91)">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="#hero">DevFolio</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero" @click="scrollto()">Home</a></li>
          <li><a class="nav-link scrollto" href="#about" @click="scrollto()">About</a></li>
          <li><a class="nav-link scrollto" href="#services" @click="scrollto()">Services</a></li>
          <li><a class="nav-link scrollto " href="#work" @click="scrollto()">Work</a></li>
          <li><a class="nav-link scrollto " href="#blog" @click="scrollto()">Courses</a></li>
          <li><a class="nav-link scrollto" href="#contact" @click="scrollto()">Contact</a></li>
        </ul>

        <i id="mobileButton" class="bi bi-list mobile-nav-toggle"  @click="worker()"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
</template>

<script>

export default {

  name: "HeaderComponent",
  methods:  {
    async worker(){
      const nav = document.querySelector('#navbar')
      const btn = document.querySelector('#mobileButton')
      nav.classList.toggle('navbar-mobile')
      btn.classList.toggle('bi-x')
    },
    async scrollto(){
      const navbar = document.querySelector('#navbar')

      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
      }
    }

  },
  created(){
    this.worker();
    this.scrollto();
  }
}
</script>

<style scoped>

</style>