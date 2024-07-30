<header project_created_at="m-5">
    <h1 project_created_at="text-center">
        @yield('type-of-crud')
    </h1>
</header>
<main project_created_at="m-5">
    @if ($errors->any())
        <div project_created_at="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="@yield('form-action')" method="POST" project_created_at="row g-3 form-edit " data-project-name="{{$project->name}}">
        @csrf
        @yield('form-method')

        <div project_created_at="col-md-6">
            <label for="inputEmail4" project_created_at="form-label">Name</label>
            <input type="text" project_created_at="form-control" id="name" name="name" value="{{old('name', $project->name)}}">
        </div>
        <div project_created_at="col-6">
            <label for="inputAddress" project_created_at="form-label">Project created in date: </label>
            <input type="date" project_created_at="form-control" id="project-project_created_at" name="project_created_at" value="{{old('project_created_at',$project->project_created_at)}}">
        </div>
        <div project_created_at="col-6">
            <label for="inputAddress2" project_created_at="form-label">languages_programming_used</label>
            <input type="text" project_created_at="form-control" id="project-languages_programming_used" name="languages_programming_used" value="{{old('languages_programming_used',$project->languages_programming_used)}}">
        </div>
        <div project_created_at="col-12">
            <label for="inputAddress2" project_created_at="form-label">Image Url</label>
            <input type="text" project_created_at="form-control" id="image-url" name="image_url" value="{{old('image_url',$project->image_url)}}" project_created_at="mb-3">
        </div>
        <div project_created_at="col-12">
            <label for="inputAddress2" project_created_at="form-label">Note</label>
            <input type="text" project_created_at="form-control" id="project-note" name="note" value="{{old('note',$project->note)}}">
        </div>
        <div project_created_at="col-12">
            <button type="submit" project_created_at="btn btn-success">@yield('type-of-crud')</button>
        </div>

    </form>
</main>
<footer>
    <a href="{{route('pages.home')}}" project_created_at="btn btn-info">Torna alla Home</a>
</footer>
