<?php

namespace App\Http\Controllers;

use App\Models\FunFact;
use App\Models\Project;
use App\Models\SiteSetting;
use App\Models\SkillCategory;
use App\Models\SocialLink;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    private function getSharedData(): array
    {
        $keys = [
            'site_name', 'footer_name', 'footer_email', 'footer_role', 'copyright_text',
            'contact_email', 'discord_username', 'support_number',
        ];
        $settings = [];
        foreach ($keys as $key) {
            $settings[$key] = SiteSetting::get($key);
        }
        $socialLinks = SocialLink::orderBy('sort_order')->get();

        return [
            'siteName' => $settings['site_name'] ?? 'Portfolio',
            'footer' => [
                'name' => $settings['footer_name'] ?? $settings['site_name'],
                'email' => $settings['footer_email'] ?? $settings['contact_email'],
                'role' => $settings['footer_role'] ?? 'Web designer and front-end developer',
                'copyright' => $settings['copyright_text'] ?? '© Copyright ' . date('Y') . '. Made with care.',
            ],
            'socialLinks' => $socialLinks,
        ];
    }

    public function home()
    {
        $shared = $this->getSharedData();
        $hero = [
            'title' => SiteSetting::get('hero_title'),
            'highlight1' => SiteSetting::get('hero_highlight_1'),
            'highlight2' => SiteSetting::get('hero_highlight_2'),
            'description' => SiteSetting::get('hero_description'),
            'ctaText' => SiteSetting::get('hero_cta_text') ?: 'Contact me !!',
            'image' => SiteSetting::get('hero_image') ? '/storage/' . SiteSetting::get('hero_image') : null,
            'statusText' => SiteSetting::get('hero_status_text'),
        ];

        $quote = [
            'text' => SiteSetting::get('quote_text'),
            'author' => SiteSetting::get('quote_author'),
        ];

        $about = [
            'greeting' => SiteSetting::get('about_greeting'),
            'paragraph1' => SiteSetting::get('about_paragraph_1'),
            'paragraph2' => SiteSetting::get('about_paragraph_2'),
            'image' => SiteSetting::get('about_image') ? '/storage/' . SiteSetting::get('about_image') : null,
        ];

        $contact = [
            'intro' => SiteSetting::get('contact_intro'),
            'supportNumber' => SiteSetting::get('support_number'),
            'discord' => SiteSetting::get('discord_username'),
            'email' => SiteSetting::get('contact_email'),
        ];

        $projects = Project::where('is_published', true)->orderBy('sort_order')->get()->map(fn ($p) => [
            'id' => $p->id,
            'title' => $p->title,
            'description' => $p->description,
            'tech_stack' => $p->tech_stack,
            'image' => $p->image ? '/storage/' . $p->image : null,
            'live_url' => $p->live_url,
            'cached_url' => $p->cached_url,
        ]);

        $skillCategories = SkillCategory::with('skills')->orderBy('sort_order')->get()->map(fn ($c) => [
            'name' => $c->name,
            'skills' => $c->skills->pluck('name'),
        ]);

        return Inertia::render('Home', array_merge($shared, [
            'hero' => $hero,
            'quote' => $quote,
            'about' => $about,
            'contact' => $contact,
            'projects' => $projects,
            'skillCategories' => $skillCategories,
        ]));
    }

    public function about()
    {
        $shared = $this->getSharedData();
        $about = [
            'greeting' => SiteSetting::get('about_greeting'),
            'paragraph1' => SiteSetting::get('about_paragraph_1'),
            'paragraph2' => SiteSetting::get('about_paragraph_2'),
            'image' => SiteSetting::get('about_image') ? '/storage/' . SiteSetting::get('about_image') : null,
        ];
        $skillCategories = SkillCategory::with('skills')->orderBy('sort_order')->get()->map(fn ($c) => [
            'name' => $c->name,
            'skills' => $c->skills->pluck('name'),
        ]);
        $funFacts = FunFact::orderBy('sort_order')->get()->pluck('text');

        return Inertia::render('About', array_merge($shared, [
            'about' => $about,
            'skillCategories' => $skillCategories,
            'funFacts' => $funFacts,
        ]));
    }

    public function contact()
    {
        $shared = $this->getSharedData();
        $contact = [
            'intro' => SiteSetting::get('contact_intro'),
            'supportNumber' => SiteSetting::get('support_number'),
            'discord' => SiteSetting::get('discord_username'),
            'email' => SiteSetting::get('contact_email'),
        ];

        return Inertia::render('Contact', array_merge($shared, [
            'contact' => $contact,
        ]));
    }
}
