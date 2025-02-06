<template>
  <section class="features-section" id="features">
    <img
        src="@/assets/image/bg/floating1.png"
        alt=""
        class="floating-element float-top-left"
    />
    <img
        src="@/assets/image/bg/floating2.png"
        alt=""
        class="floating-element float-top-right"
    />
    <img
        src="@/assets/image/bg/floating3.png"
        alt=""
        class="floating-element float-bottom-left"
    />
    <img
        src="@/assets/image/bg/floating4.png"
        alt=""
        class="floating-element float-bottom-right"
    />
    <div class="features-container">
      <h2 class="features-title fade-in">Features</h2>

      <div class="feature-content">
      <div class="feature-screen fade-in">
        <div class="feature-screen-content reverse">
        <div class="feature-left">
          <div class="feature-left-content">
          <h3>
            Generate <span class="highlight"> innovative hypotheses</span>
          </h3>
          <p>
            Pose questions using text prompts to generate new scientific hypotheses, leveraging your own data and scAI’s internal knowledge
          </p>
        </div>
        </div>
          <div class="feature-right">
            <div class="feature-right-content">
            <picture>
              <source srcset="@/assets/image/features/hypotheses-768.png" media="(max-width: 768px)">
              <source srcset="@/assets/image/features/hypotheses-1024.png" media="(max-width: 1024px)">
              <source srcset="@/assets/image/features/hypotheses-1366.png" media="(max-width: 1366px)">
              <img src="@/assets/image/features/hypotheses.png" alt="Innovative Hypotheses">
            </picture>
          </div>
          </div>
      </div>
      </div>
      <div class="feature-screen ">
        <div class="feature-screen-content">
        <div class="feature-left">
          <div class="feature-left-content">
          <h3>
            Automate simulations
            and <span class="highlight">computational modeling</span>
          </h3>
          <p>
            Validate hypotheses through computational modeling and machine learning. scAI automatically interfaces with specialized modeling software, enabling rapid simulation of your hypotheses without requiring expert input
          </p>
        </div>
        </div>
        <div class="feature-right">
          <div class="feature-right-content">
          <picture>
            <source srcset="@/assets/image/features/simulations-768.png" media="(max-width: 768px)">
            <source srcset="@/assets/image/features/simulations-1024.png" media="(max-width: 1024px)">
            <source srcset="@/assets/image/features/simulations-1366.png" media="(max-width: 1366px)">
            <img src="@/assets/image/features/simulations.png" alt="Simulations" />
          </picture>
        </div>
        </div>
      </div>
        </div>
      <div class="feature-screen ">
        <div class="feature-screen-content reverse">
        <div class="feature-left">
          <div class="feature-left-content">
          <h3>Synthesize</h3>
          <p>
            Quickly connect with labs and infrastructure to implement your findings in the real world
          </p>
        </div>
        </div>
        <div class="feature-right">
          <div class="feature-right-content">
          <picture>
            <source srcset="@/assets/image/features/synthesis-768.png" media="(max-width: 768px)">
            <source srcset="@/assets/image/features/synthesis-1024.png" media="(max-width: 1024px)">
            <source srcset="@/assets/image/features/synthesis-1366.png" media="(max-width: 1366px)">
            <img src="@/assets/image/features/synthesis.png" alt="Synthesis" />
          </picture>
          </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </section>
</template>

<style scoped>
/* --- Анимация появления --- */

.fade-in {
  opacity: 0;
  transform: translateY(50px) scale(0.9);
  transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}

.fade-in-visible {
  opacity: 1;
  transform: translateY(0) scale(1);
}

</style>

<script>
import { onMounted } from 'vue';

onMounted(() => {
  const elements = document.querySelectorAll('.fade-in');

  const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry, index) => {
          if (entry.isIntersecting) {
            // Добавляем класс с анимацией и задержкой
            setTimeout(() => {
              entry.target.classList.add('fade-in-visible');
            }, index * 200); // Задержка 200ms между блоками
          }
        });
      },
      { threshold: 0.1 } // Элемент считается видимым, если 10% попало в область просмотра
  );

  elements.forEach((el) => observer.observe(el));
});
</script>


