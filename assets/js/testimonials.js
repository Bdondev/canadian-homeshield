document.addEventListener('DOMContentLoaded', () => {
	const track = document.querySelector('.testimonials-track');
	const cards = track ? Array.from(track.querySelectorAll('.testimonials-card')) : [];
	const buttons = document.querySelectorAll('[data-testimonials-direction]');
	const current = document.querySelector('[data-testimonials-current]');
	const progress = document.querySelector('.testimonials-progress');

	if (!track || !cards.length || !buttons.length) {
		return;
	}

	let activeIndex = 0;

	const updateControls = () => {
		if (current) {
			current.textContent = String(activeIndex + 1).padStart(2, '0');
		}

		if (progress) {
			progress.style.transform = `scaleX(${(activeIndex + 1) / cards.length})`;
		}

		buttons.forEach((button) => {
			const isPrevious = button.dataset.testimonialsDirection === 'previous';
			button.disabled = isPrevious ? activeIndex === 0 : activeIndex === cards.length - 1;
			button.classList.toggle('opacity-40', button.disabled);
			button.setAttribute('aria-disabled', String(button.disabled));
		});
	};

	buttons.forEach((button) => {
		button.addEventListener('click', () => {
			const direction = button.dataset.testimonialsDirection === 'previous' ? -1 : 1;
			activeIndex = Math.max(0, Math.min(cards.length - 1, activeIndex + direction));
			cards[activeIndex].scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'start' });
			updateControls();
		});
	});

	updateControls();
});
