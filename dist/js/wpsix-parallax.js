(function () {
  	const { mergeObjects } = BreakdanceFrontend.utils;

  	class WPSixImage {
   		defaultOptions = {
			overflow: true,
			delay: 0.7,
			maxTransition: 99,
			scale: 0.8,
			orientation: 'up'
		};

		constructor(selector, options) {
			this.selector = selector;
			this.element = document.querySelector(`${this.selector} .wpsix-parallax`);
			this.options = mergeObjects(this.defaultOptions, options);

			this.options.overflow = options && options.overflow ? false : true;

			this.init();
		}

		destroy() {
			if (!this.element) return;

			this.instance.destroy();
		}

		// Init plugin
		init() {
			this.instance = new simpleParallax(this.element, {
				overflow: this.options.overflow,
				delay: this.options.delay,
				maxTransition: this.options.maxTransition,
				scale: this.options.scale,
				orientation: this.options.orientation
			});
		}
	}

	window.WPSixImage = WPSixImage;
})();
