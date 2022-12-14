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
      axios.get(`../api/discs?genre=${this.genreChoice}`).then((res) => {
        this.discs = res.data;

        this.getGenreList();
      });
    },
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