<style scoped>
.floating-element {
  position: absolute;
  z-index: 1;
  opacity: 0.7;
  pointer-events: none;
}
.floating-element {
  width: 410px;
  height: auto;
}
.float-top-left {
  top: 0;
  left: 0;
  animation: float1 7s ease-in-out infinite alternate;
}
.float-top-right {
  top: 280px;
  right: 0;
  animation: float2 9s ease-in-out infinite alternate;
}
.float-bottom-left {
  bottom: 260px;
  left: 0;
  animation: float3 6s ease-in-out infinite alternate;
}
.float-bottom-right {
  bottom: 0;
  right: 0;
  animation: float4 8s ease-in-out infinite alternate;
}
@keyframes float1 {

  0% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(85px);
  }
  100% {
    transform: translateY(0);
}
}
@keyframes float2 {
  0% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(95px);
  }
  100% {
    transform: translateY(0);
  }
}
@keyframes float3 {
  0% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(45px);
  }
  100% {
    transform: translateY(0);
  }
}
@keyframes float4 {
  0% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(55px);
  }
  100% {
    transform: translateY(0);
  }
}
.features-section {
  position: relative;
  width: 100%;
  min-height: 100vh;
  background: #070514;
  overflow: hidden;
  margin-bottom: 200px;
}


