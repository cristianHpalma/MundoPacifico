import React, { useEffect, useState } from 'react'
import PropTypes from 'prop-types'
import axios from 'axios'

const TablaCalle = ({ ciudad }) => {
    const [calle, setCalle] = useState()
    const getData = async () => {
        try {
            const response = await axios.post(`/calle?id=${ciudad}`)
            setCalle(response.data)
        } catch (error) {
            console.log(error)
        }
    }
    useEffect(() => {
        getData()
    }, [ciudad])
    if (!calle) {
        return (<h1>Cargando</h1>)
    }
    return (
        <table >
            <thead>
                <tr>
                    <td>Nombre Calle</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    {
                        calle.map((item) =>
                            <tr key={item.nombre_calle}>{item.nombre_calle}</tr>
                        )
                    }
                </tr>
            </tbody>
        </table>
    )
}

TablaCalle.propTypes = {
    ciudad: PropTypes.string.isRequired
}
export default TablaCalle
