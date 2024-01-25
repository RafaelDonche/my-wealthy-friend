require('./bootstrap');

// Importe o Axios
import axios from 'axios';

// Crie uma instância do Axios com uma URL base
const api = axios.create({
    baseURL: 'https://brapi.dev/api/', // Substitua pela sua URL da API
});

// Adicione um interceptor para incluir o Bearer Token em todas as requisições
api.interceptors.request.use((config) => {
    const token = process.env.MIX_API_BEARER_TOKEN; // Substitua pelo seu Bearer Token
    config.headers.Authorization = `Bearer ${token}`;
    return config;
});

export default api;
