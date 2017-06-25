<!DOCTYPE html>
<html>
<head>
  <?php include("./navigation.html");?>
  <?php $header = 'Govind - Paritwadi - CP1';
  include("./header.php"); ?>

  <script type="text/javascript" src="./functions.js"></script>

  <title> Govind Promethean CMC </title>
    <!-- Original Links -->
    <!--link href="./bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/smalot-bootstrap-datetimepicker/2.4.4/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen"-->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" charset="UTF-8"></script> -->
    <!--script type="text/javascript" src="./bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/smalot-bootstrap-datetimepicker/2.4.4/js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/smalot-bootstrap-datetimepicker/2.4.4/js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script> -->

    <link href="./bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="./bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="./jquery-3.2.1.min.js" charset="UTF-8"></script>
    <script type="text/javascript" src="./bootstrap.min.js"></script>
    <script type="text/javascript" src="./bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="./bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>
	<script type="text/javascript" src="js/tableHeadFixer.js"></script>
    <!-- These are for Highcharts -->
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/highcharts-more.js"></script>
    <script src="http://code.highcharts.com/modules/solid-gauge.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>
    <script src="http://highcharts.github.io/export-csv/export-csv.js"></script>

    <!-- Moment.js Integration -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js"></script> -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script> -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/locale/en-au.js"></script> -->
    <script type="text/javascript" src="./moment.js"></script>
    <script type="text/javascript" src="./moment.min.js"></script>
    <script type="text/javascript" src="./en-au.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.13/moment-timezone-with-data.js"></script>

    <!-- Glyphicons Integration -->
    <!-- <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet"> -->

    <!-- These are for switch-->
    <link rel="canonical" href="http://www.bootstraptoggle.com">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.3/styles/github.min.css" rel="stylesheet" >
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css" rel="stylesheet">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>


<style>
@font-face
{
   font-family: 'Glyphicons Halflings';
   src: url('./fonts/glyphicons-halflings-regular.eot');
   src: url('./fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'),
        url('./fonts/glyphicons-halflings-regular.woff') format('woff'),
        url('./fonts/glyphicons-halflings-regular.ttf') format('truetype'),
        url('./fonts/glyphicons-halflings-regular.svg#glyphicons-halflingsregular') format('svg');
}

body
{
  background-color: #F6F6F6;
  font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
  font-weight: 500;
  font-size: 14px;
}

#button
{
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 5px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 5px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

#button:hover /*On Hovering Over the Button*/
{
    background-color: #00cc7a; /* Light Green */
    color: white;
}

#inner  /*, #Fromdatetimepicker, #Todatetimepicker*/
{
  display: table;
  margin: 0 auto;
}
/*
#table-div
{
  text-align: center;
  margin:0 auto;
  width: 95%;
  height: 550px;
  }

td,th,tr
{
  text-align: center;
  vertical-align: center;
}*/
#parent {
				height: 291px;
			}
			
			#fixTable {
				margin-top:-1px;
				margin-left:-1px;
				width: 1200px !important;
			}
			td {
				text-align:center;
				width:10px;
			}
			table,tr,td,th {
				border: 0.2px solid #CCCCCC;
			}
/*#table-div thead tr
{
  text-align: center;
  vertical-align: center;
  position: relative;
  height: 80px;
  background-color: #4CAF50;
  color: white;
  display:block;
}

#table-div th, td
{
    width:100px;  /*fixed width*/
}


#table-div  tbody
{
  position: relative;
  text-align: center;
  vertical-align: center;
  display:block;
  height:450px;
  overflow:auto;//set tbody to auto
}
*/
#dataTbl tr:nth-child(even)
{
  background-color: #f2f2f2
}


.label-default
{
  background-color: #F6F6F6;
  font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
  font-weight: 500;
  font-size: 14px;
  color : black;
  padding-left: 2cm;
}

</style>

<h3>
   <div class = "label label-default" align="center" style="width: 100%; height: 20%; float:center">Last Updated:
      <span id="Converted" align="center" style="float: center"></span>
   </div>
</h3>
<br />
</head>

