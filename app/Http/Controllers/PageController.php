<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmittedMail;
use App\Models\ContactSubmission;
use App\Models\Education;
use App\Models\Experience;
use App\Models\FunFact;
use App\Models\Project;
use App\Models\Quote;
use App\Models\SiteSetting;
use App\Models\Skill;
use App\Models\SocialLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;

class PageController extends Controller
{
    private function getSharedData(): array
    {
        $keys = [
            'site_name', 'footer_name', 'footer_email', 'footer_role', 'copyright_text',
            'contact_email', 'contact_phone',
        ];
        $settings = [];
        foreach ($keys as $key) {
            $settings[$key] = SiteSetting::get($key);
        }
        $socialLinks = SocialLink::orderBy('sort_order')->get()->map(fn ($link) => [
            'id' => $link->id,
            'platform' => $link->platform,
            'label' => $link->label,
            'url' => $link->url,
            'logo' => $link->logo ? '/storage/' . $link->logo : null,
        ]);

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
            'statusText' => SiteSetting::get('hero_status_text'),
            'terminalCode' => SiteSetting::get('hero_terminal_code'),
        ];

        $quotes = Quote::orderBy('sort_order')->get()->map(fn ($q) => [
            'id' => $q->id,
            'text' => $q->text,
            'author' => $q->author,
        ])->values()->all();

        $about = [
            'greeting' => SiteSetting::get('about_home_greeting'),
            'content' => SiteSetting::get('about_home_content'),
            'image' => SiteSetting::get('about_image') ? '/storage/' . SiteSetting::get('about_image') : null,
        ];

        $career = [
            'subtitle' => SiteSetting::get('career_subtitle'),
            'title1' => SiteSetting::get('career_title_1'),
            'title2' => SiteSetting::get('career_title_2'),
            'intro' => SiteSetting::get('career_intro'),
        ];

        $contact = [
            'intro' => SiteSetting::get('contact_intro'),
            'email' => SiteSetting::get('contact_email'),
            'phone' => SiteSetting::get('contact_phone'),
        ];

        $homeProjectsLimit = (int) SiteSetting::get('home_projects_limit');
        if ($homeProjectsLimit < 1) {
            $homeProjectsLimit = 6;
        }
        $projects = Project::where('is_published', true)->orderBy('sort_order')->limit($homeProjectsLimit)->get()->map(fn ($p) => [
            'id' => $p->id,
            'slug' => $p->slug,
            'title' => $p->title,
            'description' => $p->description,
            'tech_stack' => $p->tech_stack,
            'image' => $p->image ? '/storage/' . $p->image : null,
            'live_url' => $p->live_url,
            'github_url' => $p->github_url,
        ]);

        $skills = Skill::orderBy('sort_order')->get()->map(fn ($s) => [
            'id' => $s->id,
            'name' => $s->name,
            'image' => $s->image ? '/storage/' . $s->image : null,
        ]);

        $experiences = Experience::orderBy('sort_order')->get()->map(fn ($e) => [
            'id' => $e->id,
            'company' => $e->company,
            'title' => $e->title,
            'role_tag' => $e->role_tag,
            'date_range' => $e->date_range,
            'tech_stack' => $e->tech_stack,
            'description' => $e->description,
        ])->values()->all();
        $education = Education::orderBy('sort_order')->get()->map(fn ($e) => [
            'id' => $e->id,
            'institution' => $e->institution,
            'degree' => $e->degree,
            'date_range' => $e->date_range,
            'description' => $e->description,
        ])->values()->all();

