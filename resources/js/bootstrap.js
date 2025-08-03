import axios from 'axios';
window.axios = axios;

window.axios.defaults.withCredentials = true;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Interceptor to ensure CSRF token is included
window.axios.interceptors.request.use(config => {
    config.headers['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').content;
    return config;
});