<body>

  <div style="width:100%; height:200px; float: center;" align="center">
      <!-- field1: TSS Temperature -->
  		<div id="field1div" align="center" style="width: 25%; height: 85%; float: left"></div>
      <!-- field2:  Milk Temperature -->
  		<div id="field2div" align="center" style="width: 25%; height: 85%; float: left"></div>
      <!-- field3: Compressor  -->
  		<div id="field3div" align="center" style="width: 25%; height: 85%; float: left"></div>
      <!-- field4: AC Battery Voltage  -->
  		<div id="field4div" align="center" style="width: 25%; height: 85%; float: left"></div>
  </div>
  <div style="width:100%; height:200px; float: center;" align="center">
      <!-- field1: TSS Temperature -->
  		<div id="" align="center" style="width: 25%; height: 85%; float: left"></div>
      <!-- field5:  DC Battery Voltage -->
  		<div id="field5div" align="center" style="width: 25%; height: 85%; float: left"></div>
      <!-- field6: Charging Pump Current  -->
  		<div id="field6div" align="center" style="width: 25%; height: 85%; float: left"></div>
      <!-- field4: AC Battery Voltage  -->
  		<div id="" align="center" style="width: 25%; height: 85%; float: left"></div>
  </div>

  <br />

  <table id="relay" style="width:100%;border:none;" border="0">
  		<tr style="border:none;"><td style="border:none;">Compressor: </td><td style="border:none;"><input id="Compressor-Switch" type="checkbox" data-toggle="toggle"></td>
  		<td style="border:none;">Tank Switch: </td><td style="border:none;"><input id="Tank-Switch" type="checkbox" data-toggle="toggle"></td>
  		<td style="border:none;">Agitator: </td><td style="border:none;"><input id="Agitator-Switch" type="checkbox" data-toggle="toggle"></td>
  		<td style="border:none;">Discharge Pump: </td><td style="border:none;"><input id="Discharge-Pump" type="checkbox" data-toggle="toggle"></td>
  		<td style="border:none;">Charging Pump: </td><td style="border:none;"><input id="Charging-Pump" type="checkbox" data-toggle="toggle"></td></tr>
  </table>

  <br />
    <div id="Double_Chart" align="center" style="width: 100%; height: 500px;"></div>
  <br />
    <div id="Single_Chart" align="center" style="width: 100%; height: 500px;"></div>
  <br />

<div class="container">
    <form action="" class="form-horizontal"  role="form">
        <fieldset>
            <legend>Select Dates</legend>
            <div class="form-group"> <!-- style="border-style:dotted"-->
                <label for="dtp_input1" class="col-md-2 control-label">From</label>
                <div id="Fromdatetimepicker" class="input-group date form_datetime col-md-5" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <!-- <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span> -->
					          <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
              </div>

              <div class="form-group"> <!-- style="border-style:dotted"-->
                <label for="dtp_input1" class="col-md-2 control-label">To</label>
                <div id="Todatetimepicker" class="input-group date form_datetime col-md-5" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <!-- <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span> -->
					          <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
              </div>


        <!-- <input type="hidden" id="dtp_input1" value="" /><br/> -->
        </fieldset>
    </form>
</div>





<script type="text/javascript">
var div_Single_Chartid = 'Single_Chart';
var Single_Chart_name = 'Milk Temperature with Time';
var titleForYAxis_Single_Chart = ' Temperature';
var Single_Chart_seriesName = 'Milk Temperature';


var div_Double_Chartid = 'Double_Chart';
var Double_Chart_name = 'Milk Temperature Vs Battery Temperature';
var titleForYAxis_Double_Chart = ' Temperature';
var Double_Chart_seriesName1 = 'Battery Temperature';
var Double_Chart_seriesName2 = 'Milk Temperature';

var suffix = ' °C';
var to, from;
var to_UNIXvalue, from_UNIXvalue;
var EquipmentID = 'Govind- Paritwadi-CP1'; //Paritwadi - CP1
// var EquipmentID = 'Amul-Khadawali';
var url = "http://rms.geohems.com/AssetTrackingobjWebService.asmx ";

