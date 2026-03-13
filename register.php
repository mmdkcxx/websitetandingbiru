<?php include 'header.php'; ?>

<!-- ══════════════════════════════════════════
     REGISTRATION HERO
     ══════════════════════════════════════════ -->
<section class="reg-hero">
    <div class="container">
        <div class="reg-hero-content" data-animate>
            <span class="section-label" style="color: rgba(255,255,255,0.8);">Join the Competition</span>
            <h1 class="reg-hero-title">Registration</h1>
            <p class="reg-hero-sub">Complete the form below to register your team for the BRIGAMA BCC 2026. Make sure all information is accurate before submitting.</p>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     REGISTRATION FORM
     ══════════════════════════════════════════ -->
<section class="reg-form-section">
    <div class="container">
        <form action="#" method="POST" enctype="multipart/form-data" class="reg-form">
            
            <!-- UNIFIED REGISTRATION CARD -->
            <div class="reg-card" data-animate>
                
                <!-- SECTION: TEAM INFORMATION -->
                <div class="reg-section">
                    <div class="reg-section-header">
                        <div class="reg-card-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        </div>
                        <h2 class="reg-card-title">Team Information</h2>
                    </div>
                    
                    <div class="reg-grid">
                        <div class="reg-group">
                            <label for="team_name" class="reg-label">Team Name</label>
                            <input type="text" id="team_name" name="team_name" class="reg-input" placeholder="Enter your team name" required>
                        </div>
                        
                        <div class="reg-group">
                            <label class="reg-label">Category</label>
                            <div class="reg-radio-group">
                                <label class="reg-radio">
                                    <input type="radio" name="category" value="S1" checked>
                                    <span class="reg-radio-custom"></span>
                                    Undergraduate (S1)
                                </label>
                                <label class="reg-radio">
                                    <input type="radio" name="category" value="S2">
                                    <span class="reg-radio-custom"></span>
                                    Graduate (S2)
                                </label>
                            </div>
                        </div>
                        
                        <div class="reg-group">
                            <label for="university" class="reg-label">University</label>
                            <input type="text" id="university" name="university" class="reg-input" placeholder="e.g. Universitas Gadjah Mada" required>
                        </div>
                        
                        <div class="reg-group">
                            <label for="team_email" class="reg-label">Team Email Address</label>
                            <input type="email" id="team_email" name="team_email" class="reg-input" placeholder="team@example.com" required 
                                   pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Please enter a valid email address (e.g. name@domain.com)">
                            <div class="error-message" id="email_error">Please enter a valid email address (e.g. team@example.com)</div>
                        </div>
                        
                        <div class="reg-group">
                            <label for="conf_email" class="reg-label">Email Confirmation</label>
                            <input type="email" id="conf_email" name="conf_email" class="reg-input" placeholder="Confirm your email" required 
                                   pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Please enter a valid email address">
                            <div class="error-message" id="conf_email_error">Emails do not match. Please check again.</div>
                        </div>
    
                        <div class="reg-group">
                            <label for="info_source" class="reg-label">Where did you receive information about the BCC?</label>
                            <div class="custom-select" id="custom_info_source">
                                <div class="custom-select-trigger">
                                    <span>Select an option</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                </div>
                                <div class="custom-select-options">
                                    <div class="custom-option" data-value="Instagram">Instagram</div>
                                    <div class="custom-option" data-value="Whatsapp">Whatsapp</div>
                                    <div class="custom-option" data-value="Telegram">Telegram</div>
                                    <div class="custom-option" data-value="Website">Website</div>
                                    <div class="custom-option" data-value="other">Other</div>
                                </div>
                                <select id="info_source" name="info_source" style="display: none;" required>
                                    <option value="" disabled selected>Select an option</option>
                                    <option value="Instagram">Instagram</option>
                                    <option value="Whatsapp">Whatsapp</option>
                                    <option value="Telegram">Telegram</option>
                                    <option value="Website">Website</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="reg-group" id="other_source_container" style="display: none;">
                            <label for="other_source" class="reg-label">Please specify</label>
                            <input type="text" id="other_source" name="other_source" class="reg-input" placeholder="Please specify where you heard about us">
                        </div>
                    </div>
                </div>

                <div class="reg-divider"></div>

                <!-- SECTION: MEMBER DATA -->
                <?php 
                $countryData = [
                    "ID" => "+62", "MY" => "+60", "SG" => "+65", "US" => "+1", "GB" => "+44",
                    "AU" => "+61", "JP" => "+81", "KR" => "+82", "CN" => "+86", "IN" => "+91",
                    "AF" => "+93", "AL" => "+355", "DZ" => "+213", "AD" => "+376", "AO" => "+244",
                    "AR" => "+54", "AM" => "+374", "AT" => "+43", "AZ" => "+994", "BH" => "+973",
                    "BD" => "+880", "BY" => "+375", "BE" => "+32", "BZ" => "+501", "BJ" => "+229",
                    "BT" => "+975", "BO" => "+591", "BA" => "+387", "BW" => "+267", "BR" => "+55",
                    "BN" => "+673", "BG" => "+359", "KH" => "+855", "CM" => "+237", "CL" => "+56",
                    "CO" => "+57", "CR" => "+506", "HR" => "+385", "CU" => "+53", "CY" => "+357",
                    "CZ" => "+420", "DK" => "+45", "EG" => "+20", "SV" => "+503", "EE" => "+372",
                    "ET" => "+251", "FJ" => "+679", "FI" => "+358", "FR" => "+33", "GE" => "+995",
                    "DE" => "+49", "GH" => "+233", "GR" => "+30", "GT" => "+502", "HK" => "+852",
                    "HU" => "+36", "IS" => "+354", "IR" => "+98", "IQ" => "+964", "IE" => "+353",
                    "IL" => "+972", "IT" => "+39", "JO" => "+962", "KZ" => "+7", "KE" => "+254",
                    "KW" => "+965", "LA" => "+856", "LV" => "+371", "LB" => "+961", "LY" => "+218",
                    "LI" => "+423", "LT" => "+370", "LU" => "+352", "MO" => "+853", "MG" => "+261",
                    "ML" => "+223", "MT" => "+356", "MX" => "+52", "MC" => "+377", "MN" => "+976",
                    "MA" => "+212", "MM" => "+95", "NP" => "+977", "NL" => "+31", "NZ" => "+64",
                    "NG" => "+234", "NO" => "+47", "OM" => "+968", "PK" => "+92", "PA" => "+507",
                    "PY" => "+595", "PE" => "+51", "PH" => "+63", "PL" => "+48", "PT" => "+351",
                    "QA" => "+974", "RO" => "+40", "RU" => "+7", "SA" => "+966", "RS" => "+381",
                    "SK" => "+421", "SI" => "+386", "ZA" => "+27", "ES" => "+34", "LK" => "+94",
                    "SE" => "+46", "CH" => "+41", "TW" => "+886", "TH" => "+66", "TN" => "+216",
                    "TR" => "+90", "AE" => "+971", "UY" => "+598", "UZ" => "+998", "VE" => "+58",
                    "VN" => "+84", "YE" => "+967"
                ];
                ksort($countryData);
                ?>
                <?php for($i=1; $i<=3; $i++): ?>
                <div class="reg-section">
                    <div class="reg-section-header">
                        <div class="reg-card-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        </div>
                        <h2 class="reg-card-title">Member <?php echo $i; ?> <?php echo ($i === 1) ? '(Team Leader)' : ''; ?></h2>
                    </div>
                    
                    <div class="reg-grid">
                        <div class="reg-group">
                            <label for="name_<?php echo $i; ?>" class="reg-label">Full Name</label>
                            <input type="text" id="name_<?php echo $i; ?>" name="name_<?php echo $i; ?>" class="reg-input" required>
                        </div>
                        
                        <div class="reg-group">
                            <label for="phone_<?php echo $i; ?>" class="reg-label">Mobile Phone Number</label>
                            <div class="reg-phone-group">
                                <div class="custom-select reg-country-select">
                                    <div class="custom-select-trigger">
                                        <span>+62 (ID)</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                    </div>
                                    <div class="custom-select-options">
                                        <?php foreach($countryData as $iso => $code): ?>
                                        <div class="custom-option <?php echo ($iso === "ID") ? "selected" : ""; ?>" data-value="<?php echo $code; ?>">
                                            <?php echo $code; ?> (<?php echo $iso; ?>)
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <select name="country_code_<?php echo $i; ?>" style="display: none;" required>
                                        <?php foreach($countryData as $iso => $code): ?>
                                        <option value="<?php echo $code; ?>" <?php echo ($iso === "ID") ? "selected" : ""; ?>>
                                            <?php echo $code; ?> (<?php echo $iso; ?>)
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <input type="tel" id="phone_<?php echo $i; ?>" name="phone_<?php echo $i; ?>" class="reg-input reg-phone-input" placeholder="812-xxxx-xxxx" required pattern="[0-9\-]{8,18}" title="Please enter a valid phone number (digits only)">
                            </div>
                        </div>
                        
                        <div class="reg-group">
                            <label for="faculty_<?php echo $i; ?>" class="reg-label">Faculty or School</label>
                            <input type="text" id="faculty_<?php echo $i; ?>" name="faculty_<?php echo $i; ?>" class="reg-input" required>
                        </div>
                        
                        <div class="reg-group">
                            <label for="major_<?php echo $i; ?>" class="reg-label">Major</label>
                            <input type="text" id="major_<?php echo $i; ?>" name="major_<?php echo $i; ?>" class="reg-input" required>
                        </div>
                        
                        <div class="reg-group">
                            <label for="cv_<?php echo $i; ?>" class="reg-label">Recent CV (PDF, max 1MB)</label>
                            <div class="reg-file-wrapper">
                                <input type="file" id="cv_<?php echo $i; ?>" name="cv_<?php echo $i; ?>" class="reg-file-input" accept=".pdf" required>
                                <div class="reg-file-btn">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>
                                    Choose File
                                </div>
                                <span class="reg-file-name">No file chosen</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if($i < 3): ?><div class="reg-divider"></div><?php endif; ?>
                <?php endfor; ?>

                <div class="reg-divider"></div>

                <!-- SECTION: SUBMIT ACTION -->
                <div class="reg-actions">
                    <div class="reg-agreement">
                        <label class="reg-checkbox">
                            <input type="checkbox" name="agreement" required>
                            <span class="reg-checkbox-custom"></span>
                            I have read and agree to the competition rules and guidelines.
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-glow">
                        Submit
                    </button>
                </div>

            </div>
        </form>
    </div>
