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

    const links_with_scroll = {
        links: "a.link-with-scroll",
        duration: 500
    }
    setupLinksWithScroll(links_with_scroll);

    

    const newsletter_form = document.querySelector("#newsletter-form");
    newsletter_form.addEventListener("submit", (event) => {
        event.preventDefault();
        const url = 'add-to-newsletter.php';
        const formData = new FormData(newsletter_form);
        const div = document.querySelector("#container-result-form-newsletter");

        fetch(url, {
            method: "POST",
            body: formData
        })
        .then(res => res.text())
        .then(res => {
            if(res == "success") {
                div.innerHTML = "<p class='success'>S'ha enviat correctament</p>";
                newsletter_form.reset();
            } else {
                div.innerHTML = "<p class='error'>S'ha produït un error</p>";
            }
        })
        .catch(error => {
            div.innerHTML = "<p class='error'>S'ha produït un error</p>";
        });
        
        return false;
    });

    const more_info_form = document.querySelector("#more-info-form");
    more_info_form.addEventListener("submit", (event) => {
        event.preventDefault();
        const url = 'add-to-companies.php';
        const formData = new FormData(more_info_form);
        const div = document.querySelector("#container-result-form-more-info");

        fetch(url, {
            method: "POST",
            body: formData
        })
        .then(res => res.text())
        .then(res => {
            if(res == "success") {
                div.innerHTML = "<p class='success'>S'ha enviat correctament</p>";
                more_info_form.reset();
            } else {
                div.innerHTML = "<p class='error'>S'ha produït un error</p>";
            }
        })
        .catch(error => {
            div.innerHTML = "<p class='error'>S'ha produït un error</p>";
        });
        
        return false;
    });

    const cookies_message = document.querySelector("#cookies-message");
    if(cookies_message) {
        const cookies_button = document.querySelector("#cookies-button");
        cookies_button.addEventListener("click", (event) => {
            setCookie("cookies-accepted", true, 1000);
            cookies_message.classList.add("hidden");
        });
    }
});

function updateHeader(site_header, white_list_items, logo_site){
    if(window.scrollY == 0) {
        site_header.classList.add("header-on-top");
        //white_list_items.forEach(item => { item.classList.add("nav-item-show-line"); });
    } else {
        site_header.classList.remove("header-on-top");
        //white_list_items.forEach(item => { item.classList.remove("nav-item-show-line"); });
        if(window.scrollY > window.screen.height/2) {
            site_header.classList.add("header-with-logo");
        } else {
            site_header.classList.remove("header-with-logo");
        }
    }
}

function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}