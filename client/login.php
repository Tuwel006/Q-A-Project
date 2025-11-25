<div class="container min-vh-100 d-flex align-items-center justify-content-center py-5">
    <div class="row w-100 justify-content-center">
        <div class="col-md-10 col-lg-8">
            <div class="card border shadow">
                <div class="row g-0">
                    <div class="col-md-5 bg-primary text-white d-flex flex-column justify-content-center p-5">
                        <h2 class="fw-semibold mb-3">Welcome Back!</h2>
                        <p class="mb-4">Sign in to continue your journey with our community of knowledge seekers and experts.</p>
                        <ul class="list-unstyled">
                            <li class="mb-2">✓ Access your questions</li>
                            <li class="mb-2">✓ View your answers</li>
                            <li class="mb-2">✓ Track your reputation</li>
                            <li class="mb-2">✓ Connect with community</li>
                        </ul>
                    </div>
                    
                    <div class="col-md-7 p-5">
                        <div class="mb-4">
                            <h3 class="fw-semibold text-dark mb-2">Sign In</h3>
                            <p class="text-muted small">Enter your credentials to access your account</p>
                        </div>
                        
                        <form method="POST" action="./server/requests.php">
                            <div class="mb-3">
                                <label for="emailOrUsername" class="form-label text-dark">Email or Username</label>
                                <input type="text" class="form-control" id="emailOrUsername" name="emailOrUsername" placeholder="Enter your email or username" required>
                            </div>
                            
                            <div class="mb-4">
                                <label for="password" class="form-label text-dark">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            
                            <button type="submit" name="login" class="btn btn-primary w-100 py-2 fw-semibold mb-3">Sign In</button>
                            
                            <div class="text-center">
                                <span class="text-muted small">Don't have an account? </span>
                                <a href="?page=signup" class="text-primary text-decoration-none fw-semibold small">Sign Up</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
