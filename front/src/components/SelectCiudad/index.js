import React, { useEffect, useState } from 'react'
import PropTypes from 'prop-types'
import axios from 'axios'

const SelectCiudad = ({ onChange, placeholder, provincia }) => {
    const [ciudad, setCiudad] = useState()
    const getData = async () => {
        try {
            const response = await axios.post(`/ciudad?id=${provincia}`)
            setCiudad(response.data)
        } catch (error) {
            console.log(error)
        }
    }
    useEffect(() => {
        getData()
        console.log(provincia)
    }, [provincia])
    if (!ciudad) {
        return (<h1>Cargando</h1>)
    }
    return (
        <select onChange={onChange} >
            <option value={0}>{placeholder}</option>
            {
                ciudad.map((item) =>
                    <option key={item.nombre_ciudad} value={item.id_ciudad}>{item.nombre_ciudad}</option>
                )
            }
        </select>
    )
}

SelectCiudad.propTypes = {
    onChange: PropTypes.func.isRequired,
    placeholder: PropTypes.string.isRequired,
    provincia: PropTypes.string.isRequired
}
export default SelectCiudad
