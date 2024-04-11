document.addEventListener('DOMContentLoaded', function () {
    let controller = new ScrollMagic.Controller();

    let timeline1 = gsap.timeline();
    timeline1.from("#animation1", { duration: 1, x: -200, opacity: 0 });
    new ScrollMagic.Scene({
        triggerElement: "#animation1",
        triggerHook: 1,
        reverse: true
    })
        .setTween(timeline1)
        .addTo(controller);

    let timeline2 = gsap.timeline();
    timeline2.from("#animation2", { duration: 1, x: 200, opacity: 0 });
    new ScrollMagic.Scene({
        triggerElement: "#animation2",
        triggerHook: 1,
        reverse: true
    })
        .setTween(timeline2)
        .addTo(controller);

    let timeline3 = gsap.timeline();
    timeline3.from("#animation3", { duration: 1, y: -200, opacity: 0 });
    new ScrollMagic.Scene({
        triggerElement: "#animation3",
        triggerHook: 1,
        reverse: true
    })
        .setTween(timeline3)
        .addTo(controller);

    let timeline4 = gsap.timeline();
    timeline4.from("#animation4", { duration: 1, y: 200, opacity: 0 });
    new ScrollMagic.Scene({
        triggerElement: "#animation4",
        triggerHook: 1,
        reverse: true
    })
        .setTween(timeline4)
        .addTo(controller);

    let timeline5 = gsap.timeline();
    timeline5.from("#animation5", { duration: 1, x: -200, opacity: 0 });
    new ScrollMagic.Scene({
        triggerElement: "#animation5",
        triggerHook: 1,
        reverse: true
    })
        .setTween(timeline5)
        .addTo(controller);

    let timeline6 = gsap.timeline();
    timeline6.from("#animation6", { duration: 1, x: -200, opacity: 0 });
    new ScrollMagic.Scene({
        triggerElement: "#animation6",
        triggerHook: 1,
        reverse: true
    })
        .setTween(timeline6)
        .addTo(controller);

    let timeline7 = gsap.timeline();
    timeline7.from("#animation7", { duration: 1, y: 200, opacity: 0 });
    new ScrollMagic.Scene({
        triggerElement: "#animation7",
        triggerHook: 1,
        reverse: true
    })
        .setTween(timeline7)
        .addTo(controller);

    let timeline8 = gsap.timeline();
    timeline8.from("#animation8", { duration: 1, y: 200, opacity: 0 });
    new ScrollMagic.Scene({
        triggerElement: "#animation8",
        triggerHook: 1,
        reverse: true
    })
        .setTween(timeline8)
        .addTo(controller);

    let timeline9 = gsap.timeline();
    timeline9.from("#animation9", { duration: 1, x: -200, opacity: 0 });
    new ScrollMagic.Scene({
        triggerElement: "#animation9",
        triggerHook: 1,
        reverse: true
    })
        .setTween(timeline9)
        .addTo(controller);

    let timeline10 = gsap.timeline();
    timeline10.from("#animation10", { duration: 1, y: 200, opacity: 0 });
    new ScrollMagic.Scene({
        triggerElement: "#animation10",
        triggerHook: 1,
        reverse: true
    })
        .setTween(timeline10)
        .addTo(controller);

    let timeline11 = gsap.timeline();
    timeline11.from("#animation11", { duration: 1, y: 200, opacity: 0 });
    new ScrollMagic.Scene({
        triggerElement: "#animation11",
        triggerHook: 1,
        reverse: true
    })
        .setTween(timeline11)
        .addTo(controller);

    let timeline12 = gsap.timeline();
    timeline12.from("#animation12", { duration: 1, x: -200, opacity: 0 });
    new ScrollMagic.Scene({
        triggerElement: "#animation12",
        triggerHook: 1,
        reverse: true
    })
        .setTween(timeline12)
        .addTo(controller);

    let timeline12_5 = gsap.timeline();
    timeline12_5.from("#animation12_5", { duration: 1, y: 150, opacity: 0 });
    new ScrollMagic.Scene({
        triggerElement: "#animation12_5",
        triggerHook: 1,
        reverse: true
    })
        .setTween(timeline12_5)
        .addTo(controller);

    let timeline13 = gsap.timeline();
    timeline13.from("#animation13", { duration: 1, y: 200, opacity: 0 });
    new ScrollMagic.Scene({
        triggerElement: "#animation13",
        triggerHook: 1,
        reverse: true
    })
        .setTween(timeline13)
        .addTo(controller);

    let timeline14 = gsap.timeline();
    timeline14.from("#animation14", { duration: 1, y: 200, opacity: 0 });
    new ScrollMagic.Scene({
        triggerElement: "#animation14",
        triggerHook: 1,
        reverse: true
    })
        .setTween(timeline14)
        .addTo(controller);

    let timeline15 = gsap.timeline();
    timeline15.from("#animation15", { duration: 1, y: 200, opacity: 0 });
    new ScrollMagic.Scene({
        triggerElement: "#animation15",
        triggerHook: 1,
        reverse: true
    })
        .setTween(timeline15)
        .addTo(controller);

    let timeline16 = gsap.timeline();
    timeline16.from("#animation16", { duration: 1, x: -200, opacity: 0 });
    new ScrollMagic.Scene({
        triggerElement: "#animation16",
        triggerHook: 1,
        reverse: true
    })
        .setTween(timeline16)
        .addTo(controller);

    let timeline17 = gsap.timeline();
    timeline17.from("#animation17", { duration: 1, x: 200, opacity: 0 });
    new ScrollMagic.Scene({
        triggerElement: "#animation17",
        triggerHook: 1,
        reverse: true
    })
        .setTween(timeline17)
        .addTo(controller);

    let timeline18 = gsap.timeline();
    timeline18.from("#animation18", { duration: 1, x: -200, opacity: 0 });
    new ScrollMagic.Scene({
        triggerElement: "#animation18",
        triggerHook: 1,
        reverse: true
    })
        .setTween(timeline18)
        .addTo(controller);
});

document.addEventListener('DOMContentLoaded', function () {
    // เลือกปุ่ม Learn More
    var lookMoreBtn = document.getElementById('lookMoreBtn');

    // เพิ่ม event listener
    lookMoreBtn.addEventListener('click', function (event) {
        // ป้องกันการรีโหลดหน้าเว็บ (ถ้า href="#")
        event.preventDefault();

        var pro_card_selec = document.getElementById('pro_card');

        pro_card_selec.scrollIntoView({ behavior: 'smooth' });
    });
});

var typed = new Typed(".text", {
    strings: ["AI Engineer", "Data Scientist", "Full Stack Developer"],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true
})