"use strict"

   //
   // ASCII code:
   //    48-57>> digits [ 0 - 9 ]
   //    65-90>> UPPERCASE [ A - Z ]
   //    8>>   	Backspace
   //    95>>  	underscore [ _ ]
   //    32>>	space
   //

function onlynumbers(e)
{
	var car_m_cost=e.which||e.keycode;

	if((car_m_cost>=48 && car_m_cost<=57))
	{
		return true;
	}
	else
	{
		return false;
	}
}

function onlynumbers2(e)
{
	var car_s_cost=e.which||e.keycode;

	if((car_s_cost>=48 && car_s_cost<=57))
	{
		return true;
	}
	else
	{
		return false;
	}
}

// function profit()
// {
//    var car_m_cost = parseInt(document.getElementById("car_m_cost").value);
//    var car_s_cost = parseInt(document.getElementById("car_s_cost").value);
//
//    // to make sure that they are numbers
//    if (!car_m_cost) { car_m_cost = 0; }
//    if (!car_s_cost) { car_s_cost = 0; }
//
//    var profit = document.getElementById("profit");
//    profit.value = car_s_cost - car_m_cost;
//
// }

function Pcheck()
{
	var car_name = document.getElementById('car_name').value;
	var car_model = document.getElementById('car_model').value;
   var car_m_cost = document.getElementById("car_m_cost").value;
   var car_s_cost = document.getElementById("car_s_cost").value;
   var profit = document.getElementById("profit");
   profit.value = car_s_cost - car_m_cost;


   //var display = document.getElementById('display').value;

   	if(car_name == "" )
   	{
   		alert('PLEASE TYPE Product NAME');
   		return false;
   	}
      if(car_model == "" )
   	{
   		alert('PLEASE TYPE Product Model Name');
   		return false;
   	}
      if(car_m_cost == "" )
   	{
   		alert('PLEASE TYPE Market Price to proceed');
   		return false;
   	}
      if(car_s_cost == "" )
   	{
   		alert('PLEASE TYPE Selling Price to proceed');
   		return false;
   	}
      // if(profit == "" )
   	// {
   	// 	alert('PLEASE notify the Net Profit amount to proceed');
   	// 	return false;
   	// }
   	else
   	{
   			header("location: ../../view/ExistingProducts.php");
   	}

}
