import React from 'react'
import '../cssFiles/addPageAdmin.css'
const addPageAdmin = () => {
  return (
    <>
      <header>
        <p className='headingtitle'>Products<br /> Mighty
          Mite Motors</p>
      </header>

      <div className='content'>
        <div className="status">
          <p className='statusText'>status</p>
          <select name="" id="Sel">
            <option value="All">ALL</option>
            <option value="Available">Available</option>
            <option value="Unavailable">Unavailable</option>
          </select>
        </div>
      </div>
    </>

  )
}

export default addPageAdmin;