</section>

<!-- Success Popup -->
<div class="success-popup-overlay" id="successPopup">
    <div class="success-popup-content">
        <div class="success-icon-wrapper">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
        </div>
        <h2 class="success-title">Registration Success!</h2>
        <p class="success-message">Your team has been successfully registered for BRIGAMA BCC 2026. We have sent a confirmation details to your team email.</p>
        <div class="success-actions">
            <a href="index.php" class="btn btn-primary">Back to Home</a>
            <button type="button" class="btn btn-nav-outline" onclick="closeSuccessPopup()">Close</button>
        </div>
    </div>
</div>

<script>
// Custom Select Logic
document.querySelectorAll('.custom-select').forEach(select => {
    const trigger = select.querySelector('.custom-select-trigger');
    const optionsContainer = select.querySelector('.custom-select-options');
    const options = select.querySelectorAll('.custom-option');
    const hiddenSelect = select.querySelector('select');
    const label = trigger.querySelector('span');

    // Toggle dropdown
    trigger.addEventListener('click', (e) => {
        e.stopPropagation();
        // Close all other dropdowns
        document.querySelectorAll('.custom-select').forEach(s => {
            if (s !== select) s.classList.remove('active');
        });
        select.classList.toggle('active');
    });

    // Option selection
    options.forEach(option => {
        option.addEventListener('click', (e) => {
            e.stopPropagation();
            const value = option.getAttribute('data-value');
            const text = option.textContent.trim();

            // Update UI
            options.forEach(opt => opt.classList.remove('selected'));
            option.classList.add('selected');
            label.textContent = text;
            select.classList.remove('active');

            // Update Hidden Native Select
            hiddenSelect.value = value;
            
            // Trigger change event for dynamic logic
            const event = new Event('change', { bubbles: true });
            hiddenSelect.dispatchEvent(event);
        });
    });
});

