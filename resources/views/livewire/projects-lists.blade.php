 <div>
     <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="projects">
         <div class="w-100">
             <div class="float-left">
                 <h2>Projects</h2>
             </div>
             <div class="float-right">
                 @if(auth())
                 <a href="{{ url("projects/add") }}" class="btn btn-primary mt-4">Tambah Projects</a>
                 @endif
             </div>

             <div class="my-2">
                 <input type="text" class="form-control" wire:model="search" placeholder="Cari...">
             </div>

             <div class="row">
                 @if (session('success'))
                 <div class="col-lg-12">
                     <div class="alert alert-success" role="alert">
                         {{ session('success') }}
                     </div>
                 </div>
                 @endif

                 @foreach($projects as $project)
                 <div class="col-lg-4 mt-4">
                     <div class="card" style="width: 18rem;">
                         <img class="card-img-top" src="{{ asset('storage/' . $project->image) }}" height="150px">
                         <div class="card-body" style="height:200px">
                             <h5 class="card-title">{{ $project->name }}</h5>
                             <p class="card-text">{{ \Illuminate\Support\Str::limit($project->description, 50, '...') }}</p>
                             @if(auth())
                             <a href="{{ url("projects/edit/$project->id") }}" class="btn btn-primary">Edit</a>
                             <a class="btn btn-danger text-white" onclick="return confirm('Yakin ingin menghapus data?') || event.stopImmediatePropagation()" wire:click="delete({{ $project->id }})">Delete</a>
                             @endif
                         </div>
                     </div>
                 </div>
                 @endforeach
             </div>

             <div class="mt-3">
                 {{ $projects->links() }}
             </div>
         </div>
     </section>
 </div>
