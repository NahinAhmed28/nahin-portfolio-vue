<template>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="background-color: rgba(0,0,0,0.91)">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="#hero">DevFolio</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#work">Work</a></li>
          <li><a class="nav-link scrollto " href="#blog">Courses</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
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
    }

  },
  created(){
    this.worker();
  }
}
</script>

<style scoped>

</style>