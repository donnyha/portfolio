// components
import React, {useEffect} from 'react'
import Show from './components/Show'
import Mix from './components/Mix'
import foodsData from './foodsData'

// aos library
import Aos from 'aos'
import 'aos/dist/aos.css'

// css
import './styles/App.css'

class App extends React.Component
{
    constructor()
    {
        super()
        this.state = {
            foods: foodsData,
            clicked: false
        }
        this.handleClick = this.handleClick.bind(this)
    }

    handleClick()
    {
        this.setState({clicked: true})
    }

    render()
    {        
        Aos.init()

        // map out the foodsData
        const foodItems = this.state.foods.map(item => <Show key={item.id} item={item} name={item.name} />)

        let clicked = this.state.clicked
        let result;

        // if the button has been clicked. Mix is used
        if(clicked) {
            result = <Mix foods={this.state.foods} />
        }
        else {
            result = ""
        }

        return (
            <div className="App">
                <div id="wrapper">

                    <h1 data-aos="fade-down" data-aos-delay="100">Menu Decider</h1>

                    <div className="container">
                        {/* Display Menu */}
                        <div id="menu">
                            <h2 data-aos="fade-down" data-aos-delay="300">Menu</h2><br />
                            <ul id="food-list" data-aos="fade-down" data-aos-delay="700">
                                {foodItems}
                            </ul>
                        </div>

                        <h2 data-aos="fade-up" data-aos-delay="900">Mixer</h2>

                        {/* Display Week */}
                        <table data-aos="fade-up" data-aos-delay="1100">
                            {/* Days of the week */}
                            <tr>
                                <th className="day">Monday</th>
                                <th className="day">Tuesday</th>
                                <th className="day">Wednesday</th>
                                <th className="day">Thursday</th>
                                <th className="day">Friday</th>
                                <th className="day">Saturday</th>
                                <th className="day">Sunday</th>
                            </tr>

                            {/* Menu for the day */}
                            {result}
                        </table>
                    </div>

                    {/* Button */}
                    <div className="button" data-aos="fade-up" data-aos-delay="1300">
                        <button id="mix" onClick={this.handleClick}>MIX</button>
                    </div>
                </div>
            </div>
        )
    }
}

export default App;