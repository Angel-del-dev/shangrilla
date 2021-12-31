import { returnLocal } from "../language.js";

const lang = returnLocal();

let userName = "";

try {
    userName = document.getElementById("userInfo").value;
}catch(e) {}

export const loggedInV = [
    {
        "en":"Profile",
        "es":"Perfil",
        "url":"/"+lang+"/u/"+userName,
        "ico":"user-circle"
    },
    {
        "en":"Log out",
        "es":"Cerrar sesión",
        "url":"/logout","ico":"sign-out-alt"
    },
    {
        "en":"Settings",
        "es":"Configuración",
        "url":"/settings",
        "ico":"cog"
    }
];

export const notLoggedInV =  [
    {
        "en":"Sign In",
        "es":"Inicia sesión",
        "url":"/login",
        "ico":"sign-in-alt"
    },
    {
        "en":"Sign up",
        "es":"Registrate",
        "url":"/register",
        "ico":"user-plus"
    }
];
