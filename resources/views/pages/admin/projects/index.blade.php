@extends("pages.admin.partials.main")

@section('content')
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
      <i class="bi bi-justify fs-3"></i>
    </a>
  </header>

  <div class="page-heading">
    <h3>PROJETS</h3>
  </div>
  <div class="page-content">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
            <div
              class="tab-pane fade show active py-2"
              id="home"
              role="tabpanel"
              aria-labelledby="home-tab"
            >
            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#exampleModalScrollable">
            Ajouter un projet
        </button>
        
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Ajouter un projet</h5>
                        <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                      <form action="/admin/projects" method="POST" enctype="multipart/form-data">
                        @method("POST")
                        @csrf
                        <div class="modal-body">
                            <label>Title </label>
                            <div class="form-group">
                                <input type="text" placeholder="Titre" name="title"
                                    class="form-control" required>
                            </div>
                            <label>Description </label>
                            <div class="form-group">
                                <input type="text" placeholder="Description" name="description"
                                    class="form-control" required>
                            </div>

                            <label>Image </label>
                            <div class="form-group">
                                <input type="file" name="image"
                                    class="form-control" required>
                            </div>
        
        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary"
                                data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Annuler</span>
                            </button>
                            <button type="submit" class="btn btn-primary ml-1">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Enregistrer</span>
                            </button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        
        <table class="table table-striped" id="table1">   
             <thead>
            <tr>
              <th>Title</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($projects as $project)
            <tr>
                <td>{{$project->title}}</td>
                <td>{{$project->description}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
            </div>
            
        </div>
      </div>
    </div>
  </div>
@endsection

