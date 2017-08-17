<?php

//////////////////////////////////////////////////////////////
//start code


header("Content-type: text/html; charset=utf-8");

echo "<center><h1>Informacija</h1></center>";

$con = mysqli_connect("localhost","root","");

mysqli_select_db($con, "knygynas"); ////////////// Name of database

if(!$con){
	
	die("Not Connected!".mysqli_error($con));
	
}
	

echo "<center>";

///////////////////////////////////////////////////////////////////////////////////////
//Start  10 books code block

if(isset($_GET['knyga1'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 1 AND metaiId = 1 AND autoriusId = 1 AND ŽanrasId =1" ); 
 
if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai) :".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];


}

if(isset($_GET['knyga2'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 2 AND metaiId = 2 AND autoriusId = 2 AND ŽanrasId =2" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai) : ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}

if(isset($_GET['knyga3'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 3 AND metaiId = 3 AND autoriusId = 3 AND ŽanrasId =3" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai) : ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}

if(isset($_GET['knyga4'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 4 AND metaiId = 4 AND autoriusId = 4 AND ŽanrasId =4" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai) : ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}

if(isset($_GET['knyga5'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId =  5 AND metaiId = 5 AND autoriusId = 5 AND ŽanrasId =5" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai) : ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}
if(isset($_GET['knyga6'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 6 AND metaiId = 6 AND autoriusId = 6 AND ŽanrasId = 6" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}
if(isset($_GET['knyga7'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 7 AND metaiId = 7 AND autoriusId = 7 AND ŽanrasId = 7" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}
if(isset($_GET['knyga8'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 8 AND metaiId = 8 AND autoriusId = 8 AND ŽanrasId = 8" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}
if(isset($_GET['knyga9'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 9 AND metaiId = 9 AND autoriusId = 9 AND ŽanrasId = 9" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}
if(isset($_GET['knyga10'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 10 AND metaiId = 10 AND autoriusId = 10 AND ŽanrasId = 10" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}

//End of first 10 books code block

///////////////////////////////////////////////////////////////////////////////////////
//Start second  10 books code block

if(isset($_GET['knyga11'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 11 AND metaiId = 11 AND autoriusId = 11 AND ŽanrasId = 11" ); 
 
if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai) :".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];


}

if(isset($_GET['knyga12'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 12 AND metaiId = 12 AND autoriusId = 12 AND ŽanrasId = 12" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai) : ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}

if(isset($_GET['knyga13'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 13 AND metaiId = 13 AND autoriusId = 13 AND ŽanrasId = 13" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai) : ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}

if(isset($_GET['knyga14'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 14 AND metaiId = 14 AND autoriusId = 14 AND ŽanrasId =14" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai) : ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}

if(isset($_GET['knyga15'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId =  15 AND metaiId = 15 AND autoriusId = 15 AND ŽanrasId =15" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai) : ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}
if(isset($_GET['knyga16'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 16 AND metaiId = 16 AND autoriusId = 16 AND ŽanrasId = 16" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}
if(isset($_GET['knyga17'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 17 AND metaiId = 17 AND autoriusId = 17 AND ŽanrasId = 17" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}
if(isset($_GET['knyga18'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 18 AND metaiId = 18 AND autoriusId = 18 AND ŽanrasId = 18" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}
if(isset($_GET['knyga19'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 19 AND metaiId = 19 AND autoriusId = 19 AND ŽanrasId = 19" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}
if(isset($_GET['knyga20'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 20 AND metaiId = 20 AND autoriusId = 20 AND ŽanrasId = 20" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}

//End of second 10 books code block

///////////////////////////////////////////////

//Start third 5 books code block

if(isset($_GET['knyga21'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 21 AND metaiId = 21 AND autoriusId = 21 AND ŽanrasId = 21" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}
if(isset($_GET['knyga22'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 22 AND metaiId = 22 AND autoriusId = 22 AND ŽanrasId = 22" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}
if(isset($_GET['knyga23'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 23 AND metaiId = 23 AND autoriusId = 23 AND ŽanrasId = 23" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}
if(isset($_GET['knyga24'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 24 AND metaiId = 24 AND autoriusId = 24 AND ŽanrasId = 24" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}
if(isset($_GET['knyga25'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 25 AND metaiId = 25 AND autoriusId = 25 AND ŽanrasId = 25" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}

//End third 5 books code block

///////////////////////////////////////////////////////
//Start fourth 10 books code bock

if(isset($_GET['knyga26'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 26 AND metaiId = 26 AND autoriusId = 26 AND ŽanrasId = 26" ); 
 
if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai) :".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];


}

if(isset($_GET['knyga27'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 27 AND metaiId = 27 AND autoriusId = 27 AND ŽanrasId = 27" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai) : ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}

if(isset($_GET['knyga28'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 28 AND metaiId = 28 AND autoriusId = 28 AND ŽanrasId = 28" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai) : ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}

if(isset($_GET['knyga29'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 29 AND metaiId = 29 AND autoriusId = 29 AND ŽanrasId =29" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai) : ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}

if(isset($_GET['knyga30'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId =  30 AND metaiId = 30 AND autoriusId = 30 AND ŽanrasId =30" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai) : ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}
if(isset($_GET['knyga31'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 31 AND metaiId = 31 AND autoriusId = 31 AND ŽanrasId = 31" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}
if(isset($_GET['knyga32'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 32 AND metaiId = 32 AND autoriusId = 32 AND ŽanrasId = 32" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}
if(isset($_GET['knyga33'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 33 AND metaiId = 33 AND autoriusId = 33 AND ŽanrasId = 33" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}
if(isset($_GET['knyga34'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 34 AND metaiId = 34 AND autoriusId = 34 AND ŽanrasId = 34" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}
if(isset($_GET['knyga35'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 35 AND metaiId = 35 AND autoriusId = 35 AND ŽanrasId = 35" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}

//End of fourth 10 books code block

///////////////////////////////////////////////

///////////////////////////////////////////////////////
//Start fifth 10 books code bock

if(isset($_GET['knyga36'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 36 AND metaiId = 36 AND autoriusId = 36 AND ŽanrasId = 36" ); 
 
if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai) :".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];


}

if(isset($_GET['knyga37'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 37 AND metaiId = 37 AND autoriusId = 37 AND ŽanrasId = 37" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai) : ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}

if(isset($_GET['knyga38'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 38 AND metaiId = 38 AND autoriusId = 38 AND ŽanrasId = 38" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai) : ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}

if(isset($_GET['knyga39'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 39 AND metaiId = 39 AND autoriusId = 39 AND ŽanrasId =39" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai) : ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}

if(isset($_GET['knyga40'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId =  40 AND metaiId = 40 AND autoriusId = 40 AND ŽanrasId = 40" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai) : ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}
if(isset($_GET['knyga41'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 41 AND metaiId = 41 AND autoriusId = 41 AND ŽanrasId = 41" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}
if(isset($_GET['knyga42'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 42 AND metaiId = 42 AND autoriusId = 42 AND ŽanrasId = 42" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}
if(isset($_GET['knyga43'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 43 AND metaiId = 43 AND autoriusId = 43 AND ŽanrasId = 43" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}
if(isset($_GET['knyga44'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 44 AND metaiId = 44 AND autoriusId = 44 AND ŽanrasId = 44" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}
if(isset($_GET['knyga45'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 45 AND metaiId = 45 AND autoriusId = 45 AND ŽanrasId = 45" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}

//End of fifth 10 books code block

///////////////////////////////////////////////

//Start sixth 5 books code block

if(isset($_GET['knyga46'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 46 AND metaiId = 46 AND autoriusId = 46 AND ŽanrasId = 46" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}
if(isset($_GET['knyga47'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 47 AND metaiId = 47 AND autoriusId = 47 AND ŽanrasId = 47" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}
if(isset($_GET['knyga48'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 48 AND metaiId = 48 AND autoriusId = 48 AND ŽanrasId = 48" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}
if(isset($_GET['knyga49'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 49 AND metaiId = 49 AND autoriusId = 49 AND ŽanrasId = 49" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}
if(isset($_GET['knyga50'])){

mysqli_set_charset($con,'utf8');

$select = mysqli_query($con ,"SELECT * FROM  leidimometai, pavadinimas, autorius, žanras WHERE pavadinimasId = 50 AND metaiId = 50 AND autoriusId = 50 AND ŽanrasId = 50" );

if(!$select){
	die ("You dindt get data". mysqli_error($con));
}

$row = mysqli_fetch_array($select);

echo " Pavadinimas: ".$row['Pavadinimas']."</br>"."Autorius(-iai): ".$row['Autorius(-iai)']."</br>"." Žanras: ".$row['Žanras']. "</br>"." Leidimo metai :".$row['Leidimo metai'];

}

//End sixth 5 books code block

////////////////////////////////////////////////



echo "</center>";

mysqli_close($con);

//end of code
///////////////////////////////////////////////////////////////////////////////////////////////






?>

