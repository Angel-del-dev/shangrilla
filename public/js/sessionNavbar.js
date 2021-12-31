import { loggedInV,notLoggedInV } from "./data/sessionNavVariables.js";
import { navSess } from "./data/lang-data.js";
import { returnLocal } from "./language.js";

const lang = returnLocal();

    function generate(c, links, append) {
        for(let l of links) {
            let li = document.createElement("li");
            let a = document.createElement("a");
            let ico = document.createElement("i");

            ico.classList.add("fas");
            ico.classList.add("fa-"+l["ico"]);

            li.classList.add("nav-item");
            a.classList.add(c);

            a.innerHTML = l[lang];
            a.href = l["url"];

            a.prepend(ico);
            li.append(a);
            append.append(li);
        }
    }

function loggedIn() {
    const userName = document.getElementById("userInfo").value;
    const links= loggedInV;
    const label = (lang=="en") ? "Profile": "Perfil";
    document.getElementById("navbarDropdown").innerHTML = label;
    const list = document.getElementById("list");
    generate("dropdown-item",links,list);

    const create = document.getElementById("create");
    create.innerHTML += navSess[lang];

}

function notLoggedIn() {
    const links= notLoggedInV;
    const navbar = document.getElementById("navCollapse");
    generate("nav-link",links,navbar);
}

const checkSession = document.getElementById("check");
checkSession.remove();

if(checkSession.value=="logged-in") {
    loggedIn();
}else {
    notLoggedIn();
}

