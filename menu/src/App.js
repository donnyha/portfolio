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
        console.log('Clicked!')
    }

    render()
    {
        const foodItems = this.state.foods.map(item => <Show key={item.id} item={item} name={item.name} />)

        return (
            <div className="App">
                <h1>Menu Decider</h1>

                    {/* Display Week */}
                    <div className="table">

                        {/* Days of the week */}
                        <div className="row">
                            <div className="day">Monday</div>
                            <div className="day">Tuesday</div>
                            <div className="day">Wednesday</div>
                            <div className="day">Thursday</div>
                            <div className="day">Friday</div>
                            <div className="day">Saturday</div>
                            <div className="day">Sunday</div>
                        </div>

                        {/* Menu for the day */}
                        <div className="row">
                                <Mix foods={this.state.foods} />
                        </div>

                    </div>

                    {/* Display Menu */}
                    <div id="menu">
                        <strong>This is Menu</strong><br />
                        {foodItems}
                    </div>

                    {/* Button */}
                    <button id="mix" onClick={this.handleClick}>Randomise</button>
            </div>
        )
    }
}

export default App;