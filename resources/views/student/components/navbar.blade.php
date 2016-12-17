<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/home">EXACUTOR</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class><a>{{$student->getName()}}</a></li>
                <li class><a>{{'\''.$student->getBatchID().' Batch'}}</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class><a href="javascript:void(0)" onclick="switchTab1()">Show Activities</a></li></li>
                <li class><a href="javascript:void(0)" onclick="switchTab2()">Add Activities</a></li></li>
                <li class><a href="javascript:void(0)" onclick="switchTab3()">Add Achievements</a></li></li>
                <li class><a href='/student_login'>Logout</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>