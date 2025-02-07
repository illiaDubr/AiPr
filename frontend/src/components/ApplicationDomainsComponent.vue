<template>
  <section class="application-domains" id="application-domains">
    <!-- Единственный плавающий элемент (фон) -->
    <img
        src="@/assets/image/bg/floating-domain.png"
        alt=""
        class="floating-element"
    />

    <!-- Основной контейнер -->
    <div class="container">
      <h2 class="section-title">
        Application <span class="highlight">Domains</span>
      </h2>
      <ApplicationDimainsConten/>

    </div>
  </section>
</template>

<script setup>
import { onMounted } from 'vue';
import ApplicationDimainsConten from "@/components/ApplicationDimainsConten.vue";



onMounted(() => {
  const titles = document.querySelectorAll('.section-title');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        // Добавляем класс .animate для запуска анимации
        entry.target.classList.add('animate');
        // Можно больше не отслеживать этот заголовок, если одноразовая анимация
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.15, // Заголовок должен быть виден на 15% для срабатывания
  });

  // Начинаем наблюдать за каждым заголовком
  titles.forEach((title) => observer.observe(title));
});
</script>

<style scoped>
.section-title {
  opacity: 0;                  /* Изначально прозрачный */
  transform: translateY(20px); /* Изначальный сдвиг */
  transition: opacity 0.6s ease, transform 0.6s ease;
}

