// Particle animation
document.addEventListener("DOMContentLoaded", function () {
    const canvas = document.getElementById("particle-canvas");
    const ctx = canvas.getContext("2d");

    // Set canvas size
    function resizeCanvas() {
        canvas.width = window.innerWidth;
        canvas.height = canvas.parentElement.offsetHeight;
    }

    resizeCanvas();
    window.addEventListener("resize", resizeCanvas);

    // Particle properties
    const particles = [];
    const particleCount = 100;

    // Create particles
    function createParticles() {
        for (let i = 0; i < particleCount; i++) {
            particles.push({
                x: Math.random() * canvas.width,
                y: Math.random() * canvas.height,
                radius: Math.random() * 2 + 0.5,
                color: `rgba(${Math.floor(
                    Math.random() * 100 + 155
                )}, ${Math.floor(Math.random() * 100 + 155)}, 255, ${
                    Math.random() * 0.5 + 0.1
                })`,
                speedX: Math.random() * 0.5 - 0.25,
                speedY: Math.random() * 0.5 - 0.25,
            });
        }
    }

    // Draw and animate particles
    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        for (let i = 0; i < particles.length; i++) {
            const p = particles[i];

            ctx.beginPath();
            ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
            ctx.fillStyle = p.color;
            ctx.fill();

            // Move particles
            p.x += p.speedX;
            p.y += p.speedY;

            // Wrap around screen
            if (p.x < 0) p.x = canvas.width;
            if (p.x > canvas.width) p.x = 0;
            if (p.y < 0) p.y = canvas.height;
            if (p.y > canvas.height) p.y = 0;

            // Draw connections between nearby particles
            for (let j = i + 1; j < particles.length; j++) {
                const p2 = particles[j];
                const dx = p.x - p2.x;
                const dy = p.y - p2.y;
                const distance = Math.sqrt(dx * dx + dy * dy);

                if (distance < 100) {
                    ctx.beginPath();
                    ctx.strokeStyle = `rgba(100, 150, 255, ${
                        0.2 * (1 - distance / 100)
                    })`;
                    ctx.lineWidth = 0.5;
                    ctx.moveTo(p.x, p.y);
                    ctx.lineTo(p2.x, p2.y);
                    ctx.stroke();
                }
            }
        }

        requestAnimationFrame(animate);
    }

    createParticles();
    animate();
});
