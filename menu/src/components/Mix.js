import React from 'react'

function Mix(props)
{
    let foods = []

    // loop to slice and push foods array items to randomFoods array
    for(let i=props.foods.length; i>0; i--) {
        const randomNum = Math.floor(Math.random() * (i + 1.5));
        foods[i] = props.foods[randomNum].name;
        console.log(randomNum)
    }

    // console.table(foods)

    // console.log(props.foods[0])

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