/**
 * Techsome theme scripts
 */

(function () {
	'use strict';

	// Skip link: focus main when activated
	var skipLink = document.querySelector('.skip-link');
	var main = document.getElementById('techsome-main');
	if (skipLink && main) {
		skipLink.addEventListener('click', function (e) {
			e.preventDefault();
			main.setAttribute('tabindex', '-1');
			main.focus({ preventScroll: true });
		});
	}

	// Mobile menu toggle
	var menuToggle = document.querySelector('.techsome-menu-toggle');
	var navWrap = document.querySelector('#techsome-primary-nav') || document.querySelector('.techsome-header__nav-wrap');
	if (menuToggle && navWrap) {
		menuToggle.addEventListener('click', function () {
			var expanded = this.getAttribute('aria-expanded') === 'true';
			this.setAttribute('aria-expanded', !expanded);
			navWrap.classList.toggle('is-open', !expanded);
		});
	}

	// Submenu toggles (level 2 & 3): inject buttons and handle expand/collapse
	function initSubmenuToggles() {
		var menus = document.querySelectorAll('.techsome-nav .techsome-menu');
		menus.forEach(function (menu) {
			var itemsWithChildren = menu.querySelectorAll('.menu-item-has-children');
			itemsWithChildren.forEach(function (li) {
				if (li.querySelector('.techsome-submenu-toggle')) return;
				var sub = li.querySelector('.sub-menu');
				if (!sub) return;
				var subId = sub.id || 'submenu-' + Math.random().toString(36).slice(2, 9);
				sub.setAttribute('id', subId);
				var btn = document.createElement('button');
				btn.type = 'button';
				btn.className = 'techsome-submenu-toggle';
				btn.setAttribute('aria-expanded', 'false');
				btn.setAttribute('aria-controls', subId);
				btn.setAttribute('aria-label', li.querySelector('a') ? li.querySelector('a').textContent.trim() + ' submenu' : 'Toggle submenu');
				btn.innerHTML = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>';
				li.insertBefore(btn, sub);
				btn.addEventListener('click', function (e) {
					e.preventDefault();
					e.stopPropagation();
					var expanded = this.getAttribute('aria-expanded') === 'true';
					this.setAttribute('aria-expanded', !expanded);
					li.classList.toggle('is-expanded', !expanded);
				});
			});
		});
	}
	initSubmenuToggles();
})();
