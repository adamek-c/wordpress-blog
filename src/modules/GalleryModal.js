class GalleryModal {
	constructor() {
		this.event();
	}

	event() {
		this.handleShowModal();
	}

	handleShowModal() {
		const galleryItems = document.querySelectorAll("[data-gallery]");
		const modal = document.querySelector(".modal");
		const modalClose = document.querySelector(".modal__close");
		const imgSrc = document.querySelector(".modal__picture img");

		galleryItems.forEach((item) => {
			item.addEventListener("click", () => {
				const pictureSRC = item.children;

				for (const child of pictureSRC) {
					const srcAttribute = child.getAttribute("src");
					imgSrc.setAttribute("src", srcAttribute);
				}
				modal.classList.add("active");
			});
		});

		modalClose.addEventListener("click", () => {
			modal.classList.remove("active");
		});
	}
}

export default GalleryModal;
