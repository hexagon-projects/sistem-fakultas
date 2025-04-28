<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Departement;
use App\Models\Faculty;
use App\Models\Usp;
use App\Models\Facility;
use App\Models\Achievement;
use App\Models\Organization;
use App\Models\Testimonial;
use App\Models\Portofolio;
use App\Models\Support;
use App\Models\Faq;
use App\Models\Agenda;
use App\Models\Post;
use App\Models\Ourteam;
use App\Models\Legal_document;
use App\Models\Partner;
use App\Models\Identity;
use App\Models\Slider;
use App\Models\Analytic;

/**
 * @OA\Info(
 *     title="Fakultas",
 *     version="0.1"
 * )
 */

class FakultasAPIController extends Controller
{

    /**
     * @OA\Get(
     *     path="/api/fakultas",
     *     @OA\Response(
     *         response="200",
     *         description="The data"
     *     )
     * )
     */
    public function getFakultas()
    {
        $fakultas = Faculty::first();
        return response()->json($fakultas);
    }
    
    /**
     * @OA\Get(
     *     path="/api/departement",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Departement"
     *     )
     * )
     */
    public function getDepartementAll()
    {
        $departement = Departement::first();
        return response()->json($departement);
    }
    
    /**
     * @OA\Get(
     *     path="/api/departement/{slug}",
     *     @OA\Response(
     *         response="200",
     *         description="Get One Data Departement by Slug"
     *     )
     * )
     */
    public function getDepartementSlug($slug)
    {
        $departement = Departement::where('slug', $slug)->first(); // Ambil data pertamanya

        if (!$departement) {
            return response()->json([
                'message' => 'Departement not found',
            ], 404);
        }

        return response()->json($departement);
    }

    /**
     * @OA\Get(
     *     path="/api/unggulan",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Unggulan"
     *     )
     * )
     */
    public function getUnggulanAll()
    {
        $usps = Usp::all();
        if (!$usps) {
            return response()->json([
                'message' => 'Unggulan not found',
            ], 404);
        }
        return response()->json($usps);
    }
    
    /**
     * @OA\Get(
     *     path="/api/unggulan-home",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Unggulan By Home"
     *     )
     * )
     */
    public function getUnggulanByHome()
    {
        $usps = Usp::where('home', '1')->get();
        if (!$usps) {
            return response()->json([
                'message' => 'Unggulan not found',
            ], 404);
        }
        return response()->json($usps);
    }
    
    /**
     * @OA\Get(
     *     path="/api/unggulan/{id}",
     *     @OA\Response(
     *         response="200",
     *         description="Get All By Departement ID"
     *     )
     * )
     */
    public function getUnggulanByDepeartmenet($id)
    {
        $usps = Usp::where('id_departement', $id)->get();
        if (!$usps) {
            return response()->json([
                'message' => 'Unggulan not found',
            ], 404);
        }
        return response()->json($usps);
    }
    
    /**
     * @OA\Get(
     *     path="/api/fasilitas",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Fasilitas"
     *     )
     * )
     */
    public function getFasilitasAll()
    {
        $fasilitas = Facility::all();
        if (!$fasilitas) {
            return response()->json([
                'message' => 'fasilitas not found',
            ], 404);
        }
        return response()->json($fasilitas);
    }
    
    /**
     * @OA\Get(
     *     path="/api/fasilitas-home",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Fasilitas by Home"
     *     )
     * )
     */
    public function getFasilitasByHome()
    {
        $fasilitas = Facility::where('home', '1');
        if (!$fasilitas) {
            return response()->json([
                'message' => 'fasilitas not found',
            ], 404);
        }
        return response()->json($fasilitas);
    }
    
    /**
     * @OA\Get(
     *     path="/api/fasilitas/{id}",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Fasilitas By Id Departmenet"
     *     )
     * )
     */
    public function getFasilitasByDepartement($id)
    {
        $fasilitas = Facility::where('id_departement', $id)->get();
        if (!$fasilitas) {
            return response()->json([
                'message' => 'fasilitas not found',
            ], 404);
        }
        return response()->json($fasilitas);
    }
    
