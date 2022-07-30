document.addEventListener('DOMContentLoaded', init);
function init(){
    let box = document.querySelector('table');
    let left = document.querySelector('#left');
    let right = document.querySelector('#right');
    let flag = false;
    function moveRight(){
        transition.begin(box, ["left", "15px", -(box.offsetWidth-window.innerWidth+15) + "px", "500ms", "linear"]);
        flag = !flag;        
    }
    function moveLeft(){
        transition.begin(box, ["left", "15px", -(box.offsetWidth-window.innerWidth+15) + "px", "500ms", "linear"]);
        flag = !flag;        
    }
    right.onclick = function(){
        if (!flag) {
            moveRight();
        }
    }

    left.onclick = function(){
        if (flag) {
            transition.begin(box, ["left", -(box.offsetWidth-window.innerWidth)+ "px", "15px", "500ms", "linear"]);
            flag = !flag;
        }
    }






























    // let box = document.querySelector('.table');
    // document.onclick = function(e){
    //     box.onmousemove = null;
    // }

    // document.onmousedown = function(e){
    //     let offset = e.clientX - box.offsetLeft;
    //     box.style.cursor = "crosshair";
    //     move(offset);
    // }

    // function move(offset){ 
    //     box.onmousemove = function(e){
    //         let move = offset - e.clientX;
    //         box.style.position = "absolute";
    //         let scroll = box.scrollLeft - move;
    //         if (scroll < -850){scroll = -850}
    //             if (scroll > 0){scroll = 7}    
    //                 box.style.left = scroll + "px";
    //         document.onmouseup = function(e){
    //         //box.style.position = "static";
    //             box.scrollLeft = e.clientX+"px";
    //             box.onmousemove = null;
    //             box.style.cursor = "default";
    //         }
    //         document.onclick = function(e){
    //         box.onmousemove = null;
    //         }
    //     }
    // }
}