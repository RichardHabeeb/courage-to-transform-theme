document.addEventListener("DOMContentLoaded", function(e) {

	function debounceListener(func) {
		var timeout;
		var handler = (e) => {
			if(timeout) {
				window.cancelAnimationFrame(timeout);
			}

			timeout = window.requestAnimationFrame(() => {
				func(e);
			});
		};
		return handler;
	}


	function getBreakpoint() {
		return window.getComputedStyle(document.body, ':before').content.replace(/\"/g, '');
	};

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
		document.documentElement.style.setProperty('--window-rows',
			windowGridRows);
	}

	function bodyResize(e) {
		document.documentElement.style.setProperty('--body-height',
			document.body.offsetHeight + "px");
		document.documentElement.style.setProperty('--scroll-height',
			document.documentElement.scrollHeight + "px");
	}

	function updateAutoRowSpan(e=null , parent=document) {

		const selector = (getBreakpoint() === "landscape") ?
			".row-span-auto, .row-span-l-auto" :
			".row-span-auto, .row-span-p-auto";

		parent.querySelectorAll(selector).forEach((el) => {
			updateAutoRowSpan(e, el);
			var rows =  Math.ceil(el.clientHeight / getGridHeight());
			el.style.gridRow = "span " + rows + " / span " + rows;
		});
	}

	function updateExpanded() {
		const ariaSelector = (getBreakpoint() === "landscape") ?
			".aria-expanded-l" : ".aria-expanded-p";

		document.querySelectorAll(ariaSelector).forEach((el) => {
			el.setAttribute("aria-expanded", true);
		});
	}


	const recalculate = debounceListener(() => {
		windowResize();
		updateAutoRowSpan();
		bodyResize();
		updateExpanded();
	});
	window.addEventListener("resize", recalculate, false);
	window.addEventListener("load", recalculate, false);



	/* auto bg image from data-bg-image */
	document.querySelectorAll("*[data-bg-image]").forEach((el) => {
		el.style.backgroundImage="url('" +
			el.getAttribute('data-bg-image') + "')";
	});

	document.querySelectorAll("*[data-z-index]").forEach((el) => {
		el.style.zIndex = el.getAttribute('data-z-index');

		var style = getComputedStyle(el);
		if(style.position === "static" || style.position === "") {
			el.style.position = "relative";
		}
	});


	/* Wrap all text inside button links in a span */
	document.querySelectorAll("a.button, .wp-block-button a").forEach((el) => {
		el.childNodes.forEach((child) => {
			if(child.nodeType == Node.TEXT_NODE) {
				const span = document.createElement("span");
				el.insertBefore(span, child);
				span.appendChild(child);
			}
		});
	});


	document.querySelectorAll("menu .sub-menu").forEach((el) => {
		if(el.id === "") {
			el.id = el.parentNode.id + "-submenu"
		}

		const link = el.parentNode.querySelector("a");
		if(link) {
			link.setAttribute("aria-haspopup", "tree");
			link.setAttribute("aria-controls", el.id);
			link.setAttribute("aria-expanded", "false");
		}
	});

	document.querySelectorAll("*[aria-haspopup][aria-controls]").forEach((el) => {

		const controlledSelector = "#" + el.getAttribute("aria-controls").replace(/\s+/g, ", #");



		document.querySelectorAll(controlledSelector).forEach((controlled) => {


			el.addEventListener('click', debounceListener(() => {
				el.setAttribute("aria-expanded",
					!(el.getAttribute("aria-expanded") === "true"));
				controlled.setAttribute("aria-selected",
					!(controlled.getAttribute("aria-selected") === "true"));
			}));


			const mouseover = debounceListener(() => {
				el.setAttribute("aria-expanded", "true");
				controlled.setAttribute("aria-selected", "true");
			});

			const mouseleave = debounceListener(() => {
				el.setAttribute("aria-expanded", "false");
				controlled.setAttribute("aria-selected", "false");
			});

			el.addEventListener('mouseover', mouseover);
			el.addEventListener('mouseleave', mouseleave);
			controlled.addEventListener('mouseover', mouseover);
			controlled.addEventListener('mouseleave', mouseleave);
		});
	});





	//document.querySelectorAll(".grid > *[class*='row-span-']:not(.row-span-auto)").forEach((el) => {
	//	el.classList.forEach((cls) => {
	//		const found = cls.match(/row-span(-\w+)?-(\d+)/g);
	//		if(found) {
	//			console.log(el);
	//			console.log(found);
	//		}
	//	});
	//});
});
