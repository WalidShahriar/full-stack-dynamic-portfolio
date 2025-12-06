<div id="contact_container">
    <div class="container py-5">
        <h2 class="display-6 text-dark fw-normal mb-4 border-bottom pb-4 text-center">Get In Touch</h2>

        <div class="row justify-content-center pt-4">

            <div class="col-md-4 mb-4 mb-md-0">
                <div class="card h-100 bg-dark">
                    <div class="card-body text-white">
                        <h4 class="card-title mb-3 fw-semibold">Contact Details</h4>

                        <ul class="list-group list-group-flush">

                            <li class="list-group-item px-0 bg-dark text-white text-opacity-80">
                                <p class="fw-semibold mb-1"><i class="bi bi-envelope-fill me-2 text-danger"></i> Email</p>
                                <a href="mailto:{{ $profile->email }}" class="small text-decoration-none text-white text-opacity-75">
                                    {{ $profile->email }}
                                </a>
                            </li>

                            <li class="list-group-item px-0 bg-dark text-white text-opacity-80 ">
                                <p class="fw-semibold mb-1"><i class="bi bi-linkedin me-2 text-primary"></i>LinkedIn</p>
                                <a href="{{ $profile->linkedin_url }}" target="_blank"
                                    class="small text-decoration-none text-white text-opacity-75">{{ $profile->linkedin_url }}</a>
                            </li>

                            <li class="list-group-item px-0 bg-dark text-white text-opacity-80">
                                <p class="fw-semibold mb-1"><i class="bi bi-github me-2"></i> GitHub</p>
                                <a href="{{ $profile->github_url }}" target="_blank"
                                    class="small text-decoration-none text-white text-opacity-75">{{ $profile->github_url }}</a>
                            </li>

                            <li class="list-group-item px-0 bg-dark text-white text-opacity-80">
                                <p class="fw-semibold mb-1"><i class="bi bi-facebook me-2"></i> Facebook
                                </p>
                                <a href="{{ $profile->facebook_url }}" target="_blank"
                                    class="small text-decoration-none text-white text-opacity-75">{{ $profile->facebook_url }}</a>
                            </li>

                            <li class="list-group-item text-white text-opacity-80 px-0 bg-dark">
                                <p class="fw-semibold mb-1"><i class="bi bi-phone-fill me-2"></i> Phone
                                </p>
                                <p class="text-white text-opacity-75 small mb-0">{{ $profile->phone }}</p>
                            </li>
                        </ul>

                        <div class="mb-0">
                            <p class="fw-semibold mb-1"><i class="bi bi-pin-map-fill me-2 text-warning"></i>
                                Location</p>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d228.22031871971123!2d90.34801246116915!3d23.764308729903973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1765023985142!5m2!1sen!2sbd"
                                width="100%" height="200" style="border:0;" allowfullscreen=""
                                loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card p-3 p-md-5 h-100">
                    <div class="card-body">
                        <h4 class="card-title text-dark mb-4">Send a Message</h4>

                        {{-- 1. SUCCESS MESSAGE ALERT --}}
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        {{-- 2. FORM SETUP --}}
                        <form action="{{ route('contact.store') }}" method="POST">

                            {{-- 3. CSRF TOKEN (Required for security) --}}
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label fw-semibold">Your Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="mb-4">
                                <label for="message" class="form-label fw-semibold">Your Message</label>
                                <textarea class="form-control" id="message" name="message" rows="8" required></textarea>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-dark btn-lg">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>