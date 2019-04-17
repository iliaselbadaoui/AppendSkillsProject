Vue.component('fa-item',{
    props:{
        css:{//La class css de composante
            type:String,
            required:true
        },
        faClass:{//La class fontAwesom de la composante
            type:String,
            required:true
        },
        title:{//Le titre de l'élément
            type: String,
            default:'This is a UI-Component'
        },
        ident:{//L'id de l'élément
            type: String,
            required: true
        }
    },
    template:'<span :id="ident" :class="css" :title="title"><i :class="faClass"></i></span>'
});