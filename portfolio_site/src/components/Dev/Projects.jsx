import { ReactComponent as GitHubLogo } from './../../images/svg/github.svg';
import Winnitap from './../../images/winnitap.png';

export default function Projects() {
    const title = 'Projects';
    return (
        <div id="projects" className="para" data-aos="fade-up">
            <h2>{ title }</h2>

            <div className="row-odd" data-aos="fade-left" data-aos-delay="100" data-aos-offset="250">
                <div className="img-container">
                    <a href="http://capstone.wdd-donny.xyz/"><img src={Winnitap} alt="winnitap" height="189px" /></a>
                </div>
                <div className="project-container">
                    <h3 className="project-title">Winnitap</h3>
                    <p className="project-description">
                        Beer comparison site that allows users to leave reviews on beer they drank
                    </p>
                    <br />
                    <p className="project-skills">
                        <strong>Front End</strong>: HTML, SASS, JavaScript, jQuery<br />
                        <strong>Back End</strong>: PHP, MySQL
                    </p>
                    <div className="exteral-links">
                        <a href="https://github.com/donnyha/portfolio/tree/main/winnitap" target="_blank" rel="noreferrer"><GitHubLogo /></a>
                        <a href="http://capstone.wdd-donny.xyz/" target="_blank" rel="noreferrer"><img src="images/svg/link.svg" alt="link" height="22px" /></a>
                    </div>
                </div>
            </div>

            <div className="row-even" data-aos="fade-right" data-aos-delay="100" data-aos-offset="250">
                <div className="project-container">
                    <h3 className="project-title">Menu Decider</h3>
                    <p className="project-description">
                        Web Application that allows users to randomly<br />generate menu items
                    </p>
                    <br />
                    <p className="project-skills">
                        <strong>Front End</strong>: HTML, JavaScript, React<br />
                    </p>
                    <div className="exteral-links">
                        <a href="https://github.com/donnyha/portfolio/tree/main/menu" target="_blank" rel="noreferrer"><GitHubLogo /></a>
                        <a href="http://menu.donnyha.com/" target="_blank" rel="noreferrer"><img src="images/svg/link.svg" alt="link" height="22px" /></a>
                    </div>
                </div>
                <div className="img-container">
                    <a href="http://menu.donnyha.com/"><img src="images/menu.png" alt="menu decider" height="189px" /></a>
                </div>
            </div>

            <div className="row-odd" data-aos="fade-left" data-aos-delay="100" data-aos-offset="250">
                <div className="img-container">
                    <a href="http://burgerpeg.donnyha.com/"><img src="images/burgerpeg.png" alt="burgerpeg" height="189px" /></a>
                </div>
                <div className="project-container">
                    <h3 className="project-title">Burgerpeg</h3>
                    <p className="project-description">
                        Brochure site for a burger restaurant in Winnipeg
                    </p>
                    <br />
                    <p className="project-skills">
                        <strong>Front End</strong>: HTML, SASS, JavaScript
                    </p>
                    <div className="exteral-links">
                        <a href="https://github.com/donnyha/portfolio/tree/main/burgerpeg" target="_blank" rel="noreferrer"><img src="images/svg/github.svg" alt="github" height="22px" /></a>
                        <a href="http://burgerpeg.donnyha.com/" target="_blank" rel="noreferrer"><img src="images/svg/link.svg" alt="link" height="22px" /></a>
                    </div>
                </div>
            </div>
        </div>
    );
}