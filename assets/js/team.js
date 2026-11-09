document.addEventListener('DOMContentLoaded', () => {
	const track = document.querySelector('.team-track');
	const cards = track ? Array.from(track.querySelectorAll('.team-card')) : [];
	const buttons = document.querySelectorAll('[data-team-direction]');

	if (!track || !cards.length || !buttons.length) {
		return;
	}

	let activeIndex = 0;

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

			const direction = button.dataset.teamDirection === 'previous' ? -1 : 1;
			activeIndex = Math.max(0, Math.min(cards.length - 1, activeIndex + direction));
			cards[activeIndex].scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'start' });
		});
	});

	window.addEventListener('resize', updateControls);
	updateControls();
});
