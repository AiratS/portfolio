export default axios => ({
  storeMessage({
    name,
    email,
    subject,
    message,
  }) {
    return axios.post('/api/message', {
      name,
      email,
      subject,
      message,
    });
  },
});
