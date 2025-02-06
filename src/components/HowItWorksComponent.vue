<template>
  <section class="how-it-works" id="how-it-works">
    <div class="container">
      <h2 class="section-title">
        How <span class="highlight">it Works</span>
      </h2>

      <div class="cards-grid">
        <!-- Карточка 1 -->
        <div class="card">

            <div class="card-top">
              <img
                  src="@/assets/image/icons/database-icon.svg"
                  alt="Database"
                  class="svg-image"
              />
            </div>
            <!-- Нижний блок (текст) -->
              <div class="card-bottom">
                <h3 class="card-title">Link your database</h3>
                <p class="card-text">
                  Upload the database that constitutes the background of your research and experiments to Sc.AI’s internal knowledge
              </p>
            </div>
        </div>

        <!-- Карточка #2 -->
        <div class="card">

          <div class="card-top">
            <img src="@/assets/image/icons/question-icon.svg" alt="Ask questions" class="svg-image" />
          </div>
          <div class="card-bottom">
            <h3 class="card-title">Ask questions</h3>
          <p class="card-text">
            Ask an unlimited amount of questions on your research and let our system suggest the best solutions to your problem
          </p>
        </div>
      </div>

        <!-- Карточка #3 -->
        <div class="card">

          <div class="card-top">
            <img src="@/assets/image/icons/link-icon.svg" alt="Link" class="svg-image" />
          </div>
          <div class="card-bottom">
            <h3 class="card-title">Link to simulation software</h3>
          <p class="card-text">
            Choose the best simulation software to validate your hypotheses. You can upload your own models or let scAI recommend a third-party model that fits your problem
          </p>
        </div>
      </div>

        <!-- Карточка #4 -->
        <div class="card">

          <div class="card-top">
            <img src="@/assets/image/icons/simulate-icon.svg" alt="Simulate" class="svg-image" />
          </div>
          <div class="card-bottom">
            <h3 class="card-title">Simulate your problem</h3>
          <p class="card-text">
            Test your hypotheses by running computational models. scAI automatically adds machine learning capabilities, generates interfaces, and sets up simulation workflows
          </p>
        </div>
      </div>
        <!-- Карточка #5 -->
        <div class="card">
          <div class="card-top">
            <img src="@/assets/image/icons/reiterate-icon.svg" alt="Reiterate" class="svg-image" />
          </div>
          <div class="card-bottom">
            <h3 class="card-title">Reiterate</h3>
          <p class="card-text">
            Quickly enhance your results with a closed feedback loop between input data, hypothesis generation, and simulation output — all automated through text prompts</p>
        </div>
      </div>

        <!-- Карточка #6 -->
        <div class="card">

          <div class="card-top">
            <img src="@/assets/image/icons/synthesize-icon.svg" alt="Synthesize" class="svg-image" />
          </div>
          <div class="card-bottom">
            <h3 class="card-title">Synthesize</h3>
          <p class="card-text">
            Quickly connect with labs and infrastructure to implement your findings in the real world</p>
        </div>
      </div>
    </div>
  </div>
  </section>
</template>

<script setup>
import { onMounted } from 'vue';

onMounted(() => {
  const cards = document.querySelectorAll('.card');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        // Получаем индекс карточки (в порядке их в DOM)
        const index = [...cards].indexOf(entry.target);

        // Ставим задержку, например 0.15s * index
        const delay = index * 0.15;

        // Добавляем inline-стиль для задержки анимации
        entry.target.style.animationDelay = `${delay}s`;

        // Добавляем класс, который запускает анимацию
        entry.target.classList.add('futuristic-animate');

        // Наблюдение больше не нужно
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.15, // Процент появления карточки на экране
  });

  cards.forEach((card) => observer.observe(card));

  // 3) Анимация заголовков .section-title
  //    Если заголовков несколько, возьмите querySelectorAll
  const titles = document.querySelectorAll(".section-title");
  const observerTitle = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        // Добавляем класс .animate — включаем CSS-переход
        entry.target.classList.add("animate");
        // Можно разорвать наблюдение, чтобы не срабатывало повторно
        observerTitle.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });

  titles.forEach((title) => observerTitle.observe(title));
});
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
/* Исходное состояние для карточек */
.card {
  opacity: 0;
  transform: perspective(800px) rotateX(15deg) translateY(50px) scale(0.8);
  /* Чтобы свечение/обводка не обрезалось */
  overflow: visible;
}

