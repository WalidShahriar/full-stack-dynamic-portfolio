<div id="projects_container" class="py-5 px-5">
    <div class="container">
        <h2 class="display-6 fw-normal mb-5 border-bottom border-secondary pb-4 text-center text-dark">Featured Projects</h2>
        <div class="row g-4">

            @foreach($projects as $project)
            <div class="col-lg-6">
                <div class="card h-100 text-bg-dark border-secondary">
                    {{-- Dynamic Project Image --}}
                    <img src="{{ $project->image_url }}" class="card-img-top" alt="{{ $project->title }}" style="height: 300px; object-fit: cover; opacity: 0.9;">

                    <div class="card-body p-4 p-md-5">
                        <h3 class="card-title fw-bold mb-3 text-white">{{ $project->title }}</h3>

                        <p class="card-text text-white-50 fs-4 fw-normal mb-4">
                            {{ $project->description }}
                        </p>

                        <div class="mb-4">
                            {{-- Convert comma separated tech stack string to badges --}}
                            @foreach(explode(',', $project->tech_stack) as $tech)
                                <span class="badge bg-success me-2 fs-6 fw-normal">{{ trim($tech) }}</span>
                            @endforeach
                        </div>

                        <div class="d-grid">
                            <a href="{{ $project->link ?? '#' }}" class="btn btn-outline-light btn-lg fs-5">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>