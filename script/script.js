const {createApp} = Vue;

createApp({
    data(){
        return{
            todoList: [],
            apiUrl: 'server.php',
            newItem: ''
        }
    },
    methods: {
        printList(){
            axios.get(this.apiUrl).then((res) => {
                this.todoList = res.data;
            })
        },
        newList(){
            const data = {
                newItem: this.newItem
            };
            axios.post(this.apiUrl, data, {headers: {'Content-Type': 'multipart/form-data'}}).then((res) => {
                this.newItem = '';
                this.todoList = res.data;
            });
        }
        // prodottoComprato(index){
        //     this.listaSpesa[index].comprato = true;
        // },
        // prodottoEliminato(index){
        //     this.listaSpesa.splice(index, 1);
        // }
    },
    mounted(){
        this.printList();
    }
}).mount('#app');