<script type="text/javascript">
    $(document).ready(function () {
        var url = window.location;
 
        $('ul.nav a').filter(function() {
              return this.href==url;
        }).parent().addClass('active');
    });
    </script>
<div class="navbar-defaultCustom">
<!-- <nav class="navbar navbar-inverse"> -->
  <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">University</a>
      </div>  
        <ul class="nav navbar-nav">
        <li><a href="/">Home</a></li>
        <li><a href="/users/login">Login</a></li>
        <li><a href="/questions">Questions</a></li>
         <li><a href="/logout">Logout</a></li>
      </ul>
  </div>
 </div>
      <div class="col-md-4 col-md-offset-8" style="position:relative;top:-38px;">
          <form action="/questions/search" class="search-form">
                <div class="form-group has-feedback">
                  <input type="text" class="form-control" name="search" id="search" placeholder="Search Questions By Tags">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
               </div>
            </form>
        </div>
 