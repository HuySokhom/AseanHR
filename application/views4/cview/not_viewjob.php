<div class="container">
    <!-----------content left------------------->
    <div class="left-content">
    	<div class="header-view-job">
            <div class="view-job-left">
                <h4>Admin & Operations Assistant</h4>
            </div>
            <div class="view-job-right">
                <form action="http://localhost/tti_job/index.php/Pages/login_employee" method="post" accept-charset="utf-8">
                    <button class="btn-apply" type="submit">Apply Now</button>
                </form>
            </div>
        </div>
        <div class="review-company">
        	<div class="list-com-main">
                <p>Company</p>
                <p>Type</p>
                <p>Industry</p>
                <p>Employees</p>
                <p>Location</p>
            </div>
            <div class="list-com-detail">
                <p>HRINC (Cambodia) Co., Ltd</p>
                <p>Private Limited Company</p>
                <p>Recruiting Services</p>
                <p>100-200</p>
                <p>Phnom Penh</p>
            </div>
            <div class="list-com-logo">
                <img src="<?=base_url('image/company.jpg');?>"/>
            </div>
        </div>
        <div class="list-table-job">
        	<table class="table table-striped table-bordered" cellspacing="0" width="100%">
                <tbody>
                   <tr>
                       <td class="job-details">Level</td>
                       <td>Entry Level</td>
                       <td class="job-details">Term</td>
                       <td>Full Time</td>
                  </tr>
                  <tr>
                       <td class="job-details">Year of Exp.</td>
                       <td>2</td>
                       <td class="job-details">Function</td>
                       <td>Administration</td>
                  </tr>
                  <tr>
                       <td class="job-details">Hiring</td>
                       <td>1</td>
                       <td class="job-details">Industry</td>
                       <td>Human Resources/Consultancy</td>
                  </tr>
                  <tr>
                       <td class="job-details">Salary</td>
                       <td>Negotiable</td>
                       <td class="job-details">Qualification</td>
                       <td>Bachelor Degree</td>
                  </tr>
                  <tr>
                       <td class="job-details">Sex</td>
                       <td>Unlimited</td>
                       <td class="job-details">Language</td>
                       <td>English-- Good</td>
                  </tr>
                  <tr>
                       <td class="job-details">Age</td>
                       <td>~</td>
                       <td class="job-details">Location</td>
                       <td>Phnom Penh</td>
                  </tr>
                  <tr>
                       <td class="job-details">Publish Date</td>
                       <td>Nov-30-2016</td>
                       <td class="job-details">Closing Date</td>
                       <td>Dec-09-2016</td>
                  </tr>
                </tbody>
             </table>
        </div>
        <div class="job-description-view">
        	<h4>Job Description</h4>
            <div class="in-job-description-view">
            	Administrative Work:
                <p>• Making travel arrangements, hotel, event venue and air booking for outsourcing employees/projects</p>
                <p>• Stock controlling and updates report/tracking for outsourcing projects</p>
                <p>• Asking for quotations and purchasing cleaning equipment and other materials for outsourcing Department</p>
                <p>• Build relationships with key suppliers and providers as necessary</p>
                <p>• Provide administrative and technical support to Outsourcing Division</p>
                <p>• Translation of key documents as required (Khmer – English)</p>
                <p>• Assist in the coordination and preparation of knowledge Management resources, and Undertaking general administrative duties</p>
                
                <p>Operations Work:</p>
                <p>• Be the supervisor on workers and cleaners</p>
                <p>• Creating cleaning schedule</p>
                <p>• Updating traveler insurance to insurance agency</p>
                <p>• Updating company’s staff to be covered and deleted from the insurance policy</p>
                <p>• Monthly tracking staff leave record</p>
                <p>• Plan for office party or staff party</p>
                <p>• Estimate the budget for office renovation or party etc…</p>
            </div>
        </div>
        <div class="job-description-view">
        	<h4>Job Description</h4>
            <div class="in-job-description-view">
            	Administrative Work:
                <p>• Making travel arrangements, hotel, event venue and air booking for outsourcing employees/projects</p>
                <p>• Stock controlling and updates report/tracking for outsourcing projects</p>
                <p>• Asking for quotations and purchasing cleaning equipment and other materials for outsourcing Department</p>
                <p>• Build relationships with key suppliers and providers as necessary</p>
                <p>• Provide administrative and technical support to Outsourcing Division</p>
                <p>• Translation of key documents as required (Khmer – English)</p>
                <p>• Assist in the coordination and preparation of knowledge Management resources, and Undertaking general administrative duties</p>
                
                <p>Operations Work:</p>
                <p>• Be the supervisor on workers and cleaners</p>
                <p>• Creating cleaning schedule</p>
                <p>• Updating traveler insurance to insurance agency</p>
                <p>• Updating company’s staff to be covered and deleted from the insurance policy</p>
                <p>• Monthly tracking staff leave record</p>
                <p>• Plan for office party or staff party</p>
                <p>• Estimate the budget for office renovation or party etc…</p>
            </div>
        </div>
    </div>
    <!----------------End Content Left------------------>
    
    <!-------------Recruitment Right------------------->
    <div class="recruitment-employer">
        <div class="employer">
            <h3>Recruitment Employer</h3>
            
            <?php  foreach($show_company_all as $values){ ?>
            <div class="damnel-employer">
                <div class="list-employer">
                
                 <a href="<?=site_url("Pages/company/".$values->com_id);?>"  title="<?php echo $values->com_name; ?>"><img src="<?php echo base_url(); ?>/image/image_company/<?php echo $values->com_image;?>"  style="width:82px; height:70px;" /></a>
                
                </div>
            </div>
            <?php } ?>
            
            
            
           
        </div>
    </div>
    <div class="recruitment-employer">
        <div class="employer">
            <h3>Advertising</h3>
            <div class="advertising">
                
                    <img src="<?php echo base_url();?>library/img/index.jpg"/>
                
            </div>
            <div class="advertising">
                
                    <img src="<?php echo base_url();?>library/img/index2.jpg"/>
                
            </div>
            <div class="advertising">
                
                    <img src="<?php echo base_url();?>library/img/home-02-570x321.jpg"/>
                
            </div>
        </div>
    </div>
    <!-------------End Recruitment Right------------------->
</div>