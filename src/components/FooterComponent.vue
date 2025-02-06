<template>
  <footer class="footer-section">
    <div class="footer-content">
      <div class="footer-section-content">
      <div class="footer-logo-block">
        <h2 class="footer-logo"><span style="color: #00BBFF;">[</span> Sc.AI <span style="color: #00BBFF;">]</span></h2>
        <div class="eu-funding">
          <img
              src="@/assets/image/eu-logo.png"
              alt="EU Logo"
              class="eu-logo"
          />
          <img
            src="@/assets/image/footer-arc.png"
            alt="footerPict"
            class="footer-picture"
            />
          <span>Funded by<br> the European Union</span>
        </div>
      </div>

      <div class="footer-cards">
        <div class="footer-card">
          <img src="@/assets/image/icons/mail.svg" alt="Mail Icon" />
          <div class="footer-card-text">
            <strong>Send us an email</strong>
            <p>info@project.ai</p>
          </div>
        </div>

        <div class="footer-card">
          <img src="@/assets/image/icons/phone.svg" alt="Phone Icon" />
          <div class="footer-card-text">
            <strong>Give us a call</strong>
            <p>+32 472 693 854</p>
          </div>
        </div>

        <div class="footer-card">
          <img src="@/assets/image/icons/location.svg" alt="Location Icon" />
          <div class="footer-card-text">
            <strong>Our location</strong>
            <p>Mechelsesteenweg 127, Antwerp, Belgium</p>
          </div>
        </div>
      </div>

      <div class="footer-copyright">
        Copyright © 2024 Sc.AI
      </div>
    </div>
    </div>
  </footer>
</template>

<script setup>

</script>

<style scoped>

.footer-section {
  position: relative;
  width: 100%;
  height: 1084px;
  background: #070514 url("@/assets/image/footer-arc.png") no-repeat center top;
  background-size: cover;
  color: #fff;
  display: flex;
  justify-content: center;
  align-items: flex-end;
}


.footer-content {
  max-width: 1200px;
  width: 100%;
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 3rem;
  height: 570px;
}

.footer-logo-block {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 1rem;
}
.footer-logo {
  font-size: 4.5rem;
  font-weight: 400;

}
.eu-funding {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 0.5rem;
  color: #ccc;
  font-size: 0.875rem;
}
.eu-logo {
  width: 130px;
  height: auto;
}

.footer-cards {
  display: flex;
  justify-content: center;
  gap: 2rem;
  margin-top: 2rem;
}
.footer-card {
  background-color: #04051A;
  border-radius: 16px;
  width: 250px;
  border: 1px solid #232323;
  padding: 1.5rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  gap: 1rem;
  transition: transform 0.3s ease;
}
.footer-card:hover {
  transform: translateY(-8px);
}
.footer-card img {
  width: 32px;
  height: auto;
}
.footer-card-text strong {
  font-size: 1rem;
  margin-bottom: 0.5rem;
  color: #FFFFFF;
}
.footer-card-text p {
  font-size: 0.875rem;
  color: #B4B4B4;
  margin: 0;
}

.footer-copyright {
  font-size: 0.875rem;
  color: #FFFFFF;
  margin: 3rem;
}
.footer-picture {
  display: none;
}
@media (max-width: 1016px) {
  .footer-section-content{
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .footer-cards {
    max-width: 720px;
    width: 100%;
  }

}
@media (max-width: 752px) {
  .footer-content {
    overflow: hidden;
    height: 987px;


  }
  .footer-section {
    background: none;
  }
  .footer-section-content {
    height: 1000px;
  }
  .footer-cards {
    max-width: 448px;
    flex-direction: column;
    align-items: center;
  }
  .footer-picture {
    display: block;
    position: absolute;
    width: 100%;
    top: -150px;
  }

}
@media (max-width: 1366px) {
  .footer-section {
    padding: 0;
    height: 1080px;
  }
  .footer-card {
    max-width: 280px;
  }
  .footer-content {
    width: 100%;
  }
  .footer-section-content {
    width: 100%;
  }
}
@media (max-width: 768px) {
  .footer-content {
    width: 100%;
  }
  .footer-section-content {
    width: 100%;
  }
  .footer-card {
    max-width: 170px;
  }
  .float-left, float-right {
    width: 100%;
  }

}
@media (max-width: 480px) {
  .footer-card {
    max-width: 227px;
    height: 184px;
  img {
    width: 48px;
  }
  }
  .footer-picture {
    top: -30px;
  }
  .footer-logo {
    font-size: 64px;
  }
  .footer-card-text {
    gap: 5px;
    display: flex;
    flex-direction: column;
  }
  .footer-card-text strong {
    font-size: 20px;
    font-weight: 500;
    line-height: 24.2px;
  }
  .footer-card-text p {
    font-size: 16px;
    font-weight: 400;
    line-height: 19.36px;
  }
  .footer-copyright {
    margin: 30px;
  }

}
</style>
