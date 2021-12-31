function generateNavbar(d) {
    for(let i of d) {
        // If it doesn't have a "fk_idparent" means that is not part of a dropdown menu
        if(i["fk_idparent"]==null) {
            const li = document.createElement("li");
            li.classList.add("nav-item");
            let a = document.createElement("a");
            a.href="/"+i["url"];
            li.append(a);
            // If it doesn't have an "url" means that is the Text for the dropdown to be shown
            if(i["url"]=="") {
                li.classList.add("dropdown");
                const ad = document.createElement("a");
                ad.innerHTML = i["value"];
                ad.classList.add("nav-link");
                ad.classList.add("dropdown-toggle");
                ad.href="#";
                ad.id="navbarDropdown";
                ad.setAttribute("role","button");
                ad.setAttribute("data-bs-toggle","dropdown");
                ad.setAttribute("aria-expanded","false");

                const ul=document.createElement("ul");
                ul.classList.add("dropdown-menu");
                ul.setAttribute("aria-labelledby","navbarDropdown");
                // Looping through the list to get and position all the children elements of the dropdown
                for(let j of d) {
                    if(i["id"]==j["fk_idparent"]) {
                        const subli = document.createElement("li");
                        const suba = document.createElement("a");
                        suba.classList.add("dropdown-item");
                        suba.href=j["url"];
                        suba.innerHTML = j["value"]

                        subli.append(suba);
                        ul.append(subli);
                    }
                }
                li.append(ad);
                li.append(ul);

            }else {
                // If it has an "url" means that is an independent link
                a.classList.add("nav-link");
                a.innerHTML = i["value"];
            }
            li.append(a);
            document.getElementById("navCollapse").append(li);
        }else {
            const li = document.createElement("li");
            li.classList.add("nav-item");
            let a = document.createElement("a");
            a.href="/"+i["url"];
            li.append(a);
            document.getElementById("navCollapse").append(li);
        }
    }
}

const st = localStorage.getItem("Shangrilla-lang");

$.ajax({
    url: "/"+st+"/nav",
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type: "GET",
    dataType: 'json',
    success: function(data){
        generateNavbar(data);
    },
    error:function(data){
        console.error("The navigation bar could not be generated");
    }
});
