import { ReactComponent as SiteLogo } from './../../images/svg/logo-dh.svg';
import { ReactComponent as GitHubLogo } from './../../images/svg/github.svg';
import { ReactComponent as LinkedInLogo } from './../../images/svg/linkedin.svg';
import { ReactComponent as ResumeLogo } from './../../images/svg/resume.svg';

export default function Nav() {
  return (
    <nav id="navbar">
        <a href="/dev" id="logo-link">
          <SiteLogo data-aos="fade-down" />
        </a>
        <ul>
            <li data-aos="fade-down" data-aos-delay="100"><a href="#about-me">about me</a></li>
            <li data-aos="fade-down" data-aos-delay="200"><a href="#projects">projects</a></li>
            <li data-aos="fade-down" data-aos-delay="300"><a href="#contact">contact</a></li>
        </ul>
        <span className="social">
            <a href="https://github.com/donnyha" target="_blank" rel="noreferrer" data-aos="fade-down" data-aos-delay="400">
              <GitHubLogo />
            </a>
            <a href="https://www.linkedin.com/in/donnyha/" target="_blank" rel="noreferrer" data-aos="fade-down" data-aos-delay="500">
              <LinkedInLogo />
            </a>
            <a href="./documents/donnyha_resume.pdf" target="_blank" rel="noreferrer" data-aos="fade-down" data-aos-delay="600">
              <ResumeLogo />
            </a>
        </span>
    </nav>
  ) 
}