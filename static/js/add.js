import Validation from './validation.js';
import Product from './product.js';
let templates = [['size'],['weight'],['height', 'width', 'length']];
document.querySelector('select.type').onchange = function() {
	let form = document.querySelector('#dynamic');
	let type = this.value;
	let template = templates[type - 1];
	form.innerHTML = '';
	template.forEach(v => {
		let p = document.createElement('p');
		let label = v[0].toUpperCase() + v.slice(1);
		p.innerHTML = label+': <input type="text" name="'+v+'" class="characters"/>'
		form.appendChild(p);
	})
}
document.querySelector('#save').onclick = async function() {
	let form = document.querySelectorAll('#form>p>input, #form>p>select');
	let dynamicForm = document.querySelectorAll('#dynamic>p>input');
	let product = {};
	form.forEach(v => product[v.className] = v.value);	
	let characters = [];

	Validation.errors = [];
	Validation.price(product.price);
	Validation.characters(dynamicForm);
	if(Validation.errors.length) return;

	dynamicForm.forEach(v => characters.push(v.value));
	product.characters = characters.join('x');
	let result = await Product.add(product);

	if(result) {
		alert('Продукт успешно добавлен');
		location.replace('/');
	}else alert('Произошла ошибка на сервере');
}
