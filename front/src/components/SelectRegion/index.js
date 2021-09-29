import React from 'react'
import PropTypes from 'prop-types'

const SelectRegion = ({ onChange, data, placeholder }) => {
    return (
        <select onChange={onChange} >
            <option value={0}>{placeholder}</option>
            {
                data.map((item) =>
                    <option key={item.nombre_region} value={item.id_region}>{item.ordinal} {item.nombre_region}</option>
                )
            }
        </select>
    )
}

SelectRegion.propTypes = {
    onChange: PropTypes.func.isRequired,
    data: PropTypes.arrayOf(PropTypes.shape({
        id_region: PropTypes.number.isRequired,
        nombre_region: PropTypes.string.isRequired,
        ordinal: PropTypes.string
    })).isRequired,
    placeholder: PropTypes.string.isRequired
}
export default SelectRegion