$( document ).ready(function()
{
  $("#button").hide();  //Hide the Download Button by Default
  $("#loaderDiv").hide(); //Hide the Loader by Default
  $("#ErrorLoadingDiv").hide(); //Display Loader
  //drawGauge_For_Chiller(ChannelNumber1);

  var LatestDate = moment().utc();
  var LatestDate_minus_one = moment().utc().subtract(1, 'minutes');
  var LatestDate_minus_two = moment().utc().subtract(2, 'minutes');
  var LatestDate_minus_three_hours = moment().utc().subtract(3, 'hours');
  var LatestDate_minus_one_hour = moment().utc().subtract(1, 'hours');

  LatestDate = moment(LatestDate).format("DD-MMM-YYYY HH:mm")
  LatestDate_minus_one = moment(LatestDate_minus_one).format("DD-MMM-YYYY HH:mm")
  LatestDate_minus_two = moment(LatestDate_minus_two).format("DD-MMM-YYYY HH:mm")
  LatestDate_minus_three_hours = moment(LatestDate_minus_three_hours).format("DD-MMM-YYYY HH:mm")
  LatestDate_minus_one_hour = moment(LatestDate_minus_one_hour).format("DD-MMM-YYYY HH:mm")
  console.log("LatestDate_minus_one is:\t"+LatestDate_minus_one);

  Last_Updated(LatestDate_minus_one, 'Converted');
  performSOAPRequest(url, EquipmentID, LatestDate_minus_three_hours, LatestDate, 'Charts');
  performSOAPRequest(url, EquipmentID, LatestDate_minus_two, LatestDate_minus_one, 'Gauges');
  performSOAPRequest(url, EquipmentID, LatestDate_minus_one_hour, LatestDate_minus_one, 'DataTable');

  // performSOAPRequest(url, EquipmentID, '16-Jun-2017 03:45', '16-Jun-2017 03:46', 'Gauges');
  
  /*$("#fixTable").tableHeadFixer({
	head: true,

	foot: false,

	left: 2,
	 
	right: 0,
	'z-index':50
	});
 */ 
  
  
  var testserver = "http://posttestserver.com/post.php";

  $('#Fromdatetimepicker').datetimepicker().on('changeDate', function(ev)
  {
    ev.preventDefault();  //This stops the default action of this element from happening

    from_UNIXvalue = ev.date.valueOf();
    // console.log("Original:\t"+ UNIX_timestamp);
    from = moment(from_UNIXvalue).utc().format("DD-MMM-YYYY HH:mm");
    console.log("From:\t"+ from);
  }); //Fromdatetimepicker ends here


  $('#Todatetimepicker').datetimepicker().on('changeDate', function(ev)
  {
    ev.preventDefault();  //This stops the default action of this element from happening

    $("#dataTbl td").remove(); //This removes all existing data in td cells from the Tables
    to_UNIXvalue = ev.date.valueOf();
    // console.log("Original:\t"+ UNIX_timestamp);
  checker:  if(from_UNIXvalue < to_UNIXvalue)
    {
    $("#loaderDiv").show(); //Display Loader

    to = moment(to_UNIXvalue).utc().format("DD-MMM-YYYY HH:mm");
    console.log("To:\t"+ to);
    performSOAPRequest(url, EquipmentID, from, to, 'DataTable');
    break checker;
  }//if ends here
  else
  {
    alert('End Date must be less than Start Date');
    $("#loaderDiv").hide(); //Hide Loader now
    $("#ErrorLoadingDiv").show(); //Show ErrorLoadingDiv
    break checker;
  }
  });//Todatetimepicker ends here


  $("#xx").on('click', function (event)
	{
			exportTableToCSV.apply(this, [$('#dataTbl'), 'Promethean_CMC-Paritwadi-CP1-Data.csv']);
	});//download Button for CSV


}); //ready ends here


$('.form_datetime').datetimepicker(
{
  initialDate: new Date(),
  weekStart: 1,
  todayBtn:  1,
  autoclose: 1,
  todayHighlight: 1,
  startView: 2,
  forceParse: 0,
  showMeridian: 1
});

$('.form_date').datetimepicker(
{
  initialDate: new Date(),
  language:  'uk',
  weekStart: 1,
  todayBtn:  1,
  autoclose: 1,
  todayHighlight: 1,
  startView: 2,
  minView: 2,
  forceParse: 0
});

$('.form_time').datetimepicker(
{
  initialDate: new Date(),
  language:  'uk',
  weekStart: 1,
  todayBtn:  1,
  autoclose: 1,
  todayHighlight: 1,
  startView: 1,
  minView: 0,
  maxView: 1,
  forceParse: 0
});



