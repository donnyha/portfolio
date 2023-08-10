export default function Nav() {
  return (
    <nav id="navbar">
        <a href="#" id="logo-link"><img id="logo" src="./images/svg/logo-dh.svg" data-aos="fade-down" height="50px"></a>
        <ul>
            <li data-aos="fade-down" data-aos-delay="100"><a href="#about-me">about me</a></li>
            <li data-aos="fade-down" data-aos-delay="200"><a href="#projects">projects</a></li>
            <li data-aos="fade-down" data-aos-delay="300"><a href="#contact">contact</a></li>
        </ul>
        <span class="social">
            <a href="https://github.com/donnyha" target="_blank" data-aos="fade-down" data-aos-delay="400"><img class="responsive" src="/images/svg/github.svg" /></a>
            <a href="https://www.linkedin.com/in/donnyha/" target="_blank" data-aos="fade-down" data-aos-delay="500"><img class="responsive" src="/images/svg/linkedin.svg" /></a>
            <a href="./documents/donnyha_resume.pdf" target="_blank" data-aos="fade-down" data-aos-delay="600"><img id="email" class="responsive" src="/images/svg/resume.svg" /></a>
        </span>
    </nav>
  ) 
}