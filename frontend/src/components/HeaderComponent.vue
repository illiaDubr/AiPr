<template>
  <header class="header">
    <nav class="nav-container">
      <div class="logo">
        <a href="#hero-section">
          <div class="logo-hero-content">
              <span style="color: #00BBFF;">[</span> Sc.AI <span style="color: #00BBFF;">]</span>
          </div>
        </a>
      </div>


      <ul class="nav-links">
        <li v-for="(link, idx) in navLinks" :key="idx" class="nav-item">
          <a :href="link.anchor">{{ link.label }}</a>
        </li>
      </ul>

      <div class="container-button-burger">
        <a href="#contact" class="consortium-btn desktop-btn">
        Join
        <span aria-hidden="true" class="arrow"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M5.93167 11.9996L18.2773 11.9996" stroke="#0F1117" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M12.292 4.68482L18.4648 12.0922L12.292 19.4996" stroke="#0F1117" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        </span>
      </a>
      <div class="burger-menu" @click="toggleMenu">
        <span :class="{ active: isMenuOpen }"></span>
        <span :class="{ active: isMenuOpen }"></span>
        <span :class="{ active: isMenuOpen }"></span>
      </div>
      </div>

      <ul class="mobile-nav" :class="{ open: isMenuOpen }">
        <button class="close-btn" @click="closeMenu" aria-label="Close Menu">&times;</button>
        <div class="button-menu">
        <li v-for="(link, idx) in navLinks" :key="idx" class="mobile-nav-item">
          <a :href="link.anchor" @click="closeMenu">{{ link.label }}</a>
        </li>
          <!-- Кнопка будет видна только на экранах меньше 480px -->
          <a href="#contact" class="consortium-btn mobile-btn">
            Join
            <span aria-hidden="true" class="arrow">
              <span aria-hidden="true" class="arrow"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M5.93167 11.9996L18.2773 11.9996" stroke="#0F1117" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M12.292 4.68482L18.4648 12.0922L12.292 19.4996" stroke="#0F1117" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        </span>
            </span>
          </a>

        </div>

      </ul>
    </nav>

  </header>
</template>

<script setup>
import { ref } from "vue";


const navLinks = ref([
  { label: "How It Works", anchor: "#how-it-works" },
  { label: "Features", anchor: "#features" },
  { label: "Why Choose Us", anchor: "#why-choose-us" },
  { label: "Contact", anchor: "#contact" },
]);

const isMenuOpen = ref(false);

const toggleMenu = () => {
  isMenuOpen.value = !isMenuOpen.value;
};

const closeMenu = () => {
  isMenuOpen.value = false;
};
</script>

<style scoped>
.header {
  position: fixed;
  top: 25px;
  left: 0;
  width: 100%;
  z-index: 999;
}

.nav-container {
  max-width: 1600px;
  border-radius: 50px;
  background: rgba(0, 0, 0, 0.4);
  backdrop-filter: blur(5px);
  margin: 0 auto;
  border: 1px solid #FFFFFF;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1rem 2rem;
}

.logo a {
  font-size: 1.25rem;
  font-weight: 600;
  color: #fff;
  text-decoration: none;
}
.logo-hero-content {
  font-size: 28px;
  font-weight: 400;
  line-height: 28px;
  text-align: left;
  transition: background-color 0.3s ease, color 0.3s ease;

}
.logo-hero-content:hover {
  color: #00BBFF;
}

.nav-links {
  display: flex;
  align-items: center;
  list-style: none;
  margin: 0;
  padding: 0;
}

.nav-item {
  margin: 0 1.5rem;
}

.nav-links a {
  color: #ddd;
  text-decoration: none;
  font-weight: 500;
  transition: color 0.2s ease;
}
.nav-links a:hover {
  color: #00BBFF;
}

.consortium-btn {
  background-color: #fff;
  color: #000;
  padding: 0.75rem 1.5rem;
  border-radius: 999px;
  border: none;
  cursor: pointer;
  font-weight: 500;
  font-size: 1rem;
  display: flex;
  align-items: center;
  gap: 0.5rem;
  transition: background-color 0.3s ease, color 0.3s ease;
  text-decoration: none;
}
.consortium-btn .arrow {
  font-size: 1.2em;
  transform: translateX(0);
  transition: transform 0.3s ease;
}
.consortium-btn:hover {
  background-color: #00BBFF;
  color: #fff;
}
.consortium-btn:hover .arrow {
  transform: translateX(8px);
}