/****************************************************************************************************/
function processSuccess_For_Charts(data, status, req, xml, xmlHttpRequest, responseXML)
{
  var myObj = new Array();
  var Milk_Gauge_Array =  new Array();
  var TSS_Gauge_Array = new Array();
  var TimeArray = new Array();
  var Created_At = new Array();
  var CheckArray = new Array();

  $(req.responseXML)
  .find('GetEquipmentEngineMonitoringReportResponse').find('GetEquipmentEngineMonitoringReportResult')
  .find('Data').find('EquipmentEngineMonitoringModel').find('ParamList').find('EquipmentParameterDetailsModel') .each(function()
  {
      // myObj.push($(this)); // Should't use .text() because you'll lose the ability to use .find('tagName')
      // console.log("\n");
      // console.log(req.responseXML);
      // console.log("\n");
      // console.log($(this).length);
      // console.log("Length of myObj:\t"+myObj.length);
  // }); //.find ends here


  // for(var i = 0; i < $(this).length;i++)
  // {
    if($(this).find('ParamID').text() == '670' ) //Battery Temperature
    {
      var time = $(this).find('Time').text();
      extractor(time, Created_At, CheckArray);
      var temp = parseFloat($(this).find('ParamValue').text());
      TSS_Gauge_Array.push(temp);
      // console.log("Battery Temp:\t"+temp);
    }
    else if($(this).find('ParamID').text() == '671' )  //Milk Temperature
    {
      var temp = parseFloat($(this).find('ParamValue').text());
      Milk_Gauge_Array.push(temp);
      // console.log("Milk Temp:\t"+temp);
    }
  // }//for ends here

}); //.find ends here

  // console.log("TSS Temperature Array:");
  // console.log(TSS_Gauge_Array);
  // console.log("Milk Temperature Array:");
  // console.log(Milk_Gauge_Array);
  //console.log(CheckArray);

  drawChartDouble(div_Double_Chartid, CheckArray, TSS_Gauge_Array, Milk_Gauge_Array, Double_Chart_name, Double_Chart_seriesName1, Double_Chart_seriesName2, suffix, suffix, '#FFC300', '#3390FF',titleForYAxis_Double_Chart);
  drawChartSingle(div_Single_Chartid, CheckArray, Milk_Gauge_Array, Single_Chart_name, Single_Chart_seriesName, suffix, '#3390FF', titleForYAxis_Single_Chart);
}//processSuccess_For_Charts ends here
/****************************************************************************************************/

