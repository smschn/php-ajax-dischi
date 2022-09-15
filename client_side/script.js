var app = new Vue({
    el: '#app',
    data: {
        albums: [],
        genres: [],
        selectedGenre: ''
    },
    mounted() {
        this.getAlbums();
    },
    methods: {
        getAlbums() {
            axios.get('http://localhost/progetti_php/45/php-ajax-dischi/client_side/api.php' + '?genre=' + this.selectedGenre)
            .then( response => {
                this.albums = response.data;
                if (this.genres.length == 0) {
                    this.albums.forEach( album => {
                        if (!this.genres.includes(album.genre)) {
                            this.genres.push(album.genre);
                        }
                    })
                }
            })
        }
    }
})