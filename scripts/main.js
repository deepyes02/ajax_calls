window.onload = () => {

	const blips = document.querySelectorAll('.blips');
	setTimeout(() => {
		blips.forEach(blip => {
			blip.classList.add("display_none");
		});
	}, 1000);

} // end windows on load 


