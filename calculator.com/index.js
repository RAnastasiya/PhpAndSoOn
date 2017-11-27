var keys = document.querySelectorAll('#calculator span.btn');
var decimalAdded = false;
var btnVal = '';
for(var i = 0; i < keys.length; i++) {
	keys[i].onclick = function(e) {
		var input = document.querySelector('#calculator > form > div.top > input');
    btnVal = btnVal + this.innerHTML;
    console.log(btnVal.substr(-1));
    var btnValOne = btnVal.substr(-1)
    if(btnValOne == 'C') {
			btnVal = '';
      input.value = btnVal;
			decimalAdded = false;
		}else {
      input.value = btnVal;
      console.log(btnVal);
		}
	}
}
