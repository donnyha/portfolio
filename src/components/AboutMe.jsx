export default function AboutMe() {
    const title = 'About me';
    return (
        <div id="about-me" className="para">
            <h2 data-aos="fade-up">{ title }</h2>
            <p id="description" data-aos="fade-up">
                Hello, my name is Donny and I am a web developer with both front and back end experience at a digital agency, as well as, experience working in an <span className="change"><a href="https://mozo.com.au/" target="_blank" rel="noreferrer">e-commerce environment</a></span>.<br /><br /> 
                In terms of education, I have a Bachelor’s degree in Business Information Systems and Accounting from the University of Sydney, Australia, and a Web Development Diploma from the University of Winnipeg.<br /><br /> 
                When I am not programming or customising my Linux machine/distro hopping, I like to play tennis, go for a run or drink beer.
            </p>
            <div id="skills">
                <h3 id="skills-header" data-aos="fade-up">Skills</h3>

                <div className="container-row">
                    <div id="front-end" className="skill" data-aos="fade-up" data-aos-delay="100">
                        <h4>Front End</h4>
                        <ul>
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>SASS</li>
                            <li>Tailwind CSS</li>
                            <li>Bootstrap</li>
                            <li>JavaScript</li>
                            <li>Vue.js</li>
                            <li>React</li>
                            <li>jQuery</li>
                            <li>npm</li>
                        </ul>
                    </div>

                    <div id="back-end" className="skill" data-aos="fade-up" data-aos-delay="150">
                        <h4>Back End</h4>
                        <ul>
                            <li>PHP</li>
                            <li>WordPress</li>
                            <li>Laravel</li>
                            <li>Node.js</li>
                            <li>Python</li>
                            <li>Java</li>
                            <li>Spring Boot</li>
                        </ul>
                    </div>

                    <div id="database" className="skill" data-aos="fade-up" data-aos-delay="200">
                        <h4>Database</h4>
                        <ul>
                            <li>MySQL</li>
                            <li>MariaDB</li>
                            <li>MongoDB</li>
                            <li>SQLite</li>
                        </ul>
                    </div>

                    <div id="version-control" className="skill" data-aos="fade-up" data-aos-delay="250">
                        <h4>Tools</h4>
                        <ul>
                            <li>Git</li>
                            <li>Linux</li>
                            <li>macOS</li>
                            <li>Apache</li>
                            <li>Nginx</li>
                            <li>Adobe Creative Suite</li>
                            <li>Figma</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    );
}