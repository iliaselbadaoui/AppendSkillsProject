Vue.component('nuswitch',{
    props:{
        message:{type: String,default: 'Désactiver'},
        css:{type:String,default:'switch'}
    },
    template:`<span :class="css" v-on:click.stop.prevent="change">{{message}}</span>`,
    methods:{
        change (e) {
            if(this.css==="switch"){
                this.css="switch-Activate";
                this.message="Réactiver";
            }else{
                this.css="switch";
                this.message = "Désactiver";
            }
        }
    }
});