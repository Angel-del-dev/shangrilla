import { langs } from "./data/lang-data.js";

let storage = 0;

function addLocal(lang) {
    localStorage.setItem("Shangrilla-lang",lang);
}

export function returnLocal() {
    let st = localStorage.getItem("Shangrilla-lang")
    if(st!=null) {
        for(let l of langs) {
            if(st!=l["abbr"]) {
                $("."+l["abbr"]).hide();
            }
        }
    }
    return st;
}

function checkLanguage(lang="eng") {
    storage = returnLocal();
    if(storage==null) {
        $("#staticBackdrop").show();
    }else {
        $("#staticBackdrop").hide();
        $("#backdrop").hide();
        $("#ever").hide();
        $(".over").removeClass("over");
    }
    if(window.location.pathname+window.location.search=="/" && storage!=null) {
        location.href = "/"+storage+"/home";
    }
}

checkLanguage();

const agree = document.getElementById("lang-agree");
const select = document.getElementById("lang-select");

agree.addEventListener("click",function(e) {
    addLocal(select.value);
    checkLanguage();
    location.href = "/"+storage+"/home";
});

