export default  {
	errors: [],
	price(text) {
		if(!+text) {
			this.errors.push('price');
			alert('Цена не может быть текстом');
		}
	},
	characters(data) {
		if(!data.length) alert('Не выбран тип');
		data.forEach(v => {
			if(!+v.value) {
				this.errors.push(true);
				alert('Характеристики должны быть цифрами');
			}
		});
	}
}