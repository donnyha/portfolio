import React from 'react'

function Mix(props)
{
    // initialise foods array
    let foods = []

    // loop to slice and push food items into to foods array
    for(let i=props.foods.length; i>0; i--) {
        const randomNum = Math.floor(Math.random() * (i + 1.5));
        foods[i] = props.foods[randomNum].name;
    }

    return(
        <ul>
            <li>{foods[1]}</li>
            <li>{foods[2]}</li>
            <li>{foods[3]}</li>
            <li>{foods[4]}</li>
            <li>{foods[5]}</li>
            <li>{foods[6]}</li>
            <li>{foods[7]}</li>
        </ul>
    )
}

export default Mix