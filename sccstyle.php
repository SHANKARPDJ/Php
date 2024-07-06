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

.block {
  transition: 0.3s;
  width: 100%; 
 text-align: left;
 padding: 0px 0px;
 border: 1px solid #3F51B5;
}

.block a div div {
            vertical-align: middle;
            display: table-cell
        }
        
        .block a {
            display: block;
            padding: 5px
        }
        .block a img {
            padding: 0;
            margin-right: 5px
            
            
        }


.block img {
            
            padding: 1px;
            border-radius: 5px;
            background:#000;
        }


	* {
  box-sizing: border-box;
}

body {
  margin: 0px;
  font-family: 'segoe ui';
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

#myInput {
  background-image: url('');
  background-position: 50px 10px;
  
  width: 87%;
  font-size: 16px;
  padding: 12px 20px 12px 10px;
  border: 2px solid #3F51B5;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 87%;
  font-size: 18px;
}


#myTable th, #myTable td {
  text-align: left;
  
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
	</style>



<style>
    	*, body {
  margin: 0;
  padding: 0;
}
.flex {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}
.content {
  height: 100px;
  width: 45%;
  color: #fff;
  font-size: 18px;
  line-height: 100px; /* centering text just for view */
  text-align: center;
  background-color: grey;
  margin: 5px;
  border: 1px solid lightgrey;
  display: none;
}
#loadMore {
  width: 200px;
  color: #fff;
  display: block;
  text-align: center;
  margin: 20px auto;
  padding: 10px;
  border-radius: 10px;
  border: 1px solid transparent;
  background-color: blue;
  transition: .3s;
}
#loadMore:hover {
  color: blue;
  background-color: #fff;
  border: 1px solid blue;
  text-decoration: none;
}
.noContent {
  color: #000 !important;
  background-color: transparent !important;
  pointer-events: none;
}
</style>
