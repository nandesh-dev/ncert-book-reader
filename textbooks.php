<html>
<!DOCTYPE html>
<html lang="en">
<title>NCERT</title>
<head>
	<meta name="referrer" content="origin">
	<meta http-equiv="Cache-control" content="No-Cache">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
	<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
	<META HTTP-EQUIV="EXPIRES" CONTENT="Mon, 22 Jul 2002 11:12:01 GMT">
	
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/all.min.css">
	<link rel="stylesheet" href="/css/style.css">
	
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/wowjs@1.1.3/dist/wow.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/animate.js@2.0.2/dist/scripts/animate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	
	</head>

		
		<body id="dark">
<a id="button"><i class="fas fa-chevron-up"></i></a>
	<!--<div class="warning">
	<div class="container">
		<p class="mt-2 mb-1" style="text-align:center; color: #981F4D; font-weight: 600; font-size:18px;">If NCERT website is not working properly in your device kindly clear your browser cache, cookies, temp files and retry<a style="color: ; font-weight: 600; font-size:18px;" href="https://n20.ncert.org.in/uploads/HowtoclearcacheinChromebrowser.pdf" target="_blank"> click to know more.</a></p>
	</div>
	</div>-->
	
	<div class="top-head">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 date-time">
					<span id="date_time">
                      <script type="text/javascript">
						document.write ('<span id="date" style="">', new Date().toLocaleString(), ' </span>')
						if (document.getElementById) onload = function ()
                        {
    						setInterval ("document.getElementById ('date').firstChild.data = new Date().toLocaleString()", 50)
						}
					  </script>
					  | Beta Version 
                   </span>
				</div>
				<div class="text-right col-sm-9">
					<ul class="list-inline top-menu">
						<li class="list-inline-item"><a href="#content">Skip to main content | </a></li>
						<li class="list-inline-item"><a href="#navigation">Skip to navigation | </a></li>
						<li class="list-inline-item"><a href="screen-reader.php">Screen Reader Access | </a></li>
						<li class="list-inline-item"><a href="">Text Size:</a>  
                          	<span class="minus" onclick="resizeText(-1)">A-</span>|<a href="" >A</a>|<span class="plus" onclick="resizeText(1)">A+</span> 
                        </li>
                        

                       <li class="list-inline-item"><a href="">Site View:</a>  
                          	<span onclick="myFunction()" id="dark" class="black">A</span><a href="" class="white">A</a> 
                        </li>
						
						<li class="list-inline-item dropdown">
						<a class="dropdown-toggle" href="#" id="organisation" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  Language - 						</a>
						<div class="dropdown-menu dropdown-menu-lang organisation" aria-labelledby="organisation">
							<ul class="list">
								<li><a href="?ln=en">en</a></li>
								<li><a href="?ln=hi">hi</a></li>
							</ul>
						</div>
					  </li>
						
					</ul>
				</div>
			</div>
		</div>
	</div>



	
<!--RMZ Text Resize Script-->



<script>

function resizeText(multiplier) {
  if (document.body.style.fontSize == "") {
    document.body.style.fontSize = "1.0em";
  }
  document.body.style.fontSize = parseFloat(document.body.style.fontSize) + (multiplier * 0.2) + "em";
}

$(document).ready(function(){
  $(".black").click(function(){
    $("a, span, .regional-section h5, .initiatives h5, .activity-box h5, .heading-border h4, ul li, h6, .table, .top th").css("color", "#fff");
    $("p").css("color", "#ccc");
    $(".page-content h4, ul li .far, .accordion .far, .clr, .fas, h4").css("color", "#ffc107");
    $(".inner-box .locate").css("color", "#495057");
    $(".resource-section p").css("color", "#495057");
    $(".navbar-light .navbar-nav .nav-link, .dropdown-item").css("color", "#3b3b3b");
    $(".nav-tabs .nav-link.active").css("color", "#434343");
    $(".depart li").css("box-shadow", "1px 1px 10px #e4e1e1de");
    $(".profile-img img, .admin-profile-img img, footer, h4, .content .container, .dept-content .container").css("box-shadow", "none");
    $(".table-bordered td, .table-bordered th, .table thead th").css("border", "1px solid #ccc");
    $("h4").css("text-shadow", "none");
    $("body, .top-head, .navbar, .content, .content .container, .card-body, .dept-content, .dept-content .container").css("background", "black");
    $(".resource-section, .promo-section-border, .activity-box h5").css("background", "#3f3f3f");
    $(".table thead th").css("background", "#dc3545");
  });
});


</script> <!--RMZ Call Top Header-->
	<header>
		<div class="container">
			<div class="row">
				<div class="col-sm-8"><img src="images/ncertlogo1.png" class="img-responsive" width="80%"></div>
				<div class="col-sm-4 mg-auto">
				    <div class="search-box">
    				    <form class="mt-2 form-inline d-flex justify-content-center md-form form-sm active-pink-2">
                              <input class="mr-3 form-control form-control-sm w-75" type="text" placeholder="Search" aria-label="Search" onkeyup="showResult(this.value)">
                              <i class="fas fa-search" aria-hidden="true"></i>
                              <div id="livesearch"></div>
                        </form>
                    </div>
				</div>
			</div>
		</div>
	</header>
	
	<nav id="navigation" class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">NCERT</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="mr-auto navbar-nav">
				  <li class="nav-item">
					<a class="nav-link" href="/?ln=en">Home <span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="organisation" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  About
					</a>
					<div class="dropdown-menu organisation" aria-labelledby="organisation">
					  <a class="dropdown-item" href="about-us.php?ln=en">About Us</a>
					  <a class="dropdown-item" href="management.php?ln=en">Management</a>
					  <a class="dropdown-item" href="senior-functionaries.php?ln=en">Senior Functionaries</a>
					  <a class="dropdown-item" href="disclo_un_rti.php?ln=en">Disclosure Under RTI</a>
					</div>
				  </li>
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="constituents" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  Constituents and Departments
					</a>
					<div class="dropdown-menu constituents" aria-labelledby="constituents">
					  <a class="dropdown-item" href="national-institute-education.php?ln=en">National Institute of Education</a>
					  <a class="dropdown-item" href="regional-institutes-education.php?ln=en">Regional Institutes of Education</a>
					  <a class="dropdown-item" href="https://ciet.nic.in" target="">Central Institute of Educational Technology</a>
					  <a class="dropdown-item" href="pss-vocational-education.php?ln=en">PSS Central Institute of Vocational Education</a>
					</div>
				  </li>
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="programmes" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  Programmes
					</a>
					<div class="dropdown-menu programmes" aria-labelledby="programmes">
					  <a class="dropdown-item" href="national-talent-examination.php?ln=en">National Talent Search Examination</a>
					  <a class="dropdown-item" href="all-india-school-education-survey.php?ln=en">All India School Education Survey</a>
					  <a class="dropdown-item" href="teacher-innovation.php?ln=en">Promoting Teacher Innovation</a>
					  <a class="dropdown-item" href="jn-national-science-exhibition.php?ln=en">Rashtriya Bal Vaigyanik Pradarshani</a>
					  <a class="dropdown-item" href="media-programmes.php?ln=en">Media Programmes</a>
					  <a class="dropdown-item" href="research-grants-(ERIC).php?ln=en">Research Grants (ERIC)</a>
					  <a class="dropdown-item" href="programme-advisory-committee.php?ln=en">Programme Advisory Committee</a>
					</div>
				  </li>
				   <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="gallery" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  Gallery
					</a>
					<div class="dropdown-menu gallery" aria-labelledby="gallery">
					
					  <a class="dropdown-item" href="ncf_mandate_gallery.php?ln=en">Implementation of NEP - 2020</a>
					  <a class="dropdown-item" href="international-yoga.php?ln=en">International Yoga Day</a>
					  <a class="dropdown-item" href="kala-utsav.php?ln=en">Kala Utsav</a>
					  <a class="dropdown-item" href="FoundationDay.php">Foundation Day</a>
					  <a class="dropdown-item" href="eRaksha.php">Launch of eRaksha</a>
					  <a class="dropdown-item" href="healthandwell.php">Health and Wellness</a>

				  </li>
				   <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="publication" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  Publication
					</a>
					<div class="dropdown-menu publication mega-dropdown-menu" aria-labelledby="publication">
							<div class="row">
								<div class="col-sm-3">
									<br>
									<a class="dropdown-item" href="list-publication.php?ln=en">List of Publication</a>
									<a class="dropdown-item" href="https://epathshala.nic.in//pages.php?id=download-app&ln=en" target="_blank">ePub</a>
									<a class="dropdown-item" href="https://epathshala.nic.in//process.php?id=students&type=eTextbooks&ln=en" target="_blank">Flipbook</a>
									<a class="dropdown-item" href="textbook.php">PDF(I-XII)</a>
									<a class="dropdown-item" href="state-uts-eBook.php?ln=en">State/ Uts eBook (epub)</a>
									<a class="dropdown-item" href="vocational-education.php?ln=en">Vocational Education</a>
									<a class="dropdown-item" href="dee/cce-package.php?ln=en">CCE Packages</a>
									
								</div>
								<div class="col-sm-3 brd">
									<br>
									<a class="dropdown-item" href="dee/bridge-course-package.php?ln=en">Bridge Course Package</a>
									<a class="dropdown-item" href="dee/barkha-series.php?ln=en">Barkha Series</a>
									<a class="dropdown-item" href="other-publications.php?ln=en">Other Publications</a>
									<a class="dropdown-item" href="journals-and-periodicals.php?ln=en">Journals and Periodicals</a>
									<a class="dropdown-item" href="non-Print-materials.php?ln=en">Non-Print Materials</a>
									<a class="dropdown-item" href="information-customers.php?ln=en">Information to Customers</a>
									<a class="dropdown-item" href="childrens-book.php?ln=en">Childrens Book</a>
									
								</div>
								<div class="col-sm-3">
									<br>
									<a class="dropdown-item" href="model-question-papers.php?ln=en">Model Question Papers</a>
									<a class="dropdown-item" href="books-indent-form.php?ln=en">Books Indent Form</a>
									<a class="dropdown-item" href="school-kits-and-lab-manual.php?ln=en">School Kits</a>
									<a class="dropdown-item" href="exemplar-problems.php?ln=en">Exemplar Problems</a>
									<a class="dropdown-item" href="science-laboratory-manual.php?ln=en">Laboratory Manuals</a>
									<a class="dropdown-item" href="pdf/leading_the_change.pdf" target="_blank">50 years of NCERT</a>
									<a class="dropdown-item" href="result-framework-doc.php?ln=en">Results Framework Document</a>
								</div>
								
								<div class="col-sm-3 brd">
									<br>
									<a class="dropdown-item" href="trilingual_dictionaries.php?ln=en">Trilingual Dictionaries</a>
									<a class="dropdown-item" href="adulteducation.php?ln=en">Adult Education</a>
									
									
								</div>
								
								
							</div>
					
						
    					
						
					</div>
				  </li>
				   <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="announcement" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  Announcement
					</a>
					<div class="dropdown-menu announcement" aria-labelledby="announcement">
					  <a class="dropdown-item" href="vacancies.php?ln=en">Vacancies</a>
					  <a class="dropdown-item" href="tenders.php?ln=en">Tenders</a>
					  <a class="dropdown-item" href="notices.php?ln=en">Notices</a>
					  <a class="dropdown-item" href="other-announcements.php?ln=en">Other Announcements</a>
					  <a class="dropdown-item" href="seminar.php?ln=en">Seminar/ Conference/ Workshop</a>
					  <a class="dropdown-item" href="ncert-news.php?ln=en">NCERT in NEWS</a>
					</div>
				  </li>
				   <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="contacts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  Contacts
					</a>
					<div class="dropdown-menu contacts" aria-labelledby="contacts">
						<a class="dropdown-item" href="feedback.php?ln=en">Contact / Feedback</a>
						<a class="dropdown-item" href="public-information-officers.php?ln=en">Public Information Officers</a>
						<a class="dropdown-item" href="telephone-directory.php?ln=en">Telephone Directory</a>
						
					</div>
				  </li>
				</ul>
			</div>
		</div>
	</nav>



		
		
<!--RMZ Menue Script-->
<script>
		$(document).ready(function() {
			
		$('#ebooks').mouseenter(function() {
			$('.ebooks').fadeIn();
		  });
		  $('.ebooks').mouseleave(function() {
			$(this).fadeOut();
		  });
		 
		});


		// RMZ Top Scroll Script

		var btn = $('#button');

		$(window).scroll(function() {
		if ($(window).scrollTop() > 300) {
			btn.addClass('show');
		} else {
			btn.removeClass('show');
		}
		});

		btn.on('click', function(e) {
		e.preventDefault();
		$('html, body').animate({scrollTop:0}, '300');
		});


		function showResult(str) {
		if (str.length==0) {
			document.getElementById("livesearch").innerHTML="";
			return;
		}

		var xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange=function() {
			if (this.readyState==4 && this.status==200) {
			document.getElementById("livesearch").innerHTML=this.responseText;
			
			}
		}
		xmlhttp.open("GET","dc_searchdata.php?q="+str,true);
		xmlhttp.send();
		}

</script>	
	
<div class="page-title-bg">
    <div class="page-title">
        <div class="container">
            <h2>Textbooks PDF (I-XII)</h2>
		</div>
    </div>
</div>


<div class="content">
	<div class="page-content">
		<div class="container">
		
		
<body topmargin="0" leftmargin="0" bgcolor="#faeadd" cz-shortcut-listen="true" data-gr-c-s-loaded="true">
	<div id="Layer1" >
	<center>
    
                <table align="center" class="first-layer" width="100%" height="" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                        <td>
						 			 <script type="text/javascript">
										 
										 
										 
