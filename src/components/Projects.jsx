import { ReactComponent as GitHubLogo } from './../images/svg/github.svg';
import { ReactComponent as LinkLogo } from './../images/svg/link.svg';
import GoldenBoy from './../images/golde-boy.png';
import Menu from './../images/menu.png';
import Burgerpeg from './../images/burgerpeg.png';

export default function Projects() {
    const title = 'Projects';

    return (
        <div id="projects" className="para" data-aos="fade-up">
            <h2>{ title }</h2>
            
            {/* Row 1 */}
            <div className="row-odd" data-aos="fade-left" data-aos-delay="100" data-aos-offset="250">
                <div className="img-container overflow-hidden">
                    <a href="/projects/golden-boy-brewing-company" target='_blank'  rel="noreferrer">
                        <img src={ GoldenBoy } alt="winnitap" height="189px" className="hover:scale-110 transition duration-500 cursor-pointer object-cover" />
                    </a>
                </div>

                <div className="project-container m-1">
                    <h3 className="project-title">Golden Boy Brewing Co.</h3>
                    <p className="project-description">Brewery site built with custom theme</p>
                    <br />

                    <div className="project-skills">
                        <span className="skills-used">HTML</span>
                        <span className="skills-used">CSS</span> 
                        <span className="skills-used">JavaScript</span>
                        <span className="skills-used">jQuery</span>
                        <span className="skills-used">WordPress</span>
                    </div>

                    <div className="external-links">
                        <a href="https://github.com/donnyha/golden-boy-brewing-company" target="_blank" rel="noreferrer" className="inline-block m-2">
                            <GitHubLogo alt="github" height="22px" />
                        </a>
                        <a href="/projects/golden-boy-brewing-company" target="_blank" rel="noreferrer" className="inline-block m-2">
                            <LinkLogo alt="link" height="22px" />
                        </a>
                    </div>
                </div>
            </div>

            {/* Row 2 */}
            <div className="row-even" data-aos="fade-right" data-aos-delay="100" data-aos-offset="250">
                <div className="project-container m-2">
                    <h3 className="project-title">Menu Decider</h3>
                    <p className="project-description">Web Application that allows users to randomly<br />generate menu items</p>
                    <br />

                    <div className="project-skills">
                        <span className="skills-used">HTML</span>
                        <span className="skills-used">Tailwind CSS</span>
                        <span className="skills-used">Vue.js</span>
                        <span className="skills-used">API</span>
                    </div>

                    <div className="external-links">
                        <a href="https://github.com/donnyha/random-recipe-generator" target="_blank" rel="noreferrer" className="inline-block m-2">
                            <GitHubLogo />
                        </a>
                        <a href="/projects/menu-decider" target="_blank" rel="noreferrer" className="inline-block m-2">
                            <LinkLogo alt="link" />
                        </a>
                    </div>

                </div>
                <div className="img-container overflow-hidden">
                    <a href="/projects/menu-decider" target="_blank" rel="noreferrer"><img src={ Menu } alt="menu decider" height="189px" className="hover:scale-110 transition duration-500 cursor-pointer object-cover" /></a>
                </div>
            </div>

            {/* Row 3 */}
            <div className="row-odd" data-aos="fade-left" data-aos-delay="100" data-aos-offset="250">
                <div className="img-container overflow-hidden">
                    <a href="/projects/burgerpeg" target="_blank" rel="noreferrer">
                        <img src={ Burgerpeg } alt="burgerpeg" height="189px" className="hover:scale-110 transition duration-500 cursor-pointer object-cover" />
                    </a>
                </div>

                <div className="project-container m-2">
                    <h3 className="project-title">Burgerpeg</h3>
                    <p className="project-description">Brochure site for a burger restaurant in Winnipeg</p>
                    <br />

                    <div className="project-skills">
                        <span className="skills-used">HTML</span> 
                        <span className="skills-used">SASS</span> 
                        <span className="skills-used">JavaScript</span>
                    </div>

                    <div className="external-links">
                        <a href="https://github.com/donnyha/burgerpeg" target="_blank" rel="noreferrer" className="inline-block m-2">
                            <GitHubLogo alt="github" />
                        </a>
                        <a href="/projects/burgerpeg" target="_blank" rel="noreferrer" className="inline-block m-2">
                            <LinkLogo alt="link" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    );
}