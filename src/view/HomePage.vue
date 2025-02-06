
<template>
  <Header />

  <HeroSectionComponent class="section-spacing" />

  <FeaturesComponent class="section-spacing" />

  <HowItWorksComponent class="section-spacing1" />

  <WhyChooseUsComponent />

  <ApplicationDomainsComponent class="section-spacing4"/>

  <ContactFormComponent class="section-spacing5" />

  <FooterComponent />
</template>

<script setup>
import Header from '@/components/HeaderComponent.vue'
import HeroSectionComponent from "@/components/HeroSectionComponent.vue";
import FeaturesComponent from "@/components/FeaturesComponent.vue";
import HowItWorksComponent from "@/components/HowItWorksComponent.vue";
import WhyChooseUsComponent from "@/components/WhyChooseUsComponent.vue";
import ApplicationDomainsComponent from "@/components/ApplicationDomainsComponent.vue";
import ContactFormComponent from "@/components/ContactFormComponent.vue";
import FooterComponent from "@/components/FooterComponent.vue";


</script>


<style>
* {
  font-family:  Inter Tight, sans-serif;
}
html {
  scroll-behavior: smooth;
}
.section-spacing {
  margin-bottom: 200px;
}
.section-spacing1 {
  margin-bottom: 300px;
}
.section-spacing4 {
  margin-top: 100px;
}
@media (max-width: 632px) {
  .section-spacing5 {
    margin-bottom: 80px;
  }
}
@media (max-width: 480px) {
  .section-spacing1 {
    margin-bottom: 200px;
  }
}
@media (max-width: 360px) {
  .section-spacing1 {
    margin-bottom: 300px;
  }
}
body {
  margin: 0;

  font-size: 1rem;
  line-height: 1.6;
  background-color: #070514;
  z-index: -3;
}

</style>