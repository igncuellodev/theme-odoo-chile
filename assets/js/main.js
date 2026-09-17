const script = document.createElement("script");

script.src = "https://unpkg.com/lenis@1.3.14/dist/lenis.min.js";

script.onload = () => {
  const lenis = new Lenis({
    smoothWheel: true,
    lerp: 0.1,
  });

  function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
  }

  requestAnimationFrame(raf);
};

document.head.appendChild(script);
