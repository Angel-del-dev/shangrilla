import {buttonModalNewStory} from "./data/lang-data.js";
var type;

function create(name, category, type, language) {
    $.ajax({
        url: "/new-story",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        dataType: 'json',
        data: {
            name: name,
            category: category,
            type: type,
            lang : language
        },
        success: function(story){
            location.href = "/story/"+story.id+"/dashboard/"+story.fname;
        },
        error:function(data){
            console.error("The story could not be created");
        }
    });
}

function createName() {
    const modal = document.getElementById("storySelector");
    const footer = document.getElementById("modal-footer");

    modal.innerHTML = "";
    footer.hidden = false;

    // Asking for the name and a category
    $.ajax({
        url: "/categories",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "GET",
        dataType: 'json',
        success: function(data){
            const l = localStorage.getItem("Shangrilla-lang");

            const select = document.createElement("select");
            select.classList.add("form-control");
            select.id="choose-category";

            const input = document.createElement("input");
            input.classList.add("form-control");
            input.id = "choose-name";
            input.setAttribute("maxlength",100);

            const placeholder = (l=="en") ? "Name of your story" : "Nombre de tu cuento";
            input.setAttribute("placeholder",placeholder);

            modal.append(input);

            for(let d of data) {
                const option = document.createElement("option");
                if(l == "en") {
                    option.value = d["id"];
                    option.innerHTML = d["en"];
                    option.classList.add("en");
                }else {
                    option.value = d["id"];
                    option.innerHTML = d["es"];
                    option.classList.add("es");
                }
                select.append(option);
            }
            modal.append(select);
            document.getElementById("send").addEventListener("click",function() {
                const name = document.getElementById("choose-name").value;
                const category = document.getElementById("choose-category").value;
                create(name,category,type,l)
            });
            const lang = localStorage.getItem("Shangrilla-lang");
            const close = document.getElementById("close");
            close.innerHTML = buttonModalNewStory[0][lang];
            const send = document.getElementById("send");
            send.innerHTML = buttonModalNewStory[1][lang];
        },
        error:function(data){
            console.error("The category selector could not be generated");
        }
    });
}

const modalCard = $("#storySelector > .card");

for (let c of modalCard) {
    c.addEventListener("click", (e) => {
        // Check whether the user clicks on the img or the modal
        if (e.target.tagName !== "DIV") {
            if(e.target.parentElement.classList.contains("card")) {
                const el=e.target.parentElement;
                type = el.getAttribute("data-id");
                createName();
            }else {
                const t = e.target.closest("div");
                const el = t.parentElement;
                type = el.getAttribute("data-id");
                createName();
            }
        } else {
            const el = e.target
            type = el.getAttribute("data-id");
            createName();
        }
    });
}
