<template>
  <section class="icons-section">
    <div class="icon-content">
    <div class="icons-container">
      <div class="icon-item">
        <img src="@/assets/image/icons/biology-icon.svg" alt="Biology" />
        <h3>Biology</h3>
      </div>
      <div class="icon-item">
        <img src="@/assets/image/icons/physics-icon.svg" alt="Physics" />
        <h3>Physics</h3>
      </div>
      <div class="icon-item">
        <img src="@/assets/image/icons/medicine-icon.svg" alt="Medicine" />
        <h3>Medicine</h3>
      </div>
      <div class="icon-item">
        <img src="@/assets/image/icons/materials-icon.svg" alt="Material Science" />
        <h3>Material Science</h3>
      </div>
      <div class="icon-item">
        <img src="@/assets/image/icons/chemistry-icon.svg" alt="Chemistry" />
        <h3>Chemistry</h3>
      </div>
      <div class="icon-item">
        <img src="@/assets/image/icons/engineering-icon.svg" alt="Engineering" />
        <h3>Engineering</h3>
      </div>
    </div>
    </div>
  </section>
</template>

<style>
/* Контейнер ограничен 1920px и центрирован */
.icons-section {
  max-width: 1920px;
  max-height: 296px;
  margin: 0 auto;
  padding: 20px;
  background: #04051A;
  display: flex;
  align-items: center;
  justify-content: center;
}
.icons-container {
  grid-template-columns: repeat(7, 1fr);
  column-gap: 2rem;
}
.icon-content {
  max-width: 1600px;
  width: 100%;
  padding: 30px;

}

.icon-item {
  gap: 20px;
}
.icon-item h3 {
  font-family: Inter Tight;
  font-size: 36px;
  font-weight: 500;
  line-height: 46.8px;
  text-align: left;
  text-underline-position: from-font;
  text-decoration-skip-ink: none;

}
.icon-item {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
}

/* Общие стили для сетки и элементов */
.icons-container {
  display: grid;
  gap: 20px;
  text-align: center;
}
.icons-container {
  grid-template-columns: repeat(4, 1fr);
  column-gap: 2rem;
  row-gap: 2rem;
  grid-template-areas:
      "item1 item2 item3 item4"
      ". item5 item6 .";
}
.icon-item:nth-child(1) { grid-area: item1; }
.icon-item:nth-child(2) { grid-area: item2; }
.icon-item:nth-child(3) { grid-area: item3; }
.icon-item:nth-child(4) { grid-area: item4; }
.icon-item:nth-child(5) { grid-area: item5; }
.icon-item:nth-child(6) { grid-area: item6; }


@media (max-width: 1640px) {
  .icon-content {
    max-width: 1440px;
  }
  .icon-item {
    max-width: 334px;
    h3 {
      font-size: 34px;
      font-weight: 500;
      line-height: 46.8px;
      text-align: left;
      max-width: 262px;

    }
  }
}

@media (max-width: 1480px) {
  .icon-content {
    max-width: 1286px;
  }
  .icon-item {
    max-width: 334px;
    h3 {
      font-size: 29px;
      font-weight: 500;
      line-height: 46.8px;
      text-align: left;
      max-width: 262px;

    }
  }
}
/* Медиазапрос для max-width: 1326px – перевёрнутая пирамида с использованием flex */
@media (max-width: 1326px) {
  .icon-content {
    max-width: 848px;
  }
  .icons-container {
    /* Переключаемся на flex-верстку */
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    gap: 64px;  /* Отступы между элементами */
  }
  /* Убираем grid-специфичные свойства */
  .icons-container > * {
    grid-area: unset;
  }

  /* Если необходимо – фиксируем ширину элементов */
  .icon-item {
    max-width: 334px;
  }

  .icon-item:nth-child(3)::after,
  .icon-item:nth-child(5)::after {
    content: "";
    flex-basis: 100%;
  }

  /* Запрет переноса слов для item4 (Material Science) */
  .icon-item:nth-child(4) h3 {
    white-space: nowrap;
  }
}

@media (max-width: 1016px) {
  .icons-section {
    max-height: 648px;
  }
  .icons-container {
    flex-direction: column;
    gap: 48px;
  }
}
@media (max-width: 752px) {
  .icon-content {
    max-width: 640px;
  }
}
@media (max-width: 632px) {
  .icon-item h3 {
    font-size: 24px;
    font-weight: 500;
    line-height: 31.2px;
    text-align: left;

  }
}
@media (max-width: 360px) {
  .icon-item img {
    max-width: 32px;
  }

}



/* --- Верстка для 1366px и выше ---
     Расположение по макету:
       Row 1: 4 элемента (item1, item2, item3, item4)
       Row 2: 2 элемента (item5, item6), центрированные через пустые области */

</style>
<script setup lang="ts">
</script>