Vue.component("action-bar",{
    //Fa-Item is form spacing horizontally to avoid that the logo be under the navigation drawer
    template:`<div id="actionBar">
                <fa-item ident="MenuAux" title="void" css="item" faClass="fas fa-bars"></fa-item>
                <span class="homeLink"><img src="assets/nuAdmin.png" /></span>
                <span class="img-item" id="Admin"><img src="assets/octocat.png"><list listId="userMenu"></list></span>
              </div>`
});