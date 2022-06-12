<?php
    
   include('session.php');
   
   $user=$_SESSION['login_user'];
    
?>

<html>
<head>
<link href="../css/bootstrap.min.css" rel="stylesheet">
   <script src="../script/jquery.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>

   
</head>

<body >


<?php include ('menu/menu3.php'); ?>

<div class="container ">
  <div class="row">
  
  <br>
<div class="col-md-12">
   <div class="col-md-4"></div>
   <div class="col-md-6" style="font-size:34px;">
   
  Welcome   <?php
          $res = mysqli_query($db, "select * from admin where user_name='$user'");
			  while($row=mysqli_fetch_array($res))
            {
               echo $row['first_name']." ".$row['last_name'];
			} 
		    ?>
   
   </div>
   <div class="col-md-4"><br></div>



</div>
    
	 
	<div class="col-md-12">
   <div class="col-md-4"></div>
   <div class="col-md-5">
   
   <img src="image/admin1.png" width="50%" height="50%" alt="Admin Logo">
   
   </div>
  



</div>

  </div>
</div>


<div class="container ">

<br>


<div class="row jumbotron ">
<div class="col-md-12">
<table style=""> 
<tr><td id="intro"class="bg-primary "align="center">
<h4>Adminstrator</h4>

</td>

</tr>

<tr>
<td class="cont2">
<br>
<dl>
<dt>What Does A Learning Management System Administrator Do?</dt>
	<dd>
If you have heard about the concept of Learning Management Systems and you’d like to give it a go, you shouldn’t skip this article. This is especially directed to those of you who aren’t sure of the responsibilities of an LMS administrator.  
	</dd>
</dl>
</td>
</tr>

<tr>
<td class="cont2">
<dl>
<dt>Duties, Skills, And Qualities Of A Learning Management System Administrator</dt>
<dd>
Duties, Skills, And Qualities Of A Learning Management System Administrator
What are the responsibilities of a Learning Management System administrator? Once you’ve read this article, you’ll be able to decide if you have what’s needed to monitor an LMS on your own, or you’re going to need some help.
	

</dd>
</dl>
</td>
</tr>
<tr>
<td class="cont2">
<dl>
<dt>
What Are The Duties Of A Learning Management System Administrator?</dt>
<dd>
Generally speaking, an LMS administrator has to take care of operational performance of a Learning Management System on a daily basis as well as to establish a connection between the technical support and the program manager.

In order to successfully perform these tasks, an LMS administrator has to perform a large number of activities. Some of the most important duties of an LMS administrator are listed below.
	</dd>
</dl>
</td>
</tr>
<tr>
<td class="cont2">
<dl>
<dt>
Technical Duties Of A SaaS Learning Management System Administrator</dt>
<dd>
A Learning Management System administrator is a person who has the responsibility of managing the team and providing daily support as well as keeping the ongoing operations of an LMS stable. In other words, this employee is the one who usually deals with:<br>

<br>
<ul>
<li>Defining user roles.</li>

<li>Creating learning courses.</li>
<li>Building custom certification.</li>
</ul>
Providing personal feedback for the learners
Additionally, in numerous cases, this is the person in charge of maintenance of the client portal. In other words, an LMS administrator should take care of the accuracy of postings. Accordingly, he or she has to make sure that only the ones that are appropriate and relevant are published.
	</dd>
</dl>
</td>
</tr>

<tr>
<td class="cont2">
<dl>
<dt>
Qualities And Skills Of A Good Learning Management System Administrator</dt>
<dd>
A good LMS administrator is a person with a wide variety of skills in different spheres. While he or she is expected to have technical and instructional skills, collaboration and communication skills are equally important. The understanding of online teaching and learning is another must.

If you want to delegate the management of a learning system to a SaaS LMS administrator, you have to make sure he or she:

Has satisfying technical and interpersonal skills (including satisfying computer skills and flawless business communication).
Has advanced organizational and time management skills.
Is a quick-witted person eager to learn, with an eye for details?
Has a dedicated approach and perfect understanding of your organization’s policy and goals when it comes to learning.
Is completely familiar with the compliance requirements in your business sphere.
Is ready to work on a given task over and over again, in order to come up with an impeccable solution.
	</dd>
</dl>
</td>
</tr>
<tr>
<td class="cont2">
<dl>
<dt>
Staff Training Duties Of A Learning Management System Administrator</dt>
<dd>
In order to provide the employees with the information they require, an LMS administrator should create training and courses for them on a weekly, monthly or yearly basis. The creation of that content is only one part of the complex process of monitoring the training activities. So, apart from that, an LMS administrator has to:

Keep the track of the freshly uploaded relevant courses, materials, and workshops within the LCMS.
Recognize and resolve the issues that may appear when it comes to course design, its configuration or infrastructure.
Make sure that the LMS works properly and act fast if it comes to bugs and unexpected errors.
Help the learners with any issues.
	</dd>
</dl>
</td>
</tr>
<tr>
<td class="cont2">
<dl>
<dt>
Why Should You Hire An Administrator Instead Of Managing An LMS Yourself?</dt>
<dd>
Simply put – two heads are better than one. A Learning Management System represents a complex group of numerous activities that require a lot of effort and attention on a daily basis.

By hiring a SaaS LMS Administrator, you will take the management control to a higher level, having a person thoroughly monitoring all aspects of your LMS.

On the other hand, the existing employees won’t have to deal with this additional task. Therefore, they’ll stay focused on their priorities and provide more efficient results.

Apart from that, the existing level of customer service quality will be taken to a higher level, while on the other hand, the rate of learner attrition will be significantly reduced. Additionally, the self-service level for all of the stakeholders may drastically increase.
	</dd>
</dl>
</td>
</tr>
<tr>
<td class="cont2">
<dl>
<dt>
Conclusion</dt>
<dd>
In conclusion, a professional Learning Management System administrator should be able to efficiently use a Learning Management System in order to provide the organization with a consistent, stable, well-built, and, above all, usable learning courses.

In order to accomplish this mission, an administrator should keep the knowledge base simple, actual and accurate and implement quality training courses for staff members.

Experienced LMS administrators highlight the importance of the interactive LMS software in the process of tasks simplification. An efficient Learning Management System should come integrated with tools that will simplify all processes, from the creation of training, courses, multimedia content, all the way to the creation of different types of reports and analytics. This way, an administrator will be well equipped and able to perform the tasks more efficiently.
	</dd>
</dl>
</td>
</tr>

</table>
</div>
</div>

</body>
</html>