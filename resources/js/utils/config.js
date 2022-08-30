const env = process.env.MIX_API_BASE_URL;

export default {
  getBaseUrl() {
    return env.MIX_API_BASE_URL;
  },
};
