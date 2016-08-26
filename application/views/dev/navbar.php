    
    <nav class="navbar navbar-default" id="sticky_navigation">
        <div class="container-fluid" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle cent" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
                <div class="nav navbar-nav">
                    <li><a href="<?=base_url();?>index.php/dev"><span class="glyphicon glyphicon-th"></span> &nbsp;MMS</a></li>
                    <li class=""><a class="navbar-brand hidden-lg hidden-md" href="<?=base_url();?>index.php/dev"> Manhours Management System</a></li>
                </div>
            </div>
        
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li>&nbsp;&nbsp;&nbsp;</li>
                    <li><a href="<?=base_url();?>index.php/dev"><span class="glyphicon glyphicon-home"></span> &nbsp;Home</a></li>
                    <li><a href="<?=base_url();?>index.php/dev/track_projects"><span class="glyphicon glyphicon-pencil"></span>&nbsp; Track Projects</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-edit"></span> &nbsp;Change Password</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> &nbsp;Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