function change()
{

document.test.tsubject.options[0].text="..Select Subject......";
		document.test.tsubject.options[1].text="";
		document.test.tsubject.options[2].text="";
		 document.test.tsubject.options[3].text="";
		 document.test.tsubject.options[4].text="";
		  document.test.tsubject.options[5].text="";
		  document.test.tsubject.options[6].text="";
		  document.test.tsubject.options[7].text="";
		  document.test.tsubject.options[8].text="";
		  document.test.tsubject.options[9].text="";	
		  document.test.tsubject.options[10].text="";
		 document.test.tsubject.options[11].text="";
		  document.test.tsubject.options[12].text="";
		 document.test.tsubject.options[13].text="";
		 document.test.tsubject.options[14].text="";
		  document.test.tsubject.options[15].text="";
		  document.test.tsubject.options[16].text="";
		  document.test.tsubject.options[17].text="";
       	  	document.test.tsubject.options[18].text="";
		  document.test.tsubject.options[19].text="";
		  document.test.tsubject.options[20].text="";
		  document.test.tsubject.options[21].text="";
		  document.test.tsubject.options[22].text="";
		 document.test.tsubject.options[23].text="";
		document.test.tsubject.options[24].text="";
		 document.test.tsubject.options[25].text="";
		 document.test.tsubject.options[26].text="";
		document.test.tsubject.options[27].text="";
		  document.test.tsubject.options[28].text="";


		 
		
		
		
		
		
	//this function check the classthat you have selected
	
	if (document.test.tclass.value==-1)
	{
		document.test.tsubject.options[0].text=".....Select Subject.....";
		document.test.tsubject.options[1].text="";
		document.test.tsubject.options[2].text="";
		
	}
	else if (document.test.tclass.value==1)// this condition checks which class u have select and you can add subject according to class 1
	{
		document.test.tsubject.options[0].text="..Select Subject..";
		document.test.tsubject.options[1].text="English";
		document.test.tsubject.options[2].text="Mathematics";
		document.test.tsubject.options[3].text="Hindi";
		document.test.tsubject.options[4].text="Urdu";
		//document.test.tsubject.options[5].text="";
		
	}
		
	
	else if (document.test.tclass.value==2)// this condition checks which class u have select and you can add subject according to class 2
	{
		document.test.tsubject.options[0].text="..Select Subject..";
		document.test.tsubject.options[1].text="Mathematics";
		document.test.tsubject.options[2].text="Hindi";
		document.test.tsubject.options[3].text="English";
		document.test.tsubject.options[4].text="Urdu";
	
	}	
else if (document.test.tclass.value==3)// this condition checks which class u have select and you can add subject according to class 3
	{
		document.test.tsubject.options[0].text="..Select Subject..";
		document.test.tsubject.options[1].text="Mathematics";
		document.test.tsubject.options[2].text="Hindi";
		document.test.tsubject.options[3].text="English"
		document.test.tsubject.options[4].text="Environmental Studies"
		document.test.tsubject.options[5].text="Urdu"

	
	}	
	else if (document.test.tclass.value==4)// this condition checks which class u have select and you can add subject according to class 4
	{
		document.test.tsubject.options[0].text="..Select Subject..";
		document.test.tsubject.options[1].text="Mathematics";
		document.test.tsubject.options[2].text="Hindi";
		document.test.tsubject.options[3].text="English"
		document.test.tsubject.options[4].text="Environmental Studies"
		document.test.tsubject.options[5].text="Urdu"

	
	}
			else if (document.test.tclass.value==5)// this condition checks which class u have select and you can add subject according to class 5
	{
		document.test.tsubject.options[0].text="..Select Subject..";
		document.test.tsubject.options[1].text="Mathematics";
		document.test.tsubject.options[2].text="Hindi";
		document.test.tsubject.options[3].text="English";
		document.test.tsubject.options[4].text="Environmental Studies";
		document.test.tsubject.options[5].text="Urdu";
		//document.test.tsubject.options[6].text="";
		
	}	
	else if (document.test.tclass.value==6)// this condition checks which class u have select and you can add subject according to class  6
	{
		document.test.tsubject.options[0].text="..Select Subject..";
		document.test.tsubject.options[1].text="Hindi";
		document.test.tsubject.options[2].text="English";
		document.test.tsubject.options[3].text="Mathematics";
		document.test.tsubject.options[4].text="Social Science";
		document.test.tsubject.options[5].text="Sanskrit";
		document.test.tsubject.options[6].text="Science";
		document.test.tsubject.options[7].text="Urdu";
		//document.test.tsubject.options[8].text="Environmental Education";
		//document.test.tsubject.options[9].text="";
		
	}	
	
else if (document.test.tclass.value==7)// this condition checks which class u have select and you can add subject according to class 7 
	{
		document.test.tsubject.options[0].text="..Select Subject..";
		document.test.tsubject.options[1].text="Mathematics";
		document.test.tsubject.options[2].text="Science";
		document.test.tsubject.options[3].text="English"
		document.test.tsubject.options[4].text="Sanskrit"
		document.test.tsubject.options[5].text="Social Science"
		document.test.tsubject.options[6].text="Hindi"
		document.test.tsubject.options[7].text="Urdu"
		//document.test.tsubject.options[8].text="Environmental Education"
	}	
else if (document.test.tclass.value==8)// this condition checks which class u have select and you can add subject according to class 8  
	{
		document.test.tsubject.options[0].text="..Select Subject..";
		document.test.tsubject.options[1].text="English";
		document.test.tsubject.options[2].text="Mathematics";
		document.test.tsubject.options[3].text="Hindi";
		document.test.tsubject.options[4].text="Science";
		document.test.tsubject.options[5].text="Social Science";
		document.test.tsubject.options[6].text="Sanskrit";
		document.test.tsubject.options[7].text="Urdu";
		//document.test.tsubject.options[7].text="Environmental Education";
		//document.test.tsubject.options[8].text="";
		//document.test.tsubject.options[9].text="";
		
	}	
	else if (document.test.tclass.value==9)// this condition checks which class u have select and you can add subject according to class 9 
	{
		document.test.tsubject.options[0].text="..Select Subject..";
		document.test.tsubject.options[1].text="English";
		document.test.tsubject.options[2].text="Hindi";
		document.test.tsubject.options[3].text="Sanskrit";
		document.test.tsubject.options[4].text="Mathematics";
		document.test.tsubject.options[5].text="Science";
		document.test.tsubject.options[6].text="Social Science";	
		//document.test.tsubject.options[7].text="Art Education";	
		document.test.tsubject.options[7].text="Urdu";
		document.test.tsubject.options[8].text="Health and Physical Education";
		document.test.tsubject.options[9].text="ICT";
		//document.test.tsubject.options[9].text="Vocational";
		//document.test.tsubject.options[8].text="Environmental Education";		
		//document.test.tsubject.options[9].text="";
		
	}	
	else if (document.test.tclass.value==10)// this condition checks which class u have select and you can add subject according to class 10
	{
		document.test.tsubject.options[0].text="..Select Subject..";
		document.test.tsubject.options[1].text="Mathematics";
		document.test.tsubject.options[2].text="Science";
		document.test.tsubject.options[3].text="Hindi";
		document.test.tsubject.options[4].text="Social Science";
		document.test.tsubject.options[5].text="English";
		document.test.tsubject.options[6].text="Sanskrit";
		document.test.tsubject.options[7].text="Urdu";
		document.test.tsubject.options[8].text="Health and Physical Education";
		//document.test.tsubject.options[8].text="Environmental Education";
		
	}	
		

	else if (document.test.tclass.value==11)// this condition checks which class u have select and you can add subject according to class 11
	{
		/*document.test.tsubject.options[0].text="..Select Subject..";
		document.test.tsubject.options[1].text="Sanskrit";
		document.test.tsubject.options[2].text="Accountancy";
		document.test.tsubject.options[3].text="Chemistry";
		document.test.tsubject.options[4].text="Mathematics";
		document.test.tsubject.options[5].text="Statistics";
		document.test.tsubject.options[6].text="Biology";
		document.test.tsubject.options[7].text="Psychology";
		document.test.tsubject.options[8].text="Geography";
		document.test.tsubject.options[9].text="Physics";	
		document.test.tsubject.options[10].text="Hindi";
		document.test.tsubject.options[11].text="Sociology";
		document.test.tsubject.options[12].text="English";
		document.test.tsubject.options[13].text="Political Science";
		document.test.tsubject.options[14].text="History";
		document.test.tsubject.options[15].text="Economics";
		document.test.tsubject.options[16].text="Business Studies";
		document.test.tsubject.options[17].text="Urdu";
       	//document.test.tsubject.options[18].text="Heritage Crafts";	
		document.test.tsubject.options[18].text="Graphics design";
		document.test.tsubject.options[19].text="Computers and Communication Technology";
		document.test.tsubject.options[20].text="Home Science";
		document.test.tsubject.options[21].text="Creative Writing and Translation";
		document.test.tsubject.options[22].text="Fine Art";
		//document.test.tsubject.options[24].text="Computer Science";
		document.test.tsubject.options[23].text="Informatics Practices";
		document.test.tsubject.options[24].text="Computer Science";*/


		document.test.tsubject.options[0].text="..Select Subject..";
		document.test.tsubject.options[1].text="Sanskrit";
		document.test.tsubject.options[2].text="Accountancy";
		document.test.tsubject.options[3].text="Chemistry";
		document.test.tsubject.options[4].text="Mathematics";
		//document.test.tsubject.options[5].text="Statistics";
		document.test.tsubject.options[5].text="Biology";
		document.test.tsubject.options[6].text="Psychology";
		document.test.tsubject.options[7].text="Geography";
		document.test.tsubject.options[8].text="Physics";	
		document.test.tsubject.options[9].text="Hindi";
		document.test.tsubject.options[10].text="Sociology";
		document.test.tsubject.options[11].text="English";
		document.test.tsubject.options[12].text="Political Science";
		document.test.tsubject.options[13].text="History";
		document.test.tsubject.options[14].text="Economics";
		document.test.tsubject.options[15].text="Business Studies";
		document.test.tsubject.options[16].text="Urdu";
       	//document.test.tsubject.options[26].text="Heritage Crafts";
		//document.test.tsubject.options[17].text="Graphics design";
		//document.test.tsubject.options[27].text="Computers and Communication Technology";
		document.test.tsubject.options[17].text="Home Science";
		document.test.tsubject.options[18].text="Creative Writing and Translation";
		document.test.tsubject.options[19].text="Fine Art";
		document.test.tsubject.options[20].text="Informatics Practices";
		document.test.tsubject.options[21].text="Computer Science";
		document.test.tsubject.options[22].text="Health and Physical Education";
		document.test.tsubject.options[23].text="Biotechnology";
		document.test.tsubject.options[24].text="Sangeet";
		document.test.tsubject.options[25].text="Knowledge Traditions Practices of India";
	}
	else if (document.test.tclass.value==12)// this condition checks which class u have select and you can add subject according to class 12
	{
		document.test.tsubject.options[0].text="..Select Subject..";
		document.test.tsubject.options[1].text="Mathematics";
		document.test.tsubject.options[2].text="Physics";
		document.test.tsubject.options[3].text="Accountancy"
		document.test.tsubject.options[4].text="Sanskrit"
		document.test.tsubject.options[5].text="Hindi"
		document.test.tsubject.options[6].text="English"
		document.test.tsubject.options[7].text="Biology"
		document.test.tsubject.options[8].text="History"
		document.test.tsubject.options[9].text="Geography"
		document.test.tsubject.options[10].text="Psychology"
		document.test.tsubject.options[11].text="Sociology"
		document.test.tsubject.options[12].text="Chemistry";
		document.test.tsubject.options[13].text="Political Science";
		document.test.tsubject.options[14].text="Economics";
		document.test.tsubject.options[15].text="Business Studies";
		//document.test.tsubject.options[16].text="Heritage Crafts";
		//document.test.tsubject.options[16].text="New Age Graphics Design";
		document.test.tsubject.options[16].text="Home Science";
		document.test.tsubject.options[17].text="Urdu";
		document.test.tsubject.options[18].text="Creative Writing & Translation";
		document.test.tsubject.options[19].text="Fine Art";
		document.test.tsubject.options[20].text="Computer Science";	
		document.test.tsubject.options[21].text="Informatics Practices";
		document.test.tsubject.options[22].text="Biotechnology";
	}
	else if (document.test.tclass.value==13)// this condition checks which class u have select and you can add subject according to class 11 & 12
	{
		document.test.tsubject.options[0].text="..Select Subject..";
		document.test.tsubject.options[1].text="Hindi";	
		document.test.tsubject.options[2].text="Sanskrit";	
		//document.test.tsubject.options[3].text="Heritage Crafts";
		document.test.tsubject.options[3].text="Urdu";
		
	}
	else if (document.test.tclass.value==14)// this condition checks which class u have select and you can add subject according to class 
	{
		document.test.tsubject.options[0].text="..Select Subject..";
		//document.test.tsubject.options[1].text="Vocational";	
		
	}	
}
function change1(sind)
{ 

	// this function checks which class and subject u have selected
	// and set the value of book accordingly and the name of file that will be open after button clicked
	    
   { 

document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="";				
		document.test.tbook.options[2].text="";				
		document.test.tbook.options[3].text="";
		document.test.tbook.options[4].text="";				
		document.test.tbook.options[5].text="";				
		document.test.tbook.options[6].text="";
		document.test.tbook.options[7].text="";				
		document.test.tbook.options[8].text="";				
		document.test.tbook.options[9].text="";
		document.test.tbook.options[10].text="";				
		document.test.tbook.options[11].text="";	
		document.test.tbook.options[12].text="";
		document.test.tbook.options[13].text="";
		document.test.tbook.options[14].text="";				
		

	// this function checks which class and subject u have selected
	// and set the value of book accordingly and the name of file that will be open after button clicked
	    
   if((document.test.tclass.value==1) && (document.test.tsubject.options[sind].text=="English"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		//document.test.tbook.options[1].text="Marigold";
		document.test.tbook.options[1].text="Mridang";
		document.test.tbook.options[1].value="textbook.php?aemr1=0-9"
		//document.test.tbook.options[1].value="textbook.php?aeen1=0-10"	
        //document.test.tbook.options[2].text="Raindrops";
		//document.test.tbook.options[2].value="textbook.php?aerd1=0-19"			
		
					
	}
	else if((document.test.tclass.value==1) && (document.test.tsubject.options[sind].text=="Mathematics"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Joyful-Mathematics";
		document.test.tbook.options[1].value="textbook.php?aejm1=0-13"		
		document.test.tbook.options[2].text="Anadmay-Ganit";
		document.test.tbook.options[2].value="textbook.php?ahjm1=0-13"	
		//document.test.tbook.options[3].text="Riyazi Ka Jadoo-I(Urdu)";
		//document.test.tbook.options[3].value="textbook.php?auri1=0-13"		
		
					
	}
	else if((document.test.tclass.value==1) && (document.test.tsubject.options[sind].text=="Hindi"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Sarangi";
		document.test.tbook.options[1].value="textbook.php?ahsr1=0-19"		
		
	}
	else if((document.test.tclass.value==1) && (document.test.tsubject.options[sind].text=="Urdu"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Shahnai";
		document.test.tbook.options[1].value="textbook.php?aush1=0-18"
		
	}

	

	else if((document.test.tclass.value==2) && (document.test.tsubject.options[sind].text=="Mathematics"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Joyful-Mathematics";
		document.test.tbook.options[1].value="textbook.php?bejm1=0-11"
		document.test.tbook.options[2].text="Aanadmay-Ganit";
		document.test.tbook.options[2].value="textbook.php?bhjm1=0-11"
		//document.test.tbook.options[3].text="Riyazi ka Jadu-II(Urdu)";
		//document.test.tbook.options[3].value="textbook.php?buri1=0-15"
		
				
	}
	else if((document.test.tclass.value==2) && (document.test.tsubject.options[sind].text=="Hindi"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Sarangi";
		document.test.tbook.options[1].value="textbook.php?bhsr1=0-26"
		
	}
	
	else if((document.test.tclass.value==2) && (document.test.tsubject.options[sind].text=="English"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Mridang";
		document.test.tbook.options[1].value="textbook.php?bemr1=0-13"
		//document.test.tbook.options[2].text="Raindrops";
		//document.test.tbook.options[2].value="textbook.php?berd1=0-15"
		
	}
	else if((document.test.tclass.value==2) && (document.test.tsubject.options[sind].text=="Urdu"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Shahnai";
		document.test.tbook.options[1].value="textbook.php?bush1=0-19"
		
		
	}

	

else if((document.test.tclass.value==3) && (document.test.tsubject.options[sind].text=="Hindi"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Rimjhim";
		document.test.tbook.options[1].value="textbook.php?chhn1=0-13"		
		
					
	}
	
	else if((document.test.tclass.value==3) && (document.test.tsubject.options[sind].text=="Environmental Studies"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Looking Around";
		document.test.tbook.options[1].value="textbook.php?ceap1=0-24"
		document.test.tbook.options[2].text="Aas-Pass";
		document.test.tbook.options[2].value="textbook.php?chap1=0-24"
		document.test.tbook.options[3].text="Aas-Pass(urdu)";
		document.test.tbook.options[3].value="textbook.php?cuap1=0-24"	
		
					
	}
	
	else if((document.test.tclass.value==3) && (document.test.tsubject.options[sind].text=="English"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Marigold";
		document.test.tbook.options[1].value="textbook.php?ceen1=0-10"		
		
					
	}
else if((document.test.tclass.value==3) && (document.test.tsubject.options[sind].text=="Mathematics"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Mathematics";
		document.test.tbook.options[1].value="textbook.php?cemh1=0-14"		
		document.test.tbook.options[2].text="Ganit";
		document.test.tbook.options[2].value="textbook.php?chmh1=0-14"
		document.test.tbook.options[3].text="Riyazi Ka Jadoo-III(Urdu)";
		document.test.tbook.options[3].value="textbook.php?curi1=0-14"		
				
	}
	else if((document.test.tclass.value==3) && (document.test.tsubject.options[sind].text=="Urdu"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Ibtedai Urdu";
		document.test.tbook.options[1].value="textbook.php?culb1=0-20"		
		
				
	}



 
else if((document.test.tclass.value==4) && (document.test.tsubject.options[sind].text=="Mathematics"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Math-Magic";
		document.test.tbook.options[1].value="textbook.php?demh1=0-14"
		document.test.tbook.options[2].text="Ganit Ka Jadu";
		document.test.tbook.options[2].value="textbook.php?dhmh1=0-14"
		document.test.tbook.options[3].text="Riyazi Ka Jadu(Urdu)";
		document.test.tbook.options[3].value="textbook.php?duri1=0-14"
						
	}
	else if((document.test.tclass.value==4) && (document.test.tsubject.options[sind].text=="Hindi"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Rimjhim";
		document.test.tbook.options[1].value="textbook.php?dhhn1=0-14"
						

	}
	else if((document.test.tclass.value==4) && (document.test.tsubject.options[sind].text=="Environmental Studies"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Looking Around(EVS)";
		document.test.tbook.options[1].value="textbook.php?deap1=0-27"
		document.test.tbook.options[2].text="Aas Paas";
		document.test.tbook.options[2].value="textbook.php?dhap1=0-27"
		document.test.tbook.options[3].text="Aas-Paas(Urdu)";
		document.test.tbook.options[3].value="textbook.php?duap1=0-27"
							
	}
	
	else if((document.test.tclass.value==4) && (document.test.tsubject.options[sind].text=="English"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Marigold";
		document.test.tbook.options[1].value="textbook.php?deen1=0-9"
		
	}
	else if((document.test.tclass.value==4) && (document.test.tsubject.options[sind].text=="Urdu"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Ibtedai Urdu-IV";
		document.test.tbook.options[1].value="textbook.php?dulb1=0-22"
		}

	

	else if((document.test.tclass.value==5) && (document.test.tsubject.options[sind].text=="Mathematics"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Math-Magic";
		document.test.tbook.options[1].value="textbook.php?eemh1=0-14"	
		document.test.tbook.options[2].text="Ganit";
		document.test.tbook.options[2].value="textbook.php?ehmh1=0-14"
		document.test.tbook.options[3].text="Riyazi Ka Jadoo(Urdu)";
		document.test.tbook.options[3].value="textbook.php?euma1=0-14"
				
	}
   
   else if((document.test.tclass.value==5) && (document.test.tsubject.options[sind].text=="Hindi"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Rimjhim";
		document.test.tbook.options[1].value="textbook.php?ehhn1=0-18"	
					
	}

   
   else if((document.test.tclass.value==5) && (document.test.tsubject.options[sind].text=="English"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Marigold";
		document.test.tbook.options[1].value="textbook.php?eeen1=0-10"	
						
	}

else if((document.test.tclass.value==5) && (document.test.tsubject.options[sind].text=="Environmental Studies"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Aas-Pass";
		document.test.tbook.options[1].value="textbook.php?ehap1=0-22"		
		document.test.tbook.options[2].text="Looking Around";
		document.test.tbook.options[2].value="textbook.php?eeap1=0-22"
		document.test.tbook.options[3].text="Ass Pass(Urdu)";
		document.test.tbook.options[3].value="textbook.php?euev1=0-22"	
						
	}
else if((document.test.tclass.value==5) && (document.test.tsubject.options[sind].text=="Urdu"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Ibtedai Urdu Class-V";
		document.test.tbook.options[1].value="textbook.php?eulb1=0-22"		
		<!--document.test.tbook.options[2].text="math-magic-V";
		//document.test.tbook.options[2].value="textbook.php?euma1=0-14"-->	
		<!--document.test.tbook.options[3].text="EVS-V (Urdu)";
		//document.test.tbook.options[3].value="textbook.php?euev1=0-22"-->
						
	}	


   
	 else if((document.test.tclass.value==6) && (document.test.tsubject.options[sind].text=="Hindi"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Vasant";
		document.test.tbook.options[1].value="textbook.php?fhvs1=0-14"		
		document.test.tbook.options[2].text="Durva";
		document.test.tbook.options[2].value="textbook.php?fhdv1=0-28"		
		document.test.tbook.options[3].text="Bal Ram Katha";
		document.test.tbook.options[3].value="textbook.php?fhbr1=0-12"
						
	}
 else if((document.test.tclass.value==6) && (document.test.tsubject.options[sind].text=="English"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Honeysuckle";
		document.test.tbook.options[1].value="textbook.php?fehl1=0-8"		
		document.test.tbook.options[2].text="A Pact With The Sun";
		document.test.tbook.options[2].value="textbook.php?fepw1=0-7"
						
	}
 else if((document.test.tclass.value==6) && (document.test.tsubject.options[sind].text=="Mathematics"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Mathematics";
		document.test.tbook.options[1].value="textbook.php?femh1=0-12"		
		document.test.tbook.options[2].text="Ganit";
		document.test.tbook.options[2].value="textbook.php?fhmh1=0-12"	
		document.test.tbook.options[3].text="Riyazi(Urdu)";
		document.test.tbook.options[3].value="textbook.php?furi1=0-12"
		//document.test.tbook.options[4].text="Exemplar Problem(English)";
		//document.test.tbook.options[4].value="textbook.php?feep1=0-9"
		//document.test.tbook.options[5].text="Exemplar Problem(Hindi)";
		//document.test.tbook.options[5].value="textbook.php?fhep1=0-9"
		
						
	}
 else if((document.test.tclass.value==6) && (document.test.tsubject.options[sind].text=="Social Science"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="History - Our Past";
		document.test.tbook.options[1].value="textbook.php?fess1=0-10"		
		document.test.tbook.options[2].text="The Earth Our Habitat";
		document.test.tbook.options[2].value="textbook.php?fess2=0-6"		
		document.test.tbook.options[3].text="Hamare Ateet";
		document.test.tbook.options[3].value="textbook.php?fhss1=0-10"
		document.test.tbook.options[4].text="Social And Political Life";
		document.test.tbook.options[4].value="textbook.php?fess3=0-8"
		document.test.tbook.options[5].text="Samajik Evem Rajnitik Jeevan";
		document.test.tbook.options[5].value="textbook.php?fhss3=0-8"						
		document.test.tbook.options[6].text="Prithavi Hamara Avas (Bhugol)";
		document.test.tbook.options[6].value="textbook.php?fhss2=0-6"
		document.test.tbook.options[7].text="Hamare Mazi(Urdu)";
		document.test.tbook.options[7].value="textbook.php?fuhm1=0-11"
		document.test.tbook.options[8].text="Zameen Hamara Maskan(Urdu)";
		document.test.tbook.options[8].value="textbook.php?fuzm1=0-8"
		document.test.tbook.options[9].text="Samazi Aur Siyasi Zindagi(Urdu)";
		document.test.tbook.options[9].value="textbook.php?fuss1=0-9"				
	}
else if((document.test.tclass.value==6) && (document.test.tsubject.options[sind].text=="Sanskrit"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Ruchira";
		document.test.tbook.options[1].value="textbook.php?fhsk1=0-13"
					
	}
	
	else if((document.test.tclass.value==6) && (document.test.tsubject.options[sind].text=="Science"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Vigyan";
		document.test.tbook.options[1].value="textbook.php?fhsc1=0-11"		
		document.test.tbook.options[2].text="Science";
		document.test.tbook.options[2].value="textbook.php?fesc1=0-11"
		document.test.tbook.options[3].text="science-VI(Urdu)";
		document.test.tbook.options[3].value="textbook.php?fuse1=0-16"
		//document.test.tbook.options[4].text="Exemplar Problem";
		//document.test.tbook.options[4].value="textbook.php?feep2=0-16"
			
					
	}
	else if((document.test.tclass.value==6) && (document.test.tsubject.options[sind].text=="Urdu"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Apni Zuban-VI";
		document.test.tbook.options[1].value="textbook.php?fuaz1=0-20"	
		document.test.tbook.options[2].text="Urdu Guldasta";
		document.test.tbook.options[2].value="textbook.php?fuug1=0-11"
		document.test.tbook.options[3].text="Jaan Pahechan ";
		document.test.tbook.options[3].value="textbook.php?fujp1=0-32"	
		//document.test.tbook.options[2].text="Riyazi-VI";
		//document.test.tbook.options[2].value="textbook.php?furi1=0-14"
		//document.test.tbook.options[3].text="science-VI";
		//document.test.tbook.options[3].value="textbook.php?fuse1=0-16"
		//document.test.tbook.options[4].text="Hamare Mazi";
		//document.test.tbook.options[4].value="textbook.php?fuhm1=0-12"
		//document.test.tbook.options[5].text="Zameen Hamara Maskan";
		//document.test.tbook.options[5].value="textbook.php?fuzm1=0-8"
		//document.test.tbook.options[6].text="Samazi Aur Siyasi Zindagi";
		//document.test.tbook.options[6].value="textbook.php?fuss1=0-8"-->
		
					
	}


	else if((document.test.tclass.value==7) && (document.test.tsubject.options[sind].text=="Mathematics"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Ganit";
		document.test.tbook.options[1].value="textbook.php?ghmh1=0-13"
		document.test.tbook.options[2].text="Mathmatics";
		document.test.tbook.options[2].value="textbook.php?gemh1=0-13"
		document.test.tbook.options[3].text="Hisaab(Urdu)";
		document.test.tbook.options[3].value="textbook.php?guma1=0-15"
		//document.test.tbook.options[4].text="Exemplar Problem(English)";
		//document.test.tbook.options[4].value="textbook.php?gemp1=0-13"

		
					
	}
	else if((document.test.tclass.value==7) && (document.test.tsubject.options[sind].text=="Science"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Science";
		document.test.tbook.options[1].value="textbook.php?gesc1=0-13"
		document.test.tbook.options[2].text="Vigyan";
		document.test.tbook.options[2].value="textbook.php?ghsc1=0-13"
		document.test.tbook.options[3].text="Science(Urdu)";
		document.test.tbook.options[3].value="textbook.php?guse1=0-18"
		//document.test.tbook.options[4].text="Exemplar Problems";
		//document.test.tbook.options[4].value="textbook.php?geep1=0-18"
		
						
	}
	else if((document.test.tclass.value==7) && (document.test.tsubject.options[sind].text=="English"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Honeycomb";
		document.test.tbook.options[1].value="textbook.php?gehc1=0-8"
		document.test.tbook.options[2].text="An alien Hand Supplementry Reader";
		document.test.tbook.options[2].value="textbook.php?geah1=0-7"
		//document.test.tbook.options[3].text="";
		//document.test.tbook.options[3].value=""
							
	}
	else if((document.test.tclass.value==7) && (document.test.tsubject.options[sind].text=="Sanskrit"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Ruchira";
		document.test.tbook.options[1].value="textbook.php?ghsk1=0-13"
		//document.test.tbook.options[2].text="";
		//document.test.tbook.options[2].value=""
						
	}
	
	else if((document.test.tclass.value==7) && (document.test.tsubject.options[sind].text=="Social Science"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Social and Political Life";
		document.test.tbook.options[1].value="textbook.php?gess3=0-8"
		document.test.tbook.options[2].text="Samajik aur Rajniti Jeevan";
		document.test.tbook.options[2].value="textbook.php?ghss3=0-8"
		document.test.tbook.options[3].text="Samajik Aur Siyasi Zindagi";
		document.test.tbook.options[3].value="textbook.php?guss3=0-9"
		document.test.tbook.options[4].text="Our Pasts-II";
		document.test.tbook.options[4].value="textbook.php?gess1=0-8"
		document.test.tbook.options[5].text="Hamare Ateet-II";
		document.test.tbook.options[5].value="textbook.php?ghss1=0-8"		
		document.test.tbook.options[6].text="Our Environment";
		document.test.tbook.options[6].value="textbook.php?gess2=0-7"		
		document.test.tbook.options[7].text="Hamara Paryavaran";
		document.test.tbook.options[7].value="textbook.php?ghss2=0-7"
		document.test.tbook.options[8].text="Hamare Maazi(Urdu)";
		document.test.tbook.options[8].value="textbook.php?guhm1=0-10"
		document.test.tbook.options[9].text="Hamare Mahol(Urdu))";
		document.test.tbook.options[9].value="textbook.php?guha1=0-9"					
		
	}
	
	else if((document.test.tclass.value==7) && (document.test.tsubject.options[sind].text=="Hindi"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Vasant";
		document.test.tbook.options[1].value="textbook.php?ghvs1=0-15"
		document.test.tbook.options[2].text="Durva";
		document.test.tbook.options[2].value="textbook.php?ghdv1=0-18"
		document.test.tbook.options[3].text="Mahabharat";
		document.test.tbook.options[3].value="textbook.php?ghmb1=0-1"
							
	}
	else if((document.test.tclass.value==7) && (document.test.tsubject.options[sind].text=="Urdu"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Apni Zaban";
		document.test.tbook.options[1].value="textbook.php?guaz1=0-21"
		document.test.tbook.options[2].text="Urdu Guldasta-Suppl";
		document.test.tbook.options[2].value="textbook.php?gugu1=0-15"
		document.test.tbook.options[3].text="Door - Pass";
		document.test.tbook.options[3].value="textbook.php?gudp1=0-26"
		document.test.tbook.options[4].text="Jaan Pahechan";
		document.test.tbook.options[4].value="textbook.php?gujp1=0-20"

		
							
	}


	else if((document.test.tclass.value==8) && (document.test.tsubject.options[sind].text=="English"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Honeydew";
		document.test.tbook.options[1].value="textbook.php?hehd1=0-8"	
		document.test.tbook.options[2].text="It So Happend";
		document.test.tbook.options[2].value="textbook.php?heih1=0-8"	
		//document.test.tbook.options[3].text="";
		//document.test.tbook.options[3].value=""
						
	}
	else if((document.test.tclass.value==8) && (document.test.tsubject.options[sind].text=="Mathematics"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Mathematics";
		document.test.tbook.options[1].value="textbook.php?hemh1=0-13"		
		document.test.tbook.options[2].text="Ganit";
		document.test.tbook.options[2].value="textbook.php?hhmh1=0-13"	
		document.test.tbook.options[3].text="Riyazi(Urdu)";
		document.test.tbook.options[3].value="textbook.php?huhi1=0-16"	
		//document.test.tbook.options[4].text="Exemplar Problem(English)";
		//document.test.tbook.options[4].value="textbook.php?heep2=0-13"
		//document.test.tbook.options[5].text="Exemplar Problem(Hindi)";
		//document.test.tbook.options[5].value="textbook.php?hhep2=0-13"
		//document.test.tbook.options[3].text="Hisab(Urdu)";
		//document.test.tbook.options[3].value="/book_publishing/Class 8/Urdu book/MATH-VIII/Maths VII.htm"
					
	}

	else if((document.test.tclass.value==8) && (document.test.tsubject.options[sind].text=="Sanskrit"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Ruchira";
		document.test.tbook.options[1].value="textbook.php?hhsk1=0-14"
		//document.test.tbook.options[2].text="";
		//document.test.tbook.options[2].value=""
						
	}
	else if((document.test.tclass.value==8) && (document.test.tsubject.options[sind].text=="Hindi"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Vasant";
		document.test.tbook.options[1].value="textbook.php?hhvs1=0-13"		
		document.test.tbook.options[2].text="Durva";
		document.test.tbook.options[2].value="textbook.php?hhdv1=0-19"		
		document.test.tbook.options[3].text="Bharat Ki Khoj";
		document.test.tbook.options[3].value="textbook.php?hhbk1=0-9"
		document.test.tbook.options[4].text="Sanshipt Budhcharit";
		document.test.tbook.options[4].value="textbook.php?hhsb1=0-5"
				
	}


else if((document.test.tclass.value==8) && (document.test.tsubject.options[sind].text=="Science"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Science";
		document.test.tbook.options[1].value="textbook.php?hesc1=0-13"		
		document.test.tbook.options[2].text="Vigyan";
		document.test.tbook.options[2].value="textbook.php?hhsc1=0-13"
		document.test.tbook.options[3].text="Science(Urdu)";
		document.test.tbook.options[3].value="textbook.php?huse1=0-18"		
		//document.test.tbook.options[4].text="Exemplar Problems";
		//document.test.tbook.options[4].value="textbook.php?heep1=0-18"
		//document.test.tbook.options[3].text="Science Aur Technology (Urdu)";
		//document.test.tbook.options[3].value="/book_publishing/Class 8/Urdu book/science & technology-VIII/science & technology.htm"
						
	}

else if((document.test.tclass.value==8) && (document.test.tsubject.options[sind].text=="Social Science"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Resource And Development(Geography)";
		document.test.tbook.options[1].value="textbook.php?hess4=0-5"		
		document.test.tbook.options[2].text="Sansadhan Avam Vikas(Bhugol)";
		document.test.tbook.options[2].value="textbook.php?hhss4=0-5"		
		document.test.tbook.options[3].text="Social And Political Life";
		document.test.tbook.options[3].value="textbook.php?hess3=0-8"
		document.test.tbook.options[4].text="Samajik Avam Rajnatik Jeevan";
		document.test.tbook.options[4].value="textbook.php?hhss3=0-8"
		document.test.tbook.options[5].text="Our-Pasts-III  ";
		document.test.tbook.options[5].value="textbook.php?hess2=0-8"
		document.test.tbook.options[6].text="Hamare Atit-III (Itihas) ";
		document.test.tbook.options[6].value="textbook.php?hhss1=0-8"
		//document.test.tbook.options[7].text="Our-Pasts-III (Part-II) ";
		//document.test.tbook.options[7].value="textbook.php?hess2=0-6"
		//document.test.tbook.options[8].text="Hamare Atit-III (Bhag-II) ";
		//document.test.tbook.options[8].value="textbook.php?hhss2=0-6"
		document.test.tbook.options[7].text="Wasayel aur Taraqqui(Urdu)";
		document.test.tbook.options[7].value="textbook.php?hugy1=0-6"
		document.test.tbook.options[8].text="Samaji Aur Siyasi Zindagi(Urdu)";
		document.test.tbook.options[8].value="textbook.php?huss1=0-10"
		document.test.tbook.options[9].text="Hamare Maazi (Urdu)";
		document.test.tbook.options[9].value="textbook.php?huhm1=0-10"
		//document.test.tbook.options[10].text="Hamare Maazi Part-II(Urdu)";
		//document.test.tbook.options[10].value="textbook.php?huhm2=0-6"
       

					
	}

else if((document.test.tclass.value==8) && (document.test.tsubject.options[sind].text=="Environmental Education"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Project Books";
		document.test.tbook.options[1].value="/book_publishing/envedu/8/8.htm"		
		document.test.tbook.options[2].text="";
		document.test.tbook.options[2].value=""
				
	}
	else if((document.test.tclass.value==8) && (document.test.tsubject.options[sind].text=="Urdu"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Apni Zaban";
		document.test.tbook.options[1].value="textbook.php?huaz1=0-22"
		document.test.tbook.options[2].text="Urdu Guldasta (Supl)";
		document.test.tbook.options[2].value="textbook.php?huug1=0-9"
		document.test.tbook.options[3].text="Door-Pass";
		document.test.tbook.options[3].value="textbook.php?hudp1=0-20"
		document.test.tbook.options[4].text="Jaan Pahechan";
		document.test.tbook.options[4].value="textbook.php?hujp1=0-20"	
		
				
	}
	else if((document.test.tclass.value==9) && (document.test.tsubject.options[sind].text=="English"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Beehive";
		document.test.tbook.options[1].value="textbook.php?iebe1=0-9"			
		document.test.tbook.options[2].text="Moments Supplementary Reader";
		document.test.tbook.options[2].value="textbook.php?iemo1=0-9"	
document.test.tbook.options[3].text="Words and Expressions  1";
		document.test.tbook.options[3].value="textbook.php?iewe1=0-9"		
		
					
	}
	else if((document.test.tclass.value==9) && (document.test.tsubject.options[sind].text=="Hindi"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Kshitij";
		document.test.tbook.options[1].value="textbook.php?ihks1=0-13"		
		document.test.tbook.options[2].text="Sprash";
		document.test.tbook.options[2].value="textbook.php?ihsp1=0-10"		
		document.test.tbook.options[3].text="Kritika";
		document.test.tbook.options[3].value="textbook.php?ihkr1=0-3"	
		document.test.tbook.options[4].text="Sanchayan";
		document.test.tbook.options[4].value="textbook.php?ihsa1=0-4"	
		//document.test.tbook.options[5].text="";
		//document.test.tbook.options[5].value=""
					
	}
	else if((document.test.tclass.value==9) && (document.test.tsubject.options[sind].text=="Sanskrit"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Shemushi Prathmo Bhag";
		document.test.tbook.options[1].value="textbook.php?ihsh1=0-10"
		document.test.tbook.options[2].text="Vyakaranavithi";
		document.test.tbook.options[2].value="textbook.php?jhva1=0-14"	
		document.test.tbook.options[3].text="Abhyaswaan Bhav";
		document.test.tbook.options[3].value="textbook.php?isab1=0-12"			
				
	}
	else if((document.test.tclass.value==9) && (document.test.tsubject.options[sind].text=="Mathematics"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Mathematics";
		document.test.tbook.options[1].value="textbook.php?iemh1=0-12"		
		document.test.tbook.options[2].text="Ganit";
		document.test.tbook.options[2].value="textbook.php?ihmh1=0-12"	
		document.test.tbook.options[3].text="Reyazi (Urdu)";
		document.test.tbook.options[3].value="textbook.php?iumh1=0-15"
		//document.test.tbook.options[4].text="Exemplar Problem(English)";
		//document.test.tbook.options[4].value="textbook.php?ieep2=0-16"
		//document.test.tbook.options[5].text="Exemplar Problem(Hindi)";
		//document.test.tbook.options[5].value="textbook.php?ihep2=0-16"
		//document.test.tbook.options[6].text="";
		//document.test.tbook.options[6].value=""
				
	}
	else if((document.test.tclass.value==9) && (document.test.tsubject.options[sind].text=="Science"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Science";
		document.test.tbook.options[1].value="textbook.php?iesc1=0-12"	
		document.test.tbook.options[2].text="Vigyan";
		document.test.tbook.options[2].value="textbook.php?ihsc1=0-12"	
		document.test.tbook.options[3].text="Science (Urdu)";
		document.test.tbook.options[3].value="textbook.php?iusc1=0-15"
		//document.test.tbook.options[4].text="Exemplar Problem(English)";
		//document.test.tbook.options[4].value="textbook.php?ieep1=0-17"
		//document.test.tbook.options[5].text="Exemplar Problem(Hindi)";
		//document.test.tbook.options[5].value="textbook.php?ihep1=0-17"
		//document.test.tbook.options[6].text="Lab Manual(English))";
		//document.test.tbook.options[6].value="textbook.php?ielm1=0-5"
		//document.test.tbook.options[7].text="Lab Manual(Hindi)";
		//document.test.tbook.options[7].value="textbook.php?ihlm1=0-5"
					
	}
	
	else if((document.test.tclass.value==9) && (document.test.tsubject.options[sind].text=="Urdu"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Gulzare-e-urdu";
		document.test.tbook.options[1].value="textbook.php?iugu1=0-19"
		document.test.tbook.options[2].text="Nawa-e-urdu";
		document.test.tbook.options[2].value="textbook.php?iuna1=0-23"	
		document.test.tbook.options[3].text="Jaan Pahechan";
		document.test.tbook.options[3].value="textbook.php?iujp1=0-22"
		document.test.tbook.options[4].text="Door Pass";
		document.test.tbook.options[4].value="textbook.php?iudp1=0-20"
		document.test.tbook.options[5].text="Sab Rang";
		document.test.tbook.options[5].value="textbook.php?iusr1=0-10"
		document.test.tbook.options[6].text="Urdu ki Adabi Asnaf";
		document.test.tbook.options[6].value="textbook.php?iuau1=0-40"
	} 
	
	
	else if((document.test.tclass.value==9) && (document.test.tsubject.options[sind].text=="Social Science"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Democratic Politics";
		document.test.tbook.options[1].value="textbook.php?iess4=0-5"
		document.test.tbook.options[2].text="Loktantrik Rajniti";
		document.test.tbook.options[2].value="textbook.php?ihss4=0-5"	
		document.test.tbook.options[3].text="Contemporary India";
		document.test.tbook.options[3].value="textbook.php?iess1=0-6"
		document.test.tbook.options[4].text="Samkalin Bharat";
		document.test.tbook.options[4].value="textbook.php?ihss1=0-6"
		document.test.tbook.options[5].text="Arthashastra";
		document.test.tbook.options[5].value="textbook.php?ihss2=0-4"
		document.test.tbook.options[6].text="Economics";
		document.test.tbook.options[6].value="textbook.php?iess2=0-4"			
		document.test.tbook.options[7].text="India and the Contemporary World-I";
		document.test.tbook.options[7].value="textbook.php?iess3=0-5"	
		document.test.tbook.options[8].text="Bharat Aur Samkalin Vishwa-I";
		document.test.tbook.options[8].value="textbook.php?ihss3=0-5"
		//document.test.tbook.options[9].text="Geographia(Urdu)";
		//document.test.tbook.options[9].value="textbook.php?iuge1=0-6"
		document.test.tbook.options[9].text="Jamhuri Syasat(Urdu)";
		document.test.tbook.options[9].value="textbook.php?iuss4=0-6"
		document.test.tbook.options[10].text="Hindustan Aur Asri Dunia-I(Urdu)";
		document.test.tbook.options[10].value="textbook.php?iuhi1=0-5"		
		document.test.tbook.options[11].text="Aasri Hindustan (Urdu)";
		document.test.tbook.options[11].value="textbook.php?iuss1=0-6"
		document.test.tbook.options[12].text="Mashiyat (Urdu)";
		document.test.tbook.options[12].value="textbook.php?iuss2=0-4"
		
		
	}
else if((document.test.tclass.value==9) && (document.test.tsubject.options[sind].text=="Environmental Education"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Project Books";
		document.test.tbook.options[1].value="textbook.php?iepb1=pp-0"
		document.test.tbook.options[2].text="";
		document.test.tbook.options[2].value=""
				
	}
	else if((document.test.tclass.value==9) && (document.test.tsubject.options[sind].text=="Health and Physical Education"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Health and Physical Education";
		document.test.tbook.options[1].value="textbook.php?iehp1=0-14"
		document.test.tbook.options[2].text="";
		document.test.tbook.options[2].value=""
				
	}
	
	else if((document.test.tclass.value==9) && (document.test.tsubject.options[sind].text=="Vocational"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Cashier";
	    document.test.tbook.options[1].value="textbook.php?ievc1=0-5"
		
		document.test.tbook.options[2].text="Store Operations Assistant";
		document.test.tbook.options[2].value="textbook.php?ieva1=0-4"
		
		document.test.tbook.options[3].text="Solanceous Crop Cultivator";
		document.test.tbook.options[3].value="textbook.php?ievs1=0-5"
		
		document.test.tbook.options[4].text="Assistant Beauty Therapist";
		document.test.tbook.options[4].value="textbook.php?ievt1=0-3"
		
		document.test.tbook.options[5].text="Animal Health Workers (Agriculture)";
		document.test.tbook.options[5].value="textbook.php?ievw1=0-4"
		
		document.test.tbook.options[6].text="Hand Embroiderer (Addawala)";
		document.test.tbook.options[6].value="textbook.php?ieve1=0-5"
		
		document.test.tbook.options[7].text="Hand Embroiderer";
		document.test.tbook.options[7].value="textbook.php?ievh1=0-5"
		
		document.test.tbook.options[8].text="Plumber General";
		document.test.tbook.options[8].value="textbook.php?iepg1=0-5"
		
		document.test.tbook.options[9].text="IT Domestic Data Entry Operator";
		document.test.tbook.options[9].value="textbook.php?ieeo1=0-5"
		
		document.test.tbook.options[10].text="Employability Skill";
		document.test.tbook.options[10].value="textbook.php?iees1=0-5"
				
	}
	else if((document.test.tclass.value==9) && (document.test.tsubject.options[sind].text=="ICT"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Information and Communication Technology";
		document.test.tbook.options[1].value="textbook.php?iict1=0-8"
		
				
	}
	
	else if((document.test.tclass.value==10) && (document.test.tsubject.options[sind].text=="Mathematics"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Mathematics";
		document.test.tbook.options[1].value="textbook.php?jemh1=0-14"	
		document.test.tbook.options[2].text="Ganit";
		document.test.tbook.options[2].value="textbook.php?jhmh1=0-14"
		document.test.tbook.options[3].text="Riyazi";
		document.test.tbook.options[3].value="textbook.php?jumh1=0-15"	
		//document.test.tbook.options[4].text="Exemplars Problem(English)";
		//document.test.tbook.options[4].value="textbook.php?jeep2=0-14"
		//document.test.tbook.options[5].text="Exemplars Problem(Hindi)";
		//document.test.tbook.options[5].value="textbook.php?jhep2=0-14"
		
		
		
					
	}
	else if((document.test.tclass.value==10) && (document.test.tsubject.options[sind].text=="Science"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Science";
		document.test.tbook.options[1].value="textbook.php?jesc1=0-13"
		document.test.tbook.options[2].text="Vigyan";
		document.test.tbook.options[2].value="textbook.php?jhsc1=0-13"
		document.test.tbook.options[3].text="Science(Urdu)";
		document.test.tbook.options[3].value="textbook.php?jusc1=0-16"
		//document.test.tbook.options[4].text="Exemplar Problem(English)";
		//document.test.tbook.options[4].value="textbook.php?jeep1=0-18"
		//document.test.tbook.options[5].text="Exemplar Problem(Hindi)";
		//document.test.tbook.options[5].value="textbook.php?jhep1=0-18"
		//document.test.tbook.options[6].text="Lab Manual(English)";
		//document.test.tbook.options[6].value="textbook.php?jelm1=0-6"
		//document.test.tbook.options[7].text="Lab Manual(Hindi)";
		//document.test.tbook.options[7].value="textbook.php?jhlm1=0-6"
				
	}
	else if((document.test.tclass.value==10) && (document.test.tsubject.options[sind].text=="Hindi"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Kshitij-2";
		document.test.tbook.options[1].value="textbook.php?jhks1=0-12"
		document.test.tbook.options[2].text="Sparsh";
		document.test.tbook.options[2].value="textbook.php?jhsp1=0-14"
		document.test.tbook.options[3].text="Sanchayan Bhag-2";
		document.test.tbook.options[3].value="textbook.php?jhsy1=0-3"
		document.test.tbook.options[4].text="Kritika";
		document.test.tbook.options[4].value="textbook.php?jhkr1=0-3"
		//document.test.tbook.options[5].text="";
		//document.test.tbook.options[5].value=""
	}
	else if((document.test.tclass.value==10) && (document.test.tsubject.options[sind].text=="English"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="First Flight";
		document.test.tbook.options[1].value="textbook.php?jeff1=0-9"
		document.test.tbook.options[2].text="Foot Prints Without feet Supp. Reader";
		document.test.tbook.options[2].value="textbook.php?jefp1=0-9"
		document.test.tbook.options[3].text="Words and Expressions  2";
		document.test.tbook.options[3].value="textbook.php?jewe2=0-9"	
		//document.test.tbook.options[3].text="";
		//document.test.tbook.options[3].value=""
					
	}
	else if((document.test.tclass.value==10) && (document.test.tsubject.options[sind].text=="Social Science"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Contemporary India ";
		document.test.tbook.options[1].value="textbook.php?jess1=0-7"
		document.test.tbook.options[2].text="Samkalin Bharat";
		document.test.tbook.options[2].value="textbook.php?jhss1=0-7"
		document.test.tbook.options[3].text="Aasri Hindustan-II";
		document.test.tbook.options[3].value="textbook.php?juss1=0-7"
		document.test.tbook.options[4].text="Understanding Economic Development";
		document.test.tbook.options[4].value="textbook.php?jess2=0-5"
		document.test.tbook.options[5].text="Arthik Vikas ki Samajh";
		document.test.tbook.options[5].value="textbook.php?jhss2=0-5"
		document.test.tbook.options[6].text="Maashi Taraqqui Ki Samajh";
		document.test.tbook.options[6].value="textbook.php?juss2=0-5"
		document.test.tbook.options[7].text="India and the Contemporary World-II ";
		document.test.tbook.options[7].value="textbook.php?jess3=0-5"
		document.test.tbook.options[8].text="Bharat Aur Samakalin Vishav-2";
		document.test.tbook.options[8].value="textbook.php?jhss3=0-5"
		document.test.tbook.options[9].text="Hindustan Aur Asri Duniya";
		document.test.tbook.options[9].value="textbook.php?juss3=0-5"
		document.test.tbook.options[10].text="Democratic Politics";
		document.test.tbook.options[10].value="textbook.php?jess4=0-5"		
		document.test.tbook.options[11].text="Loktantrik Rajniti";
		document.test.tbook.options[11].value="textbook.php?jhss4=0-5"
		document.test.tbook.options[12].text="Jamhuri Siyasat-II ";
		document.test.tbook.options[12].value="textbook.php?juss4=0-8"
		
	
	
	}
		
	else if((document.test.tclass.value==10) && (document.test.tsubject.options[sind].text=="Sanskrit"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Shemushi";
		document.test.tbook.options[1].value="textbook.php?jhsk1=0-10"	
		document.test.tbook.options[2].text="Vyakaranavithi";
		document.test.tbook.options[2].value="textbook.php?jhva1=0-14"
		document.test.tbook.options[3].text="Abhyaswaan Bhav-II";
		document.test.tbook.options[3].value="textbook.php?jsab1=0-14"	
			
						
	}
	
	else if((document.test.tclass.value==10) && (document.test.tsubject.options[sind].text=="Urdu"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Gulzar-e-Urdu";
		document.test.tbook.options[1].value="textbook.php?juge1=0-12"
		document.test.tbook.options[2].text="Nawa-e-Urdu";
		document.test.tbook.options[2].value="textbook.php?june1=0-23"
		document.test.tbook.options[3].text="Jaan Pahechan";
		document.test.tbook.options[3].value="textbook.php?jujp1=0-22"
		document.test.tbook.options[4].text="Door-Paas";
		document.test.tbook.options[4].value="textbook.php?judp1=0-19"
		document.test.tbook.options[5].text="Sab Rang";
		document.test.tbook.options[5].value="textbook.php?jusr1=0-9"

				
	}
else if((document.test.tclass.value==10) && (document.test.tsubject.options[sind].text=="Environmental Education"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Project Books";
		document.test.tbook.options[1].value=""	
		document.test.tbook.options[2].text="";
		document.test.tbook.options[2].value=""
				
	}
	else if((document.test.tclass.value==10) && (document.test.tsubject.options[sind].text=="Health and Physical Education"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Health and Physical Education";
		document.test.tbook.options[1].value="textbook.php?jehp1=0-13"		
							
	}
	
	else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="Sanskrit"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Bhaswati";
		document.test.tbook.options[1].value="textbook.php?khsk1=0-11"
		document.test.tbook.options[2].text="Shashwati";
		document.test.tbook.options[2].value="textbook.php?khsk2=0-11"
	
		
	}
	else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="Accountancy"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Financial Accounting-I";
		document.test.tbook.options[1].value="textbook.php?keac1=0-7"
		document.test.tbook.options[2].text="Lekhashastra-I";
		document.test.tbook.options[2].value="textbook.php?khac1=0-7"
		document.test.tbook.options[3].text="Accountancy-II";
		document.test.tbook.options[3].value="textbook.php?keac2=0-2"
		document.test.tbook.options[4].text="Lekhashastra-II";
		document.test.tbook.options[4].value="textbook.php?khac2=0-2"
		document.test.tbook.options[5].text="Khatadari-I(Urdu)";
		document.test.tbook.options[5].value="textbook.php?kuac1=0-8"
		document.test.tbook.options[6].text="Khatadari-II(Urdu)";
		document.test.tbook.options[6].value="textbook.php?kuac2=0-5"
		
		
	}
	
	else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="Business Studies"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Business Studies";
		document.test.tbook.options[1].value="textbook.php?kebs1=0-11"
		document.test.tbook.options[2].text="Vyavsay Adhyanan";
		document.test.tbook.options[2].value="textbook.php?khbs1=0-11"
		document.test.tbook.options[3].text="Karobari Mutalah I";
		document.test.tbook.options[3].value="textbook.php?kubs1=0-11"
		
	}
	else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="Chemistry"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Chemistry Part-I";
		document.test.tbook.options[1].value="textbook.php?kech1=0-6"
		document.test.tbook.options[2].text="Rasayan Vigyan bhag-I";
		document.test.tbook.options[2].value="textbook.php?khch1=0-6"
		document.test.tbook.options[3].text="Keemiya I";
		document.test.tbook.options[3].value="textbook.php?kuch1=0-7"
		document.test.tbook.options[4].text="Chemistry Part II";
		document.test.tbook.options[4].value="textbook.php?kech2=0-3"			
		document.test.tbook.options[5].text="Rasayan Vigyan bhag-II";
		document.test.tbook.options[5].value="textbook.php?khch2=0-3"
		document.test.tbook.options[6].text="Keemiya II";
		document.test.tbook.options[6].value="textbook.php?kuch2=0-7"
		//document.test.tbook.options[7].text="Online Chemistry book Part I";
		//document.test.tbook.options[7].value="http://www.ncert.nic.in/online_sub_books/chemistry/chem_I_ps.html"
		//document.test.tbook.options[8].text="Exemplar Problems(English)";
		//document.test.tbook.options[8].value="textbook.php?keep5=0-15"
		//document.test.tbook.options[9].text="Exemplar Problems(Hindi)";
		//document.test.tbook.options[9].value="textbook.php?khep5=0-15"
		//document.test.tbook.options[10].text="Lab Manual(English)";
		//document.test.tbook.options[10].value="textbook.php?kelm2=0-8"
		//document.test.tbook.options[11].text="Lab Manual(Hindi)";
		//document.test.tbook.options[11].value="textbook.php?khlm2=0-8"
		

		
	}
	else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="Mathematics"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Mathematics";
		document.test.tbook.options[1].value="textbook.php?kemh1=0-14"
		document.test.tbook.options[2].text="Ganit";
		document.test.tbook.options[2].value="textbook.php?khmh1=0-14"
		document.test.tbook.options[3].text="Riyazi I";
		document.test.tbook.options[3].value="textbook.php?kumh1=0-16"
		//document.test.tbook.options[4].text="Exemplar Problems(English)";
		//document.test.tbook.options[4].value="textbook.php?keep2=0-18"
		//document.test.tbook.options[5].text="Exemplar Problems(Hindi)";
		//document.test.tbook.options[5].value="textbook.php?khep2=0-18"
						
	}
	else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="Vocational"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Floriculturist- Protected Cultivation";
		document.test.tbook.options[1].value="textbook.php?kepc1=0-5"
		document.test.tbook.options[2].text="Vision Technician";
		document.test.tbook.options[2].value="textbook.php?kevt1=0-7"
		document.test.tbook.options[3].text="Floriculturist";
		document.test.tbook.options[3].value="textbook.php?keoc1=0-6"
		document.test.tbook.options[4].text="General Duty Assistant";
		document.test.tbook.options[4].value="textbook.php?keda1=0-5"
		document.test.tbook.options[5].text="Dairy Farmer Enterpreneur";
		document.test.tbook.options[5].value="textbook.php?kedf1=0-4"
		document.test.tbook.options[6].text="Floriculturist";
		document.test.tbook.options[6].value="textbook.php?kefc1=0-6"
						
	}
	
	else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="Statistics"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		
		//document.test.tbook.options[3].text="Shumariat bara-e-mushaiat";
		//document.test.tbook.options[3].value="/book_publishing/CLASS 11/Urdu Books/Statics for Economics-XI(Shumariat bara-e-mushaiat)/Statics.htm"				
		
		
	}
	else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="Biology"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Biology";
		document.test.tbook.options[1].value="textbook.php?kebo1=0-19"
		document.test.tbook.options[2].text="Jeev Vigyan";
		document.test.tbook.options[2].value="textbook.php?khbo1=0-19"
		document.test.tbook.options[3].text="Hayatiyaat";
		document.test.tbook.options[3].value="textbook.php?kubo1=0-22"
		//document.test.tbook.options[4].text="Hayatiyaat II";
		//document.test.tbook.options[4].value="textbook.php?kubo2=0-12"
		//document.test.tbook.options[5].text="Human Ecology and Family Sciences Part I ";
		//document.test.tbook.options[5].value="textbook.php?kehe1=0-2"
		//document.test.tbook.options[6].text="Human Ecology and Family Sciences Part II ";
		//document.test.tbook.options[6].value="textbook.php?kehe2=0-2"
		
		//document.test.tbook.options[5].text="Exemplar Problems(English)";
		////document.test.tbook.options[5].value="textbook.php?keep4=0-25"
		//document.test.tbook.options[6].text="Exemplar Problems(Hindi)";
		//document.test.tbook.options[6].value="textbook.php?khep4=0-25"
		//document.test.tbook.options[7].text="Lab Manual(English)";
		//document.test.tbook.options[7].value="textbook.php?kelm3=0-17"
		
				
	}
	else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="Home Science"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		
		document.test.tbook.options[1].text="Human Ecology and Family Sciences Part I ";
		document.test.tbook.options[1].value="textbook.php?kehe1=0-7"
		document.test.tbook.options[2].text="Human Ecology and Family Sciences Part II ";
		document.test.tbook.options[2].value="textbook.php?kehe2=0-4"
		
		document.test.tbook.options[3].text="Manav Paristhitiki evm pariwar vigyan Bhag-I ";
		document.test.tbook.options[3].value="textbook.php?khhe1=0-7"
		
		document.test.tbook.options[4].text="Manav Paristhitiki evm pariwar vigyan Bhag-II ";
		document.test.tbook.options[4].value="textbook.php?khhe2=0-5"
		document.test.tbook.options[5].text="Insani Mahauliyat aur Uloom e Khandandari-I ";
		document.test.tbook.options[5].value="textbook.php?kuim1=0-10"
		document.test.tbook.options[6].text="Insani Mahauliyat aur Uloom e Khandandari Part-II ";
		document.test.tbook.options[6].value="textbook.php?kuim2=0-9"
		
				
	}
	
	else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="Psychology"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Introduction to Psychology";
		document.test.tbook.options[1].value="textbook.php?kepy1=0-8"
		document.test.tbook.options[2].text="Manovigyan";
		document.test.tbook.options[2].value="textbook.php?khpy1=0-8"			
		document.test.tbook.options[3].text="Nafsiyaat ";
		document.test.tbook.options[3].value="textbook.php?kupy1=0-9"
		
	}
	
	else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="Economics"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Indian Economic Development";
		document.test.tbook.options[1].value="textbook.php?keec1=0-8"
		document.test.tbook.options[2].text="Statistics for Economics";
		document.test.tbook.options[2].value="textbook.php?kest1=0-8"
		document.test.tbook.options[3].text="Sankhyiki";
		document.test.tbook.options[3].value="textbook.php?khst1=0-8"
		document.test.tbook.options[4].text="Bhartiya Airthryavstha Ka Vikas ";
		document.test.tbook.options[4].value="textbook.php?khec1=0-8"
		document.test.tbook.options[5].text="Hindustan Ki Moaashi Tarraqqi(Urdu)";
		document.test.tbook.options[5].value="textbook.php?kuec1=0-10"
		document.test.tbook.options[6].text="Shumariyaat Bar-e-Mushiyat(Urdu)";
		document.test.tbook.options[6].value="textbook.php?kusc1=0-9"
		
		
	}

	
	else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="Geography"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Fundamental of Physical Geography";
		document.test.tbook.options[1].value="textbook.php?kegy2=0-14"
		document.test.tbook.options[2].text="Bhautique Bhugol ke Mool Sidhant";
		document.test.tbook.options[2].value="textbook.php?khgy2=0-14"
		//document.test.tbook.options[3].text="Tabai Gugraphiya ke Mubadiyat";
		//document.test.tbook.options[3].value="textbook.php?kugy2=0-16"
		document.test.tbook.options[3].text="Hindustan Tabi'i Mahaul (Urdu)";
		document.test.tbook.options[3].value="textbook.php?kugy1=0-7"		
		//document.test.tbook.options[4].text="Geographia mein amli kaam (Urdu)";
	 // document.test.tbook.options[4].value="textbook.php?kugy1=0-8"
		document.test.tbook.options[4].text="Pratical Work in Geography";
		document.test.tbook.options[4].value="textbook.php?kegy3=0-6"
		document.test.tbook.options[5].text="Bhugol Main Prayogatmak Karya";
		document.test.tbook.options[5].value="textbook.php?khgy3=0-6"
		document.test.tbook.options[6].text="India Physical Environment";
		document.test.tbook.options[6].value="textbook.php?kegy1=0-6"
		document.test.tbook.options[7].text="Bhart Bhautik Paryabaran";
		document.test.tbook.options[7].value="textbook.php?khgy1=0-6"
		document.test.tbook.options[8].text="Jughrafia Mein Aamli Kam (Urdu)";
		document.test.tbook.options[8].value="textbook.php?kugy3=0-8"
		document.test.tbook.options[9].text="Tabi'i Jughraiya Ka Mubadiyat (Urdu)";
		document.test.tbook.options[9].value="textbook.php?kugm1=0-16"
		
		
	}
	else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="Physics"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Physics Part-I";
		document.test.tbook.options[1].value="textbook.php?keph1=0-7"
		document.test.tbook.options[2].text="Bhautiki-I";
		document.test.tbook.options[2].value="textbook.php?khph1=0-7"
		document.test.tbook.options[3].text="Tabiyaat-I";
		document.test.tbook.options[3].value="textbook.php?kuph1=0-8"
		document.test.tbook.options[4].text="Physics Part-II";
		document.test.tbook.options[4].value="textbook.php?keph2=0-7"
		document.test.tbook.options[5].text="Bhautiki-II";
		document.test.tbook.options[5].value="textbook.php?khph2=0-7"
		document.test.tbook.options[6].text="Tabiyaat-II";
		document.test.tbook.options[6].value="textbook.php?kuph2=0-7"
		//document.test.tbook.options[7].text="Exemplar Problems(English)";
		//document.test.tbook.options[7].value="textbook.php?keep3=0-17"
		//document.test.tbook.options[8].text="Exemplar Problems(Hindi)";
		//document.test.tbook.options[8].value="textbook.php?khep3=0-17"
		//document.test.tbook.options[9].text="Lab Manual(English)";
		//document.test.tbook.options[9].value="textbook.php?kelm1=0-14"
		
		
	}
	else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="Hindi"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Antra";
		document.test.tbook.options[1].value="textbook.php?khat1=0-16"
		document.test.tbook.options[2].text="Aroh";
		document.test.tbook.options[2].value="textbook.php?khar1=0-16"
		//document.test.tbook.options[3].text="Vyavaharik Hindi";
		//document.test.tbook.options[3].value="/book_publishing/CLASS 11/Viyabharik Hindi11/ch11_vyawaharik_hindi.htm"				
		document.test.tbook.options[3].text="Vitan";
		document.test.tbook.options[3].value="textbook.php?khvt1=0-4"
		document.test.tbook.options[4].text="Antral";
		document.test.tbook.options[4].value="textbook.php?khan1=0-2"
		//document.test.tbook.options[6].text="Abhivyakti Aur Madhyam";
		//document.test.tbook.options[6].value="textbook.php?lham1=0-18"
	}
	else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="Sociology"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Introducing Sociology";
		document.test.tbook.options[1].value="textbook.php?kesy1=0-5"
		document.test.tbook.options[2].text="Samaj Shastra Parichay-I";
		document.test.tbook.options[2].value="textbook.php?khsy1=0-5"
		document.test.tbook.options[3].text="Samajiyaat Ka Tarf";
		document.test.tbook.options[3].value="textbook.php?kusy1=0-5"
		document.test.tbook.options[4].text="Understanding Society";
		document.test.tbook.options[4].value="textbook.php?kesy2=0-5"
		document.test.tbook.options[5].text="Samaj ka Bodh";
		document.test.tbook.options[5].value="textbook.php?khsy2=0-5"
		document.test.tbook.options[6].text="Mutala-e-Muashira";
		document.test.tbook.options[6].value="textbook.php?kusy2=0-5"
		
	}
	else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="English"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Woven Words";
		document.test.tbook.options[1].value="textbook.php?keww1=0-27"
		document.test.tbook.options[2].text="Hornbill";
		document.test.tbook.options[2].value="textbook.php?kehb1=0-14"
		document.test.tbook.options[3].text="Snapshots Suppl.Reader English";
		document.test.tbook.options[3].value="textbook.php?kesp1=0-6"			
		
		
	}
	else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="Political Science"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Political Theory";
		document.test.tbook.options[1].value="textbook.php?keps1=0-8"
		document.test.tbook.options[2].text="Raajneeti Sidhant";
		document.test.tbook.options[2].value="textbook.php?khps1=0-8"
		document.test.tbook.options[3].text="Hindustani Aain aur Kaam";
		document.test.tbook.options[3].value="textbook.php?kups1=0-10"
	//document.test.tbook.options[4].text="Indian Economic Development(Urdu)";
	//document.test.tbook.options[4].value="textbook.php?kuec1=0-10"
		document.test.tbook.options[4].text="India Constitution at Work";
		document.test.tbook.options[4].value="textbook.php?keps2=0-10"
		document.test.tbook.options[5].text="Bharat ka Samvidhan Sidhant aur Vyavhar";
		document.test.tbook.options[5].value="textbook.php?khps2=0-10"
		document.test.tbook.options[6].text="Siyasi Nazaria";
		document.test.tbook.options[6].value="textbook.php?kups2=0-10"
	}
	else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="History"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Themes in World History";
		document.test.tbook.options[1].value="textbook.php?kehs1=0-7"
		document.test.tbook.options[2].text="Vishwa Itihas Ke Kuch Vishay";
		document.test.tbook.options[2].value="textbook.php?khhs1=0-7"				
		document.test.tbook.options[3].text="Tareekh-e-Alam per Mabni Mauzuaat Part I";
		document.test.tbook.options[3].value="textbook.php?kuta1=0-11"
	
		
	}
	
	else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="Heritage Crafts"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Living Craft Traditions of India";
		document.test.tbook.options[1].value="textbook.php?kehc1=0-10"
		document.test.tbook.options[2].text="Hindustan me Dastkari Ki Riwayat";
		document.test.tbook.options[2].value="textbook.php?kuhc1=0-10"
		//document.test.tbook.options[3].text="Dastkari";
		//document.test.tbook.options[3].value="textbook.php?kuhc2=0-10"
		
	}
	
	else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="Graphics design"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="The story of graphic design";
		document.test.tbook.options[1].value="textbook.php?kegd1=0-8"		
		document.test.tbook.options[2].text="graphic design ek kahani";
		document.test.tbook.options[2].value="textbook.php?khgd1=0-8"
						
	}
		
		else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="Computers and Communication Technology"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="CCT Part-I";
		document.test.tbook.options[1].value="textbook.php?kect1=0-8"		
		document.test.tbook.options[2].text="CCT Part-II";
		document.test.tbook.options[2].value="textbook.php?kect2=0-6"
		document.test.tbook.options[3].text="Computer aur Sanchar Prodhogiki Part-I";
		document.test.tbook.options[3].value="textbook.php?khct1=0-8"		
		document.test.tbook.options[4].text="Computer aur Sanchar Prodhogiki Part-II";
		document.test.tbook.options[4].value="textbook.php?khct2=0-6"
	    document.test.tbook.options[5].text="Computer Aur Muwaslati Technology I";
		document.test.tbook.options[5].value="textbook.php?kuct1=0-8"		
		document.test.tbook.options[6].text="Computer Aur Muwaslati Technology II";
		document.test.tbook.options[6].value="textbook.php?kuct2=0-6"				
	}
	
	else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="Fine Art"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="An Introduction to Indian Art Part-I";
		document.test.tbook.options[1].value="textbook.php?kefa1=0-8"	
document.test.tbook.options[2].text="Bhartiya Kala ka parichay";
		document.test.tbook.options[2].value="textbook.php?khfa1=0-8"		
								
	}
	else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="Urdu"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Nai Awaz";
		document.test.tbook.options[1].value="textbook.php?kuna1=0-20"		
		document.test.tbook.options[2].text="Dhanak";
		document.test.tbook.options[2].value="textbook.php?kudh1=0-27"
document.test.tbook.options[3].text="Gulistan e Adab";
		document.test.tbook.options[3].value="textbook.php?kuga1=0-22"
document.test.tbook.options[4].text="Khyabane Urdu";
		document.test.tbook.options[4].value="textbook.php?kuku1=0-15"		
	}
	else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="Creative Writing and Translation"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Srijan";
		document.test.tbook.options[1].value="textbook.php?khsr1=0-4"		
		
		document.test.tbook.options[2].text="Takhleequi Jauhar";
		document.test.tbook.options[2].value="textbook.php?kucw1=0-4"		
							
	}
	
	else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="Informatics Practices"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Informatics Practices";
		document.test.tbook.options[1].value="textbook.php?keip1=0-8"		
		
						
	}
	else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="Biotechnology"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Biotechnology";
		document.test.tbook.options[1].value="textbook.php?kebt1=0-12"		
		
						
	}
	
	else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="Computer Science"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Computer Science";
		document.test.tbook.options[1].value="textbook.php?kecs1=0-11"		
		
						
	}
	else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="Health and Physical Education"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Health and Physical Education";
		document.test.tbook.options[1].value="textbook.php?kehp1=0-11"		
							
	}
	else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="Knowledge Traditions Practices of India"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Knowledge Traditions Practices of India";
		document.test.tbook.options[1].value="textbook.php?keks1=0-9"		
							
	}
	
	else if((document.test.tclass.value==11) && (document.test.tsubject.options[sind].text=="Sangeet"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Tabla evam Pakhawaj";
		document.test.tbook.options[1].value="textbook.php?khtp1=0-8"
		document.test.tbook.options[2].text="Hindustani Sangeet Gayan Evam Vadan";
		document.test.tbook.options[2].value="textbook.php?khgv1=0-10"	
							
	}
	
		
	else if((document.test.tclass.value==12) && (document.test.tsubject.options[sind].text=="Accountancy"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Accountancy-I";
		document.test.tbook.options[1].value="textbook.php?leac1=0-4"		
		document.test.tbook.options[2].text="Accountancy Part-II";
		document.test.tbook.options[2].value="textbook.php?leac2=0-6"
		document.test.tbook.options[3].text="Lekhashastra Part-I";
		document.test.tbook.options[3].value="textbook.php?lhac1=0-4"
		document.test.tbook.options[4].text="Lekhashastra Part-II";
		document.test.tbook.options[4].value="textbook.php?lhac2=0-5"
		document.test.tbook.options[5].text="Computerised Accounting System";
		document.test.tbook.options[5].value="textbook.php?leca1=0-4"
		document.test.tbook.options[6].text="Khatadari-I(Urdu)";
		document.test.tbook.options[6].value="textbook.php?luac1=0-5"
		document.test.tbook.options[7].text="Khatadari-II(Urdu)";
		document.test.tbook.options[7].value="textbook.php?luac2=0-6"			
	}
	else if((document.test.tclass.value==12) && (document.test.tsubject.options[sind].text=="Mathematics"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Mathematics Part-I";
		document.test.tbook.options[1].value="textbook.php?lemh1=0-6"
		document.test.tbook.options[2].text="Mathematics Part-II";
		document.test.tbook.options[2].value="textbook.php?lemh2=0-7"
		document.test.tbook.options[3].text="Ganit-I";
		document.test.tbook.options[3].value="textbook.php?lhmh1=0-6"		
		document.test.tbook.options[4].text="Ganit-II";
		document.test.tbook.options[4].value="textbook.php?lhmh2=0-7"
		document.test.tbook.options[5].text="Riyazi-I";
		document.test.tbook.options[5].value="textbook.php?lumh1=0-6"
		document.test.tbook.options[6].text="Riyazi-II";
		document.test.tbook.options[6].value="textbook.php?lumh2=0-7"
		
		//document.test.tbook.options[7].text="Exemplar Problems(English)";
		//document.test.tbook.options[7].value="textbook.php?leep2=0-16"
		//document.test.tbook.options[8].text="Exemplar Problems(Hindi)";
		//document.test.tbook.options[8].value="textbook.php?lhep2=0-15"
		
		
	}
	else if((document.test.tclass.value==12) && (document.test.tsubject.options[sind].text=="Physics"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Physics Part-I";
		document.test.tbook.options[1].value="textbook.php?leph1=0-8"
		document.test.tbook.options[2].text="Physics Part-II";
		document.test.tbook.options[2].value="textbook.php?leph2=0-6"
		document.test.tbook.options[3].text="Bhautiki-I";
		document.test.tbook.options[3].value="textbook.php?lhph1=0-8"
		document.test.tbook.options[4].text="Bhautiki-II";
		document.test.tbook.options[4].value="textbook.php?lhph2=0-6"
		document.test.tbook.options[5].text="Tabiyaat-I";
		document.test.tbook.options[5].value="textbook.php?luph1=0-8"
		document.test.tbook.options[6].text="Tabiyaat-II";
		document.test.tbook.options[6].value="textbook.php?luph2=0-6"
		//document.test.tbook.options[7].text="Examplar Prolems(English)";
	//	document.test.tbook.options[7].value="textbook.php?leep6=0-17"	
		//document.test.tbook.options[8].text="Examplar Problems(Hindi)";
		//document.test.tbook.options[8].value="textbook.php?lhep6=0-17"
		//document.test.tbook.options[9].text="Lab Manual(English)";
		//document.test.tbook.options[9].value="textbook.php?lelm3=0-7"
		//document.test.tbook.options[10].text="Lab Manual(Hindi)";
		//document.test.tbook.options[10].value="textbook.php?lhlm3=0-16"
				
	}
	else if((document.test.tclass.value==12) && (document.test.tsubject.options[sind].text=="Hindi"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Antra";
		document.test.tbook.options[1].value="textbook.php?lhat1=0-21"
		document.test.tbook.options[2].text="Aroh";
		document.test.tbook.options[2].value="textbook.php?lhar1=0-15"
		document.test.tbook.options[3].text="Vitan";
		document.test.tbook.options[3].value="textbook.php?lhvt1=0-3"
		//document.test.tbook.options[4].text="Abhivyakti Aur Madhyam";
		//document.test.tbook.options[4].value="textbook.php?lham1=0-18"
		document.test.tbook.options[4].text="Antral Bhag 2";
		document.test.tbook.options[4].value="textbook.php?lhan1=0-3"
		
				
	}
	else if((document.test.tclass.value==12) && (document.test.tsubject.options[sind].text=="English"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Kaliedoscope";
		document.test.tbook.options[1].value="textbook.php?lekl1=0-21"
		document.test.tbook.options[2].text="Flamingo";
		document.test.tbook.options[2].value="textbook.php?lefl1=0-13"
		document.test.tbook.options[3].text="Vistas";
		document.test.tbook.options[3].value="textbook.php?levt1=0-6"
	
		
	}
	else if((document.test.tclass.value==12) && (document.test.tsubject.options[sind].text=="Biotechnology"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Biotechnology";
		document.test.tbook.options[1].value="textbook.php?lebt1=0-13"
		
		
	}
	else if((document.test.tclass.value==12) && (document.test.tsubject.options[sind].text=="Biology"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Biology";
		document.test.tbook.options[1].value="textbook.php?lebo1=0-13"
		document.test.tbook.options[2].text="Jeev Vigyan";
		document.test.tbook.options[2].value="textbook.php?lhbo1=0-13"
		document.test.tbook.options[3].text="Hayatiyaat";
		document.test.tbook.options[3].value="textbook.php?lubo1=0-16"
		//document.test.tbook.options[3].text="Human Ecology and Family Sciences Part I ";
		//document.test.tbook.options[3].value="textbook.php?lehe1=0-10"		
		//document.test.tbook.options[4].text="Exemplar Problems";
		//document.test.tbook.options[4].value="textbook.php?leep4=0-19"
		//document.test.tbook.options[5].text="Lab Manual(English)";
		//document.test.tbook.options[5].value="textbook.php?lelm2=0-16"
							
	}
	else if((document.test.tclass.value==12) && (document.test.tsubject.options[sind].text=="History"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Themes in Indian History-I";
		document.test.tbook.options[1].value="textbook.php?lehs1=0-4"
		document.test.tbook.options[2].text="Bharatiya Itihas ke kuchh Vishay-I";
		document.test.tbook.options[2].value="textbook.php?lhhs1=0-4"
		document.test.tbook.options[3].text="Themes in Indian History-II";
		document.test.tbook.options[3].value="textbook.php?lehs2=0-4"
		document.test.tbook.options[4].text="Bharatiya Itihas ke kuchh Vishay-II ";
		document.test.tbook.options[4].value="textbook.php?lhhs2=0-4"
        document.test.tbook.options[5].text="Themes in Indian History-III";
		document.test.tbook.options[5].value="textbook.php?lehs3=0-4"
		document.test.tbook.options[6].text="Bharatiya Itihas ke kuchh Vishay-III";
		document.test.tbook.options[6].value="textbook.php?lhhs3=0-4"
		document.test.tbook.options[7].text="Tareekh-e-Hind ke Mauzuaat-I(Urdu)";
		document.test.tbook.options[7].value="textbook.php?luth1=0-4"
		document.test.tbook.options[8].text="Tareekh-e-Hind ke Mauzuaat-II(Urdu)";
		document.test.tbook.options[8].value="textbook.php?luth2=0-5"
		document.test.tbook.options[9].text="Tareekh-e-Hind ke Mauzuaat-III(Urdu)";
		document.test.tbook.options[9].value="textbook.php?luth3=0-6"
							
	}
	else if((document.test.tclass.value==12) && (document.test.tsubject.options[sind].text=="Geography"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Fundamentals of Human Geography";
		document.test.tbook.options[1].value="textbook.php?legy1=0-8"
		document.test.tbook.options[2].text="Practical Work in Geography Part II";
		document.test.tbook.options[2].value="textbook.php?legy3=0-4"
		document.test.tbook.options[3].text="Manav Bhugol Ke Mool Sidhant";
		document.test.tbook.options[3].value="textbook.php?lhgy1=0-8"
		document.test.tbook.options[4].text="Bhugol main peryojnatmak pryogatmak karye";
		document.test.tbook.options[4].value="textbook.php?lhgy3=0-4"
		document.test.tbook.options[5].text="India -People And Economy";
		document.test.tbook.options[5].value="textbook.php?legy2=0-9"
		document.test.tbook.options[6].text="Bharat log aur arthvyasastha(Bhugol)";
		document.test.tbook.options[6].value="textbook.php?lhgy2=0-9"	
		document.test.tbook.options[7].text="Insani Jughrafia Ke Buniyadi Usool(Urdu)";
		document.test.tbook.options[7].value="textbook.php?lufh1=0-10"
		document.test.tbook.options[8].text=" Hindustan Awam Aur Maishat(Urdu)";
		document.test.tbook.options[8].value="textbook.php?lugy1=0-12"
		document.test.tbook.options[9].text=" Jughrafia Mein Aamli Kam(Urdu)";
		document.test.tbook.options[9].value="textbook.php?lugy3=0-6"
		
	}
	else if((document.test.tclass.value==12) && (document.test.tsubject.options[sind].text=="Psychology"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Psychology";
		document.test.tbook.options[1].value="textbook.php?lepy1=0-7"
	document.test.tbook.options[2].text="Manovigyan";
		document.test.tbook.options[2].value="textbook.php?lhpy1=0-7"
		document.test.tbook.options[3].text="Nafsiat(Urdu)";
		document.test.tbook.options[3].value="textbook.php?lupy1=0-9"

							
	}
	else if((document.test.tclass.value==12) && (document.test.tsubject.options[sind].text=="Sociology"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Indian Society";
		document.test.tbook.options[1].value="textbook.php?lesy1=0-7"
		document.test.tbook.options[2].text="Bhartiya Samaj";
		document.test.tbook.options[2].value="textbook.php?lhsy1=0-7"
		document.test.tbook.options[3].text="Social Change and Development in India";
		document.test.tbook.options[3].value="textbook.php?lesy2=0-8"
		document.test.tbook.options[4].text="Bharat main Samajik Parivartan aur Vikas";
		document.test.tbook.options[4].value="textbook.php?lhsy2=0-8"
		document.test.tbook.options[5].text="Hindustani Samaj(Urdu)";
		document.test.tbook.options[5].value="textbook.php?luis1=0-7"
		document.test.tbook.options[6].text="Hindustan Mein Samaji Tabdili Aur Taraqqi(Urdu)";
		document.test.tbook.options[6].value="textbook.php?lusy2=0-8"
		
		
						
	}
	
	else if((document.test.tclass.value==12) && (document.test.tsubject.options[sind].text=="Chemistry"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Chemistry-I";
		document.test.tbook.options[1].value="textbook.php?lech1=0-5"
		document.test.tbook.options[2].text="Chemistry-II";
		document.test.tbook.options[2].value="textbook.php?lech2=0-5"
		document.test.tbook.options[3].text="Rasayan vigyan bhag I";
		document.test.tbook.options[3].value="textbook.php?lhch1=0-5"
		document.test.tbook.options[4].text="Rasayan vigyan bhag II";
		document.test.tbook.options[4].value="textbook.php?lhch2=0-5"
		//document.test.tbook.options[5].text="Exemplar Problems";
		//document.test.tbook.options[5].value="textbook.php?leep5=0-18"
		//document.test.tbook.options[6].text="Exemplar Problems(Hindi)";
		//document.test.tbook.options[6].value="textbook.php?lhep4=0-17"
		//document.test.tbook.options[7].text="Lab Manual(English)";
		//document.test.tbook.options[7].value="textbook.php?lelm1=0-11"
		//document.test.tbook.options[8].text="Lab Manual(Hindi)";
		//document.test.tbook.options[8].value="textbook.php?lhlm1=0-11"
		document.test.tbook.options[5].text="Keemiya-I";
		document.test.tbook.options[5].value="textbook.php?luch1=0-9"
		document.test.tbook.options[6].text="Keemiya-II";
		document.test.tbook.options[6].value="textbook.php?luch2=0-7"			
		
						
	}
	else if((document.test.tclass.value==12) && (document.test.tsubject.options[sind].text=="Sanskrit"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Bhaswati";
		document.test.tbook.options[1].value="textbook.php?lhsk1=0-10"
		document.test.tbook.options[2].text="Shaswati";
		document.test.tbook.options[2].value="textbook.php?lhsk2=0-11"
		document.test.tbook.options[3].text="";
		document.test.tbook.options[3].value=""
							
	}
	
	else if((document.test.tclass.value==12) && (document.test.tsubject.options[sind].text=="Political Science"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Contemporary World Politics";
		document.test.tbook.options[1].value="textbook.php?leps1=0-7"
		document.test.tbook.options[2].text="Samkalin Vishwa Rajniti";
		document.test.tbook.options[2].value="textbook.php?lhps1=0-7"
		document.test.tbook.options[3].text="Politics in India Since Independence";
		document.test.tbook.options[3].value="textbook.php?leps2=0-8"
		document.test.tbook.options[4].text="Swatantra Bharat Mein Rajniti-II";
		document.test.tbook.options[4].value="textbook.php?lhps2=0-8"
		document.test.tbook.options[5].text="Aasri Alami Siyasat(Urdu)";
		document.test.tbook.options[5].value="textbook.php?lups1=0-9"
		document.test.tbook.options[6].text="Azadi Ke Baad Hindustan Ki Siyasat(Urdu)";
		document.test.tbook.options[6].value="textbook.php?luab1=0-9"					
	}
	else if((document.test.tclass.value==12) && (document.test.tsubject.options[sind].text=="Home Science"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		
		document.test.tbook.options[1].text="Human Ecology and Family Sciences Part I ";
		document.test.tbook.options[1].value="textbook.php?lehe1=0-7"
		document.test.tbook.options[2].text="Human Ecology and Family Sciences Part II ";
		document.test.tbook.options[2].value="textbook.php?lehe2=0-7"
		
		document.test.tbook.options[3].text="Manav Paristhitik avam Parivar Vigyan Bhag 1 ";
		document.test.tbook.options[3].value="textbook.php?lehh1=0-7"
		document.test.tbook.options[4].text="Manav Paristhitiki avam Parivar Vigyan Bhag 2";
		document.test.tbook.options[4].value="textbook.php?lehh2=0-7"
		
	
		
		
				
	}
	else if((document.test.tclass.value==12) && (document.test.tsubject.options[sind].text=="Economics"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Introductory Microeconomics";
		document.test.tbook.options[1].value="textbook.php?leec2=0-5"
		document.test.tbook.options[2].text="Introductory Macroeconomics";
		document.test.tbook.options[2].value="textbook.php?leec1=0-6"
		document.test.tbook.options[3].text="Vyashthi Arthshasrta";
		document.test.tbook.options[3].value="textbook.php?lhec2=0-5"
		document.test.tbook.options[4].text="Samashty Arthshastra Ek Parichay";
		document.test.tbook.options[4].value="textbook.php?lhec1=0-6"
		document.test.tbook.options[5].text="Juzvi Maashiyat ka Taruf(Urdu)";
		document.test.tbook.options[5].value="textbook.php?lume1=0-6"
		document.test.tbook.options[6].text="Kulli Maashiyat Ka Taruf(Urdu)";
		document.test.tbook.options[6].value="textbook.php?lume2=0-6"
						
	}
	
	else if((document.test.tclass.value==12) && (document.test.tsubject.options[sind].text=="Business Studies"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Business Studies-I";
		document.test.tbook.options[1].value="textbook.php?lebs1=0-8"
		document.test.tbook.options[2].text="Vyavasai Adhyan-I";
		document.test.tbook.options[2].value="textbook.php?lhbs1=0-8"
		document.test.tbook.options[3].text="Business Studies-II";
		document.test.tbook.options[3].value="textbook.php?lebs2=0-3"
		document.test.tbook.options[4].text="Vyavasai Adhyan-II";
		document.test.tbook.options[4].value="textbook.php?lhbs2=0-3"
		document.test.tbook.options[5].text="Karobari Uloom I(Urdu)";
		document.test.tbook.options[5].value="textbook.php?lubs1=0-8"
		document.test.tbook.options[6].text="Karobari Uloom II(Urdu)";
		document.test.tbook.options[6].value="textbook.php?lubs2=0-4"						
	}

	else if((document.test.tclass.value==12) && (document.test.tsubject.options[sind].text=="Urdu"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Gulistan-e- Adab";
		document.test.tbook.options[1].value="textbook.php?luga1=0-12"
		document.test.tbook.options[2].text="Khayaban-e-Urdu";
		document.test.tbook.options[2].value="textbook.php?luku1=0-6"
		document.test.tbook.options[3].text="Nai Awaz";
		document.test.tbook.options[3].value="textbook.php?luna1=0-16"
		document.test.tbook.options[4].text="Dhanak";
		document.test.tbook.options[4].value="textbook.php?ludh1=0-12"
		
							
	}
	else if((document.test.tclass.value==12) && (document.test.tsubject.options[sind].text=="Heritage Crafts"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		//document.test.tbook.options[1].text="Craft Tradition Of India";
		//document.test.tbook.options[1].value="textbook.php?lehc1=0-9"
		document.test.tbook.options[1].text="Hindustan me Dastkari Ki Riwayat";
		document.test.tbook.options[1].value="textbook.php?luhc1=0-9"
		document.test.tbook.options[2].text="Craft Tradition of India";
		document.test.tbook.options[2].value="textbook.php?lehc1=0-9"
		document.test.tbook.options[3].text="Bharatiya Hastkla Ki Paramparayen";
		document.test.tbook.options[3].value="textbook.php?lhhc1=0-9"
		
							
	}
	else if((document.test.tclass.value==12) && (document.test.tsubject.options[sind].text=="New Age Graphics Design"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="New Age Graphics Design";
		document.test.tbook.options[1].value="textbook.php?legd1=0-12"
		
							
	}
	else if((document.test.tclass.value==12) && (document.test.tsubject.options[sind].text=="Creative Writing & Translation"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[2].text="Srijan-II";
		document.test.tbook.options[2].value="textbook.php?khsr2=0-4"
		document.test.tbook.options[1].text="Takhleequi Jauhar";
		document.test.tbook.options[1].value="textbook.php?lucw1=0-11"
		
							
	}
	else if((document.test.tclass.value==12) && (document.test.tsubject.options[sind].text=="Fine Art"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="An Introduction to Indian Art Part-II";
		document.test.tbook.options[1].value="textbook.php?lefa1=0-8"
		document.test.tbook.options[2].text="Bhartiya Kala ka Itihaas Bhag 2";
		document.test.tbook.options[2].value="textbook.php?lhfa1=0-8"
		
							
	}
	else if((document.test.tclass.value==12) && (document.test.tsubject.options[sind].text=="Computer Science"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Computer Science";
		document.test.tbook.options[1].value="textbook.php?lecs1=0-13"
		
							
	}
	else if((document.test.tclass.value==12) && (document.test.tsubject.options[sind].text=="Informatics Practices"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Informatics Practices";
		document.test.tbook.options[1].value="textbook.php?leip1=0-7"
		
							
	}
	else if((document.test.tclass.value==13) && (document.test.tsubject.options[sind].text=="Hindi"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Abhivyakti Aur Madhyam";
		document.test.tbook.options[1].value="textbook.php?kham1=0-16"
		
							
	}
	else if((document.test.tclass.value==13) && (document.test.tsubject.options[sind].text=="Sanskrit"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Sanskrit Sahitya parichay";
		document.test.tbook.options[1].value="textbook.php?klss1=0-12"
		
							
	}
	   else if((document.test.tclass.value==13) && (document.test.tsubject.options[sind].text=="Heritage Crafts"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Exploring Craft Tradition of India";
		document.test.tbook.options[1].value="textbook.php?mehc1=0-10"
		document.test.tbook.options[2].text="Bhartiya Hastkala Parmparaon ki Khoj";
		document.test.tbook.options[2].value="textbook.php?khhc1=0-10"
		
							
	}
	else if((document.test.tclass.value==13) && (document.test.tsubject.options[sind].text=="Urdu"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Zuban-O-Adab ki Tareekh";
		document.test.tbook.options[1].value="textbook.php?kuza1=0-23"
		document.test.tbook.options[2].text="Urdu Qwaid aur Insha";
		document.test.tbook.options[2].value="textbook.php?juuq1=0-24"
		document.test.tbook.options[3].text="Izhar Aur Zara-e-Izhar";
		document.test.tbook.options[3].value="textbook.php?kuiz1=0-4"		
		
							
	}
	else if((document.test.tclass.value==14) && (document.test.tsubject.options[sind].text=="Vocational"))
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="Organic Farming";
		document.test.tbook.options[1].value="textbook.php?geof1=0-5"
		
							
	}
	
	
	else if(document.test.tsubject.options[sind].text=="..Select Subject..")
	{
		document.test.tbook.options[0].text="..Select Book Title..";
		document.test.tbook.options[1].text="";
	}
}
}</script>
 
										
<form name="test"><input type="hidden" name="nccharset" value="A2069B41"><input type="hidden" name="nccharset" value="DCFB986D"><input type="hidden" name="nccharset" value="E384DD46">
<table width="100%" style="">
<tbody><tr>
<td class="notuse" valign="center" width="30%" bgcolor="#981F4D" height="30">

	
			
</td>
<td class="useclass" width="" align="left" bgcolor="#981F4D" height="30"><select name="tclass" onchange="change()">
  <option value="-1">..Select Class..</option>
  <option value="1">Class I</option>
  <option value="2">Class II</option>
   <option value="3">Class III</option>
   <option value="4">Class IV</option>
  <option value="5">Class V</option>
   <option value="6">Class VI</option>
    <option value="7">Class VII</option>
	
	 <option value="8">Class VIII</option>
	  <option value="9">Class IX</option>
	
	   <option value="10">Class X</option>
	      
	   <option value="11">Class XI</option>
	   
	   <option value="12">Class XII</option>
	   
	  <option value="13">Class XI &amp; XII Combined</option>
  
  
</select>
  <select name="tsubject" onchange="change1(this.form.tsubject.selectedIndex)">
                                          <option value="-1">..Select Subject..</option>
                                          <option></option>
                                          <option></option>
                                          <option></option>
                                          <option></option>
                                          <option></option>
                                          <option></option>
                                          <option></option>
                                          <option></option>
                                          <option></option>
                                          <option></option>
                                          <option></option>
                                          <option></option>
                                          <option></option>
                                          <option></option>
                                          <option></option>
                                          <option></option>
                                          <option></option>
                                          <option></option>
                                          <option></option>
					  <option></option>
					  <option></option>
					 <option></option>
					  <option></option>
					<option></option>
					<option></option>
					<option></option>
					<option></option>
					<option></option>
					
                </select>

 <select name="tbook">
                                          <option value="-1">..Select Book Title...</option>
                                          <option></option>
                                          <option></option>
                                          <option></option>
                                          <option></option>
                                          <option></option>
                                          <option></option>
                                          <option></option>
                                          <option></option>
                                          <option></option>
                                          <option></option>
                                          <option></option>
                                          <option></option>
										  <option></option>
										  <option></option>
                </select>
										<input name="button" type="button" onclick="self.location= document.test.tbook.options[document.test.tbook.options.selectedIndex].value" value="Go"></td>
</tr>
</tbody></table>
                                        
                                        
                                       
      
	  
  </form>	  
	  
	  
	  
	 
                               
						</td></tr>                          
                                  
</tbody></table>									
									
									
									
									
								
									
									 
									
									
									
									
									 <p>
  <script type="text/javascript">
		 document.write("<table width='100%' style=\"font-size:16px\"><tr>");
		  var querystring1 = document.location.href; 
		  var gg=querystring1.substring(querystring1.lastIndexOf('/') + 1);
		    	//	  alert(gg);

  //var gg = querystring1.split("/");

  if(gg=="textbook.php")
  {
  
  document.write("<table width='100%'><tr><td width='100%' valign='top' align='center' ><table width='750px'>");
document.write("<tr><td width='100%' align='left' style='font-size:14px;font-family:Verdana, Arial, Helvetica, sans-serif;'>");								   document.write(" <p align='center' style=\"line-height:20px;\"><b>Welcome to the Online Textbooks Section </b></p><p align='justify' style=\"line-height:20px;font-size:12px\">");                             
     document.write("This online service offers easy access to the NCERT textbooks. The service covers textbooks of all subjects published by NCERT for classes I to XII in Hindi, English and Urdu. The Entire book or individual chapters can be downloaded provided the terms of use as mentioned in the Copyright Notice is adhered to.");                           
document.write("</p><p align='justify'></p><p align='left' style=\"line-height:20px\">");
document.write("<b><i>Copyright of NCERT Textbooks and terms of use</i></b>");
document.write("</p><p align='justify'></p><p align='left' style=\"line-height:20px;font-size:12px\">");
document.write("Please note that the NCERT textbooks are copyrighted.");
document.write("</p><p align='justify'></p><p align='justify' style=\"line-height:20px;font-size:12px\">");
document.write("While copies of these textbooks may be downloaded and used as textbooks or for reference, republication of NCERT textbooks by any other individual or agency is strictly prohibited. No agency or individual may make electronic or print copies of these books and redistribute them in any form whatsoever. Use of these online books as a part of digital content packages or software is also strictly prohibited. No website or online service is permitted to host these online textbooks.");
document.write("</p><p align='justify'></p><p align='justify' style=\"line-height:20px;font-size:12px\">");
document.write("Links may however be provided with written permission from the NCERT. ");
document.write("</p><p align='justify'></p><p align='left' style=\"line-height:20px\">");
document.write("<b>Discouraging Piracy</b>");
document.write("</p><p align='justify'></p><p align='justify' style=\"line-height:20px;font-size:12px\">");
document.write("In order to discourage piracy, the online textbooks carry a watermark on all pages declaring the copyright of NCERT. DO NOT BUY OR SELL electronic or printed books with watermarked pages.");
document.write("</p><p align='justify'></p><p align='justify' style=\"line-height:20px;font-size:12px\">");
document.write("Please bring to our notice any infringement or violation of copyright and commercial exploitation of these textbooks. ");
 document.write("</p><p align='justify'></p><p align='justify' style=\"line-height:20px;font-size:12px\">");
document.write("Join us in the Education for All mission . Help us reach these textbooks to children, teachers and schools. ");
document.write("</p><p align='justify'></p><p align='justify' style=\"line-height:20px;font-size:12px\">");
document.write("Help us improve our services. Send your comments, suggestions or queries to <u>dceta.ncert@nic.in</u>");
document.write("</p><p align='justify'></p><p align='left' style=\"line-height:20px\">");
document.write("<b>Rationalised Textbooks</b>");
document.write("</p><p align='justify'></p><p align='justify' style=\"line-height:20px;font-size:12px\">");
document.write("In view of the COVID-19 pandemic, it was felt imperative to reduce content load on students. The National Education Policy 2020 also emphasises reducing the content load and providing opportunities for experiential learning with creative mindset. In this background, the NCERT had undertaken the exercise to rationalise the textbooks across all classes and all subjects. Learning Outcomes already developed by the NCERT across classes had been taken into consideration in this exercise. Contents of the textbooks had been rationalised in view of the following: ");
document.write("</p><p align='justify'></p><p align='justify' style=\"line-height:20px;font-size:12px\"><ul align='justify' style=\"line-height:20px;font-size:12px\">");
document.write("<li>Content based on genres of literature in the textbooks and supplementary readers at different stages of school education </li> ");
document.write("<li>Content that is meant for achieving Learning Outcomes for developing language proficiency and is accessible at different stages </li> ");
document.write("<li>For reducing the curriculum load and examination stress in view of the prevailing condition of the Pandemic </li> ");
document.write("<li>Content, which is easily accessible to students without much interventions from teachers and can be learned by children through self-learning or peer-learning  </li> ");
document.write("<li>Content, which is irrelevant in the present context. The present edition, is a reformatted version after carrying out the changes given above.</li> ");
document.write("</ul></p><p align='justify'></p><p align='justify' style=\"line-height:20px;font-size:12px\">");
document.write("<strong>The present textbooks uploaded in pdf form are rationalised textbooks. These were rationalised for the session 2022-23 and will continue in 2023-24.</strong> ");





document.write("</p></td></tr></table></td>	</tr></table>");								
									
									
									
											 
									
									
									
									
									
						 			
									 

  }
  else
  {

    querystring1 = querystring1.split("?");

	
	
		 document.write("<td class='sidebar-menu' width='' valign='top' ><div><table width='100%' >");							 
									  var name = new String();  
    var value = new String();  
   
	  
    querystring1 = querystring1[1].split("&");  
	 
    for(q=0;q<querystring1.length;q++){  
        var pair = querystring1[q].split("=");  
        name = pair[0].toLowerCase();  
        value = pair[1].toLowerCase(); 
		 
       
	//	this.open("../1.pdf", "Title", "width:300;height:;"); 
    } 
	var sss;
	sss = name.split("%20");
	
	var df=pair[1];
	
	var co=df.split("-");
	var cou=co[0];
	var cha=co[1];
	var pm=sss[0];	
	
var i;
	
	
	//	var url = "<a href='textbook.php? " + pm + " =1'>Prelims </a>";

		// alert("url" +url);
		
		
		
		// For Urdu Text books
		if(pm=="geof1")
		{
		document.write("<tr valign='top' font-style='color:white'><td class='st1' bgcolor='#981F4D' style='color:white'  height='25' width='100%'><strong>Organic Farming</strong></br></td></tr>");	
			
		}
		if(pm=="ieeo1")
		{
		document.write("<tr valign='top' font-style='color:white'><td class='st1' bgcolor='#981F4D' style='color:white'  height='25' width='100%'><strong>IT Domestic Data Entry Operator</strong></br></td></tr>");	
			
		}
		if(pm=="iict1")
		{
		document.write("<tr valign='top' font-style='color:white'><td class='st1' bgcolor='#981F4D' style='color:white'  height='25' width='100%'><strong>Information and Communication Technology</strong></br></td></tr>");	
			
		}
		
	if(pm=="iees1")
		{
		document.write("<tr valign='top' font-style='color:white'><td class='st1' bgcolor='#981F4D' style='color:white'  height='25' width='100%'><strong>Employability Skill </strong></br></td></tr>");	
			
		}
		if(pm=="kedf1")
		{
		document.write("<tr valign='top' font-style='color:white'><td class='st1' bgcolor='#981F4D' style='color:white'  height='25' width='100%'><strong>Dair Farmer Enterpreneur</strong></br></td></tr>");	
			
		}
		if(pm=="kefc1")
		{
		document.write("<tr valign='top' font-style='color:white'><td class='st1' bgcolor='#981F4D' style='color:white'  height='25' width='100%'><strong>Floriculturist</strong></br></td></tr>");	
			
		}
		if(pm=="khhc1")
		{
		document.write("<tr valign='top' font-style='color:white'><td class='st1' bgcolor='#981F4D' style='color:white'  height='25' width='100%'><strong>Bhartiya Hastkala Parmparaon ki Khoj</strong></br></td></tr>");	
			
		}
		 if(pm=="mehc1")
		{
		document.write("<tr valign='top' font-style='color:white'><td class='st1' bgcolor='#981F4D' style='color:white'  height='25' width='100%'><strong>Exploring Craft Tradition of India</strong></br></td></tr>");	
			
		}
	  if(pm=="kehc1")
		{
		document.write("<tr valign='top' font-style='color:white'><td class='st1' bgcolor='#981F4D' style='color:white'  height='25' width='100%'><strong>Living Craft Tradition of India</strong></br></td></tr>");	
			
		}
		if(pm=="khct1")
		{
		document.write("<tr valign='top' font-style='color:white'><td class='st1' bgcolor='#981F4D' style='color:white'  height='25' width='100%'><strong>Computer Aur Sanchaar Prodhogiki -I</strong></br></td></tr>");	
			
		}
		if(pm=="khct2")
		{
		document.write("<tr valign='top' font-style='color:white'><td class='st1' bgcolor='#981F4D' style='color:white'  height='25' width='100%'><strong>Computer Aur Sanchaar Prodhogiki -II</strong></br></td></tr>");	
			
		}
	  if(pm=="klss1")
		{
		document.write("<tr valign='top' font-style='color:white'><td class='st1' bgcolor='#981F4D' style='color:white'  height='25' width='100%'><strong>Sanskrit Sahitya parichay</strong></br></td></tr>");	
			
		}
		if(pm=="kham1")
		{
		document.write("<tr valign='top' font-style='color:white'><td class='st1' bgcolor='#981F4D' style='color:white'  height='25' width='100%'><strong>Abhivyakti Aur Madhyam</strong></br></td></tr>");	
			
		}	
	if(pm=="kegd1")
		{
		document.write("<tr valign='top' font-style='color:white'><td class='st1' bgcolor='#981F4D' style='color:white'  height='25' width='100%'><strong>The Story of Graphic Design</strong></br></td></tr>");	
			
		}	
	if(pm=="khgd1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white'  height='25' width='100%'><strong>Graphics Design ek Kahani</strong></br></td></tr>");	
			
		}
		if(pm=="leep2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Exemplar Problems(English)</strong></br></td></tr>");	
			
		}
		if(pm=="lhep2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Exemplar Problems(Hindi)</strong></br></td></tr>");	
			
		}
		if(pm=="leep5")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Exemplar Problems</strong></br></td></tr>");	
			
		}
		if(pm=="lhep4")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Exemplar Problems(Hindi)</strong></br></td></tr>");	
			
		}
		if(pm=="leep4")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Exemplar Problems</strong></br></td></tr>");
		}
			
		if(pm=="leep6")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Exemplar Problems(English)</strong></br></td></tr>");
			}
			if(pm=="lhep6")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Exemplar Problems(Hindi)</strong></br></td></tr>");
			}
			
		if(pm=="legd1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>New Age Graphics Design</strong></br></td></tr>");	
			
		}
		if(pm=="aulb1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Ibtedai Urdu-I</strong></br></td></tr>");	
			
		}
	    if(pm=="auri1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Riyazi</strong></br></td></tr>");
		}
		if(pm=="buib1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Ibtedai Urdu-II</strong></br></td></tr>");	
			
		}
	    if(pm=="buri1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Riyazi ka Jadu</strong></br></td></tr>");	
		}
		if(pm=="culb1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Ibtedai Urdu</strong></br></td></tr>");	
			
		}
	    if(pm=="curi1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Riyazi-III</strong></br></td></tr>");	
			
		}
	    if(pm=="cuap1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Aas Pass (Urdu)</strong></br></td></tr>");	
			
		}
	    if(pm=="dulb1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Ibtedai Urdu-IV</strong></br></td></tr>");	
			
		}
	    if(pm=="duri1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Riyazi Ka Jadu</strong></br></td></tr>");	
			
		} if(pm=="duap1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Aas-Paas Urdu</strong></br></td></tr>");	
			
		}if(pm=="eulb1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Ibtedai Urdu Class-V</strong></br></td></tr>");	
			
		}if(pm=="euma1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>math-magic-V</strong></br></td></tr>");	
			
		}if(pm=="euev1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>EVS-V (Urdu)</strong></br></td></tr>");	
			
		}if(pm=="fuaz1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Apni Zuban-VI</strong></br></td></tr>");	
			
		}if(pm=="furi1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Riyazi-VI</strong></br></td></tr>");	
			
		}if(pm=="fuse1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>science-VI</strong></br></td></tr>");	
			
		}if(pm=="fuhm1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Hamare Mazi</strong></br></td></tr>");	
			
		}if(pm=="fuzm1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Zameen Hamara Maskan</strong></br></td></tr>");	
			
		}if(pm=="fuss1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Samazi Aur Siyasi Zindagi</strong></br></td></tr>");	
			
		}if(pm=="fuug1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Urdu Guldasta</strong></br></td></tr>");	
			
		}if(pm=="fujp1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Jaan Pahechan</strong></br></td></tr>");	
			
		}
		if(pm=="guaz1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Apni Zaban</strong></br></td></tr>");	
			
		}if(pm=="guma1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Math (Urdu)</strong></br></td></tr>");	
			
		}if(pm=="gemp1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Exemplar Problems (English)</strong></br></td></tr>");	
			
		}
		if(pm=="guse1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>SCIENCE (Urdu)</strong></br></td></tr>");	
			
		}if(pm=="guhm1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Hamare Mazi (History)</strong></br></td></tr>");	
			
		}if(pm=="guha1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Hamare Mahol (Geography)</strong></br></td></tr>");	
			
		}if(pm=="gugu1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Urdu Guldasta-Suppl</strong></br></td></tr>");	
			
		}if(pm=="gudp1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Door-Pass</strong></br></td></tr>");	
			
		}if(pm=="guhs1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>HISTORY-VIII PART-I (Urdu)</strong></br></td></tr>");	
			
		}if(pm=="guhs2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>HISTORY-VIII PART-II (Urdu)</strong></br></td></tr>");	
			
		}if(pm=="huaz1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Apni Zaban</strong></br></td></tr>");	
			
		}if(pm=="huug1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Urdu Guldasta (Supl)</strong></br></td></tr>");	
			
		}if(pm=="hudp1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Door Pass</strong></br></td></tr>");	
			
		}if(pm=="hujp1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Jaan Pahechan</strong></br></td></tr>");	
			
		}if(pm=="huse1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Science</strong></br></td></tr>");	
			
		}if(pm=="huhi1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Riyazi</strong></br></td></tr>");	
			
		}if(pm=="hugy1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Wasayel aur Taraqqui(Urdu)</strong></br></td></tr>");	
			
		}if(pm=="huss1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Samaji Aur Siyasi Zindagi</strong></br></td></tr>");	
			
		}
		if(pm=="lecs1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Computer Science</strong></br></td></tr>");	
			
		}
		if(pm=="leip1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Informatics Practices</strong></br></td></tr>");	
			
		}
				
		
		if(pm=="huhm1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Hamare Mazi-III</strong></br></td></tr>");	
			
		}if(pm=="june1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Nawa-e-Urdu</strong></br></td></tr>");	
			
		}if(pm=="juge1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Gulzar-e-Urdu</strong></br></td></tr>");	
			
		}if(pm=="juuq1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Urdu Qwaid aur Insha</strong></br></td></tr>");	
			
		}if(pm=="jujp1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Jaan Pahechan</strong></br></td></tr>");	
			
		}if(pm=="judp1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Door-Paas</strong></br></td></tr>");	
			
		}if(pm=="jusr1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Sab Rang</strong></br></td></tr>");	
			
		}if(pm=="kubo1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Hayatiyaat</strong></br></td></tr>");	
			
		}if(pm=="kugy3")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Jughrafia Mein Aamli Kam (Urdu)</strong></br></td></tr>");	
			
		}if(pm=="kugy1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Hindustan Tabi'i Mahaul (Urdu)</strong></br></td></tr>");	
			
		}
		if(pm=="kusc1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Shumariyaat bar-e-Mushiyat</strong></br></td></tr>");	
			
		}if(pm=="kuec1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Hindustan ki Masshi Tarraqiu</strong></br></td></tr>");	
			
		}if(pm=="kuic1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Indian Constitution at Work</strong></br></td></tr>");	
			
		}if(pm=="kuhc1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Hindustan me Dastkari Ki Riwayat</strong></br></td></tr>");	
			
		}if(pm=="kuhc2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Dastakari</strong></br></td></tr>");	
			
		}
		
		if(pm=="kugm1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Tabi'i Jughraiya Ka Mubadiyat (Urdu)</strong></br></td></tr>");	
			
		}
		
		
		if(pm=="kugy3")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>India Physical Env(Geog)</strong></br></td></tr>");	
			
		}if(pm=="luga1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Gulistan-e- Adab</strong></br></td></tr>");	
			
		}if(pm=="luku1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Khayaban-e-Urdu</strong></br></td></tr>");	
			
		}if(pm=="luna1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Nai Awaz</strong></br></td></tr>");	
			
		}if(pm=="ludh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Dhanak</strong></br></td></tr>");	
			
		}if(pm=="jhva1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Vyakaranavithi</strong></br></td></tr>");	
			
		}
		
		if(pm=="isab1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Abhyaswaan Bhav</strong></br></td></tr>");	
			
		}
		if(pm=="luth1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Tareekh-e-Hind ke Mauzuaat-I</strong></br></td></tr>");	
			
		}
		if(pm=="luth3")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Tareekh-e-Hind ke Mauzuaat-III</strong></br></td></tr>");	
			
		}
		if(pm=="lufh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Insani Geographia ke Mubadiyaat </strong></br></td></tr>");	
			
		}if(pm=="lugy1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Hindustan Awam Aur Maishat </strong></br></td></tr>");	
			
		}
		if(pm=="lugy3")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Jughrafia Mein Aamli Kam</strong></br></td></tr>");	
			
		}
		if(pm=="lume1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Juzvi Maashiyat Ka Taruf</strong></br></td></tr>");	
			
		}if(pm=="lume2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Kulli Maashiyat Ka Taruf </strong></br></td></tr>");	
			
		}if(pm=="luis1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Hindustani Samaj</strong></br></td></tr>");	
			
		}
		if(pm=="luac1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Khatadari-I</strong></br></td></tr>");	
			
		}
		if(pm=="luac2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Khatadari-II</strong></br></td></tr>");	
			
		}
		
		
		if(pm=="aemr1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Mridang</strong></br></td></tr>");	
			
		}
		
		if(pm=="aejm1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Joyful-Mathematics</strong></br></td></tr>");	
			
		}

		if(pm=="aush1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Shahnai</strong></br></td></tr>");	
			
		}
		
		if(pm=="bush1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Shahnai</strong></br></td></tr>");	
			
		}



		
		if(pm=="ahjm1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Anadmay-Ganit</strong></br></td></tr>");	
			
		}
		
		
		if(pm=="ahsr1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Sarangi</strong></br></td></tr>");	
			
		}
		if(pm=="bhsr1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Sarangi</strong></br></td></tr>");	
			
		}
		
		if(pm=="bejm1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Joyful-Mathematics</strong></br></td></tr>");	
			
		}
		if(pm=="bhjm1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Anadmay-Ganit</strong></br></td></tr>");	
			
		}
		
		if(pm=="bemr1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Mridang</strong></br></td></tr>");	
			
		}
		
		if(pm=="lupy1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Nafsiat(Psychology)</strong></br></td></tr>");	
			
		}if(pm=="luth2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Tareekh-e-Hind ke Mauzuaat-II</strong></br></td></tr>");	
			
		}if(pm=="lubs1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Karobari Uloom I</strong></br></td></tr>");	
			
		}if(pm=="lubs2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Karobari Uloom II</strong></br></td></tr>");	
			
		}
		
		if(pm=="aeen1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' background='' height='25' width='100%'><strong>Marigold</strong></br></td></tr>");	
	
	
		}
		
		
		
		if(pm=="kepy1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' background='' height='25' width='100%'><strong>Psychology</strong></br></td></tr>");	
	
	
		}
		
		if(pm=="luhc1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Hindustan me Dastkari Ki Riwayat</strong></br></td></tr>");	
	
	
		}if(pm=="lehc1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Craft Tradition of India</strong></br></td></tr>");	
	
	
		}if(pm=="lhhc1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Bharatiya Hastkla Ki Paramparayen</strong></br></td></tr>");	
	
	
		}if(pm=="ahhn1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Rimjhim</strong></br></td></tr>");	
	
	
		}
		if(pm=="aemh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Math-Magic</strong></br></td></tr>");	
	
	
		}
		if(pm=="ahmh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Ganit ka Jadu</strong></br></td></tr>");	
	
	
		}
		if(pm=="been1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Marigold</strong></br></td></tr>");	
	
	
		}
		if(pm=="bhhn1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Rimjhim</strong></br></td></tr>");	
	
	
		}
		if(pm=="bhmh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Ganit ka Jadu</strong></br></td></tr>");	
	
	
		}
		if(pm=="bemh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Math-Magic</strong></br></td></tr>");	
	
	
		}
		if(pm=="chhn1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Rimjhim</strong></br></td></tr>");	
	
	
		}
		if(pm=="ceen1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Marigold</strong></br></td></tr>");	
	
	
		}
		if(pm=="chmh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Ganit ka Jadu</strong></br></td></tr>");	
	
	
		}
		if(pm=="cemh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Math-Magic</strong></br></td></tr>");	
	
	
		}
		if(pm=="ceap1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Looking Arround</strong></br></td></tr>");	
	
	
		}
		if(pm=="chap1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Ass-Pass</strong></br></td></tr>");	
	
	
		}
		if(pm=="dhap1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Ass-Pass</strong></br></td></tr>");	
	
	
		}
		if(pm=="deap1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Looking Arround</strong></br></td></tr>");	
	
	
		}
		if(pm=="dhhn1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Rimjhim</strong></br></td></tr>");	
	
	
		}
		if(pm=="dhmh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Ganit Ka Jadu</strong></br></td></tr>");	
	
	
		}
		if(pm=="deen1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Marigold</strong></br></td></tr>");	
	
	
		}
		if(pm=="demh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Math-Magic</strong></br></td></tr>");	
	
	
		}
		if(pm=="ehap1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Ass-Pass</strong></br></td></tr>");	
	
	
		}
		if(pm=="eeap1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Looking Arround</strong></br></td></tr>");	
	
	
		}
		if(pm=="ehmh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Ganit</strong></br></td></tr>");	
	
	
		}
		if(pm=="eemh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Math-Magic</strong></br></td></tr>");	
	
	
		}
		if(pm=="eeen1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Marigold</strong></br></td></tr>");	
	
	
		}
		if(pm=="ehhn1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Rimjhim</strong></br></td></tr>");	
	
	
		}
		if(pm=="fhvs1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Vasant</strong></br></td></tr>");	
	
	
		}
		if(pm=="fhdv1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Durva</strong></br></td></tr>");	
	
	
		}
		if(pm=="fhbr1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Bal Ram Katha</strong></br></td></tr>");	
	
	
		}
		if(pm=="fehl1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Honeysuckle</strong></br></td></tr>");	
	
	
		}
		if(pm=="fepw1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>A Pact with the Sun</strong></br></td></tr>");	
	
	
		}
		if(pm=="femh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Mathematics</strong></br></td></tr>");	
	
	
		}
		if(pm=="fhmh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Ganit</strong></br></td></tr>");	
	
	
		}
		if(pm=="fess1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>History-Our Past I</strong></br></td></tr>");	
	
	
		}
		if(pm=="fhss1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Itihas-Hamare Atit I</strong></br></td></tr>");	
	
	
		}
		if(pm=="fess2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>The Earth: Our Habitat</strong></br></td></tr>");	
	
	
		}
		if(pm=="fhss2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Prithvi: Hamara Avas</strong></br></td></tr>");	
	
	
		}
		if(pm=="fess3")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Social and Political Life-I</strong></br></td></tr>");	
	
	
		}
		if(pm=="fhss3")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Samajik Evam Rajnitik Jeevan</strong></br></td></tr>");	
	
	
		}
		if(pm=="fhsk1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Ruchira</strong></br></td></tr>");	
	
	
		}
		if(pm=="fhsc1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Vigyan</strong></br></td></tr>");	
	
	
		}
		if(pm=="fesc1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Science</strong></br></td></tr>");	
	
	
		}
		if(pm=="ghmh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Ganit</strong></br></td></tr>");	
	
	
		}
		if(pm=="gemh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Mathematics</strong></br></td></tr>");	
	
	
		}
		if(pm=="gesc1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Science</strong></br></td></tr>");	
	
	
		}
		if(pm=="ghsc1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Vigyan</strong></br></td></tr>");	
	
	
		}
		if(pm=="gehc1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Honeycomb</strong></br></td></tr>");	
	
	
		}
		if(pm=="geah1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>The Alian Hand Supplementry</strong></br></td></tr>");	
	
	
		}
		if(pm=="ghvs1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Vasant</strong></br></td></tr>");	
	
	
		}
		if(pm=="ghdv1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Durva Bhag-2</strong></br></td></tr>");	
	
	
		}
		if(pm=="ghmb1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Bal Mahabharat Katha</strong></br></td></tr>");	
	
	
		}
		if(pm=="ghsk1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Ruchira</strong></br></td></tr>");	
	
	
		}
		if(pm=="gess1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>History-Our Pasts II</strong></br></td></tr>");	
	
	
		}
		if(pm=="ghss1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Itihas-Hamare Atit II</strong></br></td></tr>");	
	
	
		}
		if(pm=="gess2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Geography-Our Environment</strong></br></td></tr>");	
	
	
		}
		if(pm=="ghss2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Bhugol-Hamare Paryavaran</strong></br></td></tr>");	
	
	
		}
		if(pm=="gess3")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Social and Political Life-2</strong></br></td></tr>");	
	
	
		}
		if(pm=="ghss3")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Samkalin aur Rajniti Jeevan-2</strong></br></td></tr>");	
	
	
		}if(pm=="guss3")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Samajik Aur Siyasi Zindagi</strong></br></td></tr>");	
	
	
		}
		if(pm=="hhsk1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Ruchira</strong></br></td></tr>");	
	
	
		}
		if(pm=="heih1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>It So Happened</strong></br></td></tr>");	
	
	
		}
		if(pm=="hehd1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Honeydew</strong></br></td></tr>");	
	
	
		}
		if(pm=="hemh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Mathematics</strong></br></td></tr>");	
	
	
		}
