Vue.component('list',{
    props:{
        listId:{
            type:String,
            required:true
        },
    },
   template:`<div :id="listId">
                <list-item v-for="item in items" :key="item.itemId"  :itemId="item.itemId" :itemClass="item.itemClass" :message="item.message" :faClass="item.faClass"></list-item>
             </div>`,
    data:function () {
        return {
            items:[
                {itemId:"Settings",itemClass: "list-item",message:"Paramètres",faClass:"fas fa-sliders-h"},
                {itemId:"Logout",itemClass: "list-item",message:"Déconnecter",faClass:"fas fa-power-off"}
            ]
        }
    }
});