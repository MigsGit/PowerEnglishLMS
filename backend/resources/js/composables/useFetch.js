
import { ref, onMounted } from "vue";
import axios from "axios";
console.log('axios');

export default function useFetch ()
{
    const axiosFetchData = async  (params, apiUrl,responseCallback) => {
        if (!apiUrl) {
            console.error("🚨 Error: API URL is null or undefined!");
            return;
        }
        try {
            const response = await axios.get(apiUrl, {
                params: params,
                transformRequest: [(data, headers) => {
                    headers['Authorization'] = 'Bearer your-token';
                    console.log('Request config modified before sending:', headers);
                }]

            });
            if (typeof responseCallback === "function") {
                responseCallback(response);
            }
        } catch (err) {
            Swal.fire({
                title: "System Alert !",
                text: `${err}`,
                icon: "error",
                timer: 1000,
                showConfirmButton: false
            });
            // throw error; // Ensure errors are propagated
        } finally {
            console.log('finally');
            // isModalLoadingComponent.value = false;
        }
    }
    return {
        axiosFetchData
    }
};