if(pm=="heep2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Exemplar Problems</strong></br></td></tr>");	
	
	
		}
		if(pm=="hhep2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Exemplar Problems</strong></br></td></tr>");	
	
	
		}
		
		if(pm=="hhmh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Ganit</strong></br></td></tr>");	
	
	
		}
		if(pm=="hhbk1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Bharat ki Khoj</strong></br></td></tr>");	
	
	
		}
		if(pm=="hhsb1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Sanshipt Budhcharit</strong></br></td></tr>");	
	
	
		}
		if(pm=="hhdv1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Durva</strong></br></td></tr>");	
	
	
		}
		if(pm=="hhvs1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Vasant</strong></br></td></tr>");	
	
	
		}
		if(pm=="hhsc1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Vigyan</strong></br></td></tr>");	
	
	
		}
		if(pm=="hesc1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Science</strong></br></td></tr>");	
	
	
		}
		if(pm=="hess4")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Resourse and Developement (Geography)</strong></br></td></tr>");	
	
	
		}
		if(pm=="hhss4")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Sansadhan aur Vikas (Bhugol)</strong></br></td></tr>");	
	
	
		}
		if(pm=="hess3")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Social and Political Life</strong></br></td></tr>");	
	    }
		if(pm=="hhss3")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Samajik avam Rajnitik Jeevan</strong></br></td></tr>");	
		}
		if(pm=="hhss1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Hamare Atit III (Itihas)</strong></br></td></tr>");	
	
	
		}
		if(pm=="hess1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Our Past III (Part I)</strong></br></td></tr>");	
	
	
		}
		if(pm=="hess2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Our Past III </strong></br></td></tr>");	
		
	}
	if(pm=="hhss2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Hamare Atit III (Bhag-II)</strong></br></td></tr>");
	
		}
		if(pm=="leac1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Accountancy Part I </strong></br></td></tr>");	
	
	
		}
		if(pm=="keoc1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Floriculturist</strong></br></td></tr>");	
		}
		if(pm=="keda1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>General Duty Assistant</strong></br></td></tr>");	
	
	
		}
		
		if(pm=="leca1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Computerised Accounting System</strong></br></td></tr>");	
	
	
		}
		if(pm=="leac2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Accountancy Part II </strong></br></td></tr>");	
		}
		if(pm=="lhac1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Lekhashastra Part I</strong></br></td></tr>");	
		}
		if(pm=="lhac2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Lekhashastra Part II </strong></br></td></tr>");	
		}
		if(pm=="lebo1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Biology</strong></br></td></tr>");	
		}
		if(pm=="lhbo1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Jeev Vigyan </strong></br></td></tr>");	
		}if(pm=="lubo1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Hayatiyaat</strong></br></td></tr>");	
		}
		if(pm=="lebs1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Business Studies I </strong></br></td></tr>");	
		}
		if(pm=="lebs2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Business Studies II</strong></br></td></tr>");	
		}
		if(pm=="lhbs1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Vyavasai Adhyan I </strong></br></td></tr>");	
		}
		if(pm=="lhbs2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Vyavasai Adhyan II </strong></br></td></tr>");	
		}
		if(pm=="lech1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>chemistry I </strong></br></td></tr>");	
		}
		if(pm=="lech2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>chemistry II</strong></br></td></tr>");	
		}
		if(pm=="lhch1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Rasayan Vigyan I </strong></br></td></tr>");	
		}
		if(pm=="lhch2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Rasayan Vigyan II </strong></br></td></tr>");	
		}
		if(pm=="luch1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Keemiya I </strong></br></td></tr>");	
		}
		if(pm=="luch2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Keemiya II </strong></br></td></tr>");	
		}
		if(pm=="jhmh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Ganit </strong></br></td></tr>");	
		}
		if(pm=="jemh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Mathematics </strong></br></td></tr>");	
		}if(pm=="jumh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Riyazi </strong></br></td></tr>");	
		}
		if(pm=="jesc1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Science </strong></br></td></tr>");	
		}
		if(pm=="jhsc1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Vigyan </strong></br></td></tr>");	
		}
		if(pm=="jusc1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Science (Urdu)</strong></br></td></tr>");	
		}
		if(pm=="jess1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Contemporary India </strong></br></td></tr>");	
		}
		if(pm=="jess2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Understanding Economic Development </strong></br></td></tr>");	
		}
		if(pm=="jess3")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>India and the Contemporary World-II </strong></br></td></tr>");	
		}
		if(pm=="jess4")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Democratic Politics</strong></br></td></tr>");	
		}
		if(pm=="jhss1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Samkalin Bharat</strong></br></td></tr>");	
		}
		if(pm=="jhss2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Arthik Vikas ki Samajh</strong></br></td></tr>");	
		}
		if(pm=="jhss3")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Bharat Aur Samakalin Vishav-2 </strong></br></td></tr>");	
		}if(pm=="jhss4")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Loktantrik Rajniti </strong></br></td></tr>");	
		}
		if(pm=="juss1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Aasri Hindustan-II</strong></br></td></tr>");	
		}
		if(pm=="juss2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Maashi Taraqqui Ki Samajh</strong></br></td></tr>");	
		}
		if(pm=="juss3")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Hindustan Aur Asri Duniya</strong></br></td></tr>");	
		}if(pm=="juss4")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Jamhuri Siyasat-II</strong></br></td></tr>");	
		}

		if(pm=="jeff1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>First Flight</strong></br></td></tr>");	
		}
		if(pm=="jefp1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Footprints without Feet </strong></br></td></tr>");	
		}
		if(pm=="jhsk1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Shemushi </strong></br></td></tr>");	
		}
		
		if(pm=="jhks1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Kshitij-2 </strong></br></td></tr>");	
		}if(pm=="jhkr1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Kritika </strong></br></td></tr>");	
		}if(pm=="jhsy1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Sanchayan Bhag-2 </strong></br></td></tr>");	
		}if(pm=="jhsp1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Sparsh </strong></br></td></tr>");	
		}
		if(pm=="kect1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Computers and Communication Technology </strong></br></td></tr>");	
		
		}
		if(pm=="kect2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Computers and Communication Technology </strong></br></td></tr>");	
		
		}if(pm=="kuct1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Computer Aur Muwaslati Technology I</strong></br></td></tr>");	
		
		}
		if(pm=="kuct2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Computer Aur Muwaslati Technology II </strong></br></td></tr>");	
		
		}
		if(pm=="syit1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Information Technology in Schools</strong></br></td></tr>");	
		
		}
		
		if(pm=="kebo1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Biology </strong></br></td></tr>");	
		
		}
		if(pm=="kehe1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Human Ecology and Family Sciences Part I  </strong></br></td></tr>");	
		
		}
		if(pm=="lehe1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Human Ecology and Family Sciences Part I  </strong></br></td></tr>");	
		
		}
		if(pm=="lehe2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Human Ecology and Family Sciences Part II  </strong></br></td></tr>");	
		
		}
		if(pm=="kehe2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Human Ecology and Family Sciences Part II  </strong></br></td></tr>");	
		
		}
		if(pm=="khbo1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Jeev Vigyan </strong></br></td></tr>");	
			
		}
		if(pm=="kebs1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Business Studies </strong></br></td></tr>");	
		
		}
		if(pm=="khbs1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Vyavsay Adhyanan </strong></br></td></tr>");	
		
		}if(pm=="kubs1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Karobari Mutalah I </strong></br></td></tr>");	
		
		}
		if(pm=="kegy2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Fundamental of Physical Geography </strong></br></td></tr>");	
			
		}if(pm=="khgy2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Bhutiq Bhugol ke Mul Sidhant </strong></br></td></tr>");	
		
		}if(pm=="kugy2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Tabai Gugraphiya ke Mubadiyat </strong></br></td></tr>");	
		
		}if(pm=="kegy3")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Pratical Work in Geography </strong></br></td></tr>");	
		
		}if(pm=="khgy3")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Bhugol Main Prayogatmak Karya </strong></br></td></tr>");	
			
		}if(pm=="kegy1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>India Physical Environment </strong></br></td></tr>");	
		
		}if(pm=="khgy1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Bhart Bhautik Paryabaran </strong></br></td></tr>");	
			
		}
		if(pm=="kemh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Mathematics </strong></br></td></tr>");	
		
		}if(pm=="khmh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Ganit </strong></br></td></tr>");	
			
		}if(pm=="kumh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Riyazi I </strong></br></td></tr>");	
			
		}
		if(pm=="kcpy1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Introduction to Psychology </strong></br></td></tr>");	
			
		}
		if(pm=="khpy1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Manovigyan </strong></br></td></tr>");	
			
		}if(pm=="kupy1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Nafsiyaat </strong></br></td></tr>");	
			
		}
		if(pm=="khsk1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Bhaswati</strong></br></td></tr>");	
			
		}
		if(pm=="khsk2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Shashwati </strong></br></td></tr>");	
			
		}
		if(pm=="keac1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Financial Accounting-I </strong></br></td></tr>");	
			
		}if(pm=="khac1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Lekhashastra-I </strong></br></td></tr>");	
			
		}if(pm=="keac2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Accountancy-II</strong></br></td></tr>");	
			
		}if(pm=="kuac1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Khatadari-I </strong></br></td></tr>");	
			
		}if(pm=="khac2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Lekhashastra-II </strong></br></td></tr>");	
			
		}if(pm=="kuac2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Khatadari-II </strong></br></td></tr>");	
			
		}if(pm=="kefa1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>An Introduction to Indian Art Part-I</strong></br></td></tr>");	
			
		}
		if(pm=="khfa1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Bhartiya kala ek parichay</strong></br></td></tr>");	
			
		}if(pm=="kuna1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Nai Awaz </strong></br></td></tr>");	
			
		}
		if(pm=="kuga1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Gulzar-e-Adab</strong></br></td></tr>");	
			
		}
		if(pm=="kuku1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Khyabane Urdu</strong></br></td></tr>");	
			
		}if(pm=="kudh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Dhanak</strong></br></td></tr>");	
			
		}
		
		if(pm=="kucw1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Takhleequi Jauhar</strong></br></td></tr>");	
			
		}
		
		
		if(pm=="khsr1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Srijan</strong></br></td></tr>");	
			
		}
		
		if(pm=="iebe1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Beehive</strong></br></td></tr>");	
			
		}if(pm=="iemo1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Moments Supplementary Reader </strong></br></td></tr>");	
			
		}
		
		if(pm=="jewe2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Words and Expressions -II</strong></br></td></tr>");	
			
		}
		
		if(pm=="iewe1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Words and Expressions</strong></br></td></tr>");	
			
		}
		if(pm=="ihks1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Kshitij </strong></br></td></tr>");	
			
		}if(pm=="ihsp1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Sprash </strong></br></td></tr>");	
			
		}if(pm=="ihkr1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Kritika</strong></br></td></tr>");	
			
		}
		if(pm=="ihsa1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Sanchayan</strong></br></td></tr>");	
			
		}if(pm=="ihsh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Shemushi Prathmo</strong></br></td></tr>");	
			
		}if(pm=="iemh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Mathematics</strong></br></td></tr>");	
			
		}if(pm=="ihmh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Ganit</strong></br></td></tr>");	
			
		}if(pm=="iesc1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Science</strong></br></td></tr>");	
			
		}if(pm=="ihsc1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Vigyan</strong></br></td></tr>");	
			
		}if(pm=="iess4")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Democratic Politics</strong></br></td></tr>");	
			
		}if(pm=="ihss4")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Loktantrik Rajniti</strong></br></td></tr>");	
			
		}if(pm=="iess1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Contemporary India</strong></br></td></tr>");	
			
		}if(pm=="ihss1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Samkalin Bharat</strong></br></td></tr>");	
			
		}
		if(pm=="ihss2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Arthashastra</strong></br></td></tr>");	
			
		}if(pm=="iuss1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Aasri Hindustan (Urdu)</strong></br></td></tr>");	
			
		}if(pm=="iuss2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Mashiyat (Urdu)</strong></br></td></tr>");	
			
		}
		if(pm=="iehp1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Health and Physical Education</strong></br></td></tr>");	
			
		}
		
		if(pm=="khtp1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Tabla evam Pakhawaj</strong></br></td></tr>");	
			
		}
		if(pm=="khgv1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Hindustani Sangeet Gayan Evam Vadan</strong></br></td></tr>");	
			
		}
		if(pm=="jehp1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Health and Physical Education</strong></br></td></tr>");	
			
		}
		if(pm=="kehp1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Health and Physical Education</strong></br></td></tr>");	
			
		}
		if(pm=="ievc1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Cashier</strong></br></td></tr>");	
			
		}
		if(pm=="ieva1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Store Operations Assistant</strong></br></td></tr>");	
			
		}
		if(pm=="ievs1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Solanceous Crop Cultivator</strong></br></td></tr>");	
			
		}
		if(pm=="ievt1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Assistant Beauty Therapist</strong></br></td></tr>");	
			
		}
		if(pm=="ievw1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Animal Health Worker (Agriculture)</strong></br></td></tr>");	
			
		}
		
		if(pm=="ieve1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Health Embroiderer (Addawala)</strong></br></td></tr>");	
			
		}
		if(pm=="ievh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Health Embroiderer </strong></br></td></tr>");	
			
		}
		if(pm=="iepg1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Plumber General</strong></br></td></tr>");	
			
		}
		
		
		if(pm=="iess2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Economics</strong></br></td></tr>");	
			
		}
		if(pm=="iess3")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>India and the Contemporary World-I</strong></br></td></tr>");	
			
		}
		if(pm=="ihss3")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Bharat Aur Samkalin Vishwa-I</strong></br></td></tr>");	
			
		}
		if(pm=="kech1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Chemistry Part-I</br></td></tr>");	
			
		}
		if(pm=="khch1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Rasayan Vigyan bhag-I</strong></br></td></tr>");	
			
		}if(pm=="kuch1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Keemiya I</br></td></tr>");	
			
		}
		if(pm=="kech2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Chemistry Part II</strong></br></td></tr>");	
			
		}if(pm=="khch2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Rasayan Vigyan bhag-II</strong></br></td></tr>");	
			
		}if(pm=="kuch2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Keemiya II</strong></br></td></tr>");	
			
		}if(pm=="kuta1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Tareekh-e-Alam per Mabni Mauzuaat Part I</strong></br></td></tr>");	
			
		}
		if(pm=="keec1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Indian Economic Development</strong></br></td></tr>");	
			
		}if(pm=="khec1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Bhartiya Airthvavstha Ka Vikash  </strong></br></td></tr>");	
			
		}
		if(pm=="khar1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Aroh</strong></br></td></tr>");	
			
		}if(pm=="khat1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Antra</strong></br></td></tr>");	
			
		}if(pm=="khan1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Antral</strong></br></td></tr>");	
			
		}if(pm=="khvt1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Vitan</strong></br></td></tr>");	
			
		}
		if(pm=="keps1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Political Theory</strong></br></td></tr>");	
			
		}if(pm=="khps1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Raajneeti Sidhant</strong></br></td></tr>");	
			
		}if(pm=="kups1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Hindustan Aain Aur Kam</strong></br></td></tr>");	
			
		}if(pm=="keps2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>India Constitution at Work</strong></br></td></tr>");	
			
		}if(pm=="khps2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Bharat ka Samvidhan Sidhant aur Vavhar</strong></br></td></tr>");	
			
		}if(pm=="kups2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Siyasi Nazaria</strong></br></td></tr>");	
			
		}if(pm=="lhar1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Aroh</strong></br></td></tr>");	
			
		}if(pm=="lhat1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Antra</strong></br></td></tr>");	
			
		}if(pm=="lhvt1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Vitan</strong></br></td></tr>");	
			
		}if(pm=="lham1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Abhivyakti Aur Madhyam</strong></br></td></tr>");	
			
		}if(pm=="lhan1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Antral Bhag 2</strong></br></td></tr>");	
			
		}
		if(pm=="lhsk1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Bhaswati</strong></br></td></tr>");	
			
		}
		if(pm=="lhsk2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Shaswati</strong></br></td></tr>");	
			
		}
		if(pm=="leph1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Physics Part-I</strong></br></td></tr>");	
			
		}
		if(pm=="leph2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Physics Part-II</strong></br></td></tr>");	
			
		}
		if(pm=="lhph1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Bhautiki-I</strong></br></td></tr>");	
			
		}
		if(pm=="lhph2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Bhautiki-II</strong></br></td></tr>");	
			
		}
