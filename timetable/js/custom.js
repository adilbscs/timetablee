$(document).ready(function(e) {
	alert("bkm");
	
		$("#Reg_Courses").change(function(e) {

				var tmpltname=$("#Reg_Courses :selected").val();
			alert("dsd");
				$.ajax({
					type: "POST",
							url :  "../ajax/tmplt_sms_recd",
							data : { tmpid : tmpltname },
							success: function(data)
								{

									$("#txtAreaMsg").text(data);
								}
				});

			});
});
