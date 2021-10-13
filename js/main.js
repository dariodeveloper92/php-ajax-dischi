const app = new VTTCue({
    el: '#root',
    data: {

    },
    created() {
        axios
            .get('http://localhost/live_coding/json_exercise/api/server.php')
            .then((response) => {
                console.log(response.data[0].surname);
            })
    }
})