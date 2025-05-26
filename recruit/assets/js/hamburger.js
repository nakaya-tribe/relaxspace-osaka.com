document.addEventListener("DOMContentLoaded", function () {
  if (window.innerWidth <= 768) {
    // ハンバーガーボタンをクリック
    const hamButton = document.querySelector(".hamButton");
    const hamNav = document.querySelector(".hamNav");
    const hamburgerSpans = document.querySelectorAll(".hamburger span");
    const body = document.body;

    if (hamButton && hamNav) {
      hamButton.addEventListener("click", function () {
        hamNav.classList.toggle("hamNav-active");
        hamburgerSpans.forEach(span => span.classList.toggle("hamburger-active"));
        body.classList.toggle("no-scroll");
        hamburger.classList.toggle("fixedBg");
      });
    }

    // メニュー内のリンクをクリック
    const hamNavLinks = document.querySelectorAll(".hamNavLink");

    hamNavLinks.forEach(link => {
      link.addEventListener("click", function (e) {
        e.preventDefault();
        hamNav.classList.toggle("hamNav-active");
        hamburgerSpans.forEach(span => span.classList.toggle("hamburger-active"));
        body.classList.toggle("no-scroll");
        hamburger.classList.add("fixedBg");
      });
    });
  }
});
