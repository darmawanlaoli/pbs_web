@extends('layout')

@section('content')


<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-primary to-primary-900 text-white py-20 overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-white/5 rounded-full translate-y-1/2 -translate-x-1/2"></div>

    <div class="container-custom relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-block mb-6">
                <span class="bg-accent text-white px-4 py-2 rounded-full text-sm font-semibold">
                    <i class="fas fa-comments mr-2"></i>We Are Ready to Help You
                </span>
            </div>
            <h1 class="text-white mb-6 font-headline">Contact Us</h1>
            <p class="text-xl text-white/90 leading-relaxed max-w-3xl mx-auto">
                Our team is ready to answer your questions about the education programs, admission process, or other
                information. Let's build a bright future for your child together.
            </p>
        </div>
    </div>
</section>

<!-- Contact Form & Map Section -->
<section class="section bg-surface">
    <div class="container-custom">

        <div class="text-center mb-12">
            <h2 class="section-title">Get In Touch</h2>
            <p class="section-subtitle text-center mx-auto">
                Fill in the form below and our team will contact you soon.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div>
                <form method="POST" action="{{ route('contact.submit') }}" id="contact-form" class="card p-8 space-y-6">

                    @csrf

                    <!-- Honeypot -->
                    <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">

                    <!-- Inquiry Type -->
                    <div>
                        <label class="form-label">Type of Question</label>
                        <select name="inquiry_type" class="form-input" required>
                            <option value="">Select question type...</option>
                            <option value="admission">Admissions Information</option>
                            <option value="academic">Academic Program</option>
                            <option value="facilities">Facilities & Campus Tour</option>
                            <option value="fees">Tuition Fees</option>
                            <option value="scholarship">Scholarship Program</option>
                            <option value="general">General Inquiry</option>
                            <option value="other">Other</option>
                        </select>
                        @error('inquiry_type') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>

                    <!-- Name -->
                    <div>
                        <label class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-input" required>
                        @error('name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>

                    <!-- Phone -->
                    <div>
                        <label class="form-label">Phone Number</label>
                        <input type="tel" name="phone" class="form-input" required>
                        @error('phone') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>

                    <!-- School Level -->
                    <div>
                        <label class="form-label">Education Level of Interest</label>
                        <select name="school_level" class="form-input">
                            <option value="">Select education level...</option>
                            <option value="Preschool & Kindergarten">Preschool & Kindergarten</option>
                            <option value="Primary School">Primary School</option>
                            <option value="High School">High School</option>
                        </select>
                    </div>

                    <!-- Message -->
                    <div>
                        <label class="form-label">Message</label>
                        <textarea name="message" rows="5" class="form-input" required></textarea>
                        @error('message') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>

                    <!-- Contact Method -->
                    <div>
                        <label class="form-label">Preferred Contact Method</label>
                        <div class="flex gap-4">
                            <label><input type="radio" name="contact_method" value="phone" checked> Phone</label>
                            <label><input type="radio" name="contact_method" value="whatsapp"> WhatsApp</label>
                        </div>
                    </div>

                    <!-- Privacy Consent -->
                    <div>
                        <label class="flex items-start"> <input type="checkbox" name="privacy-consent" class="mt-1 mr-3"
                                required> <span class="text-sm text-text-secondary"> I agree to the <a href="">Privacy
                                    Policy</a> and give permission to
                                Peachblossoms School to contact me regarding this inquiry. </span> </label>
                        @error('privacy-consent') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>

                    <!-- Buttons -->
                    <div class="flex gap-4">
                        <button type="submit" class="btn btn-primary flex-1">
                            Send Message
                        </button>
                        <button type="reset" class="btn btn-outline flex-1">Reset Form</button>
                    </div>

                </form>
            </div>

            <!-- Interactive Map & Additional Info -->
            <div class="space-y-8">

                <!-- Office Hours -->
                <div class="card p-8 bg-gradient-to-br from-primary to-primary-900 text-white">
                    <h3 class="text-2xl font-headline font-bold mb-6">Operating Hours</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center pb-3 border-b border-white/20">
                            <span class="font-semibold">Monday - Friday: </span>
                            <span>07:00 - 16:00 WIB</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-semibold">Sunday & Public Holidays: </span>
                            <span>Closed</span>
                        </div>
                    </div>
                    <div class="mt-6 p-4 bg-white/10 rounded-lg">
                        <p class="text-sm">
                            <i class="fas fa-info-circle mr-2"></i>
                            For school visits, please make an appointment first via phone or email.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Live Chat & Social Media Section -->
<section class="section bg-white">
    <div class="container-custom">
        <div class="text-center mb-12">
            <h2 class="section-title">Other Ways to Contact Us</h2>
            <p class="section-subtitle mx-auto">
                Choose the communication method that is most convenient for you.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- WhatsApp -->
            <div class="card p-8 text-center transform hover:scale-105 transition-transform duration-300">
                <div class="w-16 h-16 bg-success-50 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fab fa-whatsapp text-3xl text-success"></i>
                </div>
                <h3 class="font-headline font-bold text-lg text-primary mb-2">WhatsApp</h3>
                <p class="text-sm text-text-secondary mb-4">Chat directly with our team</p>
                <a href="https://wa.me/6282114775734" target="_blank" rel="noopener noreferrer"
                    class="btn btn-secondary w-full">
                    <i class="fab fa-whatsapp mr-2"></i>
                    <span>Chat Now</span>
                </a>
            </div>

            <!-- Facebook -->
            <div class="card p-8 text-center transform hover:scale-105 transition-transform duration-300">
                <div class="w-16 h-16 bg-primary-50 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fab fa-facebook-f text-3xl text-primary"></i>
                </div>
                <h3 class="font-headline font-bold text-lg text-primary mb-2">Facebook</h3>
                <p class="text-sm text-text-secondary mb-4">Follow our latest updates</p>
                <a href="https://www.facebook.com/share/16TWsc1JUH/" class="btn btn-outline w-full">
                    <i class="fab fa-facebook-f mr-2"></i>
                    <span>Visit Page</span>
                </a>
            </div>

            <!-- Instagram -->
            <div class="card p-8 text-center transform hover:scale-105 transition-transform duration-300">
                <div class="w-16 h-16 bg-accent-50 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fab fa-instagram text-3xl text-accent"></i>
                </div>
                <h3 class="font-headline font-bold text-lg text-primary mb-2">Instagram</h3>
                <p class="text-sm text-text-secondary mb-4">See school activities</p>
                <a href="https://www.instagram.com/peachblossoms_school/" class="btn btn-outline w-full">
                    <i class="fab fa-instagram mr-2"></i>
                    <span>Follow Us</span>
                </a>
            </div>

            <!-- YouTube -->
            <div class="card p-8 text-center transform hover:scale-105 transition-transform duration-300">
                <div class="w-16 h-16 bg-error-50 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fab fa-tiktok text-3xl text-error"></i>
                </div>
                <h3 class="font-headline font-bold text-lg text-primary mb-2">TikTok</h3>
                <p class="text-sm text-text-secondary mb-4">Watch activity videos</p>
                <a href="javascript:void(0)" class="btn btn-outline w-full">
                    <i class="fab fa-tiktok mr-2"></i>
                    <span>Follow Us</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section bg-surface">
    <div class="container-custom">
        <div class="text-center mb-12">
            <h2 class="section-title">Frequently Asked Questions (FAQ)</h2>
            <p class="section-subtitle mx-auto">
                Find quick answers to common questions.
            </p>
        </div>

        <div class="max-w-4xl mx-auto space-y-4" onclick="infoAlert()">
            <!-- FAQ Item 1 -->
            <div class="card overflow-hidden">
                <button
                    class="faq-question w-full text-left p-6 flex items-center justify-between hover:bg-surface transition-smooth">
                    <span class="font-semibold text-primary pr-4">How do I register as a new student?</span>
                    <i class="fas fa-chevron-down text-primary transition-transform duration-300"></i>
                </button>
                <div class="faq-answer hidden px-6 pb-6">
                    <p class="text-text-secondary leading-relaxed">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis pariatur est molestiae
                        totam quia eligendi, placeat tempora provident dignissimos repellendus voluptatum, atque facere
                        veniam unde dolore necessitatibus obcaecati et quaerat!
                    </p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="card overflow-hidden">
                <button
                    class="faq-question w-full text-left p-6 flex items-center justify-between hover:bg-surface transition-smooth">
                    <span class="font-semibold text-primary pr-4">Are scholarship programs available?</span>
                    <i class="fas fa-chevron-down text-primary transition-transform duration-300"></i>
                </button>
                <div class="faq-answer hidden px-6 pb-6">
                    <p class="text-text-secondary leading-relaxed">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo molestiae pariatur sequi eligendi
                        quo error beatae! Unde molestias quisquam distinctio ad laudantium molestiae impedit dicta
                        perferendis magnam alias! Laudantium, soluta?
                    </p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="card overflow-hidden">
                <button
                    class="faq-question w-full text-left p-6 flex items-center justify-between hover:bg-surface transition-smooth">
                    <span class="font-semibold text-primary pr-4">What facilities are available at the school?</span>
                    <i class="fas fa-chevron-down text-primary transition-transform duration-300"></i>
                </button>
                <div class="faq-answer hidden px-6 pb-6">
                    <p class="text-text-secondary leading-relaxed">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea tempore dolores nobis beatae,
                        maiores facilis veritatis expedita autem impedit commodi quis eligendi, illo officiis vitae iste
                        velit nostrum repudiandae pariatur.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="card overflow-hidden">
                <button
                    class="faq-question w-full text-left p-6 flex items-center justify-between hover:bg-surface transition-smooth">
                    <span class="font-semibold text-primary pr-4">What curriculum does the school use?</span>
                    <i class="fas fa-chevron-down text-primary transition-transform duration-300"></i>
                </button>
                <div class="faq-answer hidden px-6 pb-6">
                    <p class="text-text-secondary leading-relaxed">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis ipsum exercitationem quo illo
                        molestias at blanditiis rerum laudantium quisquam est, culpa architecto quibusdam maxime
                        doloremque beatae, impedit quas animi mollitia!
                    </p>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="card overflow-hidden">
                <button
                    class="faq-question w-full text-left p-6 flex items-center justify-between hover:bg-surface transition-smooth">
                    <span class="font-semibold text-primary pr-4">How does the school support students with special
                        learning needs?</span>
                    <i class="fas fa-chevron-down text-primary transition-transform duration-300"></i>
                </button>
                <div class="faq-answer hidden px-6 pb-6">
                    <p class="text-text-secondary leading-relaxed">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem voluptates distinctio
                        aut neque id saepe? Aliquid numquam nisi quis ea officia minus libero? Assumenda velit officiis
                        sunt tempora provident adipisci.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Message Sent!',
        text: '{{ session("success") }}',
        confirmButtonText: 'OK'
    });
</script>
@endif


@endsection