if(pm=="luph1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Tabiyaat-I</strong></br></td></tr>");	
			
		}
		if(pm=="luph2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Tabiyaat-II</strong></br></td></tr>");	
			
		}
		if(pm=="lepy1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Psychology</strong></br></td></tr>");	
			
		}
		if(pm=="lhpy1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Manovigyan</strong></br></td></tr>");	
			
		}
		if(pm=="leps1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Contemporary World Politics</strong></br></td></tr>");	
			
		}
		if(pm=="leps2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Politics in India Since Independence</strong></br></td></tr>");	
			
		}
		if(pm=="lhps1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Samkalin Vishwa Rajniti</strong></br></td></tr>");	
			
		}
		if(pm=="lhps2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Swatantra Bharat Mein Rajniti-II</strong></br></td></tr>");	
			
		}if(pm=="lups1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Aasri Alami Siyasat</strong></br></td></tr>");	
			
		}if(pm=="luab1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Azadi Ke Baad Hindustan Ki Siyasat</strong></br></td></tr>");	
			
		}
		if(pm=="lesy1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Indian Society</strong></br></td></tr>");	
			
		}
		if(pm=="lesy2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Social Change and Development in India</strong></br></td></tr>");	
			
		}if(pm=="lhsy1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Bhartiya Samaj</strong></br></td></tr>");	
			
		}if(pm=="lhsy2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Bharat main Samajik Parivartan aur Vikas</strong></br></td></tr>");	
			
		}if(pm=="lusy2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Hindustan Mein Samaji Tabdili Aur Taraqqi </strong></br></td></tr>");	
			
		}if(pm=="lehs1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Themes in Indian History-I</strong></br></td></tr>");	
			
		}
		if(pm=="lhhs1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Bharatiya Itihas ke kuchh Vishay-I</strong></br></td></tr>");	
			
		}if(pm=="lehs2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Themes in Indian History-II</strong></br></td></tr>");	
			
		}
		if(pm=="lhhs2")
		{ 
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Bharatiya Itihas ke kuchh Vishay-II</strong></br></td></tr>");	
			
		}
		if(pm=="lehs3")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Themes in Indian History-III</strong></br></td></tr>");	
			
		}
		if(pm=="lhhs3")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Bharatiya Itihas ke kuchh Vishay-III</strong></br></td></tr>");	
			
		}
		if(pm=="leec1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Introductory Macroeconomics</strong></br></td></tr>");	
			
		}
		if(pm=="leec2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Introductory Microeconomics</strong></br></td></tr>");	
			
		}if(pm=="lhec1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Samashty Arthshastra Ek Parichay</strong></br></td></tr>");	
			
		}if(pm=="lhec2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Vyashthi Arthashastra- Ek Parichay </strong></br></td></tr>");	
			
		}
		if(pm=="iumh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Reyazi (Urdu)</strong></br></td></tr>");	
			
		}if(pm=="iusc1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Science (Urdu)</strong></br></td></tr>");	
			
		}
		if(pm=="iugu1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Gulzare-e-urdu</strong></br></td></tr>");	
			
		}
		if(pm=="iuna1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Nawa-e-urdu</strong></br></td></tr>");	
			
		}if(pm=="iujp1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Jaan Pahechan</strong></br></td></tr>");	
			
		}if(pm=="iudp1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Door Pass</strong></br></td></tr>");	
			
		}if(pm=="iusr1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Sab Rang</strong></br></td></tr>");	
			
		}if(pm=="iuau1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Urdu ki Adabi Asnaf</strong></br></td></tr>");	
			
		}
		if(pm=="legy1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Fundamentals of Human Geography</strong></br></td></tr>");	
			
		}
		if(pm=="legy2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>India -People And Economy</strong></br></td></tr>");	
			
		}if(pm=="legy3")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Practical Work in Geography Part II</strong></br></td></tr>");	
			
		}if(pm=="lhgy1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Manav Bhugol Ke Mool Sidhant</strong></br></td></tr>");	
			
		}if(pm=="lhgy2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Bharat log aur arthvyasastha(Bhugol)</strong></br></td></tr>");	
			
		}
		if(pm=="lhgy3")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Bhugol main pryogatmak karye</strong></br></td></tr>");	
			
		}
		if(pm=="iuss4")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Jamhuri Syasat(Urdu)</strong></br></td></tr>");	
			
		}
		if(pm=="iuhi1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Hindustan Aur Asri Dunia-I(Urdu)</strong></br></td></tr>");	
			
		}
		if(pm=="lekl1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Kaliedoscope</strong></br></td></tr>");	
			
		}
		if(pm=="lefl1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Flamingo</strong></br></td></tr>");	
			
		}
		if(pm=="levt1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Vistas</strong></br></td></tr>");	
			
		}
		if(pm=="kesy1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Introducing Sociology</strong></br></td></tr>");	
			
		}
		if(pm=="khsy1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Samaj Shastra Parichay-I</strong></br></td></tr>");	
			
		}if(pm=="kusy1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Samajiyaat Ka Tarf</strong></br></td></tr>");	
			
		}
		if(pm=="kesy2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Understanding Society</strong></br></td></tr>");	
			
		}
		if(pm=="khsy2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Samaj ka Bodh</strong></br></td></tr>");	
			
		}if(pm=="kusy2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Mutala-e-Muashira</strong></br></td></tr>");	
			
		}
		if(pm=="keww1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Woven Words</strong></br></td></tr>");	
			
		}
		if(pm=="kehb1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Hornbill</strong></br></td></tr>");	
			
		}
		if(pm=="kesp1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Snapshots Suppl.Reader English</strong></br></td></tr>");	
			
		}
		if(pm=="keph1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Physics Part-I</strong></br></td></tr>");	
			
		}if(pm=="keph2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Physics Part-II</strong></br></td></tr>");	
			
		}
		if(pm=="khph1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Bhautiki-I</strong></br></td></tr>");	
			
		}if(pm=="khph2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Bhautiki-II</strong></br></td></tr>");	
			
		}
