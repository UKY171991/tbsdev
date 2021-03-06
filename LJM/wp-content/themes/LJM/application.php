<?php 
/* Template Name: Application */

 get_header();?>

<section class="nit-banner">
        <?php 
	if ( has_post_thumbnail() ) :
		$thumbnail_id = get_post_thumbnail_id( $post->ID );
		$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
	?> 
         <img src="<?php the_post_thumbnail_url('full'); ?>" alt="" class="img-fluid img-banner">
         <?php else: ?>
        <img src="assets/images/bg/banner-contact.png" alt="" class="img-fluid img-banner">
         <?php endif; ?> 
        <div class="container">
         <?php dynamic_sidebar('logo'); ?>
       </div>
    </section>
    <section class="nit-breadcrumbs">
       <div class="container">
           <ul>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME | </a></li>
                <li><a href="#">APPLY</a></li>
            </ul>
       </div>
    </section>
    <section class="nit-apply-form">
        <div class="container">
<!-- 			<?php //echo get_template_directory_uri();?>/email.php -->
            <div class="nit-apply-form-box">
                <form action="" id="formsubmit" method='post'>
                    <div class="nit-form-box">
                        <div class="nit-box checkbox-box">
                            <h3 class="nit-title">PROGRAMME</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="chk1">Deck (Navigation) Option</label>
                                    <input type="checkbox" name="PROGRAMME1" id="chk1" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="chk2">Engine</label>
                                    <input type="checkbox" name="PROGRAMME2" id="chk2" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="nit-box">
                            <h3 class="nit-title">PERSONAL INFORMATION</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>FIRST NAME:</label>
                                    <input type="text" name="fname" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>MIDDLE NAME:</label>
                                    <input type="text" name="mname" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label >LAST NAME:</label>
                                    <input type="text" name="lname" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label >DATE OF BIRTH:</label>
                                    <input type="text" name="dob" id="datepicker1" autocomplete="off" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label >MI:</label>
                                    <input type="text" name="mi" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label >SEX:</label>
                                    <select name="gender" id="" class="form-control">
                                       <option>Select Gender</option>
                                        <option value='Male'>Male</option>
                                        <option value='Female'>Female</option>
                                       <!--  <option value='Others'>Others</option> -->
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label >STREET ADDRESS:</label>
                                    <input type="text" name="address" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label >HOUSE:</label>
                                    <input type="text" name="House" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label >SETTLEMENT:</label>
                                    <input type="text" name="Settlement" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label >CITY:</label>
                                    <input type="text" name="City" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label >ISLAND:</label>
                                    <input type="text" name="island" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label >COUNTRY:</label>
                                    <select name="country" id="" class="form-control">
                                       <option value="">Select Country</option>
                                        <option value='India'>India</option>
                                        <option value='Japan'>Japan</option>
                                        <option value='China'>China</option>
                                        <option value='Sri Lanka'>Sri Lanka</option>
                                        <option value='USA'>USA</option>
                                        <option value='UK'>UK</option>
                                        <option value='New Zealand'>New Zealand</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>PLACE OF BIRTH:</label>
                                    <input type="text" name="pob" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>P.O.BOX:</label>
                                    <input type="number" name="po" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>HOME PHONE:</label>
                                    <input type="number" name="residence" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>CELL PHONE: </label>
                                    <input type="number" name="phone" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>NATIONAL INSURANCE CARD NUMBER #:</label>
                                    <input type="text" name="ins" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>PASSPORT #:</label>
                                    <input type="text" name="passport" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label>EMAIL ADDRESS:</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="nit-box">
                            <h3 class="nit-title">EDUCATION / QUALIFICATIONS</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>PRIMARY SCHOOL ATTENDED:</label>
                                    <input type="text" name="hsattend" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>ADDRESS:</label>
                                    <input type="text" name="staddress" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>BJC RESULTS:</label>
                                    <input type="text" name="BJC" class="form-control">
                                </div>
                                
                               <div class="col-md-6">
                                    <label>YEAR TAKEN:</label>
                                    <input type="text" name="BJCyrtaken" class="form-control">
                                </div>
                                
                                
                                <div class="col-md-6">
                                    <label>BGCSE RESULTS:</label>
                                    <input type="text" name="BGCSE" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>YEAR TAKEN:</label>
                                    <input type="text" name="yrtaken" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label>SAT SCORE :</label>
                                    <input type="text" name="SAT" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>YEAR TAKEN:</label>
                                    <input type="text" name="SATtaken" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label>STCW Certificate(s):</label>
                                    <input type="text" name="STCW" class="form-control">
                                </div>
                                 <div class="col-md-6">
                                    <label>COLLEGE TRANSCRIPT:</label>
                                    <input type="text" name="colgcredit" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>YEARS ATTENDS:</label>
                                    <input type="text" name="certificate" class="form-control">
                                </div>

                            </div>
                        </div>
                        <div class="nit-box">
                            <h3 class="nit-title">EMPLOYMENT DETAILS</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>COMPANY:</label>
                                    <input type="text" name="cmpny" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>ADDRESS:</label>
                                    <input type="text" name="cmpnyadd" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>SUPERVISOR: </label>
                                    <input type="text" name="cmpnyvisor" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>PHONE:</label>
                                    <input type="text" name="cphone" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>JOB TITLE: </label>
                                    <input type="text" name="job" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>DUTIES:</label>
                                    <input type="text" name="duty" class="form-control">
                                </div>
                                <div class="checkbox-box">
                                    <div class="col-md-12">
                                        <div class="nit-inflex">
                                            <p>May we contact your previous supervisor for a
    reference?</p>
                                           <div class="d-flex">
                                               <div class="nit-flex">
                                                    <label for="chk3">Yes</label>
                                                    <input type="radio" name="EMPLOYMENT_DETAILS" value="Yes" id="chk3" class="form-control">
                                                </div>
                                                <div class="nit-flex">
                                                    <label for="chk4">No</label>
                                                    <input type="radio" name="EMPLOYMENT_DETAILS" value="No" id="chk4" class="form-control">
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nit-box">
                            <h3 class="nit-title">IDENTIFYING DOCUMENTS</h3>
                            <h3 class="nit-subtitle">PASSPORT</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>PASSPORT NO:</label>
                                    <input type="text" name="passno" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>PLACE OF ISSUE:</label>
                                    <input type="text" name="passissue" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>DATE OF ISSUE:</label>
                                    <input type="text" name="passdate" id="datepicker9" autocomplete="off"  class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>DATE OF EXPIRY:</label>
                                    <input type="text" name="passexpiry" id="datepicker2" autocomplete="off" class="form-control">
                                </div>
                            </div>
                            <h3 class="nit-subtitle">VISA DETAILS</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>VISA NO:</label>
                                    <input type="text" name="vino" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>PLACE OF ISSUE:</label>
                                    <input type="text" name="vissue" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>DATE OF ISSUE:</label>
                                    <input type="text" name="vdissue" id="datepicker10" autocomplete="off" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>DATE OF EXPIRY:</label>
                                    <input type="text" name="vdexpire" id="datepicker3" autocomplete="off" class="form-control">
                                </div>
                            </div>
                            <h3 class="nit-subtitle">NATIONALITY INSURANCE</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>NIB #:</label>
                                    <input type="text" name="nib" class="form-control">
                                </div>
                            </div>
                            <h3 class="nit-subtitle">SEAMAN???S RECORD BOOK</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>SEAMAN???S RECORD BOOK #:</label>
                                    <input type="text" name="seabook" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>PLACE OF ISSUE:</label>
                                    <input type="text" name="seaissue" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>DATE OF ISSUE:</label>
                                    <input type="text" name="seadate" id="datepicker4" autocomplete="off" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>DATE OF EXPIRY:</label>
                                    <input type="text" name="seaexpire" id="datepicker5" autocomplete="off" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <p>Please provide information regarding any other valid <b>Seaman???s Identification Book (SIB).</b></p>
                                </div>
                                <div class="col-md-6">
                                    <label>SEAMAN???S IDENTIFICATION BOOK :</label>
                                    <input type="text" name="seaidentify" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>DATE OF EXPIRY:</label>
                                    <input type="text" name="idexpire" id="datepicker6" autocomplete="off" class="form-control">
                                </div>    
                            </div>
                            <h3 class="nit-subtitle">YELLOW FEVER</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>YELLOW FEVER CERTIFICATE #</label>
                                    <input type="text" name="fcertify" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>DATE OBTAINED:</label>
                                    <input type="text" name="fod" id="datepicker11" autocomplete="off" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>DATE OF EXPIRY:</label>
                                    <input type="text" name="fdexpire" id="datepicker7" autocomplete="off" class="form-control">
                                </div>
                            </div>
                            <h3 class="nit-subtitle">NEXT OF KIN INFORMATION</h3>
                            <div class="row">
                                <div class="col-md-8">
                                    <label>FULL NAME:</label>
                                    <input type="text" name="kfname" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label>RELATIONSHIP:</label>
                                    <input type="text" name="krelate" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>HOME PHONE: </label>
                                    <input type="text" name="khphone" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>MOBILE PHONE: </label>
                                    <input type="text" name="kmphone" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>WORK PHONE: </label>
                                    <input type="text" name="kwphone" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>PLACE OF EMPLOYMENT: </label>
                                    <input type="text" name="kpemp" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>WORK PHONE: </label>
                                    <input type="text" name="kwphone" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label>EMAIL: </label>
                                    <input type="email" name="kemail" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="nit-box">
                            <h3 class="nit-title">DISCLAIMER AND SIGNATURE</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>I certify that my answers are true and complete to the best of my knowledge.
