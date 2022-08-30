export default axios => ({
  fetchData() {
    return axios.get('/api/home');
  },
});