/****************************************************************************************************/
function processSuccess_For_Gauges(data, status, req, xml, xmlHttpRequest, responseXML)
{
  var myObj = new Array();

  var Milk_Gauge_Array =  new Array();
  var TSS_Gauge_Array = new Array();
  var Compressor_Gauge_Array = new Array();
  var ACVoltage_Gauge_Array = new Array();
  var DC_Battery_Gauge_Array = new Array();
  var Charging_Pump_Gauge_Array = new Array();
  var temp;

  // console.log("\n");
  // console.log(req.responseXML);
  // console.log("\n");

  $(req.responseXML)
  .find('GetEquipmentEngineMonitoringReportResponse').find('GetEquipmentEngineMonitoringReportResult')
  .find('Data').find('EquipmentEngineMonitoringModel').find('ParamList').find('EquipmentParameterDetailsModel') .each(function()
  {
      // myObj.push($(this)); // Should't use .text() because you'll lose the ability to use .find('tagName')
  // }); //.find ends here

  // console.log("Length of Response:\t"+myObj.length);

  // for(var i = 0; i <myObj.length;i++)
  // {
    if($(this).find('ParamID').text() == '670' ) //Battery Temperature
    {
      TSS_Gauge_Array.push($(this).find('ParamValue').text());
    }
    else if($(this).find('ParamID').text() == '671' )  //Milk Temperature
    {
      Milk_Gauge_Array.push($(this).find('ParamValue').text());
    }
    // else if($(this).find('ParamID').text() == '672' )  //Auxillary Temperature
    // {
    // }
    else if($(this).find('ParamID').text() == '673' )  //Battery Voltage
    {
      DC_Battery_Gauge_Array.push($(this).find('ParamValue').text());
    }
    else if($(this).find('ParamID').text() == '674' )  //AC Voltage
    {
      ACVoltage_Gauge_Array.push($(this).find('ParamValue').text());
    }
    else if($(this).find('ParamID').text() == '675' )  //Compressor Current
    {
      Compressor_Gauge_Array.push($(this).find('ParamValue').text());
    }
    else if($(this).find('ParamID').text() == '676' )  //Charging Pump Current
    {
      Charging_Pump_Gauge_Array.push($(this).find('ParamValue').text());
      check_ON_OFF($(this).find('ParamValue').text(), 'Charging-Pump')
      // drawGauge1('Charging Pump Current', $(this).find('ParamValue').text());
    }
    else if($(this).find('ParamID').text() == '678' )  //Condenser Relay
    {
    }
    else if($(this).find('ParamID').text() == '679' )  //Compressor Relay
    {
      check_ON_OFF($(this).find('ParamValue').text(), 'Compressor-Switch')
    }
    else if($(this).find('ParamID').text() == '680' )  //Inverter Relay - Tank Switch
    {
      check_ON_OFF($(this).find('ParamValue').text(), 'Tank-Switch')
    }
    else if($(this).find('ParamID').text() == '681' )  //Agitator Pump Relay
    {
      check_ON_OFF($(this).find('ParamValue').text(), 'Agitator-Switch')
    }
    else if($(this).find('ParamID').text() == '684' )  //Discharge Pump Relay
    {
      check_ON_OFF($(this).find('ParamValue').text(), 'Discharge-Pump')
    }
    else if($(this).find('ParamID').text() == '685' )  //Compressor Run Hours
    {
    }
  // }//for ends here
}); //.find ends here

drawGauge(TSS_Gauge_Array, Milk_Gauge_Array, Compressor_Gauge_Array, ACVoltage_Gauge_Array,
   DC_Battery_Gauge_Array, Charging_Pump_Gauge_Array);
}//processSuccess_For_Gauges ends here
/****************************************************************************************************/





