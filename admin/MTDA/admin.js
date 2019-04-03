

function transactionid(val) {

  var xhttp;
  xhttp = new XMLHttpRequest();	/*Creates an xhttp object to manage communication between javascript and xml*/
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       sellerlist(this);
    }
  };
  xhttp.open("GET", "sellerajax.php?id="+val, true);
  xhttp.send();
}

function sellerlist(xml) {

  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>Seller Name</th><th>Uniqueid</th><th>Price</th></tr>";
  var x = xmlDoc.getElementsByTagName("krishiyog");
  for (i = 0; i <x.length; i++) {
	qid=x[i].getAttribute('id');
	sid=x[i].getAttribute('sid');
	u=qid.length;
	s=sid.length;
    table += "<tr data-dismiss='modal'><td><div id='"+u+s+qid+sid+"'  onclick='sellerid(this.id)'>" +
    x[i].getElementsByTagName("seller")[0].childNodes[0].nodeValue +
    "</td></div><td>   " +
    x[i].getElementsByTagName("uniqueid")[0].childNodes[0].nodeValue +
    "</td><td>   " +
    x[i].getElementsByTagName("price")[0].childNodes[0].nodeValue +
    "&#x20b9;</td><td>   " +
    "</td></tr>";
  }
  document.getElementById("Seller").innerHTML = table;

}

function sellerid(qid) {

  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       details(this);
    }
  };
  xhttp.open("GET", "trans_array.php?id="+qid, true);
  xhttp.send();
}

function details(xml) {
			document.getElementById('whole').style.opacity= '1';
		  var i;
		  var xmlDoc = xml.responseXML;
		  var table1="<tr><th>Item</th><th>Unit</th><th>Duration</th><th>Price</th><th>Ftype</th><th></th></tr>";
		  var x = xmlDoc.getElementsByTagName("krishiyog");
		  for (i = 0; i <x.length; i++) {
			sid=x[i].getAttribute('sid');
			bid=x[i].getAttribute('bid');
			qid=x[i].getAttribute('qid');

			table1 += "<tr><td>" +
			x[i].getElementsByTagName("item")[0].childNodes[0].nodeValue +
			"</td><td>   " +
			x[i].getElementsByTagName("unit")[0].childNodes[0].nodeValue +
			"</td><td>   " +
			x[i].getElementsByTagName("duration")[0].childNodes[0].nodeValue +
			"</td><td>   " +
			x[i].getElementsByTagName("price")[0].childNodes[0].nodeValue +
			"&#x20b9;</td><td>   " +
			x[i].getElementsByTagName("ftype")[0].childNodes[0].nodeValue +
			"</td><td><div class='btn btn-primary' id='newu' onclick='deal(sid,bid,qid,this)'>DEAL</div>  "
			"</td></tr>";
		  }
		  document.getElementById("demo1").innerHTML = table1;

		   var table2="<tr><th>Seller UID</th><th>Seller Name</th><th>Mobile Number</th></tr>";
		  var x = xmlDoc.getElementsByTagName("krishiyog");
		  for (i = 0; i <x.length; i++) {


			table2 += "<tr><td>" +
			x[i].getElementsByTagName("suid")[0].childNodes[0].nodeValue +
			"</td><td>   " +
			x[i].getElementsByTagName("seller")[0].childNodes[0].nodeValue +
			"</td><td>   " +
			x[i].getElementsByTagName("smob")[0].childNodes[0].nodeValue +
			"</td></tr>";
		  }
		  document.getElementById("demo2").innerHTML = table2;

		  var table3="<tr><th>Buyer UID</th><th>Buyer Name</th><th>Mobile Number</th></tr>";
		  var x = xmlDoc.getElementsByTagName("krishiyog");
		  for (i = 0; i <x.length; i++) {


			table3 += "<tr><td>" +
			x[i].getElementsByTagName("buid")[0].childNodes[0].nodeValue +
			"</td><td>   " +
			x[i].getElementsByTagName("buyer")[0].childNodes[0].nodeValue +
			"</td><td>   " +
			x[i].getElementsByTagName("bmob")[0].childNodes[0].nodeValue +
			"</td></tr>";
		  }
		  document.getElementById("demo3").innerHTML = table3;

		  document.getElementById('show1').style.display='block';
		  document.getElementById('show2').style.display='block';
		  document.getElementById('show3').style.display='block';



}

function deal(sid,bid,qid,val) {


	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        my(val);
      }
    };
    xmlhttp.open("GET", "donewithdeal.php?bid="+bid+"&sid="+sid+"&qid="+qid, true);
    xmlhttp.send();

}


function show()
{
	document.getElementById('tra').style.opacity = '1';
	document.getElementById('whole').style.opacity= '0';

}





function my(xm)
{
	var x=$("#newu");
	$(document).ready(function(){
	x.click(function(){
    x.html("<img style='height:35px;' src='../images/checked.png'/>");
	x.slideDown("slow");




				});
	});
}
