import { ReactComponent as GitHubLogo } from './../images/svg/github.svg';
import { ReactComponent as LinkedInLogo } from './../images/svg/linkedin.svg';
import { ReactComponent as ResumeLogo } from './../images/svg/resume.svg';


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
                <span>
                    <a href="https://github.com/donnyha" target="_blank" rel="noreferrer">
                        <GitHubLogo className="responsive" alt="github" height="30px" data-aos="fade-up" data-aos-delay="150" data-aos-offset="-100" />
                    </a>
                </span>
                <span>
                    <a href="https://www.linkedin.com/in/donnyha/" target="_blank" rel="noreferrer">
                        <LinkedInLogo className="responsive" alt="linkedin" height="30px" data-aos="fade-up" data-aos-delay="200" data-aos-offset="-100" />
                    </a>
                </span>
                <span>
                    <a href="./documents/donnyha_resume.pdf" target="_blank">
                        <ResumeLogo id="mail" className="responsive" alt="resume" height="30px" data-aos="fade-up" data-aos-delay="250" data-aos-offset="-100" />
                    </a>
                </span>
            </div>
        </div>
    </div>
  );
}