If this application leads to acceptance, I understand that false or misleading information in my application or interview
may result in my release.</p>
                                </div>
                                <div class="col-md-4">
                                    <label>SIGNATURE:</label>
                                    <input type="text" name="ksign" class="form-control">
                                </div>
                                <div class="col-md-3 ml-auto">
                                    <label>DATE:</label>
                                    <input type="text" name="kdate" id="datepicker8" autocomplete="off" class="form-control">
                                </div>
                            </div>
                        </div>
                        
                        <h3 class="nit-title">SUPPORTING DOCUMENTS</h3>
                        <h3 class="nit-subtitle2">Please provide ALL of the following items to support your application:</h3>
                        <ul>
                            <li>Passport</li>
                            <li>Nationality Insurance Card</li>
                            <li>Valid Police Record</li>
                            <li>2 Color Passport Photos</li>
                            <li>2 Character References with contact details</li>
                            <li>BGCSE Certificate</li>
                            <li>Official High School and College Transcripts</li>
                            <li>Seaman???s Record Book</li>
                            <li>Professional Licenses and Certificates</li>
                            <li>Application Fee Receipt Number </li>
                            <li>Reason for Rejection</li>
                        </ul>
                        
                        <div class="nit-box">
                            <h3 class="nit-title">Identifying Documents: US Visa Details</h3>
                            <p>Medical Records: Immunizations: MMR - Date/ Hepatitis - Date / Tetanus - Date / Yellow Fever - Date
