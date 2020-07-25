
function AddByClick(a){
    text_view.values.value+=a;
} 
function AddByKeyboard(e){
    var keyValue = e.key;
    text_view.values.value+=keyValue;

}
var btn = document.getElementById("submit");
btn.addEventListener("click", function(){
//var par = document.getElementById("test");
var xhr = new XMLHttpRequest();
var number = document.getElementById("num").value;
var stringy = [number];
var send = JSON.stringify(stringy);

xhr.open("POST", "test.php", false);
xhr.send(send);

console.log(xhr.responseText);
alert (xhr.responseText);
par.innerHTML = xhr.responseText;
alert ("wait");
});