@extends('layout')

@section('content')


<!-- Hero Section -->
<section class="relative h-[60vh] min-h-[500px] flex items-center overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1633e6517-1765115190697.png"
            alt="Gedung utama EduVision Academy dengan arsitektur modern yang mencerminkan inovasi pendidikan dan lingkungan belajar yang inspiratif"
            class="w-full h-full object-cover"
            onerror="this.src='https://images.pexels.com/photos/256490/pexels-photo-256490.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
        <div class="absolute inset-0 bg-gradient-to-r from-primary/95 via-primary/80 to-primary/60"></div>
    </div>

    <!-- Hero Content -->
    <div class="container-custom relative z-10">
        <div class="max-w-3xl">
            <div class="inline-block mb-6">
                <span class="bg-accent text-white px-4 py-2 rounded-full text-sm font-semibold">
                    <i class="fas fa-award mr-2"></i>Home / What Makes Us Different</span>
            </div>
            <h1 class="text-white mb-6 font-headline leading-tight">
                What Makes Us Different
            </h1>
            <p class="text-white/90 text-xl md:text-2xl mb-8 leading-relaxed">
                Memberdayakan potensi setiap siswa melalui pendidikan inovatif yang memadukan keunggulan akademik
                tradisional dengan metodologi pembelajaran modern.
            </p>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10 animate-bounce">
        <i class="fas fa-chevron-down text-white text-2xl"></i>
    </div>
</section>


