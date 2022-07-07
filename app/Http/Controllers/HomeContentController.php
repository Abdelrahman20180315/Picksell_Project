<?php

namespace App\Http\Controllers;

use App\Models\AfterPlatformEnvironment;
use App\Models\BeforeFooter;
use App\Models\Footer;
use App\Models\Introsection;
use App\Models\MiddlePage;
use App\Models\PlatformEnvironment;
use App\Models\Slider;
use App\Models\StartSteps;
use App\Models\UsersOpinions;
use Illuminate\Http\Request;

class HomeContentController extends Controller
{
    //

    //Slider
    public function showhomeslider()
    {
        $data = Slider::all();
        return view('backend.Home.showhomeslider',compact('data'));
    }
    public function addhomeslider()
    {
        return view('backend.Home.addhomeslider');
    }
    public function addhomesliderdata(Request $request)
    {
        $data = new Slider();
        $data->Title = $request->Title;
        $data->Text = $request->Text;
        $data->save();
        return redirect()->back();
    }
    public function edithomeslider($id)
    {
        $data = Slider::find($id);
        return view('backend.Home.edithomeslider',compact('data'));
    }
    public function addedithomesliderdata($id , Request $request)
    {
        $data = Slider::find($id);
        $data->Title = $request->Title;
        $data->Text = $request->Text;
        $data->save();
        return redirect()->back();
    }
    public function deletehomeslider($id)
    {
        $data = Slider::find($id);
        $data->delete();
        return redirect()->back();
    }


    //Intro Section

    public function showhomeintrosection()
    {
        $data = Introsection::all();
        return view('backend.Home.showhomeintrosection',compact('data'));
    }
    public function addhomeintrosection()
    {
        return view('backend.Home.addhomeintrosection');
    }

    public function addhomeintrosectiondata(Request $request)
    {
        $data = new Introsection();
        $image = $request->IntroImage;
        $imageurl = time().'.'.$image->getClientOriginalExtension();
        $image->move('IntrosectionFolder', $imageurl);
        $data->IntroImage = $imageurl;
        $data->FirstTitle = $request->FirstTitle;
        $data->FirstText = $request->FirstText;
        $data->SecondTitle = $request->SecondTitle;
        $data->SecondText = $request->SecondText;        
        $data->save();
        return redirect()->back();
    }
    public function edithomeintrosection($id)
    {
        $data = Introsection::find($id);
        return view('backend.Home.edithomeintrosection',compact('data'));
    }
    public function addedithomeintrosectiondata($id , Request $request)
    {
        $data = Introsection::find($id);
        $image = $request->IntroImage;
        $imageurl = time().'.'.$image->getClientOriginalExtension();
        $image->move('IntrosectionFolder',$imageurl);
        $data->IntroImage = $imageurl;
        $data->FirstTitle = $request->FirstTitle;
        $data->FirstText = $request->FirstText;
        $data->SecondTitle = $request->SecondTitle;
        $data->SecondText = $request->SecondText;        
        $data->save();
        return redirect()->back();
    }
    public function deletehomeintrosection($id)
    {
        $data = Introsection::find($id);
        $data->delete();
        return redirect()->back();
    }

    //Middle Page
    public function showhomemiddlepage()
    {
        $data = MiddlePage::all();
        return view('backend.Home.showhomemiddlepage',compact('data'));
    }
    public function addhomemiddlepage()
    {
        return view('backend.Home.addhomemiddlepage');
    }

    public function addhomemiddlepagedata(Request $request)
    {
        $data = new MiddlePage();
        $data->MiddleTitle = $request->MiddleTitle;
        $data->MiddleText = $request->MiddleText;     
        $data->save();
        return redirect()->back();
    }
    public function edithomemiddlepage($id)
    {
        $data = MiddlePage::find($id);
        return view('backend.Home.edithomemiddlepage',compact('data'));
    }
    public function addedithomemiddlepagedata($id , Request $request)
    {
        $data = MiddlePage::find($id);
        $data->MiddleTitle = $request->MiddleTitle;
        $data->MiddleText = $request->MiddleText;     
        $data->save();
        return redirect()->back();
    }
    public function deletehomemiddlepage($id)
    {
        $data = MiddlePage::find($id);
        $data->delete();
        return redirect()->back();
    }


