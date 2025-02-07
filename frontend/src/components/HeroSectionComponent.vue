<template>
  <section id="hero-section" class="hero">
    <!-- Фоновое видео -->
    <video
        class="hero-video"
        src="../assets/Sequence11.mp4"
        autoplay
        loop
        muted
        playsinline
    ></video>

    <!-- Основной контент поверх видео -->
    <div class="hero-content">
      <h1 class="hero-title fade-in">
        Transforming science<span> with
         AI-powered</span>
        discovery
      </h1>
      <p class="hero-subtitle fade-in">
        Our goal is to create an AI-platform capable of understanding the complex science that describes the physical<br>world, enabling it to generate new scientific discoveries based solely on text prompts.
      </p>
      <button class="hero-cta fade-in">Learn More<span aria-hidden="true" class="arrow"><span aria-hidden="true" class="arrow"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M5.93167 11.9996L18.2773 11.9996" stroke="#0F1117" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M12.292 4.68482L18.4648 12.0922L12.292 19.4996" stroke="#0F1117" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        </span></span></button>
        <div class="hero-description fade-in">
          <p class="highlighted-text-source" style="display:none;">
        Sc.AI develops an
        <span class="highlight">AI</span>
        that
        <span class="highlight">automates</span>
        the
        <span class="highlight">scientific
        research</span> process
        aiming to drastically
        <span class="highlight">accelerate</span>
        the
        discovery and valorization
        of
        technological breakthroughs
      </p>
          <p class="highlighted-text typed-result"></p>
    </div>
    </div>
  </section>
  <section class="partners-section" id="partners">
    <div class="partners-content fade-in">
      <h2 class="partners-title ">
        Together <span class="highlight">with Partners</span>
      </h2>
      <p class="partners-subtitle">
        scAI is the technical lead of FULL-MAP, a prestigious €20 million<span class="line-break"> research project funded by the European Commission.</span>
      </p>
    </div>

    <!-- Карусель -->
    <div class="partners-carousel">
      <!-- Первый «ряд» логотипов -->
      <div class="logos-row">
        <a href="https://www.linkedin.com/company/r2m-solution/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/R2M.png" alt="R2M" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/school/vrije-universiteit-brussel/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/Vrije-Universiteit.png" alt="Vrije" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/vito/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/VITO.png" alt="VITO" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/daikin-chemical-europe-gmbh/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/Daikin.png" alt="Daikin" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/school/sri-sai-b.ed.-college-khurai-road-jarara/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/Katholieke.png" alt="Katholieke" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/imec/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/IMEC.png" alt="IMEC" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/school/rwth-aachen-university/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/RWTH.png" alt="RWTH" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/vtt/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/VTT.png" alt="VTT" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/cemea/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/CEMEA.png" alt="CEMEA" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/solvionic/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/SOLVIONIC.png" alt="Solvionic" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/ceramic-powder-technology-as/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/CERPOTECH.png" alt="CERPOTECH" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/max-planck-institute-for-sustainable-materials/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/Max-Planck-Institute.png" alt="Max-Planck-Institute" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/csem/?lipi=urn%3Ali%3Apage%3Ad_flagship3_detail_base%3Bwcm73EiWSFyo1MYSv8aPqg%3D%3D" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/CSEM.png" alt="CSEM" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/cellerate/?lipi=urn%3Ali%3Apage%3Ad_flagship3_detail_base%3Bwcm73EiWSFyo1MYSv8aPqg%3D%3D" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/CELLERATE.png" alt="CELLERATE" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/school/imperial-college-london/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/IMPERIAL.png" alt="IMPERIAL" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/thermo-fisher-scientific/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/SCIENTIFIC.png" alt="SCIENTIFIC" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/siemenssoftware/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/SIMENS.png" alt="SIMENS" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/ikerlan/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/IKERLAN.png" alt="IKERLAN" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/fraunhofer-ffb/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/FRAUNHOFER.png" alt="FRAUNHOFER" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/austrian-institute-of-technology/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/AIOFO.png" alt="AIOFO" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/verkor/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/VERKOR.png" alt="VERKOR" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/cellife-technlogies/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/CELLIFE.png" alt="CELLIFE" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/qunasys/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/UNASYS.png" alt="UNASYS" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/meet-battery-research-center/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/meet.png" alt="meet" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/uk-cpi/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/CPI.png" alt="CPI" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/excillum/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/excillum.png" alt="excillum" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/institute-mihajlo-pupin/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/FRAUNHOFER_PUPIN.png" alt="FRAUNHOFER_PUPIN" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/varta-ag/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/Varta-Logo.png" alt="Varta" class="logo-img" />
        </a>
      </div>
      <!-- Дублируем, чтобы анимация была «бесшовной» -->
      <div class="logos-row">
        <a href="https://www.linkedin.com/company/r2m-solution/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/R2M.png" alt="R2M" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/school/vrije-universiteit-brussel/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/Vrije-Universiteit.png" alt="Vrije" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/vito/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/VITO.png" alt="VITO" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/daikin-chemical-europe-gmbh/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/Daikin.png" alt="Daikin" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/school/sri-sai-b.ed.-college-khurai-road-jarara/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/Katholieke.png" alt="Katholieke" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/imec/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/IMEC.png" alt="IMEC" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/school/rwth-aachen-university/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/RWTH.png" alt="RWTH" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/vtt/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/VTT.png" alt="VTT" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/cemea/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/CEMEA.png" alt="CEMEA" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/solvionic/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/SOLVIONIC.png" alt="Solvionic" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/ceramic-powder-technology-as/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/CERPOTECH.png" alt="CERPOTECH" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/max-planck-institute-for-sustainable-materials/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/Max-Planck-Institute.png" alt="Max-Planck-Institute" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/csem/?lipi=urn%3Ali%3Apage%3Ad_flagship3_detail_base%3Bwcm73EiWSFyo1MYSv8aPqg%3D%3D" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/CSEM.png" alt="CSEM" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/cellerate/?lipi=urn%3Ali%3Apage%3Ad_flagship3_detail_base%3Bwcm73EiWSFyo1MYSv8aPqg%3D%3D" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/CELLERATE.png" alt="CELLERATE" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/school/imperial-college-london/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/IMPERIAL.png" alt="IMPERIAL" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/thermo-fisher-scientific/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/SCIENTIFIC.png" alt="SCIENTIFIC" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/siemenssoftware/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/SIMENS.png" alt="SIMENS" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/ikerlan/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/IKERLAN.png" alt="IKERLAN" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/fraunhofer-ffb/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/FRAUNHOFER.png" alt="FRAUNHOFER" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/austrian-institute-of-technology/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/AIOFO.png" alt="AIOFO" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/verkor/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/VERKOR.png" alt="VERKOR" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/cellife-technlogies/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/CELLIFE.png" alt="CELLIFE" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/qunasys/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/UNASYS.png" alt="UNASYS" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/meet-battery-research-center/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/meet.png" alt="meet" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/uk-cpi/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/CPI.png" alt="CPI" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/excillum/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/excillum.png" alt="excillum" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/institute-mihajlo-pupin/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/FRAUNHOFER_PUPIN.png" alt="FRAUNHOFER_PUPIN" class="logo-img" />
        </a>
        <a href="https://www.linkedin.com/company/varta-ag/" target="_blank" rel="noopener noreferrer">
          <img src="@/assets/image/partners/Varta-Logo.png" alt="Varta" class="logo-img" />
        </a>
      </div>
    </div>

  </section>
</template>

<script setup>
import { onMounted } from 'vue';

onMounted(() => {
  const elements = document.querySelectorAll('.fade-in');

  const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry, index) => {
          if (entry.isIntersecting) {
            setTimeout(() => {
              entry.target.classList.add('fade-in-visible');
            }, index * 500);
          }
        });
      },
      { threshold: 0.3 }
  );

  elements.forEach((el) => observer.observe(el));
  const sourceP = document.querySelector(".highlighted-text-source");
  const targetP = document.querySelector(".typed-result");
  if (!sourceP || !targetP) return;
  function typeNode(node, parentElem, speed = 100) {
    if (node.nodeType === Node.TEXT_NODE) {
      const text = node.nodeValue || "";
      const textNode = document.createTextNode("");
      parentElem.appendChild(textNode);

      return new Promise((resolve) => {
        let i = 0;
        const timer = setInterval(() => {
          textNode.nodeValue += text[i];
          i++;
          if (i >= text.length) {
            clearInterval(timer);
            resolve();
          }
        }, speed);
      });
    }

    if (node.nodeType === Node.ELEMENT_NODE) {
      const tagName = node.nodeName.toLowerCase();

      if (tagName === "img") {
        const cloneImg = node.cloneNode(true);
        parentElem.appendChild(cloneImg);
        return Promise.resolve();
      } else {
        const cloneElem = document.createElement(tagName);

        for (let attr of node.attributes) {
          cloneElem.setAttribute(attr.name, attr.value);
        }

        parentElem.appendChild(cloneElem);

        const childNodes = Array.from(node.childNodes);
        return childNodes.reduce((prevPromise, child) => {
          return prevPromise.then(() => typeNode(child, cloneElem, speed));
        }, Promise.resolve());
      }
    }

    return Promise.resolve();
  }

  const nodes = Array.from(sourceP.childNodes);

  nodes
      .reduce((prevPromise, currentNode) => {
        return prevPromise.then(() => typeNode(currentNode, targetP, 40));
      }, Promise.resolve())
      .then(() => {
        console.log("Typing finished!");
      });
});
</script>


