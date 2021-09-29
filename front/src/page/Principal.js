import React, { useState } from 'react'
import { SelectCiudad, SelectProvincia, SelectRegion } from '../components'
import TablaCalle from '../components/TablaCalle'
import useGetData from '../hooks/useGetData'

const Principal = () => {
    const { data } = useGetData('/region')
    const [provincia, setProvincia] = useState(0)
    const [region, setRegion] = useState(0)
    const [ciudad, setCiudad] = useState(0)

    if (!data) {
        return (<h1>Cargando</h1>)
    }
    return (
        <>
            <h1>Mundo Pacifico</h1>
            <h3>Aplicacion de ubicaciones</h3>
            <SelectRegion
                placeholder="Seleccione una región"
                data={data}
                onChange={ ({ target: { value } }) => setRegion(value)}
            />
            {
                region !== 0 &&
                    <SelectProvincia
                        placeholder="Seleccione una provincia"
                        onChange={ ({ target: { value } }) => setProvincia(value)}
                        region={region}
                    />
            }
            {
                provincia !== 0 &&
                    <SelectCiudad
                        placeholder="Seleccione una ciudad"
                        onChange={ ({ target: { value } }) => setCiudad(value)}
                        provincia={provincia}
                    />
            }
            <div>
                {
                    ciudad !== 0 &&
                    <TablaCalle
                        ciudad={ciudad}
                    />
                }
            </div>
        </>
    )
}

export default Principal
