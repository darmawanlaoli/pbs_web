@extends('layout')

@section('content')


<!-- Main Accreditation -->
<div class="card bg-gradient-to-r from-primary to-secondary text-white p-12 mb-12 text-center">
    <div class="max-w-3xl mx-auto">
        <div class="w-32 h-32 bg-white rounded-full flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-award text-6xl text-accent"></i>
        </div>
        <h3 class="text-4xl font-headline font-bold mb-4">Vision</h3>
        <p class="text-xl text-white/90 leading-relaxed mb-6">
            Peachblossoms school shall endeavour to maximize the potential of every child through an active partnership
            between
            children, teacher, parents and trustees. The school aims to achieve this by providing a positive, secure,
            and caring
            enviroment where individual differences acknowledged and appreciated, bu mutual respect, understanding and
            effective
            communication between home and school.
        </p>

        <h3 class="mt-5 text-4xl font-headline font-bold mb-4">Mission</h3>
        <p class="text-xl text-white/90 leading-relaxed mb-6">
            The school is dedicated to enabling students to think critically and creatively by establishing a strong
            foundaion in
            academics, the humanities and spiritual education.
        </p>
    </div>
</div>



<!-- SMP Program Section -->
<section id="smp" class="section bg-surface">
    <div class="container-custom">

        <!-- Program Overview -->
        <div class="grid lg:grid-cols-2 gap-12 mb-16">
            <div class="flex flex-col justify-center order-2 lg:order-1">
                <h3 class="text-3xl font-headline font-bold text-secondary mb-6">Core Values</h3>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div
                            class="w-12 h-12 bg-secondary-50 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                            <i class="fas fa-flask text-secondary text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-headline font-bold text-lg text-primary mb-2">Truth</h4>
                            <p class="text-text-secondary">The school is dedicated to enabling students to think
                                critically and creatively by establishing a strong foundaion in
                                academics, the humanities and spiritual education.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div
                            class="w-12 h-12 bg-primary-50 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                            <i class="fas fa-code text-primary text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-headline font-bold text-lg text-primary mb-2">Growth</h4>
                            <p class="text-text-secondary">We acknowledge individual human growth and development as
                                lifelong processes. Our school honors and nurtures the growth
                                in each student and teacher.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div
                            class="w-12 h-12 bg-accent-50 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                            <i class="fas fa-project-diagram text-accent text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-headline font-bold text-lg text-primary mb-2">Honesty and Respect</h4>
                            <p class="text-text-secondary">Honesty and open communication are the foundation in our
                                school environment relationships. We respect, support, and
                                value each member of our school family. Our school strives to be a force for good will
                                within its walls, in the
                                community and our nation.
                            </p>
                        </div>

                    </div>

                    <div class="flex items-start">
                        <div
                            class="w-12 h-12 bg-accent-50 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                            <i class="fas fa-project-diagram text-accent text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-headline font-bold text-lg text-primary mb-2">Resilience</h4>
                            <p class="text-text-secondary">As we firmly believe that children need to be able to respond
                                confidently to the changes or uncertainties they may face
                                in their lives. We also know that resilient children are happier children. Through
                                developing self- management skills,
                                promoting a strong tradition and culture in school, and broadening knowledge as part of
                                our varied curriculum, we can
                                ensure that our students are able to overcome any adversity.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="order-1 lg:order-2">
                <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1826163bc-1764667809974.png"
                    alt="Siswa SMP EduVision Academy melakukan eksperimen kimia di laboratorium sains yang dilengkapi peralatan modern"
                    class="w-full h-96 object-cover rounded-lg shadow-elevated"
                    onerror="this.src='https://images.pexels.com/photos/8500285/pexels-photo-8500285.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
            </div>
        </div>
    </div>
</section>


@endsection
