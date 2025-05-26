document.addEventListener("DOMContentLoaded", function () {
  setupSmoothScroll(header);
  setupPageTopButton();
});

// スムーズスクロール処理
function setupSmoothScroll(header) {
  const anchorLinks = document.querySelectorAll('a[href^="#"]');
  anchorLinks.forEach((link) => {
    link.addEventListener("click", function (event) {
      const href = this.getAttribute("href");
      if (href === "#") {
        return;
      }
      const target = document.querySelector(href);
      if (target) {
        event.preventDefault();

        const isMobile = window.innerWidth <= 768;
        const headerHeight = header && !isMobile ? header.offsetHeight : 0;
        const offset = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;

        window.scrollTo({
          top: offset,
          behavior: "smooth",
        });

        setTimeout(function () {
          const newOffset =
            target.getBoundingClientRect().top +
            window.pageYOffset -
            headerHeight;
          if (Math.abs(window.pageYOffset - newOffset) > 1) {
            window.scrollTo({
              top: newOffset,
              behavior: "auto",
            });
          }
        }, 100);
      }
    });
  });
}

// ページトップボタン処理
function setupPageTopButton() {
  const pageTopBtn = document.querySelector(".pagetop-button");
  if (pageTopBtn) {
    pageTopBtn.addEventListener("click", function (event) {
      event.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
  }
}
