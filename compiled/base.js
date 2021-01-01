function openSearchOverlay() {
	// Open Search Overlay
	const open = document.querySelector(".search-menu");
	const overlay = document.querySelector(".modalDialog");
	const close = document.querySelector(".dialogClose");
	const form = document.querySelector(".searchField");

	open.addEventListener("click", () => {
		overlay.style.opacity = "1";
		overlay.style.pointerEvents = "auto";
		close.style.pointerEvents = "auto";
		form.style.pointerEvents = "auto";
	});

	close.addEventListener("click", () => {
		overlay.style.opacity = "0";
		overlay.style.pointerEvents = "none";
		close.style.pointerEvents = "none";
		form.style.pointerEvents = "none";
	});
}

function openCloseMenu() {
	const icon = document.getElementById("menu-icon");
	const menu = document.getElementById("menu-main");

	icon.addEventListener("click", (e) => {
		const clicked = e.target.classList.contains("clicked");

		if (clicked) {
			icon.classList.remove("clicked");
			menu.classList.remove("active");
		} else {
			icon.classList.add("clicked");
			menu.classList.add("active");
		}
	});
}

window.onload = () => {
	openSearchOverlay();
	openCloseMenu();
};
