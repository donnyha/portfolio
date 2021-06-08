import Nav from '../components/Nav';
import Home from '../components/Home';
import AboutMe from '../components/AboutMe';
import Projects from '../components/Projects';
import Contact from '../components/Contact';

export default function Main () {
  return (
    <div>
      <Nav />
      <Home />
      <AboutMe />
      <Projects />
      <Contact />
    </div>
  );
}