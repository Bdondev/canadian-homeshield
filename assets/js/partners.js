document.addEventListener('DOMContentLoaded', () => {
	const track = document.querySelector('.partners-track');
	const buttons = document.querySelectorAll('[data-partners-direction]');

	if (!track || !buttons.length) {
		return;
	}

	const updateControls = () => {
		const canScroll = track.scrollWidth > track.clientWidth + 1;

		buttons.forEach((button) => {
			button.disabled = !canScroll;
			button.classList.toggle('opacity-40', !canScroll);
			button.setAttribute('aria-disabled', String(!canScroll));
		});
	};

	buttons.forEach((button) => {
		button.addEventListener('click', () => {
			if (button.disabled) {
				return;
			}

			const direction = button.dataset.partnersDirection === 'previous' ? -1 : 1;
			track.scrollBy({ left: direction * track.clientWidth * 0.8, behavior: 'smooth' });
		});
	});

	window.addEventListener('resize', updateControls);
	updateControls();
});
