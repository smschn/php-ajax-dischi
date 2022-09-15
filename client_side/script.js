var app = new Vue({
    el: '#app',
    data: {
        albums: []
    },
    mounted() {
        axios.get('http://localhost/progetti_php/45/php-ajax-dischi/client_side/api.php')
        .then( response => {
            this.albums = response.data;
        });
    }
})