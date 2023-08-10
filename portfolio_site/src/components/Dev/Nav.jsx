import { ReactComponent as SiteLogo } from './../../images/svg/logo-dh.svg';
import { ReactComponent as GitHubLogo } from './../../images/svg/github.svg';
import { ReactComponent as LinkedInLogo } from './../../images/svg/linkedin.svg';
import { ReactComponent as ResumeLogo } from './../../images/svg/resume.svg';

export default function Nav() {
  return (
    <nav id="navbar" className="bg-nav-bg shadow-nav-shadow h-16 transition-top grid grid-cols-nav-gridCols fixed top-0 w-full z-50">
        <a href="/dev" id="logo-link">
          <SiteLogo data-aos="fade-down" />
        </a>
        <ul className="flex justify-evenly items-center list-none m-0">
            <li data-aos="fade-down" data-aos-delay="100" className="flex items-center"><a href="#about-me" className="text-white no-underline font-bold text-lg transition-colors hover:text-pink-500">about me</a></li>
            <li data-aos="fade-down" data-aos-delay="200" className="flex items-center"><a href="#projects">projects</a></li>
            <li data-aos="fade-down" data-aos-delay="300" className="flex items-center"><a href="#contact">contact</a></li>
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