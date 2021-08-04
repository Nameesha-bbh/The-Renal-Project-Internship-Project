$(document).ready(function(){
    $.ajax({
        url : "patientStatistics.php",
		type : "GET",
		success : function(data){
			console.log(data);
            let dataJSON =  JSON.parse(data);
            console.log(dataJSON);
            var toDisplay = {
                patient_count : [],
                date : []
            }

            var len = dataJSON.length,i = 0;
            for(i=0;i<len;i++){
                toDisplay.patient_count.push(dataJSON[i].count);
                toDisplay.date.push(dataJSON[i].patient_admit_date);
            }
            console.log(toDisplay);
            var ctx = $("#line-chartcanvas");
            var data = {
                labels : toDisplay.date,
                datasets : [{
                    label : "Patient Count",
                    data : toDisplay.patient_count,
                    backgroundColor : "blue",
                    borderColor : "lightblue",
                    fill : false,
                    lineTension : 0,
                    pointRadius : 5
                }]
            };
            var options = {
				title : {
					display : true,
					position : "top",
					text : "Doctor's Graph",
					fontSize : 18,
					fontColor : "#111"
				},
                scales: {
                    y: [{
                      scaleLabel: {
                        display: true,
                        labelString: 'Number of patient'
                      }
                    }]
                  },
				legend : {
					display : true,
					position : "bottom"
				}     
			};
            var chart = new Chart(ctx , {
                type : "line",
                data : data,
                options : options
            });
            
            window.setTimeout(function(){
                location.reload();  
                 }, 3000);
            
        }

    });
});