    //Platform Environment
    public function showhomeplatformenvironment()
    {
        $data = PlatformEnvironment::all();
        return view('backend.Home.showhomeplatformenvironment',compact('data'));
    }
    public function addhomeplatformenvironment()
    {
        return view('backend.Home.addhomeplatformenvironment');
    }

    public function addhomeplatformenvironmentdata(Request $request)
    {
        $data = new PlatformEnvironment();
        $image= $request->PlatformImage;
        $imageurl = time().'.'.$image->getClientOriginalExtension();
        $image->move('PlatformEnvironmentFolder',$imageurl);
        $data->PlatformImage = $imageurl;
        $data->PlatformTitle = $request->PlatformTitle; 
        $data->PlatformText = $request->PlatformText;
        $data->save();
        return redirect()->back();
    }
    public function edithomeplatformenvironment($id)
    {
        $data = PlatformEnvironment::find($id);
        return view('backend.Home.edithomeplatformenvironment',compact('data'));
    }
    public function addedithomeplatformenvironmentdata($id , Request $request)
    {
        $data = PlatformEnvironment::find($id);
        $image= $request->PlatformImage;
        $imageurl = time().'.'.$image->getClientOriginalExtension();
        $image->move('PlatformEnvironmentFolder',$imageurl);
        $data->PlatformImage = $imageurl;
        $data->PlatformTitle = $request->PlatformTitle; 
        $data->PlatformText = $request->PlatformText;
        $data->save();
        return redirect()->back();
    }
    public function deletehomeplatformenvironment($id)
    {
        $data = PlatformEnvironment::find($id);
        $data->delete();
        return redirect()->back();
    }


    //After Platform Environment
    public function showafterhomeenvironment()
    {
        $data = AfterPlatformEnvironment::all();
        return view('backend.Home.showafterhomeenvironment',compact('data'));
    }
    public function addafterhomeenvironment()
    {
        return view('backend.Home.addafterhomeenvironment');
    }

    public function addafterhomeenvironmentdata(Request $request)
    {
        $data = new AfterPlatformEnvironment();
        $data->AfterPlatformTitle = $request->AfterPlatformTitle; 
        $data->AfterPlatformText = $request->AfterPlatformText;
        $data->save();
        return redirect()->back();
    }
    public function editafterhomeenvironment($id)
    {
        $data = AfterPlatformEnvironment::find($id);
        return view('backend.Home.editafterhomeenvironment',compact('data'));
    }
    public function addeditafterhomeenvironmentdata($id , Request $request)
    {
        $data = AfterPlatformEnvironment::find($id);
        $data->AfterPlatformTitle = $request->AfterPlatformTitle; 
        $data->AfterPlatformText = $request->AfterPlatformText;
        $data->save();
        return redirect()->back();
    }
    public function deleteafterhomeenvironment($id)
    {
        $data = AfterPlatformEnvironment::find($id);
        $data->delete();
        return redirect()->back();
    }

    //Start Steps
    public function showhomestartsteps()
    {
        $data = StartSteps::all();
        return view('backend.Home.showhomestartsteps',compact('data'));
    }
    public function addhomestartsteps()
    {
        return view('backend.Home.addhomestartsteps');
    }

    public function addhomestartstepsdata(Request $request)
    {
        $data = new StartSteps();
        $image= $request->StartImage;
        $imageurl = time().'.'.$image->getClientOriginalExtension();
        $image->move('StartStepsFolder',$imageurl);
        $data->StartImage = $imageurl;
        $data->StartText = $request->StartText; 
        $data->save();
        return redirect()->back();
    }
    public function edithomestartsteps($id)
    {
        $data = PlatformEnvironment::find($id);
        return view('backend.Home.edithomestartsteps',compact('data'));
    }
    public function addedithomestartstepsdata($id , Request $request)
    {
        $data = StartSteps::find($id);
        $image= $request->StartImage;
        $imageurl = time().'.'.$image->getClientOriginalExtension();
        $image->move('StartStepsFolder',$imageurl);
        $data->StartImage = $imageurl;
        $data->StartText = $request->StartText; 
        $data->save();
        return redirect()->back();
    }
    public function deletehomestartsteps($id)
    {
        $data = StartSteps::find($id);
        $data->delete();
        return redirect()->back();
    }


