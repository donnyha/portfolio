// components
import React from 'react'
import Show from './components/Show'
import foodsData from './foodsData'

// css
import './styles/App.css'

class App extends React.Component
{
    constructor()
    {
        super()
        this.state = {
            foods: foodsData
        }
    }

    render()
    {
        const foodItems = this.state.foods.map(item => <Show key={item.id} item={item} />)

        return (
            <div className="App">
                <h1>Menu Decider</h1>

                    {/* Display Week */}
                    <table>

                        {/* Days of the week */}
                        <tr>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                            <th>Sunday</th>
                        </tr>

                        {/* Menu for the day */}
                        <tr>
                            <td class="day"></td>
                            <td class="day"></td>
                            <td class="day"></td>
                            <td class="day"></td>
                            <td class="day"></td>
                            <td class="day"></td>
                            <td class="day"></td>
                        </tr>

                    </table>

                    {/* Display Menu */}
                    <div id="menu">
                        <strong>This is Menu</strong><br />
                        {foodItems}
                    </div>

                    {/* Button */}
                    <button id="mix">Randomise</button>
            </div>
        );
    }
}

export default App;
