<!DOCTYPE html>
<html>
  <head>
    <title>Quest Reference</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="icon" href="Images/favicon.png">
    <!-- Optional theme -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/website.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/website.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">My First Website</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Other Links?</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <button id="hide-button" class="btn btn-default" onclick="HarryFunction">Hide</button>
      <div id="block-of-text">
      <h1>My First Website</h1>
      <p>Congratulations - You've got your website up and running. From here you can modify any of the files within to change it to whatever you want.</p>

      <p>Next steps</p>
      <ul>
        <li>Change the page title? You probably don't want a site called "My First Website", so change it in index.html - you'll find it in two places, the first is in a &lt;title&gt; tag, the second is further down, in the nav section.</li>
        <li>Add a favicon: The little icon that appears to the left of every tab you have open is called a favicon: if you add a file called favicon.ico (a 16x16 pixel image) to your repository, it will appear there for every visitor! You can create one for free <a href="http://onlinefavicon.com/">here!</a></li>
        <li>Move this set of instructons to a new area and link to it from the nav</li>
        <li>Try adding some new content to this page (index.html). <a href="https://www.w3schools.com/tags/">W3Schools</a> has a list of tags you can include - why not try them out?</li>
        <li>Add some images</li>
        <li>Add some styling</li>
        <li>Add some interaction (show/hide)</li>
        <li>Try out different screen sizes</li>
        <li>Maybe you want your own domain name instead of github.io? <a href="https://www.namecheap.com/support/knowledgebase/article.aspx/9645/2208/how-do-i-link-my-domain-to-github-pages">This link</a> has details on how you can do this with a namecheap domain name.</li>
      </ul>
      </div>
     
    </div>

    <div class="bs-example">
       <!-- Bootstrap Grid  -->
      <div class="row">
        <div class="col-xs-1"></div>
        <div class="col-xs-4">
          <h2>Cook's Assistant</h2>
          <img class="grid-image" src="Images/demo.jpg"/>
          <p>Hi</p>
        </div>
        <div class="col-xs-2">.col-xs-2</div>
        <div class="col-xs-4"><img class="grid-image" src="Images/demo.jpg"/></div>
        <div class="col-xs-1">.col-xs-1</div>
      </div>
    </div>
    
    

    <!-- Styles (so that we can see the grid) -->
   <!-- <style scoped>
    .bs-example  div[class^="col"] {
      border: 1px solid white;
      background: #f5f5f5;
      text-align: center;
      padding-top: 8px;
      padding-bottom: 8px;
      }
    </style>

  -->
  <script src="js/website.js"></script>
  </body>
</html>
