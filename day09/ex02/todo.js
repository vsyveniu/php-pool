
window.onload = function setlisteners()
{
	var addElem = document.getElementById('new');
	addElem.addEventListener("click", newElem);
	var remelem = document.getElementsByClassName('innernode');
}

function setCookie (name, value, expires, path) {
      document.cookie = name + "=" + escape(value) +
        ((expires) ? "; expires=" + expires : "") +
        ((path) ? "; path=" + path : "");
}

function newElem()
{
	var test = "OK";
	console.log(test);
	var elem = document.createElement('div');
	var store = document.getElementById('ft_list');
	var newdiv = document.createElement('div');
	var text = prompt('set your new task', 'super task...');
	newdiv.className = "innernode";
	newdiv.addEventListener("click", remove);
	store.insertBefore(newdiv, store.firstChild);
	newdiv.innerHTML = text;
	setCookie("todo", "text", "Mon, 01-Jan-2019 00:00:00 GMT", "/");

}

function remove()
{
	var elem = document.getElementById('ft_list');
	elem.removeChild(this);
}