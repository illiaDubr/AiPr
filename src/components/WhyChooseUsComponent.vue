<template>
  <section class="why-choose-us" id="why-choose-us">
    <img
        src="@/assets/image/bg/floating-left.png"
        alt=""
        class="floating-element float-left"
    />
    <img
        src="@/assets/image/bg/floating-right.png"
        alt=""
        class="floating-element float-right"
    />

    <div class="container">
      <h2 class="section-title">
        Why <span class="highlight">Choose Us</span>
      </h2>

      <div class="cards-grid">
        <!-- Карточка #1 -->
        <div class="card">
          <div class="card-icon">
            <img src="@/assets/image/icons/science-icon.svg" alt="Science" />
          </div>
          <div class="content-title-subtitle">
          <h3 class="card-title">We’re in it for science</h3>
          <p class="card-text">
            ScAI is driving innovation in scientific research, leveraging AI to accelerate discoveries and breakthroughs, benefiting the global research community
          </p>
        </div>
        </div>

        <!-- Карточка #2 -->
        <div class="card">
          <div class="card-icon">
            <img src="@/assets/image/icons/control-icon.svg" alt="Data control" />
          </div>
          <div class="content-title-subtitle">
          <h3 class="card-title">Maintain full control of your data and models</h3>
          <p class="card-text">
            You always retain full ownership of your data and have the choice whether to share it with the research community</p>
        </div>
        </div>

        <!-- Карточка #3 -->
        <div class="card">
          <div class="card-icon">
            <img src="@/assets/image/icons/computing-icon.svg" alt="Computing power" />
          </div>
          <div class="content-title-subtitle">
          <h3 class="card-title">Gain access to computing power</h3>
          <p class="card-text">
            scAI provides easy access to supercomputer infrastructure at economical prices</p>
        </div>
        </div>

        <!-- Карточка #4 -->
        <div class="card">
          <div class="card-icon">
            <img src="@/assets/image/icons/valorize-icon.svg" alt="Valorize" />
          </div>
          <div class="content-title-subtitle">
          <h3 class="card-title">Valorize your research</h3>
          <p class="card-text">
            scAI provides a seamless interface to your research results and models, making it easier for others to access and utilize them and thereby enhancing your potential to monetize your findings. You define the commercial terms, whether it’s open source, pay-per-use, fixed licensing, or another model of your choice</p>
        </div>
        </div>

        <!-- Карточка #5 -->
        <div class="card">
          <div class="card-icon">
            <img src="@/assets/image/icons/customerbase-icon.svg" alt="Customer base" />
          </div>
          <div class="content-title-subtitle">
          <h3 class="card-title">Grow your customer base</h3>
          <p class="card-text">
            For commercial vendors, scAI offers an add-on layer that enhances and simplifies the user interface. This reduces the time and expertise needed to set up simulations, making your products more accessible to a broader user base</p>
        </div>
        </div>
        <!-- Карточка #6 -->
        <div class="card">
          <div class="card-icon">
            <img src="@/assets/image/icons/legal-icon.svg" alt="Legal & IP" />
          </div>
          <div class="content-title-subtitle">
          <h3 class="card-title">Integrated legal and IP management</h3>
          <p class="card-text">
            When entities connect on the scAI platform, it automatically documents interactions and generates legal contracts, ensuring that your rights and intellectual property are always protected</p>
        </div>
        </div>
    </div>
      <div class="swiper-slide">
        <swiper
            v-if="isMobile"
            ref="swiperRef"
            :slides-per-view="slidesPerView"
            :navigation="true"
            :modules="[Navigation]"
            :initial-slide="1"
            space-between="20"
            centeredSlides="true"
            class="cards-carousel"
        >
        <swiper-slide v-for="(card, idx) in cards" :key="idx">
            <div class="card">
              <div class="card-icon">
                <img :src="getAssetPath(card.icon)" :alt="card.alt" />
              </div>
              <h3 class="card-title">{{ card.title }}</h3>
              <p class="card-text">{{ card.text }}</p>
            </div>
          </swiper-slide>
        </swiper>
      </div>
    </div>
  </section>
</template>

<script setup>
import {ref, onMounted, onUnmounted, watch} from "vue";
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/swiper-bundle.css";
import { Navigation } from "swiper/modules";


const isMobile = ref(window.innerWidth <= 1016);
const slidesPerView = ref(1);
const swiperRef = ref(null);

const updateSlidesPerView = () => {
  if (window.innerWidth <= 632) {
    slidesPerView.value = 1;
  } else if (window.innerWidth <= 1016) {
    slidesPerView.value = 2;
  } else {
    slidesPerView.value = 3;
  }
};


onMounted(() => {
  updateSlidesPerView();
  window.addEventListener("resize", updateSlidesPerView);

  const gridCards = document.querySelectorAll(".cards-grid .card");
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const allCards = [...gridCards];
        const index = allCards.indexOf(entry.target);
        const delay = 0;

        entry.target.style.animationDelay = `${delay}s`;

        entry.target.classList.add("futuristic-animate");

        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.15,
  });
  gridCards.forEach((card) => observer.observe(card));

  const titles = document.querySelectorAll(".section-title");
  const observerTitle = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("animate");
        observerTitle.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });

  titles.forEach((title) => observerTitle.observe(title));
});



