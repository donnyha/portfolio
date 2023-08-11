export default function Projects() {
  return (
    <div id="contact" className="para">
        <h2 data-aos="fade-up">Contact</h2>
        <div id="contact-container" data-aos="fade-up" data-aos-delay="100">
            <p>
                If you have any burning questions,<br /> 
                please feel free to contact me via below methods.<br />
                The first coffee is on me
            </p>
        </div>

        <div className="center-container">
            <div className="social-icons">
                <span><a href="https://github.com/donnyha" target="_blank" rel="noreferrer"><img className="responsive" src="images/svg/github.svg" alt="github" height="30px" data-aos="fade-up" data-aos-delay="150" data-aos-offset="-100" /></a></span>
                <span><a href="https://www.linkedin.com/in/donnyha/" target="_blank" rel="noreferrer"><img className="responsive" src="images/svg/linkedin.svg" alt="linkedin" height="30px" data-aos="fade-up" data-aos-delay="200" data-aos-offset="-100" /></a></span>
                <span><a href="./documents/donnyha_resume.pdf" target="_blank"><img className="responsive" id="mail" src="images/svg/resume.svg" alt="email" height="30px" data-aos="fade-up" data-aos-delay="250" data-aos-offset="-100" /></a></span>
            </div>
        </div>
    </div>
  );
}