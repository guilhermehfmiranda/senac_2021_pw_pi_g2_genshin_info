function create_menu(mod) {
    var menu_template = 
`
<nav id="_menu"
    class="navbar 
        navbar-expand-lg 
        navbar-dark 
        bg-dark"
    style="position: fixed; 
        right: 0; 
        left: 0;">
    <div id=""
        class="container-fluid 
            justify-content-around">
        <div id=""
            class="navbar-brand 
                justify-content-start"
            onClick="location.href = '` + mod + `index.html'">
            <img id="_logo_img"
                src="` + mod + `../assets/img/Genshin-Impact-logo.png"
                alt="..." /> 
            <div id="_logo_span"
                class="text-wrap
                    text-break
                    text-center
                    shadow">
                <span>
                    <h3>Info Site</h3>
                </span>
            </div>
        </div>
        <div id=""
            class="d-flex 
                justify-content-end">
            <div id="">
                <form id=""
                    class="d-flex">
                    <input id=""
                        class="form-control"
                        type="search"
                        placeholder="Work In Progress">
                    <button id=""
                        class="btn 
                                btn-outline-light"
                        type="submit">Search</button>
                </form>
            </div>
            <div id=""
                class="dropdown">
                <button id="_dropdown_menu_button"
                    class="btn 
                        btn-outline-light 
                        dropdown-toggle"
                    type="button"
                    data-bs-toggle="dropdown">Menu</button>
                <div id=""
                    class="dropdown-menu 
                        dropdown-menu-dark 
                        dropdown-menu-end">
                    <a class="dropdown-item"
                        href="` + mod + `index.html">Home</a>
                    <a class="dropdown-item"
                        href="` + mod + `news.html">News</a>
                    <a class="dropdown-item"
                        href="` + mod + `gacha.html">Gacha</a>
                    <a class="dropdown-item"
                        href="` + mod + `characters.php">Characters</a>
                    <a class="dropdown-item"
                        href="` + mod + `weapons.php">Weapons</a>
                    <a class="dropdown-item"
                        href="` + mod + `admin.php">Admin</a>
                </div>
            </div>
        </div>
    </div>
</nav>
<br>
`;
    document.getElementById("_menu_placeholder").innerHTML = menu_template;
}
function create_footer() {
    var footer_template = 
`
<div class="container my-5">
    <div style="background-color: #1c2331"
        class=" text-wrap
            text-break
            text-center
            text-white">
        <div style="background-color: #6351ce"
            class="d-flex 
                justify-content-center
                p-4">
            <span>
                Thank you for your visit
            </span>
        </div>
        <div class="d-flex
            justify-content-center
            p-4">
            <span>
                Hope you liked your stay
            </span>
        </div>
        <div style="background-color: rgba(0, 0, 0, 0.2)"
            class="text-start 
                p-3">
            © 2021 Copyright
        </div>
    </div>
</div>
`;
    document.getElementById("_footer_placeholder").innerHTML = footer_template;
}
function redirect(type, code) {
    
    //! workaround to not redirect in case of non-existent html {
    if (code != "ganyu") {
        if (code != "sucrose") {
            if (code != "15945") {
                if (code != "16077") {
                    return 0;
                }
            }
        }
    }
    //! }
    
    location.href = "html/" + type + "/" + code + ".html";
}
// function random_entries(){
//     Array.prototype.sample() = function(){
//         return this[Math.floor(Math.random() *this.length)];
//     }
//     var entries = [];
//     document.getElementById().innerHTML = 
// }