document.addEventListener("DOMContentLoaded", function () {
  const navLinks = document.querySelectorAll(".navLink");
  const sections = Array.from(navLinks)
    .map(link => document.querySelector(link.getAttribute("href")))
    .filter(section => section !== null);

  function onScroll() {
    let currentSection = null;
    const scrollPos = window.scrollY + window.innerHeight * 3/4;

    for (let section of sections) {
      if (section.offsetTop <= scrollPos) {
        currentSection = section;
      }
    }

    navLinks.forEach(link => {
      const href = link.getAttribute("href").replace("#", "");
      const isActive = currentSection && currentSection.id === href;
      link.classList.toggle("lampActive", isActive);
    });
  }

  window.addEventListener("scroll", onScroll);
  onScroll(); // 初期表示時にも実行
});
