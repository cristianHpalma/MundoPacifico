import React, { useEffect, useState } from 'react'
import PropTypes from 'prop-types'
import axios from 'axios'

const SelectProvincia = ({ onChange, placeholder, region }) => {
    const [provincia, setProvincia] = useState()
    const getData = async () => {
        try {
            const response = await axios.post(`/provincia?id=${region}`)
            setProvincia(response.data)
        } catch (error) {
            console.log(error)
        }
    }
    useEffect(() => {
        getData()
    }, [region])
    if (!provincia) {
        return (<h1>Cargando</h1>)
    }
    return (
        <select onChange={onChange} >
            <option value={0}>{placeholder}</option>
            {
                provincia.map((item) =>
                    <option key={item.nombre_provincia} value={item.id_provincia}>{item.nombre_provincia}</option>
                )
            }
        </select>
    )
}

SelectProvincia.propTypes = {
    onChange: PropTypes.func.isRequired,
    placeholder: PropTypes.string.isRequired,
    region: PropTypes.string.isRequired
}
export default SelectProvincia
