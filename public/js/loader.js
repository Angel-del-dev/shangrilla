import { loaderModal } from "./data/lang-data.js";

window.onload=() => {
    const load = document.getElementById("loader");
    const lang = localStorage.getItem("Shangrilla-lang");
    load.append(loaderModal[lang]);
    document.getElementById("loader").remove();
}
