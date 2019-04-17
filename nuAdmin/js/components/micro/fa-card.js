Vue.component('fa-card',{
    props:{
        fa_class:{
            type: String,
            required: true
        },
        message:{
            type:String,
            required:true
        },
        ident:{
            type:String,
            required:true
        }
    },
    template:`<div :id="ident" class="fa-card">
                <a>
                    <span><i :class="fa_class"></i></span>
                    <span>{{message}}</span>
                </a>
            </div>`
});