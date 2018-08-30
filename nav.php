<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: transparent;
  -webkit-box-shadow: 0 4px 2px -2px black;
  -moz-box-shadow: 0 4px 2px -2px black;
  box-shadow: 0 4px 2px -2px #F0663B;
  background-color: transparent;
  height:;
}

.topnav a {
  float: left;
  display: block;
  color: #F0663B;
  text-align: center;
  padding: 20px 15px;
  text-decoration: none;
  font-size: 20px;
  height: auto;

}

.right{
  float: right;
}

#drpd{
  float: left;
}

#image {
  float: left;
}

#life{
  padding-bottom:10px;
  padding-top:25px;
  font-size: 19px;"
}
.topnav .icon {
  display: none;
}

.dropdown1 {
    
    overflow: hidden;
}

.dropdown1 .dropbtn {
    font-size: 20px;    
    border: none;
    outline: none;
    color: #F0663B;
    padding: 20px 15px;
    background-color: inherit;
    height: auto;
    margin: 0;
  }

.dropdown-content {
    display: none;
    float:none;
    position: absolute;
    background-color: white;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: #F0663B;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.topnav a:hover, .dropdown1:hover .dropbtn {
  background-color: #F0663B;
  color: white;
}

#image:hover {
  background-color: transparent;
} 

.dropdown-content a:hover {
    background-color: #F0663B;
    color: white;
}

.dropdown1:hover .dropdown-content {
    display: block;
}

#blank:hover{
  background-color: transparent;
}

@media screen and (max-width: 750px) {
  .topnav a:not(:first-child), .dropdown1 .dropbtn {
    display: none;
  }
  .topnav {position: relative;}
  .topnav .icon {
    position: absolute;
    left: 0;
    top: 0px;
    }

    .topnav.responsive a {
  
  text-align: left;
 }


  .topnav a.icon {
    float: left;
    display: block;
  }
  .right{
    float: none;
  }

  .dropdown-content a {
    float: none;
  }
  .dropdown-content {
     float:none;
    } 

  #image {
    float: right;
    display: block;
    
  }
  #blank {
    padding: 20px;
    background-color: transparent;
  }

  #drpd{
    float: none;
  }
  #home{
    margin-top: 15px;
  }
  #life{
    padding-top: 20px;
    padding-bottom:20px;
    font-size: 20px;
    
  }
}

@media screen and (max-width: 750px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    left: 0;
    top: 0px;
    }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown1 {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown1 .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
  .logo{
    padding-top: 3px !important;
  }
}
</style>
</head>
<body >

<div class="topnav" id="myTopnav">
  <a id="image" href="index.html" style=" padding: 5px 10px 0px; margin: 0"><img src="https://placements.lnmiit.ac.in/images/Logo-LNMIIT.svg" style="width: 100px; padding-top: 8px;padding-bottom: 5px;padding-left: 5px;padding-right: 5px; margin: 0; float:left;" class="logo"></a>
  
  <div class="right">
    <a id="blank"></a>
  <a href="index.html" id="home">Home</a>
  <a href="recruiters.php">Recruiters</a>
  <a href="cons_stats.html">Statistics</a>
  <div class="dropdown1" id="drpd"  ><button class="dropbtn" id="life" data-toggle="drpc" onclick="toggleBut2()">Life At LNMIIT<i   class="fa fa-caret-down"></i></button>
    <div class="dropdown-content" id="drpc">
      <a href="academics.html">Academic Momentum</a>
      <a href="Prof_societies.html">Professional Societies</a>
      <a href="centres.html">Centers for Advanced Learning</a>
      <a href="clubs.html">Student Clubs</a>
    </div>
    </div>
  
  <a class="right" href="contact_us.html">Contact</a>
  
</div>
<a href="javascript:void(0);" style="font-size: 20px;" class="icon" onclick="myFunction2()"><i class="fa fa-bars"></i></a>
</div>

<script>
function myFunction2() {
    var x = document.getElementById("myTopnav");
    var y = document.getElementById("drpc");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
        y.style.display = "none";
    }
}
</script>
<script type="text/javascript">
       
         function toggleBut2() {
             var x = document.getElementById("drpc");
             
             if (x.style.display === "block") {
                 x.style.display = "none";
                 
             } else {
                 x.style.display = "block";
                 
             }
             
         }
         
      </script>

</body>
</html>
