@extends('layout')

@section('content')


<!-- Hero Section -->
<section class="relative h-[60vh] min-h-[500px] flex items-center overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/music.jpg') }}"
            alt="Gedung utama EduVision Academy dengan arsitektur modern yang mencerminkan inovasi pendidikan dan lingkungan belajar yang inspiratif"
            class="w-full h-full object-cover"
            onerror="this.src='https://images.pexels.com/photos/256490/pexels-photo-256490.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
        <div class="absolute inset-0 bg-gradient-to-r from-primary/95 via-primary/80 to-primary/60"></div>
    </div>

    <!-- Hero Content -->
    <div class="container-custom relative z-10">
        <div class="max-w-2xl">
            <div class="inline-block mb-6">
                <span class="bg-accent text-white px-4 py-2 rounded-full text-sm font-semibold">
                    <i class="fas fa-award mr-2"></i>About Us / School Profile
                </span>
            </div>
            <h1 class="text-white mb-6 font-headline leading-tight">
                School Profile
            </h1>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10 animate-bounce">
        <i class="fas fa-chevron-down text-white text-2xl"></i>
    </div>
</section>


<!-- Philosophy Section -->
<section id="philosophy" class="section bg-white">
    <div class="container-custom">

        <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
            <div class="order-2 lg:order-1">
                <div class="space-y-8">
                    <div class="flex gap-6">
                        <div>
                            <h3 class="text-2xl font-headline font-bold text-primary mb-3">Welcome To Peachblossoms
                                School</h3>
                            <p class="text-justify text-text-secondary leading-relaxed">
                                Over the years, the world that we know since we were born, has changed significantly. We
                                all know technology has revolutionized our world and daily lives. It has changed the way
                                we live, the way we
                                interact with other people, the way we shop, financial system and many other things. We
                                expect our children to do better in
                                this modern life, however the
                                education system has not changed much. There are still many schools using the same
                                methodology that was used a long time
                                ago. They still treat teacher as the main source of information, conventional mindset
                                that student should get a good
                                final score instead of the process, individual result is more important than
                                collaboration and teamwork. Education needs
                                to adapt with the changes. Modern life requires people to collaborate with one another.
                                Many human activities involve
                                groups of people, where individuals rely on each other for things that they cannot do
                                themselves. More and more jobs
                                require a high level of social skills, while the proportion of jobs that require minimal
                                social skills is shrinking.
                            </p>


                            <p class="text-justify text-text-secondary leading-relaxed mt-5">
                                Collaborative learning has been shown to not only develop higher-level thinking skills
                                in students, but boost their
                                confidence and self-esteem as well. Group projects can maximize educational experience
                                by demonstrating the material,
                                while improving social and interpersonal skills Peachblossoms school believe that by
                                placing an emphasis on quality
                                teaching and learning, where children are provided with a rich, stimulating and relevant
                                learning environment, we are
                                creating a strong foundation on which future achievements will be built. Not only do we
                                want to prepare our children for
                                the next stage of their lives, but throughout their time with us we hope they become
                                increasingly confident and
                                independent learners. We want all our children to achieve success in their life by
                                preparing them from an early age
                                throughout the new education system by implementing IPC and IMYC curriculum in our
                                school.
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="order-1 lg:order-2">
                <div class="relative">
                    <img src="{{ asset('images/imyc_class.jpg') }}"
                        alt="Siswa EduVision Academy sedang berkolaborasi dalam pembelajaran berbasis proyek yang mengembangkan keterampilan berpikir kritis dan kreativitas"
                        class="w-full h-[500px] object-cover rounded-2xl shadow-elevated"
                        onerror="this.src='https://images.pexels.com/photos/8500285/pexels-photo-8500285.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                </div>
            </div>
        </div>

    </div>
</section>


@endsection