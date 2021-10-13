const app = new Vue({
    el: '#root',
    data: {
        albumList : [],
    },
    /* chiamata axios */
    created() {
        axios
            .get('api/server.php')
            .then((response) => {
                this.albumList = response.data;
                // console.log(this.albumList);
                console.log(response);
            })
    }
})