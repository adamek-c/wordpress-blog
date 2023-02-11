let position = 0;
const allSliders = [...document.querySelectorAll(".slider__container__item")];
const leftArrow = document.querySelector("[data-left]");
const rightArrow = document.querySelector("[data-right]");

class Slider {
	constructor() {
		this.events();
	}

	events() {
		this.handleDisabledArrows();
		this.handleLeftArrowSlide();
		this.handleRightArrowSlide();
	}

	handleDisabledArrows() {
		if (position == 0) {
			leftArrow.classList.add("disabled");
		}

		if (position == allSliders.indexOf(allSliders[allSliders.length - 1])) {
			rightArrow.classList.add("disabled");
		}
	}

	handleLeftArrowSlide() {
		leftArrow.addEventListener("click", () => {
			if (position != 0) {
				position--;
				rightArrow.classList.remove("disabled");
				allSliders.forEach((slider) => {
					slider.style.transform = `translateX(calc(0%))`;

					if (position != 0) {
						slider.style.transform = `translateX(calc((-100% * ${position}) - ${position}rem))`;
					}
				});
			}

			this.handleDisabledArrows();
		});
	}

	handleRightArrowSlide() {
		rightArrow.addEventListener("click", () => {
			if (position != allSliders.indexOf(allSliders[allSliders.length - 1])) {
				position++;
				leftArrow.classList.remove("disabled");
				allSliders.forEach((slider) => {
					slider.style.transform = `translateX(calc(-100% - 1rem))`;

					if (position != 0) {
						slider.style.transform = `translateX(calc((-100% * ${position}) - ${position}rem))`;
					}
				});
			}

			this.handleDisabledArrows();
		});
	}
}

export default Slider;
