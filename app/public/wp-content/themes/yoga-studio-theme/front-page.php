<?php
/* Template: Front Page */
get_header(); ?>

<!-- Hero -->
<section class="relative isolate h-[70vh] flex items-center justify-center text-center">
        <img src="<?php echo get_theme_file_uri('/images/hero.png'); ?>"
         alt="Group practicing yoga"
         class="absolute inset-0 -z-10 h-full w-full object-cover"/>
    <div class="max-w-2xl px-6">
        <h1 class="font-heading text-5xl md:text-6xl text-white drop-shadow">
            Find Your Balance
        </h1>
        <a href="#schedule"
           class="btn-primary mt-8">
            Book a Class
        </a>
    </div>
</section>

<!-- Three-service row -->
<section class="bg-sand">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 text-center gap-10 py-12">
        <?php
        $services = [
            ['icon' => 'studio.png',  'label' => 'In-Studio'],
            ['icon' => 'stream.png',  'label' => 'Livestream'],
            ['icon' => 'ondemand.png','label' => 'On-Demand']
        ];
        foreach ( $services as $item ) : ?>
            <div>
                <img src="<?php echo get_theme_file_uri('/images/icons/' . $item['icon']); ?>"
                     alt=""
                     class="mx-auto h-12 mb-4"/>
                <p class="text-lg font-semibold"><?php echo esc_html( $item['label'] ); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Featured schedule -->
<section id="schedule" class="py-16">
    <div class="container mx-auto">
        <h2 class="font-heading text-3xl text-center mb-10">Featured Class Schedule</h2>

        <div class="overflow-x-auto">
            <table class="min-w-full border-separate border-spacing-y-3 text-center">
                <thead class="bg-sage text-white">
                <tr>
                    <th class="px-4 py-2">Mon</th>
                    <th class="px-4 py-2">Tue</th>
                    <th class="px-4 py-2">Wed</th>
                    <th class="px-4 py-2">Thu</th>
                    <th class="px-4 py-2">Fri</th>
                </tr>
                </thead>
                <tbody>
                <tr class="bg-sand/40">
                    <td class="py-2">5:00 am — Vinyasa</td>
                    <td>Swimmer</td><td>In-Studio</td><td class="font-bold">6:00 am — Sunrise Flow</td><td>Summer Yin</td>
                </tr>
                <tr class="bg-sand/60">
                    <td class="py-2">5:00 pm — Yin</td><td>Yoga Nidra</td><td>On-Demand</td><td>5:30 pm — Cafe Tum</td><td>Slow Flow</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Instructor spotlight -->
<?php
$teacher_photo = get_theme_file_uri('/images/emma.png'); // placeholder
?>
<section class="bg-sand py-16">
    <div class="container mx-auto flex flex-col md:flex-row items-center gap-10">
        <img src="<?php echo esc_url( $teacher_photo ); ?>" alt="Emma Duncan"
             class="h-40 w-40 rounded-full object-cover shadow-lg">
        <div>
            <h3 class="font-heading text-2xl mb-2">Emma Duncan</h3>
            <p class="mb-4">Emma combines alignment-based Hatha with creative sequencing to help
                students discover mindful movement and resilience.</p>
            <a href="/about" class="text-sage underline hover:no-underline">Meet all instructors →</a>
        </div>
    </div>
</section>

<!-- Newsletter CTA -->
<section class="py-16 text-center">
    <h2 class="font-heading text-3xl mb-6">Subscribe to Our Newsletter</h2>
    <form class="mx-auto flex max-w-md gap-2">
        <input type="email"
               placeholder="Email address"
               class="flex-1 rounded border border-sage/40 px-4 py-3 focus:outline-none">
        <button class="btn-primary">Subscribe</button>
    </form>
</section>

<?php get_footer(); ?>
