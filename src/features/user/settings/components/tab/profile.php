<div class="tab-pane fade show active" id="profile">
    <div class="tab-header">
        <h4 class="mb-0">Profile</h4>
        <p class="text-muted">This is how others will see you on the site.</p>
    </div>
    <form>
        <!-- Profile Picture -->
        <div class="avatar-upload mb-4">
            <img src="<?= asset('img/members/jack.jpg') ?>" alt="Profile Picture">
            <div class="upload-button">
                <i class="bi bi-camera-fill"></i>
            </div>
        </div>

        <!-- Username -->
        <div class="mb-4">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" placeholder="Enter your username">
            <div class="form-text text-muted">
                This is your public display name. It can be your real name or a
                pseudonym. You can only change this once every 30 days.
            </div>
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="Enter new password">
            <div class="form-text text-muted">
                Your password must be at least 8 characters long and contain at
                least one uppercase letter, one lowercase letter, and one number.
            </div>
        </div>

        <!-- Email Address -->
        <div class="mb-4">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control" placeholder="Enter your email">
            <div class="form-text text-muted">
                You can manage verified email addresses in your email settings.
            </div>
        </div>

        <!-- Bio -->
        <div class="mb-4">
            <label class="form-label">Bio</label>
            <textarea class="form-control" rows="4" placeholder="Enter your bio"></textarea>
            <div class="form-text text-muted">
                Tell us about yourself. You can @mention other users and
                organizations to link to them.
            </div>
        </div>

        <!-- URLs -->
        <div class="mb-4">
            <label class="form-label">URLs</label>
            <p class="text-muted small mb-2">Add links to your website, blog, or
                social media profiles.</p>
            <div class="url-inputs">
                <input type="url" class="form-control mb-2" placeholder="Enter your URLs">
                <input type="url" class="form-control mb-2" placeholder="Enter your URLs">
                <button type="button" class="btn btn-outline-success">
                    <i class="bi bi-plus"></i> Add URL
                </button>
            </div>
        </div>

        <!-- Save Button -->
        <button type="submit" class="btn btn-save">Save Changes</button>
    </form>
</div>