/****************************************************************************************************/
function processSuccess(data, status, req, xml, xmlHttpRequest, responseXML)
{
  /*NOTE: Inverter_Relay is Tank-Switch*/
  console.log("Status for Data Table:\t"+status);
  var myObj = new Array();
  var TimeArray = new Array();
  var Created_At = new Array();
  var CheckArray = new Array();
  var Batterytemp = new Array();
  var Milktemp = new Array();
  var Auxtemp = new Array();
  var BatteryVoltage = new Array();
  var ACVoltage = new Array();
  var Compressor_Current = new Array();
  var Charging_Pump_Current = new Array();
  var Charging_Pump_Relay = new Array();
  var Condenser_Relay = new Array();
  var Compressor_Relay = new Array();
  var Inverter_Relay = new Array();
  var Agitator_Relay = new Array();
  var Discharge_Pump_Relay = new Array();
  var Compressor_Run_Hour = new Array();

  var Line1Voltage = new Array();
  var Line2Voltage = new Array();
  var Line3Voltage = new Array();
  var LineVoltage_1Ph = new Array();

  var Line1Current = new Array();
  var Line2Current = new Array();
  var Line3Current = new Array();
  var LineCurrent_1Ph = new Array();

  var PowerConsumption_1Ph = new Array();
  var DevRunHr_1Ph = new Array();
  var PowAvailTime_1Ph = new Array();

  var PowerConsumption = new Array();
  var DevRunHr = new Array();
  var PowAvailTime = new Array();

  $(req.responseXML)
  .find('GetEquipmentEngineMonitoringReportResponse').find('GetEquipmentEngineMonitoringReportResult')
  .find('Data').find('EquipmentParameterDetailsModel') .each(function()
  {
      myObj.push($(this)); // Should't use .text() because you'll lose the ability to use .find('tagName')
  }); //.find ends here

  console.log("Length of Response:\t"+myObj.length);

  for(var i = 0; i <myObj.length;i++)
  {
    if(myObj[i].find('ParamID').text() == '670' ) //Battery Temperature
    {
      var time = myObj[i].find('Time').text();
      console.log("Original Time:\t"+time);
      extractor(time, Created_At, CheckArray);
      Batterytemp.push(myObj[i].find('ParamValue').text());
    }
    else if(myObj[i].find('ParamID').text() == '671' )  //Milk Temperature
    {
      Milktemp.push(myObj[i].find('ParamValue').text());
    }
    else if(myObj[i].find('ParamID').text() == '672' )  //Auxillary Temperature
    {
      Auxtemp.push(myObj[i].find('ParamValue').text());
    }
    else if(myObj[i].find('ParamID').text() == '673' )  //Battery Voltage
    {
      BatteryVoltage.push(myObj[i].find('ParamValue').text());
    }
    else if(myObj[i].find('ParamID').text() == '674' )  //AC Voltage
    {
      ACVoltage.push(myObj[i].find('ParamValue').text());
    }
    else if(myObj[i].find('ParamID').text() == '675' )  //Compressor Current
    {
      Compressor_Current.push(myObj[i].find('ParamValue').text());
    }
    else if(myObj[i].find('ParamID').text() == '676' )  //Charging Pump Current
    {
      Charging_Pump_Current.push(myObj[i].find('ParamValue').text());
    }
    else if(myObj[i].find('ParamID').text() == '677' )  //Charging Pump Relay
    {
      Charging_Pump_Relay.push(myObj[i].find('ParamValue').text());
    }
    else if(myObj[i].find('ParamID').text() == '678' )  //Condenser Relay
    {
      Condenser_Relay.push(myObj[i].find('ParamValue').text());
    }
    else if(myObj[i].find('ParamID').text() == '679' )  //Compressor Relay
    {
      Compressor_Relay.push(myObj[i].find('ParamValue').text());
    }
    else if(myObj[i].find('ParamID').text() == '680' )  //Inverter Relay
    {
      Inverter_Relay.push(myObj[i].find('ParamValue').text());
    }
    else if(myObj[i].find('ParamID').text() == '681' )  //Agitator Relay
    {
      Agitator_Relay.push(myObj[i].find('ParamValue').text());
    }
    else if(myObj[i].find('ParamID').text() == '684' )  //Discharge Pump Relay
    {
      Discharge_Pump_Relay.push(myObj[i].find('ParamValue').text());
    }
    else if(myObj[i].find('ParamID').text() == '685' )  //Compressor Run Hours
    {
      Compressor_Run_Hour.push(myObj[i].find('ParamValue').text());
    }
    else if(myObj[i].find('ParamID').text() == '696' )  //Line Voltage L1
    {
      LineVoltage_1Ph.push(myObj[i].find('ParamValue').text());
    }
    else if(myObj[i].find('ParamID').text() == '697' )  //Line Current L1
    {
      LineCurrent_1Ph.push(myObj[i].find('ParamValue').text());
    }
    else if(myObj[i].find('ParamID').text() == '699' )  //Power Consumption [imp]
    {
      PowerConsumption_1Ph.push(myObj[i].find('ParamValue').text());
    }
    else if(myObj[i].find('ParamID').text() == '701' )  //Device Run Hours [RunHr]
    {
      DevRunHr_1Ph.push(myObj[i].find('ParamValue').text());
    }
    else if(myObj[i].find('ParamID').text() == '702' )  //Power Available Time [On Hr]
    {
      PowAvailTime_1Ph.push(myObj[i].find('ParamValue').text());
    }
    else if(myObj[i].find('ParamID').text() == '703' )  //Line 1 Voltage
    {
      Line1Voltage.push(myObj[i].find('ParamValue').text());
    }
    else if(myObj[i].find('ParamID').text() == '704' )  //Line 2 Voltage
    {
      Line2Voltage.push(myObj[i].find('ParamValue').text());
    }
    else if(myObj[i].find('ParamID').text() == '705' )  //Line 3 Voltage
    {
      Line3Voltage.push(myObj[i].find('ParamValue').text());
    }
    else if(myObj[i].find('ParamID').text() == '706' )  //Line 1 Current
    {
      Line1Current.push(myObj[i].find('ParamValue').text());
    }
    else if(myObj[i].find('ParamID').text() == '707' )  //Line 2 Current
    {
      Line2Current.push(myObj[i].find('ParamValue').text());
    }
    else if(myObj[i].find('ParamID').text() == '708' )  //Line 3 Current
    {
      Line3Current.push(myObj[i].find('ParamValue').text());
    }
    else if(myObj[i].find('ParamID').text() == '720' )  //Power Consumptions
    {
      PowerConsumption.push(myObj[i].find('ParamValue').text());
    }
    else if(myObj[i].find('ParamID').text() == '722' )  //Device Run Hours
    {
      DevRunHr.push(myObj[i].find('ParamValue').text());
    }
    else if(myObj[i].find('ParamID').text() == '723' )  //Power Available Time
    {
      PowAvailTime.push(myObj[i].find('ParamValue').text());
    }
  }//for ends here


  $("#loaderDiv").hide(); //Hide Loader now

  for(var j = 0; j < Created_At.length; j++) //j = j + 14)
  {
       $('#fixTable').append(
        '<tr><td>'+ Created_At[j]
        +'</td><td>' + CheckArray[j]
        +'</td><td>' + Batterytemp[j]
        +'</td><td>'+  Milktemp[j]
        +'</td><td>'+  Auxtemp[j]
        +'</td><td>'+  BatteryVoltage[j]
        +'</td><td>'+ ACVoltage[j]
        +'</td><td>'+ Compressor_Current[j]
        +'</td><td>'+ Charging_Pump_Current[j]
        +'</td><td>'+ Charging_Pump_Relay[j]
        +'</td><td>'+ Condenser_Relay[j]
        +'</td><td>'+ Inverter_Relay[j]
        +'</td><td>'+ Agitator_Relay[j]
        +'</td><td>'+ Discharge_Pump_Relay[j]
        +'</td><td>'+ Compressor_Run_Hour[j]
        +'</td><td>'+ LineVoltage_1Ph[j]
        +'</td><td>'+ LineCurrent_1Ph[j]
        +'</td><td>'+ PowerConsumption_1Ph[j]
        +'</td><td>'+ DevRunHr_1Ph[j]
        +'</td><td>'+ PowAvailTime_1Ph[j]
        +'</td><td>'+ Line1Voltage[j]
        +'</td><td>'+ Line1Current[j]
        +'</td><td>'+ Line2Voltage[j]
        +'</td><td>'+ Line2Current[j]
        +'</td><td>'+ Line3Voltage[j]
        +'</td><td>'+ Line3Current[j]
        +'</td><td>'+ PowerConsumption[j]
        +'</td><td>'+ DevRunHr[j]
        +'</td><td>'+ PowAvailTime[j]
        +'</td></tr>');
  }//for ends here
  
  $("#fixTable").tableHeadFixer({
	head: true,

	foot: false,

	left: 2,
	 
	right: 0,
	'z-index':50
	});
 $("#fixTable th").css('background','#33ff33');
  $("#button").show();  //Show the Button now

}//processSuccess ends here
/****************************************************************************************************/

