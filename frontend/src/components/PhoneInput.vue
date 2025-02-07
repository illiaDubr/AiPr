<template>
  <div class="phone-input">
    <div class="dropdown" @click="toggleDropdown">
      <img
          v-if="selectedCountry"
          :src="`https://flagcdn.com/w40/${selectedCountry.code.toLowerCase()}.png`"
          alt="Flag"
          class="flag"
      />
      <span class="arrow">▼</span>
    </div>
    <input
        type="tel"
        v-model="formattedPhoneNumber"
        :placeholder="selectedCountry ? selectedCountry.phoneFormat : 'Enter phone number'"
        @input="onPhoneInput"
        @keydown="onKeyDown"
        maxlength="20"
    />
    <div v-if="showDropdown" class="dropdown-menu">
      <div
          v-for="country in countries"
          :key="country.code"
          class="dropdown-item"
          @click="selectCountry(country)"
      >
        <img
            :src="`https://flagcdn.com/w40/${country.code.toLowerCase()}.png`"
            alt="Flag"
            class="flag"
        />
        <span class="country-info">{{ country.name }} ({{ country.dialCode }})</span>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "PhoneInput",
  props: {
    modelValue: {
      type: String,
      default: "",
    },
    defaultCountry: {
      type: String,
      default: "US",
    },
  },
  data() {
    return {
      phoneNumber: "",
      formattedPhoneNumber: "",
      selectedCountry: null,
      showDropdown: false,
      countries: [
        { name: "United States", code: "US", dialCode: "+1", phoneLength: 10, phoneFormat: "+1 (###) ###-####" },
        { name: "Belgium", code: "BE", dialCode: "+32", phoneLength: 9, phoneFormat: "+32 ### ### ###" },
        { name: "Germany", code: "DE", dialCode: "+49", phoneLength: 10, phoneFormat: "+49 (####) ######" },
        { name: "Russia", code: "RU", dialCode: "+7", phoneLength: 10, phoneFormat: "+7 (###) ###-##-##" },
        { name: "Albania", code: "AL", dialCode: "+355", phoneLength: 9, phoneFormat: "+355 ### ###" },
        { name: "Andorra", code: "AD", dialCode: "+376", phoneLength: 6, phoneFormat: "+376 ## ##" },
        { name: "Armenia", code: "AM", dialCode: "+374", phoneLength: 8, phoneFormat: "+374 ## ####" },
        { name: "Austria", code: "AT", dialCode: "+43", phoneLength: 10, phoneFormat: "+43 ### ### ###" },
        { name: "Azerbaijan", code: "AZ", dialCode: "+994", phoneLength: 9, phoneFormat: "+994 ### ### ###" },
        { name: "Belarus", code: "BY", dialCode: "+375", phoneLength: 9, phoneFormat: "+375 ## ### ## ##" },
        { name: "Bosnia and Herzegovina", code: "BA", dialCode: "+387", phoneLength: 8, phoneFormat: "+387 ## ### ###" },
        { name: "Bulgaria", code: "BG", dialCode: "+359", phoneLength: 8, phoneFormat: "+359 ## ### ###" },
        { name: "Croatia", code: "HR", dialCode: "+385", phoneLength: 9, phoneFormat: "+385 ## ### ###" },
        { name: "Cyprus", code: "CY", dialCode: "+357", phoneLength: 8, phoneFormat: "+357 ### ####" },
        { name: "Czech Republic", code: "CZ", dialCode: "+420", phoneLength: 9, phoneFormat: "+420 ### ### ###" },
        { name: "Denmark", code: "DK", dialCode: "+45", phoneLength: 8, phoneFormat: "+45 ## ## ## ##" },
        { name: "Estonia", code: "EE", dialCode: "+372", phoneLength: 7, phoneFormat: "+372 ### ###" },
        { name: "Finland", code: "FI", dialCode: "+358", phoneLength: 9, phoneFormat: "+358 ### ### ###" },
        { name: "France", code: "FR", dialCode: "+33", phoneLength: 9, phoneFormat: "+33 # ## ## ## ##" },
        { name: "Georgia", code: "GE", dialCode: "+995", phoneLength: 9, phoneFormat: "+995 ### ### ###" },
        { name: "Greece", code: "GR", dialCode: "+30", phoneLength: 10, phoneFormat: "+30 ### ### ####" },
        { name: "Hungary", code: "HU", dialCode: "+36", phoneLength: 9, phoneFormat: "+36 ### ### ###" },
        { name: "Iceland", code: "IS", dialCode: "+354", phoneLength: 7, phoneFormat: "+354 ### ###" },
        { name: "Ireland", code: "IE", dialCode: "+353", phoneLength: 9, phoneFormat: "+353 # ### ###" },
        { name: "Italy", code: "IT", dialCode: "+39", phoneLength: 10, phoneFormat: "+39 ### ### ####" },
        { name: "Kazakhstan", code: "KZ", dialCode: "+7", phoneLength: 10, phoneFormat: "+7 (###) ###-##-##" },
        { name: "Kosovo", code: "XK", dialCode: "+383", phoneLength: 8, phoneFormat: "+383 ### ####" },
        { name: "Latvia", code: "LV", dialCode: "+371", phoneLength: 8, phoneFormat: "+371 ### ####" },
        { name: "Liechtenstein", code: "LI", dialCode: "+423", phoneLength: 7, phoneFormat: "+423 ### ###" },
        { name: "Lithuania", code: "LT", dialCode: "+370", phoneLength: 8, phoneFormat: "+370 ### ####" },
        { name: "Luxembourg", code: "LU", dialCode: "+352", phoneLength: 8, phoneFormat: "+352 ### ####" },
        { name: "Malta", code: "MT", dialCode: "+356", phoneLength: 8, phoneFormat: "+356 ## ## ## ##" },
        { name: "Moldova", code: "MD", dialCode: "+373", phoneLength: 8, phoneFormat: "+373 ### ###" },
        { name: "Monaco", code: "MC", dialCode: "+377", phoneLength: 8, phoneFormat: "+377 ## ## ##" },
        { name: "Montenegro", code: "ME", dialCode: "+382", phoneLength: 8, phoneFormat: "+382 ### ####" },
        { name: "Netherlands", code: "NL", dialCode: "+31", phoneLength: 9, phoneFormat: "+31 # #### ####" },
        { name: "North Macedonia", code: "MK", dialCode: "+389", phoneLength: 8, phoneFormat: "+389 ## ### ###" },
        { name: "Norway", code: "NO", dialCode: "+47", phoneLength: 8, phoneFormat: "+47 ## ## ## ##" },
        { name: "Poland", code: "PL", dialCode: "+48", phoneLength: 9, phoneFormat: "+48 ### ### ###" },
        { name: "Portugal", code: "PT", dialCode: "+351", phoneLength: 9, phoneFormat: "+351 ### ### ###" },
        { name: "Romania", code: "RO", dialCode: "+40", phoneLength: 9, phoneFormat: "+40 ### ### ###" },
        { name: "San Marino", code: "SM", dialCode: "+378", phoneLength: 9, phoneFormat: "+378 ## ## ##" },
        { name: "Serbia", code: "RS", dialCode: "+381", phoneLength: 8, phoneFormat: "+381 ## ### ###" },
        { name: "Slovakia", code: "SK", dialCode: "+421", phoneLength: 9, phoneFormat: "+421 ### ### ###" },
        { name: "Slovenia", code: "SI", dialCode: "+386", phoneLength: 8, phoneFormat: "+386 ### ###" },
        { name: "Spain", code: "ES", dialCode: "+34", phoneLength: 9, phoneFormat: "+34 ### ### ###" },
        { name: "Sweden", code: "SE", dialCode: "+46", phoneLength: 9, phoneFormat: "+46 ### ### ###" },
        { name: "Switzerland", code: "CH", dialCode: "+41", phoneLength: 9, phoneFormat: "+41 ### ### ###"},
        {name: "Turkey", code: "TR", dialCode: "+90", phoneLength: 10, phoneFormat: "+90 ### ### ## ##"},
        {name: "Ukraine", code: "UA", dialCode: "+380", phoneLength: 9, phoneFormat: "+380 ## ### ## ##"},
        {name: "United Kingdom", code: "GB", dialCode: "+44", phoneLength: 10, phoneFormat: "+44 #### ######"},
        {name: "Vatican City", code: "VA", dialCode: "+379", phoneLength: 6, phoneFormat: "+379 ## ##"}
      ],
    };
  },
  watch: {
    phoneNumber(newVal) {
      this.$emit("update:modelValue", newVal);
    },
  },

  mounted() {
    this.selectedCountry = this.countries.find(
        (c) => c.code === this.defaultCountry
    );
    if (this.selectedCountry) {
      const digitsOnly = (this.modelValue || "").replace(/\D/g, "");
      const limited = digitsOnly.slice(0, this.selectedCountry.phoneLength);

      this.phoneNumber = limited;

      this.formattedPhoneNumber = this.formatPhoneNumber(
          this.selectedCountry.phoneFormat,
          this.phoneNumber
      );
    }
  },

  methods: {
    toggleDropdown() {
      this.showDropdown = !this.showDropdown;
    },

    selectCountry(country) {
      this.selectedCountry = country;

      this.phoneNumber = "";
      this.formattedPhoneNumber = this.formatPhoneNumber(
          country.phoneFormat,
          ""
      );

      this.showDropdown = false;
    },

    onPhoneInput(event) {
      const inputValue = event.target.value;

      let digits = inputValue.replace(/\D/g, "");
      const dialCode = this.selectedCountry.dialCode.replace('+','');
      if (digits.startsWith(dialCode)) {
        digits = digits.slice(dialCode.length);
      }

      digits = digits.slice(0, this.selectedCountry.phoneLength);

      this.phoneNumber = digits;

      // Формируем маску
      this.formattedPhoneNumber = this.formatPhoneNumber(
          this.selectedCountry.phoneFormat,
          digits
      );
    },

    onKeyDown(e) {
      if (e.key === 'Backspace') {
        const inputElement = e.target;
        const start = inputElement.selectionStart;
        const end = inputElement.selectionEnd;

        if (start !== end) {
          return;
        }
        if (start === 0) {
          e.preventDefault();
          return;
        }
        e.preventDefault();

        this.phoneNumber = this.phoneNumber.slice(0, -1);
        this.formattedPhoneNumber = this.formatPhoneNumber(
            this.selectedCountry.phoneFormat,
            this.phoneNumber
        );
        this.$nextTick(() => {
          const newPos = Math.max(0, start - 1);
          inputElement.setSelectionRange(newPos, newPos);
        });
      }
    },

    formatPhoneNumber(format, digits) {
      let formatted = '';
      let digitIndex = 0;

      for (let i = 0; i < format.length; i++) {
        if (format[i] === '#') {
          if (digitIndex < digits.length) {
            formatted += digits[digitIndex++];
          } else {
            formatted += '_';
          }
        } else {
          formatted += format[i];
        }
      }
      return formatted;
    },
  },
};
</script>

