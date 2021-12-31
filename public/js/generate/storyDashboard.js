import {storyDescPlacholder} from "../data/lang-data.js";
import {returnLocal} from "../language.js";

const sdesc = document.getElementById("story-description");
const stitle = document.getElementById("story-name");
const slang = document.getElementById("lang");

const btn = document.getElementById("confirm");

function submitChanges() {
    const desc = document.getElementById("story-description").value;
    const title = document.getElementById("story-name").value;
    const lang = document.getElementById("lang").value;
    const sid = document.getElementById("story-id").value;

    $.ajax({
        url: "/"+sid+"/edit",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        dataType: 'json',
        data: {
            name: title,
            desc: desc,
            lang : lang
        },
        success: function(status){
            console.log(status)
        },
        error:function(data){
            console.error("The story could not be created");
        }
    });
}

function changeColor() {
    btn.classList.remove("bg-success");
    btn.classList.remove("disabled");
    btn.classList.add("bg-warning");
}

sdesc.addEventListener("keydown", changeColor);
stitle.addEventListener("keydown", changeColor);
slang.addEventListener("change", changeColor);

btn.addEventListener("click", submitChanges);

sdesc.setAttribute("placeholder",storyDescPlacholder[returnLocal()]);
