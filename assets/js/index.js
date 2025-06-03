document.addEventListener("DOMContentLoaded", function () {
  const header = document.querySelector(".header");
  const fixedContent = document.querySelector(".fixedBottom");

  if (header) {
    const offsetTop = header.offsetTop;
    let isNavFixed = false;

    const updateHeaderState = () => {
      const scrollTop = window.scrollY || window.pageYOffset;
      const isMobile = window.innerWidth <= 768;
  
      if (scrollTop > offsetTop) {
        if (!isNavFixed && isMobile) {
          fixedContent.classList.add("fixed");
          isNavFixed = true;
        }
        else if(!isNavFixed && !isMobile) {
          header.classList.add("fixed");
          isNavFixed = true;
        }
      } else {
        if (isNavFixed) {
          header.classList.remove("fixed");
          fixedContent.classList.remove("fixed");
          isNavFixed = false;
        }
      }
    };

    window.addEventListener("scroll",updateHeaderState);
    window.addEventListener("resize",updateHeaderState);
  }

  // フェードインアニメーション
  const fadeInElements = document.querySelectorAll(".fadeIn1");
  const handleIntersection = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show-fadeIn1");
        observer.unobserve(entry.target);
      }
    });
  };
  const observer = new IntersectionObserver(handleIntersection);
  fadeInElements.forEach((element) => {
    observer.observe(element);
  });
});