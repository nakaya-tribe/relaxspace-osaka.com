document.addEventListener("DOMContentLoaded", function () {
  const hamburger = document.querySelector(".hamburger");
  const hiddenContents = document.querySelectorAll(".hiddenContent");

  if (hamburger) {
    const hamNav = document.querySelector(".hamNav");
    const hamburgerSpans = hamburger.querySelectorAll("span");

    hamburger.addEventListener("click", function () {
      if (hamNav) {
        const isHamNavActive = hamNav.classList.contains("hamNav-active");
        
        // ナビゲーションの表示/非表示を切り替え
        hamNav.classList.toggle("hamNav-active");
        
        // ハンバーガーアイコンの表示を切り替え
        hamburger.classList.toggle("hamburgerActive")
        hamburgerSpans.forEach((span) => {
          span.classList.toggle("hamBarActive");
        });

        // 隠しコンテンツの表示を切り替え（必要に応じて）
        hiddenContents.forEach((content) => {
          content.classList.toggle("afterHidden", !isHamNavActive);
        });

        // スクロールロックの切り替え
        if (hamNav.classList.contains("hamNav-active")) {
          document.body.classList.add("no-scroll");
        } else {
          document.body.classList.remove("no-scroll");
        }
      }
    });
  }
});