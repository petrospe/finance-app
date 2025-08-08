import axios from 'axios'
window.axios = axios

window.axios.defaults.withCredentials = true
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

window.refreshCsrfToken = function () {
    return axios.get('/sanctum/csrf-cookie')
}

// Run it immediately on page load so first POST won't fail
window.refreshCsrfToken()
