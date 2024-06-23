document.addEventListener("DOMContentLoaded", () => {
  const options = {
    threshold: 0.5,
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
        observer.unobserve(entry.target);
      }
    });
  }, options);

  document
    .querySelectorAll(
      ".animate-fade-in, .animate-slide-in-left, .animate-scale-up .animate-fade-in, .animate-slide-in-left, .animate-scale-up, .animate-slide-up, .animate-slide-in-right, .animate-slide-in-down, .animate-zoom-in, .animate-bounce, .animate-rotate-in, .animate-fade-in-delay, .animate-slide-in-up"
    )
    .forEach((el) => {
      observer.observe(el);
    });
});

const images = document.querySelectorAll(".animate-on-scroll");

const observer = new IntersectionObserver(
  (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
        observer.unobserve(entry.target);
      }
    });
  },
  { threshold: 0.5 }
);

images.forEach((image) => {
  observer.observe(image);
});
