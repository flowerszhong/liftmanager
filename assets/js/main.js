$(function () {
	$('.stations-choose').on('click','span', function(event) {
		$this = $(this);
		$this.addClass('selected').siblings().removeClass('selected');
		var id = $this.attr('data-id');
		var grade = $this.attr('data-grade');
		var name = $.trim($this.text());
		$('#station').val(id);
		$('#grade').val(grade);
		$('#station-name').val(name);
	});

	$('.btn-detail').on('click', function(event) {
		event.preventDefault();
		$(this).parents('tr').next('.detail').toggle();
		/* Act on the event */
	});

	$('.btn-delete').on('click', function(event) {
		if(window.confirm('确定删除该记录?')){
			return true;
		}else{
			event.preventDefault();
			return false;
		}

		/* Act on the event */
	});
});