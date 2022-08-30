import axios from "axios";
import config from "../utils/config";
import Home from "./home"
import Message from "./message";

axios.defaults.baseURL = config.getBaseUrl();

export default {
  home: Home(axios),
  message: Message(axios),
};
