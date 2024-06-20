let forms = document.querySelectorAll("form");

for (let i = 0; i < forms.length; i++) {
    forms[i].childNodes[1].addEventListener("keydown", (e) => {
        if (e.keyCode === "Enter") {
            forms[i].submit();
        }
    })
}