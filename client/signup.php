<div class="container min-vh-100 d-flex align-items-center justify-content-center py-5">
    <div class="row w-100 justify-content-center">
        <div class="col-md-10 col-lg-8">
            <div class="card border shadow">
                <div class="row g-0">
                    <div class="col-md-5 bg-primary text-white d-flex flex-column justify-content-center p-5">
                        <h2 class="fw-semibold mb-3">Welcome to Q&A Hub</h2>
                        <p class="mb-4">Join our community of knowledge seekers and experts. Share your expertise and learn from others.</p>
                        <ul class="list-unstyled">
                            <li class="mb-2">✓ Ask unlimited questions</li>
                            <li class="mb-2">✓ Get expert answers</li>
                            <li class="mb-2">✓ Build your reputation</li>
                            <li class="mb-2">✓ Connect with community</li>
                        </ul>
                    </div>
                    
                    <div class="col-md-7 p-5">
                        <div class="mb-4">
                            <h3 class="fw-semibold text-dark mb-2">Create Your Account</h3>
                            <p class="text-muted small">Fill in the details to get started</p>
                        </div>
                        
                        <form method="POST" action="./server/requests.php">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName" class="form-label text-dark">First Name</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName" class="form-label text-dark">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label text-dark">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="username" class="form-label text-dark">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Choose a unique username" required>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="password" class="form-label text-dark">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="confirmPassword" class="form-label text-dark">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                                    <label class="form-check-label text-muted small" for="terms">
                                        I agree to the <a href="#" class="text-primary text-decoration-none">Terms of Service</a> and <a href="#" class="text-primary text-decoration-none">Privacy Policy</a>
                                    </label>
                                </div>
                            </div>
                            
                            <button type="submit" name="signup" class="btn btn-primary w-100 py-2 fw-semibold mb-3">Create Account</button>
                            
                            <div class="text-center">
                                <span class="text-muted small">Already have an account? </span>
                                <a href="?page=login" class="text-primary text-decoration-none fw-semibold small">Sign In</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>