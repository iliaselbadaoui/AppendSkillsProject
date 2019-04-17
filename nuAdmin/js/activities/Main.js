'use strict';
//The active item in navigation drawer
let active_item;
//Thi function executes only on large screens
function largeScreen() {
    let fragment = document.getElementById("fragment"),
        navigationDrawer = document.getElementById("navigationDrawer"),
        actionBar = document.getElementById("actionBar");

    builder.fillRemainingWidth(fragment,navigationDrawer);
    builder.fillRemainingHeight(fragment,actionBar);
    fragment.style.marginLeft="64px";
    navigationDrawer.style.left="0";
    navigationDrawer.setAttribute("state","slim");
}
//this function executes on medium screens
function mediumScreen() {
    let fragment = document.getElementById("fragment"),
        navigationDrawer = document.getElementById("navigationDrawer"),
        actionBar = document.getElementById("actionBar");

    builder.fillRemainingWidth(fragment,null);
    builder.fillRemainingHeight(fragment,actionBar);
    fragment.style.marginLeft="0";
    navigationDrawer.style.left="-72px";
    navigationDrawer.setAttribute("state","gone");
}

//on page loading
builder.onCreate(function () {
    //components
    let width = window.innerWidth,
        fragment = document.getElementById("fragment"),
        navigationDrawer = document.getElementById("navigationDrawer"),
        actionBar = document.getElementById("actionBar"),
        admin = document.getElementById("Admin"),
        adminMenu = document.getElementById("userMenu"),
        settings = document.getElementById("Settings"),
        logout = document.getElementById("Logout"),
        menu = document.getElementById("Menu"),
        menuAux = document.getElementById("MenuAux"),
        home = document.getElementById("Home"),
        user = document.getElementById("Users"),
        gains = document.getElementById("Money"),
        course = document.getElementById("Course"),
        statistics = document.getElementById("Statistics"),
        enterprise = document.getElementById("Enterprise"),
        manage = document.getElementById("Manage");

    //happens on components loading
    home.className="active_item";
    active_item=home;
    //setting events for menu items
    builder.setOn("click",admin,function () {
        if(adminMenu.className===""){
            adminMenu.className="ActiveUserMenu";
        }else{
            adminMenu.className="";
        }
        event.stopPropagation();
    });
    builder.setOn("click",settings,function () {
        fragment.src="pages/settings.php";
    });
    builder.setOn("click",logout,function () {
        var xhr = new XMLHttpRequest(),
            formData = new FormData();
        formData.append("op","logout");
        xhr.open('POST',"../controllers/UserController.php",false);
        xhr.send(formData);
        if (xhr.status==200){
            window.location="index.php";
        }
    });
    builder.setOn("click",menuAux,function () {
        if (navigationDrawer.getAttribute("state")==="gone"){
            builder.fillRemainingWidth(fragment,navigationDrawer);
            fragment.style.marginLeft="64px";
            navigationDrawer.style.left="0";
            navigationDrawer.setAttribute("state","slim");
        }
    });
    builder.setOn("click",menu,function () {
        builder.fillRemainingWidth(fragment,null);
        fragment.style.marginLeft="0";
        navigationDrawer.style.left="-72px";
        navigationDrawer.setAttribute("state","gone");
    });
    builder.setOn("click",home,function () {
        fragment.src="pages/home.php";
        active_item.className="item";
        home.className="active_item";
        active_item=home;
    });
    builder.setOn("click",user,function () {
        fragment.src="pages/users.php";
        active_item.className="item";
        user.className="active_item";
        active_item=user;

    });
    builder.setOn("click",gains,function () {
        fragment.src="pages/gains.php";active_item.className="item";
        gains.className="active_item";
        active_item=gains;
    });
    builder.setOn("click",course,function () {
        fragment.src="pages/formations.php";
        active_item.className="item";
        course.className="active_item";
        active_item=course;
    });
    builder.setOn("click",statistics,function () {
        fragment.src="pages/statistics.php";
        active_item.className="item";
        statistics.className="active_item";
        active_item=statistics;
    });
    builder.setOn("click",enterprise,function () {
        fragment.src="pages/enterprise.php";
        active_item.className="item";
        enterprise.className="active_item";
        active_item=enterprise;
    });
    builder.setOn("click",manage,function () {
        fragment.src="pages/manage.php";
        active_item.className="item";
        manage.className="active_item";
        active_item=manage;
    });
    if (width<=2400&&width>700){
        largeScreen();
    }else if (width<=700){
        mediumScreen();
    }
    //Check url
    urlDecode();
});

//watch screen's state
builder.watchDevice(function () {
    const width = window.innerWidth;
    if (width<=2400&&width>700){
        largeScreen();
    }else if (width<=700){
        mediumScreen();
    }
});

//watch the location of the window
builder.onLocationChange(function () {
    urlDecode();
});

function urlDecode() {
    let items = document.querySelectorAll(".item"),
        url = window.location.toString(),
        itemId;
    if(url.includes("#")){
        itemId=url.split("#");
        for (let i = 0; i <items.length ; i++) {
            if(items[i].id===itemId[1]){
                items[i].click();
                break;
            }
        }
    }
}