/* Класс, который будет запускать анимацию */
.card.futuristic-animate {
  animation: futuristicEntry 1s cubic-bezier(0.25, 0.8, 0.25, 1) forwards;
  /* можно менять timing-function, скорость и т.д. */
}
/* Ключевые кадры анимации */
@keyframes futuristicEntry {
  0% {
    opacity: 0;
    transform: perspective(800px) rotateX(15deg) translateY(50px) scale(0.8);
  }
  60% {
    opacity: 0.8;
    transform: perspective(800px) rotateX(5deg) translateY(10px) scale(1.05);
  }
  100% {
    opacity: 1;
    transform: perspective(800px) rotateX(0deg) translateY(0) scale(1);
    filter: none;
  }
}
/* Дополнительный неоновый отблеск на бордюре, когда уже анимация закончилась */
.card.futuristic-animate::after {
  content: "";
  position: absolute;
  top: -2px; left: -2px; right: -2px; bottom: -2px;
  border-radius: 30px; /* у вас есть радиус, подгоните */
  pointer-events: none;
  z-index: 2;
  /* чтобы псевдоэлемент не обрезался, на родителе (card) отключили overflow */
  opacity: 0;
  animation: neonGlow 1.2s ease 1s forwards;
  /* 1s delay, чтобы появилось после основного движения */
}
@keyframes neonGlow {
  0%   { opacity: 0; }
  50%  { opacity: 1;  }
  100% { opacity: 0.6; }
}
.how-it-works {
  width: 100%;
  background: #070514;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #fff;
}
.container {
  max-width: 1600px;
  max-height: 1109px;
  margin: 0 auto;
  color: #fff;
  width: 100%;
}

.section-title {
  font-size: 64px;
  font-weight: 500;
  line-height: 83.2px;
  text-align: center;
  width: 100%;
}
.highlight {
  color: #00aaff;
}

.cards-grid {
  width: 100%;
  max-height: 978px;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-template-rows: repeat(2, auto);
  gap: 20px;
  margin-top: 48px;
}
.card {
  max-width: 520px;
  min-height: 479px;
  width: 100%;
  height: 100%;
  border: 1px solid #232323;
  background: #04051A;
  border-radius: 30px;
  transition: transform 0.3s ease;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
  gap: 15px;
  padding: 30px;
}
.card:hover {
  transform: translateY(-3px);
}

.card-top {
  background: #070514;
  max-width: 448px;
  max-height: 250px;
  height: 100%;
  width: 100%;
  margin: 0 auto;
  border-radius: 30px ;
  display: flex;
  border: 1px solid #232323;
  align-items: center;
  overflow: hidden;
  justify-content: center;
  transition: box-shadow 0.3s ease, border-color 0.3s ease;
  position: relative;
}
.card-bottom {
  max-width: 448px;
  max-height: 99px;
  width: 100%;
  height: 100%;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: 8px;
  text-align: left;

}

.card-title {
  font-size: 36px;
  font-weight: 500;
  line-height: 46.8px;
  text-align: left;

}
.card-text {
  font-size: 16px;
  font-weight: 400;
  line-height: 22.4px;
  text-align: left;
  color: #B4B4B4;
;

}
.card-top:hover {
  box-shadow: 0 0 35px 15px rgba(136,0,255,0.4);
}

.card-top::before,
.card-top::after {
  content: "";
  position: absolute;
  pointer-events: none;
  transition: transform 0.8s ease, opacity 0.8s ease;
  opacity: 0;
  z-index: 1;
}
.card-top::before {
  width: 484px;
  height: 484px;
  bottom: -15px;
  left: 130px;
  transform: translate(50%, -50%) scale(0);
  background: url("@/assets/image/floating-right.png") no-repeat center/contain;
}
.card-top::after {
  width: 344px;
  height: 344px;
  top: 50px;
  left: -140px;
  transform: translate(-50%, 50%) scale(0);
  background: url("@/assets/image/floating-left.png") no-repeat center/contain;
}
.card-top:hover::before {
  transform: translate(0, 0) scale(1);
  opacity: 1;
}
.card-top:hover::after {
  transform: translate(0, 0) scale(1);
  opacity: 1;
}