        return Inertia::render('Home', array_merge($shared, [
            'hero' => $hero,
            'quotes' => $quotes,
            'about' => $about,
            'career' => $career,
            'contact' => $contact,
            'projects' => $projects,
            'skills' => $skills,
            'experiences' => $experiences,
            'education' => $education,
        ]));
    }

    public function about()
    {
        $shared = $this->getSharedData();
        $about = [
            'greeting' => SiteSetting::get('about_page_greeting'),
            'content' => SiteSetting::get('about_page_content'),
            'image' => SiteSetting::get('about_image') ? '/storage/' . SiteSetting::get('about_image') : null,
        ];
        $career = [
            'subtitle' => SiteSetting::get('career_subtitle'),
            'title1' => SiteSetting::get('career_title_1'),
            'title2' => SiteSetting::get('career_title_2'),
            'intro' => SiteSetting::get('career_intro'),
        ];
        $skills = Skill::orderBy('sort_order')->get()->map(fn ($s) => [
            'id' => $s->id,
            'name' => $s->name,
            'image' => $s->image ? '/storage/' . $s->image : null,
        ]);
        $funFacts = FunFact::orderBy('sort_order')->get()->pluck('text');
        $experiences = Experience::orderBy('sort_order')->get()->map(fn ($e) => [
            'id' => $e->id,
            'company' => $e->company,
            'title' => $e->title,
            'role_tag' => $e->role_tag,
            'date_range' => $e->date_range,
            'tech_stack' => $e->tech_stack,
            'description' => $e->description,
        ])->values()->all();
        $education = Education::orderBy('sort_order')->get()->map(fn ($e) => [
            'id' => $e->id,
            'institution' => $e->institution,
            'degree' => $e->degree,
            'date_range' => $e->date_range,
            'description' => $e->description,
        ])->values()->all();

        return Inertia::render('About', array_merge($shared, [
            'about' => $about,
            'career' => $career,
            'skills' => $skills,
            'funFacts' => $funFacts,
            'experiences' => $experiences,
            'education' => $education,
        ]));
    }

    public function contact()
    {
        $shared = $this->getSharedData();
        $contact = [
            'intro' => SiteSetting::get('contact_intro'),
            'email' => SiteSetting::get('contact_email'),
            'phone' => SiteSetting::get('contact_phone'),
        ];

        return Inertia::render('Contact', array_merge($shared, [
            'contact' => $contact,
        ]));
    }

    private const CONTACT_FORWARD_EMAIL = 'kariukia225@gmail.com';

    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'title' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:10000'],
        ]);

        $submission = ContactSubmission::create($validated);

        try {
            Mail::to(self::CONTACT_FORWARD_EMAIL)->send(new ContactFormSubmittedMail($submission));
        } catch (\Throwable $e) {
            report($e);
            return back()->withErrors(['email' => 'Your message was saved but we could not send the notification. Please try again later.']);
        }

        return back()->with('contactSuccess', true);
    }

    private const WORKS_PER_PAGE = 12;

    private function projectToArray(Project $p): array
    {
        return [
            'id' => $p->id,
            'slug' => $p->slug,
            'title' => $p->title,
            'description' => $p->description,
            'tech_stack' => $p->tech_stack,
            'image' => $p->image ? '/storage/' . $p->image : null,
            'live_url' => $p->live_url,
            'github_url' => $p->github_url,
        ];
    }

    public function projectsIndex(Request $request)
    {
        $paginator = Project::where('is_published', true)
            ->orderBy('sort_order')
            ->paginate(self::WORKS_PER_PAGE);

        $projects = $paginator->getCollection()->map(fn ($p) => $this->projectToArray($p))->values()->all();

        if ($request->wantsJson()) {
            return response()->json([
                'data' => $projects,
                'meta' => [
                    'current_page' => $paginator->currentPage(),
                    'last_page' => $paginator->lastPage(),
                    'next_page_url' => $paginator->nextPageUrl(),
                ],
            ]);
        }

        $shared = $this->getSharedData();
        return Inertia::render('Projects', array_merge($shared, [
            'projects' => $projects,
            'meta' => [
                'current_page' => $paginator->currentPage(),
                'last_page' => $paginator->lastPage(),
                'next_page_url' => $paginator->nextPageUrl(),
            ],
        ]));
    }

    public function projectShow(Project $project)
    {
        if (! $project->is_published) {
            abort(404);
        }
        $shared = $this->getSharedData();
        return Inertia::render('ProjectShow', array_merge($shared, [
            'project' => [
                'title' => $project->title,
                'slug' => $project->slug,
                'description' => $project->description,
                'content' => $project->content ? (string) str($project->content)->markdown()->sanitizeHtml() : null,
                'image' => $project->image ? '/storage/' . $project->image : null,
                'tech_stack' => $project->tech_stack,
                'live_url' => $project->live_url,
                'github_url' => $project->github_url,
                'admin_url' => $project->admin_url,
                'admin_button_title' => $project->admin_button_title ?? 'Admin',
            ],
        ]));
    }
}
