<!DOCTYPE html>
<html>

<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>  
           <script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>  
</head>
 <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.html">Sports Data</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="team.html">NFL</a></li>
            <li><a href="#">About</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

     <div class="container">
      <div class="page-header">
       <p>&nbsp;</p>
        <h1>NFL Teams</h1>
     
      </div>
   
      <table id="nflTable" class="table" cellspacing="0" width="100%">
         <thead>
            <tr>
                
                <th>City</th>
                <th>Team Name</th>
                <th>Conference</th>
                <th>Division</th>
                <th>Stadium</th>
                
               
            </tr>
            </thead>
            
            
            <tfoot>
              <tr>
     
                <th>City</th>
                <th>Team Name</th>
                <th>Conference</th>
                <th>Division</th>
                <th>Stadium</th>
               
            </tr>
        </tfoot>
      
      </table>
  
    </div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">Sports Data.</p>
      </div>
    </footer>


</body>
</html>
<script>
          
 $(document).ready(function(){
    $('#nflTable').DataTable( {      
        "ajax" : "../nfl-data/nfl-team-info.json",
        "columns": [
		{ "data": "city"},
		{ "data": "team-name"},
		{ "data": "conference"},
		{ "data": "division"},	
		{ "data": "stadium"}
		]
    } );
} );
</script>