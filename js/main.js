const app = new VTTCue({
    el: '#root',
    data: {

    },
    /* chiamata axios */
    created() {
        axios
            .get('http://http://localhost/php-ajax-dischi/api/server.php')
            .then((response) => {
                console.log(response.data[0]);
            })
    }
})