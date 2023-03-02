let changeTheme = document.getElementById("theme");

changeTheme.addEventListener("click", () => {
    let root = document.documentElement;

    if(!changeTheme.classList.contains('isExisting')){
    root.style.setProperty('--clr-body-bg', "white");
    root.style.setProperty('--clr-text', "rgb(37, 36, 36)");   
    changeTheme.classList.add("isExisting");
    }
    else if(changeTheme.classList.contains('isExisting')){
        root.style.setProperty('--clr-body-bg', "rgb(37, 36, 36)");
        root.style.setProperty('--clr-text', "whitesmoke");
        changeTheme.classList.remove("isExisting");
    }
})