/****************************************************************************************************/
function performAJAXRequest(valueURL, valuesoapRequest, valueFlag)
{
  if(valueFlag == 0)    //0 is for Gauges
  {
    console.log("Performing AJAX - GAUGES for Flag:\t"+valueFlag);
    $.ajax({          //$.post({
      type: "POST",
      url: valueURL,
      async: true,
      contentType: "text/xml; charset=utf-8",
      dataType: "xml",
      beforeSend: function(request)
      {
       request.setRequestHeader("Content-Type","text/xml; charset=utf-8" );
       request.setRequestHeader("soapaction","http://tempuri.org/GetEquipmentEngineMonitoringReport" );
       //request.setRequestHeader("Access-Control-Allow-Origin:", "*");
      },
      crossDomain: true,
      data: valuesoapRequest,
      success: processSuccess_For_Gauges,
      error: processError
    });  //ajax ends here
  }//if ends here
  else if(valueFlag == 2) //2 is for DataTable
  {
    console.log("Performing AJAX - DataTable for Flag:\t"+valueFlag);
    $.ajax({          //$.post({
      type: "POST",
      url: valueURL,
      async: true,
      contentType: "text/xml; charset=utf-8",
      dataType: "xml",
      beforeSend: function(request)
      {
       request.setRequestHeader("Content-Type","text/xml; charset=utf-8" );
       request.setRequestHeader("soapaction","http://tempuri.org/GetEquipmentEngineMonitoringReport" );
       //request.setRequestHeader("Access-Control-Allow-Origin:", "*");
      },
      crossDomain: true,
      data: valuesoapRequest,
      success: processSuccess,
      error: processError
    });  //ajax ends here
  }//else if for value 2 ends here
  else if(valueFlag == 1) //1 is for Charts
  {
    console.log("Performing AJAX - Charts for Flag:\t"+valueFlag);
    $.ajax({          //$.post({
      type: "POST",
      url: valueURL,
      async: true,
      contentType: "text/xml; charset=utf-8",
      dataType: "xml",
      beforeSend: function(request)
      {
       request.setRequestHeader("Content-Type","text/xml; charset=utf-8" );
       request.setRequestHeader("soapaction","http://tempuri.org/GetEquipmentEngineMonitoringReport" );
       //request.setRequestHeader("Access-Control-Allow-Origin:", "*");
      },
      crossDomain: true,
      data: valuesoapRequest,
      success: processSuccess_For_Charts,
      error: processError
    });  //ajax ends here

  }//else if for value 1 ends here
}//performAJAXRequest ends here
/****************************************************************************************************/


