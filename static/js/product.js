export default class Product {
	static async get() {
		let result = await fetch('/api/get').then(res => res.json());
		return result
	}
	static async add(product) {
		let data = new FormData;
		data.append("SPU", product.SPU);
		data.append("name", product.name);
		data.append("price", product.price);
		data.append("type", product.type);
		data.append("characters", product.characters);
		let result = await fetch('/api/add', {method:'POST', body:data}).then(res => res.json());
		return result;
	}
	static async delete(products) {
		let data = new FormData;
		data.append('products', products);
		let result = await fetch('/api/delete', {method: 'POST', body: data}).then(res => res.json());
		return result;
	}
}
