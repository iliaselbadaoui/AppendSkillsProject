'use strict';
//Executes on page load
builder.onCreate(function () {
    let renderer = document.getElementById("renderer"),
        cards = renderer.childNodes,
        app = window.parent;

    for (let i = 0; i < cards.length; i++) {
        cards[i].addEventListener("click",function () {
            if(app.window.location.toString().includes("#")){
                app.window.location.href=app.window.location.href.toString().split("#")[0]+"#"+cards[i].id;
            }else{
                app.window.location.href+="/#"+cards[i].id;
            }
        });
    }
});