/****************************************************************************************************/
function performSOAPRequest(valueURL, valueEquipmentID, valueFrom, valueTo, string)
{
  var flag = 0; //Will be 1 if SOAP Request is for Data Table
  var soapRequest ='<?xml version="1.0" encoding="utf-8"?>'
+' <soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">'
+'   <soap:Body>'
+'     <GetEquipmentEngineMonitoringReport xmlns="http://tempuri.org/">'
+'       <APIKey>J12CM751YTU</APIKey>'
+'       <EquipmentId>'+ valueEquipmentID +'</EquipmentId>'
+'       <StartDate>'+ valueFrom +'</StartDate>'
+'       <EndDate>'+ valueTo +'</EndDate>'
+'     </GetEquipmentEngineMonitoringReport>'
+'  </soap:Body>'
+'</soap:Envelope>';

  console.log(soapRequest);
  console.log("Will Run AJAX on url:\t"+url);

if(string == 'Gauges')
  {
    flag = 0;
  }
  else if(string == 'Charts')
  {
    flag = 1;
  }
  else    //For Data Tables
  {
    flag = 2;
  }
  performAJAXRequest(valueURL, soapRequest, flag);
  console.log("End of Ajax");
}//performSOAPRequest ends here
/****************************************************************************************************/







</script>

<br/>
<div style="width:100%">
  <div id="inner">
    <a href="#" id="xx" style="text-decoration:none;">
  	   <button  id="button" style="">Export Data</button>
    </a>
  </div>
</div>



<br/>
<div id="table-div" class="form-group"> <!-- style="border-style:dotted"-->
  <legend></legend>
  <div id="parent">
  <table id="fixTable"  style="border-collapse:separate;white-space:nowrap;text-align:center;" cellspacing="0">
    <thead style="background-color:#33ff33;height:35px;">
    <tr>
      <th>Created_At</th>
      <th>Time</th>
      <th>Battery Temperature</th>
      <th>Milk Temperature</th>
      <th>Auxillary Temperature</th>
      <th>Battery Voltage</th>
      <th>AC Voltage</th>
      <th>Compressor Current</th>
      <th>Charging Pump Current</th>
      <th>Charging Pump </th>
      <th>Condenser</th>
      <th>Tank Switch</th>
      <th>Agitator</th>
      <th>Discharge Pump</th>
      <th>Compressor Run Hours</th>

      <th>Line Voltage - 1Ph</th>
      <th>Line Current - 1Ph</th>
      <th>Power Consumption - 1Ph</th>
      <th>Device Run Hr - 1Ph</th>
      <th>Power Avail. Time - 1Ph</th>
      <th>Line1 Voltage</th>
      <th>Line1 Current</th>
      <th>Line2 Voltage</th>
      <th>Line2 Current</th>
      <th>Line3 Voltage</th>
      <th>Line3 Current</th>
      <th>Power Consumption - 3Ph</th>
      <th>Device Run Hr - 3Ph</th>
      <th>Power Avail. Time - 3Ph</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
  <div id="loaderDiv"> Loading. Please Wait  <br/> <img src="./loader.gif"> </div>
  <div id="ErrorLoadingDiv"></div>
  </table>
  </div>
  <legend></legend>
</div>
<?php /*include("./footer.html");*/ ?>

</body>
</html>
