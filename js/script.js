const { createApp } = Vue;

createApp({
    data() {
        return {
            discs: [],
        };
    },
    methods: {
        /*  function che esegue una richiesta HTTP GET all’endpoint 'server.php' 
        utilizzando Axios  */
        getDiscsFromApi() {
            axios.get('server.php').
            then((response) => {
                /* uando la risposta viene ricevuta, la funzione assegna i dati 
                all'array  discs. */
                this.discs = response.data;
            }); 
        },
    },
    mounted() {
        this.getDiscsFromApi();
    }
}).mount('#app');