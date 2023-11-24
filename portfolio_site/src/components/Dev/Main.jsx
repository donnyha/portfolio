import Typewriter from './Typewriter';
const typewriterStrings = [
    'Developer.', 
    'Designer.',
];


export default function Main() {
  return (
    <div id="main" className="para">
        <div className="flex flex-row">
            <div className="basis-1/6"></div>
            <div className="basis-4/6">
                <h1>
                    Hi,<br />
                    my name is Donny<br />
                    and I am a <div className="inline-block"><Typewriter strings={ typewriterStrings } /></div>
                </h1>
            </div>
            <div className="basis-1/6"></div>
        </div>

        <div className="center-container">
            <div className="social-icons">
                <span><a href="https://github.com/donnyha" target="_blank" rel="noreferrer"><img className="responsive" src="images/svg/github.svg" alt="github" height="30px" data-aos="fade-up" data-aos-delay="700" data-aos-offset="-300" /></a></span>
                <span><a href="https://www.linkedin.com/in/donnyha/" target="_blank" rel="noreferrer"><img className="responsive" src="images/svg/linkedin.svg" alt="linkedin" height="30px" data-aos="fade-up" data-aos-delay="800" data-aos-offset="-300" /></a></span>
                <span><a href="./documents/donnyha_resume.pdf" target="_blank"><img className="responsive" id="mail" src="images/svg/resume.svg" alt="email" height="30px" data-aos="fade-up" data-aos-delay="900" data-aos-offset="-300" /></a></span>
            </div>
        </div>

        <div className="scroll-down">
            <a href="#about-me">
                <p>scroll down</p>
                <img className="arrow-down" src="images/svg/arrow.svg" alt="arrow down" height="40px" />
            </a>
        </div>
    </div>
  );
}