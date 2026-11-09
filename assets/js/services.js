document.addEventListener('DOMContentLoaded', () => {
	const track = document.querySelector('.services-track');
	const buttons = document.querySelectorAll('[data-services-direction]');

	if (!track || !buttons.length) {
		return;
	}

	buttons.forEach((button) => {
		button.addEventListener('click', () => {
			const card = track.querySelector('.services-card');
			const distance = card ? card.getBoundingClientRect().width + 16 : track.clientWidth;
			const direction = button.dataset.servicesDirection === 'previous' ? -1 : 1;

			track.scrollBy({ left: distance * direction, behavior: 'smooth' });
		});
	});
});
