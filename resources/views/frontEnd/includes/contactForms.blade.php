<!-- Contact Section -->
<section id="contact" class="contact">
    <div class="container">
        <div class="section-title">
            <h2>{{ __('messages.contact_title') }}</h2>
        </div>
        <div class="contact-info">
            <div class="contact-item animate-on-scroll">
                <i class="fas fa-envelope contact-icon"></i>
                <div class="contact-details">
                    <h3>{{ __('messages.contact_email') }}</h3>
                    <p><a href="mailto:info@africaingold.or.tz">info@africaingold.or.tz</a></p>
                </div>
            </div>
            <div class="contact-item animate-on-scroll">
                <i class="fas fa-phone contact-icon"></i>
                <div class="contact-details">
                    <h3>{{ __('messages.contact_phone') }}</h3>
                    <p><a href="tel:+255123456789">+255 745 654 722</a></p>
                </div>
            </div>
            <div class="contact-item animate-on-scroll">
                <i class="fas fa-map-marker-alt contact-icon"></i>
                <div class="contact-details">
                    <h3>{{ __('messages.contact_location') }}</h3>
                    <p>Dar es Salaam, Tanzania</p>
                </div>
            </div>
            <div class="contact-item animate-on-scroll">
                <i class="fab fa-whatsapp contact-icon"></i>
                <div class="contact-details">
                    <h3>{{ __('messages.contact_whatsapp') }}</h3>
                    <p><a href="https://chat.whatsapp.com/IJtstakHP7TJX0dPFR9v5V" target="_blank">{{ __('messages.join_group') }}</a></p>
                </div>
            </div>
        </div>
        <div class="contact-form animate-on-scroll">
            <h3>{{ __('messages.contact_message') }}</h3>
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <form id="contact-form" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">{{ __('messages.name_label') }}</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">{{ __('messages.email_label') }}</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="message">{{ __('messages.message_label') }}</label>
                    <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn">{{ __('messages.submit') }}</button>
            </form>
        </div>
    </div>
</section>
