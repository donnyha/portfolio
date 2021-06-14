// components
import React from 'react'
import Show from './components/Show'
import Mix from './components/Mix'
import foodsData from './foodsData'

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

                    <h1>Menu Decider</h1>

                    <div className="container">
                        {/* Display Menu */}
                        <div id="menu">
                            <h2>Menu</h2><br />
                            <ul id="food-list">
                                {foodItems}
                            </ul>
                        </div>

                        <h2>Mixer</h2>

                        {/* Display Week */}
                        <table>
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
                    <div className="button">
                        <button id="mix" onClick={this.handleClick}>Randomise</button>
                    </div>
                </div>
            </div>
        )
    }
}

export default App;