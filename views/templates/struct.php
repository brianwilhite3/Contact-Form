<body>
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
       </button>
       <a class="navbar-brand" href="#">Contact Form With JQuery Validation Inside CodeIgniter Framework</a>
     </div>
<div class="navbar-collapse collapse">
  <ul class="nav navbar-nav">
    <li class="active"><?php echo anchor('category/home', 'Home Page'); ?></li>
    <li class="active"><?php echo anchor('category/contact_form', 'Contact Us'); ?></li>
  </ul>
</div><!--/.navbar-collapse -->
   </div>
</div>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <div class="col-lg-8">
      <h2></h2>
      <p></p>
    </div>
<div class="col-lg-4">
  <div class="pull-right">
    <!-- ddSlick dropdown for social media -->
    <select id="slick">
      <option value="0" data-href="" data-imagesrc="http://cdn1.iconfinder.com/data/icons/inside/PNG/032x032/icontexto-inside-facebook.png" data-description="Join us on Facebook!">Facebook</option>
      <option value="1" data-href="" data-imagesrc="http://cdn1.iconfinder.com/data/icons/inside/PNG/032x032/icontexto-inside-twitter.png" data-description="Join us on Twitter!">Twitter</option>
      <option value="2" data-href="" data-imagesrc="http://cdn1.iconfinder.com/data/icons/inside/PNG/032x032/icontexto-inside-linkedin.png" data-description="Join us on LinkedIn!">LinkedIn</option>
    </select>
<script>
$('#slick').ddslick({
  width: '250px',
  onSelected: function(selectedData) { },
  defaultTarget: "Join are networks"
});
</script>
  </div>
</div>
   </div>
</div>

<!-- contact_form.php -->
<?= $contents ?>
    
<div class="container">
  <hr class="featurette-divider">
  <footer>
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
   </footer>
 </div>
</body>
</html> 
    
