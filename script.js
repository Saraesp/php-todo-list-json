const { createApp } = Vue;

createApp({
    data(){
        return{
            apiUrl: 'server.php',
            todoList: [],
            name: ''
        }
    },
    methods: {
        addTodo() {
            const data = {
                name: this.name
            }

            axios.post(this.apiUrl, data, {
                headers:{ 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                this.name = '';

                this.todoList = response.data
            })
        },
        deleteTodo(index){
            const data = {
                delete: index
            }

            axios.post(this.apiUrl, data, {
                headers:{ 'Content-Type': 'multipart/form-data' }
            }).then((response) => 
                    this.todoList = response.data
            )
        }
    },
    mounted() {
        axios.get(this.apiUrl).then((response) =>{
            this.todoList = response.data;
        });
    }
}).mount('#app');