<?php

namespace App\Filament\Pages;

use App\Models\SiteSetting;
use Filament\Actions\Action;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Concerns\InteractsWithFormActions;
use Filament\Pages\Page;
use Filament\Forms;

class Settings extends Page implements HasForms
{
    use InteractsWithForms;
    use InteractsWithFormActions;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?string $navigationLabel = 'Site Settings';
    protected static ?string $title = 'Site Settings';
    protected static string $view = 'filament.pages.settings';

    public ?array $data = [];

    public function mount(): void
    {
        $keys = [
            'site_name', 'hero_title', 'hero_highlight_1', 'hero_highlight_2', 'hero_description',
            'hero_cta_text', 'hero_status_text', 'hero_terminal_code',
            'about_home_greeting', 'about_home_content', 'about_page_greeting', 'about_page_content', 'about_image',
            'career_subtitle', 'career_title_1', 'career_title_2', 'career_intro',
            'home_projects_limit',
            'contact_intro', 'contact_email', 'contact_phone',
            'footer_name', 'footer_email', 'footer_role', 'copyright_text',
        ];
        $settings = [];
        foreach ($keys as $key) {
            $settings[$key] = SiteSetting::get($key);
        }
        $this->form->fill($settings);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Hero')
                    ->schema([
                        Forms\Components\TextInput::make('site_name')->label('Site / Logo name'),
                        Forms\Components\TextInput::make('hero_title')->label('Hero title (e.g. "Andrew is a")'),
                        Forms\Components\TextInput::make('hero_highlight_1')->label('Highlight 1 (e.g. web designer)'),
                        Forms\Components\TextInput::make('hero_highlight_2')->label('Highlight 2 (e.g. front-end developer)'),
                        Forms\Components\RichEditor::make('hero_description')->label('Hero description')->toolbarButtons(['bold', 'italic', 'underline', 'strike', 'link', 'bulletList', 'orderedList'])->columnSpanFull(),
                        Forms\Components\TextInput::make('hero_cta_text')->label('CTA button text'),
                        Forms\Components\TextInput::make('hero_status_text')->label('Status (e.g. Currently working on Portfolio)'),
                        Forms\Components\Textarea::make('hero_terminal_code')
                        ->label('Terminal Code Snippet')
                        ->placeholder('const engineer = {
  name: "Your Name",
  role: "Full-Stack Dev & DevOps",
  builds: "Scalable web systems"
}')
                        ->rows(6)
                        ->helperText('Code snippet to display in the terminal with typing animation')
                        ->columnSpanFull(),
                    ])->columns(1),
                Forms\Components\Section::make('About')
                    ->schema([
                        Forms\Components\Tabs::make('About content')
                            ->tabs([
                                Forms\Components\Tabs\Tab::make('Home page')
                                    ->schema([
                                        Forms\Components\RichEditor::make('about_home_greeting')->label('Title / Greeting')->toolbarButtons(['bold', 'italic', 'underline', 'strike', 'link'])->columnSpanFull()->helperText('Shown in the about section on the home page.'),
                                        Forms\Components\RichEditor::make('about_home_content')->label('Content')->toolbarButtons(['bold', 'italic', 'underline', 'strike', 'link', 'bulletList', 'orderedList'])->columnSpanFull()->helperText('Use Enter for new paragraphs.'),
                                    ]),
                                Forms\Components\Tabs\Tab::make('About page')
                                    ->schema([
                                        Forms\Components\RichEditor::make('about_page_greeting')->label('Title / Greeting')->toolbarButtons(['bold', 'italic', 'underline', 'strike', 'link'])->columnSpanFull()->helperText('Shown at the top of the About page.'),
                                        Forms\Components\RichEditor::make('about_page_content')->label('Content')->toolbarButtons(['bold', 'italic', 'underline', 'strike', 'link', 'bulletList', 'orderedList'])->columnSpanFull()->helperText('Use Enter for new paragraphs.'),
                                    ]),
                            ])->columnSpanFull(),
                        Forms\Components\FileUpload::make('about_image')
                        ->label('About image')
                        ->image()
                        ->directory('about')
                        ->imageEditor()
                        ->imageResizeUpscale(false)
                        ->downloadable()
                        ->openable(),
                    ])->columns(1),
                Forms\Components\Section::make('Career History')
                    ->schema([
                        Forms\Components\TextInput::make('career_subtitle')->label('Subtitle')->placeholder('e.g. Professional background'),
                        Forms\Components\TextInput::make('career_title_1')->label('Title part 1 (white)')->placeholder('e.g. Career'),
                        Forms\Components\TextInput::make('career_title_2')->label('Title part 2 (accent)')->placeholder('e.g.  History'),
                        Forms\Components\RichEditor::make('career_intro')->label('Intro paragraph')->toolbarButtons(['bold', 'italic', 'underline', 'strike', 'link', 'bulletList', 'orderedList'])->columnSpanFull()->helperText('e.g. 3+ years of experience... Get in touch.'),
                    ])->columns(1),
                Forms\Components\Section::make('Projects')
                    ->schema([
                        Forms\Components\TextInput::make('home_projects_limit')
                            ->label('Max projects on home page')
                            ->numeric()
                            ->minValue(1)
                            ->maxValue(24)
                            ->default(6)
                            ->helperText('Number of projects to show in the Projects section on the home page (1–24).'),
                    ])->columns(1),
                Forms\Components\Section::make('Contact')
                    ->schema([
                        Forms\Components\RichEditor::make('contact_intro')->label('Contact intro text')->toolbarButtons(['bold', 'italic', 'underline', 'strike', 'link', 'bulletList', 'orderedList'])->columnSpanFull(),
                        Forms\Components\TextInput::make('contact_email')->label('Contact email')->email(),
                        Forms\Components\TextInput::make('contact_phone')->label('Contact phone'),
                    ])->columns(1),
                Forms\Components\Section::make('Footer')
                    ->schema([
                        Forms\Components\TextInput::make('footer_name')->label('Footer name'),
                        Forms\Components\TextInput::make('footer_email')->label('Footer email'),
                        Forms\Components\TextInput::make('footer_role')->label('Footer role'),
                        Forms\Components\RichEditor::make('copyright_text')->label('Copyright text')->toolbarButtons(['bold', 'italic', 'underline', 'link'])->columnSpanFull(),
                    ])->columns(1),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();
        foreach ($data as $key => $value) {
            if (is_array($value) && count($value) > 0) {
                $value = $value[0] ?? null;
            }
            SiteSetting::set($key, $value !== null && $value !== '' ? (string) $value : null);
        }
        Notification::make()->title('Settings saved.')->success()->send();
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Save')
                ->submit('save')
                ->keyBindings(['mod+s']),
        ];
    }
}
