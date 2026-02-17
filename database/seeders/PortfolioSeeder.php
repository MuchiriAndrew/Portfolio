<?php

namespace Database\Seeders;

use App\Models\Education;
use App\Models\Experience;
use App\Models\FunFact;
use App\Models\Project;
use App\Models\Quote;
use App\Models\SiteSetting;
use App\Models\Skill;
use App\Models\SocialLink;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            'site_name' => 'Andrew',
            'hero_title' => 'Andrew is a',
            'hero_highlight_1' => 'web designer',
            'hero_highlight_2' => 'front-end developer',
            'hero_description' => 'He crafts responsive websites where technologies meet creativity',
            'hero_cta_text' => 'Contact me !!',
            'hero_status_text' => 'Currently working on Portfolio',
            'about_home_greeting' => "Hello, i'm Andrew!",
            'about_home_content' => "<p>I'm a self-taught front-end developer. I can develop responsive websites from scratch and raise them into modern user-friendly web experiences.</p>",
            'about_page_greeting' => "Hello, i'm Andrew!",
            'about_page_content' => "<p>I'm a self-taught front-end developer. I can develop responsive websites from scratch and raise them into modern user-friendly web experiences.</p><p>Transforming my creativity and knowledge into websites has been my passion. I always strive to learn about the newest technologies and frameworks.</p>",
            'contact_intro' => "I'm interested in freelance opportunities. However, if you have other request or question, don't hesitate to contact me",
            'contact_email' => 'andrew@example.com',
            'contact_phone' => null,
            'footer_name' => 'Andrew',
            'footer_email' => 'andrew@example.com',
            'footer_role' => 'Web designer and front-end developer',
            'copyright_text' => '© Copyright ' . date('Y') . '. Made by Andrew',
        ];
        foreach ($settings as $key => $value) {
            SiteSetting::set($key, $value);
        }

        $quotes = [
            ['text' => '<p>With great power comes great electricity bill.</p>', 'author' => '— Dr. Who', 'sort_order' => 0],
            ['text' => '<p>Code is like humor. When you have to explain it, it’s bad.</p>', 'author' => '— Cory House', 'sort_order' => 1],
        ];
        foreach ($quotes as $q) {
            Quote::create($q);
        }

        Experience::create([
            'company' => 'Belva Digital',
            'title' => 'Senior Frontend Developer',
            'role_tag' => null,
            'date_range' => 'Jan 2025 - Present',
            'tech_stack' => 'Next.js, Vue.js, TypeScript, Tailwind CSS',
            'description' => '<ul><li>Led development of scalable frontend applications using Next.js, Vue.js, TypeScript, and Tailwind CSS</li><li>Collaborated with UI/UX designers to convert Figma wireframes into accessible, high-performance interfaces</li><li>Optimized frontend codebase and applied performance monitoring tools</li></ul>',
            'sort_order' => 0,
        ]);

        Education::create([
            'institution' => 'Example University',
            'degree' => 'BSc Computer Science',
            'date_range' => '2015 - 2019',
            'description' => '<p>Focus on software engineering and web technologies.</p>',
            'sort_order' => 0,
        ]);

        $skillNames = [
            'JavaScript', 'TypeScript', 'Python', 'PHP', 'Vue', 'React', 'Laravel', 'Next.js',
            'Tailwind CSS', 'Figma', 'Django', 'Bootstrap', 'jQuery', 'WordPress', 'HTML5', 'CSS3', 'MySQL', 'Git',
        ];
        foreach ($skillNames as $i => $name) {
            Skill::create(['name' => $name, 'sort_order' => $i]);
        }

        $facts = [
            'I like winter more than summer',
            'I often bike with my friends',
            'I like pizza and pasta',
            'My favorite movie is The Green Mile',
            'I am still learning every day',
        ];
        foreach ($facts as $i => $text) {
            FunFact::create(['text' => $text, 'sort_order' => $i]);
        }

        $socials = [
            ['platform' => 'github', 'label' => 'GitHub', 'url' => 'https://github.com', 'sort_order' => 0],
            ['platform' => 'discord', 'label' => 'Discord', 'url' => null, 'sort_order' => 1],
            ['platform' => 'twitter', 'label' => '@andrew', 'url' => null, 'sort_order' => 2],
        ];
        foreach ($socials as $s) {
            SocialLink::create($s);
        }

        Project::create([
            'title' => 'Portfolio v2',
            'slug' => 'portfolio-v2',
            'description' => 'This portfolio site built with Laravel, Inertia, Vue and Filament.',
            'tech_stack' => 'HTML Tailwind Vue Laravel Inertia',
            'live_url' => null,
            'sort_order' => 0,
            'is_published' => true,
        ]);
    }
}