onUnmounted(() => {
  window.removeEventListener("resize", updateSlidesPerView);
});

watch(isMobile, () => {
  if (swiperRef.value) {
    swiperRef.value.swiper.update();
  }
});

const getAssetPath = (path) => {
  return new URL(path, import.meta.url).href;
};

const cards = [
  {
    icon: "/assets/image/icons/science-icon.png",
    alt: "Science",
    title: "We’re in it for science",
    text: "We’re developing Sc.AI to advance science and innovative breakthroughs for the benefit of all",
  },
  {
    icon: "/assets/image/icons/control-icon.svg",
    alt: "Data control",
    title: "Maintain full control of your data and models",
    text: "You always retain full ownership of your data and have the choice whether to share it with the research community",
  },
  {
    icon: "/assets/image/icons/computing-icon.svg",
    alt: "Computing power",
    title: "Gain access to computing power",
    text: "scAI provides easy access to supercomputer infrastructure at economical prices",
  },
  {
    icon: "/assets/image/icons/valorize-icon.svg",
    alt: "Valorize",
    title: "Valorize your research",
    text: "scAI provides a seamless interface to your research results and models.",
  },
  {
    icon: "/assets/image/icons/customerbase-icon.svg",
    alt: "Customer base",
    title: "Grow your customer base",
    text: "For commercial vendors, scAI offers an add-on layer that enhances and simplifies the user interface.",
  },
  {
    icon: "/assets/image/icons/legal-icon.svg",
    alt: "Legal & IP",
    title: "Integrated legal and IP management",
    text: "When entities connect on the scAI platform, it automatically documents interactions and generates legal contracts.",
  },
];
</script>


<style scoped>
:deep(.section-title) {
  opacity: 0;
  transform: translateY(20px);
  transition: opacity 0.6s, transform 0.6s;
}
:deep(.section-title.animate) {
  opacity: 1;
  transform: translateY(0);
}
.cards-grid .card {
  opacity: 0;
  transform: perspective(800px) rotateX(15deg) translateY(30px) scale(0.9);
  transition: none;
  overflow: visible;
  position: relative;
}

.cards-grid .card.futuristic-animate {
  animation: futuristicEntry 0.5s cubic-bezier(0.25, 0.8, 0.25, 1) forwards;
}

@keyframes futuristicEntry {
  0% {
    opacity: 0;
    transform: perspective(800px) rotateX(15deg) translateY(30px) scale(0.9);
  }
  60% {
    opacity: 0.8;
    transform: perspective(800px) rotateX(5deg) translateY(5px) scale(1.05);
  }
  100% {
    opacity: 1;
    transform: perspective(800px) rotateX(0deg) translateY(0) scale(1);
    filter: none;
  }
}

/* Неоновая подсветка */
.cards-grid .card.futuristic-animate::after {
  content: "";
  position: absolute;
  top: -2px;
  left: -2px;
  right: -2px;
  bottom: -2px;
  border-radius: 30px;
  pointer-events: none;
  z-index: 2;
  opacity: 0;
  animation: neonGlow 1.2s ease 0.7s forwards;
  /* 0.7s delay, чтобы подсветка появилась после движения */
}

@keyframes neonGlow {
  0%   { opacity: 0; }
  50%  { opacity: 1;  }
  100% { opacity: 0.6; }
}
.why-choose-us {
  position: relative;
  width: 100%;
  max-height: 1100px;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background: #070514;
  overflow: hidden;
  padding-bottom: 150px;
}
.container {
  position: relative;
  z-index: 2;
  max-width: 1600px;
  max-height: 1011px;
  height: 100%;
  width: 100%;
  margin: 0 auto;
  color: #fff;
}
.section-title {
  font-size: 64px;
  font-weight: 500;
  line-height: 83.2px;
  text-align: center;
}
.highlight {
  color: #00aaff;
}

.cards-grid {
  margin-top: 48px;
  max-width: 1600px;
  max-height: 780px;
  width: 100%;
  height: 100%;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-row-gap: 2rem;
  grid-column-gap: 2rem;
}
.card {
  max-width: 520px;
  height: 400px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  background-color: #04051A;
  border: 1px solid #232323;
  border-radius: 30px;
  position: relative;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
  transition: transform 0.3s ease;
  justify-content: space-between;
}
.card:hover {
  transform: translateY(-5px);
}

.card-icon {
  display: flex;
  justify-content: space-around;
}
.card-icon img {
  max-width: 96px;
  border-radius: 30px;
}

