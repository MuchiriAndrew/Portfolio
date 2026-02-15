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
            'hero_cta_text', 'hero_image', 'hero_status_text',
            'about_greeting', 'about_paragraph_1', 'about_paragraph_2', 'about_image',
            'contact_intro', 'support_number', 'discord_username', 'contact_email',
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
                        Forms\Components\FileUpload::make('hero_image')
                        ->label('Hero image')
                        ->image()
                        ->directory('hero')
                        ->imageEditor()
                        ->imageCropAspectRatio('4:3')
                        ->imageResizeTargetWidth(800)
                        ->imageResizeTargetHeight(600)
                        ->imageResizeUpscale(false)
                        ->downloadable()
                        ->openable(),
                        Forms\Components\TextInput::make('hero_status_text')->label('Status (e.g. Currently working on Portfolio)'),
                    ])->columns(1),
                Forms\Components\Section::make('About')
                    ->schema([
                        Forms\Components\RichEditor::make('about_greeting')->label('Greeting (e.g. Hello, i\'m Elias!)')->toolbarButtons(['bold', 'italic', 'underline', 'strike', 'link'])->columnSpanFull(),
                        Forms\Components\RichEditor::make('about_paragraph_1')->label('About paragraph 1')->toolbarButtons(['bold', 'italic', 'underline', 'strike', 'link', 'bulletList', 'orderedList'])->columnSpanFull(),
                        Forms\Components\RichEditor::make('about_paragraph_2')->label('About paragraph 2')->toolbarButtons(['bold', 'italic', 'underline', 'strike', 'link', 'bulletList', 'orderedList'])->columnSpanFull(),
                        Forms\Components\FileUpload::make('about_image')
                        ->label('About image')
                        ->image()
                        ->directory('about')
                        ->imageEditor()
                        ->imageCropAspectRatio('3:4')
                        ->imageResizeTargetWidth(600)
                        ->imageResizeTargetHeight(800)
                        ->imageResizeUpscale(false)
                        ->downloadable()
                        ->openable(),
                    ])->columns(1),
                Forms\Components\Section::make('Contact')
                    ->schema([
                        Forms\Components\RichEditor::make('contact_intro')->label('Contact intro text')->toolbarButtons(['bold', 'italic', 'underline', 'strike', 'link', 'bulletList', 'orderedList'])->columnSpanFull(),
                        Forms\Components\TextInput::make('support_number')->label('Support me here (e.g. card number)'),
                        Forms\Components\TextInput::make('discord_username')->label('Discord (e.g. Elias#1234)'),
                        Forms\Components\TextInput::make('contact_email')->label('Contact email'),
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
