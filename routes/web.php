<?php

use App\Http\Livewire\Backend\Blog\BlogComponent;
use App\Http\Livewire\Backend\BlogManagement\CreateBlogComponent;
use App\Http\Livewire\Backend\BlogManagement\EditBlogsComponent;
use App\Http\Livewire\Backend\BlogManagement\ManageBlogsComponent;
use App\Http\Livewire\Backend\Community\CommunityEmpowerment;
use App\Http\Livewire\Backend\Community\CreateCommunityEmpowerment;
use App\Http\Livewire\Backend\Community\EditCommunityEmpowerment;
use App\Http\Livewire\Backend\CompanyInfo\CompanyInfoComponent;
use App\Http\Livewire\Backend\Dashboard\DashboardPageComponent;
use App\Http\Livewire\Backend\HomeSlider\CreateSliderComponent;
use App\Http\Livewire\Backend\HomeSlider\HomeSliderComponent;
use App\Http\Livewire\Backend\Operations\CreateOperationsComponent;
use App\Http\Livewire\Backend\Operations\EditOperationsComponent;
use App\Http\Livewire\Backend\Operations\OperationsComponent;
use App\Http\Livewire\Backend\Projects\CreateProjectComponent;
use App\Http\Livewire\Backend\Projects\EditProjectComponent;
use App\Http\Livewire\Backend\Projects\ManageProjectComponent;
use App\Http\Livewire\Backend\ServiceRequest\ServiceRequestComponent;
use App\Http\Livewire\Backend\Services\CreateServiceComponent;
use App\Http\Livewire\Backend\Services\ServiceComponent;
use App\Http\Livewire\Backend\Services\UpdateServiceComponent;
use App\Http\Livewire\Frontend\AboutUs\WhoWeAreComponent;
use App\Http\Livewire\Frontend\AboutUs\Management;
use App\Http\Livewire\Frontend\AboutUs\OurPresence;
use App\Http\Livewire\Frontend\AboutUs\EnergySolutions;
use App\Http\Livewire\Frontend\AboutUs\Commitment;
use App\Http\Livewire\Frontend\AboutUs\PartnerWithUs;
use App\Http\Livewire\Frontend\AboutUs\Expanding;
use App\Http\Livewire\Frontend\Blog\BlogPageComponent;
use App\Http\Livewire\Frontend\Blog\SingleBlogComponent;
use App\Http\Livewire\Frontend\WorkWithUs\Careers;
use App\Http\Livewire\Frontend\WorkWithUs\Procurement;
use App\Http\Livewire\Frontend\WorkWithUs\Testimonials;
use App\Http\Livewire\Frontend\ContactUs\ContactUsPageComponent;
use App\Http\Livewire\Frontend\DRC\DRCContact;
use App\Http\Livewire\Frontend\Homepage\HomePageComponent;
use App\Http\Livewire\Frontend\Investor\InvestorComponent;
use App\Http\Livewire\Frontend\Kenya\KenyanContact;
use App\Http\Livewire\Frontend\Media\GalleryComponent;
use App\Http\Livewire\Frontend\Media\MediaPageComponent;
use App\Http\Livewire\Frontend\Media\PressReleases;
use App\Http\Livewire\Frontend\Operations\OperationDetails;
use App\Http\Livewire\Frontend\Services\ServicesPageComponent;
use App\Http\Livewire\Frontend\Services\ServiceDetailsComponent;
use App\Http\Livewire\Frontend\Projects\ProjectDetailsComponent;
use App\Http\Livewire\Frontend\Projects\ProjectListingComponent;
use App\Http\Livewire\Frontend\SouthSudan\SouthSudanContact;
use App\Http\Livewire\Frontend\Sustainability\SustainabilityDetailsPage;
use App\Http\Livewire\Frontend\Sustainability\SustainabilityPageComponent;
use App\Models\CompanyInfomation;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(["blockPhpRequests"])->group(function () {

    Route::get('/register', function () {
        return view('auth.login');
    });

    Route::get('/', HomePageComponent::class)->name('homepage');
    Route::get('/who-we-are', WhoWeAreComponent::class)->name('who.we.are');
    Route::get('/our-presence', OurPresence::class)->name('our.presence');
    Route::get('/energy-solutions', EnergySolutions::class)->name('energy.solutions');
    Route::get('/commitment', Commitment::class)->name('commitment');
    Route::get('/partner-with-us', PartnerWithUs::class)->name('partner.with.us');
    Route::get('/expanding', Expanding::class)->name('expanding');
    Route::get('/services', ServicesPageComponent::class)->name('services');
    Route::get('/sustainability', SustainabilityPageComponent::class)->name('sustainability');
    Route::get('/sustainability/{slug}', SustainabilityDetailsPage::class)->name('sustainability.details');
    Route::get('/media', MediaPageComponent::class)->name('media');
    Route::get('/careers', Careers::class)->name('careers');
    Route::get('/procurement', Procurement::class)->name('procurement');
    Route::get('/testimonials', Testimonials::class)->name('testimonials');
    Route::get('/contact-us', ContactUsPageComponent::class)->name('contact.us');
    Route::get('/service-details/{slug}', ServiceDetailsComponent::class)->name('service.details');

    Route::get('/investor', InvestorComponent::class)->name('investor');


    Route::get('/press-releases', PressReleases::class)->name('press.releases');

    Route::get('/blog', BlogPageComponent::class)->name('blog.listing');

    Route::get('/single-blog/{slug}', SingleBlogComponent::class)->name('single.blog');

    Route::get('/project-listing', ProjectListingComponent::class)->name('project.listing');

    Route::get('/project-details/{slug}', ProjectDetailsComponent::class)->name('project.details');

    Route::get('/operation-details/{slug}', OperationDetails::class)->name('operation.details');

    Route::get('/gallery', GalleryComponent::class)->name('gallery');

    Route::get('/kenya-contact', KenyanContact::class)->name('kenya.contact');

    Route::get('/south-sudan-contact', SouthSudanContact::class)->name('south.sudan.contact');

    Route::get('/DRC-contact', DRCContact::class)->name('drc.contact');

    Route::get('/management', Management::class)->name('management');

    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
        Route::get('/dashboard', DashboardPageComponent::class)->name('dashboard');

        Route::get('/service-management', ServiceComponent::class)->name('service.management');

        Route::get('/create-service', CreateServiceComponent::class)->name('create.service');

        Route::get('/company-information', CompanyInfoComponent::class)->name('company.info');

        Route::get('/update-service/{service}', UpdateServiceComponent::class)->name('update.service');

        Route::get('/manage-projects', ManageProjectComponent::class)->name('manage.project');

        Route::get('/create-projects', CreateProjectComponent::class)->name('create.project');

        Route::get('/update-project/{slug}', EditProjectComponent::class)->name('edit.project');

        Route::get('/manage-blog', ManageBlogsComponent::class)->name('manage.blog');

        Route::get('/create-blog', CreateBlogComponent::class)->name('blog.create');

        Route::get('/edit-blog/{slug}', EditBlogsComponent::class)->name('blog.edit');

        Route::get('/service-request', ServiceRequestComponent::class)->name('service-request');

        Route::get('/community-empowerment', CommunityEmpowerment::class)->name('community.empowerment');

        Route::get('/create-community-empowerment', CreateCommunityEmpowerment::class)->name('create.community.empowerment');
        Route::get('/edit-community-empowerment/{slug}', EditCommunityEmpowerment::class)->name('edit.community.empowerment');

        Route::get('/manage-operations', OperationsComponent::class)->name('manage.operation');
        Route::get('/create-operation', CreateOperationsComponent::class)->name('create.operation');
        Route::get('/edit-operation/{slug}', EditOperationsComponent::class)->name('edit.operation');
    });
});
