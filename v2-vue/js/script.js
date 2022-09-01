Vue.config.devtools = true;

const app = new Vue({
  el: "#app",
  data: {
    discs: [],
  },
  methods: {
    fetchDiscs() {
      axios.get("http://localhost/php-ajax-dischi/api/discs").then((res) => {
        this.discs = res.data;
      });
    },
  },
  mounted() {
    this.fetchDiscs();
  },
});
