const { createApp } = Vue;

createApp({
    data() {
        return {
            albumsList: "",
            albumInfo: "",
            showCard: false,
            currentIndex: "",
        }
    },
    methods: {
        getInfo(index) {
            console.log(index)
            axios.get('./server.php').then(res => {
                this.albumInfo = res.data[index];


            })

            this.currentIndex = index
            this.showCard = true;

        }
    },

    mounted() {
        axios.get('./server.php').then(res => {
            this.albumsList = res.data;

            console.log(this.albumsList)
        })
    },

}).mount('#app');