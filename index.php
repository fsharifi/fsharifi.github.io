<html>
<head>
<link rel="stylesheet" href="css/font-awesome/academicons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
img {
  float:left; 
  border-radius: 50%;
  position: static;
  border: 5px solid #800080;
}
img:hover {
    opacity: 0.4;
}
@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}
.zoom{
margin: 20 auto;
transition: transform .2s;
}

.zoom:hover {
 animation: shake 0.5s;
 animation-iteration-count: infinite;
}

.fa {
  padding: 30px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 5px;
  border-radius: 40%;
}

.fa:hover {
    opacity: 0.7;
}
.fa-linkedin {
  background: #007bb5;
  color: white;
}
.fa-google {
  background: #dd4b39;
  color: white;
}
.fa-envelope{
  background: #bb0000;
  color: white;
}
div{
margin-left : 250px;
}
p{
font-size:1.5em
}
</style>
<title> Home </title> 
<?php include 'menu.php'; ?>
</head>
<body>
<p style="font-size: 2em" ><b>Fatemeh Sharifi</b><p>
<img class="zoom" src="F.SH.jpg" style="width:200px" />
<div>
<p> I'm a 6th year <b>PhD Candidate</b> in <b>Computer Science</b> at <b>Indiana University</b>.</p>
<p> I'm also a <b>Research Assistant</b> working on <b>Metagenomics</b> projects in <a href="https://homes.luddy.indiana.edu/yye/lab/research.php"> Prof. Yuzhen Ye's lab</a>.</p>
<p> I have been working with a lot of bioinformatics datasets and tools since 2012.</p><p>Not only bioinformatics, I’m also interested in Data Science and Machine Learning.</p>
<p> In Summer 2019, I got the opportunity to do a Bioinformatics/Genomics internship at <b> Boston Children's hospital.</b> </p>
<p> I enjoy working with <b>Python</b>, <b>R</b>, Perl, MySQL, AWK, <b>bash script</b>, <b>bioinformatics tools</b>, PHP, and <b>Linux servers</b>.</p>
<a href="https://omics.informatics.indiana.edu/myDGR/index.php"><img src="mydgr.png" title="myDGR" width="150" height="150"/></a>
<a href="https://sourceforge.net/projects/fun4me/"><img src="fun4me.png" title="Fun4me" width="150" height="150"/></a>
<a href="https://sourceforge.net/projects/proper-package/"><img src="proper.jpeg" title="Proper" width="150" height="150"/></a>
</div>
<br></br><br></br><br></br><br></br><br></br>
<a href="https://scholar.google.com/citations?user=IQvGL2oAAAAJ&hl=en" target='_blank' class="fa fa-google"></a>
<a href="mailto:fsharifi@indiana.edu" target="_blank" class="fa fa-envelope"></a>
<a href="https://www.linkedin.com/in/fsharifi" target="_blank" class="fa fa-linkedin"></a>
</body>
</html>
