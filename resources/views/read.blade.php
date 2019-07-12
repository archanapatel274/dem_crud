@include('inc.head')
<div class="container">
        <div class="row">
            <div class="col-md-6">
            <form action="{{ url('/edit',array($articles->id)) }}" method="POST">
              {{ csrf_field() }}
                    <fieldset>
                      <legend>Laravel CRUD Application</legend>
                      @if (count($errors)>0)
                        @foreach ($errors->all() as $error)
                             <div class="alert alert-danger">
                               {{$error}}
                             </div>
                        @endforeach
                      @endif
                      <div class="form-group">
                            <label for="title">Id</label>
                            <input type="text" class="form-control" name="title" value="<?php echo $articles->id ?>"  placeholder="Enter Title">
                          </div>
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" value="<?php echo $articles->Title ?>"  placeholder="Enter Title">
                      </div>
                      <div class="form-group">
                        <label for="desc">Description</label>
                        <input type="text" class="form-control" name="description" value="<?php echo $articles->Description?>" placeholder="Description">
                      </div>
                     
                    <a href="{{ url('/') }}"  class="btn btn-primary">Back</a>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@include('inc.footer')