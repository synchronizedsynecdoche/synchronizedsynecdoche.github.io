window.onload = function() {
	Particles.init({
		selector: '.particles',
		color: '#1a4892',
		speed: 0.3,
		maxParticles: 100,
		sizeVariations: 2,

		connectParticles: true,
		responsive: [
			{
			breakpoint: 3000,
			options: { maxParticles: 200 }
			},  {
			breakpoint: 1500,
			options: { maxParticles: 120 }
			},  {
			breakpoint: 768,
			options: { maxParticles: 80 }
			},  {
			breakpoint: 375,
			options: { maxParticles: 40 }
			},  {
			breakpoint: 100,
			options: { maxParticles: 20 }
			}
		]
	});
};