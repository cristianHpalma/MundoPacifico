import axios from 'axios'
import useSWR from 'swr'

export default (url) => {
    const { data, error } = useSWR(url, async (url) => {
        const { data } = await axios.get(url)
        return data
    })
    return { data, error }
}