.arrow {
  font-size: 24px;
  transform: translateY(1px);
}
.container-button-burger a:hover .arrow svg path {
  stroke: #FFFFFF; /* Меняем цвет обводки стрелки на белый */
  transition: stroke 0.3s ease; /* Добавляем плавность перехода */
}

.consortium-btn span {
  display: flex;
  align-items: center;
  justify-content: center;
}

.burger-menu {
  display: none;
  flex-direction: column;
  gap: 0.3rem;
  cursor: pointer;
}
/* Стили для мобильного меню */
.mobile-nav {
  display: none;
  position: fixed;
  top: 0;
  right: 0;
  width: 320px;
  height: 264px;
  background: #070514;
  backdrop-filter: blur(15px);
  -webkit-backdrop-filter: blur(15px);
  border: 1px solid #cccccc;
  border-radius: 16px;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 1.5rem;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
  list-style: none;
  transition: all 0.3s ease;
  z-index: 1000;
}
/* Кнопка закрытия */
.close-btn {
  background: none;
  border: none;
  font-size: 2rem;
  color: #fff;
  position: absolute;
  top: 1rem;
  right: 1.5rem;
  cursor: pointer;
}


.button-menu {
  display: flex;
  gap: 30px;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100%;
  border-radius: 30px;
  height: auto;
  font-size: 20px;
  font-weight: 400;
  line-height: 28px;
  text-align: center;
  text-underline-position: from-font;
  text-decoration-skip-ink: none;
  backdrop-filter: blur(100px); /* Размытие заднего фона */
  -webkit-backdrop-filter: blur(100px); /* Поддержка для Safari */

}

.mobile-nav.open {
  display: flex;
  flex-direction: row-reverse;
  align-items: center;
}

.mobile-nav-item a {
  color: #fff;
  text-decoration: none;
  transition: color 0.2s ease;
  font-size: 20px;
  font-weight: 400;
  line-height: 28px;
  text-align: center;
  text-underline-position: from-font;
  text-decoration-skip-ink: none;

}

.burger-menu span {
  display: block;
  width: 24px;
  height: 3px;
  background: #fff;
  transition: all 0.3s ease-in-out;
}

.burger-menu span.active:nth-child(1) {
  transform: rotate(45deg) translate(5px, 5px);
}

.burger-menu span.active:nth-child(2) {
  opacity: 0;
}

.burger-menu span.active:nth-child(3) {
  transform: rotate(-45deg) translate(5px, -5px);
}

/* Скрытие и показ кнопок */
.desktop-btn {
  display: flex; /* По умолчанию отображается на десктопах */
}

.mobile-btn {
  display: none; /* По умолчанию скрыта на десктопах */
}
/* Стили для мобильного меню */
@media (max-width: 1640px) {
  .nav-container {
    max-width: 1440px;
  }
}

@media (max-width: 1480px) {
  .nav-container {
    max-width: 1286px;
  }
}
@media (max-width: 1326px) {
  .nav-container {
    max-width: 976px;
  }
  .container-button-burger {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 290px;
  }
  .burger-menu {
    display: flex;
  }
  .nav-links {
    display: none;
  }
  .close-btn {
    top: 0;
    right: 0;
    z-index: 1;
  }
}
@media (max-width: 1016px) {
  .nav-container {
    max-width: 720px;
  }
  .mobile-nav.open {
    max-height: 440px;
  }
}

@media (max-width: 752px) {
  .nav-container {
    max-width: 600px;
  }
  .consortium-btn {
    display: none;
  }
  .container-button-burger {
    justify-content: flex-end;
  }

}

@media (max-width: 632px) {
  .nav-container {
    max-width: 448px;
  }
  .mobile-nav {
    width: 100%;
    height: 100vh;
    max-width: 448px;
    border-radius: 20px;
    position: absolute;
    top: 0;
    left: 0;
    backdrop-filter: blur(30px);
    -webkit-backdrop-filter: blur(30px);
    justify-content: center;
    padding: 0;
    transform: translateY(-100%);
    transition: transform 0.4s ease;
  }
  .mobile-nav.open {
    top: -25px;
    transform: translateY(0);
  }
  .button-menu .consortium-btn {
    display: flex;
    margin-top: 1rem;
  }

}
@media (max-width: 480px) {
  .nav-container {
    max-width: 328px;
  }
  .logo {
    width: 160px;
  }

}
@media (max-width: 360px) {
  .logo {
    width: 161px;
  }
  .logo-hero-content {
    font-size: 24px;
  }
  .nav-container {
    max-width: 288px;
  }

}
</style>
