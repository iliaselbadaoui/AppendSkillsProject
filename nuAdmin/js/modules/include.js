function include($path,$after) {
    let script = document.createElement("script");
    if (arguments.length>=2){
        let $args = arguments[0].toString().split(",");
        let _path = arguments[1]+$args[1];
        script.src= _path;
        script.type="text/javascript";
        if (arguments[2]==="default"){
            document.head.insertBefore(script,document.getElementById("insertionRef"));
        }else{
            document.head.insertBefore(script,arguments[2]);
        }
    }
}