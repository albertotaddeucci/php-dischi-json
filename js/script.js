const { createApp } = Vue;

createApp({
    data() {
        return {
            albumsList: ""
        }
    },
    mounted() {
        axios.get('./server.php').then(res => {
            this.albumsList = res.data;

            console.log(this.albumsList)
        })
    },

}).mount('#app');