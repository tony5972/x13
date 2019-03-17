

<?php
$conn=pg_connect("host=localhost port=5432  dbname=stud user=postgres password=123456");
if(!$conn)
{

echo("An error.....in connection");
}
else
{
echo("connection succesfull");
	  $a=$_POST['t1']; 
         echo("<table border='3' >");
         echo("<tr><th> d_no</th><th> dnm</th><th> daddress</th><th> dcity</th><th> area</th></tr>");
         echo("<br>");  
  
         
        
    $s1=pg_query("select dno,dname,dadd,dcity,darea from doct,hosp where hosp.hno=doct.hno1 and hosp.hname='$a'") or die(pg_error());

echo "hello";
	
	    while($r=pg_fetch_assoc($s1))
   		{
    			  echo "hello"; 
                         
			 echo("<tr>");     echo("<td>");
         		 echo $r['dno'];   echo("</td><td>");
         		 echo $r['dname'];      echo("</td><td>");
           		 echo $r['dadd'];     echo("</td><td>");
        		 echo $r['dcity'];      echo("</td><td>") ;
        		 echo $r['darea'];       echo("</td></tr>");
    		}
 	echo("</table>");
}
?>



