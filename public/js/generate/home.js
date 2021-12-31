import {returnLocal} from "../language.js";
import {storyTypes} from "../data/lang-data.js";

const lang = returnLocal();

const titles = document.getElementsByClassName("titles");
let i = 0;
for(let t of titles) {
    t.title = storyTypes[i]["desc"+lang];
    t.innerHTML = storyTypes[i][lang];
    i++;
}
