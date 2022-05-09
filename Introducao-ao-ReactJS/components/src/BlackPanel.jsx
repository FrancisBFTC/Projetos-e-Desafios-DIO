import React from 'react'
import "./styles.css"

const BlackPanel = (props) => {

    const { sizeX, sizeY } = props;
    return (
        <div>
            <div className="blackPanel" width={sizeX} height={sizeY}>{props.children}</div>
        </div>
    )
}

export default BlackPanel;