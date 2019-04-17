Vue.component("nav-drawer",{
    template:`<div id="navigationDrawer" state="slim">
                <fa-item ident="Menu" title="Menu" css="item" faClass="fas fa-bars"></fa-item>
                <fa-item ident="Home" title="Acceuil" css="item" faClass="fas fa-home"></fa-item>
                <fa-item ident="Users" title="Utilisateurs" css="item" faClass="fas fa-users"></fa-item>
                <fa-item ident="Money" title="Revenues" css="item" faClass="fas fa-dollar-sign"></fa-item>
                <fa-item ident="Course" title="Formations" css="item" faClass="fas fa-graduation-cap"></fa-item>
                <fa-item ident="Statistics" title="Statistiques" css="item" faClass="fas fa-chart-pie"></fa-item>
                <fa-item ident="Enterprise" title="Entreprises" css="item" faClass="fas fa-building"></fa-item>
                <fa-item ident="Manage" title="Gérer les admins" css="item" faClass="fas fa-tasks"></fa-item>
              </div>`
});