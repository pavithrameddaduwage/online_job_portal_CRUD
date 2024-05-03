<!DOCTYPE html>
<html>
<head>
    <title>Post your Job</title>
    <link rel="stylesheet" type="text/css" href="Job.css">
    <style>
       
    </style>
</head>
<body style="background-image: url('./IMG/bg2.png');">

    <div class="fullform">

        <h1 class="heading-job">Post a Job</h1>

        <form id="jobForm" method="post" action="submit_job.php">
            <div class="form-row">
                <div class="column">
                    <div class="form-group">
                        <label for="job_title">Job Title</label>
                        <input class="form-control" type="text" name="job_title" id="job_title" />
                    </div>

                    <div class="form-group">
                        <label for="job_location">Job Location</label>
                        <div id="remote_standard_location" class="hidden"></div>
                        <div class="location-container">
                            <select class="form-control" data-location-remote="true" aria-label="Job Location" name="job_remote" id="job_remote">
                                <option selected="selected" value="select location">Select The Location</option>
                                <option value="full">On Site</option>
                                <option value="full">Remote</option>
                                <option value="hybrid">Hybrid</option>
                            </select>
                            <input id="job-location" placeholder="Example: 'Srilanka','India' " class="form-control location-input" autocomplete="job-location" aria-label="Job Location" data-location-autocomplete="true" data-location-required="true" type="text" value name="job_location" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="job_description">Description</label>
                        <textarea rows="10" class="redactor" name="job_description" id="job_description"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="job_keywords">Keywords</label>
                        <input class="form-control" type="text" name="job_keywords" id="job_keywords" />
                    </div>
                </div>

                <div class="column">
                    <div class="form-group">
                        <label for="job_company">Company Name</label>
                        <input class="form-control" type="text" name="job_company" id="job_company" />
                    </div>

                    <div class="form-group">
                        <label for="job_company_url">Company URL</label>
                        <input class="form-control" type="text" name="job_company_url" id="job_company_url" />
                    </div>

                    <div class="form-group">
                        <label for="job_requirements">Job Requirements</label>
                        <textarea rows="5" class="redactor" name="job_requirements" id="job_requirements"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="job_responsibilities">Job Responsibilities</label>
                        <textarea rows="5" class="redactor" name="job_responsibilities" id="job_responsibilities"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="job_contact">Contact Email</label>
                        <input class="form-control" type="email" name="job_contact_email" id="job_contact" />
                    </div>

                    <div class="form-group">
                        <label for="job_salary">Salary (LKR)</label>
                        <input type="text" placeholder="Enter amount" name="job_salary_amount">
                        <select class="form-control" name="job_salary_timeframe" id="job_salary_timeframe">
                            <option selected>Annually</option>
                            <option>Monthly</option>
                            <option>Weekly</option>
                       
                        </select>
                        <input type="text" placeholder="Additional salary information (benefits, etc.)" name="job_salary_additional_info">
                        <input type="checkbox" name="show_salary"> Show salary to job seekers <i>Recommended!</i>
                    </div>
                </div>
            </div>

            <input type="submit" value="Submit">
            <a href="view_jobs.php" class="button view-jobs-link">View Jobs</a>

        </form>
      

    </div>

    <footer class="footer">
			<div class="page-container">
			<div>
			<style>
			.universal_footer {
				font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
			}
			.universal_footer ul {
				border: 0;
				list-style: none;
				margin: 0;
				padding: 0;
			}
			h3{margin-top:12.5px}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);border:0}.footer_announcement a:before,.universal_footer.expanded_footer .primary_footer_nav.showing .footer-accordion-trigger:after,.universal_footer.expanded_footer .social_group .social-item a.facebook:before,.universal_footer.expanded_footer .social_group .social-item a.linkedin:before,.universal_footer.expanded_footer .social_group .social-item a.twitter:before,.zr-icon-base{transform:translate(0,0);background-size:contain;background-position:center;content:" ";width:1em;height:1em;display:inline-block;vertical-align:text-bottom;background-repeat:no-repeat}.universal_footer{opacity:1;display:block}.footer_outer{padding-right:20px;padding-left:20px;margin-bottom:15px}.footer_announcement{font-size:14px;text-align:center;margin-top:30px;margin-bottom:0}.footer_announcement strong{font-weight:700}.footer_announcement a:link{color:#057ed8}.footer_announcement a:hover{text-decoration:underline}.footer_announcement a:before{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20width%3D%221792%22%20height%3D%221792%22%20viewBox%3D%220%200%201792%201792%22%3E%3Cpath%20fill%3D%22%23ff983b%22%20stroke%3D%22%23ff983b%22%20d%3D%22M576%201344q0%2080-56%20136t-136%2056-136-56-56-136%2056-136%20136-56%20136%2056%2056%20136zm512%20123q2%2028-17%2048-18%2021-47%2021h-135q-25%200-43-16.5t-20-41.5q-22-229-184.5-391.5t-391.5-184.5q-25-2-41.5-20t-16.5-43v-135q0-29%2021-47%2017-17%2043-17h5q160%2013%20306%2080.5t259%20181.5q114%20113%20181.5%20259t80.5%20306zm512%202q2%2027-18%2047-18%2020-46%2020h-143q-26%200-44.5-17.5t-19.5-42.5q-12-215-101-408.5t-231.5-336-336-231.5-408.5-102q-25-1-42.5-19.5t-17.5-43.5v-143q0-28%2020-46%2018-18%2044-18h3q262%2013%20501.5%20120t425.5%20294q187%20186%20294%20425.5t120%20501.5z%22/%3E%3C/svg%3E");margin-right:2px;vertical-align:middle}.universal_footer{border-top:1px solid #dbddde;text-align:center;padding-top:30px;padding-bottom:40px;clear:both;margin-top:30px}.universal_footer.hide_primary_footer{border-top:none}.universal_footer nav{margin:auto;display:table;line-height:1;margin-bottom:1.8em;font-size:13px}.universal_footer nav a{display:inline-block;vertical-align:middle;padding:0;border-right:1px solid #dee0e1;color:#2f3639}.universal_footer nav a:last-child{border-right:0}.universal_footer nav a:hover{text-decoration:underline;color:#2f3639}.universal_footer a{color:#2f3639}.universal_footer .footer_label{color:#2f3639;display:block;margin:0 0 15px}.universal_footer .legal{color:#72777c;font-size:12px;margin-left:15px;display:inline-block}.universal_footer .secondary_footer_nav{display:block;margin-bottom:0}.universal_footer .secondary_footer_nav a{color:#72777c;font-size:12px;padding:0 15px 0 11px}.universal_footer .badges{display:table;margin:auto;padding-top:10px}.universal_footer .badges div{display:inline-block;vertical-align:top;margin:0 2px}.universal_footer .badges div.verisign{margin-top:-17px}.universal_footer .badges div#teconsent{float:none}.universal_footer.expanded_footer .primary_footer_nav{width:100%;max-width:73em}.universal_footer.expanded_footer .nav_group{display:inline-block;vertical-align:top;margin:0 0 30px;text-align:left}.universal_footer.expanded_footer .nav_group.company_group{width:16%}.universal_footer.expanded_footer .nav_group.contact_group{width:20%}.universal_footer.expanded_footer .nav_group .group_header{font-size:17px;margin-bottom:20px}.universal_footer.expanded_footer .nav_group .item{display:block;margin:0 0 20px}.universal_footer.expanded_footer .nav_group .item a{padding:0;display:block;font-size:13px}.universal_footer.expanded_footer .nav_group .item a:link,.universal_footer.expanded_footer .nav_group .item a:visited{padding:0;display:block;color:#72777c}.universal_footer.expanded_footer .nav_group .item a:hover{color:#2f3639}.universal_footer.expanded_footer .nav_group .item.note{color:#bbb;font-size:11px}.universal_footer.expanded_footer .social_group{margin:0}.universal_footer.expanded_footer .social_group .social-item{display:table-cell}.universal_footer.expanded_footer .social_group .social-item a{margin:0 4px 0 0;height:40px;width:40px;line-height:40px;font-size:23px;text-align:center;border-radius:50%;color:#72777c;box-shadow:inset 0 0 0 1px rgba(0,0,0,.4);opacity:.6;transition:opacity .1s linear;position:relative}.universal_footer.expanded_footer .social_group .social-item a.facebook:before{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20width%3D%221792%22%20height%3D%221792%22%20viewBox%3D%220%200%201792%201792%22%3E%3Cpath%20fill%3D%22%2372777c%22%20stroke%3D%22%2372777c%22%20d%3D%22M1343%2012v264h-157q-86%200-116%2036t-30%20108v189h293l-39%20296h-254v759h-306v-759h-255v-296h255v-218q0-186%20104-288.5t277-102.5q147%200%20228%2012z%22/%3E%3C/svg%3E")}.universal_footer.expanded_footer .social_group .social-item a.twitter:before{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20width%3D%221792%22%20height%3D%221792%22%20viewBox%3D%220%200%201792%201792%22%3E%3Cpath%20fill%3D%22%2372777c%22%20stroke%3D%22%2372777c%22%20d%3D%22M1684%20408q-67%2098-162%20167%201%2014%201%2042%200%20130-38%20259.5t-115.5%20248.5-184.5%20210.5-258%20146-323%2054.5q-271%200-496-145%2035%204%2078%204%20225%200%20401-138-105-2-188-64.5t-114-159.5q33%205%2061%205%2043%200%2085-11-112-23-185.5-111.5t-73.5-205.5v-4q68%2038%20146%2041-66-44-105-115t-39-154q0-88%2044-163%20121%20149%20294.5%20238.5t371.5%2099.5q-8-38-8-74%200-134%2094.5-228.5t228.5-94.5q140%200%20236%20102%20109-21%20205-78-37%20115-142%20178%2093-10%20186-50z%22/%3E%3C/svg%3E")}.universal_footer.expanded_footer .social_group .social-item a.linkedin:before{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20width%3D%221792%22%20height%3D%221792%22%20viewBox%3D%220%200%201792%201792%22%3E%3Cpath%20fill%3D%22%2372777c%22%20stroke%3D%22%2372777c%22%20d%3D%22M477%20625v991h-330v-991h330zm21-306q1%2073-50.5%20122t-135.5%2049h-2q-82%200-132-49t-50-122q0-74%2051.5-122.5t134.5-48.5%20133%2048.5%2051%20122.5zm1166%20729v568h-329v-530q0-105-40.5-164.5t-126.5-59.5q-63%200-105.5%2034.5t-63.5%2085.5q-11%2030-11%2081v553h-329q2-399%202-647t-1-296l-1-48h329v144h-2q20-32%2041-56t56.5-52%2087-43.5%20114.5-15.5q171%200%20275%20113.5t104%20332.5z%22/%3E%3C/svg%3E")}.universal_footer.expanded_footer .social_group .social-item a:hover{opacity:1}.universal_footer.expanded_footer .footer-accordion-trigger{-webkit-appearance:none;border-radius:0;background-color:transparent;border:0;box-shadow:none;font:inherit;padding:0;outline-width:0;width:100%;font-size:17px}.universal_footer.expanded_footer .primary_footer_nav.showing .footer-accordion-trigger:after{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20width%3D%221792%22%20height%3D%221792%22%20viewBox%3D%220%200%201792%201792%22%3E%3Cpath%20fill%3D%22%23989ea0%22%20stroke%3D%22%23989ea0%22%20d%3D%22M1395%201184q0%2013-10%2023l-50%2050q-10%2010-23%2010t-23-10l-393-393-393%20393q-10%2010-23%2010t-23-10l-50-50q-10-10-10-23t10-23l466-466q10-10%2023-10t23%2010l466%20466q10%2010%2010%2023z%22/%3E%3C/svg%3E");vertical-align:middle}.universal_footer.expanded_footer .secondary_footer_nav{border-top:1px solid #dbddde;padding-top:15px;color:#bdc1c3}.universal_footer.expanded_footer .footer-accordion-trigger{display:none}@media all and (max-width:768px){.universal_footer.expanded_footer .nav_group.company_group,.universal_footer.expanded_footer .nav_group.contact_group{width:100%}.universal_footer.expanded_footer .nav_group:first-child{margin-top:10px}.universal_footer.expanded_footer .nav_group .group_header{font-size:15px;text-align:left;padding-bottom:7px;color:#71af05;border-bottom:1px solid #e3e6e8}.universal_footer.expanded_footer .nav_group .item{width:49%;text-align:left;display:inline-block;margin-bottom:8px}.universal_footer.expanded_footer .nav_group .item a:link,.universal_footer.expanded_footer .nav_group .item a:visited{line-height:2.6}.universal_footer.expanded_footer .nav_group .item.note{width:100%}.universal_footer.expanded_footer .nav_group .social_group{margin:15px auto 0;display:table}.universal_footer.expanded_footer .nav_group .social-item a{display:inline-block}.universal_footer.expanded_footer .accordion-content{padding-top:15px;width:94%;margin:0 auto;text-align:left}.universal_footer.expanded_footer .primary_footer_nav.showing .accordion-content{position:static;overflow:visible;clip:auto}}.teconsent{width:auto;display:inline-block}@media all and (max-width:768px){.teconsent{margin-top:15px}}.teconsent a{border-right:none}.teconsent img{display:block}.teconsent.login_pgs{margin-bottom:100px;display:table;margin:15px auto 0}@media all and (max-width:768px){.footer_outer{padding-right:0;padding-left:0}.universal_footer{padding-top:15px;padding-bottom:0;border-top:1px solid #dbddde;position:relative;overflow:hidden}.universal_footer nav{width:100%;margin-bottom:1em}.universal_footer nav.secondary_footer_nav .fullText{display:none}.universal_footer nav.secondary_footer_nav a{display:inline-block;line-height:2;font-size:.85em;padding:0 10px 0 6px}.universal_footer nav.secondary_footer_nav a:last-of-type{border-right:0;padding-right:0}.universal_footer nav.secondary_footer_nav a:first-of-type{padding-left:0}.universal_footer nav.secondary_footer_nav .legal{display:block;margin-top:15px;font-size:.85em}.universal_footer .badges div{display:block;margin:0 auto 10px}.universal_footer .badges div.verisign{margin-top:-5px}.secondary_footer_nav{padding-top:10px}}@media only screen and (min-width:768px){.universal_footer.expanded_footer .nav_group{width:19.5%}}
			</style>
			<h2 class="sr-only">Footer</h2>
			<div class="universal_footer expanded_footer footer_accordion">
			<nav class="primary_footer_nav">
			<div class="accordion-content">
			<div class="nav_group">
			<h3 class="group_header">For Job Seekers</h3>
			<ul>
			<li class="item"><a href="/">Search Jobs</a></li>
			<li class="item"><a href="/browse">Browse Jobs</a></li>
			<li class="item"><a href="https://www.ziprecruiter.co.uk/profiles/sign_up">Create Free Account</a></li>
			<li class="item"><a href="/cdn-cgi/l/email-protection#6615131616091412261c0f1614030514130f12031448050948130d">Support</a></li>
			</ul>
			</div>
			<div class="nav_group">
			<h3 class="group_header">Partner with Us</h3>
			<ul>
			<li class="item"><a href="https://www.ziprecruiter.co.uk/pages/14734-sponsored-reach">Sponsored Reach</a></li>
			<li class="item"><a href="https://www.ziprecruiter.co.uk/partner">Partners</a></li>
			</ul>
			</div>
			<div class="nav_group company_group">
			<h3 class="group_header">Company</h3>
			<ul>
			<li class="item"><a href="https://www.ziprecruiter.co.uk/about">About Us</a></li>
			<li class="item"><a href="https://www.ziprecruiter.co.uk/corporate-responsibility">Corporate Responsibility</a></li>
			</ul>
			</div>
			<div class="nav_group contact_group">
			<h3 class="group_header">Contact Us</h3>
			<ul>
			<li class="item"><a class="email" href="/cdn-cgi/l/email-protection#186b6d6868776a6c586271686a7d7b6a6d716c7d6a367b77366d73">Email Us</a></li>
			<li class="item"><a class="phone_number" href="tell:+448000318638">Call +44800 031 8638</a></li>
			</ul>
			<div class="social_group">
			<ul>
			<li class="social-item">
			<a aria-label="Follow ZipRecruiter on Facebook" class="facebook"></a>
			<a aria-label="Follow ZipRecruiter on Twitter" class="twitter"></a>
			<a aria-label="Follow ZipRecruiter on LinkedIn" class="linkedin"></a>
			</li>
			</ul>
			</div>
			</div>
			</div>
			</nav>
			</div>
			</div>
			</div>
		</footer>
        <script src="jobsValidation.js"></script>
</body>
</html>
