import React from 'react'

function Mix(props)
{
    // initialise foods array
    let foods = []

    // loop to slice and push food items into to foods array
    for(let i=props.foods.length - 1; i>0; i--) {
        const randomNum = Math.floor(Math.random() * (i + 1));
        foods[i] = props.foods[randomNum].name;
        console.log(randomNum);
    }

    return(
        <tr id="mix-food">
            <td>{foods[1]}</td>
            <td>{foods[2]}</td>
            <td>{foods[3]}</td>
            <td>{foods[4]}</td>
            <td>{foods[5]}</td>
            <td>{foods[6]}</td>
            <td>{foods[7]}</td>
        </tr>
    )
}

export default Mix