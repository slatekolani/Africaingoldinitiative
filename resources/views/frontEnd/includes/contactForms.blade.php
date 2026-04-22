<!-- Membership & Donation Section -->
<section id="membership" class="membership-donation">
    <div class="container">
        <div class="section-title">
            <h2>{{ __('messages.join_us') }}</h2>
        </div>
        <div class="membership-donation">
            <div class="membership animate-on-scroll">
                <h3>{{ __('messages.membership_title') }}</h3>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <form id="membership-form" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="country">{{ __('messages.country_label') }}</label>
                        <input type="text" id="country" name="country" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="full_name">{{ __('messages.name_label') }}</label>
                        <input type="text" id="full_name" name="full_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">{{ __('messages.email_label') }}</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">{{ __('messages.phone_label') }}</label>
                        <input type="tel" id="phone" name="phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="occupation">{{ __('messages.occupation_label') }}</label>
                        <input type="text" id="occupation" name="occupation" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>{{ __('messages.involvement_label') }}</label>
                        <div class="radio-group">
                            <div class="radio-option">
                                <input type="radio" id="involvement_leadership" name="involvement" value="leadership" required>
                                <label for="involvement_leadership">{{ __('messages.involvement_leadership') }}</label>
                            </div>
                            <div class="radio-option">
                                <input type="radio" id="involvement_entrepreneurship" name="involvement" value="entrepreneurship">
                                <label for="involvement_entrepreneurship">{{ __('messages.involvement_entrepreneurship') }}</label>
                            </div>
                            <div class="radio-option">
                                <input type="radio" id="involvement_innovation" name="involvement" value="innovation">
                                <label for="involvement_innovation">{{ __('messages.involvement_innovation') }}</label>
                            </div>
                            <div class="radio-option">
                                <input type="radio" id="involvement_environmental" name="involvement" value="environmental">
                                <label for="involvement_environmental">{{ __('messages.involvement_environmental') }}</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>{{ __('messages.contribution_label') }}</label>
                        <div class="radio-group">
                            <div class="radio-option">
                                <input type="radio" id="contribution_money" name="contribution" value="money" required>
                                <label for="contribution_money">{{ __('messages.contribution_money') }}</label>
                            </div>
                            <div class="radio-option">
                                <input type="radio" id="contribution_materials" name="contribution" value="materials">
                                <label for="contribution_materials">{{ __('messages.contribution_materials') }}</label>
                            </div>
                            <div class="radio-option">
                                <input type="radio" id="contribution_time" name="contribution" value="time">
                                <label for="contribution_time">{{ __('messages.contribution_time') }}</label>
                            </div>
                            <div class="radio-option">
                                <input type="radio" id="contribution_other" name="contribution" value="other">
                                <label for="contribution_other">{{ __('messages.contribution_other') }}</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="comment">{{ __('messages.comment_label') }}</label>
                        <textarea id="comment" name="comment" class="form-control" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn">{{ __('messages.submit') }}</button>
                </form>
            </div>
            <div class="donation animate-on-scroll">
                <h3>{{ __('messages.donation_title') }}</h3>
                <p>{{ __('messages.donation_desc') }}</p>
                <div class="bank-details">
                    <p><strong>{{ __('messages.account_name') }}:</strong> AFRICA IN GOLD INITIATIVE</p>
                    <p><strong>{{ __('messages.account_number') }}:</strong> 20910033908</p>
                    <p><strong>{{ __('messages.bank') }}:</strong> NMB</p>
                </div>
                <a href="#" class="btn mt-4">{{ __('messages.donate_now') }}</a>
            </div>
        </div>
    </div>
</section>
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
                    <p><a href="mailto:info@africaingold.org">info@africaingold.org</a></p>
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
