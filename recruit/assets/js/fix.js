document.addEventListener("scroll", function () {
  const isMobile = window.innerWidth <= 768;
  const header = document.querySelector(".header");
  const footer = document.querySelector(".footer");
  const fixedContent = document.querySelector(".fixedBottom");
  const hamburger = document.querySelector(".hamburger");
  const headerLogo = document.querySelector(".headerLogo");

  if (!isMobile) {
    if (header && footer) {
      setupScrollHandler(header, footer, headerLogo);
    }
  } else {
    if (fixedContent) {
      fixContent(fixedContent,hamburger); 
    }
  }
});

// ヘッダー固定・解除処理
let isNavFixed = false;
function setupScrollHandler(header, footer, headerLogo) {
  const headerHeight = header.offsetHeight;

  window.addEventListener("scroll", function () {
    const scrollTop = window.pageYOffset;
    const footerTop = footer.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;

    // ヘッダーを固定する
    if (scrollTop > 0) {
      if (!isNavFixed) {
        header.classList.add("fixed");
        headerLogo.classList.add("logoHidden");
        isNavFixed = true;
      }
    } else {
      if (isNavFixed) {
        header.classList.remove("fixed");
        headerLogo.classList.remove("logoHidden");
        isNavFixed = false;
        header.style.backgroundColor = "";
      }
    }

    // フッターが見えたらヘッダーを非表示
    if (footerTop < windowHeight) {
      header.classList.add("hidden");
      if (isNavFixed) {
        header.classList.remove("fixed");
        isNavFixed = false;
      }
    } else {
      header.classList.remove("hidden");
    }
  });
}

// 画面下部での固定・解除処理
let isContentFixed = false;
function fixContent(fixedContent,hamburger) {
  const scrollTop = window.pageYOffset;
  const headerHeight = header.offsetHeight;

  if (scrollTop > headerHeight) {
    if (!isContentFixed) {
      fixedContent.classList.add("fixed");
      isContentFixed = true;
    }
  } else {
    if (isContentFixed) {
      fixedContent.classList.remove("fixed");
      isContentFixed = false;
    }
  }
}
