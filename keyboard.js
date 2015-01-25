document.onkeydown = function(e) {

console.log('Key Pressed: ', e.keyCode);

}
document.onkeypress = function(e){
  e = e || event;
  console.log(String.fromCharCode(e.keyCode));
}