    //User Opinions
    public function showhomeuseropinions()
    {
        $data = UsersOpinions::all();
        return view('backend.Home.showhomeuseropinions',compact('data'));
    }
    public function addhomeuseropinions()
    {
        return view('backend.Home.addhomeuseropinions');
    }

    public function addhomeuseropinionsdata(Request $request)
    {
        $data = new UsersOpinions();
        $image= $request->userimage;
        $imageurl = time().'.'.$image->getClientOriginalExtension();
        $image->move('UsersOpinionsFolder',$imageurl);
        $data->userimage = $imageurl;
        $data->OpinionText = $request->OpinionText; 
        $data->username = $request->username; 
        $data->save();
        return redirect()->back();
    }
    public function edithomeuseropinions($id)
    {
        $data = UsersOpinions::find($id);
        return view('backend.Home.edithomeuseropinions',compact('data'));
    }
    public function addedithomeuseropinionsdata($id , Request $request)
    {
        $data = UsersOpinions::find($id);
        $image= $request->userimage;
        $imageurl = time().'.'.$image->getClientOriginalExtension();
        $image->move('UsersOpinionsFolder',$imageurl);
        $data->userimage = $imageurl;
        $data->OpinionText = $request->OpinionText; 
        $data->username = $request->username; 
        $data->save();
        return redirect()->back();
    }
    public function deletehomeuseropinions($id)
    {
        $data = UsersOpinions::find($id);
        $data->delete();
        return redirect()->back();
    }

    //Before Footer
    public function showhomebeforefooter()
    {
        $data = BeforeFooter::all();
        return view('backend.Home.showhomebeforefooter',compact('data'));
    }
    public function addhomebeforefooter()
    {
        return view('backend.Home.addhomebeforefooter');
    }

    public function addhomebeforefooterdata(Request $request)
    {
        $data = new BeforeFooter();
        $data->beforefootertitle = $request->beforefootertitle; 
        $data->beforefootertext = $request->beforefootertext; 
        $data->save();
        return redirect()->back();
    }
    public function edithomebeforefooter($id)
    {
        $data = BeforeFooter::find($id);
        return view('backend.Home.edithomebeforefooter',compact('data'));
    }
    public function addedithomebeforefooterdata($id , Request $request)
    {
        $data = BeforeFooter::find($id);
        $data->beforefootertitle = $request->beforefootertitle; 
        $data->beforefootertext = $request->beforefootertext; 
        $data->save();
        return redirect()->back();
    }
    public function deletehomebeforefooter($id)
    {
        $data = BeforeFooter::find($id);
        $data->delete();
        return redirect()->back();
    }

    //Footer
    public function showhomefooter()
    {
        $data = Footer::all();
        return view('backend.Home.showhomefooter',compact('data'));
    }
    public function addhomefooter()
    {
        return view('backend.Home.addhomefooter');
    }

    public function addhomefooterdata(Request $request)
    {
        $data = new Footer();
        $data->websiteurl = $request->websiteurl; 
        $data->footertext = $request->footertext; 
        $data->email = $request->email; 
        $data->copywrite = $request->copywrite; 
        $data->save();
        return redirect()->back();
    }
    public function edithomefooter($id)
    {
        $data = Footer::find($id);
        return view('backend.Home.edithomefooter',compact('data'));
    }
    public function addedithomefooterdata($id , Request $request)
    {
        $data = Footer::find($id);
        $data->websiteurl = $request->websiteurl; 
        $data->footertext = $request->footertext; 
        $data->email = $request->email; 
        $data->copywrite = $request->copywrite; 
        $data->save();
        return redirect()->back();
    }
    public function deletehomefooter($id)
    {
        $data = Footer::find($id);
        $data->delete();
        return redirect()->back();
    }







}



