// Close dropdowns when clicking outside
window.addEventListener('click', () => {
    document.querySelectorAll('.custom-select').forEach(s => s.classList.remove('active'));
});

// Update file names in the custom file input
document.querySelectorAll('.reg-file-input').forEach(input => {
    input.addEventListener('change', e => {
        const fileName = e.target.files[0]?.name || 'No file chosen';
        e.target.parentElement.querySelector('.reg-file-name').textContent = fileName;
    });
});

// Email Validation Logic
const emailInput = document.getElementById('team_email');
const confEmailInput = document.getElementById('conf_email');
const emailError = document.getElementById('email_error');
const confEmailError = document.getElementById('conf_email_error');
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

function validateMatch() {
    const isFormatValid = emailRegex.test(confEmailInput.value);
    
    if (confEmailInput.value && !isFormatValid) {
        confEmailInput.classList.add('invalid');
        confEmailError.textContent = "Please enter a valid email address (e.g. name@domain.com)";
        confEmailError.classList.add('show');
    } else if (confEmailInput.value && emailInput.value !== confEmailInput.value) {
        confEmailInput.classList.add('invalid');
        confEmailError.textContent = "Emails do not match. Please check again.";
        confEmailError.classList.add('show');
    } else {
        confEmailInput.classList.remove('invalid');
        confEmailError.classList.remove('show');
    }
}

