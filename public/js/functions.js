		function getConfirmation2(p_id){

			var token = $('#_token').val();
			var url = "{{ route('currencies.destroy', ':p_id') }}";
					url = url.replace(':p_id', p_id);

			swal({
					title: "@lang('text.confirm')",
					text: "@lang('text.delete')",
					icon: "warning",
					buttons: [
						"@lang('text.no')",
						 "@lang('text.yes')",
					],
					dangerMode: true,
				}).then(function(isConfirm) {
					if (isConfirm) {
						swal({
							 title: "@lang('text.confirm')",
							text: "@lang('text.delete_s')",
							icon: 'success'
						}).then(function() {

						//Delete Currency
												$.ajax({
														url: url,
														data: { id: p_id,
																		_method: 'DELETE'
																	},
														type: "POST",
														headers: {'X-CSRF-TOKEN': token},
														dataType : 'html',
														success: function (data) {
														var result = $('<div />').append(data).find('#panel').html();
														$('#panel').html(result);

														}
												});


						});
					} else {
						swal("@lang('text.cancel')", "@lang('text.cancel_o')", "error");
					}
				});
		 }

//onClick="getConfirmation()"

		 	function getConfirmation(p_id){
					//var mybtn = document.getElementById('mybtn');
					var mybtn = $('#mybtn');
					alert(p_id);
				//	mybtn.onclick = function(){
					alert(mybtn);
				//	var p_id = 5;
						alert('Somebody hit me');
		 			var token = $('#_token').val();
		 			var url = "{{ route('institutions.destroy', ':p_id') }}";
		 					url = url.replace(':p_id', p_id);

		 			swal({
		 					title: "@lang('text.confirm')",
		 					text: "@lang('text.delete')",
		 					icon: "warning",
		 					buttons: [
		 						"@lang('text.no')",
		 						 "@lang('text.yes')",
		 					],
		 					dangerMode: true,
		 				}).then(function(isConfirm) {
		 					if (isConfirm) {
		 						swal({
		 							 title: "@lang('text.confirm')",
		 							text: "@lang('text.delete_s')",
		 							icon: 'success'
		 						}).then(function() {

		 						//Delete Currency
		 												$.ajax({
		 														url: url,
		 														data: { id: p_id,
		 																		_method: 'DELETE'
		 																	},
		 														type: "POST",
		 														headers: {'X-CSRF-TOKEN': token},
		 														dataType : 'html',
		 														success: function (data) {
		 														var result = $('<div />').append(data).find('#panel').html();
		 														$('#panel').html(result);

		 														}
		 												});


		 						});
		 					} else {
		 						swal("@lang('text.cancel')", "@lang('text.cancel_o')", "error");
		 					}
		 				});
		 		 }