/ Other (List with dates taken)</p>
                            <p>Supporting Documents: Please provide the office, for verification, the original of each copy submitted
electronically to support your application</p>
                        </div>
                        <div class="nit-box">
                            <h3 class="nit-title">FOR OFFICIAL USE ONLY</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>STUDENT NUMBER:</label>
                                    <input type="text" name="ofcstuno" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>MATH PLACEMENT: </label>
                                    <input type="text" name="mathplace" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>ENGLISH PLACEMENT: </label>
                                    <input type="text" name="engplace" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label>DEFICIENCIES: </label>
                                    <input type="text" name="defic" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>FEE RECEIPT# </label>
                                    <input type="text" name="feerecpt" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label>DATE: </label>
                                    <input type="text" name="ofcdate" id="datepicker12" autocomplete="off" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label>AMOUNT:</label>
                                    <input type="text" name="ofcamount" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label>ACCEPTED:</label>
                                    <div class="d-flex">
                                        <div class="nit-flex">
                                                <label for="chk5">Yes</label>
                                                <input id="chk5" type="radio" name="OFFICIAL_USE" value="Yes" class="form-control">
                                        </div>
                                        <div class="nit-flex">
                                                <label for="chk6">No</label>
                                                <input id="chk6" type="radio" name="OFFICIAL_USE" value="No" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label>REASON: </label>
                                    <input type="text" name="ofcreason" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>SIGNATURE:</label>
                                    <input type="text" name="ofcsign" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>DATE:</label>
                                    <input type="text" name="ofcdte" id="datepicker13" autocomplete="off" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>CHECKED BY:</label>
                                    <input type="text" name="ofcchk" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>DATE:</label>
                                    <input type="text" name="chkdate" id="chkdate" class="form-control">
                                </div>
								<input type="hidden" name="url" value="<?php echo get_template_directory_uri();?>">
                                

                                <div class="col-md-3">
                                    <input type="submit" name="submit" class="res-btn mt-4 btn-lg form-control" value="Submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        


