<!DOCTYPE html>
<html>
<style>
    
	ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: white;
	}

	li {
		float: right;
        padding-top: 30px;
	}


	li a {
		display: block;
		color: black;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	li a:hover {
		color: #FCD307;
	}
    
    #home{
        color: #FCD307;
        text-decoration: none;
    }


	#findajob{
		background-color: red;
	}

	#nav_bar{
		height: 100px;
		background-color: #68829E;
		text-align: center;
	}

	.nav_bar_imgs{
		display: inline-block;
		padding: 5px 30px;
        border: 0;
        text-decoration: none;
	}
    
    
    a{
        border: 0 none;
        text-decoration: none;
    }
    
    .button5 {
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        margin: 4px 2px;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        cursor: pointer;
        background-color: transparent;
        border: 3px solid white;
        border-radius: 4px;
        margin-top: -80px;
        margin-left: -80px;
        position: absolute;
        width: 200px;
    }

    .button5:hover {
        background-color: transparent;
        border-color: #FCD307;
        color: #FCD307;
    }
    
    #homepage_first_section{
        position: relative;
    }
    
    #logo{
        width: 100px;
    }
    
    #hereforcustomerreviews{
        width: 70px;
        height: 20px;
        background-color: transparent;
        margin-top: -100px;
        margin-left: 930px;
        position: absolute;
        
    }
    
    #philosophy_div{
        position: relative;
    }
    
    #messagebox{
        margin-left: 155px;
        margin-top: -70px;
    }
    
    #formbox{
        margin-top: -185px;
        margin-left: 250px;
    }
    
    textarea{
        resize: none;
    }



</style>

<body>
    <font face='Raleway'>

	<ul>
        <li><a href="customerreviews.html">REVIEWS</a></li>
		<li><a href="findajob.html">FIND A JOB</a></li>
		<li><a href="tips.html">TIPS</a></li>
		<li><a id="home" href="#home">HOME</a></li>
		<img src="careercoachlogo.png" width="360">
	</ul>

	<div id="nav_bar">
		<a href="interview.html">
            <img class="nav_bar_imgs" src="interview.png" width="90">
        </a>
        <a href="resume.html">
		  <img class="nav_bar_imgs" id="resume" src="resume.png" width="88">
        </a>
        <a href="coverletter.html">
		  <img class="nav_bar_imgs" src="coverletter.png" width="105">
        </a>
        <a href="application.html">
		  <img class="nav_bar_imgs" src="application.png" width="95">
        </a>
	</div>

	<div id="homepage_first_section">
	<img src="homepgimage.png" width="100%" height="490px">
        <center><button class="button5">FIND A JOB</button></center>
	</div>
    
    
    <div id="philosophy_div">
    <img id="philosophy" src="philosophy.png" width="100%" height="490px">
        
        <a href="customerreviews.html"><div id="hereforcustomerreviews" onclick=""></div></a>
    </div>
        
    <img src="contactus.png" width="100%">


        
        
</font>
</body>
    
</html>