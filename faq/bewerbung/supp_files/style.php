@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i');
@import url('https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i');


body{
	margin: 0;
	background-color: #353742;
	font-family: 'Roboto', sans-serif;	font-weight: 300;
}

.container{
	width: 80%;
	margin: 0 auto;
}

header{
	background: #36404A;
	box-shadow: 0px 6px 1px #2B333B;
}

header::after {
	content: '';
	display: table;
	clear: both;
}

.logo{
	float: left;
	padding: 10px 0;
}

nav{
	float: right;
}

nav ul {
	margin: 0;
	padding: 0;
	list-style: none;
}

nav li {
	display: inline-block;
	margin-left: 70px;
	padding-top: 30px;
	
	position: relative;
}

nav a {
	color: #FFF;
	text-decoration: none;
	text-transform: uppercase;
	font-size: 22px;
    font-weight: bold;
}

nav a:hover{
	color: #B2B2B2;
}

nav a::before{
	content: '';
	display: block;
	height: 5px;
	background-color: #B2B2B2;
	
	position: absolute;
	top: 0;
	width: 0%;
	
	transition: all ease-in-out 250ms;
}

nav a:hover::before{
	width: 100%;
}

.Schrift1{
    font-family: 'Roboto', sans-serif;;
    font-weight: bold;
    font-size: 25px;
    color: #E0E0E0;
}
.Schrift2{
    color: #E0E0E0;
    font-family: 'Roboto', sans-serif;;
}

.Schrift3 {
    color: © 2017 DEIN SERVER NAME;
    font-family: 'Roboto', sans-serif;;
    text-align: center;
}
.Schrift3 a{
    text-decoration: none;
	text-transform: uppercase;
    color: © 2017 DEIN SERVER NAME;
    font-size: 12px;
}

.buttonm{
   background-color: #4CAF50;
   border: none;
   color: #FFF;
   padding: 20px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   font-size: 16px;
   margin: 4px 2px;
   cursor: pointer;
   width: 100%;
   box-shadow: 0px 4px 1px #266D28;
   font-family: 'Roboto', sans-serif;;
   font-weight: bold;
}

.buttonk{
   background-color: #8E8E8E;
   border: none;
   color: #FFF;
   padding: 20px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   font-size: 16px;
   margin: 4px 2px;
   cursor: pointer;
   width: 100%;
   box-shadow: 0px 4px 1px #666666;
   font-family: 'Open Sans', sans-serif;
   font-weight: bold;
}

.button1{border-radius: 4px;}

.buttonm:hover{
    transition: all ease-in-out 550ms;
    background-color: #266D28;
    box-shadow: 0px 4px 1px #266D28;
}

.buttonb{
   background-color: #F8A900;
   border: none;
   color: #FFF;
   padding: 20px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   font-size: 16px;
   margin: 4px 2px;
   cursor: pointer;
   width: 100%;
   box-shadow: 0px 4px 1px #B27907;
   font-family: 'Roboto', sans-serif;;
   font-weight: bold;
}

.buttonb:hover{
    transition: all ease-in-out 550ms;
    background-color: #B27907;
   box-shadow: 0px 4px 1px #B27907;
}

.buttond{
   background-color: #44CCCC;
   border: none;
   color: #FFF;
   padding: 20px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   font-size: 16px;
   margin: 4px 2px;
   cursor: pointer;
   width: 100%;
   box-shadow: 0px 4px 1px #136B6B;
   font-family: 'Roboto', sans-serif;;
   font-weight: bold;
}

.buttond:hover{
    transition: all ease-in-out 550ms;
    background-color: #136B6B;
    box-shadow: 0px 4px 1px #136B6B;
}

label{
    font-family: 'Roboto', sans-serif;;
    font-weight: bold;
    font-size: 18px;
    color: #E0E0E0;
}

input[type=text] {
    font-family: 'Roboto', sans-serif;;
    font-weight: bold;
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
    border-radius: 2px;
	background-color: #353742;
	color: #fff;
}

input[type=text]:focus {
    border: 3px solid #fff;
}

input[type=email] {
    font-family: 'Roboto', sans-serif;;
    font-weight: bold;
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
    border-radius: 2px;
	background-color: #353742;
	color: #fff;
}

input[type=email]:focus {
    border: 3px solid #fff;
}

select[type=pickup_place]{
    font-family: 'Roboto', sans-serif;;
    font-weight: bold;
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
    border-radius: 2px;
	background-color: #353742;
	color: #fff;
}

select[type=pickup_place]:focus {
    border: 3px solid #fff;
}

textarea{
    font-family: 'Roboto', sans-serif;;
    font-weight: bold;
    width: 100%;
    padding: 12px 20px;
    margin: 5px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
    border-radius: 2px;
	background-color: #353742;
	color: #fff;
}

textarea:focus {
    border: 3px solid #fff;
}

input[type=submit] {
	float: right;
	background-color: #4CAF50;
	border: none;
	color: white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	margin: 4px 2px;
	cursor: pointer;
	font-size: 20px;
    font-family: 'Roboto', sans-serif;;
    font-weight: bold;
    width: 100%;
    border-radius: 6px;
    box-shadow: 0px 4px 1px #266D28;
}
