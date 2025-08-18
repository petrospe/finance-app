<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        // Set app locale to logged-in user language
        $locale = $request->user()?->language ?? app()->getLocale();

        // If locale folder doesn't exist, force fallback to English
        if (!is_dir(lang_path("$locale"))) {
            $locale = config('app.fallback_locale');
        }

        app()->setLocale($locale);

        // Now sync only for this locale
        syncLangFiles(['menu', 'messages']);

        return [
            ...parent::share($request),
            'auth' => [
                'user' => $request->user(),
            ],
            'locale' => $locale,
        ];
    }
}
