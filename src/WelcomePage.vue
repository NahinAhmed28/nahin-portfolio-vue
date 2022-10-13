<template>
  <div>
    <HeaderComponent/>
    <HeroComponent/>
    <MainComponent/>
    <FooterComponent/>

  </div>
</template>

<script>
import HeaderComponent from "@/pageComponents/Header";
import HeroComponent from "@/pageComponents/Hero";
import MainComponent from "@/pageComponents/Main";
import FooterComponent from "@/pageComponents/Footer";
export default {
  name: "WelcomePage",
  components: {FooterComponent, MainComponent, HeroComponent, HeaderComponent},

}
</script>

<style scoped>

</style>