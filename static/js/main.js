import Product from './product.js';

let functions = {
	destroy() {
		let parent = document.querySelector('.products');
		let elements = parent.querySelectorAll('.product input:checked');
		let products = [];
		elements.forEach(v => products.push(+v.id));
		let result = Product.delete(products);
		if(true) {
			elements.forEach(v => parent.removeChild(v.closest('.product')));
			alert('Продукты успешно удалены');
		}else alert('Произошла ошибка на сервере');
	},
	add() {
		location.replace('/add');
	}
}
let typeLink = document.querySelector('#type');
document.querySelector('#action').onclick = function() {
	let type = typeLink.value;
	functions[type]();
}