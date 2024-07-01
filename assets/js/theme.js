document.addEventListener("DOMContentLoaded", function(e) {
	function remToPixels(rem) {
		return rem * parseFloat(getComputedStyle(
			document.documentElement).fontSize);
	}

	function getGridHeight() {
		var style = getComputedStyle(document.body);
		var gridHeightString = style.getPropertyValue('--grid-full-height');
		/* assume rem */
		return remToPixels(gridHeightString.split("rem")[0]);
	}

	function windowResize(e) {
		var gridHeight = getGridHeight();
		var windowGridRows = Math.ceil(window.innerHeight / gridHeight);

		document.documentElement.style.setProperty('--window-rows', windowGridRows);
	}
	windowResize();
	window.addEventListener("resize", windowResize);


	function updateAutoRowSpan(e=null , parent=document) {
		parent.querySelectorAll(".row-span-auto").forEach((el) => {
			updateAutoRowSpan(e, el);
			var rows =  Math.ceil(el.clientHeight / getGridHeight());
			el.style.gridRow = "span " + rows + " / span " + rows;
		});
	}
	updateAutoRowSpan();
	window.addEventListener("resize", updateAutoRowSpan);
	window.addEventListener("load", updateAutoRowSpan);

	/* auto bg image from data-bg-image */
	document.querySelectorAll("*[data-bg-image]").forEach((el) => {
		el.style.backgroundImage="url('" +
			el.getAttribute('data-bg-image') + "')";
	});

	document.querySelectorAll("*[data-link]").forEach((el) => {
		el.onclick = () => {
			window.location = el.getAttribute('data-link');
		}
	});

	document.querySelectorAll("*[data-z-index]").forEach((el) => {
		el.style.zIndex = el.getAttribute('data-z-index');

		var style = getComputedStyle(el);
		if(style.position === "static" || style.position === "") {
			el.style.position = "relative";
		}
	});


	document.querySelectorAll(".grid > *[class*='row-span-']:not(.row-span-auto)").forEach((el) => {
		el.classList.forEach((cls) => {
			const found = cls.match(/row-span(-\w+)?-(\d+)/g);
			if(found) {
				console.log(el);
				console.log(found);
			}
		});
	});
});
