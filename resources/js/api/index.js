import axios from "axios";
import config from "../utils/config";
import Home from "./home";

axios.defaults.baseURL = config.getBaseUrl();

export default {
  home: Home(axios),
};
