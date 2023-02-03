const { createApp } = Vue;

createApp({
    data(){
        return{
            apiUrl: 'server.php',
            todoList: [],
            name: '',
            clicked: ''
        }
    },
    methods: {
        addTodo() {
            const data = {
                name: this.name,
                done: false
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
            }).then((response) => {
                    this.todoList = response.data
        })
        },
        editTodo(index){
            this.clicked =  index;      

        },
        confirmUpdate(string, index){
            const data = {
                edit: index,
                new_name: string
            }
    
            axios.post(this.apiUrl, data, {
                headers:{ 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                this.todoList = response.data
                this.clicked = ''
            
            })
        }
    },
    mounted() {
        axios.get(this.apiUrl).then((response) => {
            this.todoList = response.data;
        });
    }
}).mount('#app');