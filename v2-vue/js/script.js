Vue.config.devtools = true;

const app = new Vue({
  el: "#app",
  data: {
    discs: [],
    genreList: [],
    genreChoice: "",
  },
  methods: {
    fetchDiscs() {
      axios
        .get(`http://localhost/php-ajax-dischi/api/discs?genre=${this.genreChoice}`)
        .then((res) => {
          this.discs = res.data;
        });
    },
  },
  computed: {
    getGenreList() {
      this.discs.filter((disc) => {
        if (!this.genreList.includes(disc.genre)) return this.genreList.push(disc.genre);
      });
    },
  },
  mounted() {
    this.fetchDiscs();
  },
});
