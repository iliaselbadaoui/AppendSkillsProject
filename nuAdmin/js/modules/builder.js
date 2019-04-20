const builder = ({
    watchDevice(callback){//this method executes every time the size of the window changes
        window.onresize = function () {
            callback();
        };
    },
    onCreate(callback){//this method executes every time the size of the window changes
        window.onload = function () {
            callback();
        };
    },
    onLocationChange(callback){
        window.onhashchange = function () {
            callback();
        }
    },
    fillRemainingWidth(Node,Ref){//this method allows to fill the remaining width with the element passed in arg["node"]
        let width = window.innerWidth,
            refWidth,
            nodeWidth;
        if (Ref!=null){
            refWidth= Ref.offsetWidth;
            //calculate the new width of the node
            nodeWidth = width-refWidth;
            nodeWidth=(nodeWidth*100)/width;
        }else{
            nodeWidth=100;
        }
        //Affect the width to the node
        Node.style.width=nodeWidth+"%";
    },
    setOn(event,node,callback){//this method sets up an event passed as args['event'] for a node => args['node']
        node.addEventListener(event,function () {
            callback();
        });
    },
    fillRemainingHeight(Node, Ref) {//this method allows to fill the remaining width with the element passed in arg["node"]
        let height = window.innerHeight,
            refHeight,
            nodeHeight;
        if (Ref!=null){
            refHeight = Ref.offsetHeight;
            //calculate the new width of the node
            nodeHeight = height-refHeight;
            nodeHeight=(nodeHeight*100)/height;
        }else{
            nodeHeight=100;
        }
        //Affect the width to the node
        Node.style.height=nodeHeight+"%";
    },
    Toast(message,timeout){
        let toast = document.createElement("div");
        toast.className="Toast";
        toast.textContent = message;
        document.body.appendChild(toast);
        setTimeout(function () {
            document.body.removeChild(toast);
        },timeout);
    }
});