<?php include 'header.php'; ?>

<!-- ══════════════════════════════════════════
     FORGOT PASSWORD HERO
     ══════════════════════════════════════════ -->
<section class="reg-hero">
    <div class="container">
        <div class="reg-hero-content" style="text-align: center; margin: 0 auto;" data-animate>
            <h1 class="reg-hero-title">Reset Password.</h1>
            <p class="reg-hero-sub">Enter the email address associated with your account and we'll send you a link to reset your password.</p>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     FORGOT PASSWORD FORM
     ══════════════════════════════════════════ -->
<section class="reg-form-section" style="min-height: calc(100vh - 450px); display: flex; align-items: center; padding: 60px 0;">
    <div class="container" style="max-width: 550px; margin: 0 auto;">
        <form action="#" method="POST" class="reg-form">
            
            <div class="reg-card" data-animate>
                
                <div class="reg-section">
                    <div class="reg-section-header">
                        <div class="reg-card-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3L15.5 7.5z"></path></svg>
                        </div>
                        <h2 class="reg-card-title">Password Recovery</h2>
                    </div>
                    
                    <div class="reg-grid" style="grid-template-columns: 1fr;">
                        <div class="reg-group">
                            <label for="email" class="reg-label">Email Address</label>
                            <input type="email" id="email" name="email" class="reg-input" placeholder="e.g. team@example.com" required>
                            <div class="error-message" id="email_error">Please enter a valid email address</div>
                        </div>

                        <div class="reg-actions" style="flex-direction: column; align-items: stretch; gap: 24px;">
                            <button type="submit" class="btn btn-primary btn-lg btn-glow" style="width: 100%; justify-content: center;">
                                Send Reset Link
                            </button>

                            <div style="text-align: center; font-size: 0.85rem;">
                                <a href="login.php" style="color: var(--blue-600); font-weight: 600; text-decoration: none; display: flex; align-items: center; justify-content: center; gap: 8px;">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                                    BACK TO LOGIN
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
</section>

<script>
// Simple Validation for Forgot Password
const resetForm = document.querySelector('.reg-form');
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

resetForm.addEventListener('submit', function(e) {
    validateEmail();
    const hasErrors = document.querySelectorAll('.reg-input.invalid').length > 0;
    if (hasErrors) {
        e.preventDefault();
    } else {
        // Since we are in simulation mode as mentioned previously, 
        // we can add a simple console log or alert if needed.
    }
});
</script>

<?php include 'footer.php'; ?>
