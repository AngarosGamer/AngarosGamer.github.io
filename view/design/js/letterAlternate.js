const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

document.querySelector("#nav-header-1").onmouseover = event => {
    iterateText(event);
}

document.querySelector("#nav-header-2").onmouseover = event => {
    iterateText(event);
}

document.querySelector("#nav-header-3").onmouseover = event => {
    iterateText(event);
}

document.querySelector("#nav-header-4").onmouseover = event => {
    iterateText(event);
}

function iterateText(event) {
    let iterations = 0;
    const interval = setInterval(() => {
        event.target.innerText = event.target.innerText.split("")
            .map((letter,index) => {
                if (index < iterations) {
                    return event.target.dataset.value[index];
                }
                return letters[Math.floor(Math.random() * 26)]
            })
            .join("");
        if (iterations >= event.target.dataset.value.length) {
            clearInterval(interval);
        }
        iterations += 1/2;
    },60);
}