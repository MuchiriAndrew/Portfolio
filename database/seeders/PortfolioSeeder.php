<?php

namespace Database\Seeders;

use App\Models\FunFact;
use App\Models\Project;
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
            'quote_text' => 'With great power comes great electricity bill',
            'quote_author' => 'Dr. Who',
            'about_greeting' => "Hello, i'm Andrew!",
            'about_paragraph_1' => "I'm a self-taught front-end developer. I can develop responsive websites from scratch and raise them into modern user-friendly web experiences.",
            'about_paragraph_2' => 'Transforming my creativity and knowledge into websites has been my passion. I always strive to learn about the newest technologies and frameworks.',
            'contact_intro' => "I'm interested in freelance opportunities. However, if you have other request or question, don't hesitate to contact me",
            'contact_email' => 'andrew@example.com',
            'discord_username' => 'Andrew#1234',
            'footer_name' => 'Andrew',
            'footer_email' => 'andrew@example.com',
            'footer_role' => 'Web designer and front-end developer',
            'copyright_text' => '© Copyright ' . date('Y') . '. Made by Andrew',
        ];
        foreach ($settings as $key => $value) {
            SiteSetting::set($key, $value);
        }

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
            'cached_url' => null,
            'sort_order' => 0,
            'is_published' => true,
        ]);
    }
}
