<div class="container">
        <!-----------content left------------------->
        <div class="left-company-profile">
        	<div class="company-profile">
            	<ul class="form">
                    <li class="selected"><a class="profile" href="http://localhost/tti_job/index.php/Companys/employer_center"><i class="fa fa-briefcase"></i>Job posted</a></li>
                    <li><a class="messages" href="http://localhost/tti_job/index.php/Companys/employee_apply_job"><i class="fa fa-list"></i>List of Applicant</a></li>
                    <li><a class="messages" href="http://localhost/tti_job/index.php/Companys/browse_employee_cv"><i class="fa fa-search-plus"></i>Browse Applicant CV</a></li>
                    <li><a class="settings" href="http://localhost/tti_job/index.php/Companys/account_setting"><i class="icon-cog"></i>Account Settings</a></li>
                    <li><a class="logout" href="http://localhost/tti_job/index.php/login_controller/logout"><i class="icon-signout"></i>Logout</a></li>
                </ul>
            </div>
        </div>
        <!----------------End Content Left------------------>
        
        <!-------------Recruitment Right------------------->
        <div class="left-company-profile-content">
        	<h4><i class="fa fa-hand-o-right" aria-hidden="true"></i> Create a new job</h4>
            <form action="" method="post" enctype="multipart/form-data">
            	<div class="group-post-job">
                    <div class="job-post">
                        <label>Job Title</label>
                        <input type="text" name="job_title"/>
                    </div>
                    <div class="job-post">
                        <label>Job Experience</label>
                        <input type="text" name="job_experience"/>
                    </div>
                </div>
                <div class="group-post-job">
                    <div class="job-post">
                        <label>Number of Hire</label>
                        <input type="text" name="num_hire"/>
                    </div>
                    <div class="job-post">
                        <label>Company</label>
                        <select name="company">
                            <option value="">Parrot Studio</option>
                            <option value="">ABA Bank</option>
                            <option value="">Menu Life</option>
                        </select>
                    </div>
                </div>
                <div class="group-post-job">
                    <div class="job-post">
                        <label>Sex</label>
                        <select name="sex">
                            <option value="">Parrot Studio</option>
                            <option value="">ABA Bank</option>
                            <option value="">Menu Life</option>
                        </select>
                    </div>
                    <div class="job-post">
                        <label>Industry</label>
                        <select name="industry">
                            <option value="">Parrot Studio</option>
                            <option value="">ABA Bank</option>
                            <option value="">Menu Life</option>
                        </select>
                    </div>
                </div>
                <div class="group-post-job">
                    <div class="job-post">
                        <label>Age</label>
                        <input type="text" name="age"/>
                    </div>
                    <div class="job-post">
                        <label>Function</label>
                        <select name="function">
                            <option value="">Parrot Studio</option>
                            <option value="">ABA Bank</option>
                            <option value="">Menu Life</option>
                        </select>
                    </div>
                </div>
                <div class="group-post-job">
                    <div class="job-post">
                        <label>Qualification</label>
                        <input type="text" name="qualification"/>
                    </div>
                    <div class="job-post">
                        <label>Location</label>
                        <select name="location">
                            <option value="">Parrot Studio</option>
                            <option value="">ABA Bank</option>
                            <option value="">Menu Life</option>
                        </select>
                    </div>
                </div>
                <div class="group-post-job">
                    <div class="job-post">
                        <label>Language</label>
                        <input type="text" name="language"/>
                    </div>
                    <div class="job-post">
                        <label>Job Status</label>
                        <select name="job_status">
                            <option value="">Parrot Studio</option>
                            <option value="">ABA Bank</option>
                            <option value="">Menu Life</option>
                        </select>
                    </div>
                </div>
                <div class="group-post-job">
                    <div class="job-post">
                        <label>Closing Date</label>
                        <input type="text" name="closing_date"/>
                    </div>
                    <div class="job-post">
                        <label>Job Lavel</label>
                        <select name="job_lavel">
                            <option value="">Parrot Studio</option>
                            <option value="">ABA Bank</option>
                            <option value="">Menu Life</option>
                        </select>
                    </div>
                </div>
                <div class="group-post-job">
                    <div class="job-post">
                        <label>Publish Date</label>
                        <input type="text" name="pubish_date"/>
                    </div>
                    <div class="job-post">
                        <label>Salary Range</label>
                        <select name="salary_range">
                            <option value="">Parrot Studio</option>
                            <option value="">ABA Bank</option>
                            <option value="">Menu Life</option>
                        </select>
                    </div>
                </div>
                <div class="job-description">
                	<div style="width:97%;">
                        <label>Description</label>
                        <textarea id="editor1" name="description" role="20"></textarea>
                    </div>
                </div>
                <div class="job-description">
                	<div style="width:97%;">
                        <label>Requirement</label>
                        <textarea id="editor2" name="requirement" role="20"></textarea>
                    </div>
                </div>
                <div class="submit-job-post">
                    <input type="submit" name="age" class="create-job-post" value="Create Job"/>
                </div>
            </form>
      	</div>
        <!-------------End Recruitment Right------------------->
    </div>