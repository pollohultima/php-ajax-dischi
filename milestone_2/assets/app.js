const app = new Vue({

    el: '#app',
    data: {
        discs: null,
        genre: "default",
        genres: [],
        selector: "default",
    },

    mounted() {
        axios
            .get('./api/discs.php')
            .then(response => {
                console.log(response);
                this.discs = response.data

                this.discs.forEach((disc) => {
                    if (!this.genres.includes(disc.genre)) {
                        this.genres.push(disc.genre);
                    }
                });
            })

    },

    computed: {
        filterItems() {
            if (this.genre === "default") {
                return this.discs;
            } else if (this.genre !== "default") {
                return this.discs.filter(
                    (disc) => disc.genre === this.genre);
            }

            return this.discs.filter(
                (disc) => disc.genre === this.genre);
        },
    },

    methods: {
        pickGen(genre) {
            this.genre = genre;
        }
    },


})