if(pm=="kuph1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Tabiyaat-I</strong></br></td></tr>");	
			
		}if(pm=="kuph2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Tabiyaat-II</strong></br></td></tr>");	
			
		}
		if(pm=="lemh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Mathematics Part-I</strong></br></td></tr>");	
			
		}if(pm=="lemh2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Mathematics Part-II</strong></br></td></tr>");	
			
		}if(pm=="lhmh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Ganit-I</strong></br></td></tr>");	
			
		}if(pm=="lhmh2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Ganit-II</strong></br></td></tr>");	
			
		}
		if(pm=="lumh1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Riyazi-I</strong></br></td></tr>");	
			
		}if(pm=="lumh2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Riyazi-II</strong></br></td></tr>");	
			
		}
		if(pm=="kest1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Statistics for Economics</strong></br></td></tr>");	
			
		}
		if(pm=="keep5")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Exemplar Problem(English)</strong></br></td></tr>");	
			
		}
		if(pm=="feep2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Exemplar Problem</strong></br></td></tr>");	
			
		}
		
		
		
		
		if(pm=="kelm2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Lab Manual(English)</strong></br></td></tr>");	
			
		}
		
		
		if(pm=="khlm2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Lab Manual(Hindi)</strong></br></td></tr>");	
			
		}
		
		if(pm=="kelm3")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Lab Manual(English)</strong></br></td></tr>");	
			
		}
		if(pm=="kelm1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Lab Manual(English)</strong></br></td></tr>");	
			
		}
		
		
		if(pm=="lelm1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Lab Manual(English)</strong></br></td></tr>");	
			
		}
		if(pm=="lhlm1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Lab Manual(Hindi)</strong></br></td></tr>");	
			
		}
		
		if(pm=="lelm2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Lab Manual(English)</strong></br></td></tr>");	
			
		}
		if(pm=="lelm3")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Lab Manual(English)</strong></br></td></tr>");	
			
		}
		if(pm=="lhlm3")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Lab Manual(Hindi)</strong></br></td></tr>");	
			
		}
		if(pm=="ielm1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Lab Manual(English)</strong></br></td></tr>");	
			
		}
		if(pm=="ihlm1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Lab Manual(Hindi)</strong></br></td></tr>");	
			
		}
		if(pm=="jelm1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Lab Manual(English)</strong></br></td></tr>");	
			
		}
		
		
		if(pm=="jhlm1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Lab Manual(Hindi)</strong></br></td></tr>");	
			
		}
		
		
		
		
		if(pm=="feep1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Exemplar Problem(English)</strong></br></td></tr>");	
			
		}
		
		if(pm=="fhep1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Exemplar Problem(Hindi)</strong></br></td></tr>");	
			
		}
		if(pm=="khep5")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Exemplar Problem(Hindi)</strong></br></td></tr>");	
			
		}
		if(pm=="khst1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Sankhyiki</strong></br></td></tr>");	
			
		}
		if(pm=="jeep2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Exemplar Problem(English)</strong></br></td></tr>");	
			
		}
		if(pm=="jhep2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Exemplar Problem(Hindi)</strong></br></td></tr>");	
			
		}
		
		if(pm=="jeep1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Exemplar Problem(English)</strong></br></td></tr>");	
			
		}
		if(pm=="jhep1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Exemplar Problem(Hindi)</strong></br></td></tr>");	
			
		}
		if(pm=="keep4")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Exemplar Problem(English)</strong></br></td></tr>");	
			
		}
		if(pm=="khep4")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Exemplar Problem(Hindi)</strong></br></td></tr>");	
			
		}
		if(pm=="keep2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Exemplar Problem(English)</strong></br></td></tr>");	
			
		}
		if(pm=="khep2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Exemplar Problem(Hindi)</strong></br></td></tr>");	
			
		}
		if(pm=="keep3")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Exemplar Problem(English)</strong></br></td></tr>");	
			
		}
		if(pm=="khep3")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Exemplar Problem(Hindi)</strong></br></td></tr>");	
			
		}
		
		if(pm=="ieep2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Exemplar Problem(English)</strong></br></td></tr>");	
			
		}
		if(pm=="ihep2")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Exemplar Problem(Hindi)</strong></br></td></tr>");	
			
		}
		if(pm=="ieep1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Exemplar Problem(English)</strong></br></td></tr>");	
			
		}
		
		if(pm=="jsab1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Abhyaswaan Bhav II </strong></br></td></tr>");	
		
		}
		
		if(pm=="ihep1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' style='color:white' height='25' width='100%'><strong>Exemplar Problem(Hindi)</strong></br></td></tr>");	
			
		}
		if(pm=="kuiz1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' style='color:white' height='25' width='100%'><strong>Izhar Aur Zara-e-Izhar</strong></br></td></tr>");	
			
		}
		if(pm=="iuge1")
		{
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Geographia(Urdu)</strong></br></td></tr>");	
			
		}
		
		
		
				
		if(pm=="")
		{
			
		document.write("<tr><td bgcolor='#981F4D' style='color:white' height='25' width='100%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Persist</span></td><td align='right'><a href='textbook.php?" + pm + "=pr-" + cha + "'>(Open)</a></td></tr></table></td></tr>");	
		}
		
		if(pm=="syit1")
		{
			document.write("<tr><td bgcolor='#981F4D' style='color:white' height='25' width='100%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Errata</span></td><td align='right'><a href='textbook.php?" + pm + "=er-" + cha + "'>(Open)</a></td></tr></table></td></tr>");	
			}
		
		
			<!--document.write("<tr><td bgcolor='#EBEBEB' height='25' width='100%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Rationalised Content</span><img src=\"images/new.gif\"></td><td align='right'><a href='textbook.php?" + pm + "=rc-" + cha + "'>(Open)</a></td></tr></table></td></tr>");
		-->
	
	if(pm!="aemr1" && pm!="aejm1" && pm!="ahjm1" && pm!="ahsr1" && pm!="bejm1" && pm!="bhjm1" && pm!="bhsr1" && pm!="bemr1" && pm!="aush1" && pm!="bush1")  
	{
		document.write("<tr><td bgcolor='#EBEBEB' height='25' width='100%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Rationalised Content</span><img src=\"images/new.gif\"></td><td align='right'><a href='../textbook/pdf/Rationalised.pdf' target='myFrame'>(Open)</a></td></tr></table></td></tr>");
	}
		

	
		
		
		if(pm=="leps2" || pm=="lhps2" || pm=="lups2")
		{
		document.write("<tr><td bgcolor='#EBEBEB' height='25' width='100%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Corrigendum</span><img src=\"images/new.gif\"></td><td align='right'><a href='../textbook/pdf/corrigendum_PolScience.pdf' target='myFrame'>(Open)</a></td></tr></table></td></tr>");	
			
		}	
		if(pm!="syit1")
		{
				
				
			document.write("<tr><td bgcolor='#EBEBEB' height='25' width='100%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Prelims</span></td><td align='right'><a href='textbook.php?" + pm + "=ps-" + cha + "'>(Open)</a></td></tr></table></td></tr>");	
			
			}
		
			
		document.write("<tr><td bgcolor='#EBEBEB' height='25' width='100%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Guide for using QR Code</span></td><td align='right'><a href='../textbook/pdf/instruction.pdf' target='myFrame'>(Open)</a></td></tr></table></td></tr>");
		
		
		
			
			if(pm==""||pm=="")	
			{
			
			var dfg=parseInt(cha)+ 9;
			 
			
			for(i=9;i<=dfg;i++)
	{								 
	
			
	
	document.write("<tr><td bgcolor='#981F4D' style='color:white' height='25' width='50%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Chapter "+ i +"</span> </td><td align='right'><a href='textbook.php?" + pm + "=" + i + "-" + cha + "'>(Open)</a></td></tr></table></td></tr>");
	
											
		
		}
			
			}else if(pm=="jhsp1")
			{
			for(i=1;i<=7;i++)
	{								 
	
			
	
	document.write("<tr><td bgcolor='#EBEBEB' style='color:white' height='25' width='50%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Kavita "+ i +"</span> </td><td align='right'><a href='textbook.php?" + pm + "=" + i + "-" + cha + "'>(Open)</a></td></tr></table></td></tr>");
	
											
		
		}
		for(i=8;i<=14;i++)
	{								 
	
			
	 
	document.write("<tr><td bgcolor='#EBEBEB' style='color:white' height='25' width='50%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Chapter "+ i +"</span> </td><td align='right'><a href='textbook.php?" + pm + "=" + i + "-" + cha + "'>(Open)</a></td></tr></table></td></tr>");
	
											
		
		}
			}
			else if(pm=="lekl1")
			{
			document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Short Stories</strong></br></td></tr>");
			for(i=1;i<=5;i++)
	{								 
	
			
	
	document.write("<tr><td bgcolor='#EBEBEB' style='color:white' height='25' width='50%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Chapter "+ i +"</span> </td><td align='right'><a href='textbook.php?" + pm + "=" + i + "-" + cha + "'>(Open)</a></td></tr></table></td></tr>");
	
											
		
		}
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Poerty</strong></br></td></tr>");
		for(i=1;i<=8;i++)
	{								 
	
			
	
	document.write("<tr><td bgcolor='#EBEBEB' style='color:white' height='25' width='50%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Chapter"+ i +"</span> </td><td align='right'><a href='textbook.php?" + pm + "=" + 1+i + "-" + cha + "'>(Open)</a></td></tr></table></td></tr>");
	
											
		
		}
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Non Fiction</strong></br></td></tr>");
		for(i=1;i<=6;i++)
	{								 
	
			
	
	document.write("<tr><td bgcolor='#EBEBEB' style='color:white' height='25' width='50%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Chapter"+ i +"</span> </td><td align='right'><a href='textbook.php?" + pm + "=" + 2+i + "-" + cha + "'>(Open)</a></td></tr></table></td></tr>");
	
											
		
		}
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Drama</strong></br></td></tr>");
		for(i=1;i<=2;i++)
	{								 
	
			
	
	document.write("<tr><td bgcolor='#EBEBEB' style='color:white' height='25' width='50%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Chapter"+ i +"</span> </td><td align='right'><a href='textbook.php?" + pm + "=" + 3+i + "-" + cha + "'>(Open)</a></td></tr></table></td></tr>");
	
											
		
		}
			}
			else if(pm=="keww1")
			{
			document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Short Stories</strong></br></td></tr>");
			for(i=1;i<=8;i++)
	{								 
	
			
	
	document.write("<tr><td bgcolor='#EBEBEB' style='color:white' height='25' width='50%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Chapter "+ i +"</span> </td><td align='right'><a href='textbook.php?" + pm + "=" + i + "-" + cha + "'>(Open)</a></td></tr></table></td></tr>");
	
											
		
		}
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Poerty</strong></br></td></tr>");
		for(i=1;i<=9;i++)
	{								 
	
			
	
	document.write("<tr><td bgcolor='#EBEBEB' style='color:white' height='25' width='50%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Chapter"+ i +"</span></td><td align='right'><a href='textbook.php?" + pm + "=" + 1+i + "-" + cha + "'>(Open)</a></td></tr></table></td></tr>");
	
											
		
		}
		var lk=10;
		for(i=20;i<=22;i++)
	{								 
	
			
	
	document.write("<tr><td bgcolor='#EBEBEB' style='color:white' height='25' width='50%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Chapter"+ lk +"</span> </td><td align='right'><a href='textbook.php?" + pm + "=" + i + "-" + cha + "'>(Open)</a></td></tr></table></td></tr>");
	lk=lk+1;
											
		
		}
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Essay</strong></br></td></tr>");
		for(i=1;i<=7;i++)
	{								 
	
			
	
	document.write("<tr><td bgcolor='#EBEBEB' style='color:white' height='25' width='50%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Chapter"+ i +"</span> </td><td align='right'><a href='textbook.php?" + pm + "=" + 3+i + "-" + cha + "'>(Open)</a></td></tr></table></td></tr>");
	
											
		
		}
		
			}
			else if(pm=="lefl1")
			{
			document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Prose</strong></br></td></tr>");
			for(i=1;i<=8;i++)
	{								 
	
			
	
	document.write("<tr><td bgcolor='#EBEBEB' style='color:white' height='25' width='50%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Chapter "+ i +"</span> </td><td align='right'><a href='textbook.php?" + pm + "=" + i + "-" + cha + "'>(Open)</a></td></tr></table></td></tr>");
	
											
		
		}
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Poetry</strong></br></td></tr>");
		for(i=1;i<=5;i++)
	{								 
	
			
	
	document.write("<tr><td bgcolor='#EBEBEB' style='color:white' height='25' width='50%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Chapter"+ i +"</span> </td><td align='right'><a href='textbook.php?" + pm + "=" + 1+i + "-" + cha + "'>(Open)</a></td></tr></table></td></tr>");
	
											
		
		}
		
			}
			else if(pm=="lhat1")
			{
			for(i=1;i<=9;i++)
	{								 
	
			
	
	document.write("<tr><td bgcolor='#EBEBEB' style='color:white' height='25' width='50%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Kavita "+ i +"</span> </td><td align='right'><a href='textbook.php?" + pm + "=" + i + "-" + cha + "'>(Open)</a></td></tr></table></td></tr>");
	
											
		
		}
		for(i=10;i<=17;i++)
	{								 
	
			
	
	document.write("<tr><td bgcolor='#EBEBEB' style='color:white' height='25' width='50%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Story "+ i +"</span> </td><td align='right'><a href='textbook.php?" + pm + "=" + i + "-" + cha + "'>(Open)</a></td></tr></table></td></tr>");
	
											
		
		}
			}
			else if(pm=="kehb1")
			{
			document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Reading Skills</strong></br></td></tr>");
			for(i=1;i<=6;i++)
	{								 
	
			
	
	document.write("<tr><td bgcolor='#EBEBEB' style='color:white' height='25' width='50%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Chapter"+ i +"</span> </td><td align='right'><a href='textbook.php?" + pm + "=" + i + "-" + cha + "'>(Open)</a></td></tr></table></td></tr>");
	
											
		
		}
		document.write("<tr valign='top'><td class='st1' bgcolor='#981F4D' style='color:white' height='25' width='100%'><strong>Writing Skills</strong></br></td></tr>");
		for(i=1;i<=6;i++)
	{								 
	
			
	
	document.write("<tr><td bgcolor='#EBEBEB' style='color:white' height='25' width='50%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Chapter "+ i +"</span> </td><td align='right'><a href='textbook.php?" + pm + "=" + 1+i + "-" + cha + "'>(Open)</a></td></tr></table></td></tr>");
	
											
		
		}
			}
			else
			{	
	
var div1;
var td1;		 
	for(i=1;i<=cha;i++)
	{								 
	
			
	
	div1='div'+i;

								 
	
document.write("<tr><td bgcolor='#EBEBEB'  height='25' width='50%'><table width='100%'><tr><td id="+ i +" align='left' ><b><span class=\"sty1\" >Chapter "+ i +"</span> <\/td><td align='right'><a href='textbook.php?" + pm + "=" + i + "-" + cha + "'>(Open)</a><\/td><\/tr><\/table><\/td><\/tr>");	



//document.write("<div id="+ div1 +"  class='off'>");
		

//document.write("<\/div>");
	
											
		
		}
		}
		
		
		
		
		
		
		if(pm=="hhbk1"||pm=="hhvs1"||pm=="fhvs1")
		{
		document.write("<tr><td bgcolor='#EBEBEB' height='25' width='100%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Shabd Kosh</span></td><td align='right'><a href='textbook.php?" + pm + "=sk-" + cha + "'>(Open)</a></td></tr></table></td></tr>");	
		
		}
		if(pm=="lhpy1"||pm=="ihsc1"||pm=="khpy1"||pm=="khgy2"||pm=="kegy2"||pm=="khec1"||pm=="keec1"||pm=="ievc1"||pm=="ieva1"||pm=="ievt1"||pm=="ievh1"||pm=="kepc1" ||pm=="keoc1"||pm=="kefc1" ||pm=="legd1" ||pm=="kepy1"||pm=="lepy1")
		{
		document.write("<tr><td bgcolor='#EBEBEB' height='25' width='100%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Glossary</span></td><td align='right'><a href='textbook.php?" + pm + "=gl-" + cha + "'>(Open)</a></td></tr></table></td></tr>");	
		
		}
		if(pm=="fhbr1"||pm=="hhbk1")
		{
		document.write("<tr><td bgcolor='#EBEBEB' height='25' width='100%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Exercise</span></td><td align='right'><a href='textbook.php?" + pm + "=ex-" + cha + "'>(Open)</a></td></tr></table></td></tr>");	
		
		}
		if(pm=="lhch2"||pm=="keph1"||pm=="kemh1"||pm=="khmh1"||pm=="kumh1"||pm=="kech1"||pm=="kech2"||pm=="khch2"||pm=="kuch2" ||pm=="keph2"||pm=="khph1"||pm=="kuph1"||pm=="kuph2"||pm=="kuta1"||pm=="leph1"||pm=="lhph1"||pm=="lhph2"||pm=="luph1"||pm=="luph2"||pm=="hhmh1"||pm=="hemh1"||pm=="heep2"||pm=="hhep2"||pm=="feep1"||pm=="heep1"||pm=="ieep2"||pm=="ihep2"||pm=="ieep1"||pm=="ihep1"||pm=="fhep1"||pm=="feep2"||pm=="gemp1"||pm=="geep1"||pm=="ghmh1"||pm=="gemh1"||pm=="femh1"||pm=="fhmh1"||pm=="luch1"||pm=="luch2"||pm=="lumh1"||pm=="lumh2"||pm=="kubo1"||pm=="kedf1"||pm=="kubs1"||pm=="iemh1"||pm=="ihmh1"||pm=="lech1"||pm=="lhch1"||pm=="ievc1"||pm=="ieva1"||pm=="ieve1"||pm=="kevt1" ||pm=="keoc1" ||pm=="keda1" ||pm=="iesc1" ||pm=="khph2" ||pm=="lemh2" ||pm=="lhmh1" ||pm=="lemh1" ||pm=="lhmh2" ||pm=="jhmh1" ||pm=="jesc1" ||pm=="lech2"||pm=="iumh1"||pm=="iusc1"||pm=="guma1"||pm=="jemh1"||pm=="jhmh1"||pm=="jhsc1" )
		{
		document.write("<tr><td bgcolor='#EBEBEB' height='25' width='100%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Answers</span </td><td align='right'><a href='textbook.php?" + pm + "=an-" + cha + "'>(Open)</a></td></tr></table></td></tr>");	
		
		}
		if(pm=="fess3"||pm=="fhss3")
		{
		document.write("<tr><td bgcolor='#EBEBEB' height='25' width='100%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >References</span </td><td align='right'><a href='textbook.php?" + pm + "=rf-" + cha + "'>(Open)</a></td></tr></table></td></tr>");	
		
		}
		if(pm=="femh1"||pm=="fhmh1")
		{
		document.write("<tr><td bgcolor='#EBEBEB' height='25' width='100%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Brain Teasers</span </td><td align='right'><a href='textbook.php?" + pm + "=bt-" + cha + "'>(Open)</a></td></tr></table></td></tr>");	
		
		}
		if(pm=="ghmb1")
		{
		document.write("<tr><td bgcolor='#EBEBEB'  height='25' width='100%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Prashn Abhyas</span> </td><td align='right'><a href='textbook.php?" + pm + "=qa-" + cha + "'>(Open)</a></td></tr></table></td></tr>");	
		
		}
		if(pm=="huse1")
		{
		document.write("<tr><td bgcolor='#EBEBEB' height='25' width='100%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Index</span </td><td align='right'><a href='textbook.php?" + pm + "=in-" + cha + "'>(Open)</a></td></tr></table></td></tr>");	
				}
				if(pm=="jhkr1"||pm=="jhsy1"||pm=="ihkr1"||pm=="ihsa1"||pm=="lhvt1")
		{
		document.write("<tr><td bgcolor='#EBEBEB' height='25' width='100%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Lekhak Parichay</span </td><td align='right'><a href='textbook.php?" + pm + "=lp-" + cha + "'>(Open)</a></td></tr></table></td></tr>");	
				}
		if(pm=="fhsk1"||pm=="ghsk1")
		{
		document.write("<tr><td bgcolor='#EBEBEB' height='25' width='100%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Perisist</span </td><td align='right'><a href='textbook.php?" + pm + "=pr-" + cha + "'>(Open)</a></td></tr></table></td></tr>");	
				}
		var ge=19;
		if(pm=="luch1"||pm=="luch2"||pm=="luch2")
		{
		document.write("<tr><td bgcolor='#EBEBEB'  height='25' width='100%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Index</span></td><td align='right'><a href='textbook.php?" + pm + "=" + ge + "-" + cha + "'>(Open)</a></td></tr></table></td></tr>");	
		
		}
		
		if(pm=="jess1"||pm=="jsab1"||pm=="jhss1"||pm=="kech1"||pm=="khch1"||pm=="legy1"||pm=="legy2"||pm=="lhgy1"||pm=="lhgy2"||pm=="keph1"||pm=="khph1"||pm=="luch1"||pm=="kugy1" ||pm=="lhlm3" ||pm=="lech1"||pm=="lhch1" ||pm=="legy3" || pm=="jsab1" || pm=="khtp1")
		{
		
		document.write("<tr><td bgcolor='#EBEBEB'  height='25' width='100%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Appendix</span></td><td align='right'><a href='textbook.php?" + pm + "=a1-" + cha + "'>(Open)</a></td></tr></table></td></tr>");	
		}	
		if(pm=="kemh1"||pm=="jumh1"||pm=="khmh1"||pm=="kumh1"||pm=="ieep1" ||pm=="lumh1"||pm=="iemh1"||pm=="ihmh1"||pm=="lhmh1" ||pm=="lemh1" ||pm=="iumh1" ||pm=="jemh1" ||pm=="jhmh1" ||pm=="fess2" ||pm=="fhss2")
		{
		document.write("<tr><td bgcolor='#EBEBEB' height='25' width='100%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Appendix I</span> </td><td align='right'><a href='textbook.php?" + pm + "=a1-" + cha + "'>(Open)</a></td></tr></table></td></tr>");	
		document.write("<tr><td bgcolor='#EBEBEB'  height='25' width='100%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Appendix II</span> </td><td align='right'><a href='textbook.php?" + pm + "=a2-" + cha + "'>(Open)</a></td></tr></table></td></tr>");	
		}
		
		