.content-title-subtitle {
  height: 180px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.cards-carousel {
  display: none;
  margin-top: 2rem;
}

.card-title {
  font-size: 36px;
  font-weight: 500;
  line-height: 46.8px;
  text-align: left;
  color: #FFFFFF;
}
.card-text {
  color: #B4B4B4;
  font-size: 16px;
  font-weight: 400;
  line-height: 22.4px;
  text-align: left;
}

.floating-element {
  position: absolute;
  z-index: 1;
  pointer-events: none;
  opacity: 0.7;
  animation: float 2.5s ease-in-out infinite alternate;

}
.float-left {
  top: 0;
  left: 0;
  width: 360px;
}
.float-right {
  top: 0;
  right: 0;
  width: 650px;
}
@keyframes float {
  0% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(30px);
  }
  100% {
    transform: translateY(0);
  }
}


@media (max-width: 1640px) {
  .why-choose-us {
    padding-top: 100px;
  }
  .container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .cards-grid {
    max-width: 1440px;
  }
}
@media (max-width: 1480px) {
  .why-choose-us {
    padding: 0;
    max-height: 1311px;
    height: 1311px;
  }
  .cards-grid {
    max-width: 1286px;
    grid-template-columns: repeat(2, 1fr);
    max-height: 1180px;
    height: 1180px;
    grid-row-gap: 20px;
  }
  .card {
    max-width: 633px;
    height: 380px;
  }
  .content-title-subtitle {
    justify-content: flex-start;
    gap: 10px;
  }
  .float-left {
    width: 600px;
  }
  .float-right {
    width: 660px;
  }
  .swiper-slide {
    display: none;
  }
}
@media (max-width: 1326px) {
  .container {
    max-height: 1351px;
  }
  .section-title {
    font-size: 52px;
    line-height: 67.6px;
  }
  .cards-grid {
    max-width: 976px;
  }
  .card {
    max-width: 478px;
    justify-content: space-around;

  }

}
@media (max-width: 1016px) {
  .card:hover {
    transform: translateY(0);
  }
  .why-choose-us {
    height: auto;
    overflow:visible;
  }
  .cards-grid {
    display: none;
  }
  .cards-carousel {
    display: block;
    position: relative;
    overflow: hidden;
  }
  .cards-carousel::before,
  .cards-carousel::after {
    content: "";
    position: absolute;
    top: 0;
    width: 60px;        /* ширину подберите под дизайн */
    height: 100%;
    pointer-events: none; /* чтобы не мешали кликам */
    z-index: 1;           /* чтобы градиент был поверх слайдов */
  }
  .cards-carousel::before {
    left: 0;
    background: linear-gradient(to right, rgba(7, 5, 20, 1), rgba(7, 5, 20, 0));
  }
  .cards-carousel::after {
    right: 0;
    background: linear-gradient(to left, rgba(7, 5, 20, 1), rgba(7, 5, 20, 0));
  }
  /* 2) Эффект затемнения соседних слайдов */
  .swiper-slide {
    transition: opacity 0.3s, transform 0.3s;

  }
  .swiper {
    backdrop-filter: blur(5px)
  }
  .swiper-slide-prev,
  .swiper-slide-next {
    opacity: 0.5; /* затемняем соседние слайды, подбирайте сами */
    filter: brightness(0.8);
  }
  .swiper-slide-active {
    opacity: 1;
    filter: none;
  }
  .card {
    width: 478px;
    height: 420px;
  }
  .swiper-slide {
    display: flex;
    align-items: center;
    justify-content: center;

  }
  .swiper-button-prev:after {
    background: #FFFFFF;
    color: #FFFFFF;
  }
  .float-left {
    width: 200px;
    top: -150px;
  }
  .float-right {
    width: 176px;
    top: 360px;
  }

}

@media (max-width: 632px) {
  .why-choose-us {
    overflow: hidden;
  }
  .float-right {
    display: none;
  }
  .float-left {
    display: none;
  }
}
@media (max-width: 480px) {
  .card-title {
    font-size: 24px;
    font-weight: 500;
    line-height: 31.2px;
  }

}
@media (max-width: 768px) {
  .container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .cards-grid {
    display: none;
  }
  .cards-carousel {
    display: block;
  }
  .card {
    width: 478px;
    height: 420px;
  }
  .swiper-slide {
    display: flex;
    align-items: center;
    justify-content: center;

  }


}
@media (max-width: 480px) {
  .floating-element {
    display: none;
  }
  .section-title {
    font-size: 36px;
    font-weight: 500;
    line-height: 46.8px;
    text-align: center;
    text-underline-position: from-font;
    text-decoration-skip-ink: none;

  }
  .card {
    width: 328px;
  }
}

@media (max-width: 360px) {
    .section-title {
      font-size: 32px;
      font-weight: 500;
      line-height: 41.6px;
    }
  .card-icon img {
    max-width: 64px;
    border: none;
  }
  .card {
    width: 288px;
    height: 357px;
    max-height: 357px;
    padding: 10px;
  }
  .card-title {
    font-size: 24px;
    font-weight: 500;
    line-height: 31.2px;

  }
  .card-text {
    font-size: 16px;
    font-weight: 400;
    line-height: 22.4px;
    text-align: left;
    text-underline-position: from-font;
    text-decoration-skip-ink: none;

  }
}
</style>
