<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href='/home'>EXACUTOR</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class><a>{{$admin->getName()}}</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class><a href="javascript:void(0)" onclick="switchTab1()">Students</a></li></li>
                <li class><a href="javascript:void(0)" onclick="switchTab2()">Activities</a></li></li>
                <li class><a href="javascript:void(0)" onclick="switchTab3()">Assign Supervisors</a></li></li>
                <li class><a href="javascript:void(0)" onclick="switchTab4()">Add Activity</a></li></li>
                <li class><a href="javascript:void(0)" onclick="switchTab5()">Reports</a></li></li>
                <li class><a href='/admin_login'>Logout</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>