    /**
     * @OA\Get(
     *     path="/api/prestasi",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Prestasi"
     *     )
     * )
     */
    public function getPrestasiAll()
    {
        $prestasi = Achievement::all();
        if (!$prestasi) {
            return response()->json([
                'message' => 'prestasi not found',
            ], 404);
        }
        return response()->json($prestasi);
    }
    
    
    /**
     * @OA\Get(
     *     path="/api/prestasi-home",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Prestasi By Home"
     *     )
     * )
     */
    public function getPrestasiByHome()
    {
        $prestasi = Achievement::where('home', '1')->get();
        if (!$prestasi) {
            return response()->json([
                'message' => 'prestasi not found',
            ], 404);
        }
        return response()->json($prestasi);
    }
    
    
    /**
     * @OA\Get(
     *     path="/api/prestasi/{id}",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Prestasi By Id Departement"
     *     )
     * )
     */
    public function getPrestasiByDepartement($id)
    {
        $prestasi = Achievement::where('id_departement', $id);
        if (!$prestasi) {
            return response()->json([
                'message' => 'prestasi not found',
            ], 404);
        }
        return response()->json($prestasi);
    }
    
    /**
     * @OA\Get(
     *     path="/api/organisasi",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Organisasi"
     *     )
     * )
     */
    public function getOrganisasiAll()
    {
        $organisasi = Organization::all();
        if (!$organisasi) {
            return response()->json([
                'message' => 'Organisasi not found',
            ], 404);
        }
        return response()->json($organisasi);
    }
    
    
    /**
     * @OA\Get(
     *     path="/api/organisasi-home",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Organisasi By Home"
     *     )
     * )
     */
    public function getOrganisasiByHome()
    {
        $organisasi = Organization::where('home', '1')->get();
        if (!$organisasi) {
            return response()->json([
                'message' => 'Organisasi not found',
            ], 404);
        }
        return response()->json($organisasi);
    }
    
    
    /**
     * @OA\Get(
     *     path="/api/organisasi/{id}",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Organisasi By Id Departement"
     *     )
     * )
     */
    public function getOrganisasiByDepartement($id)
    {
        $organisasi = Organization::where('id_departement', $id);
        if (!$organisasi) {
            return response()->json([
                'message' => 'Organisasi not found',
            ], 404);
        }
        return response()->json($organisasi);
    }
    
    /**
     * @OA\Get(
     *     path="/api/testimoni",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Testimoni"
     *     )
     * )
     */
    public function getTestimoniAll()
    {
        $testimoni = Testimonial::all();
        if (!$testimoni) {
            return response()->json([
                'message' => 'Testimoni not found',
            ], 404);
        }
        return response()->json($testimoni);
    }
        
    /**
     * @OA\Get(
     *     path="/api/testimoni-home",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Testimoni By Home"
     *     )
     * )
     */
    public function getTestimoniByHome()
    {
        $testimoni = Testimonial::where('home', '1')->get();
        if (!$testimoni) {
            return response()->json([
                'message' => 'Testimoni not found',
            ], 404);
        }
        return response()->json($testimoni);
    }
    
    
    /**
     * @OA\Get(
     *     path="/api/testimoni/{id}",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Testimoni By Id Departement"
     *     )
     * )
     */
    public function getTestimoniByDepartement($id)
    {
        $testimoni = Testimonial::where('id_departement', $id);
        if (!$testimoni) {
            return response()->json([
                'message' => 'testimoni not found',
            ], 404);
        }
        return response()->json($testimoni);
    }
    
    /**
     * @OA\Get(
     *     path="/api/portofolio",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Portofolio"
     *     )
     * )
     */
    public function getPortofolioAll()
    {
        $portofolio = Portofolio::all();
        if (!$portofolio) {
            return response()->json([
                'message' => 'portofolio not found',
            ], 404);
        }
        return response()->json($portofolio);
    }
        
    /**
     * @OA\Get(
     *     path="/api/portofolio-home",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Portofolio By Home"
     *     )
     * )
     */
    public function getPortofolioByHome()
    {
        $portofolio = Portofolio::where('home', '1')->get();
        if (!$portofolio) {
            return response()->json([
                'message' => 'portofolio not found',
            ], 404);
        }
        return response()->json($portofolio);
    }
    
    
    /**
     * @OA\Get(
     *     path="/api/portofolio/{id}",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Portofolio By Id Departement"
     *     )
     * )
     */
    public function getPortofolioByDepartement($id)
    {
        $portofolio = Portofolio::where('id_departement', $id);
        if (!$portofolio) {
            return response()->json([
                'message' => 'portofolio not found',
            ], 404);
        }
        return response()->json($portofolio);
    }
    