<!-- Why Choose Us Section -->
<section class="section bg-gradient-to-br from-primary to-primary-900 text-white relative overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-white/5 rounded-full translate-y-1/2 -translate-x-1/2"></div>

    <div class="container-custom relative z-10">

        <!-- Flagship 1 -->
        <div class="w-full flex-shrink-0 px-4">
            <div class="card p-8 md:p-12">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="flex-shrink-0">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1983baef3-1765185677980.png"
                            alt="Foto Bapak Ahmad Hidayat, orang tua siswa kelas 8 SMP yang memberikan testimoni positif tentang program STEM di EduVision Academy"
                            class="w-32 h-32 rounded-full object-cover border-4 border-primary-100"
                            onerror="this.src='https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=200&h=200&dpr=2'; this.onerror=null;">
                    </div>
                    <div class="flex-1 text-center md:text-left">
                        <p class="mt-2 text-lg text-text-secondary mb-6 leading-relaxed">
                            Intellectual capital is the driving force of the 21st century. Political, social and
                            economic progress in this
                            millennium will depend on the intellectual potential of future generations of young people.
                            The skills students are
                            being taught, the manner in which they are taught and the necessity to refresh their skills
                            should, thus, come as no
                            surprise. The urgency for workers to expand their skill sets in order to meet the
                            requirements of the 21st century is
                            apparent, given the number of reports from various sources calling for immediate action.
                        </p>


                        <p class="mt-2 text-lg text-text-secondary mb-6 leading-relaxed">
                            By illustrating common definitions and scenarios in relation to the skills students and
                            workers workers need to possess
                            in the emerging digital age, the list serves as a bridge between the public, business and
                            educational sector. In order
                            to prepare themselves properly, students should acquire their skills and competences within
                            the framework of
                            contemporary skills. The ability of students to implement their skills in the digital age as
                            well as objective skill
                            assessments will determine whether the children of today are ready to live, study, work and
                            serve society in a digital
                            environment.
                        </p>


                        <p class="mt-2 text-lg text-text-secondary mb-6 leading-relaxed">
                            The current and the future state of global economy as well as that of individual nations
                            depends on the level of
                            proficiency young people attain in this new kind of literacy – the literacy of the 21st
                            century. Being literate in the
                            21st century means that you have excellent academic skills, that you can think about and
                            comprehend content, that you
                            can work in a team and that you know how to use technology.
                        </p>


                        <p class="mt-2 text-lg text-text-secondary mb-6 leading-relaxed">
                            In order to progress in a digital economy, students will have to acquire the skills of the
                            digital age. The educational
                            system should keep up with these changes in order to successfully prepare its students for
                            the world outside the
                            classroom. The educational system should understand and accept the 21st-century skills into
                            its academic standards. In
                            other words, schools should implement the aforementioned skills into their programmes.
                        </p>


                        <p class="mt-2 text-lg text-text-secondary mb-6 leading-relaxed">
                            The framework for education in the 21st century demonstrates a holistic approach to
                            teaching, which combines the
                            discrete focus on learning objectives (a set of specific skills, substantial knowledge,
                            competence and literacy) with
                            innovative systems which enable students to master multidimensional 21st century skills.

                            These are what many people believe to be the most important skills when it comes to being
                            successful in the 21st
                            century.
                        </p>

                        <h4 class="font-headline font-bold text-xl text-primary">Literacy in the Digital Age – The Basic
                            Requirements of Today</h4>

                        <p class="mt-2 text-lg text-text-secondary mb-6 leading-relaxed">
                            As society changes, the skills needed to perform complex functions also change. In the early
                            years of the 20th century,
                            people who knew how to read, write and do basic maths were considered to be literate. Only
                            in recent years has the
                            educational system come to expect students to be able to read critically, write
                            convincingly, think logically and solve
                            complex mathematical and scientific problems. Students are expected to master computer and
                            media literacy. They have to
                            know how to analyse, access, manage, integrate, evaluate and create information in various
                            media.
                        </p>


                        <h4 class="font-headline font-bold text-xl text-primary">Visual and Information Literacy</h4>


                        <p class="mt-2 text-lg text-text-secondary mb-6 leading-relaxed">
                            The increased use of graphic tools has resulted from the fact that the Internet uses a
                            graphic interface and that audio,
                            video and data have been transferred into the digital format. Digital cameras, graphics,
                            videos, photo standards and
                            other such advanced technologies enable users to convey their ideas through images. Students
                            need good visualisation
                            skills in order to interpret images, spot patterns and communicate via images. Information
                            literacy refers to the
                            effective and efficient access to information, the evaluation of information in critical
                            manner and the use of
                            information in an accurate and creative fashion.
                        </p>


                        <h4 class="font-headline font-bold text-xl text-primary">Cultural Literacy and Global Awareness
                        </h4>

                        <p class="mt-2 text-lg text-text-secondary mb-6 leading-relaxed">
                            The world has been networking at great speed and trade globalisation has increased the need
                            for cultural literacy. In a
                            global economy, where interaction, partnership and global competition are highly regarded,
                            there is a greater need for
                            knowledge, understanding and respect among cultures, including the cultures which have been
                            established as norms in the
                            tech world, e.g. virtual reality
                        </p>


                        <h3 class="font-headline font-bold text-xl text-primary">Creative Thinking – Intellectual
                            Capital
                        </h3>

                        <h4 class="font-headline font-bold text-xl text-primary">Adaptability/managing complexity and
                            self-direction
                        </h4>


                        <p class="mt-2 text-lg text-text-secondary mb-6 leading-relaxed">
                            The interconnectivity of today’s world has brought about an unprecedented complexity.
                            Globalisation and the Internet are
                            very complex and they accelerate the changes in the world. In such an environment,
                            individuals are required to
                            independently identify change and react to it – self-actualised students will learn how to
                            analyse and identify new
                            conditions, as well as the skills necessary for managing them. They must be able to consider
                            alternative plans,
                            anticipate change and understand the way elements within the system are connected
                        </p>

                        <h4 class="font-headline font-bold text-xl text-primary">Curiosity, Creativity and Risk
                        </h4>

                        <p class="mt-2 text-lg text-text-secondary mb-6 leading-relaxed">
                            Future professionals are expected to adapt to an ever-changing environment. This life-long
                            learning process requires one
                            to be curious about the world and the way it works. Researches have now discovered that
                            intellectual efforts can change
                            a person’s brain structure. They discovered a correlation between the amount of experience a
                            person gathers in complex
                            environments and the changes to his brain structure. Curiosity enables lifelong learning, as
                            it contributes to the
                            quality of life and the intellectual capital of a nation. It is also important to take risks
                            – without this, there would
                            be fewer discoveries and inventions and learning would rarely take place.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection