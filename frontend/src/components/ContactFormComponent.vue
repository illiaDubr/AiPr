<template>
  <section class="contact-section" id="contact">

    <img
        src="@/assets/image/bg/contact-bubble.png"
        alt=""
        class="floating-element float-bubble"
    />
    <img
        src="@/assets/image/bg/contact-bg-left.png"
        alt=""
        class="floating-element float-left"
    />
    <img
        src="@/assets/image/bg/contact-bg-right.png"
        alt=""
        class="floating-element float-right"
    />

    <div class="content-container">
    <div class="container">
      <h2 class="section-title">
        Contact <span class="highlight">With Us</span>
      </h2>

      <div class="contact-content">
        <div class="contact-details">
          <div class="contact-title-subtitle">
          <h3>Contact details</h3>
          <p>
            We're here to help! If you have any questions or want more information, feel free to contact us. We're always ready to assist you with any inquiries you may have.
          </p>
          </div>
          <div class="detail-content">
          <div class="detail-item">
            <img src="@/assets/image/icons/mail.svg" alt="Mail" />
            <div>
              <strong>Send us an email</strong><br />
             <p>info@project.ai</p>
            </div>
          </div>

          <div class="detail-item">
            <img src="@/assets/image/icons/phone.svg" alt="Phone" />
            <div>
              <strong>Give us a call</strong><br />
              <p>+32 472 693 864</p>
            </div>
          </div>

          <div class="detail-item">
            <img src="@/assets/image/icons/location.svg" alt="Location" />
            <div>
              <strong>Our location</strong><br />
              <p>Mechelsesteenweg 127, Antwerp, Belgium</p>
            </div>
          </div>
        </div>
        </div>
        <form class="contact-form" @submit.prevent="handleSubmit">
          <div class="form-row">
            <label>Full name
              <input type="text" v-model="fullName" placeholder="John Carter" />
            </label>
            <label>Email address
              <input type="email" v-model="email" placeholder="example@email.com" />
            </label>
          </div>

          <div class="form-row">
            <label>Phone Number
              <PhoneInput
                  v-model="phone"
                  :default-country="'US'"
              />
            </label>

            <label>Company Name
              <input type="text" v-model="companyName" placeholder="@YourCompany" />
            </label>
          </div>

          <label>Message
            <textarea rows="4" v-model="message" placeholder="Write your message here..."></textarea>
          </label>

          <button type="submit" class="send-btn">
            Send Message <span aria-hidden="true" class="arrow"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M5.93167 11.9996L18.2773 11.9996" stroke="#0F1117" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M12.292 4.68482L18.4648 12.0922L12.292 19.4996" stroke="#0F1117" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg></span>
          </button>
        </form>
      </div>
    </div>
    </div>
  </section>
</template>

<script>
import axios from "axios";
import PhoneInput from "@/components/PhoneInput.vue";


export default {
  components: {
    PhoneInput,
  },
  data() {
    return {
      fullName: "", // Поле "Имя"
      email: "", // Поле "Email"
      phone: "", // Поле "Телефон"
      companyName: "", // Поле "Название компании"
      message: "", // Поле "Сообщение"
    };
  },
  methods: {
    async handleSubmit() {
      try {
        // Отправка данных на бэкенд
        const response = await axios.post("http://139.59.129.146/api/send_mail.php", {
          fullName: this.fullName,
          email: this.email,
          phone: this.phone,
          companyName: this.companyName,
          message: this.message,
        });

        // Успешная отправка
        alert("Сообщение успешно отправлено!");
        console.log(response.data);

        // Сброс значений формы
        this.fullName = "";
        this.email = "";
        this.phone = "";
        this.companyName = "";
        this.message = "";
      } catch (error) {
        // Обработка ошибки
        console.error("Ошибка отправки формы:", error);
        alert("Не удалось отправить сообщение. Попробуйте позже.");
      }
    },
  },
  mounted() {
    const titles = document.querySelectorAll('.section-title');

    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          // Добавляем класс, запускающий анимацию
          entry.target.classList.add('animate');
          // Больше не следим за этим заголовком, чтобы не дергалось туда-сюда
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.1, // Когда 10% заголовка на экране, сработает анимация
    });

    titles.forEach((title) => observer.observe(title));
  }
};
</script>

<style scoped>
.section-title {
  opacity: 0;                 /* Изначально невидимый */
  transform: translateY(20px);/* Сдвинут вниз */
  transition: opacity 0.6s ease, transform 0.6s ease;
}

/* Когда заголовок "активировался" */
.section-title.animate {
  opacity: 1;
  transform: translateY(0);
}

textarea {
  resize: none;
}
.contact-section {
  position: relative;
  width: 100%;
  background: #070514;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  z-index: 0;
}
label {
  display: flex;
  flex-direction: column;
  color: #FFFFFF;
  justify-content: center;
}


.content-container {
  width: 100%;
  position: relative;
  z-index: 1;
}

/* КОНТЕЙНЕР */
.container {
  padding-top: 200px;
  max-width: 1600px;
  position: relative;
  z-index: 1;
  margin: 0 auto;
  color: #fff;

}

/* ЗАГОЛОВОК */
.section-title {
  margin-bottom: 2rem;
  padding: 0 2rem;
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
/* ОСНОВНОЙ КОНТЕНТ */
.contact-content {
  display: flex;
  gap: 2rem;
  background: rgba(17, 19, 48, 0.6); /* Полупрозрачный фон */
  border-radius: 30px;
  padding: 50px;
  margin: 0 2rem;
  position: relative;
  z-index: 2;
  backdrop-filter: blur(30px); /* Размытие заднего фона */
  -webkit-backdrop-filter: blur(30px); /* Поддержка для Safari */
}
.contact-details {
  flex: 1;
  position: relative;
  z-index: 3;
}

.contact-title-subtitle {
  width: 607px;
}
.contact-details h3 {
  padding-bottom: 10px;
  font-size: 48px;
  font-weight: 500;
  line-height: 62.4px;
  text-align: left;
  text-underline-position: from-font;
  text-decoration-skip-ink: none;


}
.contact-details p {
  padding-bottom: 20px;
  color: #B4B4B4;
  font-size: 20px;
  font-weight: 400;
  line-height: 24.2px;
  text-align: left;



}

.detail-item {
  display: flex;
  align-items: flex-start;
  gap: 30px;
  margin-bottom: 1rem;
  font-size: 20px;
  line-height: 35px;
  font-weight: 400;
  text-align: left;
}
.detail-item img {
  width: 48px;
  height: 48px;
}

.detail-item strong {
  font-size: 20px;
  font-weight: 500;
  line-height: 24.2px;
  text-align: left;
}
.detail-item p {
  color: #FFFFFF;
  font-size: 20px;
}

/* Правая колонка: форма */
.contact-form {
  flex: 1;
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
}
.form-row {
  display: flex;
  gap: 1rem;
}
label {
  flex: 1;
  display: flex;
  flex-direction: column;
  color: #FFFFFF;
  font-size: 20px;
  font-weight: 500;
  line-height: 24.2px;
  text-align: left;
  text-underline-position: from-font;
  text-decoration-skip-ink: none;

}
input,
textarea {
  margin-top: 0.5rem;
  background: #0F1126B2;
  border: 1px solid transparent;
  border-radius: 30px;
  padding: 0.75rem;
  color: #fff;
  font-size: 1rem;
  transition: border-color 0.2s;
}
input:focus,
textarea:focus {
  outline: none;
  border-color: #00aaff;
}

/* Кнопка */
.send-btn {
  align-self: flex-start;
  background-color: #fff;
  color: #000;
  padding: 0.75rem 1.5rem;
  border-radius: 999px;
  border: none;
  cursor: pointer;
  font-weight: 500;
  transition: background-color 0.2s, color 0.2s;
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
}
.send-btn:hover {
  background-color: #00BBFF;
  color: #fff;
}

.send-btn .arrow {
  font-size: 1.2em;
  transform: translateX(0);
  transition: transform 0.3s ease;
}
.send-btn span {
  display: flex;
  align-items: center;
}
.send-btn:hover .arrow svg path {
  stroke: white; /* Меняем цвет стрелки на белый */
}
.send-btn:hover .arrow {
  transform: translateX(8px);
}

.country-select option {
  color: #000;
}

.detail-content {
  margin-top: 30px;
}
.detail-item p {
  line-height: 25px;
  margin-bottom: 0;
}
.floating-element {
  position: absolute;
  z-index: -1;
  pointer-events: none;
  opacity: 0.9;
  animation: float 3s ease-in-out infinite alternate;
}
.float-left {
  top: 0;
  left: 0;
  width: 500px;
  z-index: 0;
}
.float-right {
  z-index: 0;
  bottom: -5px;
  right: 0;
  width: 700px;
}
.float-bubble {
  top: -342px;
  right: -100px;
  width: 600px;
  z-index: 1;
  animation-duration: 6s;
}
@keyframes float {
  0%   { transform: translateY(0); }
  50%  { transform: translateY(20px); }
  100% { transform: translateY(0); }
}

@media (max-width: 1640px) {
  .float-left {
    width: 595px;
  }
  .container {
    max-width: 1440px;
  }
}
@media (max-width: 1480px) {
  .float-bubble {
    top: -303px;
    right: -165px;
  }
}
@media (max-width: 1326px) {

  .container {
    max-width: 976px;
    width: 100%;
  }
  .section-title {
    font-size: 52px;
    font-weight: 500;
    line-height: 67.6px;

  }
  .contact-content {
    flex-direction: column-reverse;
  }
  .detail-content {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
  }
  .contact-title-subtitle {
    width: 100%;
  }
  .detail-content {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    justify-content: center;
    align-items: flex-start;
  }
  .float-right {
    top: 200px;
  }
}
@media (max-width: 1016px) {
  .container {
    max-width: 720px;
  }
  .detail-content {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    grid-template-areas:
    "item1 item2 "
    "item3 item3";
  }
  .contact-content {
    margin: 0;
  }
  .detail-item:nth-child(1) {
    grid-area: item1;
  }

  .detail-item:nth-child(2) {
    grid-area: item2;
  }

  .detail-item:nth-child(3) {
    grid-area: item3;
  }

}
@media (max-width: 752px) {
  .container {
    max-width: 600px;
  }
  .section-title {
    font-size: 36px;
    font-weight: 500;
    line-height: 46.8px;
  }
  .form-row {
    flex-direction: column;
  }
  .detail-content {
    display: flex;
  }
  .contact-details h3 {
    font-size: 32px;
    font-weight: 500;
    line-height: 41.6px;
  }
  .contact-details p {
    font-size: 16px;
    font-weight: 400;
    line-height: 19.36px;
  }

}

@media (max-width: 632px) {
  .container {
    max-width: 448px;
  }

}
@media (max-width: 480px) {
  .container {
    max-width: 328px;
  }
  .contact-content {
    padding: 30px;
    padding-left: 16px;
    padding-right: 16px;
  }

}

@media (max-width: 360px) {
  .container {
    max-width: 288px;
  }
  .contact-content {
    padding: 15px;
  }
  .contact-details {
    gap: 15px;
    display: flex;
    flex-direction: column;
  }
  .detail-content {
    max-width: 240px;
    width: 100%;
    min-height: 288px;
  }
}
</style>
