<template>
  <!-- ======= Hero Section ======= -->


  <div  class="hero route bg-image" :style="{'background-image': 'url(/assets/img/hero-bg2.jpg)'}">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->




          <h1 class="hero-title mb-2">I am Nahin Ahmed</h1> <br>
<!--          <p class="hero-subtitle"><span class="typed" data-typed-items="Designer, Developer, Photographer"></span></p>-->
          <p class="hero-subtitle">
            <span class="typed-text">{{ typeValue }}</span>
            <span class="blinking-cursor">|</span>
            <span class="cursor" :class="{ typing: typeStatus }">&nbsp;</span>
          </p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
          <p class="pt-3"><a class="brn btn-secondary btn js-scroll" href="#about">Learn More</a></p>
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->
</template>

<script>


export default {
  name: "HeroComponent",
  data: () => {
    return {
      typeValue: "",
      typeStatus: false,
      displayTextArray: ["Android Developer", "WEB Developer", "Designer", "Freelancer","Photographer"],
      typingSpeed: 100,
      erasingSpeed: 80,
      newTextDelay: 1500,
      displayTextArrayIndex: 0,
      charIndex: 0,
    };
  },
  props: {},
  created() {
    setTimeout(this.typeText, this.newTextDelay + 200);
  },
  methods: {
    typeText() {
      if (this.charIndex < this.displayTextArray[this.displayTextArrayIndex].length) {
        if (!this.typeStatus) this.typeStatus = true;
        this.typeValue += this.displayTextArray[this.displayTextArrayIndex].charAt(
            this.charIndex
        );
        this.charIndex += 1;
        setTimeout(this.typeText,50);
      } else {
        this.typeStatus = false;
        setTimeout(this.eraseText, this.newTextDelay);
      }
    },
    eraseText() {
      if (this.charIndex > 0) {
        if (!this.typeStatus) this.typeStatus = true;
        this.typeValue = this.displayTextArray[this.displayTextArrayIndex].substring(
            0,
            this.charIndex - 1
        );
        this.charIndex -= 1;
        setTimeout(this.eraseText, this.erasingSpeed);
      } else {
        this.typeStatus = false;
        this.displayTextArrayIndex += 1;
        if (this.displayTextArrayIndex >= this.displayTextArray.length)
          this.displayTextArrayIndex = 0;
        setTimeout(this.typeText, this.typingSpeed + 1000);
      }
    },
  },
};

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>


// Cursor blinking CSS Starts...
.blinking-cursor {
  font-size: 3rem;
  color: #2c3e50;
  -webkit-animation: 1s blink step-end infinite;
  -moz-animation: 1s blink step-end infinite;
  -ms-animation: 1s blink step-end infinite;
  -o-animation: 1s blink step-end infinite;
  animation: 1s blink step-end infinite;
}
@keyframes blink {
  from,
  to {
    color: transparent;
  }
  50% {
    color: #2c3e50;
  }
}
@-moz-keyframes blink {
  from,
  to {
    color: transparent;
  }
  50% {
    color: #2c3e50;
  }
}
@-webkit-keyframes blink {
  from,
  to {
    color: transparent;
  }
  50% {
    color: #2c3e50;
  }
}
@-ms-keyframes blink {
  from,
  to {
    color: transparent;
  }
  50% {
    color: #2c3e50;
  }
}
@-o-keyframes blink {
  from,
  to {
    color: transparent;
  }
  50% {
    color: #2c3e50;
  }
}
// Cursor blinking CSS Ends...
</style>
