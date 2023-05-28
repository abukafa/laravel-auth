<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} | Vascomm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
</head>
<style>
  .dark-mode {
    background-color: var(--bs-dark-text-emphasis);
    color: var(--bs-body-bg);
  }
</style>

<body>

    @include('layouts.navbar')

    <div class="container">
        @yield('container')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    <script>
        /*!
         * Color mode toggler for Bootstrap's docs (https://getbootstrap.com/)
         * Copyright 2011-2023 The Bootstrap Authors
         * Licensed under the Creative Commons Attribution 3.0 Unported License.
         */
        (() => {
          "use strict";
  
          const storedTheme = localStorage.getItem("theme");
  
          const getPreferredTheme = () => {
            if (storedTheme) {
              return storedTheme;
            }
  
            return window.matchMedia("(prefers-color-scheme: dark)").matches
              ? "dark"
              : "light";
          };
  
          const setTheme = function (theme) {
            if (
              theme === "auto" &&
              window.matchMedia("(prefers-color-scheme: dark)").matches
            ) {
              document.documentElement.setAttribute("data-bs-theme", "dark");
            } else {
              document.documentElement.setAttribute("data-bs-theme", theme);
            }
          };
  
          setTheme(getPreferredTheme());
  
          const showActiveTheme = (theme, focus = false) => {
            const themeSwitcher = document.querySelector("#bd-theme");
  
            if (!themeSwitcher) {
              return;
            }
  
            const themeSwitcherText = document.querySelector("#bd-theme-text");
            const activeThemeIcon = document.querySelector(".theme-icon-active");
            const btnToActive = document.querySelector(
              `[data-bs-theme-value="${theme}"]`
            );
            const iconOfActiveBtn = btnToActive
              .querySelector("i")
              .getAttribute("data-theme-icon");
  
            document
              .querySelectorAll("[data-bs-theme-value]")
              .forEach((element) => {
                element.classList.remove("active");
                element.setAttribute("aria-pressed", "false");
              });
  
            btnToActive.classList.add("active");
            btnToActive.setAttribute("aria-pressed", "true");
            activeThemeIcon.classList.remove(
              activeThemeIcon.getAttribute("data-theme-icon-active")
            );
            activeThemeIcon.classList.add(iconOfActiveBtn);
            activeThemeIcon.setAttribute(
              "data-theme-icon-active",
              iconOfActiveBtn
            );
            const themeSwitcherLabel = `${
              themeSwitcherText.textContent
            } (${btnToActive.getAttribute("data-bs-theme-value")})`;
            themeSwitcher.setAttribute("aria-label", themeSwitcherLabel);
  
            if (focus) {
              themeSwitcher.focus();
            }
          };
  
          window
            .matchMedia("(prefers-color-scheme: dark)")
            .addEventListener("change", () => {
              if (storedTheme !== "light" || storedTheme !== "dark") {
                setTheme(getPreferredTheme());
              }
            });
  
          window.addEventListener("DOMContentLoaded", () => {
            showActiveTheme(getPreferredTheme());
  
            document
              .querySelectorAll("[data-bs-theme-value]")
              .forEach((toggle) => {
                toggle.addEventListener("click", () => {
                  const theme = toggle.getAttribute("data-bs-theme-value");
                  localStorage.setItem("theme", theme);
                  setTheme(theme);
                  showActiveTheme(theme, true);
                });
              });
          });
        })();
      </script>
</body>

</html>