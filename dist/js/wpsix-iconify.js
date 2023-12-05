(function () {
	class WPSixIconify {
		constructor(selector, options) {
			this.selector = selector;
			this.element = document.querySelector(`${this.selector} .iconify`);
			this.options = options;
			this.init();
		}

		destroy() {
			if ( this.element && this.options.iconify === null ) {
				this.element.remove();
			}
		}

		// Init plugin
		init() {
			this.destroy();

			if ( this.element && this.options.iconify ) {
				this.element.dataset.icon = this.options.iconify;
			}
		}
	}

	window.WPSixIconify = WPSixIconify;
})();
