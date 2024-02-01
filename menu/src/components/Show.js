import React from 'react'

function Show(props)
{
    return(
        <li className="food-items">
            {props.name}
        </li>
    )
}

export default Show