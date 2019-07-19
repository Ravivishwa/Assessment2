$("div").on("click", function() {
	event.stopPropagation();
    alert(this.id);
});