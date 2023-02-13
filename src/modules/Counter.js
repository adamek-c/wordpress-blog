let timer;
const one = document.querySelector("#one");
const two = document.querySelector("#two");
const three = document.querySelector("#three");
const four = document.querySelector("#four");

class Counter {
	plus = 0;
	constructor(div, amount) {
		this.div = div;
		this.amount = amount;
		this.events();
	}

	events() {
		this.handleCount();
	}

	handleCount() {
		timer = setInterval(() => {
			if (
				Number(this.div.innerHTML !== this.amount && this.plus !== this.amount)
			) {
				this.plus++;

				if (
					this.amount === this.plus &&
					Number(this.div.innerHTML) === this.amount
				) {
					clearInterval(timer);
				}
				this.div.innerHTML = this.plus;
			}
		}, 10);
	}
}

export default Counter;