/*test1*/                                                                                                                                                                                                                                                                                  
if(pm=="ahmh1"||pm=="aemh1")

{
		document.write("<tr><td bgcolor='#EBEBEB' height='25' width='100%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Teacher Notes</span></td><td align='right'><a href='textbook.php?" + pm + "=tn-" + cha + "'>(Open)</a></td></tr></table></td></tr>");	
		}

if(pm=="kemh1"||pm=="khmh1")

{
		document.write("<tr><td bgcolor='#EBEBEB'  height='25' width='100%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Supplementary Material</span></td><td align='right'><a href='textbook.php?" + pm + "=sm-" + cha + "'>(Open)</a></td></tr></table></td></tr>");	
		}
		
		
		if(pm=="jegy3"||pm=="jhgy3" ||pm=="legy3")
		{
		document.write("<tr><td bgcolor='#EBEBEB' height='25' width='100%'><table width='100%'><tr><td align='left'><b><span class=\"sty1\" >Annexure</span></td><td align='right'><a href='textbook.php?" + pm + "=ax-" + cha + "'>(Open)</a></td></tr></table></td></tr>");	
		}
/*		
document.write("<tr><tdbgcolor='#981F4D' style='color:white' height='25' width='100%'><b>Will be uploaded soon </a></td></tr>");	
*/
		document.write("<tr><td bgcolor='#EBEBEB' height='25' width='100%'><a href='../textbook/pdf/" + pm + "dd.zip'><b>Download complete book </a></td></tr>");	
	
		
		
		
		
		document.write("</table></div></td><td class='books-content' width='' valign='top' align='center'><div>");
		document.write("<div id='Layer2'><iframe  id='myFrame' name='myFrame' width='100%' height='1000' scrolling='no' marginwidth='0' marginheight='0' style='overflow:auto; border:0;'>");	
		
		
		document.write(" </iframe></div></td>");
									
     function queryStringValue(){  
    var name = new String();  
    var value = new String();  
    var querystring = document.location.href; 
	 
   
    querystring = querystring.split("?");
	  
    querystring = querystring[1].split("&");  
	 
    for(q=0;q<querystring.length;q++){  
        var pair = querystring[q].split("=");  
        name = pair[0].toLowerCase();  
        value = pair[1].toLowerCase(); 
		
		 
       
	//	this.open("../1.pdf", "Title", "width:300;height:;"); 
    } 
	var df=pair[1];
	var cm=df.split("-");
	var ss=cm[0];
	
	
	//<a href='"+link+"'>"+item[which][2]+"</a>
	
//document.write("<embed  style="background-attachment:scroll; elevation:lower;display:list-item" src="../1.pdf" width="100%" height="800" autostart="false" > </embed>");




var omyFrame = document.getElementById("myFrame");
     omyFrame.style.display="block";
	if(ss==0)
	{
	
	omyFrame.src = "../textbook/pdf/" + name+ "cc.jpg";
	//omyFrame.style.height = 700; //100px or 100% 
	omyFrame.style.width = 1000; //100px or 100% 
	omyFrame.style.align = "center";
		
	
	}
	if(ss==1)
	{
	omyFrame.src = "../textbook/pdf/" + name+ "01.pdf";
	
	}
	if(ss==2)
	{
	omyFrame.src = "../textbook/pdf/" + name + "02.pdf";
	
	}
	if(ss==3)
	{
	omyFrame.src = "../textbook/pdf/" + name + "03.pdf";
	
	}
	if(ss==4)
	{
	omyFrame.src = "../textbook/pdf/" + name + "04.pdf";
	
	}
	if(ss==5)
	{
	omyFrame.src = "../textbook/pdf/" + name + "05.pdf";
	
	}
	if(ss==6)
	{
	omyFrame.src = "../textbook/pdf/" + name + "06.pdf";
	
	}
	
	if(ss==7)
	{
	omyFrame.src = "../textbook/pdf/" + name + "07.pdf";
	}
	if(ss==8)
	{
	omyFrame.src = "../textbook/pdf/" + name + "08.pdf";
	}
	if(ss==9)
	{
	omyFrame.src = "../textbook/pdf/" + name + "09.pdf";
	}
	if(ss==10)
	{
	omyFrame.src = "../textbook/pdf/" + name + "10.pdf";
	}
	if(ss==11)
	{
	omyFrame.src = "../textbook/pdf/" + name + "11.pdf";
	}
	if(ss==12)
	{
	omyFrame.src = "../textbook/pdf/" + name + "12.pdf";
	}if(ss==13)
	{
	omyFrame.src = "../textbook/pdf/" + name + "13.pdf";
	}
	if(ss==14)
	{
	omyFrame.src = "../textbook/pdf/" + name + "14.pdf";
	}
	if(ss==15)
	{
	omyFrame.src = "../textbook/pdf/" + name + "15.pdf";
	}
	if(ss==16)
	{
	omyFrame.src = "../textbook/pdf/" + name + "16.pdf";
	}
	if(ss==17)
	{
	omyFrame.src = "../textbook/pdf/" + name + "17.pdf";
	}if(ss==18)
	{
	omyFrame.src = "../textbook/pdf/" + name + "18.pdf";
	}if(ss==19)
	{
	omyFrame.src = "../textbook/pdf/" + name + "19.pdf";
	}if(ss==20)
	{
	omyFrame.src = "../textbook/pdf/" + name + "20.pdf";
	}if(ss==21)
	{
	omyFrame.src = "../textbook/pdf/" + name + "21.pdf";
	}if(ss==22)
	{
	omyFrame.src = "../textbook/pdf/" + name + "22.pdf";
	}if(ss==23)
	{
	omyFrame.src = "../textbook/pdf/" + name + "23.pdf";
	}if(ss==24)
	{
	omyFrame.src = "../textbook/pdf/" + name + "24.pdf";
	}if(ss==25)
	{
	omyFrame.src = "../textbook/pdf/" + name + "25.pdf";
	}if(ss==26)
	{
	omyFrame.src = "../textbook/pdf/" + name + "26.pdf";
	}
	if(ss==27)
	{
	omyFrame.src = "../textbook/pdf/" + name + "27.pdf";
	}if(ss==28)
	{
	omyFrame.src = "../textbook/pdf/" + name + "28.pdf";
	}if(ss==29)
	{
	omyFrame.src = "../textbook/pdf/" + name + "29.pdf";
	}if(ss==30)
	{
	omyFrame.src = "../textbook/pdf/" + name + "30.pdf";
	}if(ss==31)
	{
	omyFrame.src = "../textbook/pdf/" + name + "31.pdf";
	}if(ss==32)
	{
	omyFrame.src = "../textbook/pdf/" + name + "32.pdf";
	}if(ss==33)
	{
	omyFrame.src = "../textbook/pdf/" + name + "33.pdf";
	}if(ss==34)
	{
	omyFrame.src = "../textbook/pdf/" + name + "34.pdf";
	}if(ss==35)
	{
	omyFrame.src = "../textbook/pdf/" + name + "35.pdf";
	}if(ss==36)
	{
	omyFrame.src = "../textbook/pdf/" + name + "36.pdf";
	}if(ss==37)
	{
	omyFrame.src = "../textbook/pdf/" + name + "37.pdf";
	}if(ss==38)
	{
	omyFrame.src = "../textbook/pdf/" + name + "38.pdf";
	}if(ss==39)
	{
	omyFrame.src = "../textbook/pdf/" + name + "39.pdf";
	}if(ss==40)
	{
	omyFrame.src = "../textbook/pdf/" + name + "40.pdf";
	}
	if(ss=="ps")
	{
	omyFrame.src = "../textbook/pdf/" + name + "ps.pdf";
	}
	if(ss=="rc")
	{
	omyFrame.src = "../textbook/pdf/" + name + "rc.pdf";
	}
	if(ss=="c1")
	{
	omyFrame.src = "../textbook/pdf/" + name + "c1.PNG";
	}
	if(ss=="c2")
	{
	omyFrame.src = "../textbook/pdf/" + name + "c2.PNG";
	}
	if(ss=="pr")
	{
	omyFrame.src = "../textbook/pdf/" + name + "pr.pdf";
	}
	if(ss=="ex")
	{
	omyFrame.src = "../textbook/pdf/" + name + "ex.pdf";
	}
	if(ss=="bt")
	{
	omyFrame.src = "../textbook/pdf/" + name + "bt.pdf";
	}
	if(ss=="rf")
	{
	omyFrame.src = "../textbook/pdf/" + name + "rf.pdf";
	}
	if(ss=="lp")
	{
	omyFrame.src = "../textbook/pdf/" + name + "lp.pdf";
	}
	if(ss=="er")
	{
	omyFrame.src = "../textbook/pdf/" + name + "er.pdf";
	}
	if(ss=="in")
	{
	omyFrame.src = "../textbook/pdf/" + name + "in.pdf";
	}
	if(ss=="sk")
	{
	omyFrame.src = "../textbook/pdf/" + name + "sk.pdf";
	}
	if(ss=="qa")
	{
	omyFrame.src = "../textbook/pdf/" + name + "qa.pdf";
	}
	
	if(ss=="pp")
	{
	omyFrame.src = "../textbook/pdf/" + name + "pp.pdf";
	}
	if(ss=="a1")
	{
	omyFrame.src = "../textbook/pdf/" + name + "a1.pdf";
	}
	if(ss=="a2")
	{
	omyFrame.src = "../textbook/pdf/" + name + "a2.pdf";
	}
	if(ss=="an")
	{
	omyFrame.src = "../textbook/pdf/" + name + "an.pdf";
	}
	if(ss=="ax")
	{
	omyFrame.src = "../textbook/pdf/" + name + "ax.pdf";
	}
	if(ss=="mg")
	{
	omyFrame.src = "../textbook/pdf/" + name + "mg.pdf";
	}
	if(ss=="lp")
	{
	omyFrame.src = "../textbook/pdf/" + name + "lp.pdf";
	}
//test
if(ss=="tn")
	{
	omyFrame.src = "../textbook/pdf/" + name + "tn.pdf";
	}


if(ss=="sm")
	{
	omyFrame.src = "../textbook/pdf/" + name + "sm.pdf";
	}

if(ss=="gl")
	{
	omyFrame.src = "../textbook/pdf/" + name + "gl.pdf";
	}
	if(ss=="dd")
	{
	omyFrame.src = "../textbook/pdf/" + name + "dd.zip";
	document.write("<a href='../textbook/pdf/" + name + "dd.zip'></a>");
	}
	if(ss=="null")
	{
	omyFrame.src = "../textbook/pdf/le/leac/leacn/leacnps.pdf";
	
	}
	
return " "; 
	
	
	
}  
document.write(queryStringValue());  
document.write("");
 }    
  
