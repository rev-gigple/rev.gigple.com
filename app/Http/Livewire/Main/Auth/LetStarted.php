<?php





namespace App\Http\Livewire\Main\Auth;

use App\Models\User;
use App\Models\Admin;
use Livewire\Component;
use WireUi\Traits\Actions;
use App\Models\EmailVerification;
use Illuminate\Support\Facades\Hash;
use App\Notifications\Admin\PendingUser;
use App\Notifications\User\Everyone\Welcome;
use App\Notifications\User\Everyone\VerifyEmail;
use App\Http\Validators\Main\Auth\RegisterValidator;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class LetStarted extends Component
{
    use SEOToolsTrait, Actions;
    
    public $email;
    public $username;
    public $password;
    public $fullname;
    public $recaptcha_token;

    public $social_grid;

    /**
     * Initialize component
     *
     * @return void
     */
    public function mount()
    {
        // Set empty social grid counter
        $social_grid_counter = 0;

        // Get auth settings
        $settings_auth = settings('auth');

        // Check if facebook login enabled
        if ($settings_auth->is_facebook_login) {
            $social_grid_counter += 1;
        }

        // Check if twitter login enabled
        if ($settings_auth->is_twitter_login) {
            $social_grid_counter += 1;
        }

        // Check if google login enabled
        if ($settings_auth->is_google_login) {
            $social_grid_counter += 1;
        }

        // Check if github login enabled
        if ($settings_auth->is_github_login) {
            $social_grid_counter += 1;
        }

        // Check if linkedin login enabled
        if ($settings_auth->is_linkedin_login) {
            $social_grid_counter += 1;
        }

        // Set grid
        $this->social_grid = $social_grid_counter;
    }

    // ... Rest of your component code ...

    public function render()
    {
        // SEO and view rendering code

        return view('livewire.main.auth.let-started');
    }
    
    // ... Rest of your component code ...
}