<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
<script type="text/javascript">


	/* $("#formsubmit").on('submit',function(event){
		event.preventDefault();
		
		var chkdate = $("#chkdate").val();
		alert("fyhfjjyg");
		$.ajax({
			//url:'https://tbsdemo.com/dev/LJM/wp-content/themes/LJM/email.php',
			url:'/', //get_template_directory  // WP_CONTENT_DIR  //get_template_directory_uri()
			type:'POST',
			//data:"{chkdate:chkdate}",
			data:$(this).serialize(),
			success:function(response){
				alert(response);
				//alert('response');
			}
		});

		//$("div").text($("form").serialize());
	}); */
</script>




<?php  
 if(isset($_POST['submit'])){
	 
	 // file start 
	

if($_POST["EMPLOYMENT_DETAILS"] == "on"){
	$EMPLOYMENT_DETAILS = "Yes";
}else{
	$EMPLOYMENT_DETAILS = "No";
}

if($_POST["OFFICIAL_USE"] == "on"){
	$ACCEPTED = "Yes";
}else{
	$ACCEPTED = "No";
}

if($_POST["PROGRAMME1"] == "on"){
	$PROGRAMME1 = "Checked";
}else{
	$PROGRAMME1 = "";
}

if($_POST["PROGRAMME2"] == "on"){
	$PROGRAMME2 = "Checked";
}else{
	$PROGRAMME2 = "";
}

//header part

 header("Content-type: application/vinod.ms-word");
$filename="Newfile_docfile.doc";
header("Content-Disposition: attachment;Filename=".$filename,'w');

 //store in local file
//file_put_contents( "/files/sample.doc",$doc_body);
//readfile($filename);

//starting html tag
//


$data= "<html>

<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">


<body>";


//print the content
 $data .= '
<h1>PROGRAMME</h1>

<table>
<tr>
<th>Deck (Navigation) Option</th>
<td>'.$PROGRAMME1.'</td>
<th>Engine</th>
<td>'.$PROGRAMME2.'</td>
</tr>
</table>

<h1>PERSONAL INFORMATION</h1>

<table>
<tr>
<th>FIRST NAME</th>
<td>'.$_POST["fname"].'</td>
</tr>
<tr>
<th>LAST NAME</th>
<td>'.$_POST["lname"].'</td>
</tr>
<tr>
<th>Middle NAME</th>
<td>'.$_POST["mname"].'</td>
</tr>

<tr>
<th>DATE OF BIRTH</th>
<td>'.$_POST["dob"].'</td>
</tr>
<tr>
<th>MI</th>
<td>'.$_POST["mi"].'</td>
</tr>
<tr>
<th>SEX</th>
<td>'.$_POST["gender"].'</td>
</tr>

<tr>
<th>STREET ADDRESS</th>
<td>'.$_POST["address"].'</td>
</tr>
<tr>
<th>HOUSE</th>
<td>'.$_POST["House"].'</td>
</tr>
<th>SETTLEMENT</th>
<td>'.$_POST["Settlement"].'</td>
</tr>
<th>CITY</th>
<td>'.$_POST["City"].'</td>
</tr>
<tr>
<th>ISLAND</th>
<td>'.$_POST["island"].'</td>
</tr>
<tr>
<th>COUNTRY</th>
<td>'.$_POST["country"].'</td>
</tr>

<tr>
<th>PLACE OF BIRTH</th>
<td>'.$_POST["pob"].'</td>
</tr>
<tr>
<th>P.O.BOX</th>
<td>'.$_POST["po"].'</td>
</tr>

<tr>
<th>NATIONALITY INSURANCE #</th>
<td>'.$_POST["ins"].'</td>
</tr>
<tr>
<th>HOME PHONE</th>
<td>'.$_POST["residence"].'</td>
</tr>

<tr>
<th>MOBILE PHONE</th>
<td>'.$_POST["kmphone"].'</td>
</tr>
<tr>
<th>WORK PHONE</th>
<td>'.$_POST["kwphone"].'</td>
</tr>
<tr>
<th>PASSPORT #</th>
<td>'.$_POST["passport"].'</td>
</tr>

<tr>
<th>EMAIL ADDRESS</th>
<td>'.$_POST["email"].'</td>
</tr>

</table>

<h1>EDUCATION QUALIFICATIONS</h1>

<table>
<tr>
<th>PRIMARY SCHOOL ATTENDED</th>
<td>'.$_POST["hsattend"].'</td>
</tr>
<tr>
<th>ADDRESS</th>
<td>'.$_POST["staddress"].'</td>
</tr>
<tr>
<th>BJC RESULTS</th>
<td>'.$_POST["BJC"].'</td>
</tr>
<tr>
<th>YEAR TAKEN</th>
<td>'.$_POST["BJCyrtaken"].'</td>
</tr>

<tr>
<th>SAT SCORE</th>
<td>'.$_POST["SAT"].'</td>
</tr>
<tr>
<th>YEAR TAKEN</th>
<td>'.$_POST["SATtaken"].'</td>
</tr>  

<tr>
<th>STCW Certificate(s)</th>
<td>'.$_POST["STCW"].'</td>
</tr>


<tr>
<th>BGCSE RESULTS</th>
<td>'.$_POST["BGCSE"].'</td>
</tr>
<tr>
<th>YEAR TAKEN</th>
<td>'.$_POST["yrtaken"].'</td>
</tr>


<tr>
<th>COLLEGE CREDITS</th>
<td>'.$_POST["colgcredit"].'</td>
</tr>
<tr>
<th>CERTIFICATE ATTAINED</th>
<td>'.$_POST["certificate"].'</td>
</tr>
</table>

<h1>EMPLOYMENT DETAILS</h1>

<table>
<tr>
<th>COMPANY</th>
<th>ADDRESS</th>
</tr>
<tr>
<td>'.$_POST["cmpny"].'</td>
<td>'.$_POST["cmpnyadd"].'</td>
</tr>

<tr>
<th>SUPERVISOR</th>
<th>PHONE</th>
</tr>
<tr>
<td>'.$_POST["cmpnyvisor"].'</td>
<td>'.$_POST["cphone"].'</td>
</tr>

<tr>
<th>JOB TITLE</th>
<th>DUTIES</th>
</tr>
<tr>
<td>'.$_POST["job"].'</td>
<td>'.$_POST["duty"].'</td>
</tr>

<tr>
<td colspan="2">May we contact your previous supervisor for a reference?</td>
</tr>
<tr>
<td>'.$EMPLOYMENT_DETAILS.'</td>
</tr>
</table>


<h1>IDENTIFYING DOCUMENTS</h1>
<h4>PASSPORT</h4>
<table>
<tr>
<th>PASSPORT NO</th>
<th>PLACE OF ISSUE</th>
</tr>
<tr>
<td>'.$_POST["passno"].'</td>
<td>'.$_POST["passissue"].'</td>
</tr>

<tr>
<th>DATE OF ISSUE</th>
<th>DATE OF EXPIRY</th>
</tr>
<tr>
<td>'.$_POST["passdate"].'</td>
<td>'.$_POST["passexpiry"].'</td>
</tr>
</table>


<h4>VISA DETAILS</h4>
<table>
<tr>
<th>VISA NO</th>
<th>PLACE OF ISSUE</th>
</tr>
<tr>
<td>'.$_POST["vino"].'</td>
<td>'.$_POST["vissue"].'</td>
</tr>

<tr>
<th>DATE OF ISSUE</th>
<th>DATE OF EXPIRY</th>
</tr>
<tr>
<td>'.$_POST["vdissue"].'</td>
<td>'.$_POST["vdexpire"].'</td>
</tr>
</table>

<h4>NATIONALITY INSURANCE</h4>
<table>
<tr>
<th>NIB #</th>
</tr>
<tr>
<td>'.$_POST["nib"].'</td>
</tr>
</table>


<h4>SEAMAN???S RECORD BOOK</h4>
<table>
<tr>
<th>SEAMAN???S RECORD BOOK #</th>
<th>PLACE OF ISSUE</th>
</tr>
<tr>
<td>'.$_POST["seabook"].'</td>
<td>'.$_POST["seaissue"].'</td>
</tr>

<tr>
<th>DATE OF ISSUE</th>
<th>DATE OF EXPIRY</th>
</tr>
<tr>
<td>'.$_POST["seadate"].'</td>
<td>'.$_POST["seaexpire"].'</td>
</tr>
</table>

<h5 colspan="2">Please provide information regarding any other valid Seaman???s Identification Book (SIB).</h5>
<table>
<tr>
<th>SEAMAN???S IDENTIFICATION BOOK</th>
<th>DATE OF EXPIRY</th>
</tr>
<tr>
<td>'.$_POST["seaidentify"].'</td>
<td>'.$_POST["idexpire"].'</td>
</tr>
</table>

<h4>YELLOW FEVER</h4>
<table>
<tr>
<th colspan="2">YELLOW FEVER CERTIFICATE #</th>
</tr>
<tr>
<td colspan="2">'.$_POST["fcertify"].'</td>
</tr>

<tr>
<th>DATE OBTAINED</th>
<th>DATE OF EXPIRY</th>
</tr>
<tr>
<td>'.$_POST["fod"].'</td>
<td>'.$_POST["fdexpire"].'</td>
</tr>
</table>


<h4>NEXT OF KIN INFORMATION</h4>
<table>
<tr>
<th>FULL NAME</th>
<th>RELATIONSHIP</th>
</tr>
<tr>
<td>'.$_POST["kfname"].'</td>
<td>'.$_POST["krelate"].'</td>
</tr>

<tr>
<th>HOME PHONE</th>
<th>CELL PHONE</th>
</tr>
<tr>
<td>'.$_POST["khphone"].'</td>
<td>'.$_POST["kcphone"].'</td>
</tr>

<tr>
<th>PLACE OF EMPLOYMENT</th>
<th>WORK PHONE</th>
</tr>
<tr>
<td>'.$_POST["kpemp"].'</td>
<td>'.$_POST["kwphone"].'</td>
</tr>

<tr>
<th colspan="2">EMAIL</th>
</tr>
<tr>
<td colspan="2">'.$_POST["kemail"].'</td>
</tr>
</table>

<h1>DISCLAIMER AND SIGNATURE</h1>
<p>I certify that my answers are true and complete to the best of my knowledge. If this application leads to acceptance, I understand that false or misleading information in my application or interview may result in my release.</p>

<table>
<tr>
<th>SIGNATURE</th>
<th>DATE</th>
</tr>
<tr>
<td>'.$_POST["ksign"].'</td>
<td>'.$_POST["kdate"].'</td>
</tr>
</table>

<h1>SUPPORTING DOCUMENTS</h1>
<h4>Please provide ALL of the following items to support your application:</h4>

<ul>
<li>Passport</li>
<li>Nationality Insurance Card</li>
<li>Valid Police Record</li>
<li>2 Color Passport Photos</li>
<li>2 Character References with contact details</li>
<li>BGCSE Certificate</li>
<li>Official High School and College Transcripts</li>
<li>Seaman???s Record Book</li>
<li>Professional Licenses and Certificates</li>
<li>College Transcript</li>
<li>Application Fee Receipt Number</li>
<li>Reason for Rejection</li>

</ul>

<h1>FOR OFFICIAL USE ONLY</h1>
<table>
<tr>
<th colspan="2">STUDENT NUMBER</th>
</tr>
<tr>
<td>'.$_POST["ofcstuno"].'</td>
</tr>

<tr>
<th>MATH PLACEMENT</th>
<th>ENGLISH PLACEMENT</th>
</tr>
<tr>
<td>'.$_POST["mathplace"].'</td>
<td>'.$_POST["engplace"].'</td>
</tr>

<tr>
<th colspan="2">DEFICIENCIES</th>
</tr>
<tr>
<td>'.$_POST["defic"].'</td>
</tr>

<tr>
<th>FEE RECEIPT#</th>
<th>DATE</th>
<th>AMOUNT</th>
</tr>
<tr>
<td>'.$_POST["feerecpt"].'</td>
<td>'.$_POST["ofcdate"].'</td>
<td>'.$_POST["ofcamount"].'</td>
</tr>

<tr>
<th colspan="2">ACCEPTED</th>
</tr>
<tr>
<td>'.$ACCEPTED.'</td>
</tr>

<tr>
<th colspan="2">REASON</th>
</tr>
<tr>
<td colspan="2">'.$_POST["ofcreason"].'</td>
</tr>

<tr>
<th>SIGNATURE</th>
<th>DATE</th>
</tr>
<tr>
<td>'.$_POST["ofcsign"].'</td>
<td>'.$_POST["ofcdte"].'</td>
</tr>

<tr>
<th>CHECKED BY</th>
<th>DATE</th>
</tr>
<tr>
<td>'.$_POST["ofcchk"].'</td>
<td>'.$_POST["chkdate"].'</td>
</tr>
</table>
';

$data .= "</body>";

//end html tag

$data .= "</html>";

//echo $data;

$handle=fopen($filename,'w');
fwrite($handle,$data);
fclose($filename);





	 // file end
	 
	 
// Recipient 
//$to = 'umakant.abrpl@gmail.com,sunilumar.abrpl@gmail.com'; 
$to="admissions@ljmma.edu.bs";
 
// Sender 
$from = 'info@ljm.com'; 
$fromName = 'LJM'; 
 
// Email subject 
$subject = $_POST["fname"].' From LJM';  
 
// Attachment file 
$file = $filename; 
//$file = get_template_directory_uri().'/'.$filename; 

//$handle=fopen($filename,'w');  //get_template_directory_uri()  //get_home_url().'/'.
 
// Email body content 
$htmlContent = ' 
    <h3>LJM</h3> 
'; 
 
// Header for sender info 
$headers = "From: $fromName"." <".$from.">"; 
 
// Boundary  
$semi_rand = md5(time());  
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  
 
// Headers for attachment  
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
 
// Multipart boundary  
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";  
 
// Preparing attachment 
if(!empty($file) > 0){ 
    if(is_file($file)){ 
        $message .= "--{$mime_boundary}\n"; 
        $fp =    @fopen($file,"rb"); 
        $data =  @fread($fp,filesize($file)); 
 
        @fclose($fp); 
        $data = chunk_split(base64_encode($data)); 
        $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .  
        "Content-Description: ".basename($file)."\n" . 
        "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .  
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
    } 
} 
$message .= "--{$mime_boundary}--"; 
$returnpath = "-f" . $from; 
 
// Send email 
$mail = @mail($to, $subject, $message, $headers, $returnpath);  
 
// Email sending status 
echo $mail?"<h1 class'container text-success'>Email Sent Successfully!</h1>":"<h1 class'container text-danger'>Email sending failed.</h1>"; 
 
//fclose($filename);

//unlink($filename);

//$filename='';

//die;
//

	 
 }
?>
			</div>
    </section>
<?php get_footer(); ?>