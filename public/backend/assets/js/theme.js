"use strict";

// theme mode change
const body = document.querySelector("body");
const theme_mode = document.querySelectorAll("input[name='theme_mode']");
const themeMode = sessionStorage.getItem('user_theme');
// user_theme

if (themeMode) {
  body.classList.add(themeMode);
  // const recaptcha = document.querySelector('.g-recaptcha');
  // if(recaptcha){
  //   recaptcha.setAttribute("data-theme", "dark")
  // }
  theme_mode.forEach(function (item) {
    if (item.value == themeMode) {
      item.checked = true;
    }
  });
} else {
  body.classList.add("default-theme");
  sessionStorage.setItem("user_theme", "default-theme");
}

theme_mode.forEach(function (item) {
  item.addEventListener("change", function () {
    const lightLogo = document.getElementById("global_light_logo").value;
    const darkLogo = document.getElementById("global_dark_logo").value;
    const fullLogo = document.getElementById("sidebar_full_logo");

    body.classList.remove("default-theme");
    body.classList.remove("dark-theme");

    if(item.value == 'dark-theme'){
      fullLogo.src = darkLogo;
    }else{
      fullLogo.src = lightLogo;
    }

    body.classList.add(item.value);
    sessionStorage.setItem("user_theme", item.value);
  });
});
