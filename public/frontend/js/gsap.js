gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

// create the smooth scroller FIRST!
let smoother = ScrollSmoother.create({
  smooth: 1,   // seconds it takes to "catch up" to native scroll position
  effects: true // look for data-speed and data-lag attributes on elements and animate accordingly
});

gsap.registerPlugin(ScrollTrigger);

// Images parallax
gsap.utils.toArray('.img-container').forEach(container => {
  const img = container.querySelector('img');

  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: container,
      scrub: true,
      pin: false,
    }
  });

  tl.fromTo(img, {
    yPercent: -20,
    ease: 'none'
  }, {
    yPercent: 20,
    ease: 'none'
  });
});