    /**
     * @OA\Get(
     *     path="/api/suport",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Suport"
     *     )
     * )
     */
    public function getSuportAll()
    {
        $suport = Support::all();
        if (!$suport) {
            return response()->json([
                'message' => 'suport not found',
            ], 404);
        }
        return response()->json($suport);
    }
        
    /**
     * @OA\Get(
     *     path="/api/suport-home",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Suport By Home"
     *     )
     * )
     */
    public function getSuportByHome()
    {
        $suport = Support::where('home', '1')->get();
        if (!$suport) {
            return response()->json([
                'message' => 'suport not found',
            ], 404);
        }
        return response()->json($suport);
    }
    
    
    /**
     * @OA\Get(
     *     path="/api/suport/{id}",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Suport By Id Departement"
     *     )
     * )
     */
    public function getSuportByDepartement($id)
    {
        $suport = Support::where('id_departement', $id);
        if (!$suport) {
            return response()->json([
                'message' => 'suport not found',
            ], 404);
        }
        return response()->json($suport);
    }
    
    /**
     * @OA\Get(
     *     path="/api/faqs",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Faqs"
     *     )
     * )
     */
    public function getFaqsAll()
    {
        $faqs = Faq::with('category')->get();

        $data = $faqs->map(function ($faq) {
            return [
                'id' => $faq->id,
                'question' => $faq->question,
                'answer' => $faq->answer,
                'category_name' => $faq->category ? $faq->category->name : null,
            ];
        });

        return response()->json($data);
    }
   
    /**
     * @OA\Get(
     *     path="/api/post",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Post"
     *     )
     * )
     */
    public function getPostAll()
    {
        $post = Post::all();
        if (!$post) {
            return response()->json([
                'message' => 'post not found',
            ], 404);
        }
        return response()->json($post);
    }

    /**
     * @OA\Get(
     *     path="/api/post/{slug}",
     *     @OA\Response(
     *         response="200",
     *         description="Get One Data POST by Slug"
     *     )
     * )
     */
    public function getPostSlug($slug)
    {
        $post = Post::where('slug', $slug)->first(); // Ambil data pertamanya

        if (!$post) {
            return response()->json([
                'message' => 'post not found',
            ], 404);
        }

        return response()->json($post);
    }
    
    /**
     * @OA\Get(
     *     path="/api/agenda",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Agenda"
     *     )
     * )
     */
    public function getAgendaAll()
    {
        $agenda = Agenda::all();
        if (!$agenda) {
            return response()->json([
                'message' => 'agenda not found',
            ], 404);
        }
        return response()->json($agenda);
    }

    /**
     * @OA\Get(
     *     path="/api/agenda/{slug}",
     *     @OA\Response(
     *         response="200",
     *         description="Get One Data AGENDA by Slug"
     *     )
     * )
     */
    public function getAgendaSlug($slug)
    {
        $agenda = Agenda::where('slug', $slug)->first(); // Ambil data pertamanya

        if (!$agenda) {
            return response()->json([
                'message' => 'agenda not found',
            ], 404);
        }

        return response()->json($agenda);
    }

    /**
     * @OA\Get(
     *     path="/api/team",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Ourteam"
     *     )
     * )
     */
    public function getTeamAll()
    {
        $team = Ourteam::all();
        if (!$team) {
            return response()->json([
                'message' => 'team not found',
            ], 404);
        }
        return response()->json($team);
    }
        
    /**
     * @OA\Get(
     *     path="/api/team-home",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Ourteam By Home"
     *     )
     * )
     */
    public function getTeamByHome()
    {
        $team = Ourteam::where('home', '1')->get();
        if (!$team) {
            return response()->json([
                'message' => 'team not found',
            ], 404);
        }
        return response()->json($team);
    }
    
    
    /**
     * @OA\Get(
     *     path="/api/team/{id}",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Ourteam By Id Departement"
     *     )
     * )
     */
    public function getTeamByDepartement($id)
    {
        $team = Ourteam::where('id_departement', $id);
        if (!$team) {
            return response()->json([
                'message' => 'team not found',
            ], 404);
        }
        return response()->json($team);
    }
    
