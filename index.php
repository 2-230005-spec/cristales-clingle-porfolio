<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Clingle Anne Cristales | Portfolio</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
/* GLOBAL STYLES */
html {
    scroll-behavior: smooth;
    scroll-padding-top: 80px;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
}

body {
    background-color: #932F6D;
    color: #1a1a1a;
    line-height: 1.6;
    overflow-x: hidden;
}

section {
    padding: 100px 10%;
    min-height: 90vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

/* NAVBAR */
header {
    position: sticky;
    top: 0;
    z-index: 1000;
    background: #420039;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 8%;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

header h2 {
    color: #F6F2FF;
    font-size: 1.5rem;
}

nav a {
    margin-left: 30px;
    text-decoration: none;
    color: #CFBCFA;
    font-weight: 500;
    transition: 0.3s;
}

nav a:hover {
    color: #F6F2FF;
}

/* HERO SECTION */
.hero {
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #420039, #932F6D, #B176B4);
    color: white;
    text-align: center;
}

.hero-box {
    background: #F6F2FF;
    padding: 60px;
    border-radius: 20px;
    max-width: 800px;
    color: #1a1a1a;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}

.hero-box h1 {
    font-size: 3rem;
    line-height: 1.2;
    margin-bottom: 20px;
    color: #420039;
}

.hero-box p {
    font-size: 1.2rem;
    margin-bottom: 30px;
    opacity: 0.8;
}

.buttons {
    display: flex;
    gap: 15px;
    justify-content: center;
}

.buttons a {
    text-decoration: none;
    padding: 14px 32px;
    border-radius: 8px;
    font-weight: 600;
    transition: 0.3s;
}

.btn-primary {
    background: #420039;
    color: white;
}

.btn-secondary {
    color: #420039;
    border: 2px solid #420039;
}

/* SECTION TITLES */
.section-title {
    text-align: center;
    color: white;
    font-size: 2.5rem;
    margin-bottom: 50px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

/* ABOUT SIDE-BY-SIDE */
.about-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 60px;
    max-width: 1100px;
    margin: 0 auto;
}

.about-text {
    flex: 1;
    color: #F6F2FF;
}

.about-text h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    color: white;
}

.about-text p {
    font-size: 1.1rem;
    line-height: 1.8;
}

.about-side-image img {
    width: 380px;
    height: 450px;
    object-fit: cover;
    border-radius: 20px;
    border: 4px solid rgba(255,255,255,0.1);
    box-shadow: 15px 15px 0px #420039;
}

/* SKILLS */
.skills-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 25px;
    max-width: 1000px;
    margin: 0 auto;
    width: 100%;
}

.skill-box {
    padding: 30px 20px;
    border-radius: 15px;
    background: #F6F2FF;
    text-align: center;
    font-weight: 600;
    color: #420039;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: 0.4s;
}

/* PROJECTS */
.projects-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    width: 100%;
}

.project-card {
    padding: 20px;
    border-radius: 15px;
    background: #F6F2FF;
    transition: 0.4s;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.project-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 10px;
    margin-bottom: 15px;
}

/* CONTACT */
.contact-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 40px;
}

