let hasPromo = document.querySelector("input[name=hasPromo]");
let oldprix  = document.querySelector("input[name=oldprix]");

let parentPromo = hasPromo.parentElement;
oldprix.parentElement.classList.add("hidden");

if(hasPromo.hasAttribute('checked')){
    oldprix.parentElement.classList.remove("hidden");
}
parentPromo.addEventListener("click", function () {
    if (!this.lastElementChild.classList.contains("off")) {
        oldprix.parentElement.classList.add("hidden");
    } else {
        oldprix.parentElement.classList.remove("hidden");
    }
});