.features-container {
  position: relative;
  z-index: 2;
  max-width: 1920px;
  margin: 0 auto;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
.features-title {
  color: #fff;
  font-size: 64px;
  font-weight: 500;
  line-height: 83.2px;
  text-align: center;
  margin: 48px;
}

.feature-content {
  width: 100%;
  max-height: 1906px;
  max-width: 1600px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 20px;
}

.feature-screen {
  width: 100%;
  position: relative;
  max-width: 1600px;
  max-height: 622px;
  display: flex;
  align-items: center;
  justify-content: space-evenly;
  background-color: #04051A;
  border-radius: 50px;
  z-index: 9999;
}
.feature-screen-content,.feature-screen-content.reverse {
  max-width: 1500px;
  max-height: 502px;
  width: 100%;
}
.feature-screen-content.reverse {
  flex-direction: row-reverse;
  justify-content: space-evenly;
}
.feature-screen-content {
  width: 100%;
  display: flex;
  max-height: 622px;
  justify-content: space-evenly;
}
picture img {
  max-width: 800px;
  max-height: 500px;
}

.feature-left,
.feature-right {
  width: 100%;
  color: #fff;
}
.feature-left {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;

}


.feature-left-content {
  width: 535px;
  height: 232px;
  display: flex;
  align-items: flex-start;
  justify-content: center;
  flex-direction: column;
}
.feature-left h3 {
  font-size: 48px;
  font-weight: 500;
  line-height: 62.4px;
  text-align: left;
}
.feature-left p {
  font-size: 20px;
  font-weight: 400;
  line-height: 28px;
  text-align: left;
}


.feature-right {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.feature-right-content {
  max-width: 800px;
  height: 502px;
}
picture {
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
}
.feature-right img {
  max-width: 100%;
  height: auto;
  border-radius: 8px;
}


.highlight {
  color: #00aaff;
}

@media(max-width: 1640px) {
  .feature-content {
    max-width: 1440px;
  }
  .feature-right-content {
    max-width: 700px;
  }
  picture img {
    max-height: 400px;
  }
}
@media (max-width: 1480px) {
  .feature-screen-content, .feature-screen-content.reverse {
    max-width: 1440px;
    max-height: 546px;
  }
  .feature-left-content {
    width: 400px;
    height: 294px;
  }
  .feature-content {
    max-width: 1286px;
  }
  picture img {
    max-height: 426px;
  }
  .feature-right img {
    height: 351px;
  }
  .feature-screen:last-of-type .feature-left-content, .feature-screen:first-of-type .feature-left-content {
    gap: 20px;
  }
}
@media (max-width: 1326px) {

  .features-title {
    font-size: 52px;
    line-height: 67.6px;
  }
  .feature-content {
    max-width: 976px;
  }
  .feature-screen {
    max-height: 410px;
    max-width: 976px;
  }
  .feature-left-content {
    h3 {
      font-size: 36px;
      line-height: 46.8px;
    }
    p {
      font-size: 16px;
      line-height: 22.4px;
    }
  }
  .feature-right-content {
    max-width: 500px;
    height: 440px;
  }
  .feature-right img {
    height: 267px;
  }
}

@media (max-width: 1016px) {
  .features-title {
    font-size: 48px;
    font-weight: 500;
    line-height: 62.4px;
  }
  .feature-content {
    max-width: 720px;

  }
  .feature-screen {
    max-height: 632px;
    height: 632px;
  }
  .feature-screen-content, .feature-screen-content.reverse {
    flex-direction: column;
    max-height: 573px;
    height: 573px;
    align-items: center;
  }
  .feature-left {
    max-width: 720px;
    height: 115px;
  }
  .feature-left-content {
    max-width: 624px;
    width: 100%;
    height: 184px;
    max-height: 184px;
    align-items: center;
    justify-content: center;
    gap: 20px;
    h3 {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }
    p {
      text-align: center;
    }
  }
  .feature-right-content {
    max-width: 500px;
    height: 284px;
  }
  .feature-right img {
    height: 304px;
  }
  .feature-screen:first-of-type .feature-left-content h3 {
    gap: 10px;
    flex-direction: row;
  }
}

@media (max-width: 752px) {
  .feature-content {
    max-width: 600px;
  }
  .feature-left-content {
    max-width: 504px;
  }
  .feature-screen:first-of-type .feature-left-content h3 {
    gap: 10px;
    display: inline-block;
    text-align: center;
  }
  .feature-screen-content, .feature-screen-content.reverse {
    gap: 45px;
  }
}
@media (max-width: 632px) {
  .features-title {
    font-size: 36px;
    font-weight: 500;
    line-height: 46.8px;
  }

  .feature-content {
    max-width: 448px;
  }
  .feature-left {
    max-width: 400px;
  }
  .feature-left-content h3 {
    font-size: 32px;
    font-weight: 500;
    line-height: 41.6px;

  }
  .feature-right img {
    height: 240px;
  }



}
@media (max-width: 480px) {
  .features-title {
    font-size: 32px;
    font-weight: 500;
    line-height: 41.6px;
  }
  .feature-content {
    max-width: 328px;
  }
  .feature-left-content {
    max-width: 296px;

  }
  .feature-left-content h3 {
    font-size: 24px;
    font-weight: 500;
    line-height: 31.2px;
  }
  .feature-right img {
    height: 178px;
  }
  .feature-screen:last-child{
    height: 400px;
    border-radius: 30px;
  }
  .feature-screen:nth-child(2) {
    height: 470px;
    border-radius: 30px;
  }
  .feature-screen:first-child {
    height: 440px;
    border-radius: 30px;
  }
  .feature-screen-content, .feature-screen-content.reverse {
    height: 322px;
    gap: 10px;
  }
  .float-top-left {
    top: -165px;
    width: 325px;
  }
  .float-top-right {
    top: 50px;
    width: 289px;
  }
  .float-bottom-left {
    bottom: 300px;
    width: 220px;
  }
  .float-bottom-right{
    width: 200px;
  }


}

@media (max-width: 360px) {

  .feature-content {
    max-width: 288px;
  }
  .feature-left-content {
    max-width: 256px;

  }
  .feature-left-content h3 {
    font-size: 24px;
    font-weight: 500;
    line-height: 31.2px;
  }
  .feature-right img {
    height: 150px;
  }
  .feature-screen:last-child{
    height: 400px;
  }
  .feature-left {
    height: 125px;
  }
  .feature-screen:nth-child(2) {
    height: 600px;
    display: flex;
    .feature-left {
      height: 202px;
    }
  }
  .feature-screen:first-child {
    height: 400px;
  }
  .feature-screen-content, .feature-screen-content.reverse {
    height: 322px;
    gap: 3px;
  }
  .float-top-left {
    top: -155px;
  }
  @keyframes float1 {
    50% {
      transform: translateY(25px);
    }
  }
  .float-top-right {
    top: 50px;
    width: 289px;
  }
  .float-bottom-left {
    bottom: 300px;
    width: 220px;
  }
  .float-bottom-right{
    width: 200px;
  }

}
@media (max-width: 320px) {
  .feature-screen {
    max-height: 475px;
    border-radius: 5px;
  }
  .feature-left h3 {
    font-size: 24px;
    font-weight: 500;
    line-height: 31.2px;
    text-align: center;
    text-underline-position: from-font;
    text-decoration-skip-ink: none;


  }
  .feature-right img {
    height: 130px;
  }
  .feature-left p {
    font-size: 16px;
    font-weight: 400;
    line-height: 22.4px;
    text-align: center;
    text-underline-position: from-font;
    text-decoration-skip-ink: none;


  }
}
</style>
