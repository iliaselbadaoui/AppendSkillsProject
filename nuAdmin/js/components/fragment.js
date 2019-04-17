Vue.component("fragment",{
    props:{
        from:{
            type:String,
            required:true
        }
    },
    template:`<iframe v-bind:src="from" id="fragment"></iframe>`
});