<style scoped>
/* --- Начальное состояние (скрытие) --- */
.fade-in {
  opacity: 0;
  transform: translateY(70px);
  transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}

/* --- Появление элемента --- */
.fade-in-visible {
  opacity: 1;
  transform: translateY(0);
}
.hero {
  position: relative;
  width: 100%;
  height: 1300px;
  display: flex;
  align-items: flex-start;
  justify-content: center;
  color: #fff;
  overflow: hidden;


}

.hero-video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: 1;
}

.hero::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 40%;
  background: linear-gradient(180deg, rgba(0,0,0,0) 0%, #070514 100%);
  z-index: 2;
  pointer-events: none;
}

.partners-section {
  margin-bottom: 200px;
}
.hero-content {
  max-width: 1600px;
  position: relative;
  z-index: 3;
  text-align: center;
  margin-top: 210px;
}


.hero-title {
  font-size: 96px;
  font-weight: 600;
  line-height: 96px;
  text-align: center;
  text-underline-position: from-font;
  text-decoration-skip-ink: none;
}

.hero-title span {
  color: #00aaff;
}

.hero-subtitle {
  font-size: 24px;
  font-weight: 500;
  line-height: 33.6px;
  text-align: center;
  padding: 20px;
}


.hero-cta {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  background-color: #fff;
  gap: 8px;
  color: #000;
  border: none;
  border-radius: 999px;
  padding: 0.75rem 1.5rem;
  font-size: 1rem;
  font-weight: 500;
  cursor: pointer;
  transition: background-color 0.3s ease, color 0.3s ease;
  margin-bottom: 2rem;
}
.hero-cta:hover .arrow svg path {
  stroke: #FFFFFF; /* Меняем цвет обводки стрелки на белый */
  transition: stroke 0.3s ease; /* Добавляем плавность перехода */
}
.arrow svg {
  display: flex;
  align-items: center;
}

.hero-cta .arrow {
  font-size: 1.2em;
  transform: translateX(0);
  transition: transform 0.3s ease;
}
.hero-cta:hover {
  background-color: #00BBFF; /* Новый цвет при ховере */
  color: #fff; /* Цвет текста */
}

.hero-cta:hover .arrow {
  transform: translateX(8px); /* Двигаем стрелочку вправо */
}

.hero-description {
  max-width: 1600px;
  margin-top: 200px;
}
.hero-description img {
  display: inline;
}

.arrow {
  font-size: 1.2em;
  transform: translateY(1px);
}

.hero-description {
  font-size: 64px;
  font-weight: 500;
  line-height: 83.2px;
  text-align: center;
  color: #f0f0f0;
}

.highlight {
  color: #00aaff;
}
.partners-section {
  background-color: #070514;
  color: #fff;
  text-align: center;
  overflow: hidden;
}


.partners-section {
  width: 100%;
  background-color: #070514;
  color: #fff;
  text-align: center;
  overflow: hidden;
}


.partners-content {
  gap: 24px;
  width: 768px;
  height: 175px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.partners-title {
  margin: 0;
  font-size: 64px;
  font-weight: 500;
  line-height: 83.2px;
  text-align: center;
  text-underline-position: from-font;
  text-decoration-skip-ink: none;

}

.highlight {
  color: #00aaff;
}

.partners-subtitle {
  margin-top: 0.5rem;
  color: #FFFFFF;
  max-width: 768px;
  font-size: 24px;
  font-weight: 500;
  line-height: 33.6px;
  text-align: center;
  text-underline-position: from-font;
  text-decoration-skip-ink: none;

}

.partners-carousel {
  display: flex;
  position: relative;
  width: 100%;
  overflow: hidden;
  margin-top: 2rem;
  gap: 20px;
}

.partners-carousel:hover .logos-row {
  animation-play-state: paused;
}

.logos-row {
  height: 120px;
  display: inline-flex;
  animation: slide 100s linear infinite;
  align-items: center;
  opacity: 0.8;
  gap: 30px;
}

@keyframes slide {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-100%);
  }
}

.logo-img {
  transition: filter 0.2s, opacity 0.2s;
}

.logo-img:hover {
  opacity: 1.0;
  filter: brightness(0) invert(1);
}

.text-block {
  width: 1600px;
  height: 376px;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: center;
}


.highlighted-text {
  font-family: 'Inter Tight', sans-serif;
  font-size: 72px;
  font-weight: 500;
  line-height: 93.6px;
  text-align: center;
  text-underline-position: from-font;
  text-decoration-skip-ink: none;
  color: #fff;
}

.highlight {
  color: #00aaff;
  font-weight: 500;
}