@media(max-width: 1640px) {
  .container {
    max-width: 1440px;
  }
  .card {
    max-width: 466px;
    height: 526px;
  }
  .card-top {
  max-width: 394px;
  max-height: 250px;
  }
  .card-bottom {
    max-width: 394px;
    max-height: 121px;
  }
  .card-top::before {
    left: 110px;
    bottom: -35px;
  }
}
@media (max-width: 1480px) {
  .how-it-works {
    padding: 0;
    height: 1610px;
    align-items: flex-start;
  }
  .container {
    max-width: 1286px;
  }
  .cards-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .card {
    max-width: 633px;
    height: 479px;
    .card-top {
      max-width: 561px;
    }
    .card-bottom {
      max-width: 561px;
    }
    .card-top:before {
      left: 265px;
    }
  }
}
@media (max-width: 1326px) {
  .how-it-works {
    height: 1593px;
  }
  .container {
    max-width: 976px;
  }
  .section-title {
    font-size: 52px;
    line-height: 67.6px;
  }
  .card {
    max-width: 478px;
    height: 479px;
    min-height: 512px;
    justify-content: flex-start;
    padding: 30px;
    .card-top {
      max-width: 406px;
    }
    .card-bottom {
      max-width: 406px;
    }
  }

}
@media (max-width: 1016px) {
  .how-it-works {
    height: 1750px;
  }
  .container {
    max-width: 720px;
  }
  .cards-grid {
    max-height: 1554px;
  }
  .card {
    justify-content: flex-start;
    max-width: 350px;
    max-height: 550px;
    height: 600px;
    padding: 30px;
    .card-top {
      max-width: 302px;
      img {
        max-width: 120px;
      }
    }
    .card-bottom {
      max-width: 302px;
    }
  }
}

@media (max-width: 752px) {
  .how-it-works {
    height: 1650px;
  }
  .container {
    max-width: 600px;
  }
  .card {
    max-width: 290px;
    max-height: 565px;

    .card-top {
      max-width: 242px;
    }
    .card-bottom {
      max-width: 242px;
    }
  }
  .card-title {
    font-size: 32px;
    font-weight: 500;
    line-height: 41.6px;
  }
  .card:nth-child(1),
  .card:nth-child(2),
  .card:nth-child(5),
  .card:nth-child(6){
    height: 485px;
  }
  /* Остальные карточки */
  .card:nth-child(3),
  .card:nth-child(4){
    height: 585px; /* Высота для остальных карточек */
  }
  .card {
    .card-top:before {
      left: -20px;
    }
  }
}
@media (max-width: 632px) {
  .how-it-works {
    height: 3400px;
  }
  .container {
    max-width: 448px;
  }
  .cards-grid {
    grid-template-columns: repeat(1, 1fr);
  }
  .card:nth-child(1),
  .card:nth-child(2),
  .card:nth-child(3),
  .card:nth-child(4),
  .card:nth-child(5),
  .card:nth-child(6)
  {
    max-width: 448px;
  }
  .card {
    padding: 20px;
    .card-top {
      max-width: 400px;

    }
    .card-top:before {
      left: 100px;
    }
    .card-bottom {
      max-width: 400px;
    }
  }
}
@media (max-width: 480px) {
  .container {
    max-width: 328px;
  }
  .section-title {
    font-size: 32px;
    font-weight: 500;
    line-height: 41.6px;
  }
  .card {

    .card-top {
      max-width: 296px;
    }
    .card-top:before {
      left:  30px;
    }
    .card-bottom {
      width: 296px;
    }
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
  }

}
@media (max-width: 360px) {
  .how-it-works {
    height: 2650px;
  }
  .container {
    max-width: 288px;
  }
  .section-title {
    font-size: 24px;
    font-weight: 500;
    line-height: 31.2px;
  }
  .card {
    max-height: 425px;
    min-height: 425px;
    padding: 10px;
    padding-top: 20px;
    .card-top {
      max-width: 256px;
      height: 200px;
      img {
        width: 120px;
      }
    }
    .card-top:before {
      left:  0;
    }
    .card-bottom {
      width: 256px;
    }
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
  }
}
@media (max-width: 320px) {
  .card-top {
    width: 200px;
  }
  .card-bottom {
    width: 200px;
  }
}
</style>
