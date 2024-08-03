//doctors
gsap.fromTo('.card-desc',{opacity:0, y:50},{opacity:1, y:0, duration:1})

//about us
gsap.fromTo('.aboutus-section',{opacity:0, y:50},{opacity:1, y:0, duration:1})

//services
const icon= gsap.timeline({defaults:{duration:0.75}})
icon.fromTo('.icon',{scale:0},{scale:1})
icon.fromTo('.icon-box',{opacity:0},{opacity:1})