emailInput.addEventListener('blur', validateEmail);
confEmailInput.addEventListener('blur', validateMatch);

// Phone Number Formatting Logic
document.querySelectorAll('.reg-phone-input').forEach(input => {
    input.addEventListener('input', (e) => {
        // Remove all non-numeric characters
        let value = e.target.value.replace(/\D/g, '');
        
        // Limit to 13 digits (standard max for most mobile numbers)
        value = value.substring(0, 13);
        
        // Apply formatting (xxx-xxxx-xxxx)
        let formattedValue = '';
        if (value.length > 0) {
            formattedValue = value.substring(0, 3);
            if (value.length > 3) {
                formattedValue += '-' + value.substring(3, 7);
            }
            if (value.length > 7) {
                formattedValue += '-' + value.substring(7, 13);
            }
        }
        
        e.target.value = formattedValue;
    });
});

// Optional: Clear error on input if user wants it purely on blur, 
// but usually it's better to clear it as they type once it's already shown.
// However, sticking to "only check when moved" as requested:
emailInput.addEventListener('input', () => {
    emailInput.classList.remove('invalid');
    emailError.classList.remove('show');
});
confEmailInput.addEventListener('input', () => {
    confEmailInput.classList.remove('invalid');
    confEmailError.classList.remove('show');
});

const nativeInfoSource = document.getElementById('info_source');
const otherSourceContainer = document.getElementById('other_source_container');
const otherSourceInput = document.getElementById('other_source');

nativeInfoSource.addEventListener('change', function() {
    if (this.value === 'other') {
        otherSourceContainer.style.display = 'flex';
        otherSourceInput.setAttribute('required', 'required');
        otherSourceInput.focus();
    } else {
        otherSourceContainer.style.display = 'none';
        otherSourceInput.removeAttribute('required');
    }
});

// Form Submission & Success Popup Logic
const regForm = document.querySelector('.reg-form');
const successPopup = document.getElementById('successPopup');

regForm.addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate one last time before showing success
    validateEmail();
    validateMatch();
    
    const hasErrors = document.querySelectorAll('.reg-input.invalid').length > 0;
    
    if (!hasErrors) {
        // Here you would normally send the data to the server via AJAX
        // For now, we simulate success
        successPopup.classList.add('active');
        document.body.style.overflow = 'hidden'; // Prevent scroll
    } else {
        // Find first error and scroll to it
        const firstError = document.querySelector('.reg-input.invalid');
        if (firstError) {
            firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            firstError.focus();
        }
    }
});

function closeSuccessPopup() {
    successPopup.classList.remove('active');
    document.body.style.overflow = '';
    // Optionally reset form
    // regForm.reset();
}
</script>

<?php include 'footer.php'; ?>
