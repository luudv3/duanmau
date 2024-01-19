// var album=[];
// for(var i=0;i<5;i++){
//     album[i]=new Image();
//     album[i].src="view/images/anh3.jpg";
// }
//  var interval=setInterval(slideshow,2000);
// index=0;
// function slideshow(){
//     index++;
//     if(index>4){
//         index=0;
//     }
//     document.getElementById("banner").src=album[index].src;


// }
// function next(){
//     index++;
//     if(index>4){
//         index=0;
//     }
//     document.getElementById("banner").src=album[index].src;

// }
// function pre(){
//     index--;
//     if(index<0){
//         index=4;
//     }
//     document.getElementById("banner").src=album[index].src;

// }




// Cách tự làm : 

var arr = ["view/images/banner0.jpg", "view/images/banner1.jpg", "view/images/banner3.jpg", "../view/images/banner3.jpg",
    "view/images/banner4.jpg", "view/images/banner5.jpg"
];
var anh = document.querySelector('#banner');
var index = 0;

function next() {
    if (index === arr.length - 1) {
        index = 0;
    } else {
        index++;
    }
    if (anh) {
        anh.src = arr[index];
    }
}

function pre() {
    if (index === 0) {
        index = arr.length - 1;
    } else {
        index--;
    }
    if (anh) {
        anh.src = arr[index];
    }
}

setInterval('next()', 2000);
