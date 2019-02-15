$( function() {

  $( "#datepicker" ).datepicker();

 	var deposit = $("#deposit-amount");
  var depositRange = $("#deposit-amount-range");
	$('#deposit-amount-range').slider(
	{
		range: "min",
		min: 100,
	  value: 100,
	  max: 3000000,
	  step: 1,
	  change: function(depositRange, c) 
	  {
	    deposit.val(c.value)
	  },
	  slide: function(depositRange, c) 
	  {
	    deposit.val(c.value)
	  }
	})
	deposit.val(100).keyup(function() 
	{
  	depositRange.slider("value", this.value)
	})
	$('#deposit-amount-range').on("input", function () 
	{
		$("#deposit-amount").val(this.value);
	});
	$("#deposit-amount").keyup(function()
	{
		$('#deposit-amount-range').val(this.value);
	})
   
	var amountMonth = $("#amount-per-month");
  var amountRange = $("#amount-per-month-range");
	$('#amount-per-month-range').slider(
	{
		range: "min",
		min: 100,
    value: 100,
    max: 3000000,
    step: 1,
    change: function(amountRange, c) {
        amountMonth.val(c.value)
    },
     slide: function(amountRange, c) {
        amountMonth.val(c.value)
    }
	})
	amountMonth.val(100).keyup(function() {
	  amountRange.slider("value", this.value)
  })
	$('#amount-per-month-range').on("input", function () 
	{
		$("#amount-per-month").val(this.value);
	});
	$("#amount-per-month").keyup(function()
	{
		$('#amount-per-month-range').val(this.value);
	})

	$(".content-form").ajaxForm(
		{
			dataType: "json",
  		success:function(data)
  		{
  			$("#final-value").text(data);
  		}
		})
});