.contact-form {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    padding: 40px;
    border-radius: 20px;
    width: 100%;
    max-width: 600px;
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.contact-form input, .contact-form textarea {
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    border-radius: 8px;
    border: none;
    background: rgba(255, 255, 255, 0.9);
}

.contact-btn {
    width: 100%;
    padding: 15px;
    border-radius: 8px;
    background: #420039;
    color: white;
    font-weight: 600;
    cursor: pointer;
    border: none;
}

/* FOOTER */
footer {
    text-align: center;
    padding: 40px;
    background: #420039;
    color: #CFBCFA;
}

/* RESPONSIVE */
@media (max-width: 992px) {
    .about-container {
        flex-direction: column;
        text-align: center;
    }
    .about-text { order: 2; }
    .about-side-image { order: 1; }
    .about-side-image img {
        width: 100%;
        max-width: 320px;
        height: auto;
    }
}

/* ANIMATIONS */
.fade-in {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s ease-out;
}

.fade-in.show {
    opacity: 1;
    transform: translateY(0);
}
</style>
</head>

<body>

<header>
    <h2>Portfolio</h2>
    <nav>
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#skills">Skills</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>
    </nav>
</header>

<section id="home" class="hero">
    <div class="hero-box fade-in">
        <h1>Hello, I'm Clingle.<br>I'm a Website Developer.</h1>
        <p>I design and build clean, modern, and responsive websites that help businesses and professionals build their online presence.</p>
        <div class="buttons">
            <a href="#contact" class="btn-primary">Let's Talk</a>
            <a href="#projects" class="btn-secondary">View Projects</a>
        </div>
    </div>
</section>

<section id="about">
    <div class="about-container">
        <div class="about-text fade-in">
            <h2>About Me</h2>
            <p>
                I am a passionate web developer dedicated to creating visually stunning and highly functional digital experiences. With a sharp eye for detail and a deep understanding of modern web technologies.
                <br><br>
                Whether it's building a responsive landing page or a full-scale professional portfolio, my goal is to deliver excellence in every pixel.
            </p>
        </div>
        <div class="about-side-image fade-in">
            <img src="pics/pfp.png">
        </div>
    </div>
</section>

<section id="skills">
    <h2 class="section-title fade-in">My Skills</h2>
    <div class="skills-list">
        <div class="skill-box fade-in">HTML & CSS</div>
        <div class="skill-box fade-in">JavaScript</div>
        <div class="skill-box fade-in">Responsive Design</div>
        <div class="skill-box fade-in">UI / UX Basics</div>
        <div class="skill-box fade-in">Git & GitHub</div>
        <div class="skill-box fade-in">SEO Fundamentals</div>
    </div>
</section>

<section id="projects">
    <h2 class="section-title fade-in">Featured Projects</h2>
    <div class="projects-grid">
        <div class="project-card fade-in">
            <img src="https://picsum.photos/400/250?1" alt="Project 1">
            <h3>Portfolio Website</h3>
            <p>Personal portfolio built with modern HTML5 and CSS3 techniques.</p>
        </div>
        <div class="project-card fade-in">
            <img src="https://picsum.photos/400/250?2" alt="Project 2">
            <h3>Business Website</h3>
            <p>Professional website focused on lead generation and brand identity.</p>
        </div>
        <div class="project-card fade-in">
            <img src="https://picsum.photos/400/250?3" alt="Project 3">
            <h3>Landing Page</h3>
            <p>High-converting landing page design for product launches.</p>
        </div>
    </div>
</section>

<section id="contact">
    <h2 class="section-title fade-in">Contact Me</h2>
    <div class="contact-container">
        <div class="contact-info fade-in">
            <p><i class="fas fa-envelope"></i> clinglecristales@email.com</p>
            <p><i class="fas fa-phone"></i> +63 912 345 6789</p>
            <p><i class="fab fa-linkedin"></i> linkedin.com/in/clinglecristales</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
            </div>
        </div>

        <form class="contact-form fade-in">
            <input type="text" placeholder="Your name" required>
            <input type="email" placeholder="your.email@example.com" required>
            <textarea rows="5" placeholder="Your message here..." required></textarea>
            <button class="contact-btn">Send Message</button>
        </form>
    </div>
</section>

<footer>
    <p>© 2026 Clingle Anne Cristales. All Rights Reserved.</p>
</footer>

<script>
/* PERMANENT ANIMATION SCRIPT */
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            // Adds class when entering view
            entry.target.classList.add("show");
        } else {
            // Removes class when leaving view (enables re-animation)
            entry.target.classList.remove("show");
        }
    });
}, { threshold: 0.1 });

document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
</script>

</body>
</html>