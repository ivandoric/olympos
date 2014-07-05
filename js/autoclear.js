function init(){
	var inp = document.getElementsByTagName('input');
	for(var i = 0; i < inp.length; i++) {
		if(inp[i].type == 'text') {
			inp[i].setAttribute('rel',inp[i].defaultValue)
			inp[i].onfocus = function() {
				if(this.value == this.getAttribute('rel')) {
					this.value = '';
				} else {
					return false;
				}
			}
			inp[i].onblur = function() {
				if(this.value == '') {
					this.value = this.getAttribute('rel');
				} else {
					return false;
				}
			}
			inp[i].ondblclick = function() {
				this.value = this.getAttribute('rel')
			}
		}
	}
}
if(document.childNodes) {
	window.onload = init
}