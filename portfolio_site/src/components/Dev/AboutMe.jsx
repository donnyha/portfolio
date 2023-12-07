export default function AboutMe() {
    const title = 'About me';
    return (
        <div id="about-me" className="para">
            <h2 data-aos="fade-up">{ title }</h2>
            <p id="description" data-aos="fade-up">
                Hello, I am Donny and I am a web developer with both front end and back end skills as well as experience working in an <span className="change"><a href="https://mozo.com.au/" target="_blank" rel="noreferrer">e-commerce environment</a></span>.<br /><br /> 
                I have passion for front end, back end, design, data and Unix OS.<br /><br />
                In terms of education, I have a Bachelor’s degree majoring in Business Information Systems and Accounting from the University of Sydney, Australia, and I am currently working on Web Development Diploma from the University of Winnipeg.<br /><br /> 
                When I am not programming or customising my Linux machine/distro hopping, I like to play football, cycle and drink beer.
            </p>
            <div id="skills">
                <h3 data-aos="fade-up">Skills</h3>

                <div className="container-row">
                    <div id="front-end" className="skill" data-aos="fade-up" data-aos-delay="100">
                        <h4>Front End</h4>
                        <ul>
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>SASS</li>
                            <li>JavaScript</li>
                            <li>jQuery</li>
                            <li>npm</li>
                            <li>React</li>
                        </ul>
                    </div>

                    <div id="back-end" className="skill" data-aos="fade-up" data-aos-delay="150">
                        <h4>Back End</h4>
                        <ul>
                            <li>PHP</li>
                            <li>Laravel</li>
                            <li>Composer</li>
                            <li>XML</li>
                            <li>JSON</li>
                        </ul>
                    </div>

                    <div id="database" className="skill" data-aos="fade-up" data-aos-delay="200">
                        <h4>Database</h4>
                        <ul>
                            <li>MySQL</li>
                            <li>SQLite</li>
                        </ul>
                    </div>

                    <div id="version-control" className="skill" data-aos="fade-up" data-aos-delay="250">
                        <h4>Version Control</h4>
                        <ul>
                            <li>Git</li>
                        </ul>
                    </div>

                    <div id="os" className="skill" data-aos="fade-up" data-aos-delay="350">
                        <h4 id="deskstop-os">Operating System</h4>
                        <h4 id="mobile-os">OS</h4>
                        <ul>
                            <li>Linux</li>
                            <li>macOS</li>
                        </ul>
                    </div>

                    <div id="server" className="skill" data-aos="fade-up" data-aos-delay="400">
                        <h4>Server</h4>
                        <ul>
                            <li>Apache</li>
                            <li>Nginx</li>
                        </ul>
                    </div>

                    <div id="design" className="skill" data-aos="fade-up" data-aos-delay="450">
                        <h4>Design</h4>
                        <ul>
                            <li>Linux</li>
                            <li>Adobe Photoshop</li>
                            <li>Illustrator</li>
                            <li>Animate</li>
                            <li>Figma</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    );
}