window.addEventListener("DOMContentLoaded", (event) => {
    const site_header = document.querySelector("#site-header");
    const white_list_items = document.querySelectorAll(".white-list-item");
    const logo_site = document.querySelector("#logo-site-header");
    window.addEventListener("scroll", (event) => {
        updateHeader(site_header, white_list_items, logo_site);
    });
    updateHeader(site_header, white_list_items, logo_site);

    const menu_icon = document.querySelector("#menu-icon");
    menu_icon.addEventListener("click", (event) => {
        site_header.classList.toggle("site-header-with-hidden-nav-mobile");
    });

    const nav_items_site_header = document.querySelectorAll(".nav-item-site-header > a");
    nav_items_site_header.forEach(nav_item => {
        nav_item.addEventListener("click", (event) => {
            event.preventDefault();
            const section_id = nav_item.getAttribute("href");
            const section = document.querySelector(section_id);
            let offset;
            if(section_id == "#welcome-section"){
                offset = 60;
            } else if(section_id == "#benefits-section") {
                offset = 100;
            } else if(section_id == "#features-section") {
                offset = 100;
            } else if(section_id == "#more-info-section") {
                offset = 100;
            }
            scrollToY(section.offsetTop - offset, 300);
        });
    });

    const logo_site_header = document.querySelector("#logo-site-header");
    logo_site_header.addEventListener("click", (event) => {
        event.preventDefault();
        scrollToId("hero", 300);
    });
    
});


function updateHeader(site_header, white_list_items, logo_site){
    if(window.scrollY == 0) {
        site_header.classList.add("header-background-hidden");
        white_list_items.forEach(item => { item.classList.add("nav-item-show-line"); });
    } else {
        site_header.classList.remove("header-background-hidden");
        white_list_items.forEach(item => { item.classList.remove("nav-item-show-line"); });
        if(window.scrollY > window.screen.height/2) {
            logo_site.classList.remove("logo-hidden");
        } else {
            logo_site.classList.add("logo-hidden");
        }
    }
}