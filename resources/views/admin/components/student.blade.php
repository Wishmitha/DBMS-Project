<div  class="row">
    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
        <ul class="list-group">

            <form  method="post" action="{{ route('delete_student') }}">
                <input name="studentID" type="hidden" value={{$student->getID()}} >

                <input name="adminID" type="hidden" value={{$admin->getID()}} >

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <h4>{{$student->getName()}}</h4></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <h4>{{'\''.$student->getBatchID().' '.'Batch'}}</h4></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <h4>{{$student->getID()}}</h4></div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            {{ csrf_field() }}
                            <button class="btn btn-default" type="submit">Delete </button>
                        </div>
                    </div>
                </li>
             </form>
        </ul>
    </div>
</div>