<style scoped>
.phone-input {
  display: flex;
  align-items: center;
  background: #0f1126b2;
  justify-content: space-between;
  padding: 10px 20px;
  gap: 10px;
  position: relative;
  max-width: 353px;
  border-radius: 20px;
}

.dropdown {
  display: flex;
  align-items: center;
  cursor: pointer;
  gap: 8px;
}

.flag {
  width: 24px;
  height: 16px;
  border-radius: 2px;
}

.arrow {
  color: #ffffff;
  font-size: 12px;
}

input {
  flex: 1;
  border: none;
  outline: none;
  background: transparent;
  color: #B4B4B4;
  font-size: 16px;
  font-family: "Inter Tight", sans-serif;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  background: #070514;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  z-index: 1000;
  width: 100%;
  max-height: 200px;
  overflow-y: auto;
  backdrop-filter: blur(100px);
}

.dropdown-item {
  display: flex;
  align-items: center;
  padding: 10px 12px;
  cursor: pointer;
  gap: 8px;
}

.dropdown-item:hover {
  background: #2a2a2a;
}

.country-info {
  color: #ffffff;
  font-size: 14px;
}


@media (max-width: 1326px) {
  .phone-input {

    margin-top: 10px;
    width: 100%;
    color: #fff;
    max-width: 570px;
    font-size: 14px;
    background: #0F1126B2;
    border-radius: 30px;
  }
}
@media (max-width: 1016px) {
  .phone-input {
    max-width: 270px;
    width: 100%;
  }
}
@media (max-width: 752px) {
  .phone-input {
    max-width: 470px;

  }

}
@media (max-width: 700px) {
  .phone-input {
    width: 100%;
  }
}
@media (max-width: 360px) {
  .phone-input {
    width: 100%;

  }
  input {
    font-size: 14px;
  }
}
</style>
