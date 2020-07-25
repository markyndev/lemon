
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lemon - Registry</title>
<link rel="icon" type="imagem/jpg" href="icon.png" />

<style>
	@import url(https://fonts.googleapis.com/css?family=Pacifico);
	@import url('https://fonts.googleapis.com/css?family=Montserrat:300&display=swap');

	body {
  font-family: Arial;
  color:white;


  background: #FFE56E;
}
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: white;
  opacity: 1; /* Firefox */
}
.card {
	
	transition: transform .7s;
   background-color: rgba(0, 0, 0, 0);
   color:white;
  
   padding: 20px;
   margin-top: 20px;
    height:90%;
   
}
.box {
	  padding: 20px;
	transition: transform .7s;
   background-color: #F0B401;
   color:white;
    border-radius:25px;
   
}
img{
    
max-width:150px;

    height:auto;
}
input, textarea {
	  background-color: #F0B401	; 
  border: none;
  color: white;
  border-radius:25px;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

hr {
  border: 2px solid rgb(250,250,250, 0.8);
  margin-top:40px;
    margin-bottom:15px;
  border-radius: 50px;
}

</style>
<center>
	<br>
<div class="header">
<img src="icon.png">
</div>

</center>
<br/>
<?php
if(isset($_POST['add']))
{
    $appname=$_POST['appname'];
    $getname=$_POST['getname'];
    $version=$_POST['version'];
    $linkdown=$_POST['getlink'];
    $data=$_POST['data'];
    $txt="{
      'getname': '$getname',
      'appname': '$appname',
      'version': '$version',
      'info': '$data',
      'link': '$linkdown'
    },";

$myfile = fopen("new_packs.json", "r") or die("Unable to open file!");
$anti =fread($myfile,filesize("new_packs.json"));

    file_put_contents('banco.json', $txt."\n".$anti);
fclose($myfile);
}
?> 
 <div class="card">
<form name="web_form" id="web_form" method="post">
    <center>
      </label><input type="text" name="appname" placeholder="AppName"  id="appname" /><br>
        </label><input type="text" name="getname" placeholder="GetName"  id="getname" /><br>
          </label><input type="text" name="version" placeholder="AppVersion"  id="version" /><br>
             </label><input type="text" name="getlink" placeholder="DownloadDirect [.zip]"  id="getlink" /><br>
          <textarea rows="10" cols="30" placeholder="Description of app"  name="data"></textarea><br>
        <input type="submit" name="add" id="add" value="Submit" />
        </center>
</form>
<hr>

</div>
