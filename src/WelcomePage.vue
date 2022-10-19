<template>
  <div>
    <HeaderComponent/>
    <HeroComponent/>
    <AboutComponent/>
    <ServicesComponent/>
    <PortfolioComponent/>
    <BlogComponent/>
    <MainComponent/>
    <FooterComponent/>
  </div>
</template>

<script>
import HeaderComponent from "@/pageComponents/Header";
import HeroComponent from "@/pageComponents/Hero";
import MainComponent from "@/pageComponents/Main";
import FooterComponent from "@/pageComponents/Footer";
import AboutComponent from "@/pageComponents/Blog";
import ServicesComponent from "@/pageComponents/Services";
import PortfolioComponent from "@/pageComponents/Portfolio";
import BlogComponent from "@/pageComponents/Blog";
export default {
  name: "WelcomePage",
  components: {
    BlogComponent,
    PortfolioComponent,
    ServicesComponent, AboutComponent, FooterComponent, MainComponent, HeroComponent, HeaderComponent},

}
</script>

<style scoped>

</style>