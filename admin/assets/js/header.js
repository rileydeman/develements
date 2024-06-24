let forms = document.querySelectorAll("form");

for (let i = 0; i < forms.length; i++) {
    forms[i].childNodes[1].addEventListener("keydown", (e) => {
        if (e.keyCode === "Enter") {
            forms[i].submit();
        }
    })
}

let menuIcon = document.getElementById("menuIconImg");
let menu = document.querySelector("aside");

menuIcon.addEventListener("click", (e) => {
    menu.style.right = 0;
});

let menuCloseIcon = document.getElementById("exitIcon");

menuCloseIcon.addEventListener("click", (e) => {
    if (window.innerWidth < 768) {
        menu.style.right = "-80%";
    } else if (window.innerWidth > 1279) {
        menu.style.right = "-50%";
    }

})