const loc= gsap.timeline({defaults:{duration:0.75}})
loc.fromTo('.row',{scale:0},{scale:1})
loc.fromTo('.branch',{opacity:0, y:50},{opacity:1, y:0, duration:1})

