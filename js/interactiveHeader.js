function interactiveHeaderStylesOnScroll(site_header) {
    const changeHeaderSylesIfScroll = (site_header) => {
        if(window.scrollY == 0) site_header.classList.add("header-on-top");
        else site_header.classList.remove("header-on-top");
        if(window.scrollY > window.screen.height/2) site_header.classList.add("header-with-logo");
        else site_header.classList.remove("header-with-logo");
    };

    changeHeaderSylesIfScroll(site_header);
    
    window.addEventListener("scroll", (event) => {
        event.preventDefault();
        changeHeaderSylesIfScroll(site_header);
    });
    
}
 

const menu_icon = document.querySelector("#menu-icon");
    menu_icon.addEventListener("click", (event) => {
        event.preventDefault();
        site_header.classList.toggle("header-with-mobile-nav-hidden");
    });