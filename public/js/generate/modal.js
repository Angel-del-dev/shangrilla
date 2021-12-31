import { langs, storyTypes, titleStoryType} from "../data/lang-data.js";
import { returnLocal } from "../language.js";
// Lang selector

const selector = document.getElementById("lang-select");

for(let l of langs) {
    const option = document.createElement("option");
    option.innerHTML = l["full"];
    option.value = l["abbr"];
    selector.append(option);
}

// Story creation
let lang = "en";

try {
    lang = returnLocal();
}catch(e){}

const title = document.getElementById("obra-type");
title.innerHTML = titleStoryType[lang];

const types = document.getElementsByClassName("book-type");
let i = 0;
for(let t of types) {
    t.innerHTML = storyTypes[i][lang];

    i++;
}