    /**
     * @OA\Get(
     *     path="/api/legalitas",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Legalitas Dokumen"
     *     )
     * )
     */
    public function getLegalitasAll()
    {
        $legal = Legal_document::all();
        if (!$legal) {
            return response()->json([
                'message' => 'legal not found',
            ], 404);
        }
        return response()->json($legal);
    }
        
    /**
     * @OA\Get(
     *     path="/api/legalitas-home",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Legalitas By Home"
     *     )
     * )
     */
    public function getLegalitasByHome()
    {
        $legal = Legal_document::where('home', '1')->get();
        if (!$legal) {
            return response()->json([
                'message' => 'legal not found',
            ], 404);
        }
        return response()->json($legal);
    }
    
    
    /**
     * @OA\Get(
     *     path="/api/legalitas/{id}",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data Legalitas By Id Departement"
     *     )
     * )
     */
    public function getLegalitasByDepartement($id)
    {
        $legalitas = Legal_document::where('id_departement', $id);
        if (!$legalitas) {
            return response()->json([
                'message' => 'legalitas not found',
            ], 404);
        }
        return response()->json($legalitas);
    }
    
    /**
     * @OA\Get(
     *     path="/api/partner",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data partner Dokumen"
     *     )
     * )
     */
    public function getPartnerAll()
    {
        $partner = Partner::all();
        if (!$partner) {
            return response()->json([
                'message' => 'partner not found',
            ], 404);
        }
        return response()->json($partner);
    }
        
    /**
     * @OA\Get(
     *     path="/api/partner-home",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data partner By Home"
     *     )
     * )
     */
    public function getPartnerByHome()
    {
        $partner = Partner::where('home', '1')->get();
        if (!$partner) {
            return response()->json([
                'message' => 'partner not found',
            ], 404);
        }
        return response()->json($partner);
    }
    
    
    /**
     * @OA\Get(
     *     path="/api/partner/{id}",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data partner By Id Departement"
     *     )
     * )
     */
    public function getPartnerByDepartement($id)
    {
        $partner = Partner::where('id_departement', $id);
        if (!$partner) {
            return response()->json([
                'message' => 'partner not found',
            ], 404);
        }
        return response()->json($partner);
    }
    
    /**
     * @OA\Get(
     *     path="/api/indentity/{id}",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data indentity one"
     *     )
     * )
     */
    public function getIdentityOne()
    {
        $indentity = Identity::first();
        if (!$indentity) {
            return response()->json([
                'message' => 'indentity not found',
            ], 404);
        }
        return response()->json($indentity);
    }

    /**
     * @OA\Get(
     *     path="/api/slider",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data slider Dokumen"
     *     )
     * )
     */
    public function getSliderAll()
    {
        $slider = Slider::all();
        if (!$slider) {
            return response()->json([
                'message' => 'slider not found',
            ], 404);
        }
        return response()->json($slider);
    }
        
    /**
     * @OA\Get(
     *     path="/api/slider-home",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data slider By Home"
     *     )
     * )
     */
    public function getSliderByHome()
    {
        $slider = Slider::where('home', '1')->get();
        if (!$slider) {
            return response()->json([
                'message' => 'slider not found',
            ], 404);
        }
        return response()->json($slider);
    }
    
    
    /**
     * @OA\Get(
     *     path="/api/slider/{id}",
     *     @OA\Response(
     *         response="200",
     *         description="Get All Data slider By Id Departement"
     *     )
     * )
     */
    public function getSliderByDepartement($id)
    {
        $slider = Slider::where('id_departement', $id);
        if (!$slider) {
            return response()->json([
                'message' => 'slider not found',
            ], 404);
        }
        return response()->json($slider);
    }
    
    /**
     * @OA\Get(
     *     path="/api/analytics",
     *     @OA\Response(
     *         response="200",
     *         description="Get analytics"
     *     )
     * )
     */
    public function getAnalytics()
    {
        $analytics = Analytic::first();
        if (!$analytics) {
            return response()->json([
                'message' => 'analytics not found',
            ], 404);
        }
        return response()->json($analytics);
    }

}
