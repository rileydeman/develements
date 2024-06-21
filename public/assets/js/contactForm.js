let form = document.getElementById("contactForm");
let name = document.getElementById("name");
let email = document.getElementById("email");
let message = document.getElementById("message");

let forbiddenWords = ["forbidden1", "forbidden2", "forbidden3"]; // Add actual forbidden words

name.addEventListener("input", () => {
    if (/^[a-z\s]+$/i.test(name.value)) {
        console.log("valid");
    } else {
        console.log("invalid");
    }
});

email.addEventListener("input", () => {
    if (/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
        console.log("valid");
    } else {
        console.log("invalid");
    }
});

message.addEventListener("input", () => {
    if (isMessageValid(message.value)) {
        console.log("valid");
    } else {
        console.log("invalid");
    }
});

form.addEventListener("submit", (event) => {
    event.preventDefault(); // Prevent default form submission

    if (validateForm()) {
        console.log("Form data:");
        console.log("Naam:", name.value);
        console.log("Email:", email.value);
        console.log("Bericht:", message.value);
        
        // You can optionally clear the form fields after submission
        // name.value = "";
        // email.value = "";
        // message.value = "";
    } else {
        console.log("Form validation failed.");
    }
});

function validateForm() {
    if (!/^[a-z\s]+$/i.test(name.value)) {
        console.log("Invalid Name");
        return false;
    }

    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
        console.log("Invalid Email");
        return false;
    }

    if (!isMessageValid(message.value)) {
        console.log("Invalid Message");
        return false;
    }

    return true;
}

function isMessageValid(text) {
    for (let word of forbiddenWords) {
        if (text.includes(word)) {
            return false;
        }
    }
    return true;
}
