<template>
  <div v-if="isLoading" class="loader">
    <div class="logo">
      <span class="bracket">[</span> Sc.AI <span class="bracket">]</span>
    </div>
  </div>

  <div v-show="!isLoading">
    <Header />
    <HeroSectionComponent @videoLoaded="hideLoader" class="section-spacing" />
    <FeaturesComponent class="section-spacing" />
    <HowItWorksComponent class="section-spacing1" />
    <WhyChooseUsComponent />
    <ApplicationDomainsComponent class="section-spacing4"/>
    <ContactFormComponent class="section-spacing5" />
    <FooterComponent />
  </div>
</template>

<script setup>
import { ref } from "vue";
import Header from '@/components/HeaderComponent.vue'
import HeroSectionComponent from "@/components/HeroSectionComponent.vue";
import FeaturesComponent from "@/components/FeaturesComponent.vue";
import HowItWorksComponent from "@/components/HowItWorksComponent.vue";
import WhyChooseUsComponent from "@/components/WhyChooseUsComponent.vue";
import ApplicationDomainsComponent from "@/components/ApplicationDomainsComponent.vue";
import ContactFormComponent from "@/components/ContactFormComponent.vue";
import FooterComponent from "@/components/FooterComponent.vue";

const isLoading = ref(true);

const hideLoader = () => {
  setTimeout(() => {
    isLoading.value = false;
  }, 500);
};
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
/* Лоадер */
.loader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #070514;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 9999;
  transition: opacity 0.8s ease-in-out;
}

.loader .logo {
  font-size: 48px;
  font-weight: 600;
  color: #444;
  transition: color 2s ease-in-out;
  animation: fadeColor 2s infinite alternate;
}

.loader .bracket {
  color: #444;
  transition: color 2s ease-in-out;
  animation: fadeBracket 2s infinite alternate;
}

@keyframes fadeColor {
  0% { color: #444; }
  100% { color: #00BBFF; }
}

@keyframes fadeBracket {
  0% { color: #444; }
  100% { color: #00BBFF; }
}

</style>