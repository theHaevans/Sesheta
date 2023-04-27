function printDate() {
		    var d = new Date();
		    var day = d.getDate();
		    var month = d.getMonth() + 1;
		    var year = d.getFullYear();
		    var hours = d.getHours();
		    var minutes = d.getMinutes();
       
		    if (minutes < 10) {
		       minutes = "0" + minutes;
		   }

		   var suffix = "AM";
		   if (hours >= 12) {
		        suffix = "PM";
		        hours = hours - 12;
		    }
       
		    if (hours == 0) {
		        hours = 12;
		    }
		    document.write("It is " + hours + ":" + minutes + " " + suffix + " on " + month + "/" + day + "/" + year);
			}