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

	$('#station').on('change', function() {
		if(this.value!=''){
			filter_substation(this.value);
		}else{
			reset_substation();
		}
		/* Act on the event */
	});

	function filter_substation(parent_id) {
		var $options = $('#substation').find('option');
		$options.each(function(index, el) {
			var pid = $(el).attr('data-parent');
			if(pid == parent_id){
				$(el).removeAttr('disabled');
			}else{
				$(el).attr('disabled','disabled');
			}
		});

	}

	function reset_substation() {
		$('#substation').find('option').removeAttr('disabled');
	}


	$('#station_main').on('change', function() {
		if(this.checked){
			$("#mainstation-row").hide();
			$('#station-parent').val('');
		}else{
			$("#mainstation-row").show();
		}
	});	

	$('#station_sub').on('change', function() {
		if(this.checked){
			$("#mainstation-row").show();
		}else{
			$("#mainstation-row").hide();
		}
	});	


	$('#btn-search').on('click', function(event) {
		event.preventDefault();
		$('.panel-search').toggle(500);
	});

	$('.sub-panel').on('click', '.panel-heading', function(event) {
		$(this).next().toggle(500);
	});

});