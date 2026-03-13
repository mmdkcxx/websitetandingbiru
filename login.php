<?php include 'header.php'; ?>

<!-- ══════════════════════════════════════════
     LOGIN HERO
     ══════════════════════════════════════════ -->
<section class="reg-hero">
    <div class="container">
        <div class="reg-hero-content" style="text-align: center; margin: 0 auto;" data-animate>
            <h1 class="reg-hero-title">Welcome Back.</h1>
            <p class="reg-hero-sub">Enter your credentials to access your team dashboard and manage your competition progress.</p>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     LOGIN FORM
     ══════════════════════════════════════════ -->
<section class="reg-form-section" style="min-height: calc(100vh - 450px); display: flex; align-items: center; padding: 60px 0;">
    <div class="container" style="max-width: 550px; margin: 0 auto;">
        <form action="#" method="POST" class="reg-form">
            
            <div class="reg-card" data-animate>
                
                <div class="reg-section">
                    <div class="reg-section-header">
                        <div class="reg-card-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" y1="12" x2="3" y2="12"></line></svg>
                        </div>
                        <h2 class="reg-card-title">Account Login</h2>
                    </div>
                    
                    <div class="reg-grid" style="grid-template-columns: 1fr;">
                        <div class="reg-group">
                            <label for="email" class="reg-label">Email Address</label>
                            <input type="email" id="email" name="email" class="reg-input" placeholder="e.g. team@example.com" required>
                            <div class="error-message" id="email_error">Please enter a valid email address</div>
                        </div>
                        
                        <div class="reg-group">
                            <label for="password" class="reg-label">Password</label>
                            <input type="password" id="password" name="password" class="reg-input" placeholder="••••••••" required>
                            <div class="error-message" id="password_error">Password is required</div>
                        </div>

                        <div class="reg-actions" style="flex-direction: column; align-items: stretch; gap: 24px;">
                            <button type="submit" class="btn btn-primary btn-lg btn-glow" style="width: 100%; justify-content: center;">
                                Login
                            </button>

                            <div style="display: flex; flex-direction: column; gap: 10px; text-align: center; font-size: 0.85rem;">
                                <div style="color: #64748b;">
                                    Don't have an account? 
                                    <a href="register.php" style="color: var(--blue-600); font-weight: 600; text-decoration: none;">REGISTER</a>
                                </div>
                                <div style="color: #64748b;">
                                    Forgot password? 
                                    <a href="forgot-password.php" style="color: var(--blue-600); font-weight: 600; text-decoration: none;">RESET PASSWORD</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
</section>

<script>
// Simple Validation for Login
const loginForm = document.querySelector('.reg-form');
const emailInput = document.getElementById('email');
const emailError = document.getElementById('email_error');
const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

function validateEmail() {
    const isValid = emailRegex.test(emailInput.value);
    if (emailInput.value && !isValid) {
        emailInput.classList.add('invalid');
        emailError.classList.add('show');
    } else {
        emailInput.classList.remove('invalid');
        emailError.classList.remove('show');
    }
}

emailInput.addEventListener('blur', validateEmail);
emailInput.addEventListener('input', () => {
    emailInput.classList.remove('invalid');
    emailError.classList.remove('show');
});

loginForm.addEventListener('submit', function(e) {
    validateEmail();
    const hasErrors = document.querySelectorAll('.reg-input.invalid').length > 0;
    if (hasErrors) {
        e.preventDefault();
    }
});
</script>

<?php include 'footer.php'; ?>
