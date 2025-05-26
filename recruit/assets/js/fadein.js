document.addEventListener("DOMContentLoaded", function () {
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
