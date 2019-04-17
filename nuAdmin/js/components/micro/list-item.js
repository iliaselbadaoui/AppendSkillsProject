Vue.component('list-item', {
    props:{
        itemId:{type:String,required:true},
        itemClass:{type: String,required: true},
        faClass: {type: String,required: true},
        message:{type: String,required: true}
    },
    template: `<span :id="itemId" :class="itemClass"><i :class="faClass"></i>{{message}}</span>`,
});