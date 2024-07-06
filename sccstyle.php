<?php
$firstNames = ['red', 'DarkMagenta', 'orange', 'green', 'DarkBlue'];
$randomFirstName = $firstNames[array_rand($firstNames)];
$randomName = $randomFirstName ;
?>

<style>

:root {--bg-color: #3F51B5; }
	
.header {
  padding: 5px;
  text-align: center;
background-color: var(--bg-color);
color: white;
  text-align: left;
  font-weight: bold;
} 

.footer {
  padding: 10px;
  text-align: center;
 background-color: var(--bg-color);
font-weight: bold;
color:#ffffff;
} 
.footer a{ color:#fff;}
.header a{ color:#fff;}

video {border: 5px solid #3F51B5; }


h3 {
  color: white;
background-color: var(--bg-color);
padding: 9px 2%; 
  text-align: left;
  margin: 10px;
  font-size: 16px;
  border-radius: 0px;
  width: 87%;
}

a {
            text-decoration: none;
            color: #000;
            
        }
        a:hover {
            text-decoration: none;
        }
* {
  box-sizing: border-box;
}


	</style>


<style>
body{ margin:0px;
 }

b { float: left ;background: <?php echo $randomName ; ?> ;border-radius: 5px;padding: 2px 10px;color:#ffffff;}
k {font-weight: bold; color:<?php echo $randomName ; ?>;}
#myInput{
 
  width: 87%;
  font-size: 16px;
  padding: 12px 20px 12px 10px;
  border: 2px solid #3F51B5;
  margin-bottom: 12px;
}

#myTable {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 87%;
  font-size: 18px;
}


 #myTable td {
  text-align: left;
  border-bottom: 1px solid #ddd;
  padding: 10px 16px;
}

#myTable th { 
width: 10%;
border-bottom: 1px solid #ddd;
text-align: left;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;

}

</style>
