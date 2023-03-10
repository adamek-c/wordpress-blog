import "../sass/main.scss";

import Slider from "./modules/Slider";
import Counter from "./modules/Counter";
import GalleryModal from "./modules/GalleryModal";

if (window.location.pathname === "/") {
	const sliderNew = new Slider();
	const newOneCounter = new Counter(one, 150);
	const newTwoCounter = new Counter(two, 20);
	const newThreeCounter = new Counter(three, 300);
	const newFourCounter = new Counter(four, 300);
}

const newGallery = new GalleryModal();
