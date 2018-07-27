
<nav class="sidenav sticky-top  col-2 reset">
        <div class="logo sticky-top d-flex justify-content-between align-items-center">
            <a href="/" class="navbar-brand reset">LOGO</a>
            <a href="#" id="menu-toggle-bar" ><i class="fas fa-ellipsis-v"></i></a>
        </div>
    <?php require "sidebar.view.php" ?>
</nav>

<script>

var menuicon = document.getElementById("menu-toggle-bar");
var nav = document.querySelector(".sidenav");
var logo = document.querySelector(".navbar-brand");
var sidemenu = document.querySelectorAll(".listElement");
var icons = document.querySelectorAll(".icon");


menuicon.addEventListener('click',(event)=>{
    event.preventDefault();
    toggleNavBar();
})


function toggleNavBar(){
    if(nav.classList){
        menuicon.classList.add('toggle-bar');
        logo.classList.toggle('toggle-logo')
        nav.classList.toggle('toggle-menu');
        nav.classList.toggle('col-2');
    };

    sidemenu.forEach((element)=>{
        element.classList.toggle('toggle-elements')
    })
}


</script>