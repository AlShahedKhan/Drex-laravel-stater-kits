<?php

namespace Database\Seeders;

use App\Models\Search;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SearchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Search::create([
            'url' => 'dashboard'
        ]);
        Search::create([
            'url' => 'users'
        ]);
        Search::create([
            'url' => 'languages'
        ]);
        Search::create([
            'url' => 'general-settings'
        ]);
        Search::create([
            'url' => 'recaptcha-setting'
        ]);
        Search::create([
            'url' => 'email-setting'
        ]);


        // Static start
        Search::create([
            'url' => 'dashboard1'
        ]);
        Search::create([
            'url' => 'basic-pricing'
        ]);
        Search::create([
            'url' => 'pricing-table'
        ]);
        Search::create([
            'url' => 'pricing-table-2'
        ]);
        Search::create([
            'url' => 'pricing-table-3'
        ]);
        Search::create([
            'url' => 'pricing-table-4'
        ]);
        Search::create([
            'url' => 'form-elements'
        ]);
        Search::create([
            'url' => 'input-group'
        ]);
        Search::create([
            'url' => 'form-validations'
        ]);
        Search::create([
            'url' => 'signin'
        ]);
        Search::create([
            'url' => 'signup'
        ]);
        Search::create([
            'url' => 'reset-password'
        ]);
        Search::create([
            'url' => 'recover-password'
        ]);
        Search::create([
            'url' => 'tables'
        ]);
        Search::create([
            'url' => 'datatable'
        ]);
        Search::create([
            'url' => 'promotional'
        ]);
        Search::create([
            'url' => 'promotional-2'
        ]);
        Search::create([
            'url' => 'greetings'
        ]);
        Search::create([
            'url' => 'greetings-2'
        ]);
        Search::create([
            'url' => 'reset-password-email'
        ]);
        Search::create([
            'url' => 'email-verify'
        ]);
        Search::create([
            'url' => 'email-approved'
        ]);
        Search::create([
            'url' => 'deactive-account'
        ]);
        Search::create([
            'url' => 'terms-conditions'
        ]);
        Search::create([
            'url' => 'content-grid'
        ]);
        Search::create([
            'url' => 'content-typography'
        ]);
        Search::create([
            'url' => 'content-text'
        ]);
        Search::create([
            'url' => 'colors'
        ]);
        Search::create([
            'url' => 'profile'
        ]);
        Search::create([
            'url' => 'error-page403'
        ]);
        Search::create([
            'url' => 'error-page404'
        ]);
        Search::create([
            'url' => 'error-page500'
        ]);
        Search::create([
            'url' => 'error-page502'
        ]);
        Search::create([
            'url' => 'error-coming-soon'
        ]);
        Search::create([
            'url' => 'error-maintenance'
        ]);
        Search::create([
            'url' => 'faq-classic'
        ]);
        Search::create([
            'url' => 'faq'
        ]);
        Search::create([
            'url' => 'basic-timeline'
        ]);
        Search::create([
            'url' => 'split-timeline'
        ]);
        Search::create([
            'url' => 'centered-timeline'
        ]);
        Search::create([
            'url' => 'apex-chart'
        ]);
        Search::create([
            'url' => 'chartjs'
        ]);
        Search::create([
            'url' => '#'
        ]);
        Search::create([
            'url' => 'basic-cards'
        ]);
        Search::create([
            'url' => 'dashboard-cards'
        ]);
        Search::create([
            'url' => 'charts'
        ]);
        Search::create([
            'url' => 'analytics-charts'
        ]);
        Search::create([
            'url' => 'product-lists'
        ]);
        Search::create([
            'url' => 'product-grids'
        ]);
        Search::create([
            'url' => 'categories'
        ]);
        Search::create([
            'url' => 'add-category'
        ]);
        Search::create([
            'url' => 'orders'
        ]);
        Search::create([
            'url' => 'order-detsils'
        ]);
        Search::create([
            'url' => 'invoice'
        ]);
        Search::create([
            'url' => 'line-awesome'
        ]);
        Search::create([
            'url' => 'line-icon'
        ]);
        Search::create([
            'url' => 'font-awesome'
        ]);
        Search::create([
            'url' => 'alert'
        ]);
        Search::create([
            'url' => 'accordion'
        ]);
        Search::create([
            'url' => 'badges'
        ]);
        Search::create([
            'url' => 'buttons'
        ]);
        Search::create([
            'url' => 'carousels'
        ]);
        Search::create([
            'url' => 'modals'
        ]);
        Search::create([
            'url' => 'navs-tabs'
        ]);
        Search::create([
            'url' => 'navbars'
        ]);
        Search::create([
            'url' => 'paginations'
        ]);
        Search::create([
            'url' => 'tooltips'
        ]);
        Search::create([
            'url' => 'sweet-alert'
        ]);
        Search::create([
            'url' => 'progress'
        ]);
        Search::create([
            'url' => 'spiners'
        ]);
        Search::create([
            'url' => 'breadcrumb'
        ]);
        Search::create([
            'url' => 'notifications'
        ]);
        Search::create([
            'url' => 'slick'
        ]);
        Search::create([
            'url' => 'notification'
        ]);
        Search::create([
            'url' => 'chat'
        ]);
    }
}
