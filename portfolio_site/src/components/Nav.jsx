import { useState, useEffect } from 'react';

import { ReactComponent as SiteLogo } from './../images/svg/logo-dh.svg';
import { ReactComponent as GitHubLogo } from './../images/svg/github.svg';
import { ReactComponent as LinkedInLogo } from './../images/svg/linkedin.svg';
import { ReactComponent as ResumeLogo } from './../images/svg/resume.svg';

export default function Nav() {
  const [ show, setShow ] = useState(true);
  const [ prevScrollPos, setPrevScrollPos ] = useState(0);
  const baseNavClass = 'transition-transform duration-300 ease-in-out';
  let navShowHideClassNames = 'transform translate-y-0';
  
  useEffect(() => {
    const handleScroll = () => {
      const currentScrollPos = window.scrollY;
      const isScrolledDown = prevScrollPos > currentScrollPos;
      setShow(isScrolledDown);
      setPrevScrollPos(currentScrollPos);
    };

    window.addEventListener('scroll', handleScroll);
    return () => {
      window.removeEventListener('scroll', handleScroll);
    };
  }, [prevScrollPos]);

  if (show === false) {
    navShowHideClassNames = 'transform -translate-y-full';
  } else {
    navShowHideClassNames = 'transform translate-y-0';
  }
  
  return (
    <nav id="navbar" className={ baseNavClass + navShowHideClassNames }>
      <span className="social">
        <span></span>
        
        <a href="/" id="logo-link">
          <SiteLogo data-aos="fade-down" />
        </a>
        
        <span></span>
      </span>
      <ul>
          <li data-aos="fade-down" data-aos-delay="100"><a href="#about-me">About me</a></li>
          <li data-aos="fade-down" data-aos-delay="200"><a href="#projects">Projects</a></li>
          <li data-aos="fade-down" data-aos-delay="300"><a href="#contact">Contact</a></li>
      </ul>
      <span className="social">
          <a href="https://github.com/donnyha" target="_blank" rel="noreferrer" data-aos="fade-down" data-aos-delay="400">
            <GitHubLogo />
          </a>
          <a href="https://www.linkedin.com/in/donnyha/" target="_blank" rel="noreferrer" data-aos="fade-down" data-aos-delay="500">
            <LinkedInLogo />
          </a>
          <a href="../../public/documents/donny_ha_resume.pdf" target="_blank" rel="noreferrer" data-aos="fade-down" data-aos-delay="600">
            <ResumeLogo />
          </a>
      </span>
    </nav>
  ) 
}