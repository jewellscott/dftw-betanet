function resizePlaylist() {
	document.addEventListener("DOMContentLoaded", () => {
	    const albumArt = document.querySelector("#mp-album-art");
	    const playlist = document.querySelector("#mp-playlist");

	    const setPlaylistHeight = () => {
	        const albumArtHeight = albumArt.getBoundingClientRect().height;
	        playlist.style.maxHeight = `${albumArtHeight}px`;
	    };

	    // set the height when the dom is loaded fully - so js can read the php
	    setPlaylistHeight();

	    // update when it resizes - fluidly!!!!
	    window.addEventListener("resize", setPlaylistHeight);
	});
}

export { resizePlaylist }