</script><table width="100%" style="font-size:20px !important;"><tbody><tr></tr></tbody></table>
  
 
  	
    	  
   
    </p>
		</td>
		</tr>
		</tbody>
		</table>
     </center>
              </div>
             
			  
			  
			  
              </div>                     
              </div>                     
              </div>                     

	


			<footer>
				<div class="container">
				<div class="foootsec">
					<div class="row" style="">
						<div class="col-md-12">
							<ul class="mb-0 list list-inline">
								<li class="list-inline-item"><a href="https://amritmahotsav.nic.in/" target="_blank"><img  src="images/AKAM-logo.png"></a></li>
								<li class="list-inline-item"><a href="http://data.gov.in" target="_blank"><img  src="images/data-gov_0.png"></a></li>
								<li class="list-inline-item"><a href="http://mygov.in" target="_blank"><img  src="images/mygovlogo.png"></a></li>
								<li class="list-inline-item"><a href="https://www.digitalindia.gov.in/" target="_blank"><img  src="images/Digital-india.png"></a></li>
								<li class="list-inline-item"><a href="https://www.education.gov.in/" target="_blank"><img  src="images/mhrd-logo.png"></a></li>
								<li class="list-inline-item"><a href="https://swayam.gov.in" target="_blank"><img  src="images/swayam.png"></a></li>
								<li class="list-inline-item"><a href="http://epathshala.nic.in/" target="_blank"><img  src="images/epathshala.png"></a></li>
								<li class="list-inline-item"><a href="https://www.g20.in/" target="_blank"><img  src="images/g20-logo.png"></a></li>
								<!--<li class="list-inline-item"><a href="http://missionlife-moefcc.nic.in/" target="_blank"><img  src="images/Mission-LiFE-Final-Logo.png"></a></li>-->
							</ul>
							
						</div>
						</div>
						<div class="text-center row" style="padding-bottom:25px;" >
						<div class="col-md-10 footer-links-new mg-auto" style="color:#666 !important">
							<a href="https://data.gov.in" target="_blank"></a>
							<a href="disclo_un_rti.php" target="_blank">RTI</a> &nbsp;I&nbsp; 
							<a href="privacy-policy.php" target="_blank">Privacy Policy</a> &nbsp;I&nbsp; 
							<a href="tamanna/index.html" target="_blank">Tamanna</a> &nbsp;I&nbsp;
							<a href="http://aeparc.org/" target="_blank">Health & Wellness</a> &nbsp;I&nbsp; 
							<a href="https://ictcurriculum.gov.in" target="_blank">ICT Curriculum</a> &nbsp;I&nbsp; 
							<a href="https://ncert.nic.in/ncertldd/index.html" target="_blank">Library</a> &nbsp;I&nbsp; 
							<a href="https://ncert.nic.in/QMTs/index.php" target="_blank">QMTs</a> &nbsp;I&nbsp; 
							<a href="ict-initiatives.php" target="_blank">ICT Initiatives</a>&nbsp;<!--I&nbsp; 
							<a href="https://www.ncwwomenhelpline.in" target="_blank">National Commission for Women (Helpline-7827170170)</a>-->
						
						
						</div>

						
						
						
						
					
					
					</div>
				</div>
			  </div>
										  
				
			  <style>
				    .icon{
				        height: 40px;
				        width: 40px;
				        border-radius: 50%;
				        display: inline-block;
				        margin-right: 5px;
				        color: white;
				        text-align: center;
				        line-height: 42px;
				    }
				    
				    .icon:hover{
				        color: white;
				    }
				    
				    .icon.fb{
				        background-color: #1877f2;
				    }
				    .icon.twitter{
				        background-color: #1da1f2;
				    }
				    .icon.yt{
				        background-color: #ff0000;
				    }
				    .icon.ins{
				        
				        background-image: linear-gradient(to right, red , #fdfd3e);
				    }
				    
				</style>
										  
				
			  <div id="brown-bg" style="padding-bottom: 10px">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 white-heading">
						 <p class="mb-1"><strong>FOLLOW NCERT</strong></p> 
						 
						 <a href="https://www.facebook.com/ncertofficial/" target="_blank" class="icon fb"><i class="fab fa-facebook-f"></i></a>
						 <a href="https://twitter.com/ncert" class="icon twitter" target="_blank"><i class="fab fa-twitter"></i></a><br/>
						 <a href="https://www.youtube.com/channel/UCT0s92hGjqLX6p7qY9BBrSA" class="icon yt" target="_blank"><i class="fab fa-youtube"></i></a>
						 <a href="https://www.instagram.com/ncertindia/" class="icon ins" style="background:#fffff" target="_blank"><i class="fab fa-instagram"></i></a>
						  
						  


						  
						</div>
						
						<div class="col-sm-4 white-heading" style="text-align:left">
						   <div class="mb-1"><strong>Contact Us</strong></div>
						   <div class="mb-2"><span><img src="images/placeholder3.png" style="height:24px" align="middle">NCERT, Sri Aurobindo Marg, New Delhi-110016</span></div>
							<div class="mb-2"><span><img src="images/envelope2.png" style="height:24px" align="middle"> dceta.ncert@nic.in</span><br></div>
							<div class=""><span><img src="images/telephone.png" style="height:24px" align="middle"> +91 8800440559 | +91 8448440632</span></div>
							
						</div>
						
						<div class="col-sm-4 white-heading" style="text-align:left">
						    <div class="mb-1"><strong>Important Helpline Numbers</strong></div>
							<div class="mb-2"><img src="images/telephone.png" style="height:24px" align="middle"><span> Women Helpline Number : 7827170170</span></div>
							<div class="mb-2"><img src="images/telephone.png" style="height:24px" align="middle"><span> Cybercrime Reporting Number : 1930</span></div>
							
							
						</div>
					</div> 
				</div>
				<div style="border-top:1px solid #eaeaea45;text-align:center;color:#fff;width:100%;margin-top:10px; padding: 10px 0px 0px 0px;">Copyright © <span id="demo"></span> | Developed By CIET, NCERT | Hosted By NIC</div>
			  </div>

			</footer>
  
 

 
<script>
var d = new Date();
document.getElementById("demo").innerHTML = d.getFullYear();
</script>

  
  
  
  
  
  
</body>
</html>