.section-title.animate {
  opacity: 1;
  transform: translateY(0);     /* Сдвиг в 0 */
}
.application-domains {
  position: relative;
  width: 100%;
  background: #070514;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
.container {
  position: relative;
  z-index: 2;
  width: 100%;
  margin: 0 auto;
  color: #fff;

}
.container-content {
  background: #04051A;
  width: 100%;
  padding: 0 20px;
  display: flex;
  align-items: center;
  justify-content: center;

}
.content-grid-only {
  max-width: 1600px;
  width: 100%;
}
.section-title {
  margin-top: 100px;
  font-size: 64px;
  font-weight: 500;
  line-height: 83.2px;
  text-align: center;
  padding-bottom: 48px;
}
.highlight {
  color: #00aaff;
}
.domino-content {
  width: 100%;
  height: 296px;
  display: flex;


}
.domains-grid {
  width: 100%;
  align-content: center;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  row-gap: 2rem;
  column-gap: 2rem;
  justify-content: center;
  justify-items: center;
  border-radius: 30px;
  grid-template-areas:
      "item1 item2 item3 item4 "
      " . item5 item6 . ";

}

.domain-item {
  max-width: 334px;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  gap: 20px;
}

.domain-item h3 {
  font-size: 36px;
  font-weight: 500;
  line-height: 46.8px;
  text-align: left;
  text-underline-position: from-font;
  text-decoration-skip-ink: none;

}

.domain-icon img {
  max-width: 48px;
}
/* Указание областей для сетки */
.domains-grid > :nth-child(1) {
  grid-area: item1;
}
.domains-grid > :nth-child(2) {
  grid-area: item2;
}
.domains-grid > :nth-child(3) {
  grid-area: item3;
}
.domains-grid > :nth-child(4) {
  grid-area: item4;
}
.domains-grid > :nth-child(5) {
  grid-area: item5;
}
.domains-grid > :nth-child(6) {
  grid-area: item6;
}

.floating-element {
  position: absolute;
  z-index: 1;
  top: -135px;
  left: -160px;
  width: 800px;
  opacity: 0.7;
  pointer-events: none;

  animation: floatDomain 2.5s ease-in-out infinite alternate;
}

@keyframes floatDomain {
  0% {
    transform: translate(0, 0);
  }
  50% {
    transform: translate(30px, 20px);
  }
  100% {
    transform: translate(0, 0);
  }
}

@media(max-width: 1640px) {
  .container-content {
    width: 100%;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .content-grid-only {
    max-width: 1440px;
    display: block;
  }
  .domains-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr); /* 4 столбца */
    grid-gap: 2rem;
    align-content: space-evenly;
    justify-content: center;
    align-items: center;
    grid-template-areas:
      "item1 item2 item3 item4"
      ". item5 item6 ."; /* Пустые места по краям */
  }
  .domain-item {
    width: 330px;
  }
  /* Указание областей для сетки */
  .domains-grid > :nth-child(1) {
    grid-area: item1;
  }
  .domains-grid > :nth-child(2) {
    grid-area: item2;
  }
  .domains-grid > :nth-child(3) {
    grid-area: item3;
  }
  .domains-grid > :nth-child(4) {
    grid-area: item4;
  }
  .domains-grid > :nth-child(5) {
    grid-area: item5;
  }
  .domains-grid > :nth-child(6) {
    grid-area: item6;
  }
}
@media (max-width: 1480px) {
  .domains-grid {
    width: 100%;
    align-content: center;
    display: grid;
    row-gap: 2rem;
    column-gap: 2rem;
    justify-items: center;
    border-radius: 30px;
    /* Задание количества колонок для каждой строки */
    grid-template-rows: auto; /* Автоматическая высота строк */
    grid-template-columns: 1fr 1fr 1fr; /* Три колонки для первой строки */
  }

  .domains-grid > :nth-child(1),
  .domains-grid > :nth-child(2),
  .domains-grid > :nth-child(3) {
    grid-column: span 1; /* Три элемента занимают по одной колонке */
  }

  .domains-grid > :nth-child(4),
  .domains-grid > :nth-child(5) {
    grid-column: span 2; /* Два элемента во второй строке */
  }

  .domains-grid > :nth-child(6) {
    grid-column: 2 / 3; /* Один элемент по центру в третьей строке */
  }
}
@media (max-width: 1326px) {
  .section-title {
    font-size: 52px;
    line-height: 67.6px;
  }
  .domains-grid {
    width: 100%;
    align-content: center;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    row-gap: 3rem;
    column-gap: 2rem;
    justify-items: center;
    border-radius: 30px;
    grid-template-areas:
      "item1 item2 item3"
      "item4 item5"
      "item6";
  }
}
@media (max-width: 1016px) {
  .content-grid-only {
    max-width: 400px;
  }
  .container-content {
    height: 648px;
  }
  .domains-grid {
    width: 100%;
    align-content: center;
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    row-gap: 3rem;
    column-gap: 2rem;
    justify-items: center;
    border-radius: 30px;
    grid-template-areas:
      "item1"
      "item2"
      "item3"
      "item4"
      "item5"
      "item6";
  }

}
@media (max-width: 632px) {
  .floating-element {
    display: none;
  }
}
@media (max-width: 1024px) {
  .domains-grid {
    grid-template-columns: repeat(2, 1fr);
    row-gap: 30px;
    column-gap: 10px;
  }
  .domain-item h3 {
    font-size: 36px;
    font-weight: 500;
    line-height: 46.8px;
    text-align: left;
    text-underline-position: from-font;
    text-decoration-skip-ink: none;

  }
}
@media (max-width: 768px) {
  .domains-grid {
    grid-template-columns: repeat(1, 1fr);
    row-gap: 30px;
    column-gap: 10px;

  }
  .domino-content {
    height: auto;
  }
  .domain-item h3 {
    font-size: 36px;
    font-weight: 500;
    line-height: 46.8px;
    text-align: left;
    text-underline-position: from-font;
    text-decoration-skip-ink: none;

  }
}
@media (max-width: 480px) {
  .floating-element {
    display: none;
  }
  .domains-grid {
    padding: 20px;
  }
  .section-title {
    font-size: 36px;
    font-weight: 500;
    line-height: 46.8px;
    text-align: center;
    text-underline-position: from-font;
    text-decoration-skip-ink: none;

  }

  .domain-item h3 {
    font-size: 24px;
    font-weight: 500;
    line-height: 31.2px;
    text-align: left;
    text-underline-position: from-font;
    text-decoration-skip-ink: none;

  }
}
</style>