.inline-icon {
  width: 130px;
  height: auto;
  vertical-align: middle;
  margin: 0 0.3rem;
}
.partners-subtitle .line-break {
  display: inline;
}

@media (max-width: 1640px) {
  .hero-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    align-items: center;

  }
  .hero-description {
    max-width: 1440px;
  }
  .highlighted-text {
    font-size: 64px;
    font-weight: 500;
    line-height: 83.2px;
    text-align: center;

  }
}
@media (max-width: 1480px) {
  .hero-content {
    max-width: 1220px;
  }
  .highlighted-text {
    font-size: 56px;
    font-weight: 500;
    line-height: 73.6px;
    text-align: center;

  }
  .hero-subtitle {
    max-width: 1220px;
  }
  .hero-description {
    max-width: 1220px;
    .highlighted-text {
      font-size: 64px;
      font-weight: 500;
      line-height: 83.2px;
      text-align: center;
    }
  }
}

@media (max-width: 1326px) {
  .hero-content {
    max-width: 976px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 40px;
    h1 {
      font-size: 80px;
      line-height: 80px;
    }
    p {
      font-size: 20px;
      line-height: 28px;
      max-width: 976px;
      padding: 0;
    }
  }
  .hero-description {
    max-width: 976px;
    .highlighted-text {
      font-size: 56px;
      line-height: 73.6px;
    }
  }
  .partners-content {
    width: 758px;
    .partners-title {
      font-size: 52px;
      line-height: 67.6px;
    }
    .partners-subtitle {
      font-size: 20px;
      line-height: 28px;
    }
  }
  .logos-row a img {
    height: 48px;
    width: auto;
    margin-right: 70px;
  }
}

@media (max-width: 1016px) {
  .hero-content {
    max-width: 720px;
    .hero-title {
      font-size: 60px;
      font-weight: 600;
      line-height: 64px;
    }
  }
  .hero-description {
    .highlighted-text {
      font-size: 40px;
      font-weight: 500;
      line-height: 52px;
    }
  }
  .hero-description img {
    width: 70px;
  }
  .partners-content {
    .partners-title {
      font-size: 48px;
      font-weight: 500;
      line-height: 62.4px;
    }
  }
}

@media (max-width: 752px) {
  .hero-content {
    max-width: 600px;
  .hero-title {
    font-size: 50px;
    font-weight: 600;
    line-height: 56px;
  }
    p {
      max-width: 600px;
    }
  }
  .hero-description {
    max-width: 600px;
    .highlighted-text {
      font-size: 36px;
      font-weight: 500;
      line-height: 46.8px;
    }
  }
  .partners-content {
    max-width: 600px;
    .partners-title {
      font-size: 36px;
      font-weight: 500;
      line-height: 46.8px;
    }
  }

}

@media (max-width: 632px) {
  .hero-content {
    max-width: 448px;
    .hero-title {
      font-size: 48px;
      font-weight: 600;
      line-height: 48px;
    }
  }
  .hero-description {
    max-width: 448px;
    .highlighted-text {
      font-size: 36px;
      font-weight: 500;
      line-height: 46.8px;
      padding-bottom: 60px;
    }
  }
  .highlighted-text img {
    display: none;
  }
  .partners-content {
    max-width: 448px;
  }
}

@media (max-width: 480px) {
  .hero-content {
    max-width: 328px;
    .hero-title {
      font-size: 36px;
      font-weight: 600;
      line-height: 36px;
    }
    .hero-subtitle {
      font-size: 16px;
      font-weight: 500;
      line-height: 22.4px;
    }
  }
  .hero-description {
    max-width: 328px;
    .highlighted-text {
      font-size: 32px;
      font-weight: 500;
      line-height: 46.8px;
      padding-bottom: 60px;
    }
  }
  .highlighted-text img {
    display: none;
  }
  .partners-section {
    margin-top: 60px;
  }
  .partners-content {
    max-width: 328px;
  .partners-title {
    font-size: 32px;
    font-weight: 500;
    line-height: 41.6px;
  }
    .partners-subtitle {
      font-size: 16px;
      font-weight: 500;
      line-height: 22.4px;
    }
  }
  .logos-row a img {
    height: 36px;
  }


}


@media (max-width: 360px) {
  .hero {
    height: 1360px;
  }
  .hero-content {
    max-width: 288px;
  }
  .hero-description {
    max-width: 288px;
  }
  .partners-content {
    margin-top: 100px;
    max-width: 288px;
    .partners-title {
      font-size: 32px;
      font-weight: 500;
      line-height: 41.6px;
    }
    .partners-subtitle {
      font-size: 16px;
      font-weight: 500;
      line-height: 22.4px;
    }
  }
  .logos-row a img {
    height: 36px;
  }


}
</style>
