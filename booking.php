<?php
/**
 * Online Booking Page
 */
$page_title = 'Book Appointment';
require_once 'config/config.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<section class="py-5">
    <div class="container">
        <!-- Page Title -->
        <div class="text-center mb-5" data-aos="fade-up">
            <h1 class="display-4 mb-3">Book an <span class="text-primary">Appointment</span></h1>
            <p class="lead text-muted">Schedule a consultation with me</p>
        </div>

        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card border-0 shadow-lg" data-aos="fade-up">
                    <div class="card-body p-5">
                        <form id="bookingForm" method="POST" action="api/book-appointment.php">
                            <!-- Full Name -->
                            <div class="mb-3">
                                <label for="fullName" class="form-label">Full Name *</label>
                                <input type="text" class="form-control" id="fullName" name="full_name" placeholder="Enter your full name" required>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                            </div>

                            <!-- Phone -->
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number *</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
                            </div>

                            <!-- Service Selection -->
                            <div class="mb-3">
                                <label for="service" class="form-label">Service Type *</label>
                                <select class="form-control" id="service" name="service_id" required>
                                    <option value="">-- Select a Service --</option>
                                    <option value="1">Website Development</option>
                                    <option value="2">Frontend Development</option>
                                    <option value="3">Backend Development</option>
                                    <option value="4">Full Stack Web Apps</option>
                                    <option value="5">UI/UX Design</option>
                                    <option value="6">API Integration</option>
                                    <option value="7">Website Maintenance</option>
                                </select>
                            </div>

                            <!-- Date Selection -->
                            <div class="mb-3">
                                <label for="date" class="form-label">Preferred Date *</label>
                                <input type="date" class="form-control" id="date" name="booking_date" required>
                            </div>

                            <!-- Time Selection -->
                            <div class="mb-3">
                                <label for="time" class="form-label">Preferred Time *</label>
                                <input type="time" class="form-control" id="time" name="booking_time" required>
                            </div>

                            <!-- Message -->
                            <div class="mb-4">
                                <label for="message" class="form-label">Additional Message</label>
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Tell me about your project..."></textarea>
                            </div>

                            <!-- Terms & Conditions -->
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                                <label class="form-check-label" for="terms">
                                    I agree to the terms and conditions
                                </label>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary btn-lg w-100">
                                <i class="fas fa-check me-2"></i>Confirm Booking
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Booking Info -->
                <div class="row mt-5">
                    <div class="col-md-4" data-aos="fade-up">
                        <div class="text-center">
                            <i class="fas fa-clock fa-2x text-primary mb-3"></i>
                            <h5>Duration</h5>
                            <p class="text-muted">30-60 minutes</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="text-center">
                            <i class="fas fa-video fa-2x text-primary mb-3"></i>
                            <h5>Format</h5>
                            <p class="text-muted">Video Call / In-Person</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="text-center">
                            <i class="fas fa-check-circle fa-2x text-primary mb-3"></i>
                            <h5>Confirmation</h5>
                            <p class="text-muted">Email confirmation sent</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Set minimum date to today
const dateInput = document.getElementById('date');
const today = new Date().toISOString().split('T')[0];
dateInput.setAttribute('min', today);
</script>

<?php require_once 'includes/footer.php'; ?>
